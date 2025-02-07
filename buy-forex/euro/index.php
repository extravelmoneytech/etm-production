<!DOCTYPE html>
<html lang="en">

<?php
$title = "Buy Euro in India | Find Best Rates | Get Door Delivery -ExTravelMoney";
$description = "Buy Euro online in India at the lowest rates. Compare EUR exchange rates offered by RBI Authorized exchange houses in your city & book online. Pay directly to the money changer & get door delivery of Euro currency or forex card.";
$sub = 1;
$page = 3010;
$citypage = 1;
$curpage = 0;
$fold = "../../";

$ogurl = "https://www.extravelmoney.com/buy-sell-currency/euro";
$ogtype = "article";


$_SESSION['fold'] = $fold;

$_SESSION['currency'] = "EUR";

$city = "Bangalore";
$currency = "EUR";


$currencyfull = "Euro";
$indexPage = true;
$widgetType = 'fx';
$defaultCountry = "de";


$buy_forex = true;



include $fold . 'includesv2/head.php';
include $fold . 'includes/best-city-rates.php';
?>

<body>
    <div class="flex flex-col items-center justify-center relative bg-white">
        <div class="chooseCityOverlay absolute top-0 left-0 w-full h-[100vh] bg-white customMd:bg-black/30  customMd:bg-opacity-60  z-20"
            style="backdrop-filter: blur(7px)">

            <div
                class="chooseCityWidget  flex w-full absolute  z-20 top-0 left-0 bg-white px-5  py-5 customMd:rounded-xl flex-col customMd:mt-12 customMd:bg-white h-fit min-h-[100vh] customMd:min-h-fit customMd:max-w-2xl customMd:left-2/4 customMd:top-1/2  customMd:transform customMd:-translate-x-1/2 customMd:-translate-y-1/2">
                <img class="w-44" src="<?php echo $fold . 'public/images/logo/ETM logo without tagline.png'; ?>"
                    alt="ETM logo without tagline">
                <h2 class="font-bold text-2xl mt-6">
                    <span class="custom-gradient-text">We
                        Promise
                    </span>
                    the Best Rates,<br> From the Market for
                    <span class="custom-gradient-text">you.</span>
                </h2>
                <p class="text-[#777777] text-xs  leading-3 mt-4">Our Services are provided all across the country
                </p>

                <!-- <p class="text-[#777777] text-xs font-bold  leading-3 mt-4">Please Select your City</p> -->

                <div id="citySelectorContainer"
                    class="custom-gradient-border  relative rounded-lg h-12 flex items-center justify-between border-2 mt-4 px-3">
                    <input type="text" value="" placeholder="Search your city" autocomplete="off" id="citySelector"
                        class="text-black font-semibold text-base w-full h-full outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M21.3963 20.6203L16.5794 15.8035C17.953 14.2238 18.6596 12.1725 18.5503 10.082C18.441 7.99156 17.5243 6.02518 15.9934 4.59741C14.4626 3.16964 12.4371 2.39202 10.3441 2.42847C8.2511 2.46493 6.25399 3.3126 4.77378 4.79282C3.29356 6.27303 2.44588 8.27014 2.40943 10.3632C2.37298 12.4562 3.15059 14.4816 4.57837 16.0125C6.00614 17.5433 7.97252 18.46 10.063 18.5694C12.1535 18.6787 14.2048 17.9721 15.7844 16.5985L20.6013 21.4153C20.7079 21.5147 20.8489 21.5688 20.9947 21.5662C21.1404 21.5636 21.2794 21.5046 21.3825 21.4015C21.4856 21.2985 21.5446 21.1594 21.5472 21.0137C21.5497 20.868 21.4956 20.727 21.3963 20.6203ZM3.56128 10.5178C3.56128 9.14572 3.96816 7.80442 4.73046 6.66356C5.49277 5.52269 6.57625 4.6335 7.84392 4.10841C9.11158 3.58333 10.5065 3.44594 11.8522 3.71363C13.198 3.98131 14.4341 4.64205 15.4043 5.61227C16.3746 6.5825 17.0353 7.81864 17.303 9.16439C17.5707 10.5101 17.4333 11.905 16.9082 13.1727C16.3831 14.4404 15.4939 15.5238 14.3531 16.2861C13.2122 17.0484 11.8709 17.4553 10.4988 17.4553C8.65953 17.4531 6.89625 16.7215 5.5957 15.4209C4.29515 14.1204 3.56352 12.3571 3.56128 10.5178Z"
                            fill="black" />
                    </svg>


                </div>
                <p class="text-[#777777] text-sm font-bold  leading-3 mt-4">Popular Cities</p>
                <div id="searchspin" style="display: none;">Loading...</div>
                <div id="results" class="popularCityContainer flex flex-wrap gap-3 mt-3 text-[#777777]"></div>
                <button id="citySelect" disabled
                    class="h-12 px-2 py-3 bg-primary-blue rounded-lg justify-center items-center gap-1 inline-flex mt-6 select-none cursor-pointer opacity-60">
                    <span class="text-white text-sm font-bold">View Best Rates in your City</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z"
                            fill="white" />
                    </svg>
                </button>

                <div class="flex items-center mt-10 justify-center customMd:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="253" height="161" viewBox="0 0 253 161" fill="none">
                        <path
                            d="M25.28 76.4052L27.8094 78.3053L33.8057 74.5175H34.1265L35.7058 75.1467C35.7058 75.1467 36.0266 75.4675 35.7058 75.4675L31.2888 80.5264L31.6096 80.8472C32.2389 81.168 32.2388 82.1057 31.9304 82.4265C31.6096 83.0558 30.9803 83.3765 30.351 83.0558H30.0303L28.451 89.6939C28.451 89.6939 28.1302 90.0147 28.1302 89.6939L26.5508 89.0647V88.7439V81.7974L23.3922 80.5389C22.4422 80.2181 21.8129 79.9096 21.1836 79.5888L16.4457 77.0595L13.2871 91.2733C13.2871 91.5941 12.9663 91.5941 12.6578 91.5941L9.81996 90.0148L9.49918 89.694V84.6351L7.59907 83.6851C7.27828 83.6851 7.27828 83.3643 7.59907 83.0558L8.22833 81.7973C8.22833 81.4765 8.54911 81.4765 8.85758 81.7973L9.80764 82.1181V80.5388L8.22833 79.5887C7.90754 79.5887 7.90754 79.2679 8.22833 78.9595L8.85758 77.7009C8.85758 77.3801 9.17837 77.3801 9.48684 77.7009L10.1161 78.0217V73.6047L5.69908 71.3961C3.79897 70.4461 2.21953 68.8667 0.640213 67.2874L0.319439 66.9666C-0.00135422 66.6458 -0.00135422 66.0165 0.319439 65.3873C0.640228 64.758 1.26948 64.758 1.57795 64.758H2.20721C4.41579 65.0788 6.31596 65.7081 8.20355 66.6581L12.016 68.8297L15.4956 66.3003L14.8663 65.9795C14.5455 65.9795 14.5455 65.6587 14.8663 65.3502L15.4956 64.0917C15.4956 63.7709 15.8164 63.7709 16.1248 64.0917L17.7041 65.0418L18.9627 64.0917L18.0126 63.7709C17.6918 63.7709 17.6918 63.4501 18.0126 63.1417L18.6419 61.8831C18.6419 61.5624 18.9627 61.5624 19.2711 61.8831L21.1713 62.8332L25.28 59.9954H25.6008L28.4386 61.5747C28.7594 61.5747 28.7594 61.8955 28.4386 62.2039L18.3335 72.9382L23.0715 75.4676C24.0215 75.4553 24.6507 75.7759 25.28 76.4052Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M205.014 31.5601C205.335 31.2393 205.964 31.5601 205.964 31.8809C206.285 33.1394 206.914 34.0895 207.223 35.3605C207.544 36.3105 207.544 37.2606 207.852 38.1983C207.852 38.5191 207.531 39.1484 207.223 39.1484C206.902 39.1484 206.594 38.8276 206.273 38.5191C206.273 37.569 205.952 36.619 205.643 35.6813C205.323 34.4227 205.014 33.4727 204.693 32.5226C204.373 32.1895 204.693 31.8809 205.014 31.5601Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M204.065 151.909C204.065 152.23 203.745 152.539 203.436 152.539H203.115C201.215 151.588 199.007 150.959 197.119 150.009C196.798 149.688 196.49 149.38 196.798 149.059C197.119 148.738 197.427 148.43 197.748 148.738C199.648 149.688 201.536 150.638 203.745 151.268C204.065 150.959 204.374 151.268 204.065 151.909Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M207.223 44.1943C207.544 44.1943 207.852 44.5151 207.852 45.1444C207.531 47.353 206.902 49.5614 206.273 51.4617C206.273 51.7824 205.952 52.0909 205.643 52.0909H205.323C205.002 51.7701 204.693 51.4616 205.002 51.1409C205.631 49.2407 206.26 47.0321 206.581 45.1445C206.273 44.5153 206.902 44.1943 207.223 44.1943Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M215.75 155.067C216.071 155.067 216.379 155.696 216.379 156.017C216.379 156.338 216.058 156.646 215.75 156.646H215.429C213.22 156.017 211.32 155.388 209.112 154.746C208.791 154.746 208.482 154.117 208.482 153.796C208.482 153.475 209.112 153.167 209.433 153.167C211.641 153.796 213.85 154.426 215.75 155.067Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M185.418 16.7167C185.418 16.3959 186.047 16.0874 186.368 16.0874C188.576 16.4082 190.785 17.0375 192.685 17.9875C193.006 18.3083 193.314 18.6168 193.006 18.9376C193.006 19.2584 192.685 19.2584 192.377 19.2584H192.056C190.156 18.3083 188.268 17.679 186.059 17.3582C185.418 17.3459 185.109 17.0251 185.418 16.7167Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M229.011 158.855C229.011 159.176 228.69 159.484 228.061 159.484C225.852 159.164 223.644 158.855 221.744 158.226C221.423 158.226 221.114 157.597 221.114 157.276C221.114 156.955 221.744 156.646 222.064 156.646C224.273 156.967 226.173 157.597 228.382 157.905C228.703 157.905 229.011 158.226 229.011 158.855Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M175.005 134.215C175.326 133.894 175.955 133.894 176.264 134.215C177.843 135.473 179.743 136.744 181.323 138.323C181.643 138.644 181.643 138.953 181.643 139.582C181.323 139.903 181.323 139.903 181.014 139.903H180.385C178.485 138.644 176.905 137.373 175.326 135.794C175.005 135.165 174.684 134.536 175.005 134.215Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M186.998 68.5102C186.369 68.5102 186.048 68.5102 186.048 68.1894C185.727 67.8687 186.048 67.2394 186.369 67.2394L190.157 65.6601C190.786 65.3393 191.736 65.0308 192.365 64.71C192.686 64.3892 193.315 64.71 193.315 65.0308C193.636 65.3516 193.315 65.9809 192.994 65.9809C192.365 66.3017 191.415 66.6101 190.786 66.9309L186.998 68.5102Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M191.733 146.525H191.412C189.512 145.575 187.624 144.317 185.724 143.046C185.403 142.725 185.094 142.417 185.403 141.787C185.724 141.467 186.032 141.158 186.661 141.467C188.562 142.725 190.449 143.675 192.029 144.625C192.349 144.946 192.658 145.254 192.349 145.575C192.374 146.525 192.053 146.525 191.733 146.525Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M130.464 6.29044C130.143 6.29044 129.835 6.29044 129.835 5.96965C129.514 5.64886 129.835 5.0196 130.156 4.71113C132.056 3.4526 133.943 2.50255 135.844 1.87329H136.164C136.485 1.87329 137.115 1.87329 137.115 2.50255C137.115 2.82334 137.115 3.45261 136.485 3.45261H136.164C134.264 4.08187 132.377 5.03192 130.797 6.29044C130.785 5.96965 130.785 6.29044 130.464 6.29044Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M121.937 15.7648H121.617C121.296 15.444 120.987 15.1356 121.296 14.8148C122.246 12.9147 123.504 11.0269 125.084 9.44762C125.404 9.12683 126.034 9.12683 126.342 9.44762C126.663 9.76841 126.663 10.3977 126.342 10.7062C125.084 12.2855 123.813 13.8648 122.863 15.765L121.937 15.7648Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M174.055 72.9419C173.734 72.6211 174.055 71.9918 174.376 71.9918L180.372 69.4625C180.693 69.1417 181.322 69.4625 181.322 69.7833C181.643 70.1041 181.322 70.7333 181.001 70.7333L175.005 73.2627H174.684C174.363 73.5711 174.055 73.2503 174.055 72.9419Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M130.46 57.7782L132.99 63.7745C133.311 64.0953 132.99 64.7246 132.669 64.7246H132.348C132.027 64.7246 131.719 64.4038 131.719 64.0953L129.19 58.099C128.869 57.7782 129.19 57.1489 129.51 57.1489C129.831 57.1489 130.46 57.1489 130.46 57.7782Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M119.086 28.4005C118.765 28.4005 118.136 28.0798 118.136 27.7713V26.8212C118.136 24.9211 118.457 23.0334 118.765 21.1332C118.765 20.8124 119.394 20.5039 119.715 20.5039C120.036 20.5039 120.344 21.1332 120.344 21.454C120.024 23.3541 119.715 24.9335 119.715 26.8211V27.4504C120.036 27.7712 119.727 28.4005 119.086 28.4005Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M241.014 159.16C241.334 159.16 241.643 159.481 241.643 160.11C241.643 160.431 241.322 160.739 240.693 160.739C238.484 160.739 236.276 160.418 234.055 160.11C233.734 160.11 233.425 159.789 233.425 159.16C233.425 158.839 233.746 158.531 234.376 158.531C236.905 158.851 239.113 159.16 241.014 159.16Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M202.163 27.4462C201.842 27.4462 201.533 27.4462 201.533 27.1254C200.275 25.5461 198.695 23.9667 197.116 22.7083C196.796 22.3876 196.796 21.7583 197.116 21.4498C197.437 21.129 198.066 21.129 198.375 21.4498C200.275 22.7083 201.533 24.6084 203.113 26.1878C203.434 26.5086 203.434 27.1378 202.792 27.4463L202.163 27.4462Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M160.15 7.24078C158.57 5.98225 156.67 4.71141 154.783 4.08215C154.462 3.76136 154.153 3.45288 154.462 3.13209C154.783 2.8113 155.091 2.50283 155.412 2.8113C157.312 3.76136 159.2 5.01988 161.1 6.29085C161.421 6.61164 161.421 6.92011 161.1 7.54938C160.779 7.87017 160.779 7.87016 160.471 7.87016C160.471 7.54937 160.471 7.24078 160.15 7.24078Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M203.11 57.4549C201.852 59.355 200.272 60.9345 198.693 62.5138C198.693 62.5138 198.372 62.8346 198.064 62.8346C197.743 62.8346 197.743 62.8346 197.435 62.5138C197.114 62.193 197.114 61.5637 197.435 61.2553C199.014 59.9968 200.593 58.4174 201.543 56.5173C201.864 56.1965 202.173 56.1965 202.802 56.1965C203.11 56.505 203.431 57.1465 203.11 57.4549Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M168.694 17.3455C168.373 17.3455 168.064 17.0247 168.064 17.0247C167.114 15.1246 166.164 13.2369 164.906 11.6576C164.585 11.3368 164.585 10.7075 164.906 10.399C165.226 10.0782 165.856 10.0782 166.164 10.399C167.423 12.2991 168.694 14.1869 169.644 16.0871C169.965 16.4079 169.644 17.0372 169.323 17.0372C169.002 17.3456 168.694 17.3455 168.694 17.3455Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M68.2412 95.3579C66.0327 95.0371 63.8242 94.7286 61.924 94.0993C61.6032 94.0993 61.2947 93.4701 61.2947 93.1493C61.2947 92.8285 61.924 92.52 62.2447 92.52C64.4533 92.8408 66.3535 93.4701 68.562 93.7785C68.8828 93.7785 69.1913 94.4078 69.1913 94.7286C69.1913 95.0494 68.8705 95.3579 68.2412 95.3579C68.5497 95.3579 68.5497 95.3579 68.2412 95.3579Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M107.095 94.4072C107.724 94.4072 108.045 94.728 108.045 95.0365C108.045 95.3573 107.724 95.9865 107.416 95.9865C105.207 96.3073 102.999 96.6158 100.778 96.6158C100.457 96.6158 100.148 96.295 99.8276 95.9865C99.8276 95.6658 100.148 95.0365 100.457 95.0365C102.986 94.728 105.195 94.728 107.095 94.4072Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M122.891 40.7116C122.57 40.7116 122.57 40.7116 122.891 40.7116C122.262 40.7116 121.941 40.7116 121.941 40.3908L120.362 36.9113C120.041 35.9612 119.732 35.332 119.411 34.3819C119.411 34.0611 119.411 33.4319 120.041 33.4319C120.362 33.4319 120.991 33.4319 120.991 34.0611C121.312 35.0112 121.62 35.6405 121.941 36.5905L123.52 40.0701C123.52 40.0824 123.199 40.4032 122.891 40.7116Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M120.36 93.7788C118.152 94.0996 116.252 94.7288 114.043 95.0373C113.722 95.0373 113.414 94.7165 113.093 94.408C113.093 94.0872 113.414 93.458 113.722 93.458C115.931 93.1372 117.831 92.5079 120.04 92.1995C120.36 92.1995 120.99 92.5202 120.99 92.8287C120.99 93.1495 120.669 93.7788 120.36 93.7788Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M124.773 45.1434C125.094 44.8226 125.723 45.1434 125.723 45.4642L128.253 51.4605C128.574 51.7813 128.253 52.4106 127.932 52.4106H127.611C127.29 52.4106 126.982 52.0898 126.982 51.7813L124.453 45.785C124.144 45.7726 124.144 45.4518 124.773 45.1434Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M55.6049 92.5231C53.3963 91.8939 51.4961 91.2646 49.2876 90.623C48.9668 90.623 48.6584 89.9937 48.6584 89.673C48.6584 89.3522 49.2876 89.0437 49.6084 89.0437C51.5085 89.673 53.7171 90.3022 55.9256 90.9438C56.2464 90.9438 56.5549 91.5731 56.5549 91.8939C56.5549 92.2023 56.2341 92.5231 55.6049 92.5231Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M43.2809 88.7368C41.3808 88.1075 39.1722 87.1574 37.2846 86.2074C36.9638 85.8866 36.6553 85.5781 36.9638 85.2573C37.2846 84.9365 37.593 84.6281 37.9138 84.9365C39.8139 85.8866 42.0226 86.5159 43.9102 87.1451C44.231 87.1451 44.5394 87.7744 44.5394 88.0952C44.231 88.416 43.9225 88.7368 43.2809 88.7368Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M90.0328 96.936H87.8242C87.5034 96.936 86.8741 96.6152 86.8741 95.9859C86.8741 95.6652 87.1949 95.0359 87.8242 95.0359H90.0328H94.1415C94.4623 95.0359 95.0916 95.3567 95.0916 95.6652C95.0916 95.9859 94.7708 96.6152 94.4623 96.6152C92.883 96.936 91.6119 96.936 90.0328 96.936Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M132.675 90.3149C130.467 90.9442 128.567 91.5734 126.358 92.215H126.037C125.716 92.215 125.408 91.8942 125.408 91.5858C125.408 91.265 125.408 90.6357 126.037 90.6357C127.937 90.0064 130.146 89.3772 132.355 88.7356C132.675 88.7356 133.305 88.7356 133.305 89.3649C133.305 89.6733 133.305 89.9941 132.675 90.3149Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M81.1791 96.6314C78.9705 96.6314 76.7621 96.3106 74.5409 96.0022C74.2201 96.0022 73.9117 95.6814 73.9117 95.0521C73.9117 94.7313 74.2324 94.4229 74.8617 94.4229C77.0703 94.7436 79.2787 94.7437 81.1789 95.0521C81.4997 95.0521 81.8082 95.3729 81.8082 96.0022C82.129 96.3106 81.8207 96.6314 81.1791 96.6314C81.4999 96.6314 81.4999 96.6314 81.1791 96.6314Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M150.363 81.7741L156.359 79.2447C156.68 78.9239 157.309 79.2447 157.309 79.5655C157.63 79.8863 157.309 80.5155 156.988 80.5155L150.992 83.0449H150.671C150.35 83.0449 150.042 82.7241 150.042 82.4156C149.733 82.4156 150.042 81.7741 150.363 81.7741Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M162.675 78.3104C162.355 78.3104 162.046 77.9896 162.046 77.6811C161.725 77.3603 162.046 76.7311 162.367 76.7311L168.363 74.2017C168.684 73.8809 169.313 74.2017 169.313 74.5225C169.634 74.8433 169.313 75.4726 168.992 75.4726L162.675 78.3104Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M162.048 121.903C161.727 121.903 161.727 121.903 161.419 121.582C160.79 120.632 160.16 120.003 159.21 119.053C158.581 118.103 157.952 117.473 157.31 116.523C156.99 116.202 156.99 115.573 157.631 115.265C157.952 114.944 158.581 114.944 158.89 115.585C159.519 116.536 160.148 117.165 160.79 118.115C161.419 119.065 162.048 119.694 162.998 120.644C163.319 120.965 163.319 121.594 162.998 121.903H162.048Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M151.621 104.835C152.879 106.735 153.829 108.623 155.1 110.202C155.421 110.523 155.1 111.152 154.779 111.461H154.459C154.138 111.461 153.829 111.461 153.829 111.14C152.571 109.24 151.3 107.352 150.35 105.773C150.029 105.452 150.35 104.823 150.671 104.514C150.671 104.206 151.312 104.527 151.621 104.835Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M166.791 125.366C168.37 126.945 169.629 128.524 171.208 129.783C171.529 130.103 171.529 130.733 171.208 131.041C170.887 131.362 170.887 131.362 170.579 131.362C170.258 131.362 170.258 131.362 169.95 131.041L165.212 126.303C164.891 125.982 164.891 125.353 165.212 125.045C166.162 125.057 166.47 125.057 166.791 125.366Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M142.472 1.87332C142.151 1.87332 141.522 1.55254 141.522 1.24406C141.522 0.923274 141.842 0.294008 142.151 0.294008C144.359 -0.0267823 146.568 0.29401 148.789 0.614801C149.11 0.614801 149.418 1.24406 149.418 1.56485C149.418 1.88564 149.097 2.19412 148.468 2.19412C146.889 1.87332 144.68 1.55253 142.472 1.87332Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M147.513 100.42C147.192 100.42 146.884 100.42 146.884 100.099C145.933 98.1993 144.983 96.3115 144.046 94.4113C143.725 94.0905 144.046 93.4612 144.366 93.4612C144.687 93.1405 145.317 93.4613 145.317 93.782C146.267 95.6821 147.217 97.5699 148.154 99.4701C148.475 99.7909 148.154 100.42 147.834 100.42H147.513Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M142.468 88.7353C142.147 88.7353 142.147 88.7353 142.468 88.7353C141.839 88.7353 141.518 88.7353 141.518 88.4145C141.518 88.0937 141.197 87.7852 141.197 87.4644C140.568 87.7852 139.938 88.0937 139.297 88.0937C138.976 88.0937 138.347 88.0937 138.347 87.7729C138.026 87.4521 138.347 86.8228 138.668 86.8228C139.297 86.5021 139.926 86.1936 140.568 86.1936L138.988 82.714C138.668 82.3932 138.988 81.764 139.309 81.764C139.63 81.4432 140.259 81.764 140.259 82.0848L141.839 85.5643L144.368 84.6143C144.689 84.2935 145.318 84.6143 145.318 84.9351C145.639 85.2558 145.318 85.8851 144.997 85.8851L142.468 86.8352C142.468 87.1559 142.789 87.4644 142.789 87.7852C143.097 88.0937 142.776 88.4145 142.468 88.7353Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M137.1 76.73C136.78 76.73 136.471 76.4092 136.471 76.1008L133.942 70.1044C133.621 69.7836 133.942 69.1544 134.262 69.1544C134.583 68.8336 135.213 69.1544 135.213 69.4752L137.742 75.4715C138.038 76.1008 137.73 76.4092 137.1 76.73Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M173.425 18.6015C173.105 18.6015 172.796 18.2807 172.796 17.9723C172.796 17.6515 172.796 17.0222 173.425 17.0222C175.634 16.3929 177.842 15.7637 180.064 15.7637C180.693 15.7637 181.014 16.0845 181.014 16.3929C181.014 16.7137 180.693 17.343 180.384 17.343C177.522 17.343 175.634 17.6638 173.425 18.6015Z"
                            fill="black" fill-opacity="0.1" />
                        <path
                            d="M243.545 150.329C241.337 154.117 235.649 154.117 233.44 150.329C229.652 143.691 224.914 134.857 224.914 130.427C224.914 122.852 230.911 116.843 238.499 116.843C246.075 116.843 252.084 122.839 252.084 130.427C252.071 134.844 247.333 143.691 243.545 150.329ZM238.486 123.16C234.378 123.16 231.219 126.318 231.219 130.427C231.219 134.536 234.378 137.695 238.486 137.695C242.595 137.695 245.754 134.536 245.754 130.427C245.754 126.318 242.595 123.16 238.486 123.16Z"
                            fill="black" fill-opacity="0.1" />
                    </svg>
                </div>

            </div>
        </div>


        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">
            <?php
            include $fold . 'includesv2/header.php';
            ?>
            <?php
            include $fold . 'includesv2/rateWidget_forex.php';
            ?>
            <?php
            include $fold . 'includesv2/bankingPartners.php';
            ?>
            <?php
            include $fold . 'includesv2/howItWorksBuyForex.php';
            ?>
            <?php
            include $fold . 'includesv2/extravelmoneyNumbers.php';
            ?>
            <?php
            include $fold . 'includesv2/features_ce.php';
            ?>
            <?php
            include $fold . 'includesv2/press.php';
            ?>
            <?php
            include 'facts-eur.php';
            ?>
            <?php
            include '../currency-list.php';
            ?>
            <div class="mt-12 customMd:mt-24 h-1"></div>
        </div>
    </div>
    <?php
    include $fold . 'includesv2/footer.php';
    ?>
    <?php
    include $fold . 'includesv2/footerScripts.php';
    ?>

</body>

</html>