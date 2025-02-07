<!DOCTYPE html>
<html>
<head>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .chart-line {
            fill: none;
            stroke: url(#line-gradient);
            stroke-width: 2;
        }

        .chart-area {
            fill: url(#area-gradient);
            opacity: 0.1;
        }

        .hover-dot {
            fill: white;
            stroke: #2c5aa2;
            stroke-width: 2;
            r: 4;
            opacity: 0;
        }

        .hover-line {
            stroke: #2c5aa2;
            stroke-width: 1;
            stroke-dasharray: 3,3;
            opacity: 0;
        }

        .tooltip {
            position: absolute;
            background: white;
            padding: 8px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            pointer-events: none;
            font-size: 14px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            opacity: 0;
            transition: opacity 0.2s;
        }

        .axis line, .axis path {
            stroke: #e5e7eb;
        }

        .axis text {
            fill: #6b7280;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="max-w-4xl mx-auto p-4">
        <div class="rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="p-4 bg-gradient-to-r from-blue-700 to-red-600 text-white">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-sm font-medium">USD to INR Live Chart</h2>
                    <button class="bg-white/10 px-3 py-1 rounded text-sm">Today ▼</button>
                </div>
                <div class="text-2xl font-bold">
                    1<span class="text-lg">USD</span> = <span id="current-rate">92.4</span><span class="text-lg">INR</span>
                </div>
            </div>
            
            <!-- Chart -->
            <div id="chart" class="h-64 relative bg-white"></div>
        </div>
    </div>

    <script>
        const data = [
            { date: '7 Sep', value: 95.5, time: '09:30' },
            { date: '8 Sep', value: 96.2, time: '10:00' },
            { date: '9 Sep', value: 97.5, time: '10:30' },
            { date: '10 Sep', value: 98.1, time: '11:00' },
            { date: '11 Sep', value: 98.4, time: '11:30' },
            { date: '12 Sep', value: 99.2, time: '12:00' },
            { date: '13 Sep', value: 92.4, time: '07:40' },
            { date: '14 Sep', value: 92.8, time: '08:00' }
        ];

        function createChart() {
            // Clear previous chart
            d3.select("#chart").html("");

            const margin = { top: 20, right: 30, bottom: 30, left: 50 };
            const width = document.getElementById('chart').clientWidth - margin.left - margin.right;
            const height = document.getElementById('chart').clientHeight - margin.top - margin.bottom;

            const svg = d3.select("#chart")
                .append("svg")
                .attr("width", width + margin.left + margin.right)
                .attr("height", height + margin.top + margin.bottom)
                .append("g")
                .attr("transform", `translate(${margin.left},${margin.top})`);

            // Create gradients
            const defs = svg.append("defs");

            // Line gradient
            const lineGradient = defs.append("linearGradient")
                .attr("id", "line-gradient")
                .attr("gradientUnits", "userSpaceOnUse")
                .attr("x1", 0)
                .attr("y1", 0)
                .attr("x2", width)
                .attr("y2", 0);

            lineGradient.append("stop")
                .attr("offset", "0%")
                .attr("stop-color", "#0E51A0");

            lineGradient.append("stop")
                .attr("offset", "100%")
                .attr("stop-color", "#E31D1C");

            // Area gradient
            const areaGradient = defs.append("linearGradient")
                .attr("id", "area-gradient")
                .attr("gradientUnits", "userSpaceOnUse")
                .attr("x1", 0)
                .attr("y1", 0)
                .attr("x2", 0)
                .attr("y2", height);

            areaGradient.append("stop")
                .attr("offset", "0%")
                .attr("stop-color", "#2c5aa2");

            areaGradient.append("stop")
                .attr("offset", "100%")
                .attr("stop-color", "#2c5aa2")
                .attr("stop-opacity", 0);

            // Scales
            const x = d3.scalePoint()
                .domain(data.map(d => d.date))
                .range([0, width])
                .padding(0.5);

            const y = d3.scaleLinear()
                .domain([d3.min(data, d => d.value) * 0.995, d3.max(data, d => d.value) * 1.005])
                .range([height, 0]);

            // Create line and area
            const line = d3.line()
                .x(d => x(d.date))
                .y(d => y(d.value))
                .curve(d3.curveMonotoneX);

            const area = d3.area()
                .x(d => x(d.date))
                .y0(height)
                .y1(d => y(d.value))
                .curve(d3.curveMonotoneX);

            // Add area
            svg.append("path")
                .datum(data)
                .attr("class", "chart-area")
                .attr("d", area);

            // Add line
            svg.append("path")
                .datum(data)
                .attr("class", "chart-line")
                .attr("d", line);

            // Add axes
            svg.append("g")
                .attr("class", "axis")
                .attr("transform", `translate(0,${height})`)
                .call(d3.axisBottom(x));

            svg.append("g")
                .attr("class", "axis")
                .call(d3.axisLeft(y)
                    .ticks(5)
                    .tickFormat(d => `₹${d.toFixed(1)}`));

            // Add hover elements
            const hoverLine = svg.append("line")
                .attr("class", "hover-line");

            const hoverDot = svg.append("circle")
                .attr("class", "hover-dot");

            const tooltip = d3.select("#chart")
                .append("div")
                .attr("class", "tooltip");

            // Add hover interaction
            svg.append("rect")
                .attr("width", width)
                .attr("height", height)
                .attr("fill", "none")
                .attr("pointer-events", "all")
                .on("mousemove", function(event) {
                    const [mouseX] = d3.pointer(event);
                    const xDate = x.domain()[d3.bisector(d => x(d.date)).left(data, mouseX)];
                    const d = data.find(d => d.date === xDate);

                    if (d) {
                        hoverLine
                            .attr("x1", x(d.date))
                            .attr("x2", x(d.date))
                            .attr("y1", 0)
                            .attr("y2", height)
                            .style("opacity", 1);

                        hoverDot
                            .attr("cx", x(d.date))
                            .attr("cy", y(d.value))
                            .style("opacity", 1);

                        tooltip
                            .style("left", `${event.pageX + 10}px`)
                            .style("top", `${event.pageY - 70}px`)
                            .style("opacity", 1)
                            .html(`
                                <div class="text-gray-500 text-xs">${d.date} ${d.time}</div>
                                <div class="font-semibold">₹${d.value.toFixed(2)}</div>
                            `);
                    }
                })
                .on("mouseleave", function() {
                    hoverLine.style("opacity", 0);
                    hoverDot.style("opacity", 0);
                    tooltip.style("opacity", 0);
                });
        }

        // Initialize chart and handle resize
        createChart();
        window.addEventListener('resize', createChart);
    </script>
</body>
</html>