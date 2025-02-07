<style>
    .line {
        fill: none;
        stroke: #2c5aa2;
        stroke-width: 2;
    }

    .area {
        fill: #2c5aa2;
        opacity: 0.1;
    }

    .dot {
        fill: white;
        stroke: #2c5aa2;
        stroke-width: 2;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.2s;
    }

    .tooltip {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 8px 12px;
        pointer-events: none;
    }

    .tooltip-date {
        color: #6b7280;
        font-size: 12px;
    }

    .tooltip-value {
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
    }

    .tooltip-change {
        font-size: 12px;
    }

    .hover-line {
        stroke: #2c5aa2;
        stroke-width: 2;
        pointer-events: none;
        opacity: 0;
    }
</style>
<section>
    <h1 class="text-xl md:text-3xl text-black font-bold tracking-tight mb-6"
        style="word-wrap: break-word;background: linear-gradient(26deg, #0E51A0 1.1%, #E3373A 40.49%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
        <?php echo $currencyfull ?> Rates in India Today
    </h1>
    <div class="w-full rounded-2xl shadow-lg overflow-hidden">
        <!-- Header Section with gradient background -->
        <div style="background: linear-gradient(329deg, #0E51A0 -43.1%, #E31D1C 144.49%);" class="p-4 text-white">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-sm font-medium"><?php echo $currency ?> to INR Live Chart</h1>
            </div>
            <div class="text-2xl font-bold mb-1">
                1<span class="text-lg"><?php echo $currency ?></span> = <span id="current-rate"></span><span
                    class="text-lg">INR</span>
            </div>
        </div>
        <!-- Graph Section -->
        <div class="">
            <div id="chart" class="h-[300px]"></div>
        </div>
    </div>
    <!-- bottom section -->
    <!-- <div class="w-full rounded-2xl overflow-hidden mt-5 border relative">
        <div style="background: linear-gradient(329deg, rgba(14, 81, 160, 0.10) -43.1%, rgba(227, 29, 28, 0.10) 144.49%);"
            class="rounded-2xl overflow-hidden border">
            <div class="p-4">
            
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-6">
             
                    <div class="flex items-start gap-3 flex-1">
                        <div class="flex -space-x-5">
                            <div class="w-10 h-10 bg-[#20BC73] rounded-lg flex items-center justify-center z-10">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                            </div>
                            <div class="w-10 h-10 bg-[#0E51A0] rounded-lg flex items-center justify-center ">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm">Get <?php echo $currency ?> Rate alerts on your WhatsApp and Email instantly
                        </p>
                    </div>
              
                    <button style="background: linear-gradient(329deg, #0E51A0 -43.1%, #E31D1C 144.49%);"
                        class="w-full md:w-auto text-white px-4 py-3 rounded-xl text-sm font-medium flex items-center justify-center gap-2 whitespace-nowrap">
                        Track <?php echo $currency ?> Rates
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="currentColor" class="w-5 h-5">
                            <path
                                d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div> -->
    <p
        class="w-full lg:w-[980px] text-gray-400 text-sm font-normal mt-3 mb-3 font-['Plus Jakarta Sans'] pr-1 leading-[21px]">
        We will help you to Buy, Sell or Transfer your preferred currency at Best Rate
    </p>
</section>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/d3/7.8.5/d3.min.js"></script>
<script>

    // Function to create chart with D3.js
    function createChart(data) {
        // Clear previous chart
        d3.select("#chart").selectAll("*").remove();
        // Chart dimensions and margins
        const margin = { top: 30, right: 0, bottom: 30, left: 50 };
        const width = document.getElementById('chart').clientWidth - margin.left - margin.right;
        const height = 250;
        // Create SVG container
        const svg = d3.select("#chart")
            .append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`);
        // Set up scales for x and y axes
        const x = d3.scalePoint()
            .domain(data.map(d => d.date))
            .range([0, width])
            .padding(0.3);

        const y = d3.scaleLinear()
            .domain([d3.min(data.map(d => d.rate)) * 0.995, d3.max(data.map(d => d.rate)) * 1.005])
            .range([height, 0]);


        // Create area under the line
        const area = d3.area()
            .x(d => x(d.date))
            .y0(height)
            .y1(d => y(d.rate))
            .curve(d3.curveMonotoneX);

        // Add the area
        svg.append("path")
            .datum(data)
            .attr("class", "area")
            .attr("d", area);

        // Create line path
        const line = d3.line()
            .x(d => x(d.date))
            .y(d => y(d.rate))
            .curve(d3.curveMonotoneX);

        // Add axes
        svg.append("g")
            .attr("transform", `translate(0,${height})`)
            .call(d3.axisBottom(x)
                .tickSize(0))
            .call(g => g.select(".domain").remove())
            .selectAll("text")
            .style("font-size", function () {
                const width = window.innerWidth; // Get screen width
                return width < 768 ? "6px" : "12px"; // Adjust font size for small screens (<768px)
            });

        svg.append("g")
            .call(d3.axisLeft(y)
                .ticks(5)
                .tickSize(0)
                .tickFormat(d => `₹${d.toFixed(1)}`))
            .call(g => g.select(".domain").remove())
            .selectAll("text") // Select all text elements on the axis
            .style("font-size", function () {
                const width = window.innerWidth; // Get screen width
                return width < 768 ? "6px" : "12px"; // Adjust font size for small screens (<768px)
            });

        // Add the line path
        svg.append("path")
            .datum(data)
            .attr("class", "line")
            .attr("d", line);

        // Hover effects for tooltips and hover lines
        const hoverLineLength = 50; // Adjust this value to make the line longer or shorter

        const hoverLine = svg.append("line")
            .attr("class", "hover-line")
            .attr("y1", 0)
            .attr("y2", hoverLineLength); // Initial length set to our constant

        const dots = svg.selectAll(".dot")
            .data(data)
            .enter()
            .append("circle")
            .attr("class", "dot")
            .attr("cx", d => x(d.date))
            .attr("cy", d => y(d.rate))
            .attr("r", 4);

        const tooltip = d3.select("#chart")
            .append("div")
            .attr("class", "tooltip")
            .style("position", "absolute")
            .style("visibility", "hidden");

        // Add hover area
        svg.append("rect")
            .attr("width", width)
            .attr("height", height)
            .attr("fill", "none")
            .attr("pointer-events", "all")
            .on("mousemove", function (event) {
                const mouseX = d3.pointer(event)[0];
                const xDate = x.domain()[d3.bisector(d => x(d.date)).left(data, mouseX)];
                const index = data.findIndex(d => d.date === xDate);
                const d = data[index];

                if (d) {
                    const dataPointX = x(d.date); // X position of hover line
                    const dataPointY = y(d.rate); // Y position of hover line

                    // Update hover line position and length
                    hoverLine
                        .attr("x1", dataPointX)
                        .attr("x2", dataPointX)
                        .attr("y1", dataPointY)  // Start from the data point
                        .attr("y2", Math.min(dataPointY + hoverLineLength, height - 5))  // Extend down by fixed length, but don't go past the x-axis
                        .style("opacity", 1);

                    dots.style("opacity", dot => dot.date === d.date ? 1 : 0);

                    const svgRect = document.getElementById('chart').getBoundingClientRect(); // Get the chart container's position
                    const tooltipX = svgRect.left + margin.left + dataPointX - 50; // Align tooltip horizontally to the hover line
                    const tooltipY = svgRect.top + margin.top + dataPointY - 180; // Position tooltip slightly above the data point

                    tooltip
                        .style("visibility", "visible")
                        .html(`
                <div class="tooltip-date">${d.date}</div>
                <div class="tooltip-value">₹${Number(d.rate).toFixed(2)}</div>
            `)
                        .style("left", `${tooltipX}px`) // Use calculated X position
                        .style("top", `${tooltipY}px`); // Use calculated Y position
                }
            })
            .on("mouseout", function () {
                hoverLine.style("opacity", 0);
                dots.style("opacity", 0);
                tooltip.style("visibility", "hidden");
            });

    }

    // Fetch data and initialize chart
    document.addEventListener('DOMContentLoaded', () => {

        const params = new URLSearchParams({
            action: 'chart_data',
            currency: '<?php echo $currency; ?>'
        });
        try {
            fetch('https://mvc.extravelmoney.com/api-etm-elements/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString(),
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // console.log(data.rate_history, 'JHHBB');
                    const todayRate = data.rate_history[data.rate_history.length - 1].rate;


                    document.getElementById('current-rate').textContent = Number(todayRate).toFixed(2);
                    createChart(data.rate_history);
                    window.addEventListener('resize', () => {
                        createChart(data.rate_history);
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);

                });
        } catch (error) {
            console.log(error);
        }
    });
</script>