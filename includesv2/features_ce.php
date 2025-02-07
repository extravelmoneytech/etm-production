<section class="mt-[6rem] customMd:mt-32 customMd:px-12 md:px-24 pb-8 flex-col gap-[20rem] customMd:gap-12 2xl:gap-32 flex">
                

                <div class="w-full justify-between items-center gap-2 customMd:gap-6 flex ">

                    <div class="h-1 w-full   relative bg-[#0e51a0] hidden sm:block"></div>
                   <?php
        $currencyFullNames = [

            'AED' => 'Arab Emirates Dirham',
            'AUD' => 'Australian Dollar',
            'CAD' => 'Canadian Dollar',
            'EUR' => 'Euro',
            'GBP' => 'British Pound',
            'SAR' => 'Saudi Riyal',
            'SGD' => 'Singapore Dollar',
            'THB' => 'Thai Baht',
            'USD' => 'US Dollar',
            'MYR' => 'Malaysian Ringgit'

        ];
        $currencyFullName = isset($currencyFullNames[$currency]) ? $currencyFullNames[$currency] : 'Unknown Currency';
        if ($ratesPage == true) {
            echo '<p class="text-[#040815] text-center text-2xl font-extrabold w-full leading-[72px] ">Why Buy ' . $currencyFullName . ' via <span class="text-[#0e51a0]">E</span><span class="text-[#e31d1c] ">x</span>travelmoney</p>';
        } else {
            echo '<p class="text-[#040815] text-center text-2xl font-extrabold w-full leading-[72px] ">Why Buy Forex via <span class="text-[#0e51a0]">E</span><span class="text-[#e31d1c] ">x</span>travelmoney</p>';
        }
        ?>
                    <div class="h-1 w-full  relative bg-[#e31d1c]  hidden sm:block"></div>
                </div>
                
                <div class="flex flex-col customMd:flex-row justify-center w-full items-center relative customMd:justify-between  mt-8">
                    <div class="flex flex-col gap-4 customMd:gap-10 w-full customMd:w-[25%] 2xl:w-[32%] min-w-[21rem] z-10 px-4 customMd:px-0 bg-white customMd:bg-transparent pt-8">

                        <div class="w-full group  px-4 py-6 bg-white rounded-3xl border border-black/10  hover:bg-[#20bc73] hover:text-white hover:border-transparent transition-colors duration-300 ease-in-out   inline-flex flex-col justify-center items-center">
                            <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-2 inline-flex">
                                <div class="w-14 h-14 origin-top-left rounded-full bg-[#20bc73] group-hover:bg-white duration-300 flex justify-center items-center gap-2.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white duration-300 group-hover:fill-[#20bc73]" width="35" height="35" viewBox="0 0 40 40" fill="none">
                                        <path d="M36.25 15C36.2507 14.8838 36.2349 14.7681 36.2031 14.6562L33.9609 6.8125C33.8102 6.29205 33.4952 5.83432 33.0629 5.50765C32.6307 5.18097 32.1043 5.0029 31.5625 5H8.4375C7.89568 5.0029 7.36933 5.18097 6.93706 5.50765C6.50478 5.83432 6.18977 6.29205 6.03906 6.8125L3.79844 14.6562C3.76616 14.768 3.74985 14.8837 3.75 15V17.5C3.75 18.4703 3.97591 19.4272 4.40983 20.2951C4.84375 21.1629 5.47378 21.9178 6.25 22.5V33.75C6.25 34.0815 6.3817 34.3995 6.61612 34.6339C6.85054 34.8683 7.16848 35 7.5 35H32.5C32.8315 35 33.1495 34.8683 33.3839 34.6339C33.6183 34.3995 33.75 34.0815 33.75 33.75V22.5C34.5262 21.9178 35.1562 21.1629 35.5902 20.2951C36.0241 19.4272 36.25 18.4703 36.25 17.5V15ZM8.4375 7.5H31.5625L33.3469 13.75H6.65781L8.4375 7.5ZM16.25 16.25H23.75V17.5C23.75 18.4946 23.3549 19.4484 22.6517 20.1517C21.9484 20.8549 20.9946 21.25 20 21.25C19.0054 21.25 18.0516 20.8549 17.3484 20.1517C16.6451 19.4484 16.25 18.4946 16.25 17.5V16.25ZM13.75 16.25V17.5C13.7498 18.1449 13.5833 18.7788 13.2665 19.3405C12.9498 19.9022 12.4936 20.3727 11.942 20.7067C11.3903 21.0406 10.7619 21.2267 10.1173 21.2468C9.47281 21.267 8.83396 21.1207 8.2625 20.8219C8.17555 20.7542 8.0799 20.6985 7.97813 20.6562C7.44856 20.3172 7.01274 19.8505 6.71076 19.2989C6.40878 18.7474 6.25034 18.1288 6.25 17.5V16.25H13.75ZM31.25 32.5H8.75V23.625C9.1615 23.708 9.58022 23.7498 10 23.75C10.9703 23.75 11.9272 23.5241 12.7951 23.0902C13.6629 22.6562 14.4178 22.0262 15 21.25C15.5822 22.0262 16.3371 22.6562 17.2049 23.0902C18.0728 23.5241 19.0297 23.75 20 23.75C20.9703 23.75 21.9272 23.5241 22.7951 23.0902C23.6629 22.6562 24.4178 22.0262 25 21.25C25.5822 22.0262 26.3371 22.6562 27.2049 23.0902C28.0728 23.5241 29.0297 23.75 30 23.75C30.4198 23.7498 30.8385 23.708 31.25 23.625V32.5ZM32.0203 20.6562C31.9199 20.6986 31.8253 20.7537 31.7391 20.8203C31.1677 21.1194 30.5288 21.2661 29.8842 21.2461C29.2395 21.2262 28.6109 21.0404 28.0591 20.7066C27.5073 20.3728 27.0508 19.9023 26.7339 19.3406C26.417 18.7789 26.2504 18.1449 26.25 17.5V16.25H33.75V17.5C33.7495 18.1289 33.5908 18.7476 33.2886 19.2992C32.9863 19.8507 32.5502 20.3174 32.0203 20.6562Z"/>
                                    </svg>
                                </div>
                                <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                    <h2 class="self-stretch text-xl font-bold leading-[28.80px]">
                                        RBI Authorised <br> Stores
                                    </h2>
                                    <p class="self-stretch text-sm font-normal leading-[21px]">
                                        Every store listed in Extravelmoney is RBI approved. You don't have have to worry about the genuinity of the currencies or about the transaction at all.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full group  px-4 py-6 bg-white rounded-3xl border border-black/10  hover:bg-[#EB8F00] hover:text-white hover:border-transparent transition-colors duration-300 ease-in-out   inline-flex flex-col justify-center items-center">
                            <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-2 inline-flex">
                                <div class="w-14 h-14 origin-top-left rounded-full bg-[#EB8F00] group-hover:bg-white duration-300 flex justify-center items-center gap-2.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white duration-300 group-hover:fill-[#EB8F00]" width="35" height="35" viewBox="0 0 40 40" fill="none">
                                        <path d="M6.28325 18.4637C6.33058 18.2633 6.42666 18.0778 6.56295 17.9235C6.69924 17.7692 6.87152 17.651 7.0645 17.5793L16.0661 14.2027L13.7754 2.74491C13.7236 2.47869 13.7597 2.20283 13.8784 1.95894C13.997 1.71506 14.1918 1.51639 14.4333 1.39291C14.6748 1.26944 14.9499 1.22785 15.2171 1.27444C15.4843 1.32102 15.729 1.45325 15.9145 1.65116L33.4145 20.4012C33.5566 20.5509 33.6595 20.7336 33.7138 20.9328C33.7681 21.132 33.7722 21.3415 33.7258 21.5427C33.6794 21.7439 33.5838 21.9305 33.4477 22.0857C33.3116 22.241 33.1391 22.3601 32.9457 22.4324L23.9411 25.809L26.2254 37.2543C26.2773 37.5205 26.2412 37.7964 26.1225 38.0403C26.0038 38.2841 25.8091 38.4828 25.5676 38.6063C25.3261 38.7298 25.051 38.7713 24.7838 38.7248C24.5166 38.6782 24.2718 38.546 24.0864 38.348L6.58637 19.598C6.44681 19.4482 6.34618 19.2665 6.29333 19.0687C6.24047 18.8709 6.23701 18.6631 6.28325 18.4637ZM22.9114 33.4371L21.2754 25.2527C21.2169 24.9625 21.2633 24.6608 21.4064 24.4016C21.5494 24.1423 21.7799 23.9423 22.0567 23.8371L30.3129 20.7355L17.0911 6.56991L18.7254 14.7543C18.784 15.0446 18.7376 15.3462 18.5945 15.6054C18.4514 15.8647 18.221 16.0647 17.9442 16.1699L9.69419 19.2637L22.9114 33.4371Z" />
                                      </svg>
                                </div>
                                <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                    <h2 class="self-stretch text-xl font-bold leading-[28.80px]">
                                        Fast Delivery
                                    </h2>
                                    <p class="self-stretch text-sm font-normal leading-[21px]">
                                        Guaranteed delivery within 2 working days! You can also opt for store pickup directly from the nearest store.
                                </div>
                            </div>
                        </div>

                        

                    </div>
                    <div class="flex flex-col gap-4 customMd:gap-10 w-full customMd:w-[25%] 2xl:w-[32%] min-w-[21rem] z-10 px-4 customMd:px-0 bg-white customMd:bg-transparent pt-8 pb-12 customMd:pb-0">
                        
                        <div class="w-full group  px-4 py-6 bg-white rounded-3xl border border-black/10  hover:bg-[#20bc73] hover:text-white hover:border-transparent transition-colors duration-300 ease-in-out   inline-flex flex-col justify-center items-center">
                            <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-2 inline-flex">
                                <div class="w-14 h-14 origin-top-left rounded-full bg-[#20bc73] group-hover:bg-white duration-300 flex justify-center items-center gap-2.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" class="fill-white duration-300 group-hover:fill-[#20bc73]" viewBox="0 0 40 40" fill="none">
                                        <path d="M7.86526 9.63109L30.3653 32.1311C30.5998 32.3656 30.9179 32.4974 31.2496 32.4974C31.5813 32.4974 31.8995 32.3656 32.134 32.1311C32.3686 31.8965 32.5003 31.5784 32.5003 31.2467C32.5003 30.915 32.3686 30.5969 32.134 30.3623L9.63401 7.86234C9.39966 7.62779 9.08175 7.49594 8.75019 7.49579C8.41863 7.49565 8.10059 7.62722 7.86604 7.86156C7.63149 8.0959 7.49964 8.41382 7.49949 8.74538C7.49934 9.07694 7.63091 9.39498 7.86526 9.62953V9.63109ZM32.1028 15.8498C33.1576 14.7948 33.7501 13.3639 33.75 11.8719C33.7499 10.38 33.157 8.94923 32.102 7.89437C31.0469 6.83952 29.616 6.24698 28.1241 6.24713C26.6321 6.24728 25.2014 6.84009 24.1465 7.89515C23.0917 8.95022 22.4991 10.3811 22.4993 11.873C22.4994 13.365 23.0922 14.7958 24.1473 15.8506C25.2024 16.9055 26.6332 17.498 28.1252 17.4979C29.6171 17.4977 31.0479 16.9049 32.1028 15.8498ZM31.2496 11.8748C31.2492 12.3887 31.1221 12.8945 30.8796 13.3474C30.6371 13.8004 30.2866 14.1866 29.8592 14.4718C29.4318 14.757 28.9406 14.9324 28.4292 14.9825C27.9179 15.0326 27.402 14.9558 26.9274 14.7589C26.4528 14.5621 26.034 14.2512 25.7082 13.8539C25.3824 13.4566 25.1596 12.9851 25.0595 12.4811C24.9594 11.9771 24.9851 11.4562 25.1344 10.9646C25.2837 10.4729 25.5519 10.0256 25.9153 9.66234C26.3525 9.22525 26.9095 8.92766 27.5159 8.80724C28.1223 8.68682 28.7508 8.74896 29.3219 8.98582C29.8929 9.22268 30.3809 9.6236 30.7241 10.1379C31.0672 10.6521 31.2501 11.2566 31.2496 11.8748ZM6.24963 28.1248C6.24993 29.4262 6.70145 30.6872 7.52724 31.693C8.35304 32.6988 9.50202 33.3871 10.7784 33.6407C12.0548 33.8943 13.3797 33.6975 14.5273 33.0838C15.6748 32.4701 16.5741 31.4775 17.0719 30.2751C17.5697 29.0727 17.6351 27.7349 17.2571 26.4897C16.8791 25.2444 16.081 24.1688 14.9989 23.446C13.9167 22.7232 12.6174 22.3979 11.3223 22.5257C10.0273 22.6535 8.81656 23.2264 7.89651 24.1467C7.37255 24.6679 6.9572 25.2879 6.67451 25.9708C6.39182 26.6536 6.24741 27.3858 6.24963 28.1248ZM8.74963 28.1248C8.74948 27.4018 9.00002 26.7012 9.45857 26.1422C9.91712 25.5832 10.5553 25.2005 11.2644 25.0593C11.9734 24.9182 12.7095 25.0272 13.3472 25.3679C13.9849 25.7086 14.4847 26.2599 14.7615 26.9278C15.0383 27.5957 15.075 28.3389 14.8652 29.0308C14.6555 29.7227 14.2123 30.3205 13.6112 30.7222C13.0101 31.124 12.2883 31.3049 11.5688 31.2342C10.8493 31.1634 10.1766 30.8454 9.66526 30.3342C9.37415 30.0448 9.14334 29.7005 8.98617 29.3212C8.829 28.942 8.74861 28.5354 8.74963 28.1248Z"/>
                                      </svg>
                                </div>
                                <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                    <h2 class="self-stretch text-xl font-bold leading-[28.80px]">
                                        Lowest <br> Exchange Rates
                                    </h2>
                                    <p class="self-stretch text-sm font-normal leading-[21px]">
                                        Being a Forex marketplace, every exchange house here tries to outbid others. Result, you get the best exchange rate in the market!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full group  px-4 py-6 bg-white rounded-3xl border border-black/10  hover:bg-[#EB8F00] hover:text-white hover:border-transparent transition-colors duration-300 ease-in-out   inline-flex flex-col justify-center items-center">
                            <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-2 inline-flex">
                                <div class="w-14 h-14 origin-top-left rounded-full bg-[#EB8F00] group-hover:bg-white duration-300 flex justify-center items-center gap-2.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white duration-300 group-hover:fill-[#EB8F00]" width="35" height="35" viewBox="0 0 40 40" fill="none">
                                        <path d="M7.5 12.5H12.5V8.75C12.5 6.76088 13.2902 4.85322 14.6967 3.4467C16.1032 2.04018 18.0109 1.25 20 1.25C21.9891 1.25 23.8968 2.04018 25.3033 3.4467C26.7098 4.85322 27.5 6.76088 27.5 8.75V12.5H32.5C33.163 12.5 33.7989 12.7634 34.2678 13.2322C34.7366 13.7011 35 14.337 35 15V32.5C35 33.163 34.7366 33.7989 34.2678 34.2678C33.7989 34.7366 33.163 35 32.5 35H7.5C6.83696 35 6.20107 34.7366 5.73223 34.2678C5.26339 33.7989 5 33.163 5 32.5V15C5 14.337 5.26339 13.7011 5.73223 13.2322C6.20107 12.7634 6.83696 12.5 7.5 12.5ZM25 8.75C25 7.42392 24.4732 6.15215 23.5355 5.21447C22.5979 4.27678 21.3261 3.75 20 3.75C18.6739 3.75 17.4021 4.27678 16.4645 5.21447C15.5268 6.15215 15 7.42392 15 8.75V12.5H25V8.75ZM7.5 32.5H32.5V15H7.5V32.5Z" />
                                      </svg>
                                </div>
                                <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                    <h2 class="self-stretch text-xl font-bold leading-[28.80px]">
                                        Lock Rate, Pay Later!
                                    </h2>
                                    <p class="self-stretch text-sm font-normal leading-[21px]">
                                        You can lock the rate and block your currency for up to 3 days by paying a small fully refundable deposit.


                                    </p>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full flex items-start customMd:items-center justify-center">
                        <div class="p-[6px] rounded-[20px] bg-custom-gradient absolute top-16 customMd:top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  flex items-center justify-center w-[18rem] h-[35rem]" style="background: linear-gradient(157deg, #E31D1C -4.27%, #0E51A0 101.01%), #FFF;">
                            <div class="flex rounded-[14px] h-full items-start customMd:items-center pt-10 customMd:pt-0 justify-center bg-white w-full">
                            <img class="w-40" src="<?php echo $fold . 'public/images/logo/ETM_logo_icon.png'; ?>" alt="ETM logo icon">

                            </div>
                            
                        </div>
                        <img class="w-full max-w-[45rem] customMd:w-[65%] -mt-[20rem] customMd:mt-0" style="opacity: 0.4;" src="<?php echo $fold . 'public/images/frame6.svg'; ?>" alt="frame6">

                    </div>
                </div>
            </section>