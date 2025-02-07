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
<header class="w-full flex justify-start items-center">
    <div class="hidden md:flex w-full">
        <div class="navContainer justify-between  flex w-full px-24 py-8 pt-10 items-start gap-8">
            <a href="/"><img src="<?php echo $fold . 'public/images/logo/ETM logo without tagline.png'; ?>"
                    class="w-44 object-contain" alt="ETM logo">
            </a>

            <nav
                class="flex flex-wrap gap-12 items-center justify-end text-base tracking-tight leading-loose text-black customMd:gap-y-6">
                <a href="<?php echo $fold; ?>foreign-exchange/" class="text-mediumFont custom-underline">Currency
                    Exchange</a>
                <a href="<?php echo $fold; ?>multi-currency-forex-card/" class="text-mediumFont custom-underline">Forex
                    Card</a>

                <!-- Money Transfer -->
                <div class="relative group navElementContainer">
                    <a href="<?php echo $fold; ?>wire-transfer/"
                        class="text-mediumFont custom-underline flex gap-1 justify-center items-center">
                        Money Transfer
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 16 17" fill="none">
                            <path
                                d="M13.2654 6.76541L8.26541 11.7654C8.1951 11.8356 8.09979 11.8751 8.00041 11.8751C7.90104 11.8751 7.80572 11.8356 7.73541 11.7654L2.73541 6.76541C2.66917 6.69432 2.63311 6.6003 2.63482 6.50315C2.63654 6.406 2.67589 6.31331 2.7446 6.2446C2.81331 6.17589 2.906 6.13654 3.00315 6.13482C3.1003 6.13311 3.19432 6.16917 3.26541 6.23541L8.00041 10.9698L12.7354 6.23541C12.8065 6.16917 12.9005 6.13311 12.9977 6.13482C13.0948 6.13654 13.1875 6.17589 13.2562 6.2446C13.3249 6.31331 13.3643 6.406 13.366 6.50315C13.3677 6.6003 13.3317 6.69432 13.2654 6.76541Z"
                                fill="black" />
                        </svg>
                    </a>

                    <!-- Dropdown Content -->
                    <div
                        class="absolute left-0 w-72 bg-white z-[100] shadow-[0px_40px_40px_0px_rgba(0,0,0,0.10)] rounded-bl-xl rounded-br-xl  hidden group-hover:block">
                        <div class="px-4 py-2 pt-6 flex flex-col">
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-usa"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to USA</span><svg class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-uk"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to UK</span><svg class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-canada"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to Canada</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-australia"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to Australia</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-uae"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to UAE</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                        </div>


                    </div>

                </div>
                <!-- For Student -->
                <div class="relative group navElementContainer">
                    <a href="<?php echo $fold; ?>wire-transfer/"
                        class="text-mediumFont custom-underline flex gap-1 justify-center items-center">
                        For Student
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 16 17" fill="none">
                            <path
                                d="M13.2654 6.76541L8.26541 11.7654C8.1951 11.8356 8.09979 11.8751 8.00041 11.8751C7.90104 11.8751 7.80572 11.8356 7.73541 11.7654L2.73541 6.76541C2.66917 6.69432 2.63311 6.6003 2.63482 6.50315C2.63654 6.406 2.67589 6.31331 2.7446 6.2446C2.81331 6.17589 2.906 6.13654 3.00315 6.13482C3.1003 6.13311 3.19432 6.16917 3.26541 6.23541L8.00041 10.9698L12.7354 6.23541C12.8065 6.16917 12.9005 6.13311 12.9977 6.13482C13.0948 6.13654 13.1875 6.17589 13.2562 6.2446C13.3249 6.31331 13.3643 6.406 13.366 6.50315C13.3677 6.6003 13.3317 6.69432 13.2654 6.76541Z"
                                fill="black" />
                        </svg>
                    </a>

                    <!-- Dropdown Content -->
                    <div
                        class="absolute left-0 w-72 bg-white z-[100] shadow-[0px_40px_40px_0px_rgba(0,0,0,0.10)] rounded-bl-xl rounded-br-xl  hidden group-hover:block">
                        <div class="px-4 py-2 pt-6 flex flex-col">
                            <a href="<?php echo $fold; ?>university-fee-payment/"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Pay
                                    University Fee</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>order/gic/"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>GIC
                                    Account Opening</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>open-blocked-account/"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Blocked
                                    Account Opening</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-canada/gic-account/"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to GIC Account</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                            <a href="<?php echo $fold; ?>wire-transfer/india-to-germany/blocked-account/"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Send
                                    Money to Blocked Account</span><svg
                                    class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg></a>
                        </div>


                    </div>

                </div>

                <!-- Travel Dropdown -->

                <!--disabled for now-->
                <!--<div class="relative group navElementContainer">-->
                <!--    <a href="#" class="text-mediumFont custom-underline flex gap-1 justify-center items-center">-->
                <!--        Travel-->
                <!--        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 16 17" fill="none">-->
                <!--            <path d="M13.2654 6.76541L8.26541 11.7654C8.1951 11.8356 8.09979 11.8751 8.00041 11.8751C7.90104 11.8751 7.80572 11.8356 7.73541 11.7654L2.73541 6.76541C2.66917 6.69432 2.63311 6.6003 2.63482 6.50315C2.63654 6.406 2.67589 6.31331 2.7446 6.2446C2.81331 6.17589 2.906 6.13654 3.00315 6.13482C3.1003 6.13311 3.19432 6.16917 3.26541 6.23541L8.00041 10.9698L12.7354 6.23541C12.8065 6.16917 12.9005 6.13311 12.9977 6.13482C13.0948 6.13654 13.1875 6.17589 13.2562 6.2446C13.3249 6.31331 13.3643 6.406 13.366 6.50315C13.3677 6.6003 13.3317 6.69432 13.2654 6.76541Z" fill="black" />-->
                <!--        </svg>-->
                <!--    </a>-->

                <!-- Dropdown Content -->
                <!--    <div class="absolute left-0 w-40 bg-white z-[100] shadow-[0px_40px_40px_0px_rgba(0,0,0,0.10)] rounded-bl-xl rounded-br-xl  hidden group-hover:block">-->
                <!--        <div class="px-4 py-2 pt-6 flex flex-col">-->
                <!--            <a href="<?php echo $fold . 'travel/apply-for-visa/'; ?>" class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Apply For Visa</span><svg  class="subNavElementSvg transition-[0.2s] fill-transparent"  xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z"/></svg></a>-->
                <!--            <a href="<?php echo $fold . 'travel/health-insurance/'; ?>" class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]"><span>Health Insurance</span><svg  class="subNavElementSvg transition-[0.2s] fill-transparent"  xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z"/></svg></a>-->

                <!--        </div>-->


                <!--    </div>-->
                <!--</div>-->

                <!-- Support Dropdown -->
                <div class=" relative group navElementContainer">
                    <div class="text-mediumFont custom-underline flex gap-1 justify-center items-center cursor-pointer">
                        Support
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 16 17" fill="none">
                            <path
                                d="M13.2654 6.76541L8.26541 11.7654C8.1951 11.8356 8.09979 11.8751 8.00041 11.8751C7.90104 11.8751 7.80572 11.8356 7.73541 11.7654L2.73541 6.76541C2.66917 6.69432 2.63311 6.6003 2.63482 6.50315C2.63654 6.406 2.67589 6.31331 2.7446 6.2446C2.81331 6.17589 2.906 6.13654 3.00315 6.13482C3.1003 6.13311 3.19432 6.16917 3.26541 6.23541L8.00041 10.9698L12.7354 6.23541C12.8065 6.16917 12.9005 6.13311 12.9977 6.13482C13.0948 6.13654 13.1875 6.17589 13.2562 6.2446C13.3249 6.31331 13.3643 6.406 13.366 6.50315C13.3677 6.6003 13.3317 6.69432 13.2654 6.76541Z"
                                fill="black" />
                        </svg>
                    </div>

                    <!-- Dropdown Content -->
                    <div
                        class="absolute -left-16 w-72 bg-white z-[100] shadow-[0px_40px_40px_0px_rgba(0,0,0,0.10)] rounded-bl-xl rounded-br-xl  hidden group-hover:block">
                        <div class="px-4 py-2 pt-6 flex flex-col">
                            <a href="https://api.whatsapp.com/send?phone=914842886900" target="_blank"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]">
                                <div class="flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 21"
                                        fill="none">
                                        <path
                                            d="M15.5012 12.2466L12.5012 10.7466C12.4126 10.7025 12.314 10.6826 12.2152 10.6888C12.1164 10.6951 12.0211 10.7273 11.9387 10.7822L10.4687 11.7619C9.72455 11.3809 9.11909 10.7754 8.73812 10.0312L9.71874 8.56219C9.77364 8.47985 9.80584 8.38448 9.81209 8.28572C9.81835 8.18696 9.79844 8.08829 9.75437 7.99969L8.25437 4.99969C8.20773 4.90583 8.1358 4.82687 8.04668 4.77171C7.95756 4.71655 7.8548 4.68738 7.74999 4.6875C6.80516 4.6875 5.89902 5.06283 5.23093 5.73093C4.56283 6.39903 4.18749 7.30517 4.18749 8.25C4.18998 10.3875 5.04021 12.4368 6.55169 13.9483C8.06316 15.4598 10.1124 16.31 12.25 16.3125C13.1948 16.3125 14.101 15.9372 14.7691 15.2691C15.4372 14.601 15.8125 13.6948 15.8125 12.75C15.8125 12.6454 15.7834 12.543 15.7284 12.454C15.6735 12.3651 15.5948 12.2933 15.5012 12.2466ZM12.25 15.1875C10.4107 15.1853 8.64746 14.4536 7.34691 13.1531C6.04636 11.8525 5.31473 10.0893 5.31249 8.25C5.31255 7.66172 5.52536 7.0933 5.91166 6.64962C6.29796 6.20594 6.83169 5.91694 7.41437 5.83594L8.60124 8.20969L7.62718 9.67031C7.576 9.74735 7.54461 9.83582 7.53578 9.92788C7.52695 10.0199 7.54095 10.1128 7.57656 10.1981C8.0938 11.4279 9.0721 12.4062 10.3019 12.9234C10.3872 12.959 10.4801 12.973 10.5721 12.9642C10.6642 12.9554 10.7526 12.924 10.8297 12.8728L12.2903 11.8988L14.6641 13.0856C14.5831 13.6683 14.2941 14.202 13.8504 14.5883C13.4067 14.9746 12.8383 15.1874 12.25 15.1875ZM9.99999 0.9375C8.34229 0.937152 6.71298 1.36774 5.27189 2.18703C3.8308 3.00632 2.62745 4.18616 1.77989 5.61081C0.932323 7.03545 0.469667 8.65595 0.437308 10.3133C0.404949 11.9707 0.803998 13.608 1.59531 15.0647L0.505931 18.3337C0.428809 18.565 0.417617 18.8132 0.473609 19.0504C0.529601 19.2877 0.650565 19.5047 0.822942 19.6771C0.995319 19.8494 1.2123 19.9704 1.44956 20.0264C1.68682 20.0824 1.93499 20.0712 2.16624 19.9941L5.43531 18.9047C6.71498 19.5991 8.13633 19.9922 9.59098 20.0539C11.0456 20.1156 12.4952 19.8444 13.8291 19.2608C15.1629 18.6772 16.346 17.7968 17.2879 16.6866C18.2299 15.5764 18.9059 14.2657 19.2644 12.8546C19.6229 11.4435 19.6544 9.96913 19.3566 8.54396C19.0588 7.11879 18.4395 5.78044 17.5459 4.63097C16.6523 3.48149 15.508 2.55125 14.2003 1.91117C12.8926 1.27108 11.456 0.938063 9.99999 0.9375ZM9.99999 18.9375C8.51681 18.9379 7.05973 18.5472 5.77562 17.805C5.69001 17.7558 5.59311 17.7296 5.49437 17.7291C5.43384 17.7294 5.37374 17.7392 5.31624 17.7581L1.81093 18.9263C1.77789 18.9373 1.74244 18.9389 1.70855 18.9309C1.67465 18.9229 1.64366 18.9056 1.61903 18.881C1.59441 18.8563 1.57713 18.8253 1.56913 18.7914C1.56113 18.7576 1.56273 18.7221 1.57374 18.6891L2.74187 15.1875C2.76714 15.1118 2.77603 15.0317 2.76795 14.9523C2.75987 14.8729 2.735 14.7962 2.69499 14.7272C1.7643 13.1195 1.3902 11.2495 1.63074 9.40749C1.87127 7.56544 2.713 5.85428 4.02533 4.53945C5.33766 3.22463 7.04723 2.37965 8.88882 2.13562C10.7304 1.89159 12.601 2.26213 14.2105 3.18978C15.82 4.11742 17.0784 5.55031 17.7904 7.26612C18.5024 8.98194 18.6282 10.8848 18.1484 12.6794C17.6685 14.4741 16.6098 16.0602 15.1365 17.1917C13.6632 18.3232 11.8577 18.9369 9.99999 18.9375Z"
                                            fill="#20BC73" />
                                    </svg>
                                    <span class="text-black text-sm font-semibold ml-2">Whatsapp</span>

                                    <span
                                        class=" text-black text-xs ml-2 font-normal px-[7px] py-1 bg-[#0e51a0]/5 rounded-xl justify-center items-center gap-2.5 inline-flex">
                                        +91 4842886900
                                    </span>
                                </div>
                                <svg class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg>
                            </a>
                            <a href="mailto:care@extravelmoney.com"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]">
                                <div class="flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                        fill="none">
                                        <path
                                            d="M21 5.1875H3C2.85082 5.1875 2.70774 5.24676 2.60225 5.35225C2.49676 5.45774 2.4375 5.60082 2.4375 5.75V18.5C2.4375 18.8481 2.57578 19.1819 2.82192 19.4281C3.06806 19.6742 3.4019 19.8125 3.75 19.8125H20.25C20.5981 19.8125 20.9319 19.6742 21.1781 19.4281C21.4242 19.1819 21.5625 18.8481 21.5625 18.5V5.75C21.5625 5.60082 21.5032 5.45774 21.3977 5.35225C21.2923 5.24676 21.1492 5.1875 21 5.1875ZM19.5544 6.3125L12 13.2369L4.44562 6.3125H19.5544ZM20.25 18.6875H3.75C3.70027 18.6875 3.65258 18.6677 3.61742 18.6326C3.58225 18.5974 3.5625 18.5497 3.5625 18.5V7.02875L11.625 14.4144C11.7287 14.5092 11.8641 14.5619 12.0047 14.5619C12.1452 14.5619 12.2807 14.5092 12.3844 14.4144L20.4375 7.02875V18.5C20.4375 18.5497 20.4177 18.5974 20.3826 18.6326C20.3474 18.6677 20.2997 18.6875 20.25 18.6875Z"
                                            fill="black" />
                                    </svg>
                                    <span class="text-black text-sm font-semibold ml-2">Email</span>

                                    <span
                                        class=" text-black text-xs ml-2 font-normal px-[7px] py-1 bg-[#0e51a0]/5 rounded-xl justify-center items-center gap-2.5 inline-flex">
                                        care@extravelmoney.com
                                    </span>
                                </div>
                                <svg class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg>
                            </a>
                            <a href="tel:04842886900"
                                class="subNavElement flex text-sm text-black w-full justify-between items-center pb-1 pt-4 border-b border-black/10 hover:border-primary-blue transition-[0.2s]">
                                <div class="flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                        fill="none">
                                        <path
                                            d="M20.7741 15.5284L16.3453 13.5437C16.1447 13.4578 15.9257 13.4232 15.7083 13.4432C15.4909 13.4631 15.282 13.537 15.1003 13.6581C15.0819 13.6699 15.0643 13.6831 15.0478 13.6975L12.7331 15.6662C12.7091 15.6793 12.6824 15.6867 12.655 15.6876C12.6277 15.6886 12.6005 15.6832 12.5756 15.6719C11.0878 14.9537 9.54657 13.4219 8.82564 11.9547C8.81363 11.9302 8.80739 11.9032 8.80739 11.8759C8.80739 11.8486 8.81363 11.8217 8.82564 11.7972L10.8009 9.45342C10.8151 9.43608 10.8283 9.41792 10.8403 9.39905C10.9598 9.21671 11.0319 9.0075 11.0502 8.7903C11.0685 8.5731 11.0325 8.35476 10.9453 8.15499L8.9747 3.73374C8.86279 3.47274 8.66925 3.25509 8.42313 3.11343C8.17701 2.97178 7.89159 2.91377 7.6097 2.94811C6.3846 3.10917 5.26006 3.7108 4.44622 4.64058C3.63238 5.57036 3.18494 6.76466 3.18751 8.0003C3.18751 15.3409 9.15939 21.3128 16.5 21.3128C17.7356 21.3152 18.9298 20.8677 19.8595 20.0539C20.7893 19.2401 21.3909 18.1156 21.5522 16.8906C21.5865 16.61 21.5292 16.3259 21.389 16.0805C21.2488 15.835 21.0332 15.6414 20.7741 15.5284ZM16.5 20.1878C9.78001 20.1878 4.31251 14.7203 4.31251 8.0003C4.30938 7.03836 4.65658 6.10818 5.28924 5.38356C5.9219 4.65894 6.79675 4.18944 7.75032 4.0628H7.77189C7.80967 4.0635 7.84635 4.07561 7.87713 4.09752C7.90791 4.11944 7.93136 4.15014 7.94439 4.18561L9.92251 8.60217C9.93379 8.62673 9.93963 8.65343 9.93963 8.68045C9.93963 8.70748 9.93379 8.73418 9.92251 8.75873L7.94345 11.1081C7.92868 11.1249 7.91521 11.1427 7.90314 11.1615C7.7793 11.3506 7.70637 11.5684 7.69143 11.7939C7.67648 12.0194 7.72002 12.245 7.81782 12.4487C8.64939 14.1512 10.365 15.8537 12.0863 16.6853C12.2912 16.7826 12.5178 16.8251 12.7441 16.8086C12.9703 16.7922 13.1885 16.7174 13.3772 16.5915C13.395 16.5794 13.4128 16.5662 13.4297 16.5522L15.7434 14.5834C15.7663 14.5711 15.7915 14.5639 15.8174 14.5623C15.8433 14.5607 15.8692 14.5647 15.8934 14.574L20.3231 16.5587C20.3593 16.5741 20.3897 16.6005 20.4101 16.6342C20.4305 16.6678 20.4397 16.707 20.4366 16.7462C20.3106 17.7002 19.8415 18.5757 19.1171 19.2091C18.3926 19.8425 17.4623 20.1904 16.5 20.1878Z"
                                            fill="black" />
                                    </svg>
                                    <span class="text-black text-sm font-semibold ml-2">Phone</span>

                                    <span
                                        class=" text-black text-xs ml-2 font-normal px-[7px] py-1 bg-[#0e51a0]/5 rounded-xl justify-center items-center gap-2.5 inline-flex">
                                        0484 2886 900
                                    </span>
                                </div>
                                <svg class="subNavElementSvg transition-[0.2s] fill-transparent"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M16.8971 12.8971L9.39714 20.3971C9.29051 20.4965 9.14948 20.5506 9.00375 20.548C8.85802 20.5455 8.71898 20.4864 8.61592 20.3834C8.51287 20.2803 8.45383 20.1413 8.45126 19.9955C8.44869 19.8498 8.50278 19.7088 8.60214 19.6021L15.7037 12.4996L8.60214 5.39714C8.50278 5.29051 8.44869 5.14947 8.45126 5.00375C8.45383 4.85802 8.51287 4.71898 8.61592 4.61592C8.71898 4.51286 8.85802 4.45383 9.00375 4.45126C9.14948 4.44869 9.29051 4.50278 9.39714 4.60214L16.8971 12.1021C17.0025 12.2076 17.0616 12.3506 17.0616 12.4996C17.0616 12.6487 17.0025 12.7917 16.8971 12.8971Z" />
                                </svg>
                            </a>

                        </div>


                    </div>
                </div>

                <a href="<?php echo $fold; ?>myaccount"
                    class="myAccount text-mediumFont custom-underline flex  justify-center items-center cursor-pointer">My
                    Account</a>

                <a href="<?php echo $fold; ?>login/"
                    class="text-mediumFont custom-underline flex  justify-center items-center loginBtn cursor-pointer">Login</a>

            </nav>
        </div>
    </div>
</header>

<header class="w-full relative bg-white border-b border-gray-200 py-4 px-5 sm:px-12 flex md:hidden">
    <div class="flex justify-start w-full items-center ">
        <div class="menu-icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <a href="/"><img class="w-14 ml-2" src="<?php echo $fold . 'public/images/logo/ETM_logo_icon.png'; ?>"
                alt="ETM logo icon">
        </a>

        <span id="mobileContactBtn"
            class="text-[#0e51a0] text-xs font-medium px-3 p-1 ml-auto rounded-[30px] border border-[#0e51a0] leading-normal flex justify-center items-center gap-1">Contact
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                    d="M12.765 12.235C12.8018 12.2694 12.8314 12.3108 12.8519 12.3568C12.8724 12.4028 12.8834 12.4524 12.8843 12.5028C12.8852 12.5531 12.8759 12.6032 12.857 12.6498C12.8382 12.6965 12.8101 12.739 12.7745 12.7746C12.7389 12.8102 12.6965 12.8382 12.6498 12.8571C12.6031 12.876 12.5531 12.8852 12.5027 12.8843C12.4524 12.8835 12.4027 12.8724 12.3567 12.8519C12.3107 12.8314 12.2693 12.8019 12.235 12.765L7.99998 8.53067L3.76498 12.765C3.6939 12.8313 3.59987 12.8673 3.50272 12.8656C3.40557 12.8639 3.31288 12.8246 3.24417 12.7559C3.17547 12.6872 3.13611 12.5945 3.1344 12.4973C3.13268 12.4002 3.16874 12.3061 3.23498 12.235L7.46936 8.00005L3.23498 3.76505C3.16874 3.69396 3.13268 3.59993 3.1344 3.50278C3.13611 3.40563 3.17547 3.31294 3.24417 3.24423C3.31288 3.17553 3.40557 3.13617 3.50272 3.13446C3.59987 3.13274 3.6939 3.16881 3.76498 3.23505L7.99998 7.46942L12.235 3.23505C12.3061 3.16881 12.4001 3.13274 12.4972 3.13446C12.5944 3.13617 12.6871 3.17553 12.7558 3.24423C12.8245 3.31294 12.8639 3.40563 12.8656 3.50278C12.8673 3.59993 12.8312 3.69396 12.765 3.76505L8.53061 8.00005L12.765 12.235Z"
                    fill="white" />
            </svg>
        </span>

    </div>
    <div id="mobileContactSection"
        class="hideContactMob absolute z-[300] transform -translate-x-1/2  top-1/2 left-1/2 border border-black/10 bg-white translate-y-[3rem] w-11/12 max-w-[30rem] rounded-xl shadow-lg">
        <div class="bg-primary-blue/2 rounded-xl">

            <a href="https://api.whatsapp.com/send?phone=914842886900" target="_blank">
                <div class="flex  items-center border-0 border-b border-black/10 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M17.5858 14.0787L14.5858 12.5787C14.4677 12.5199 14.3362 12.4933 14.2045 12.5015C14.0728 12.5097 13.9456 12.5525 13.8358 12.6256L12.4586 13.5444C11.8264 13.1968 11.3062 12.6766 10.9586 12.0444L11.8774 10.6672C11.9505 10.5573 11.9933 10.4302 12.0015 10.2985C12.0097 10.1668 11.9831 10.0353 11.9242 9.91719L10.4242 6.91719C10.3621 6.79163 10.266 6.686 10.1468 6.61226C10.0277 6.53853 9.89028 6.49964 9.75017 6.5C8.75561 6.5 7.80179 6.89509 7.09852 7.59835C6.39526 8.30161 6.00018 9.25544 6.00017 10.25C6.00266 12.4373 6.87265 14.5343 8.41928 16.0809C9.96592 17.6275 12.0629 18.4975 14.2502 18.5C14.7426 18.5 15.2303 18.403 15.6852 18.2145C16.1402 18.0261 16.5536 17.7499 16.9018 17.4017C17.25 17.0534 17.5263 16.64 17.7147 16.1851C17.9032 15.7301 18.0002 15.2425 18.0002 14.75C18.0003 14.6107 17.9616 14.4741 17.8884 14.3555C17.8152 14.2369 17.7104 14.1411 17.5858 14.0787ZM14.2502 17C12.4606 16.998 10.7448 16.2862 9.4794 15.0208C8.21396 13.7553 7.50216 12.0396 7.50017 10.25C7.50003 9.7298 7.68014 9.22562 8.00986 8.82326C8.33958 8.4209 8.79853 8.14521 9.30861 8.04313L10.3849 10.1994L9.46892 11.5625C9.40048 11.6652 9.35842 11.7831 9.34649 11.906C9.33455 12.0288 9.3531 12.1526 9.40049 12.2666C9.9371 13.5419 10.9517 14.5565 12.227 15.0931C12.3413 15.1426 12.4661 15.1629 12.5902 15.1521C12.7143 15.1413 12.8337 15.0998 12.9377 15.0312L14.3074 14.1181L16.4636 15.1944C16.3607 15.705 16.0838 16.1642 15.6802 16.4935C15.2765 16.8228 14.7711 17.0018 14.2502 17ZM12.0002 2.75C10.3169 2.74963 8.66213 3.18508 7.19704 4.01396C5.73194 4.84285 4.50641 6.03692 3.63971 7.47997C2.77302 8.92301 2.29469 10.5659 2.25129 12.2486C2.20789 13.9314 2.60089 15.5967 3.39205 17.0825L2.32799 20.2747C2.23985 20.539 2.22706 20.8226 2.29105 21.0938C2.35504 21.3649 2.49328 21.6129 2.69029 21.8099C2.88729 22.0069 3.13526 22.1451 3.40642 22.2091C3.67757 22.2731 3.96119 22.2603 4.22549 22.1722L7.41768 21.1081C8.72527 21.8036 10.1741 22.1921 11.6543 22.244C13.1344 22.2959 14.6069 22.01 15.9601 21.4079C17.3132 20.8057 18.5114 19.9033 19.4636 18.769C20.4159 17.6346 21.0972 16.2983 21.4559 14.8613C21.8146 13.4244 21.8412 11.9246 21.5337 10.4758C21.2263 9.02701 20.5928 7.66732 19.6813 6.49992C18.7699 5.33253 17.6045 4.38811 16.2736 3.73836C14.9427 3.08861 13.4812 2.75061 12.0002 2.75ZM12.0002 20.75C10.5498 20.751 9.12495 20.3691 7.86955 19.6428C7.77763 19.5895 7.67544 19.5563 7.56974 19.5455C7.46404 19.5347 7.35724 19.5464 7.25643 19.58L3.75018 20.75L4.91924 17.2438C4.95294 17.143 4.96485 17.0362 4.95418 16.9305C4.94351 16.8248 4.91051 16.7226 4.85736 16.6306C3.94796 15.0584 3.58284 13.2299 3.81864 11.429C4.05444 9.62801 4.87798 7.9552 6.16151 6.67006C7.44503 5.38491 9.11679 4.55925 10.9175 4.32118C12.7181 4.0831 14.547 4.44591 16.1204 5.35333C17.6938 6.26074 18.9238 7.66204 19.6196 9.33983C20.3153 11.0176 20.4379 12.8781 19.9684 14.6327C19.4989 16.3873 18.4634 17.9379 17.0227 19.0439C15.582 20.15 13.8165 20.7497 12.0002 20.75Z"
                            fill="#20BC73" />
                    </svg>
                    <div class="flex flex-col ml-2">
                        <span
                            class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">WhatsApp
                            Now</span>
                        <span class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">+91
                            4842886900</span>
                    </div>
                    <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                        fill="none">
                        <path
                            d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z"
                            fill="black" fill-opacity="0.4" />
                    </svg>
                </div>
            </a>


            <a href="mailto:care@extravelmoney.com">
                <div class="flex  items-center border-0 border-b border-black/10 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <rect x="0.5" y="1" width="23" height="23" rx="11.5" stroke="#0E51A0" />
                        <path
                            d="M17.4223 14.8175L14.5957 13.5509L14.5879 13.5473C14.4411 13.4846 14.281 13.4594 14.1221 13.474C13.9632 13.4887 13.8104 13.5428 13.6777 13.6313C13.662 13.6417 13.647 13.6529 13.6327 13.6649L12.1722 14.9099C11.247 14.4605 10.2918 13.5125 9.84243 12.5993L11.0892 11.1167C11.1012 11.1017 11.1126 11.0867 11.1234 11.0705C11.2101 10.9381 11.2627 10.7863 11.2765 10.6286C11.2903 10.471 11.2649 10.3124 11.2026 10.1669V10.1597L9.93243 7.32828C9.85008 7.13824 9.70847 6.97993 9.52874 6.87698C9.34902 6.77404 9.14082 6.73198 8.93523 6.75708C8.1222 6.86406 7.37592 7.26334 6.83577 7.88034C6.29562 8.49734 5.99854 9.28987 6.00001 10.1099C6.00001 14.8739 9.87603 18.75 14.6401 18.75C15.4601 18.7514 16.2526 18.4543 16.8696 17.9142C17.4866 17.374 17.8859 16.6278 17.9929 15.8147C18.018 15.6092 17.9761 15.4011 17.8732 15.2214C17.7704 15.0416 17.6122 14.9 17.4223 14.8175ZM14.6401 17.79C12.6039 17.7877 10.6517 16.9779 9.2119 15.5381C7.7721 14.0983 6.96224 12.1461 6.96001 10.1099C6.95775 9.52399 7.16884 8.95729 7.55386 8.51564C7.93887 8.07398 8.47148 7.78757 9.05223 7.70989C9.05199 7.71228 9.05199 7.71469 9.05223 7.71709L10.3122 10.5371L9.07203 12.0215C9.05944 12.036 9.048 12.0514 9.03783 12.0677C8.94754 12.2063 8.89457 12.3658 8.88405 12.5308C8.87354 12.6959 8.90584 12.8608 8.97783 13.0097C9.52143 14.1215 10.6416 15.2333 11.7654 15.7763C11.9154 15.8477 12.0813 15.8788 12.247 15.8668C12.4126 15.8549 12.5723 15.8001 12.7105 15.7079C12.7259 15.6976 12.7407 15.6863 12.7549 15.6743L14.2135 14.4299L17.0335 15.6929C17.0335 15.6929 17.0383 15.6929 17.0401 15.6929C16.9634 16.2745 16.6774 16.8082 16.2356 17.1942C15.7939 17.5801 15.2267 17.7919 14.6401 17.79Z"
                            fill="#0E51A0" />
                    </svg>
                    <div class="flex flex-col ml-2">
                        <span class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">Mail
                            US@</span>
                        <span
                            class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">care@extravelmoney.com</span>
                    </div>
                    <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                        fill="none">
                        <path
                            d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z"
                            fill="black" fill-opacity="0.4" />
                    </svg>
                </div>
            </a>

            <a href="tel:04842886900">
                <div class="flex  items-center px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <rect x="0.5" y="1" width="23" height="23" rx="11.5" stroke="#E5A339" />
                        <path
                            d="M17.4223 14.8175L14.5957 13.5509L14.5879 13.5473C14.4411 13.4846 14.281 13.4594 14.1221 13.474C13.9632 13.4887 13.8104 13.5428 13.6777 13.6313C13.662 13.6417 13.647 13.6529 13.6327 13.6649L12.1722 14.9099C11.247 14.4605 10.2918 13.5125 9.84243 12.5993L11.0892 11.1167C11.1012 11.1017 11.1126 11.0867 11.1234 11.0705C11.2101 10.9381 11.2627 10.7863 11.2765 10.6286C11.2903 10.471 11.2649 10.3124 11.2026 10.1669V10.1597L9.93243 7.32828C9.85008 7.13824 9.70847 6.97993 9.52874 6.87698C9.34902 6.77404 9.14082 6.73198 8.93523 6.75708C8.1222 6.86406 7.37592 7.26334 6.83577 7.88034C6.29562 8.49734 5.99854 9.28987 6.00001 10.1099C6.00001 14.8739 9.87603 18.75 14.6401 18.75C15.4601 18.7514 16.2526 18.4543 16.8696 17.9142C17.4866 17.374 17.8859 16.6278 17.9929 15.8147C18.018 15.6092 17.9761 15.4011 17.8732 15.2214C17.7704 15.0416 17.6122 14.9 17.4223 14.8175ZM14.6401 17.79C12.6039 17.7877 10.6517 16.9779 9.2119 15.5381C7.7721 14.0983 6.96224 12.1461 6.96001 10.1099C6.95775 9.52399 7.16884 8.95729 7.55386 8.51564C7.93887 8.07398 8.47148 7.78757 9.05223 7.70989C9.05199 7.71228 9.05199 7.71469 9.05223 7.71709L10.3122 10.5371L9.07203 12.0215C9.05944 12.036 9.048 12.0514 9.03783 12.0677C8.94754 12.2063 8.89457 12.3658 8.88405 12.5308C8.87354 12.6959 8.90584 12.8608 8.97783 13.0097C9.52143 14.1215 10.6416 15.2333 11.7654 15.7763C11.9154 15.8477 12.0813 15.8788 12.247 15.8668C12.4126 15.8549 12.5723 15.8001 12.7105 15.7079C12.7259 15.6976 12.7407 15.6863 12.7549 15.6743L14.2135 14.4299L17.0335 15.6929C17.0335 15.6929 17.0383 15.6929 17.0401 15.6929C16.9634 16.2745 16.6774 16.8082 16.2356 17.1942C15.7939 17.5801 15.2267 17.7919 14.6401 17.79Z"
                            fill="#E5A339" />
                    </svg>
                    <div class="flex flex-col ml-2">
                        <span class="text-black text-sm font-semibold font-['Plus Jakarta Sans'] leading-[21px]">Call
                            US@</span>
                        <span class="text-black/40 text-xs font-normal font-['Plus Jakarta Sans'] leading-3">0484 2886
                            900</span>
                    </div>
                    <svg class="ml-auto" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                        fill="none">
                        <path
                            d="M7.94058 4.47153L14.1906 10.7215C14.2487 10.7796 14.2948 10.8485 14.3262 10.9244C14.3577 11.0003 14.3739 11.0816 14.3739 11.1637C14.3739 11.2459 14.3577 11.3272 14.3262 11.4031C14.2948 11.4789 14.2487 11.5479 14.1906 11.6059L7.94058 17.8559C7.82331 17.9732 7.66425 18.0391 7.49839 18.0391C7.33254 18.0391 7.17348 17.9732 7.05621 17.8559C6.93893 17.7386 6.87305 17.5796 6.87305 17.4137C6.87305 17.2479 6.93893 17.0888 7.05621 16.9715L12.8648 11.1637L7.05621 5.3559C6.99814 5.29783 6.95207 5.2289 6.92065 5.15303C6.88922 5.07716 6.87305 4.99584 6.87305 4.91372C6.87305 4.83159 6.88922 4.75028 6.92065 4.67441C6.95207 4.59853 6.99814 4.5296 7.05621 4.47153C7.11428 4.41346 7.18321 4.3674 7.25908 4.33597C7.33495 4.30454 7.41627 4.28837 7.49839 4.28837C7.58052 4.28837 7.66183 4.30454 7.7377 4.33597C7.81358 4.3674 7.88251 4.41346 7.94058 4.47153Z"
                            fill="black" fill-opacity="0.4" />
                    </svg>
                </div>
            </a>



        </div>
    </div>
    <div id="mobNavMain"
        class=" absolute left-0 top-[101%] w-full h-screen bg-white z-[200] translate-x-[-100vw] duration-300">
        <div class="flex flex-col">
            <div
                class="mobDropDownHeader px-6 mt-6 py-4 border-b border-black/5 justify-start items-center gap-4 inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21.48 13.3734C21.2232 13.1756 20.9242 13.0399 20.6062 12.9768C20.2883 12.9137 19.9601 12.9249 19.6472 13.0096L19.2422 13.1034C21.2812 11.2078 22.3125 9.32902 22.3125 7.49996C22.3125 5.12246 20.4009 3.18746 18.0506 3.18746C17.3878 3.18331 16.7331 3.33365 16.1385 3.62657C15.5439 3.91948 15.0257 4.34691 14.625 4.87496C14.2243 4.34691 13.7061 3.91948 13.1115 3.62657C12.5169 3.33365 11.8622 3.18331 11.1994 3.18746C8.84906 3.18746 6.9375 5.12246 6.9375 7.49996C6.9375 8.56684 7.27781 9.6084 7.99594 10.7212C7.40729 10.812 6.8632 11.089 6.44344 11.5115L4.2675 13.6875H1.5C1.1519 13.6875 0.818064 13.8257 0.571922 14.0719C0.325781 14.318 0.1875 14.6519 0.1875 15V18.75C0.1875 19.0981 0.325781 19.4319 0.571922 19.678C0.818064 19.9242 1.1519 20.0625 1.5 20.0625H11.25C11.2961 20.0625 11.3421 20.0568 11.3869 20.0456L17.3869 18.5456C17.4153 18.538 17.4431 18.5287 17.4703 18.5175L21.1097 16.9687L21.1406 16.9547C21.4624 16.794 21.738 16.554 21.9414 16.2574C22.1448 15.9607 22.2694 15.6172 22.3033 15.2591C22.3373 14.901 22.2795 14.5402 22.1355 14.2106C21.9914 13.8811 21.7658 13.5936 21.48 13.3753V13.3734ZM11.1994 4.31246C11.818 4.30421 12.425 4.48072 12.9427 4.81942C13.4605 5.15812 13.8654 5.64359 14.1056 6.21371C14.148 6.31688 14.2201 6.40512 14.3127 6.46722C14.4054 6.52932 14.5144 6.56248 14.6259 6.56248C14.7375 6.56248 14.8465 6.52932 14.9391 6.46722C15.0318 6.40512 15.1039 6.31688 15.1462 6.21371C15.3865 5.64359 15.7914 5.15812 16.3091 4.81942C16.8269 4.48072 17.4339 4.30421 18.0525 4.31246C19.7512 4.31246 21.1875 5.77215 21.1875 7.49996C21.1875 9.39746 19.6706 11.5312 16.8 13.664L15.4059 13.9846C15.545 13.6158 15.5925 13.2187 15.5443 12.8274C15.4962 12.4362 15.3539 12.0624 15.1297 11.7382C14.9054 11.414 14.6058 11.1491 14.2567 10.9661C13.9075 10.783 13.5192 10.6874 13.125 10.6875H9.34406C8.47125 9.53152 8.0625 8.5134 8.0625 7.49996C8.0625 5.77215 9.49875 4.31246 11.1994 4.31246ZM1.3125 18.75V15C1.3125 14.9502 1.33225 14.9025 1.36742 14.8674C1.40258 14.8322 1.45027 14.8125 1.5 14.8125H3.9375V18.9375H1.5C1.45027 18.9375 1.40258 18.9177 1.36742 18.8825C1.33225 18.8474 1.3125 18.7997 1.3125 18.75ZM20.6512 15.9375L17.07 17.4628L11.1806 18.9375H5.0625V14.4834L7.23844 12.3065C7.3948 12.1493 7.5808 12.0247 7.78566 11.9399C7.99051 11.8551 8.21016 11.8118 8.43188 11.8125H13.125C13.4731 11.8125 13.8069 11.9507 14.0531 12.1969C14.2992 12.443 14.4375 12.7769 14.4375 13.125C14.4375 13.4731 14.2992 13.8069 14.0531 14.053C13.8069 14.2992 13.4731 14.4375 13.125 14.4375H10.5C10.3508 14.4375 10.2077 14.4967 10.1023 14.6022C9.99676 14.7077 9.9375 14.8508 9.9375 15C9.9375 15.1491 9.99676 15.2922 10.1023 15.3977C10.2077 15.5032 10.3508 15.5625 10.5 15.5625H13.5C13.5423 15.5625 13.5844 15.5578 13.6256 15.5484L19.9069 14.1037L19.9294 14.0981C20.1658 14.0336 20.4177 14.0588 20.6367 14.1688C20.8557 14.2787 21.0263 14.4657 21.1158 14.6938C21.2053 14.9219 21.2074 15.175 21.1217 15.4046C21.0359 15.6341 20.8684 15.8239 20.6512 15.9375Z"
                        fill="black" />
                </svg>
                <span class="grow shrink basis-0 text-black text-base font-semibold leading-tight">Services</span>
                <svg class="dropDownArrowMob rotate-180" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20" fill="none">
                    <path
                        d="M16.0285 12.0594L9.77847 5.80942C9.72043 5.75131 9.6515 5.70521 9.57562 5.67376C9.49975 5.6423 9.41842 5.62611 9.33628 5.62611C9.25415 5.62611 9.17282 5.6423 9.09695 5.67376C9.02107 5.70521 8.95214 5.75131 8.8941 5.80942L2.6441 12.0594C2.52682 12.1767 2.46094 12.3358 2.46094 12.5016C2.46094 12.6675 2.52682 12.8265 2.6441 12.9438C2.76137 13.0611 2.92043 13.127 3.08628 13.127C3.25214 13.127 3.4112 13.0611 3.52847 12.9438L9.33628 7.1352L15.1441 12.9438C15.2022 13.0019 15.2711 13.0479 15.347 13.0794C15.4228 13.1108 15.5042 13.127 15.5863 13.127C15.6684 13.127 15.7497 13.1108 15.8256 13.0794C15.9015 13.0479 15.9704 13.0019 16.0285 12.9438C16.0865 12.8857 16.1326 12.8168 16.164 12.7409C16.1955 12.665 16.2116 12.5837 16.2116 12.5016C16.2116 12.4195 16.1955 12.3382 16.164 12.2623C16.1326 12.1864 16.0865 12.1175 16.0285 12.0594Z"
                        fill="black" />
                </svg>
            </div>

            <div class="mobDropDownBody py-6 border-b border-black/5 flex-col justify-start items-start hidden">

                <a class="pl-16 py-4 text-black text-sm font-normal  leading-tight"
                    href="<?php echo $fold; ?>foreign-exchange/">
                    <span>Currency Exchange </span>
                </a>

                <a class="pl-16 py-4 text-black text-sm font-normal  leading-tight"
                    href="<?php echo $fold; ?>multi-currency-forex-card/">
                    <span>Forex Card </span>
                </a>


                <div class="mobDropDownHeader justify-start items-center gap-4 inline-flex">
                    <div
                        class="pl-16 py-4 text-black text-sm font-normal leading-tight flex items-center justify-between w-full gap-4">
                        <span>Money Transfer</span>
                        <svg class="dropDownArrowMob rotate-180" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M16.0285 12.0594L9.77847 5.80942C9.72043 5.75131 9.6515 5.70521 9.57562 5.67376C9.49975 5.6423 9.41842 5.62611 9.33628 5.62611C9.25415 5.62611 9.17282 5.6423 9.09695 5.67376C9.02107 5.70521 8.95214 5.75131 8.8941 5.80942L2.6441 12.0594C2.52682 12.1767 2.46094 12.3358 2.46094 12.5016C2.46094 12.6675 2.52682 12.8265 2.6441 12.9438C2.76137 13.0611 2.92043 13.127 3.08628 13.127C3.25214 13.127 3.4112 13.0611 3.52847 12.9438L9.33628 7.1352L15.1441 12.9438C15.2022 13.0019 15.2711 13.0479 15.347 13.0794C15.4228 13.1108 15.5042 13.127 15.5863 13.127C15.6684 13.127 15.7497 13.1108 15.8256 13.0794C15.9015 13.0479 15.9704 13.0019 16.0285 12.9438C16.0865 12.8857 16.1326 12.8168 16.164 12.7409C16.1955 12.665 16.2116 12.5837 16.2116 12.5016C16.2116 12.4195 16.1955 12.3382 16.164 12.2623C16.1326 12.1864 16.0865 12.1175 16.0285 12.0594Z"
                                fill="black" />
                        </svg>
                    </div>
                </div>
                <div style="padding-left:6rem" class="mobDropDownBody py-2 flex-col justify-start items-start hidden">
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-usa">
                        <span>Send Money to USA</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>domestic-transfer/india-to-uk">
                        <span>Send Money to UK</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-canada">
                        <span>Send Money to Canada</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-australia">
                        <span>Send Money to Australia</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-uae">
                        <span>Send Money to UAE</span>
                    </a>
                </div>

                <div class="mobDropDownHeader justify-start items-center gap-4 inline-flex">
                    <div
                        class="pl-16 py-4 text-black text-sm font-normal leading-tight flex items-center justify-between w-full gap-4">
                        <span>For Student</span>
                        <svg class="dropDownArrowMob rotate-180" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M16.0285 12.0594L9.77847 5.80942C9.72043 5.75131 9.6515 5.70521 9.57562 5.67376C9.49975 5.6423 9.41842 5.62611 9.33628 5.62611C9.25415 5.62611 9.17282 5.6423 9.09695 5.67376C9.02107 5.70521 8.95214 5.75131 8.8941 5.80942L2.6441 12.0594C2.52682 12.1767 2.46094 12.3358 2.46094 12.5016C2.46094 12.6675 2.52682 12.8265 2.6441 12.9438C2.76137 13.0611 2.92043 13.127 3.08628 13.127C3.25214 13.127 3.4112 13.0611 3.52847 12.9438L9.33628 7.1352L15.1441 12.9438C15.2022 13.0019 15.2711 13.0479 15.347 13.0794C15.4228 13.1108 15.5042 13.127 15.5863 13.127C15.6684 13.127 15.7497 13.1108 15.8256 13.0794C15.9015 13.0479 15.9704 13.0019 16.0285 12.9438C16.0865 12.8857 16.1326 12.8168 16.164 12.7409C16.1955 12.665 16.2116 12.5837 16.2116 12.5016C16.2116 12.4195 16.1955 12.3382 16.164 12.2623C16.1326 12.1864 16.0865 12.1175 16.0285 12.0594Z"
                                fill="black" />
                        </svg>
                    </div>
                </div>
                <div style="padding-left:6rem" class="mobDropDownBody py-2 flex-col justify-start items-start hidden">
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>university-fee-payment/">
                        <span>Pay University Fee</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight" href="<?php echo $fold; ?>order/gic/">
                        <span>GIC Account Opening</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>open-blocked-account/">
                        <span>Blocked Account Opening</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-canada/gic-account/">
                        <span>Send Money to GIC Account</span>
                    </a>
                    <a class=" py-4 text-black text-sm font-normal leading-tight"
                        href="<?php echo $fold; ?>wire-transfer/india-to-germany/blocked-account/">
                        <span>Send Money to Blocked Account</span>
                    </a>
                </div>



            </div>

        </div>
        <div class="px-6 py-4 border-b border-black/5 justify-between items-center inline-flex w-full">
            <a id="myAccountLink" href="<?php echo $fold; ?>myaccount">
                <div class="flex items-center justify-start gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21.4866 19.9687C20.0044 17.4075 17.6775 15.6103 14.9738 14.8481C16.2883 14.1799 17.3394 13.0885 17.9577 11.7498C18.576 10.411 18.7255 8.90311 18.3819 7.4691C18.0384 6.03508 17.2218 4.75856 16.064 3.84537C14.9062 2.93218 13.4746 2.43555 12 2.43555C10.5254 2.43555 9.09378 2.93218 7.93597 3.84537C6.77817 4.75856 5.96165 6.03508 5.6181 7.4691C5.27454 8.90311 5.42397 10.411 6.04228 11.7498C6.66058 13.0885 7.71174 14.1799 9.02625 14.8481C6.3225 15.6094 3.99563 17.4065 2.51344 19.9687C2.47274 20.0328 2.44541 20.1043 2.4331 20.1792C2.42079 20.2541 2.42375 20.3306 2.4418 20.4043C2.45984 20.478 2.49261 20.5473 2.53813 20.608C2.58364 20.6687 2.64096 20.7195 2.70664 20.7575C2.77232 20.7955 2.84501 20.8197 2.92032 20.8289C2.99563 20.838 3.07201 20.8319 3.14487 20.8107C3.21773 20.7896 3.28556 20.7539 3.34428 20.7059C3.403 20.6579 3.4514 20.5985 3.48657 20.5312C5.2875 17.4197 8.46938 15.5625 12 15.5625C15.5306 15.5625 18.7125 17.4197 20.5134 20.5312C20.5486 20.5985 20.597 20.6579 20.6557 20.7059C20.7144 20.7539 20.7823 20.7896 20.8551 20.8107C20.928 20.8319 21.0044 20.838 21.0797 20.8289C21.155 20.8197 21.2277 20.7955 21.2934 20.7575C21.359 20.7195 21.4164 20.6687 21.4619 20.608C21.5074 20.5473 21.5402 20.478 21.5582 20.4043C21.5763 20.3306 21.5792 20.2541 21.5669 20.1792C21.5546 20.1043 21.5273 20.0328 21.4866 19.9687ZM6.5625 8.99998C6.5625 7.92455 6.88141 6.87326 7.47889 5.97907C8.07637 5.08488 8.92559 4.38794 9.91916 3.97639C10.9127 3.56484 12.006 3.45716 13.0608 3.66696C14.1156 3.87677 15.0844 4.39464 15.8449 5.15509C16.6053 5.91554 17.1232 6.88441 17.333 7.93918C17.5428 8.99395 17.4352 10.0873 17.0236 11.0808C16.612 12.0744 15.9151 12.9236 15.0209 13.5211C14.1267 14.1186 13.0754 14.4375 12 14.4375C10.5584 14.4357 9.17638 13.8623 8.15703 12.843C7.13768 11.8236 6.56424 10.4416 6.5625 8.99998Z"
                            fill="black" />
                    </svg>
                    <span class="text-base font-normalleading-tight">My Account</span>
                </div>
            </a>


            <div class="pl-2 ml-auto pr-3 py-1 bg-[#0e51a0]/5 rounded-lg justify-center items-center gap-1 flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path
                        d="M8.85375 8.35375L6.35375 10.8538C6.3073 10.9002 6.25214 10.9371 6.19145 10.9622C6.13075 10.9873 6.0657 11.0003 6 11.0003C5.9343 11.0003 5.86925 10.9873 5.80855 10.9622C5.74786 10.9371 5.6927 10.9002 5.64625 10.8538C5.59979 10.8073 5.56294 10.7521 5.5378 10.6914C5.51266 10.6308 5.49972 10.5657 5.49972 10.5C5.49972 10.4343 5.51266 10.3692 5.5378 10.3086C5.56294 10.2479 5.59979 10.1927 5.64625 10.1462L7.29313 8.5H1.5C1.36739 8.5 1.24021 8.44732 1.14645 8.35355C1.05268 8.25979 1 8.13261 1 8C1 7.86739 1.05268 7.74021 1.14645 7.64645C1.24021 7.55268 1.36739 7.5 1.5 7.5H7.29313L5.64625 5.85375C5.55243 5.75993 5.49972 5.63268 5.49972 5.5C5.49972 5.36732 5.55243 5.24007 5.64625 5.14625C5.74007 5.05243 5.86732 4.99972 6 4.99972C6.13268 4.99972 6.25993 5.05243 6.35375 5.14625L8.85375 7.64625C8.90024 7.69269 8.93712 7.74783 8.96228 7.80853C8.98744 7.86923 9.00039 7.93429 9.00039 8C9.00039 8.06571 8.98744 8.13077 8.96228 8.19147C8.93712 8.25217 8.90024 8.30731 8.85375 8.35375ZM12.5 2H8.5C8.36739 2 8.24021 2.05268 8.14645 2.14645C8.05268 2.24021 8 2.36739 8 2.5C8 2.63261 8.05268 2.75979 8.14645 2.85355C8.24021 2.94732 8.36739 3 8.5 3H12V13H8.5C8.36739 13 8.24021 13.0527 8.14645 13.1464C8.05268 13.2402 8 13.3674 8 13.5C8 13.6326 8.05268 13.7598 8.14645 13.8536C8.24021 13.9473 8.36739 14 8.5 14H12.5C12.6326 14 12.7598 13.9473 12.8536 13.8536C12.9473 13.7598 13 13.6326 13 13.5V2.5C13 2.36739 12.9473 2.24021 12.8536 2.14645C12.7598 2.05268 12.6326 2 12.5 2Z"
                        fill="#0E51A0" />
                </svg>


                <a class="loginBtn text-[#0e51a0] text-xs font-medium leading-normal"
                    href="<?php echo $fold; ?>login/">Sign In</a>


            </div>
        </div>
        <!--<div class="flex flex-col">-->
        <!--    <div  class="mobDropDownHeader px-6 py-4 border-b border-black/5 justify-start items-center gap-4 inline-flex">-->
        <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">-->
        <!--            <path d="M21 6.1875H16.3125V5.25C16.3125 4.70299 16.0952 4.17839 15.7084 3.79159C15.3216 3.4048 14.797 3.1875 14.25 3.1875H9.75C9.20299 3.1875 8.67839 3.4048 8.29159 3.79159C7.9048 4.17839 7.6875 4.70299 7.6875 5.25V6.1875H3C2.6519 6.1875 2.31806 6.32578 2.07192 6.57192C1.82578 6.81806 1.6875 7.1519 1.6875 7.5V18C1.6875 18.3481 1.82578 18.6819 2.07192 18.9281C2.31806 19.1742 2.6519 19.3125 3 19.3125H21C21.3481 19.3125 21.6819 19.1742 21.9281 18.9281C22.1742 18.6819 22.3125 18.3481 22.3125 18V7.5C22.3125 7.1519 22.1742 6.81806 21.9281 6.57192C21.6819 6.32578 21.3481 6.1875 21 6.1875ZM8.8125 5.25C8.8125 5.00136 8.91127 4.7629 9.08709 4.58709C9.2629 4.41127 9.50136 4.3125 9.75 4.3125H14.25C14.4986 4.3125 14.7371 4.41127 14.9129 4.58709C15.0887 4.7629 15.1875 5.00136 15.1875 5.25V6.1875H8.8125V5.25ZM3 7.3125H21C21.0497 7.3125 21.0974 7.33225 21.1326 7.36742C21.1677 7.40258 21.1875 7.45027 21.1875 7.5V10.6875H17.8125V9.75C17.8125 9.60082 17.7532 9.45774 17.6477 9.35225C17.5423 9.24676 17.3992 9.1875 17.25 9.1875C17.1008 9.1875 16.9577 9.24676 16.8523 9.35225C16.7468 9.45774 16.6875 9.60082 16.6875 9.75V10.6875H7.3125V9.75C7.3125 9.60082 7.25324 9.45774 7.14775 9.35225C7.04226 9.24676 6.89918 9.1875 6.75 9.1875C6.60082 9.1875 6.45774 9.24676 6.35225 9.35225C6.24676 9.45774 6.1875 9.60082 6.1875 9.75V10.6875H2.8125V7.5C2.8125 7.45027 2.83225 7.40258 2.86742 7.36742C2.90258 7.33225 2.95027 7.3125 3 7.3125ZM21 18.1875H3C2.95027 18.1875 2.90258 18.1677 2.86742 18.1326C2.83225 18.0974 2.8125 18.0497 2.8125 18V11.8125H6.1875V12.75C6.1875 12.8992 6.24676 13.0423 6.35225 13.1477C6.45774 13.2532 6.60082 13.3125 6.75 13.3125C6.89918 13.3125 7.04226 13.2532 7.14775 13.1477C7.25324 13.0423 7.3125 12.8992 7.3125 12.75V11.8125H16.6875V12.75C16.6875 12.8992 16.7468 13.0423 16.8523 13.1477C16.9577 13.2532 17.1008 13.3125 17.25 13.3125C17.3992 13.3125 17.5423 13.2532 17.6477 13.1477C17.7532 13.0423 17.8125 12.8992 17.8125 12.75V11.8125H21.1875V18C21.1875 18.0497 21.1677 18.0974 21.1326 18.1326C21.0974 18.1677 21.0497 18.1875 21 18.1875Z" fill="black"/>-->
        <!--          </svg>-->
        <!--        <span class="grow shrink basis-0 text-black text-base font-semibold leading-tight">Tools</span>-->
        <!--        <svg class="dropDownArrowMob rotate-180" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">-->
        <!--            <path d="M16.0285 12.0594L9.77847 5.80942C9.72043 5.75131 9.6515 5.70521 9.57562 5.67376C9.49975 5.6423 9.41842 5.62611 9.33628 5.62611C9.25415 5.62611 9.17282 5.6423 9.09695 5.67376C9.02107 5.70521 8.95214 5.75131 8.8941 5.80942L2.6441 12.0594C2.52682 12.1767 2.46094 12.3358 2.46094 12.5016C2.46094 12.6675 2.52682 12.8265 2.6441 12.9438C2.76137 13.0611 2.92043 13.127 3.08628 13.127C3.25214 13.127 3.4112 13.0611 3.52847 12.9438L9.33628 7.1352L15.1441 12.9438C15.2022 13.0019 15.2711 13.0479 15.347 13.0794C15.4228 13.1108 15.5042 13.127 15.5863 13.127C15.6684 13.127 15.7497 13.1108 15.8256 13.0794C15.9015 13.0479 15.9704 13.0019 16.0285 12.9438C16.0865 12.8857 16.1326 12.8168 16.164 12.7409C16.1955 12.665 16.2116 12.5837 16.2116 12.5016C16.2116 12.4195 16.1955 12.3382 16.164 12.2623C16.1326 12.1864 16.0865 12.1175 16.0285 12.0594Z" fill="black"/>-->
        <!--          </svg>-->
        <!--    </div>-->

        <!--    <div class="mobDropDownBody py-6 border-b border-black/5 flex-col justify-start items-start hidden">-->

        <!--        <span class="pl-16 py-4 text-black text-sm font-normal  leading-tight">Money Transfer</span>-->

        <!--        <span class="pl-16 py-4 text-black text-sm font-normal  leading-tight">Forex Card & Cash</span>-->

        <!--        <span class="pl-16 py-4 text-black text-sm font-normal  leading-tight">Apply Visa</span>-->

        <!--        <span class="pl-16 py-4 text-black text-sm font-normal  leading-tight">Travel Insuarance</span>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</header>

<script type="text/javascript">
    (function (c, l, a, r, i, t, y) {
        c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
        t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "onicm6b816");
</script>