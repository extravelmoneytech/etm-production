<style>
    .hidden-btn {
        display: none;
    }

    .hover-row:hover .hidden-btn {
        display: inline-block;
        margin-left: 10px;
    }

    @media (max-width: 639px) {
        .hover-row:hover .hidden-btn {
            display: none !important;
        }
    }

    .hover-row .hidden-btn button:hover {
        background: linear-gradient(90deg, #0e51a0, #0056b3);
        transition: background 0.3s ease;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>

<section
    class="w-full flex justify-center items-center relative md:bg-[linear-gradient(329deg,rgba(14,81,160,0.05)_-43.1%,rgba(227,29,28,0.05)_144.49%)]">
    <div
        class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-16 md:pb-16">
        <h2 class="text-[#040815] text-xl md:text-3xl customMd:text-[40px] font-bold customMd:leading-[60px]">
            <?php echo $currency ?> Rates in India Today
        </h2>
        <p
            class="w-full lg:w-[980px] text-gray-400 text-sm font-normal mt-3 mb-3 font-['Plus Jakarta Sans'] pr-1 leading-[21px]">
            Fresh <?php echo $currencyfull ?> Cost and Conversion to Indian Cities in India
        </p>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Foreign Currency to INR Table -->
            <div>
                <h2 class="text-base md:text-lg font-bold mb-4">Convert <?php echo $currencyfull ?> to Indian Rupee</h2>
                <div class="rounded-lg overflow-hidden">
                    <table class="w-full border border-gray-200" id="foreignToInr">
                        <thead class="bg-black/5">
                            <tr>
                                <th class="text-[#002C60] text-left py-3 px-4 font-bold text-base md:text-lg">
                                    <?php echo $currencyfull ?>
                                </th>
                                <th class="text-[#002C60] text-right py-3 px-4 font-bold text-base md:text-lg">
                                    Indian Rupee
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-base">
                            <!-- Table Rows with Loading Indicators -->
                            <?php
                            $multipliers = [1, 5, 10, 25, 50, 75, 100, 150, 250, 300, 500, 800, 1000, 5000];
                            foreach ($multipliers as $value) {
                                echo "
                            <tr class='border-t border-gray-200 hover-row text-sm md:text-base'>
                                <td class='text-[#0e51a0] font-semibold py-8 md:py-4 px-4'>{$value} {$currency}</td>
                                <td class='p-3 px-4 font-semibold text-right'>
                                    <div class='flex justify-end items-center h-8 px-4 animate-pulse'>
                                    <div class='h-4 bg-gray-200 rounded w-1/2'></div>
                                    </div>
                                </td>
                            </tr>
                            
                        ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- INR to Foreign Currency Table -->
            <div>
                <h2 class="text-base md:text-lg font-bold mb-4">Convert Indian Rupee to <?php echo $currencyfull ?></h2>
                <div class="rounded-lg overflow-hidden">
                    <table class="w-full border border-gray-200" id="inrToForeign">
                        <thead class="bg-black/5">
                            <tr>
                                <th class="text-[#002C60] text-left py-3 px-4 font-bold text-base md:text-lg">
                                    Indian Rupee
                                </th>
                                <th class="text-[#002C60] text-right py-3 px-4 font-bold text-base md:text-lg">
                                    <?php echo $currencyfull ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-base">
                            <!-- Table Rows with Loading Indicators -->
                            <?php
                            foreach ($multipliers as $value) {
                                echo "
                            <tr class='border-t border-gray-200 hover-row text-sm md:text-base'>
                                <td class='text-[#0e51a0] font-semibold py-8 md:py-4 px-4'>{$value} INR</td>
                                <td class='p-3 px-4 font-semibold text-right'>
                                    <div class='flex justify-end items-center h-8 px-4 animate-pulse'>
                                    <div class='h-4 bg-gray-200 rounded w-1/2'></div>
                                    </div>
                                </td>
                            </tr>
                        ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    function formatCurrency(number) {
        return number.toLocaleString('en-IN', {
            minimumFractionDigits: 3,
            maximumFractionDigits: 3,
        });
    }

    function formatINR(number) {
        return number.toLocaleString('en-IN', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });
    }

    function initializeTables(todayRate) {
        const multipliers = [1, 5, 10, 25, 50, 75, 100, 150, 250, 300, 500, 800, 1000, 5000];

        const foreignToInrContent = multipliers.map(value => {

            const buyUrl = `https://www.extravelmoney.com/currency-converter/<?php echo strtolower($currency); ?>-inr/?amount=${value}`;
            return `
                <tr class="border-t nbv border-gray-200 hover-row text-sm md:text-base">
                    <td class="text-[#0e51a0] font-semibold py-8 md:py-4 px-4">${value} <?php echo $currency ?></td>
                    <td class="p-3 px-4 font-semibold text-right">
                        <div class="flex items-center justify-end sm:block">
                            ${formatINR(value * todayRate)} INR
                            <!-- Button for larger screens -->
                            <a href="${buyUrl}" target="_blank" class="hidden-btn">
                                <button class="hidden sm:flex bg-[#0e51a0] text-sm text-white py-1 px-3 rounded-3xl">
                                    Buy ${value} <?php echo $currency ?>
                                </button>
                            </a>
                            <!-- Simple SVG button for small screens -->
                            <a href="${buyUrl}" target="_blank" class="sm:hidden">
                                <button class="ml-3 bg-[#0e51a0] text-white p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                        <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');

        const inrToForeignContent = multipliers.map(value => {
            const buyUrl = `https://www.extravelmoney.com/currency-converter/<?php echo strtolower($currency); ?>-inr/?amount=${value}`;
            return `
                <tr class="border-t border-gray-200 hover-row text-sm md:text-base">
                    <td class="font-semibold text-[#0e51a0] py-8 md:py-4 px-4">${value} INR</td>
                    <td class="p-3 px-4 font-semibold text-right">
                        <div class="flex items-center justify-end sm:block">
                            ${formatCurrency(value / todayRate)} <?php echo $currency ?>
                            <!-- Button for larger screens -->
                            <a href="${buyUrl}" target="_blank" class="hidden-btn">
                                <button class="hidden sm:flex bg-[#0e51a0] text-sm text-white py-1 px-3 rounded-3xl">
                                    Buy ${value} <?php echo $currency ?>
                                </button>
                            </a>
                            <!-- Simple SVG button for small screens -->
                            <a href="${buyUrl}" target="_blank" class="sm:hidden">
                                <button class="ml-3 bg-[#0e51a0] text-white p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                        <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');

        document.querySelector('#foreignToInr tbody').innerHTML = foreignToInrContent;
        document.querySelector('#inrToForeign tbody').innerHTML = inrToForeignContent;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams({
            action: 'chart_data',
            currency: '<?php echo $currency; ?>',
        });

        fetch('https://mvc.extravelmoney.com/api-etm-elements/', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: params.toString(),
        })
            .then(response => response.json())
            .then(data => {
                const todayRate = data.rate_history[data.rate_history.length - 1].rate;
                initializeTables(todayRate);
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>