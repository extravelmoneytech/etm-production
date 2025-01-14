<style>
    .success-popup {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .success-popup.fade-out {
        animation: fadeOut 0.3s ease-out forwards;
    }

    @keyframes fadeOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }

        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }

    .checkmark {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: inline-block;
        stroke-width: 2;
        stroke: #fff;
        stroke-miterlimit: 10;
    }
</style>
<div class="mt-24 px-5 sm:px-12 md:px-24 relative">
    <p class="text-[#18325b] text-3xl font-extrabold ">Connect with a real expert instantly!</p>
    <p class="text-[#555555] text-lg font-medium leading-[30px] mt-4">Get all your questions answered from exchange rates to KYC, TCS and more</p>
    <div class="flex flex-col md:flex-row bg-none sm:bg-gradient-to-r from-[rgba(14,81,160,0.03)] to-[rgba(227,29,28,0.03)] bg-white rounded-2xl justify-between lg:px-6 mt-8">
        <div class="flex items-center justify-center sm:items-end w-full lg:w-[40%]">
            <img src="<?php echo $fold . 'public/images/callBack.png'; ?>" alt="">
        </div>
        <div class="flex flex-col sm:flex-col-reverse bg-gradient-to-r from-[rgba(14,81,160,0.03)] to-[rgba(227,29,28,0.03)] bg-white sm:bg-none sm:bg-transparent p-3 rounded-2xl justify-center w-full lg:w-[60%]">
            <div class="flex flex-col sm:flex-row gap-2 mt-0 sm:mt-6">
                <div class="h-14 p-2.5 bg-[#0e51a0] rounded-lg justify-center items-center gap-1 inline-flex cursor-pointer" id="getCallBack">
                    <div class="w-6 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M20.8472 14.9909L16.4306 13.0119L16.4184 13.0062C16.1892 12.9082 15.939 12.8688 15.6907 12.8917C15.4424 12.9147 15.2037 12.9991 14.9963 13.1375C14.9718 13.1536 14.9484 13.1712 14.9259 13.19L12.6441 15.1353C11.1984 14.4331 9.70595 12.9519 9.00376 11.525L10.9519 9.20843C10.9706 9.185 10.9884 9.16156 11.0053 9.13625C11.1407 8.92934 11.2229 8.69217 11.2445 8.44585C11.2661 8.19952 11.2264 7.95167 11.1291 7.72437V7.71312L9.14438 3.28906C9.0157 2.99212 8.79444 2.74476 8.51362 2.58391C8.2328 2.42305 7.9075 2.35733 7.58626 2.39656C6.31592 2.56372 5.14986 3.18759 4.30588 4.15165C3.4619 5.1157 2.99771 6.35402 3.00001 7.63531C3.00001 15.0791 9.05626 21.1353 16.5 21.1353C17.7813 21.1376 19.0196 20.6734 19.9837 19.8294C20.9477 18.9855 21.5716 17.8194 21.7388 16.5491C21.7781 16.2279 21.7125 15.9027 21.5518 15.6219C21.3911 15.3411 21.144 15.1198 20.8472 14.9909ZM16.5 19.6353C13.3185 19.6318 10.2682 18.3664 8.01856 16.1168C5.76888 13.8671 4.50348 10.8168 4.50001 7.63531C4.49648 6.71983 4.82631 5.83437 5.42789 5.14428C6.02947 4.4542 6.86167 4.00668 7.76907 3.88531C7.7687 3.88905 7.7687 3.89282 7.76907 3.89656L9.73782 8.30281L7.80001 10.6222C7.78034 10.6448 7.76247 10.669 7.74657 10.6944C7.60549 10.9109 7.52273 11.1601 7.5063 11.418C7.48988 11.6759 7.54035 11.9336 7.65282 12.1662C8.5022 13.9034 10.2525 15.6406 12.0084 16.4891C12.2428 16.6005 12.502 16.6492 12.7608 16.6305C13.0196 16.6117 13.2692 16.5262 13.485 16.3822C13.5091 16.366 13.5322 16.3484 13.5544 16.3297L15.8334 14.3853L20.2397 16.3587C20.2397 16.3587 20.2472 16.3587 20.25 16.3587C20.1301 17.2674 19.6833 18.1013 18.9931 18.7044C18.3028 19.3074 17.4166 19.6384 16.5 19.6353Z" fill="white" />
                        </svg>
                    </div>
                    <span class="text-white text-base font-bold  leading-normal">Get a Call back</span>
                </div>

                <a class="h-14 p-2.5 bg-[#20bc73] rounded-lg inline-flex justify-center items-center" href="https://api.whatsapp.com/send?phone=914842886900" target="_blank">
                    <div class="  justify-center items-center gap-1 inline-flex cursor-pointer">
                        <div class="w-6 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M17.5878 13.714L14.5878 12.214C14.4697 12.1552 14.3381 12.1285 14.2065 12.1367C14.0748 12.145 13.9476 12.1878 13.8378 12.2609L12.4606 13.1796C11.8284 12.8321 11.3081 12.3118 10.9606 11.6796L11.8793 10.3024C11.9524 10.1926 11.9952 10.0654 12.0035 9.93374C12.0117 9.80205 11.985 9.67053 11.9262 9.55244L10.4262 6.55244C10.364 6.42688 10.2679 6.32125 10.1488 6.24752C10.0296 6.17378 9.89224 6.13489 9.75213 6.13525C8.75757 6.13525 7.80374 6.53034 7.10048 7.2336C6.39722 7.93687 6.00213 8.89069 6.00213 9.88525C6.00461 12.0725 6.8746 14.1695 8.42124 15.7161C9.96787 17.2628 12.0649 18.1328 14.2521 18.1353C14.7446 18.1353 15.2322 18.0383 15.6872 17.8498C16.1422 17.6613 16.5556 17.3851 16.9038 17.0369C17.252 16.6887 17.5282 16.2753 17.7167 15.8203C17.9051 15.3653 18.0021 14.8777 18.0021 14.3853C18.0022 14.2459 17.9635 14.1093 17.8903 13.9907C17.8171 13.8722 17.7124 13.7764 17.5878 13.714ZM14.2521 16.6353C12.4625 16.6333 10.7468 15.9215 9.48135 14.656C8.21591 13.3906 7.50411 11.6749 7.50213 9.88525C7.50198 9.36505 7.68209 8.86087 8.01181 8.45851C8.34153 8.05615 8.80048 7.78047 9.31057 7.67838L10.3868 9.83463L9.47088 11.1978C9.40243 11.3004 9.36038 11.4184 9.34844 11.5412C9.3365 11.664 9.35505 11.7879 9.40244 11.9018C9.93905 13.1772 10.9536 14.1918 12.229 14.7284C12.3433 14.7779 12.4681 14.7981 12.5921 14.7873C12.7162 14.7765 12.8356 14.735 12.9396 14.6665L14.3093 13.7534L16.4656 14.8296C16.3627 15.3403 16.0858 15.7995 15.6821 16.1287C15.2785 16.458 14.7731 16.637 14.2521 16.6353ZM12.0021 2.38525C10.3188 2.38489 8.66408 2.82034 7.19899 3.64922C5.7339 4.4781 4.50836 5.67218 3.64166 7.11522C2.77497 8.55827 2.29664 10.2011 2.25324 11.8839C2.20984 13.5666 2.60285 15.232 3.394 16.7178L2.32994 19.9099C2.2418 20.1742 2.22901 20.4579 2.293 20.729C2.35699 21.0002 2.49524 21.2481 2.69224 21.4451C2.88924 21.6421 3.13722 21.7804 3.40837 21.8444C3.67953 21.9084 3.96315 21.8956 4.22744 21.8074L7.41963 20.7434C8.72722 21.4389 10.1761 21.8273 11.6562 21.8793C13.1364 21.9312 14.6089 21.6452 15.962 21.0431C17.3151 20.441 18.5133 19.5385 19.4656 18.4042C20.4178 17.2699 21.0992 15.9335 21.4579 14.4966C21.8166 13.0596 21.8432 11.5598 21.5357 10.111C21.2282 8.66226 20.5947 7.30257 19.6833 6.13518C18.7719 4.96778 17.6065 4.02337 16.2755 3.37362C14.9446 2.72387 13.4832 2.38586 12.0021 2.38525ZM12.0021 20.3853C10.5518 20.3862 9.12691 20.0043 7.8715 19.2781C7.77959 19.2248 7.67739 19.1916 7.57169 19.1808C7.46599 19.1699 7.35919 19.1817 7.25838 19.2153L3.75213 20.3853L4.92119 16.879C4.95489 16.7783 4.9668 16.6715 4.95613 16.5658C4.94547 16.4601 4.91247 16.3579 4.85932 16.2659C3.94991 14.6936 3.58479 12.8652 3.82059 11.0642C4.05639 9.26326 4.87993 7.59046 6.16346 6.30531C7.44699 5.02016 9.11875 4.19451 10.9194 3.95643C12.7201 3.71836 14.549 4.08117 16.1224 4.98858C17.6958 5.896 18.9258 7.29729 19.6215 8.97508C20.3173 10.6529 20.4399 12.5134 19.9703 14.268C19.5008 16.0225 18.4654 17.5731 17.0246 18.6792C15.5839 19.7853 13.8185 20.385 12.0021 20.3853Z" fill="white" />
                            </svg>
                        </div>
                        <div class="text-white text-base font-bold font-['Plus Jakarta Sans'] leading-normal">WhatsApp Us</div>
                    </div>
                </a>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 mt-6 sm:mt-0 gap-6">
                <div class=" justify-start items-start gap-2 inline-flex">
                    <div class="h-8 py-1 justify-start items-center gap-2.5 flex">
                        <div class="h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M19.5038 14C19.5057 14.3058 19.4128 14.6047 19.2379 14.8555C19.0629 15.1063 18.8146 15.2968 18.5269 15.4006L13.6913 17.1875L11.9101 22.0269C11.8046 22.3134 11.6137 22.5608 11.3633 22.7355C11.1128 22.9101 10.8148 23.0038 10.5094 23.0038C10.2041 23.0038 9.90606 22.9101 9.6556 22.7355C9.40514 22.5608 9.2143 22.3134 9.10881 22.0269L7.31631 17.1875L2.47694 15.4063C2.19037 15.3008 1.94305 15.1099 1.76836 14.8595C1.59367 14.609 1.5 14.311 1.5 14.0056C1.5 13.7003 1.59367 13.4022 1.76836 13.1518C1.94305 12.9013 2.19037 12.7105 2.47694 12.605L7.31631 10.8125L9.09756 5.97313C9.20305 5.68656 9.39389 5.43924 9.64435 5.26455C9.89481 5.08986 10.1928 4.99619 10.4982 4.99619C10.8036 4.99619 11.1016 5.08986 11.352 5.26455C11.6025 5.43924 11.7933 5.68656 11.8988 5.97313L13.6913 10.8125L18.5307 12.5938C18.8185 12.6986 19.0667 12.8901 19.241 13.142C19.4153 13.3939 19.5072 13.6937 19.5038 14ZM14.2538 5H15.7538V6.5C15.7538 6.69891 15.8328 6.88968 15.9735 7.03033C16.1141 7.17098 16.3049 7.25 16.5038 7.25C16.7027 7.25 16.8935 7.17098 17.0341 7.03033C17.1748 6.88968 17.2538 6.69891 17.2538 6.5V5H18.7538C18.9527 5 19.1435 4.92098 19.2841 4.78033C19.4248 4.63968 19.5038 4.44891 19.5038 4.25C19.5038 4.05109 19.4248 3.86032 19.2841 3.71967C19.1435 3.57902 18.9527 3.5 18.7538 3.5H17.2538V2C17.2538 1.80109 17.1748 1.61032 17.0341 1.46967C16.8935 1.32902 16.7027 1.25 16.5038 1.25C16.3049 1.25 16.1141 1.32902 15.9735 1.46967C15.8328 1.61032 15.7538 1.80109 15.7538 2V3.5H14.2538C14.0549 3.5 13.8641 3.57902 13.7235 3.71967C13.5828 3.86032 13.5038 4.05109 13.5038 4.25C13.5038 4.44891 13.5828 4.63968 13.7235 4.78033C13.8641 4.92098 14.0549 5 14.2538 5ZM22.5038 8H21.7538V7.25C21.7538 7.05109 21.6748 6.86032 21.5341 6.71967C21.3935 6.57902 21.2027 6.5 21.0038 6.5C20.8049 6.5 20.6141 6.57902 20.4735 6.71967C20.3328 6.86032 20.2538 7.05109 20.2538 7.25V8H19.5038C19.3049 8 19.1141 8.07902 18.9735 8.21967C18.8328 8.36032 18.7538 8.55109 18.7538 8.75C18.7538 8.94891 18.8328 9.13968 18.9735 9.28033C19.1141 9.42098 19.3049 9.5 19.5038 9.5H20.2538V10.25C20.2538 10.4489 20.3328 10.6397 20.4735 10.7803C20.6141 10.921 20.8049 11 21.0038 11C21.2027 11 21.3935 10.921 21.5341 10.7803C21.6748 10.6397 21.7538 10.4489 21.7538 10.25V9.5H22.5038C22.7027 9.5 22.8935 9.42098 23.0341 9.28033C23.1748 9.13968 23.2538 8.94891 23.2538 8.75C23.2538 8.55109 23.1748 8.36032 23.0341 8.21967C22.8935 8.07902 22.7027 8 22.5038 8Z" fill="url(#paint0_linear_3556_33155)" />
                                <defs>
                                    <linearGradient id="paint0_linear_3556_33155" x1="31.058" y1="33.3369" x2="1.89826" y2="-14.5612" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0E51A0" />
                                        <stop offset="1" stop-color="#E31D1C" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
                        <div class="text-black text-xl font-bold font-['Plus Jakarta Sans'] leading-[30px]">Genuine Experts</div>
                        <div class="self-stretch text-[#555555] text-base font-normal font-['Plus Jakarta Sans'] leading-normal">Every advisor is a seasoned forex specialist.</div>
                    </div>
                </div>

                <div class=" justify-start items-start gap-2 inline-flex">
                    <div class="h-8 py-1 justify-start items-center gap-2.5 flex">
                        <div class="h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M19.5038 14C19.5057 14.3058 19.4128 14.6047 19.2379 14.8555C19.0629 15.1063 18.8146 15.2968 18.5269 15.4006L13.6913 17.1875L11.9101 22.0269C11.8046 22.3134 11.6137 22.5608 11.3633 22.7355C11.1128 22.9101 10.8148 23.0038 10.5094 23.0038C10.2041 23.0038 9.90606 22.9101 9.6556 22.7355C9.40514 22.5608 9.2143 22.3134 9.10881 22.0269L7.31631 17.1875L2.47694 15.4063C2.19037 15.3008 1.94305 15.1099 1.76836 14.8595C1.59367 14.609 1.5 14.311 1.5 14.0056C1.5 13.7003 1.59367 13.4022 1.76836 13.1518C1.94305 12.9013 2.19037 12.7105 2.47694 12.605L7.31631 10.8125L9.09756 5.97313C9.20305 5.68656 9.39389 5.43924 9.64435 5.26455C9.89481 5.08986 10.1928 4.99619 10.4982 4.99619C10.8036 4.99619 11.1016 5.08986 11.352 5.26455C11.6025 5.43924 11.7933 5.68656 11.8988 5.97313L13.6913 10.8125L18.5307 12.5938C18.8185 12.6986 19.0667 12.8901 19.241 13.142C19.4153 13.3939 19.5072 13.6937 19.5038 14ZM14.2538 5H15.7538V6.5C15.7538 6.69891 15.8328 6.88968 15.9735 7.03033C16.1141 7.17098 16.3049 7.25 16.5038 7.25C16.7027 7.25 16.8935 7.17098 17.0341 7.03033C17.1748 6.88968 17.2538 6.69891 17.2538 6.5V5H18.7538C18.9527 5 19.1435 4.92098 19.2841 4.78033C19.4248 4.63968 19.5038 4.44891 19.5038 4.25C19.5038 4.05109 19.4248 3.86032 19.2841 3.71967C19.1435 3.57902 18.9527 3.5 18.7538 3.5H17.2538V2C17.2538 1.80109 17.1748 1.61032 17.0341 1.46967C16.8935 1.32902 16.7027 1.25 16.5038 1.25C16.3049 1.25 16.1141 1.32902 15.9735 1.46967C15.8328 1.61032 15.7538 1.80109 15.7538 2V3.5H14.2538C14.0549 3.5 13.8641 3.57902 13.7235 3.71967C13.5828 3.86032 13.5038 4.05109 13.5038 4.25C13.5038 4.44891 13.5828 4.63968 13.7235 4.78033C13.8641 4.92098 14.0549 5 14.2538 5ZM22.5038 8H21.7538V7.25C21.7538 7.05109 21.6748 6.86032 21.5341 6.71967C21.3935 6.57902 21.2027 6.5 21.0038 6.5C20.8049 6.5 20.6141 6.57902 20.4735 6.71967C20.3328 6.86032 20.2538 7.05109 20.2538 7.25V8H19.5038C19.3049 8 19.1141 8.07902 18.9735 8.21967C18.8328 8.36032 18.7538 8.55109 18.7538 8.75C18.7538 8.94891 18.8328 9.13968 18.9735 9.28033C19.1141 9.42098 19.3049 9.5 19.5038 9.5H20.2538V10.25C20.2538 10.4489 20.3328 10.6397 20.4735 10.7803C20.6141 10.921 20.8049 11 21.0038 11C21.2027 11 21.3935 10.921 21.5341 10.7803C21.6748 10.6397 21.7538 10.4489 21.7538 10.25V9.5H22.5038C22.7027 9.5 22.8935 9.42098 23.0341 9.28033C23.1748 9.13968 23.2538 8.94891 23.2538 8.75C23.2538 8.55109 23.1748 8.36032 23.0341 8.21967C22.8935 8.07902 22.7027 8 22.5038 8Z" fill="url(#paint0_linear_3556_33155)" />
                                <defs>
                                    <linearGradient id="paint0_linear_3556_33155" x1="31.058" y1="33.3369" x2="1.89826" y2="-14.5612" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0E51A0" />
                                        <stop offset="1" stop-color="#E31D1C" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
                        <div class="text-black text-xl font-bold font-['Plus Jakarta Sans'] leading-[30px]">No Spam</div>
                        <div class="self-stretch text-[#555555] text-base font-normal font-['Plus Jakarta Sans'] leading-normal">We’ll only call when it’s necessary — no spam calls, ever.</div>
                    </div>
                </div>

                <div class=" justify-start items-start gap-2 inline-flex">
                    <div class="h-8 py-1 justify-start items-center gap-2.5 flex">
                        <div class="h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M19.5038 14C19.5057 14.3058 19.4128 14.6047 19.2379 14.8555C19.0629 15.1063 18.8146 15.2968 18.5269 15.4006L13.6913 17.1875L11.9101 22.0269C11.8046 22.3134 11.6137 22.5608 11.3633 22.7355C11.1128 22.9101 10.8148 23.0038 10.5094 23.0038C10.2041 23.0038 9.90606 22.9101 9.6556 22.7355C9.40514 22.5608 9.2143 22.3134 9.10881 22.0269L7.31631 17.1875L2.47694 15.4063C2.19037 15.3008 1.94305 15.1099 1.76836 14.8595C1.59367 14.609 1.5 14.311 1.5 14.0056C1.5 13.7003 1.59367 13.4022 1.76836 13.1518C1.94305 12.9013 2.19037 12.7105 2.47694 12.605L7.31631 10.8125L9.09756 5.97313C9.20305 5.68656 9.39389 5.43924 9.64435 5.26455C9.89481 5.08986 10.1928 4.99619 10.4982 4.99619C10.8036 4.99619 11.1016 5.08986 11.352 5.26455C11.6025 5.43924 11.7933 5.68656 11.8988 5.97313L13.6913 10.8125L18.5307 12.5938C18.8185 12.6986 19.0667 12.8901 19.241 13.142C19.4153 13.3939 19.5072 13.6937 19.5038 14ZM14.2538 5H15.7538V6.5C15.7538 6.69891 15.8328 6.88968 15.9735 7.03033C16.1141 7.17098 16.3049 7.25 16.5038 7.25C16.7027 7.25 16.8935 7.17098 17.0341 7.03033C17.1748 6.88968 17.2538 6.69891 17.2538 6.5V5H18.7538C18.9527 5 19.1435 4.92098 19.2841 4.78033C19.4248 4.63968 19.5038 4.44891 19.5038 4.25C19.5038 4.05109 19.4248 3.86032 19.2841 3.71967C19.1435 3.57902 18.9527 3.5 18.7538 3.5H17.2538V2C17.2538 1.80109 17.1748 1.61032 17.0341 1.46967C16.8935 1.32902 16.7027 1.25 16.5038 1.25C16.3049 1.25 16.1141 1.32902 15.9735 1.46967C15.8328 1.61032 15.7538 1.80109 15.7538 2V3.5H14.2538C14.0549 3.5 13.8641 3.57902 13.7235 3.71967C13.5828 3.86032 13.5038 4.05109 13.5038 4.25C13.5038 4.44891 13.5828 4.63968 13.7235 4.78033C13.8641 4.92098 14.0549 5 14.2538 5ZM22.5038 8H21.7538V7.25C21.7538 7.05109 21.6748 6.86032 21.5341 6.71967C21.3935 6.57902 21.2027 6.5 21.0038 6.5C20.8049 6.5 20.6141 6.57902 20.4735 6.71967C20.3328 6.86032 20.2538 7.05109 20.2538 7.25V8H19.5038C19.3049 8 19.1141 8.07902 18.9735 8.21967C18.8328 8.36032 18.7538 8.55109 18.7538 8.75C18.7538 8.94891 18.8328 9.13968 18.9735 9.28033C19.1141 9.42098 19.3049 9.5 19.5038 9.5H20.2538V10.25C20.2538 10.4489 20.3328 10.6397 20.4735 10.7803C20.6141 10.921 20.8049 11 21.0038 11C21.2027 11 21.3935 10.921 21.5341 10.7803C21.6748 10.6397 21.7538 10.4489 21.7538 10.25V9.5H22.5038C22.7027 9.5 22.8935 9.42098 23.0341 9.28033C23.1748 9.13968 23.2538 8.94891 23.2538 8.75C23.2538 8.55109 23.1748 8.36032 23.0341 8.21967C22.8935 8.07902 22.7027 8 22.5038 8Z" fill="url(#paint0_linear_3556_33155)" />
                                <defs>
                                    <linearGradient id="paint0_linear_3556_33155" x1="31.058" y1="33.3369" x2="1.89826" y2="-14.5612" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0E51A0" />
                                        <stop offset="1" stop-color="#E31D1C" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
                        <div class="text-black text-xl font-bold font-['Plus Jakarta Sans'] leading-[30px]">Advice, Not Sales</div>
                        <div class="self-stretch text-[#555555] text-base font-normal font-['Plus Jakarta Sans'] leading-normal">We're here to clear your doubts, not to sell services.</div>
                    </div>
                </div>

                <div class=" justify-start items-start gap-2 inline-flex">
                    <div class="h-8 py-1 justify-start items-center gap-2.5 flex">
                        <div class="h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M19.5038 14C19.5057 14.3058 19.4128 14.6047 19.2379 14.8555C19.0629 15.1063 18.8146 15.2968 18.5269 15.4006L13.6913 17.1875L11.9101 22.0269C11.8046 22.3134 11.6137 22.5608 11.3633 22.7355C11.1128 22.9101 10.8148 23.0038 10.5094 23.0038C10.2041 23.0038 9.90606 22.9101 9.6556 22.7355C9.40514 22.5608 9.2143 22.3134 9.10881 22.0269L7.31631 17.1875L2.47694 15.4063C2.19037 15.3008 1.94305 15.1099 1.76836 14.8595C1.59367 14.609 1.5 14.311 1.5 14.0056C1.5 13.7003 1.59367 13.4022 1.76836 13.1518C1.94305 12.9013 2.19037 12.7105 2.47694 12.605L7.31631 10.8125L9.09756 5.97313C9.20305 5.68656 9.39389 5.43924 9.64435 5.26455C9.89481 5.08986 10.1928 4.99619 10.4982 4.99619C10.8036 4.99619 11.1016 5.08986 11.352 5.26455C11.6025 5.43924 11.7933 5.68656 11.8988 5.97313L13.6913 10.8125L18.5307 12.5938C18.8185 12.6986 19.0667 12.8901 19.241 13.142C19.4153 13.3939 19.5072 13.6937 19.5038 14ZM14.2538 5H15.7538V6.5C15.7538 6.69891 15.8328 6.88968 15.9735 7.03033C16.1141 7.17098 16.3049 7.25 16.5038 7.25C16.7027 7.25 16.8935 7.17098 17.0341 7.03033C17.1748 6.88968 17.2538 6.69891 17.2538 6.5V5H18.7538C18.9527 5 19.1435 4.92098 19.2841 4.78033C19.4248 4.63968 19.5038 4.44891 19.5038 4.25C19.5038 4.05109 19.4248 3.86032 19.2841 3.71967C19.1435 3.57902 18.9527 3.5 18.7538 3.5H17.2538V2C17.2538 1.80109 17.1748 1.61032 17.0341 1.46967C16.8935 1.32902 16.7027 1.25 16.5038 1.25C16.3049 1.25 16.1141 1.32902 15.9735 1.46967C15.8328 1.61032 15.7538 1.80109 15.7538 2V3.5H14.2538C14.0549 3.5 13.8641 3.57902 13.7235 3.71967C13.5828 3.86032 13.5038 4.05109 13.5038 4.25C13.5038 4.44891 13.5828 4.63968 13.7235 4.78033C13.8641 4.92098 14.0549 5 14.2538 5ZM22.5038 8H21.7538V7.25C21.7538 7.05109 21.6748 6.86032 21.5341 6.71967C21.3935 6.57902 21.2027 6.5 21.0038 6.5C20.8049 6.5 20.6141 6.57902 20.4735 6.71967C20.3328 6.86032 20.2538 7.05109 20.2538 7.25V8H19.5038C19.3049 8 19.1141 8.07902 18.9735 8.21967C18.8328 8.36032 18.7538 8.55109 18.7538 8.75C18.7538 8.94891 18.8328 9.13968 18.9735 9.28033C19.1141 9.42098 19.3049 9.5 19.5038 9.5H20.2538V10.25C20.2538 10.4489 20.3328 10.6397 20.4735 10.7803C20.6141 10.921 20.8049 11 21.0038 11C21.2027 11 21.3935 10.921 21.5341 10.7803C21.6748 10.6397 21.7538 10.4489 21.7538 10.25V9.5H22.5038C22.7027 9.5 22.8935 9.42098 23.0341 9.28033C23.1748 9.13968 23.2538 8.94891 23.2538 8.75C23.2538 8.55109 23.1748 8.36032 23.0341 8.21967C22.8935 8.07902 22.7027 8 22.5038 8Z" fill="url(#paint0_linear_3556_33155)" />
                                <defs>
                                    <linearGradient id="paint0_linear_3556_33155" x1="31.058" y1="33.3369" x2="1.89826" y2="-14.5612" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0E51A0" />
                                        <stop offset="1" stop-color="#E31D1C" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-start items-start gap-1 inline-flex">
                        <div class="text-black text-xl font-bold font-['Plus Jakarta Sans'] leading-[30px]">Absolutely Free</div>
                        <div class="self-stretch text-[#555555] text-base font-normal font-['Plus Jakarta Sans'] leading-normal">It's completely free. No strings attached.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="callBackOverLay" class="w-full h-[120vh] fixed hidden top-0 left-0 z-[1000] bg-white customMd:bg-black/30  customMd:bg-opacity-60 " style="backdrop-filter: blur(7px)">

        <div id="callBackWidget" class="mt-4 sm:mt-0 flex w-full absolute  z-20 top-0 left-0 bg-white px-6  py-6 customMd:rounded-xl flex-col  customMd:bg-white h-fit min-h-[100vh] customMd:min-h-fit customMd:max-w-2xl customMd:left-2/4 customMd:top-1/2  customMd:transform customMd:-translate-x-1/2 customMd:-translate-y-2/3">
            <div class="text-[#18325b] text-2xl font-extrabold font-['Plus Jakarta Sans'] leading-[31.20px]">Connect with a real expert <span style="word-wrap: break-word;background: linear-gradient(329deg, #0E51A0 -43.1%, #E31D1C 144.49%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">instantly!</span></div>
            <div class="mt-4">
                <p class="text-black/60 text-sm font-medium leading-[21px]">Full Name</p>
                <input value="" placeholder="Enter you full name here." id="fullName" type="text" class="h-12 p-2 rounded-lg border border-black/10 text-black text-sm font-bold w-full mt-2 outline-none">

            </div>

            <div class="mt-4" id="mobContainer">
                <p class="text-black/60 text-sm font-medium leading-[21px] ">Phone Number</p>
                <div class="flex gap-2 h-12 rounded-lg border border-black/10 text-black mt-2" id="otpMobileContainer ">
                    <div id="" class="p-[2px] rounded-[12px] justify-start items-center gap-2.5 inline-flex">
                        <div style="padding: 0.75rem 0.5rem;height: 3rem;" class="justify-start rounded-[10px] items-center gap-2.5 flex w-full border-0">
                            <div style="height: fit-content;padding: 0;border: none;width: 100%;" class="dropdownMain select-none countryCodeContainer" data-search="true" id="callBackCountryCodeMain" dataval="IN" custom-content>

                                <div class="selectedItem"><span>+91</span><span>IN</span></div>

                                <ul class="dropdownList overflow-scroll w-80">

                                    <li class="text-sm" value="AF" alternativename="Afghanistan (‫افغانستان‬‎)" mob-code="+93"><span>+93</span> <span> Afghanistan (‫افغانستان‬‎)</span></li>
                                    <li class="text-sm" value="AL" alternativename="Albania (Shqipëri)" mob-code="+355"><span>+355</span> <span> Albania (Shqipëri)</span></li>
                                    <li class="text-sm" value="DZ" alternativename="Algeria (‫الجزائر‬‎)" mob-code="+213"><span>+213</span> <span> Algeria (‫الجزائر‬‎)</span></li>
                                    <li class="text-sm" value="AS" alternativename="American Samoa" mob-code="+1"><span>+1</span> <span> American Samoa</span></li>
                                    <li class="text-sm" value="AD" alternativename="Andorra" mob-code="+376"><span>+376</span> <span> Andorra</span></li>
                                    <li class="text-sm" value="AO" alternativename="Angola" mob-code="+244"><span>+244</span> <span> Angola</span></li>
                                    <li class="text-sm" value="AI" alternativename="Anguilla" mob-code="+1"><span>+1</span> <span> Anguilla</span></li>
                                    <li class="text-sm" value="AG" alternativename="Antigua and Barbuda" mob-code="+1"><span>+1</span> <span> Antigua and Barbuda</span></li>
                                    <li class="text-sm" value="AR" alternativename="Argentina" mob-code="+54"><span>+54</span> <span> Argentina</span></li>
                                    <li class="text-sm" value="AM" alternativename="Armenia (Հայաստան)" mob-code="+374"><span>+374</span> <span> Armenia (Հայաստան)</span></li>
                                    <li class="text-sm" value="AW" alternativename="Aruba" mob-code="+297"><span>+297</span> <span> Aruba</span></li>
                                    <li class="text-sm" value="AC" alternativename="Ascension Island" mob-code="+247"><span>+247</span> <span> Ascension Island</span></li>
                                    <li class="text-sm" value="AU" alternativename="Australia" mob-code="+61"><span>+61</span> <span> Australia</span></li>
                                    <li class="text-sm" value="AT" alternativename="Austria (Österreich)" mob-code="+43"><span>+43</span> <span> Austria (Österreich)</span></li>
                                    <li class="text-sm" value="AZ" alternativename="Azerbaijan (Azərbaycan)" mob-code="+994"><span>+994</span> <span> Azerbaijan (Azərbaycan)</span></li>
                                    <li class="text-sm" value="BS" alternativename="Bahamas" mob-code="+1"><span>+1</span> <span> Bahamas</span></li>
                                    <li class="text-sm" value="BH" alternativename="Bahrain (‫البحرين‬‎)" mob-code="+973"><span>+973</span> <span> Bahrain (‫البحرين‬‎)</span></li>
                                    <li class="text-sm" value="BD" alternativename="Bangladesh (বাংলাদেশ)" mob-code="+880"><span>+880</span> <span> Bangladesh (বাংলাদেশ)</span></li>
                                    <li class="text-sm" value="BB" alternativename="Barbados" mob-code="+1"><span>+1</span> <span> Barbados</span></li>
                                    <li class="text-sm" value="BY" alternativename="Belarus (Беларусь)" mob-code="+375"><span>+375</span> <span> Belarus (Беларусь)</span></li>
                                    <li class="text-sm" value="BE" alternativename="Belgium (België)" mob-code="+32"><span>+32</span> <span> Belgium (België)</span></li>
                                    <li class="text-sm" value="BZ" alternativename="Belize" mob-code="+501"><span>+501</span> <span> Belize</span></li>
                                    <li class="text-sm" value="BJ" alternativename="Benin (Bénin)" mob-code="+229"><span>+229</span> <span> Benin (Bénin)</span></li>
                                    <li class="text-sm" value="BM" alternativename="Bermuda" mob-code="+1"><span>+1</span> <span> Bermuda</span></li>
                                    <li class="text-sm" value="BT" alternativename="Bhutan (འབྲུག)" mob-code="+975"><span>+975</span> <span> Bhutan (འབྲུག)</span></li>
                                    <li class="text-sm" value="BO" alternativename="Bolivia" mob-code="+591"><span>+591</span> <span> Bolivia</span></li>
                                    <li class="text-sm" value="BA" alternativename="Bosnia and Herzegovina (Босна и Херцеговина)" mob-code="+387"><span>+387</span> <span> Bosnia and Herzegovina (Босна и Херцеговина)</span></li>
                                    <li class="text-sm" value="BW" alternativename="Botswana" mob-code="+267"><span>+267</span> <span> Botswana</span></li>
                                    <li class="text-sm" value="BR" alternativename="Brazil (Brasil)" mob-code="+55"><span>+55</span> <span> Brazil (Brasil)</span></li>
                                    <li class="text-sm" value="IO" alternativename="British Indian Ocean Territory" mob-code="+246"><span>+246</span> <span> British Indian Ocean Territory</span></li>
                                    <li class="text-sm" value="VG" alternativename="British Virgin Islands" mob-code="+1"><span>+1</span> <span> British Virgin Islands</span></li>
                                    <li class="text-sm" value="BN" alternativename="Brunei" mob-code="+673"><span>+673</span> <span> Brunei</span></li>
                                    <li class="text-sm" value="BG" alternativename="Bulgaria (България)" mob-code="+359"><span>+359</span> <span> Bulgaria (България)</span></li>
                                    <li class="text-sm" value="BF" alternativename="Burkina Faso" mob-code="+226"><span>+226</span> <span> Burkina Faso</span></li>
                                    <li class="text-sm" value="BI" alternativename="Burundi (Uburundi)" mob-code="+257"><span>+257</span> <span> Burundi (Uburundi)</span></li>
                                    <li class="text-sm" value="KH" alternativename="Cambodia (កម្ពុជា)" mob-code="+855"><span>+855</span> <span> Cambodia (កម្ពុជា)</span></li>
                                    <li class="text-sm" value="CM" alternativename="Cameroon (Cameroun)" mob-code="+237"><span>+237</span> <span> Cameroon (Cameroun)</span></li>
                                    <li class="text-sm" value="CA" alternativename="Canada" mob-code="+1"><span>+1</span> <span> Canada</span></li>
                                    <li class="text-sm" value="CV" alternativename="Cape Verde (Kabu Verdi)" mob-code="+238"><span>+238</span> <span> Cape Verde (Kabu Verdi)</span></li>
                                    <li class="text-sm" value="BQ" alternativename="Caribbean Netherlands" mob-code="+599"><span>+599</span> <span> Caribbean Netherlands</span></li>
                                    <li class="text-sm" value="KY" alternativename="Cayman Islands" mob-code="+1"><span>+1</span> <span> Cayman Islands</span></li>
                                    <li class="text-sm" value="CF" alternativename="Central African Republic (République centrafricaine)" mob-code="+236"><span>+236</span> <span> Central African Republic (République centrafricaine)</span></li>
                                    <li class="text-sm" value="TD" alternativename="Chad (Tchad)" mob-code="+235"><span>+235</span> <span> Chad (Tchad)</span></li>
                                    <li class="text-sm" value="CL" alternativename="Chile" mob-code="+56"><span>+56</span> <span> Chile</span></li>
                                    <li class="text-sm" value="CN" alternativename="China (中国)" mob-code="+86"><span>+86</span> <span> China (中国)</span></li>
                                    <li class="text-sm" value="CX" alternativename="Christmas Island" mob-code="+61"><span>+61</span> <span> Christmas Island</span></li>
                                    <li class="text-sm" value="CC" alternativename="Cocos (Keeling) Islands" mob-code="+61"><span>+61</span> <span> Cocos (Keeling) Islands</span></li>
                                    <li class="text-sm" value="CO" alternativename="Colombia" mob-code="+57"><span>+57</span> <span> Colombia</span></li>
                                    <li class="text-sm" value="KM" alternativename="Comoros (‫جزر القمر‬‎)" mob-code="+269"><span>+269</span> <span> Comoros (‫جزر القمر‬‎)</span></li>
                                    <li class="text-sm" value="CD" alternativename="Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)" mob-code="+243"><span>+243</span> <span> Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span></li>
                                    <li class="text-sm" value="CG" alternativename="Congo (Republic) (Congo-Brazzaville)" mob-code="+242"><span>+242</span> <span> Congo (Republic) (Congo-Brazzaville)</span></li>
                                    <li class="text-sm" value="CK" alternativename="Cook Islands" mob-code="+682"><span>+682</span> <span> Cook Islands</span></li>
                                    <li class="text-sm" value="CR" alternativename="Costa Rica" mob-code="+506"><span>+506</span> <span> Costa Rica</span></li>
                                    <li class="text-sm" value="CI" alternativename="Côte d’Ivoire" mob-code="+225"><span>+225</span> <span> Côte d’Ivoire</span></li>
                                    <li class="text-sm" value="HR" alternativename="Croatia (Hrvatska)" mob-code="+385"><span>+385</span> <span> Croatia (Hrvatska)</span></li>
                                    <li class="text-sm" value="CU" alternativename="Cuba" mob-code="+53"><span>+53</span> <span> Cuba</span></li>
                                    <li class="text-sm" value="CW" alternativename="Curaçao" mob-code="+599"><span>+599</span> <span> Curaçao</span></li>
                                    <li class="text-sm" value="CY" alternativename="Cyprus (Κύπρος)" mob-code="+357"><span>+357</span> <span> Cyprus (Κύπρος)</span></li>
                                    <li class="text-sm" value="CZ" alternativename="Czech Republic (Česká republika)" mob-code="+420"><span>+420</span> <span> Czech Republic (Česká republika)</span></li>
                                    <li class="text-sm" value="DK" alternativename="Denmark (Danmark)" mob-code="+45"><span>+45</span> <span> Denmark (Danmark)</span></li>
                                    <li class="text-sm" value="DJ" alternativename="Djibouti" mob-code="+253"><span>+253</span> <span> Djibouti</span></li>
                                    <li class="text-sm" value="DM" alternativename="Dominica" mob-code="+1"><span>+1</span> <span> Dominica</span></li>
                                    <li class="text-sm" value="DO" alternativename="Dominican Republic (República Dominicana)" mob-code="+1"><span>+1</span> <span> Dominican Republic (República Dominicana)</span></li>
                                    <li class="text-sm" value="EC" alternativename="Ecuador" mob-code="+593"><span>+593</span> <span> Ecuador</span></li>
                                    <li class="text-sm" value="EG" alternativename="Egypt (‫مصر‬‎)" mob-code="+20"><span>+20</span> <span> Egypt (‫مصر‬‎)</span></li>
                                    <li class="text-sm" value="SV" alternativename="El Salvador" mob-code="+503"><span>+503</span> <span> El Salvador</span></li>
                                    <li class="text-sm" value="GQ" alternativename="Equatorial Guinea (Guinea Ecuatorial)" mob-code="+240"><span>+240</span> <span> Equatorial Guinea (Guinea Ecuatorial)</span></li>
                                    <li class="text-sm" value="ER" alternativename="Eritrea" mob-code="+291"><span>+291</span> <span> Eritrea</span></li>
                                    <li class="text-sm" value="EE" alternativename="Estonia (Eesti)" mob-code="+372"><span>+372</span> <span> Estonia (Eesti)</span></li>
                                    <li class="text-sm" value="SZ" alternativename="Eswatini" mob-code="+268"><span>+268</span> <span> Eswatini</span></li>
                                    <li class="text-sm" value="ET" alternativename="Ethiopia" mob-code="+251"><span>+251</span> <span> Ethiopia</span></li>
                                    <li class="text-sm" value="FK" alternativename="Falkland Islands (Islas Malvinas)" mob-code="+500"><span>+500</span> <span> Falkland Islands (Islas Malvinas)</span></li>
                                    <li class="text-sm" value="FO" alternativename="Faroe Islands (Føroyar)" mob-code="+298"><span>+298</span> <span> Faroe Islands (Føroyar)</span></li>
                                    <li class="text-sm" value="FJ" alternativename="Fiji" mob-code="+679"><span>+679</span> <span> Fiji</span></li>
                                    <li class="text-sm" value="FI" alternativename="Finland (Suomi)" mob-code="+358"><span>+358</span> <span> Finland (Suomi)</span></li>
                                    <li class="text-sm" value="FR" alternativename="France" mob-code="+33"><span>+33</span> <span> France</span></li>
                                    <li class="text-sm" value="GF" alternativename="French Guiana (Guyane française)" mob-code="+594"><span>+594</span> <span> French Guiana (Guyane française)</span></li>
                                    <li class="text-sm" value="PF" alternativename="French Polynesia (Polynésie française)" mob-code="+689"><span>+689</span> <span> French Polynesia (Polynésie française)</span></li>
                                    <li class="text-sm" value="GA" alternativename="Gabon" mob-code="+241"><span>+241</span> <span> Gabon</span></li>
                                    <li class="text-sm" value="GM" alternativename="Gambia" mob-code="+220"><span>+220</span> <span> Gambia</span></li>
                                    <li class="text-sm" value="GE" alternativename="Georgia (საქართველო)" mob-code="+995"><span>+995</span> <span> Georgia (საქართველო)</span></li>
                                    <li class="text-sm" value="DE" alternativename="Germany (Deutschland)" mob-code="+49"><span>+49</span> <span> Germany (Deutschland)</span></li>
                                    <li class="text-sm" value="GH" alternativename="Ghana (Gaana)" mob-code="+233"><span>+233</span> <span> Ghana (Gaana)</span></li>
                                    <li class="text-sm" value="GI" alternativename="Gibraltar" mob-code="+350"><span>+350</span> <span> Gibraltar</span></li>
                                    <li class="text-sm" value="GR" alternativename="Greece (Ελλάδα)" mob-code="+30"><span>+30</span> <span> Greece (Ελλάδα)</span></li>
                                    <li class="text-sm" value="GL" alternativename="Greenland (Kalaallit Nunaat)" mob-code="+299"><span>+299</span> <span> Greenland (Kalaallit Nunaat)</span></li>
                                    <li class="text-sm" value="GD" alternativename="Grenada" mob-code="+1"><span>+1</span> <span> Grenada</span></li>
                                    <li class="text-sm" value="GP" alternativename="Guadeloupe" mob-code="+590"><span>+590</span> <span> Guadeloupe</span></li>
                                    <li class="text-sm" value="GU" alternativename="Guam" mob-code="+1"><span>+1</span> <span> Guam</span></li>
                                    <li class="text-sm" value="GT" alternativename="Guatemala" mob-code="+502"><span>+502</span> <span> Guatemala</span></li>
                                    <li class="text-sm" value="GG" alternativename="Guernsey" mob-code="+44"><span>+44</span> <span> Guernsey</span></li>
                                    <li class="text-sm" value="GN" alternativename="Guinea (Guinée)" mob-code="+224"><span>+224</span> <span> Guinea (Guinée)</span></li>
                                    <li class="text-sm" value="GW" alternativename="Guinea-Bissau (Guiné Bissau)" mob-code="+245"><span>+245</span> <span> Guinea-Bissau (Guiné Bissau)</span></li>
                                    <li class="text-sm" value="GY" alternativename="Guyana" mob-code="+592"><span>+592</span> <span> Guyana</span></li>
                                    <li class="text-sm" value="HT" alternativename="Haiti" mob-code="+509"><span>+509</span> <span> Haiti</span></li>
                                    <li class="text-sm" value="HN" alternativename="Honduras" mob-code="+504"><span>+504</span> <span> Honduras</span></li>
                                    <li class="text-sm" value="HK" alternativename="Hong Kong (香港)" mob-code="+852"><span>+852</span> <span> Hong Kong (香港)</span></li>
                                    <li class="text-sm" value="HU" alternativename="Hungary (Magyarország)" mob-code="+36"><span>+36</span> <span> Hungary (Magyarország)</span></li>
                                    <li class="text-sm" value="IS" alternativename="Iceland (Ísland)" mob-code="+354"><span>+354</span> <span> Iceland (Ísland)</span></li>
                                    <li class="text-sm selectedDropDownItem" value="IN" alternativename="India (भारत)" mob-code="+91"><span>+91</span> <span> India (भारत)</span></li>
                                    <li class="text-sm" value="ID" alternativename="Indonesia" mob-code="+62"><span>+62</span> <span> Indonesia</span></li>
                                    <li class="text-sm" value="IR" alternativename="Iran (‫ایران‬‎)" mob-code="+98"><span>+98</span> <span> Iran (‫ایران‬‎)</span></li>
                                    <li class="text-sm" value="IQ" alternativename="Iraq (‫العراق‬‎)" mob-code="+964"><span>+964</span> <span> Iraq (‫العراق‬‎)</span></li>
                                    <li class="text-sm" value="IE" alternativename="Ireland" mob-code="+353"><span>+353</span> <span> Ireland</span></li>
                                    <li class="text-sm" value="IM" alternativename="Isle of Man" mob-code="+44"><span>+44</span> <span> Isle of Man</span></li>
                                    <li class="text-sm" value="IL" alternativename="Israel (‫ישראל‬‎)" mob-code="+972"><span>+972</span> <span> Israel (‫ישראל‬‎)</span></li>
                                    <li class="text-sm" value="IT" alternativename="Italy (Italia)" mob-code="+39"><span>+39</span> <span> Italy (Italia)</span></li>
                                    <li class="text-sm" value="JM" alternativename="Jamaica" mob-code="+1"><span>+1</span> <span> Jamaica</span></li>
                                    <li class="text-sm" value="JP" alternativename="Japan (日本)" mob-code="+81"><span>+81</span> <span> Japan (日本)</span></li>
                                    <li class="text-sm" value="JE" alternativename="Jersey" mob-code="+44"><span>+44</span> <span> Jersey</span></li>
                                    <li class="text-sm" value="JO" alternativename="Jordan (‫الأردن‬‎)" mob-code="+962"><span>+962</span> <span> Jordan (‫الأردن‬‎)</span></li>
                                    <li class="text-sm" value="KZ" alternativename="Kazakhstan (Казахстан)" mob-code="+7"><span>+7</span> <span> Kazakhstan (Казахстан)</span></li>
                                    <li class="text-sm" value="KE" alternativename="Kenya" mob-code="+254"><span>+254</span> <span> Kenya</span></li>
                                    <li class="text-sm" value="KI" alternativename="Kiribati" mob-code="+686"><span>+686</span> <span> Kiribati</span></li>
                                    <li class="text-sm" value="XK" alternativename="Kosovo" mob-code="+383"><span>+383</span> <span> Kosovo</span></li>
                                    <li class="text-sm" value="KW" alternativename="Kuwait (‫الكويت‬‎)" mob-code="+965"><span>+965</span> <span> Kuwait (‫الكويت‬‎)</span></li>
                                    <li class="text-sm" value="KG" alternativename="Kyrgyzstan (Кыргызстан)" mob-code="+996"><span>+996</span> <span> Kyrgyzstan (Кыргызстан)</span></li>
                                    <li class="text-sm" value="LA" alternativename="Laos (ລາວ)" mob-code="+856"><span>+856</span> <span> Laos (ລາວ)</span></li>
                                    <li class="text-sm" value="LV" alternativename="Latvia (Latvija)" mob-code="+371"><span>+371</span> <span> Latvia (Latvija)</span></li>
                                    <li class="text-sm" value="LB" alternativename="Lebanon (‫لبنان‬‎)" mob-code="+961"><span>+961</span> <span> Lebanon (‫لبنان‬‎)</span></li>
                                    <li class="text-sm" value="LS" alternativename="Lesotho" mob-code="+266"><span>+266</span> <span> Lesotho</span></li>
                                    <li class="text-sm" value="LR" alternativename="Liberia" mob-code="+231"><span>+231</span> <span> Liberia</span></li>
                                    <li class="text-sm" value="LY" alternativename="Libya (‫ليبيا‬‎)" mob-code="+218"><span>+218</span> <span> Libya (‫ليبيا‬‎)</span></li>
                                    <li class="text-sm" value="LI" alternativename="Liechtenstein" mob-code="+423"><span>+423</span> <span> Liechtenstein</span></li>
                                    <li class="text-sm" value="LT" alternativename="Lithuania (Lietuva)" mob-code="+370"><span>+370</span> <span> Lithuania (Lietuva)</span></li>
                                    <li class="text-sm" value="LU" alternativename="Luxembourg" mob-code="+352"><span>+352</span> <span> Luxembourg</span></li>
                                    <li class="text-sm" value="MO" alternativename="Macau (澳門)" mob-code="+853"><span>+853</span> <span> Macau (澳門)</span></li>
                                    <li class="text-sm" value="MK" alternativename="Macedonia (FYROM) (Македонија)" mob-code="+389"><span>+389</span> <span> Macedonia (FYROM) (Македонија)</span></li>
                                    <li class="text-sm" value="MG" alternativename="Madagascar (Madagasikara)" mob-code="+261"><span>+261</span> <span> Madagascar (Madagasikara)</span></li>
                                    <li class="text-sm" value="MW" alternativename="Malawi" mob-code="+265"><span>+265</span> <span> Malawi</span></li>
                                    <li class="text-sm" value="MY" alternativename="Malaysia" mob-code="+60"><span>+60</span> <span> Malaysia</span></li>
                                    <li class="text-sm" value="MV" alternativename="Maldives" mob-code="+960"><span>+960</span> <span> Maldives</span></li>
                                    <li class="text-sm" value="ML" alternativename="Mali" mob-code="+223"><span>+223</span> <span> Mali</span></li>
                                    <li class="text-sm" value="MT" alternativename="Malta" mob-code="+356"><span>+356</span> <span> Malta</span></li>
                                    <li class="text-sm" value="MH" alternativename="Marshall Islands" mob-code="+692"><span>+692</span> <span> Marshall Islands</span></li>
                                    <li class="text-sm" value="MQ" alternativename="Martinique" mob-code="+596"><span>+596</span> <span> Martinique</span></li>
                                    <li class="text-sm" value="MR" alternativename="Mauritania (‫موريتانيا‬‎)" mob-code="+222"><span>+222</span> <span> Mauritania (‫موريتانيا‬‎)</span></li>
                                    <li class="text-sm" value="MU" alternativename="Mauritius (Moris)" mob-code="+230"><span>+230</span> <span> Mauritius (Moris)</span></li>
                                    <li class="text-sm" value="YT" alternativename="Mayotte" mob-code="+262"><span>+262</span> <span> Mayotte</span></li>
                                    <li class="text-sm" value="MX" alternativename="Mexico (México)" mob-code="+52"><span>+52</span> <span> Mexico (México)</span></li>
                                    <li class="text-sm" value="FM" alternativename="Micronesia" mob-code="+691"><span>+691</span> <span> Micronesia</span></li>
                                    <li class="text-sm" value="MD" alternativename="Moldova (Republica Moldova)" mob-code="+373"><span>+373</span> <span> Moldova (Republica Moldova)</span></li>
                                    <li class="text-sm" value="MC" alternativename="Monaco" mob-code="+377"><span>+377</span> <span> Monaco</span></li>
                                    <li class="text-sm" value="MN" alternativename="Mongolia (Монгол)" mob-code="+976"><span>+976</span> <span> Mongolia (Монгол)</span></li>
                                    <li class="text-sm" value="ME" alternativename="Montenegro (Crna Gora)" mob-code="+382"><span>+382</span> <span> Montenegro (Crna Gora)</span></li>
                                    <li class="text-sm" value="MS" alternativename="Montserrat" mob-code="+1"><span>+1</span> <span> Montserrat</span></li>
                                    <li class="text-sm" value="MA" alternativename="Morocco (‫المغرب‬‎)" mob-code="+212"><span>+212</span> <span> Morocco (‫المغرب‬‎)</span></li>
                                    <li class="text-sm" value="MZ" alternativename="Mozambique (Moçambique)" mob-code="+258"><span>+258</span> <span> Mozambique (Moçambique)</span></li>
                                    <li class="text-sm" value="MM" alternativename="Myanmar (Burma) (မြန်မာ)" mob-code="+95"><span>+95</span> <span> Myanmar (Burma) (မြန်မာ)</span></li>
                                    <li class="text-sm" value="NA" alternativename="Namibia (Namibië)" mob-code="+264"><span>+264</span> <span> Namibia (Namibië)</span></li>
                                    <li class="text-sm" value="NR" alternativename="Nauru" mob-code="+674"><span>+674</span> <span> Nauru</span></li>
                                    <li class="text-sm" value="NP" alternativename="Nepal (नेपाल)" mob-code="+977"><span>+977</span> <span> Nepal (नेपाल)</span></li>
                                    <li class="text-sm" value="NL" alternativename="Netherlands (Nederland)" mob-code="+31"><span>+31</span> <span> Netherlands (Nederland)</span></li>
                                    <li class="text-sm" value="NC" alternativename="New Caledonia (Nouvelle-Calédonie)" mob-code="+687"><span>+687</span> <span> New Caledonia (Nouvelle-Calédonie)</span></li>
                                    <li class="text-sm" value="NZ" alternativename="New Zealand" mob-code="+64"><span>+64</span> <span> New Zealand</span></li>
                                    <li class="text-sm" value="NI" alternativename="Nicaragua" mob-code="+505"><span>+505</span> <span> Nicaragua</span></li>
                                    <li class="text-sm" value="NE" alternativename="Niger (Nijar)" mob-code="+227"><span>+227</span> <span> Niger (Nijar)</span></li>
                                    <li class="text-sm" value="NG" alternativename="Nigeria" mob-code="+234"><span>+234</span> <span> Nigeria</span></li>
                                    <li class="text-sm" value="NU" alternativename="Niue" mob-code="+683"><span>+683</span> <span> Niue</span></li>
                                    <li class="text-sm" value="NF" alternativename="Norfolk Island" mob-code="+672"><span>+672</span> <span> Norfolk Island</span></li>
                                    <li class="text-sm" value="KP" alternativename="North Korea (조선 민주주의 인민 공화국)" mob-code="+850"><span>+850</span> <span> North Korea (조선 민주주의 인민 공화국)</span></li>
                                    <li class="text-sm" value="MP" alternativename="Northern Mariana Islands" mob-code="+1"><span>+1</span> <span> Northern Mariana Islands</span></li>
                                    <li class="text-sm" value="NO" alternativename="Norway (Norge)" mob-code="+47"><span>+47</span> <span> Norway (Norge)</span></li>
                                    <li class="text-sm" value="OM" alternativename="Oman (‫عُمان‬‎)" mob-code="+968"><span>+968</span> <span> Oman (‫عُمان‬‎)</span></li>
                                    <li class="text-sm" value="PK" alternativename="Pakistan (‫پاکستان‬‎)" mob-code="+92"><span>+92</span> <span> Pakistan (‫پاکستان‬‎)</span></li>
                                    <li class="text-sm" value="PW" alternativename="Palau" mob-code="+680"><span>+680</span> <span> Palau</span></li>
                                    <li class="text-sm" value="PS" alternativename="Palestine (‫فلسطين‬‎)" mob-code="+970"><span>+970</span> <span> Palestine (‫فلسطين‬‎)</span></li>
                                    <li class="text-sm" value="PA" alternativename="Panama (Panamá)" mob-code="+507"><span>+507</span> <span> Panama (Panamá)</span></li>
                                    <li class="text-sm" value="PG" alternativename="Papua New Guinea" mob-code="+675"><span>+675</span> <span> Papua New Guinea</span></li>
                                    <li class="text-sm" value="PY" alternativename="Paraguay" mob-code="+595"><span>+595</span> <span> Paraguay</span></li>
                                    <li class="text-sm" value="PE" alternativename="Peru (Perú)" mob-code="+51"><span>+51</span> <span> Peru (Perú)</span></li>
                                    <li class="text-sm" value="PH" alternativename="Philippines" mob-code="+63"><span>+63</span> <span> Philippines</span></li>
                                    <li class="text-sm" value="PL" alternativename="Poland (Polska)" mob-code="+48"><span>+48</span> <span> Poland (Polska)</span></li>
                                    <li class="text-sm" value="PT" alternativename="Portugal" mob-code="+351"><span>+351</span> <span> Portugal</span></li>
                                    <li class="text-sm" value="PR" alternativename="Puerto Rico" mob-code="+1"><span>+1</span> <span> Puerto Rico</span></li>
                                    <li class="text-sm" value="QA" alternativename="Qatar (‫قطر‬‎)" mob-code="+974"><span>+974</span> <span> Qatar (‫قطر‬‎)</span></li>
                                    <li class="text-sm" value="RE" alternativename="Réunion (La Réunion)" mob-code="+262"><span>+262</span> <span> Réunion (La Réunion)</span></li>
                                    <li class="text-sm" value="RO" alternativename="Romania (România)" mob-code="+40"><span>+40</span> <span> Romania (România)</span></li>
                                    <li class="text-sm" value="RU" alternativename="Russia (Россия)" mob-code="+7"><span>+7</span> <span> Russia (Россия)</span></li>
                                    <li class="text-sm" value="RW" alternativename="Rwanda" mob-code="+250"><span>+250</span> <span> Rwanda</span></li>
                                    <li class="text-sm" value="BL" alternativename="Saint Barthélemy" mob-code="+590"><span>+590</span> <span> Saint Barthélemy</span></li>
                                    <li class="text-sm" value="SH" alternativename="Saint Helena" mob-code="+290"><span>+290</span> <span> Saint Helena</span></li>
                                    <li class="text-sm" value="KN" alternativename="Saint Kitts and Nevis" mob-code="+1"><span>+1</span> <span> Saint Kitts and Nevis</span></li>
                                    <li class="text-sm" value="LC" alternativename="Saint Lucia" mob-code="+1"><span>+1</span> <span> Saint Lucia</span></li>
                                    <li class="text-sm" value="MF" alternativename="Saint Martin (Saint-Martin (partie française))" mob-code="+590"><span>+590</span> <span> Saint Martin (Saint-Martin (partie française))</span></li>
                                    <li class="text-sm" value="PM" alternativename="Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)" mob-code="+508"><span>+508</span> <span> Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span></li>
                                    <li class="text-sm" value="VC" alternativename="Saint Vincent and the Grenadines" mob-code="+1"><span>+1</span> <span> Saint Vincent and the Grenadines</span></li>
                                    <li class="text-sm" value="WS" alternativename="Samoa" mob-code="+685"><span>+685</span> <span> Samoa</span></li>
                                    <li class="text-sm" value="SM" alternativename="San Marino" mob-code="+378"><span>+378</span> <span> San Marino</span></li>
                                    <li class="text-sm" value="ST" alternativename="São Tomé and Príncipe (São Tomé e Príncipe)" mob-code="+239"><span>+239</span> <span> São Tomé and Príncipe (São Tomé e Príncipe)</span></li>
                                    <li class="text-sm" value="SA" alternativename="Saudi Arabia (‫المملكة العربية السعودية‬‎)" mob-code="+966"><span>+966</span> <span> Saudi Arabia (‫المملكة العربية السعودية‬‎)</span></li>
                                    <li class="text-sm" value="SN" alternativename="Senegal (Sénégal)" mob-code="+221"><span>+221</span> <span> Senegal (Sénégal)</span></li>
                                    <li class="text-sm" value="RS" alternativename="Serbia (Србија)" mob-code="+381"><span>+381</span> <span> Serbia (Србија)</span></li>
                                    <li class="text-sm" value="SC" alternativename="Seychelles" mob-code="+248"><span>+248</span> <span> Seychelles</span></li>
                                    <li class="text-sm" value="SL" alternativename="Sierra Leone" mob-code="+232"><span>+232</span> <span> Sierra Leone</span></li>
                                    <li class="text-sm" value="SG" alternativename="Singapore" mob-code="+65"><span>+65</span> <span> Singapore</span></li>
                                    <li class="text-sm" value="SX" alternativename="Sint Maarten" mob-code="+1"><span>+1</span> <span> Sint Maarten</span></li>
                                    <li class="text-sm" value="SK" alternativename="Slovakia (Slovensko)" mob-code="+421"><span>+421</span> <span> Slovakia (Slovensko)</span></li>
                                    <li class="text-sm" value="SI" alternativename="Slovenia (Slovenija)" mob-code="+386"><span>+386</span> <span> Slovenia (Slovenija)</span></li>
                                    <li class="text-sm" value="SB" alternativename="Solomon Islands" mob-code="+677"><span>+677</span> <span> Solomon Islands</span></li>
                                    <li class="text-sm" value="SO" alternativename="Somalia (Soomaaliya)" mob-code="+252"><span>+252</span> <span> Somalia (Soomaaliya)</span></li>
                                    <li class="text-sm" value="ZA" alternativename="South Africa" mob-code="+27"><span>+27</span> <span> South Africa</span></li>
                                    <li class="text-sm" value="KR" alternativename="South Korea (대한민국)" mob-code="+82"><span>+82</span> <span> South Korea (대한민국)</span></li>
                                    <li class="text-sm" value="SS" alternativename="South Sudan (‫جنوب السودان‬‎)" mob-code="+211"><span>+211</span> <span> South Sudan (‫جنوب السودان‬‎)</span></li>
                                    <li class="text-sm" value="ES" alternativename="Spain (España)" mob-code="+34"><span>+34</span> <span> Spain (España)</span></li>
                                    <li class="text-sm" value="LK" alternativename="Sri Lanka (ශ්‍රී ලංකාව)" mob-code="+94"><span>+94</span> <span> Sri Lanka (ශ්‍රී ලංකාව)</span></li>
                                    <li class="text-sm" value="SD" alternativename="Sudan (‫السودان‬‎)" mob-code="+249"><span>+249</span> <span> Sudan (‫السودان‬‎)</span></li>
                                    <li class="text-sm" value="SR" alternativename="Suriname" mob-code="+597"><span>+597</span> <span> Suriname</span></li>
                                    <li class="text-sm" value="SJ" alternativename="Svalbard and Jan Mayen" mob-code="+47"><span>+47</span> <span> Svalbard and Jan Mayen</span></li>
                                    <li class="text-sm" value="SE" alternativename="Sweden (Sverige)" mob-code="+46"><span>+46</span> <span> Sweden (Sverige)</span></li>
                                    <li class="text-sm" value="CH" alternativename="Switzerland (Schweiz)" mob-code="+41"><span>+41</span> <span> Switzerland (Schweiz)</span></li>
                                    <li class="text-sm" value="SY" alternativename="Syria (‫سوريا‬‎)" mob-code="+963"><span>+963</span> <span> Syria (‫سوريا‬‎)</span></li>
                                    <li class="text-sm" value="TW" alternativename="Taiwan (台灣)" mob-code="+886"><span>+886</span> <span> Taiwan (台灣)</span></li>
                                    <li class="text-sm" value="TJ" alternativename="Tajikistan" mob-code="+992"><span>+992</span> <span> Tajikistan</span></li>
                                    <li class="text-sm" value="TZ" alternativename="Tanzania" mob-code="+255"><span>+255</span> <span> Tanzania</span></li>
                                    <li class="text-sm" value="TH" alternativename="Thailand (ไทย)" mob-code="+66"><span>+66</span> <span> Thailand (ไทย)</span></li>
                                    <li class="text-sm" value="TL" alternativename="Timor-Leste" mob-code="+670"><span>+670</span> <span> Timor-Leste</span></li>
                                    <li class="text-sm" value="TG" alternativename="Togo" mob-code="+228"><span>+228</span> <span> Togo</span></li>
                                    <li class="text-sm" value="TK" alternativename="Tokelau" mob-code="+690"><span>+690</span> <span> Tokelau</span></li>
                                    <li class="text-sm" value="TO" alternativename="Tonga" mob-code="+676"><span>+676</span> <span> Tonga</span></li>
                                    <li class="text-sm" value="TT" alternativename="Trinidad and Tobago" mob-code="+1"><span>+1</span> <span> Trinidad and Tobago</span></li>
                                    <li class="text-sm" value="TN" alternativename="Tunisia (‫تونس‬‎)" mob-code="+216"><span>+216</span> <span> Tunisia (‫تونس‬‎)</span></li>
                                    <li class="text-sm" value="TR" alternativename="Turkey (Türkiye)" mob-code="+90"><span>+90</span> <span> Turkey (Türkiye)</span></li>
                                    <li class="text-sm" value="TM" alternativename="Turkmenistan" mob-code="+993"><span>+993</span> <span> Turkmenistan</span></li>
                                    <li class="text-sm" value="TC" alternativename="Turks and Caicos Islands" mob-code="+1"><span>+1</span> <span> Turks and Caicos Islands</span></li>
                                    <li class="text-sm" value="TV" alternativename="Tuvalu" mob-code="+688"><span>+688</span> <span> Tuvalu</span></li>
                                    <li class="text-sm" value="VI" alternativename="U.S. Virgin Islands" mob-code="+1"><span>+1</span> <span> U.S. Virgin Islands</span></li>
                                    <li class="text-sm" value="UG" alternativename="Uganda" mob-code="+256"><span>+256</span> <span> Uganda</span></li>
                                    <li class="text-sm" value="UA" alternativename="Ukraine (Україна)" mob-code="+380"><span>+380</span> <span> Ukraine (Україна)</span></li>
                                    <li class="text-sm" value="AE" alternativename="United Arab Emirates (‫الإمارات العربية المتحدة‬‎)" mob-code="+971"><span>+971</span> <span> United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span></li>
                                    <li class="text-sm" value="GB" alternativename="United Kingdom" mob-code="+44"><span>+44</span> <span> United Kingdom</span></li>
                                    <li class="text-sm" value="US" alternativename="United States" mob-code="+1"><span>+1</span> <span> United States</span></li>
                                    <li class="text-sm" value="UY" alternativename="Uruguay" mob-code="+598"><span>+598</span> <span> Uruguay</span></li>
                                    <li class="text-sm" value="UZ" alternativename="Uzbekistan (Oʻzbekiston)" mob-code="+998"><span>+998</span> <span> Uzbekistan (Oʻzbekiston)</span></li>
                                    <li class="text-sm" value="VU" alternativename="Vanuatu" mob-code="+678"><span>+678</span> <span> Vanuatu</span></li>
                                    <li class="text-sm" value="VA" alternativename="Vatican City (Città del Vaticano)" mob-code="+39"><span>+39</span> <span> Vatican City (Città del Vaticano)</span></li>
                                    <li class="text-sm" value="VE" alternativename="Venezuela" mob-code="+58"><span>+58</span> <span> Venezuela</span></li>
                                    <li class="text-sm" value="VN" alternativename="Vietnam (Việt Nam)" mob-code="+84"><span>+84</span> <span> Vietnam (Việt Nam)</span></li>
                                    <li class="text-sm" value="WF" alternativename="Wallis and Futuna (Wallis-et-Futuna)" mob-code="+681"><span>+681</span> <span> Wallis and Futuna (Wallis-et-Futuna)</span></li>
                                    <li class="text-sm" value="EH" alternativename="Western Sahara (‫الصحراء الغربية‬‎)" mob-code="+212"><span>+212</span> <span> Western Sahara (‫الصحراء الغربية‬‎)</span></li>
                                    <li class="text-sm" value="YE" alternativename="Yemen (‫اليمن‬‎)" mob-code="+967"><span>+967</span> <span> Yemen (‫اليمن‬‎)</span></li>
                                    <li class="text-sm" value="ZM" alternativename="Zambia" mob-code="+260"><span>+260</span> <span> Zambia</span></li>
                                    <li class="text-sm" value="ZW" alternativename="Zimbabwe" mob-code="+263"><span>+263</span> <span> Zimbabwe</span></li>
                                    <li class="text-sm" value="AX" alternativename="Åland Islands" mob-code="+358"><span>+358</span> <span> Åland Islands</span></li>
                                </ul>
                                <svg class="dropdownArrow" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M13.354 6.85354L8.35403 11.8535C8.30759 11.9 8.25245 11.9369 8.19175 11.9621C8.13105 11.9872 8.06599 12.0002 8.00028 12.0002C7.93457 12.0002 7.86951 11.9872 7.80881 11.9621C7.74811 11.9369 7.69296 11.9 7.64653 11.8535L2.64653 6.85354C2.55271 6.75972 2.5 6.63247 2.5 6.49979C2.5 6.36711 2.55271 6.23986 2.64653 6.14604C2.74035 6.05222 2.8676 5.99951 3.00028 5.99951C3.13296 5.99951 3.26021 6.05222 3.35403 6.14604L8.00028 10.7929L12.6465 6.14604C12.693 6.09958 12.7481 6.06273 12.8088 6.03759C12.8695 6.01245 12.9346 5.99951 13.0003 5.99951C13.066 5.99951 13.131 6.01245 13.1917 6.03759C13.2524 6.06273 13.3076 6.09958 13.354 6.14604C13.4005 6.19249 13.4373 6.24764 13.4625 6.30834C13.4876 6.36904 13.5006 6.43409 13.5006 6.49979C13.5006 6.56549 13.4876 6.63054 13.4625 6.69124C13.4373 6.75193 13.4005 6.80708 13.354 6.85354Z" fill="black"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div id="otpInputContainer" class="p-[2px] rounded-[12px]  justify-start items-center gap-2.5 inline-flex w-full">
                        <div class="justify-start rounded-[10px] items-center gap-2.5 flex w-full">
                            <input type="text" id="mobNumber" class="font-semibold w-full outline-none border-0 bg-transparent py-3 px-2 ">
                        </div>
                    </div>
                </div>

            </div>


            <div class="mt-4">
                <p class="text-black/60 text-sm font-medium leading-[21px]">Got a question?</p>
                <input value="" id="question" placeholder="Type your question here." type="text" class="h-12 p-2 rounded-lg border border-black/10 text-black text-sm w-full mt-2 outline-none font-bold">

            </div>

            <div class="h-8 justify-center items-center gap-1 inline-flex mt-8 mb-4 sm:mt-4 sm:mb-0">
                <div class="bg-[#ff9933]/5 rounded-[25px] justify-start items-center gap-2.5 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                        <path d="M16 6.5C14.0222 6.5 12.0888 7.08649 10.4443 8.1853C8.79981 9.28412 7.51809 10.8459 6.76121 12.6732C6.00433 14.5004 5.8063 16.5111 6.19215 18.4509C6.578 20.3907 7.53041 22.1725 8.92894 23.5711C10.3275 24.9696 12.1093 25.922 14.0491 26.3078C15.9889 26.6937 17.9996 26.4957 19.8268 25.7388C21.6541 24.9819 23.2159 23.7002 24.3147 22.0557C25.4135 20.4112 26 18.4778 26 16.5C25.9972 13.8487 24.9427 11.3068 23.068 9.43202C21.1932 7.55727 18.6513 6.5028 16 6.5ZM16 24.9615C14.3265 24.9615 12.6905 24.4653 11.299 23.5355C9.90753 22.6057 8.823 21.2842 8.18256 19.7381C7.54213 18.1919 7.37456 16.4906 7.70105 14.8492C8.02754 13.2079 8.83343 11.7002 10.0168 10.5168C11.2002 9.33342 12.7079 8.52754 14.3492 8.20105C15.9906 7.87456 17.6919 8.04212 19.2381 8.68256C20.7842 9.32299 22.1057 10.4075 23.0355 11.799C23.9653 13.1905 24.4615 14.8265 24.4615 16.5C24.459 18.7434 23.5667 20.8941 21.9804 22.4804C20.3941 24.0667 18.2434 24.959 16 24.9615ZM15.2308 17.2692V11.8846C15.2308 11.6806 15.3118 11.4849 15.4561 11.3407C15.6003 11.1964 15.796 11.1154 16 11.1154C16.204 11.1154 16.3997 11.1964 16.5439 11.3407C16.6882 11.4849 16.7692 11.6806 16.7692 11.8846V17.2692C16.7692 17.4732 16.6882 17.6689 16.5439 17.8132C16.3997 17.9574 16.204 18.0385 16 18.0385C15.796 18.0385 15.6003 17.9574 15.4561 17.8132C15.3118 17.6689 15.2308 17.4732 15.2308 17.2692ZM17.1538 20.7308C17.1538 20.959 17.0862 21.1821 16.9594 21.3718C16.8326 21.5616 16.6524 21.7094 16.4416 21.7968C16.2307 21.8841 15.9987 21.907 15.7749 21.8624C15.5511 21.8179 15.3455 21.708 15.1841 21.5467C15.0227 21.3853 14.9128 21.1797 14.8683 20.9559C14.8238 20.732 14.8467 20.5 14.934 20.2892C15.0213 20.0784 15.1692 19.8982 15.359 19.7714C15.5487 19.6446 15.7718 19.5769 16 19.5769C16.306 19.5769 16.5995 19.6985 16.8159 19.9149C17.0323 20.1313 17.1538 20.4247 17.1538 20.7308Z" fill="#FF9933" />
                    </svg>
                </div>
                <div class="grow shrink basis-0 text-[#555555] text-[13px] font-bold leading-[18.20px]"><span class="font-bold">Service Hours: </span>Mon-Fri : 9:30 am to 6:00 pm | Sat: 9:30 am to 2:00 pm</div>
            </div>

            <div class="mt-4 flex gap-4 flex-col sm:flex-row">
                <div id="intiateCallBack" class="h-14 p-2.5 bg-[#0e51a0] rounded-lg justify-center items-center gap-1 inline-flex w-full cursor-pointer">
                    <div class="text-white text-base font-bold  leading-normal ">Call Me Back</div>
                </div>

                <div id="closeCallBackWidget" class="h-14 p-2.5 bg-neutral-50 rounded-lg border justify-center items-center gap-1 inline-flex w-full cursor-pointer">
                    <div class="text-black text-base font-bold  leading-normal ">Cancel</div>
                </div>
            </div>

        </div>
    </div>


</div>




<script defer>
    let btn = document.querySelector('#getCallBack');
    let overLay = document.querySelector('#callBackOverLay');
    let closeCallBackWidget = document.querySelector('#closeCallBackWidget')
    let widgetOpen = false;
    let callBackBtn = document.querySelector('#intiateCallBack')



    btn.addEventListener('click', () => {
        // Show overlay
        overLay.style.display = 'block';

        // Disable scrolling
        document.body.style.overflow = 'hidden';
        widgetOpen = true;
    });

    let callBackWidget = document.querySelector('#callBackWidget')
    overLay.addEventListener('click', (event) => {
        if (!callBackWidget.contains(event.target)) {
            closeCallbackWidget(); // Only close if the click was outside the otpWidget
        }
    })

    function closeCallbackWidget() {
        // Show overlay
        overLay.style.display = 'none';

        // Disable scrolling
        document.body.style.overflow = 'unset';
        widgetOpen = false;
    }


    closeCallBackWidget.addEventListener('click', () => {
        closeCallbackWidget()
    })

    callBackBtn.addEventListener('click', () => {
        let fullName = document.querySelector('#fullName').value;
        let question = document.querySelector('#question').value;
        let mobNumber = document.querySelector('#mobNumber').value;
        let countryCode = getSelectedDropdownItemElement('callBackCountryCodeMain').getAttribute('mob-code');

        // Name validation
        if (!fullName.trim()) {
            insertAlertBelowElement(document.querySelector('#fullName'), 'Enter a valid name!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#fullName'))
        }

        // Question validation
        if (!question.trim()) {
            insertAlertBelowElement(document.querySelector('#question'), 'Enter a valid question!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#question'))
        }

        // Mobile validation
        if (!mobNumber) {
            insertAlertBelowElement(document.querySelector('#mobContainer'), 'Enter a mobile number!')
            return;
        } else removeAlertBelowElement(document.querySelector('#mobContainer'));

        if (mobNumber.length !== 10 || !/^[6-9]\d{9}$/.test(mobNumber)) {
            insertAlertBelowElement(document.querySelector('#mobContainer'), 'Please enter valid number!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#mobContainer'))
        }

        console.log(fullName, question, mobNumber, parseInt(countryCode));

        const formData = new URLSearchParams();
        formData.append('r_name', fullName);
        formData.append('r_phno', mobNumber);
        formData.append('r_code', parseInt(countryCode));
        formData.append('r_msg', question);
        formData.append('user_email', '');
        formData.append('user_location', '');

        fetch('https://mvc.extravelmoney.com/req-callback/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: formData
            })
            .then(response => response.text())
            .then(output => {
                console.log(output)
                if (output == 1) {
                    closeCallbackWidget();
                    showSuccessPopup();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });


    function showSuccessPopup(message = 'Request sent successfully!') {
        // Create popup container
        const popup = document.createElement('div');
        popup.className = 'success-popup';

        // Add checkmark SVG
        popup.innerHTML = `
        <svg class="checkmark" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <span>${message}</span>
    `;

        // Add to document
        document.body.appendChild(popup);

        // Remove after delay
        setTimeout(() => {
            popup.classList.add('fade-out');
            setTimeout(() => {
                document.body.removeChild(popup);
            }, 300); // Wait for fade out animation
        }, 2000); // Show for 2 seconds
    }
</script>