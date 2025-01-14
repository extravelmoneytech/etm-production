
    <section >

        <div class="flex flex-col mt-16">
            <div>
                <div class="flex  items-center gap-2 ">
                    <div class="w-2 h-12 bg-[#e31d1c]"></div>
                    <h2 class="text-[#040815] text-xl  customMd:text-[40px] font-bold  customMd:leading-[60px] ">
                        Currency Rates in <?php echo $city; ?> Today

                    </h2>
                </div>
                <div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-8">
                        <!-- AUSTRALIA -->
                        <?php
                        $cities = [
                            'Bangalore' => 'bangalore',
                            'Chennai' => 'chennai',
                            'Hyderabad' => 'hyderabad',
                            'Delhi' => 'delhi',
                            'Mumbai' => 'mumbai',
                            'Ludhiana' => 'ludhiana',
                            'Pune' => 'pune',
                            'Kolkata' => 'kolkata',
                            'Kochi' => 'kochi',
                            'Jaipur' => 'jaipur',
                            'Goa' => 'goa',
                            'Surat' => 'surat',
                            'Ahmedabad' => 'ahmedabad'
                        ];
                        foreach ($cities as $cityName => $cityUrl) {
                            if ($cityName == $city) { ?>


                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/aud/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-au mr-2" style="width:1.8rem;"></span>
                                            <span class="locationName">Australian Dollars</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!-- canada -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/cad/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-ca mr-2" style="width:1.8rem;"></span>
                                            <span class="locationName">Canadian Dollar</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!-- saudi -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/sar/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-sa mr-2 " style="width:1.8rem;"></span> <span
                                                class="locationName">Saudi Riyal</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                                <!-- british -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/gbp/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-gb mr-2" style="width:1.8rem;"></span>
                                            <span class="locationName">British Pound</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                                <!-- thailand -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/thb/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-th mr-2 " style="width:1.8rem;"></span> <span
                                                class="locationName">Thai Bhatt</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                                <!-- euro -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/eur/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-eu mr-2" style="width:1.8rem;"></span>
                                            <span class="locationName">EURO</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                                <!-- uae -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/aed/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">
                                            <span class="flag-icon flag-icon-ae mr-2 " style="width:1.8rem;"></span>
                                            <span class="locationName">UAE Dirham</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                                <!-- singapore -->
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold; ?>rates/sgd/<?php echo $cityUrl ?>">
                                        <div class="location group space-x-2">

                                            <span class="flag-icon flag-icon-sg block w-4 h-auto mr-2"
                                                style="width: 1.8rem;"></span>
                                            <span class="locationName">Singapore Dollar</span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>

                                </div>
                            <?php }
                        } ?>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Find the Best US Dollar Rate in India Today -->
    <section>
        <div class="flex flex-col mt-16">
            <div>
                <div class="flex  items-center gap-2 ">
                    <div class="w-2 h-12 bg-[#e31d1c]"></div>
                    <h2 class="text-[#040815] text-xl  customMd:text-[40px] font-bold  customMd:leading-[60px] ">
                        Find the Best US Dollar Rate in India Today

                    </h2>
                </div>

                <div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mt-8">
                        <?php
                        // Array of all cities and their URLs
                        $cities = [
                            'Bangalore' => 'rates/usd/bangalore',
                            'Chennai' => 'rates/usd/chennai',
                            'Hyderabad' => 'rates/usd/hyderabad',
                            'Delhi' => 'rates/usd/delhi',
                            'Mumbai' => 'rates/usd/mumbai',
                            'Ludhiana' => 'rates/usd/ludhiana',
                            'Pune' => 'rates/usd/pune',
                            'Kolkata' => 'rates/usd/kolkata',
                            'Kochi' => 'rates/usd/kochi',
                            'Jaipur' => 'rates/usd/jaipur',
                            'Goa' => 'rates/usd/goa',
                            'Surat' => 'rates/usd/surat',
                            'Ahmedabad' => 'rates/usd/ahmedabad'
                        ];

                        // Loop through cities and display if not matching $city
                        foreach ($cities as $cityName => $cityUrl) {
                            if ($cityName !== $city) { ?>
                                <div class="flex justify-start">
                                    <a href="<?php echo $fold . $cityUrl; ?>">
                                        <div class="flex items-center location group space-x-1">
                                            <span class="locationName ">USD Rates in <?php echo $cityName; ?></span>
                                            <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <path
                                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>

            </div>
        </div>

    </section>
