<!DOCTYPE html>
<html lang="en">

<?php

    
    $fold = "../";  
    $title="Login";

    include $fold . 'includesv2/head.php';
    
    $loginPage=true;
?>

<body>
    <div class="flex flex-col items-center justify-center relative bg-white">



        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">

            <?php 
            include $fold . 'includesv2/header.php';
            ?>


            <section class="px-6 md:px-20 pb-16 pt-8">
                <div class="flex w-full justify-center items-center">
                    <div class="otpWidget  flex w-full  z-20  bg-white customMd:rounded-xl flex-col  customMd:bg-white  md:px-16"
                        style="display: flex;">
                        <img class="w-44 hidden md:block" src="<?php echo $fold . 'public/images/logo/ETM logo without tagline.png'; ?>" alt="ETM logo without tagline">


                        <div id="sendOtpMain" class="flex flex-col ">
                        <img class="w-48 mt-4 flex md:hidden" src="<?php echo $fold . 'public/images/otpImg.svg'; ?>" alt="OTP Image">


                            <span class="text-black text-sm font-semibold mt-6 leading-7">Enter Your Mobile
                                Number</span>

                                <div class="flex justify-between gap-2" id="otpInputContainer">
                                    <div id=""
                                class="p-[2px] rounded-[12px]  customGradient justify-start items-center gap-2.5 inline-flex w-[35%]">
                                <div style="padding: 0.75rem 0.5rem;height: 3rem;" class="justify-start rounded-[10px] items-center gap-2.5 flex w-full border-0 bg-white">
                                    <div style="height: fit-content;padding: 0;border: none;width: 100%;" class="dropdownMain select-none countryCodeContainer" data-search="true" id="contryCodeMain" dataval="oe" custom-content>

                                        <div class="selectedItem">

                                                
                                            </div>

                                        <ul  class="dropdownList overflow-scroll" id="countryCodeDropDown">
                                            

                                            
                                        </ul>
                                        <svg class="dropdownArrow" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path d="M13.354 6.85354L8.35403 11.8535C8.30759 11.9 8.25245 11.9369 8.19175 11.9621C8.13105 11.9872 8.06599 12.0002 8.00028 12.0002C7.93457 12.0002 7.86951 11.9872 7.80881 11.9621C7.74811 11.9369 7.69296 11.9 7.64653 11.8535L2.64653 6.85354C2.55271 6.75972 2.5 6.63247 2.5 6.49979C2.5 6.36711 2.55271 6.23986 2.64653 6.14604C2.74035 6.05222 2.8676 5.99951 3.00028 5.99951C3.13296 5.99951 3.26021 6.05222 3.35403 6.14604L8.00028 10.7929L12.6465 6.14604C12.693 6.09958 12.7481 6.06273 12.8088 6.03759C12.8695 6.01245 12.9346 5.99951 13.0003 5.99951C13.066 5.99951 13.131 6.01245 13.1917 6.03759C13.2524 6.06273 13.3076 6.09958 13.354 6.14604C13.4005 6.19249 13.4373 6.24764 13.4625 6.30834C13.4876 6.36904 13.5006 6.43409 13.5006 6.49979C13.5006 6.56549 13.4876 6.63054 13.4625 6.69124C13.4373 6.75193 13.4005 6.80708 13.354 6.85354Z" fill="black"></path>
                                        </svg>
                                    </div>
                                </div>
                                    </div>

                                    <div 
                                class="p-[2px] rounded-[12px]  customGradient justify-start items-center gap-2.5 inline-flex  w-[65%]">
                                <div class="justify-start rounded-[10px] items-center gap-2.5 flex bg-white w-full">
                                    <input type="text" id="mobNumber"
                                        class="font-semibold w-full outline-none border-0 bg-transparent py-3 px-2">
                                </div>
                                    </div>
                                </div>
                            
                            <p class="text-[#777777] text-sm font-medium mt-4 leading-[21px] mb-8">We will send you one-time
                                password to your mobile number</p>

                    <!--            <div  id="optSend" class=" px-4 py-3.5  rounded-lg justify-center items-center gap-1 inline-flex  cursor-pointer bg-primary-blue">-->
                    <!--    <div style="color:white" class=" text-base font-bold font-['Plus Jakarta Sans']">Get OTP via SMS</div>-->
                    <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">-->
                    <!--        <path-->
                    <!--            d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"-->
                    <!--            fill="white" />-->
                    <!--    </svg>-->
                    <!--</div>-->
                                
                    <!--            <div id="whatsappOtpSend"  style="border:0.8px solid #20bc73;" class=" px-4 py-3.5 mt-4  rounded-lg justify-center items-center gap-1 inline-flex cursor-pointer">-->
                    <!--    <div style="color:#20bc73" class="text-base font-bold font-['Plus Jakarta Sans']">Get OTP on WhatsApp</div>-->
                    <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">-->
                    <!--        <path-->
                    <!--            d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"-->
                    <!--            fill="#20bc73" />-->
                    <!--    </svg>-->
                    <!--</div>-->

                    

                                <div id="whatsappOtpSend" class=" px-4 py-3.5 bg-[#20bc73] rounded-lg justify-center items-center gap-1 inline-flex cursor-pointer">
                        <div class="text-white text-base font-bold font-['Plus Jakarta Sans']">Get OTP on WhatsApp</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"
                                fill="white" />
                        </svg>
                    </div>

                    <div style="border:0.8px solid #2C5AA2;" id="optSend" class=" px-4 py-3.5  rounded-lg justify-center items-center gap-1 inline-flex mt-4 cursor-pointer">
                        <div style="color:#2C5AA2;" class=" text-base font-bold font-['Plus Jakarta Sans']">Get OTP via SMS</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"
                                fill="#2C5AA2" />
                        </svg>
                    </div>


                        </div>

                        <div id="verifyOtpMain" class="mt-6 flex flex-col h-full ">
                            <span class="text-[#777777] text-base font-medium  leading-7">Enter OTP</span>

                            <div class="otpInputBlock mt-4 gap-4 flex">
                                <input type="number"
                                    class="w-16 h-16 bg-primary-blue/10 rounded-xl outline-none border-0  text-white text-center font-semibold text-3xl">

                                <input type="number"
                                    class="w-16 h-16 bg-primary-blue/10 rounded-xl outline-none border-0  text-white text-center font-semibold text-3xl">

                                <input type="number"
                                    class="w-16 h-16 bg-primary-blue/10 rounded-xl outline-none border-0  text-white text-center font-semibold text-3xl">

                                <input type="number"
                                    class="w-16 h-16 bg-primary-blue/10 rounded-xl outline-none border-0  text-white text-center font-semibold text-3xl">

                            </div>


                            <p class="text-[#777777] text-sm font-medium mt-4 leading-[21px]">Code has been sent to <span id="mobNum"></span><span class="text-black font-semibold ml-4 cursor-pointer" id="changeNumberBtn">
                                    Change?</span></p>

                            <div class="mt-6 justify-start items-center gap-2 inline-flex">
                                <span class="text-black/60 text-sm font-normal  leading-[21px]">Didn’t get the
                                    OTP</span>
                                    <span class="otpTimer w-12 text-black/60 text-sm font-normal  leading-[21px]">In 30s</span>
                                <span class="text-[#0e51a0] text-sm font-semibold  leading-[21px] otpResendBtn cursor-pointer">Resend OTP</span>
                            </div>

                            <div id="otpVerify"
                                class="h-12 w-full px-2 py-3 bg-primary-blue rounded-lg justify-center items-center gap-1 inline-flex mt-8  select-none cursor-pointer">
                                <span class="text-white text-sm font-bold">Verify OTP</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"
                                        fill="white"></path>
                                </svg>

                            </div>
                        </div>


                    </div>

                    <div class="hidden md:flex items-center justify-center w-full">
                    <img src="<?php echo $fold . 'public/images/loginScreen.jpg'; ?>" alt="Login Screen">

                    </div>
                </div>
            </section>

        </div>

    </div>
    <footer>
        



        <div
            class="loadingAnimationContainer hidden items-center justify-center h-screen fixed top-0 left-0 w-full bg-white z-50">
            <div class="loading">
                <svg viewBox="0 0 187.3 93.7" height="200px" width="300px" class="svgbox">
                    <defs>
                        <linearGradient y2="0%" x2="100%" y1="0%" x1="0%" id="gradient">
                            <stop stop-color="#2C5AA2" offset="0%"></stop>
                            <stop stop-color="#E3373A" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path stroke="url(#gradient)"
                        d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z">
                    </path>
                </svg>
            </div>
        </div>

        <?php 
            include $fold . 'includesv2/footerScripts.php';
        ?>


        
    </footer>
</body>

</html>