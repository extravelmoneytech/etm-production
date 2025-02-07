<!-- buy or sell -->
<section class="w-full flex justify-center items-center relative">
    <div class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-16">
        <div class="rounded-3xl overflow-hidden"
            style="background: linear-gradient(329deg, #0E51A0 -43.1%, #E31D1C 144.49%);">
            <div class="grid grid-cols-1 sm:grid-cols-2 relative">
                <!-- Left Column -->
                <div
                    class="p-6 lg:p-12 order-2 md:order-1 sm:order-1 flex flex-col justify-center align-center text-left">
                    <h1 class="text-white text-xl md:text-3xl font-bold mb-4 leading-tight sm:text-left">
                        Buy or Sell <?php echo $currencyfull ?> at Low Rates
                    </h1>
                    <p class="text-white text-sm mb-6 text-justify sm:text-left">
                        Find today's best <?php echo $currencyfull ?> buying rate & selling rate in India, across major
                        cities.
                        Exchange <?php echo $currency ?> currency, buy forex card or send money to
                        <?php echo $country ?> easily!
                    </p>

                    <div class="flex items-center justify-center md:items-start md:justify-start">
                        <?php
                        // Define the mapping of specific currencies to their URLs
                        $currencyUrls = [
                            "usd" => "https://www.extravelmoney.com/buy-forex/us-dollar/",
                            "eur" => "https://www.extravelmoney.com/buy-forex/euro/",
                            "gbp" => "https://www.extravelmoney.com/buy-forex/british-pound/",
                            "aud" => "https://www.extravelmoney.com/buy-forex/australian-dollar/",
                            "aed" => "https://www.extravelmoney.com/buy-forex/uae-dirham/",
                            "nzd" => "https://www.extravelmoney.com/buy-forex/new-zealand-dollar/",
                            "cad" => "https://www.extravelmoney.com/buy-forex/canadian-dollar/",
                            "sar" => "https://www.extravelmoney.com/buy-forex/saudi-riyal/",
                            "sgd" => "https://www.extravelmoney.com/buy-forex/singapore-dollar/",
                            "myr" => "https://www.extravelmoney.com/buy-forex/malaysian-ringgit/",
                            "thb" => "https://www.extravelmoney.com/buy-forex/thai-baht/",
                            "hkd" => "https://www.extravelmoney.com/buy-forex/hong-kong-dollar/",
                            "cny" => "https://www.extravelmoney.com/buy-forex/chinese-yuan/",
                        ];

                        // Default page for unknown currencies
                        $defaultPage = "https://www.extravelmoney.com/buy-forex/";

                        // Determine the target URL based on the selected currency
                        $targetUrl = $currencyUrls[strtolower($currency)] ?? $defaultPage;

                        echo "
                        <a href='$targetUrl' id='buy-sell-button'
                        class='bg-white text-[#0E51A0] font-semibold rounded-lg px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base transition-colors flex items-center gap-2 w-fit hover:bg-opacity-90'>
                        Buy $currencyfull
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none'
                        class='stroke-current sm:w-6 sm:h-6'>
                        <path d='M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z'
                        fill='currentColor' />
                        </svg>
                        </a>
                        ";
                        ?>
                    </div>
                    
                </div>
                <!-- Right Column -->
                <div class="order-1  md:order-2 sm:order-2 p-6  relative">
                    <!-- Feature Cards -->
                    <div class="space-y-4 relative z-10">
                        <div style="background-color: rgba(255, 255, 255, 0.1);" class=" p-2 rounded-3xl w-[769px]">
                            <div class="p-2 rounded-2xl w-[769px]  "
                                style="background: linear-gradient(90deg, #FFF 8.5%, #FFF 28%, rgba(14, 81, 160, 0.00) 91%);">
                                <span class="font-bold text-[#0E51A0] ">Pay Online</span>
                            </div>
                        </div>
                        <div style="background-color: rgba(255, 255, 255, 0.1);" class=" p-2 rounded-3xl w-[769px]">
                            <div class="p-2 rounded-2xl w-[769px]  "
                                style="background: linear-gradient(90deg, #FFF 8.5%, #FFF 28%, rgba(14, 81, 160, 0.00) 91%);">
                                <span class="font-bold text-[#FB944B] ">Expert Guidance</span>
                            </div>
                        </div>
                        <div style="background-color: rgba(255, 255, 255, 0.1);" class=" p-2 rounded-3xl w-[769px]">
                            <div class="p-2 rounded-2xl w-[769px]  "
                                style="background: linear-gradient(90deg, #FFF 8.5%, #FFF 28%, rgba(14, 81, 160, 0.00) 91%);">
                                <span class="font-bold text-[#008E4C] ">FreeDoor Delivery</span>
                            </div>
                        </div>
                        <div style="background-color: rgba(255, 255, 255, 0.1);" class=" p-2 rounded-3xl w-[769px]">
                            <div class="p-2 rounded-2xl w-[769px]  "
                                style="background: linear-gradient(90deg, #FFF 8.5%, #FFF 28%, rgba(14, 81, 160, 0.00) 91%);">
                                <span class="font-bold text-[#0E51A0] ">Best Rates</span>
                            </div>
                        </div>

                    </div>

                    <!-- Money Image -->
                    <div class="absolute right-[-5rem] bottom-[2rem] md:bottom-0 sm:right-0 z-20 w-48 h-48 "
                        style="filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));">
                        <img src="../../public/images/money.png" alt="Money Icon" class="w-full h-full object-contain"
                            style="mix-blend-mode: multiply;" />
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>