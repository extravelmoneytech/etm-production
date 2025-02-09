<!DOCTYPE html>
<html lang="en">

<?php
$fold = "../../";

$reviewAndPaymentPage = true;
$title = "Review And Payment";
include $fold . 'includesv2/head.php';
?>

<body>
    <div class="flex flex-col items-center justify-center">
        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">

            <?php
            include $fold . 'includesv2/header.php';
            ?>

            <div class="progressBar mb-8">
                <div class="w-full justify-start items-center progressBar hidden md:inline-flex mt-8">
                    <div class="grow shrink basis-0 h-0.5  bg-[#20bc73]"></div>
                    <div class="flex flex-col relative">
                        <div
                            class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] flex-col justify-center items-center gap-2.5 inline-flex">
                            <span class="text-black text-xl font-bold ">1</span>
                        </div>
                        <span
                            class="text-black text-lg font-bold  absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Get
                            Rates</span>
                    </div>

                    <div class="grow shrink basis-0 h-0.5  bg-[#20bc73]"></div>
                    <div class="flex flex-col relative">
                        <div
                            class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] flex-col justify-center items-center gap-2.5 inline-flex">
                            <span class="text-black text-xl font-bold ">2</span>
                        </div>
                        <span
                            class="text-black text-lg font-bold  absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Choose Provider</span>
                    </div>
                    <div class="grow shrink basis-0 h-0.5  bg-[#20bc73]"></div>
                    <div class="flex flex-col relative">
                        <div
                            class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] flex-col justify-center items-center gap-2.5 inline-flex">
                            <span class="text-black text-xl font-bold ">3</span>
                        </div>
                        <span
                            class="text-black text-lg font-bold  absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Contact
                            Details</span>
                    </div>
                    <div class="grow shrink basis-0 h-0.5  bg-[#20bc73]"></div>
                    <div class="flex flex-col relative">
                        <div
                            class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#20bc73] flex-col justify-center items-center gap-2.5 inline-flex">
                            <span class="text-black text-xl font-bold ">4</span>
                        </div>
                        <span
                            class="text-black text-opacity-60 text-lg font-normal  absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Review
                            & Payment</span>
                    </div>
                    <div class="grow shrink basis-0 h-0.5 bg-[#20bc73] border border-[#eaeef4]"></div>
                    <div class="flex flex-col relative">
                        <div
                            class="w-12 h-12 p-2.5 bg-white rounded-[30px] border-2 border-[#eaeef4] flex-col justify-center items-center gap-2.5 inline-flex">
                            <span class="text-black text-xl font-bold ">5</span>
                        </div>
                        <span
                            class="text-black text-opacity-60 text-lg font-normal  absolute -bottom-12 min-w-48 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">Complete
                            KYC</span>
                    </div>
                    <div class="grow shrink basis-0 h-0.5 bg-[#20bc73] border border-[#eaeef4]"></div>
                </div>

            </div>

            <section>
                <div class="px-5 sm:px-12 md:px-16 py-5">
                    <div
                        class=" w-full p-2.5 bg-primary-blue/10 rounded-lg justify-center items-center gap-2.5 inline-flex md:hidden">
                        <div class="text-primary-blue text-base font-bold" id="productNameIdentifier">Currency Exchange</div>
                    </div>

                    <div class="w-full progressBar justify-start items-center gap-2 inline-flex mt-6 md:hidden">
                        <div
                            class=" w-10 aspect-square bg-white rounded-3xl border-2 border-primary-blue flex-col justify-center items-center gap-2.5 inline-flex">
                            <div><span class="text-primary-blue text-lg font-bold ">4</span><span
                                    class="text-black/40 text-base font-medium ">/5</span></div>
                        </div>
                        <div class="text-black text-base font-bold leading-none">Review Payment</div>
                        <div class="flex flex-1 shrink gap-2.5 self-stretch my-auto h-0.5 bg-primary-blue basis-4 w-[198px]"
                            role="progressbar"></div>
                    </div>

                    <div class="flex flex-col md:flex-row md:gap-16  md:border border-primary-blue/10 rounded-2xl md:p-8">
                        <div class="w-full md:w-1/2 mt-4 md:border-0 border border-primary-blue/10 rounded-2xl ">
                            <div class="py-4 px-3 border-b border-black/20">
                                <h2 class="text-black text-base font-bold ">Order Summary</h2>
                                <div class="flex flex-col mt-6 gap-4 forexContainer">
                                    <div class="flex flex-col  gap-4 " id="productList">

                                    </div>

                                    <div id="doorDeliveryData" class=" justify-between items-start inline-flex w-full">
                                        <p class="text-[#677489] text-sm font-medium  tracking-tight">Delivery Fee</p>
                                        <p class="text-[#111729] text-sm font-medium  tracking-tight" id="deliveryFee">₹ 000</p>
                                    </div>
                                    <div class="inline-flex justify-between items-start  w-full">
                                        <p class="text-[#677489] text-sm font-medium  tracking-tight ">GST</p>
                                        <p class="text-[#111729] text-sm font-medium  tracking-tight" id="gst">₹ 000</p>
                                    </div>

                                </div>
                                <div class="flex flex-col mt-6 gap-4 moneyT">
                                    <div class="flex  gap-4 mb-4 justify-between" id="mtProduct">
                                        <div class="flex flex-col gap-2">
                                            <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Currency</span>
                                            <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMt">USD@ 84.17</span>
                                        </div>
                                        <div class="flex flex-col gap-2 items-end">
                                            <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Fx Amount</span>
                                            <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMtAmnt">5000</span>
                                        </div>
                                        <div class="flex flex-col gap-2 items-end">
                                            <span class=" text-[#0e51a0] text-sm font-medium  leading-relaxed tracking-tight">Amount in INR</span>
                                            <span class=" text-[#111729] text-sm font-medium  leading-relaxed tracking-tight" id="currencyMtAmntinr">₹ 4,84,000</span>
                                        </div>
                                    </div>


                                    <div class=" justify-between items-start inline-flex w-full">
                                        <p class="text-[#677489] text-sm font-medium  tracking-tight">GST</p>
                                        <p class="text-[#111729] text-sm font-medium  tracking-tight" id="gstMt">₹ 000</p>
                                    </div>
                                    <div class="justify-between items-start inline-flex w-full mt-4">
                                        <p class="text-[#677489] text-sm font-medium  tracking-tight">Bank Charges</p>
                                        <p class="text-[#111729] text-sm font-medium  tracking-tight" id="bankCharges"></p>
                                    </div>
                                </div>
                            </div>

                            <div class=" px-3 justify-between items-start inline-flex w-full py-4 border-b border-black/20">
                                <p class="text-black text-base font-bold  leading-relaxed tracking-tight">Total</p>
                                <p class="text-[#111729] text-base font-bold  leading-relaxed" id="totalAmnt">₹ 000</p>
                            </div>

                            <div class="moneyT w-full px-3 py-4 justify-between items-center inline-flex ">
                                <span class="text-black/40 text-sm font-semibold   tracking-tight cursor-pointer w-fit select-none" id="discountCodeTrigger">Have a Discount Code?</span>

                            </div>

                            <div id="discountInputContainer" style="display: none;">
                                <div class="h-10 w-full pl-3 pr-1 py-1 rounded-xl border border-[#e3e8ef] justify-start items-center gap-3 inline-flex">
                                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-2 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21.0394 9.76875C20.6737 9.38719 20.2959 8.99344 20.1441 8.62687C20.0034 8.28656 19.9959 7.78312 19.9875 7.25062C19.9744 6.37125 19.9594 5.37563 19.2919 4.70813C18.6244 4.04063 17.625 4.02562 16.7494 4.0125C16.2169 4.00406 15.7181 3.99656 15.3731 3.85594C15.0066 3.70406 14.6128 3.32625 14.2313 2.96062C13.6088 2.36437 12.9038 1.6875 12 1.6875C11.0962 1.6875 10.3912 2.36437 9.76875 2.96062C9.38719 3.32625 8.99344 3.70406 8.62687 3.85594C8.28656 3.99656 7.78312 4.00406 7.25062 4.0125C6.37125 4.02562 5.37563 4.04063 4.70813 4.70813C4.04063 5.37563 4.02562 6.375 4.0125 7.25062C4.00406 7.78312 3.99656 8.28187 3.85594 8.62687C3.70406 8.99344 3.32625 9.38719 2.96062 9.76875C2.36437 10.3912 1.6875 11.0962 1.6875 12C1.6875 12.9038 2.36437 13.6088 2.96062 14.2313C3.32625 14.6128 3.70406 15.0066 3.85594 15.3731C3.99656 15.7134 4.00406 16.2169 4.0125 16.7494C4.02562 17.6288 4.04063 18.6244 4.70813 19.2919C5.37563 19.9594 6.375 19.9744 7.25062 19.9875C7.78312 19.9959 8.28187 20.0034 8.62687 20.1441C8.99344 20.2959 9.38719 20.6737 9.76875 21.0394C10.3912 21.6356 11.0962 22.3125 12 22.3125C12.9038 22.3125 13.6088 21.6356 14.2313 21.0394C14.6128 20.6737 15.0066 20.2959 15.3731 20.1441C15.7134 20.0034 16.2169 19.9959 16.7494 19.9875C17.6288 19.9744 18.6244 19.9594 19.2919 19.2919C19.9594 18.6244 19.9744 17.6288 19.9875 16.7494C19.9959 16.2169 20.0034 15.7181 20.1441 15.3731C20.2959 15.0066 20.6737 14.6128 21.0394 14.2313C21.6356 13.6088 22.3125 12.9038 22.3125 12C22.3125 11.0962 21.6356 10.3912 21.0394 9.76875ZM20.2275 13.4522C19.7897 13.9088 19.3369 14.3812 19.1025 14.9437C18.8794 15.4819 18.87 16.1175 18.8606 16.7325C18.8503 17.43 18.8391 18.1519 18.495 18.4969C18.1509 18.8419 17.4281 18.8522 16.7306 18.8625C16.1156 18.8719 15.48 18.8813 14.9419 19.1044C14.3794 19.3369 13.9106 19.7897 13.4503 20.2294C12.9581 20.6981 12.4491 21.1894 11.9981 21.1894C11.5472 21.1894 11.0381 20.7009 10.545 20.2294C10.0894 19.7916 9.61688 19.3387 9.05438 19.1044C8.51625 18.8813 7.88062 18.8719 7.26562 18.8625C6.56812 18.8522 5.84625 18.8409 5.50125 18.4969C5.15625 18.1528 5.14594 17.43 5.13562 16.7325C5.12625 16.1175 5.11688 15.4819 4.89375 14.9437C4.66125 14.3812 4.20844 13.9125 3.76875 13.4522C3.30094 12.96 2.8125 12.4509 2.8125 12C2.8125 11.5491 3.30094 11.04 3.7725 10.5478C4.21031 10.0913 4.66313 9.61875 4.8975 9.05625C5.12063 8.51813 5.13 7.8825 5.13937 7.2675C5.14969 6.57 5.16094 5.84812 5.505 5.50313C5.84906 5.15813 6.57188 5.14781 7.26937 5.1375C7.88438 5.12812 8.52 5.11875 9.05813 4.89563C9.62063 4.66313 10.0894 4.21031 10.5497 3.77063C11.04 3.30094 11.5491 2.8125 12 2.8125C12.4509 2.8125 12.96 3.30094 13.4531 3.7725C13.9087 4.21031 14.3812 4.66313 14.9437 4.8975C15.4819 5.12063 16.1175 5.13 16.7325 5.13937C17.43 5.14969 18.1519 5.16094 18.4969 5.505C18.8419 5.84906 18.8522 6.57188 18.8625 7.26937C18.8719 7.88438 18.8813 8.52 19.1044 9.05813C19.3369 9.62063 19.7897 10.0894 20.2294 10.5497C20.6981 11.0419 21.1894 11.5509 21.1894 12.0019C21.1894 12.4528 20.6991 12.96 20.2275 13.4522ZM11.0625 9C11.0625 8.59208 10.9415 8.19331 10.7149 7.85414C10.4883 7.51496 10.1662 7.2506 9.78928 7.0945C9.41241 6.93839 8.99771 6.89755 8.59763 6.97713C8.19754 7.05671 7.83004 7.25315 7.54159 7.54159C7.25315 7.83004 7.05671 8.19754 6.97713 8.59763C6.89755 8.99771 6.93839 9.41241 7.0945 9.78928C7.2506 10.1662 7.51496 10.4883 7.85414 10.7149C8.19331 10.9415 8.59208 11.0625 9 11.0625C9.54701 11.0625 10.0716 10.8452 10.4584 10.4584C10.8452 10.0716 11.0625 9.54701 11.0625 9ZM8.0625 9C8.0625 8.81458 8.11748 8.63332 8.2205 8.47915C8.32351 8.32498 8.46993 8.20482 8.64123 8.13386C8.81254 8.06291 9.00104 8.04434 9.1829 8.08051C9.36475 8.11669 9.5318 8.20598 9.66291 8.33709C9.79402 8.4682 9.88331 8.63525 9.91949 8.8171C9.95566 8.99896 9.93709 9.18746 9.86614 9.35877C9.79518 9.53007 9.67502 9.67649 9.52085 9.7795C9.36668 9.88252 9.18542 9.9375 9 9.9375C8.75136 9.9375 8.5129 9.83873 8.33709 9.66291C8.16127 9.4871 8.0625 9.24864 8.0625 9ZM15 12.9375C14.5921 12.9375 14.1933 13.0585 13.8541 13.2851C13.515 13.5117 13.2506 13.8338 13.0945 14.2107C12.9384 14.5876 12.8975 15.0023 12.9771 15.4024C13.0567 15.8025 13.2531 16.17 13.5416 16.4584C13.83 16.7469 14.1975 16.9433 14.5976 17.0229C14.9977 17.1025 15.4124 17.0616 15.7893 16.9055C16.1662 16.7494 16.4883 16.485 16.7149 16.1459C16.9415 15.8067 17.0625 15.4079 17.0625 15C17.0625 14.453 16.8452 13.9284 16.4584 13.5416C16.0716 13.1548 15.547 12.9375 15 12.9375ZM15 15.9375C14.8146 15.9375 14.6333 15.8825 14.4792 15.7795C14.325 15.6765 14.2048 15.5301 14.1339 15.3588C14.0629 15.1875 14.0443 14.999 14.0805 14.8171C14.1167 14.6352 14.206 14.4682 14.3371 14.3371C14.4682 14.206 14.6352 14.1167 14.8171 14.0805C14.999 14.0443 15.1875 14.0629 15.3588 14.1339C15.5301 14.2048 15.6765 14.325 15.7795 14.4792C15.8825 14.6333 15.9375 14.8146 15.9375 15C15.9375 15.2486 15.8387 15.4871 15.6629 15.6629C15.4871 15.8387 15.2486 15.9375 15 15.9375ZM16.1475 8.6475L8.6475 16.1475C8.54087 16.2469 8.39983 16.301 8.25411 16.2984C8.10838 16.2958 7.96934 16.2368 7.86628 16.1337C7.76322 16.0307 7.70419 15.8916 7.70162 15.7459C7.69905 15.6002 7.75314 15.4591 7.8525 15.3525L15.3525 7.8525C15.4591 7.75314 15.6002 7.69905 15.7459 7.70162C15.8916 7.70419 16.0307 7.76322 16.1337 7.86628C16.2368 7.96934 16.2958 8.10838 16.2984 8.25411C16.301 8.39983 16.2469 8.54087 16.1475 8.6475Z" fill="#97A3B6" />
                                        </svg>
                                        <input id="discountInput" class="grow shrink basis-0 text-[#677489] text-base font-normal leading-none border-none outline-none" placeholder="Enter Coupon Code" type="text">

                                    </div>
                                    <div class="w-[72px] self-stretch bg-[#008e4b] rounded-lg justify-center items-center gap-2.5 flex cursor-pointer" id="applyCoupon">
                                        <div class="text-white text-sm font-bold leading-tight tracking-tight select-none" >Apply</div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden flex-col gap-2 px-3 md:px-0" id="discountCouponRemoveContainer">
                                <p class="text-[#111729] text-base font-bold leading-relaxed tracking-tight">Discount Code</p>
                                <div class="h-10 pl-3 pr-1 py-1 rounded-xl border border-[#e3e8ef] justify-start items-center gap-3 inline-flex" id="couponRemove">
                                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M16.3373 9.23137C16.4474 9.34167 16.5093 9.49117 16.5093 9.64706C16.5093 9.80294 16.4474 9.95245 16.3373 10.0627L10.8471 15.5529C10.7368 15.6631 10.5873 15.725 10.4314 15.725C10.2755 15.725 10.126 15.6631 10.0157 15.5529L7.66275 13.2C7.55884 13.0885 7.50227 12.941 7.50496 12.7886C7.50765 12.6362 7.56939 12.4908 7.67716 12.383C7.78494 12.2753 7.93034 12.2135 8.08273 12.2108C8.23512 12.2082 8.38261 12.2647 8.49412 12.3686L10.4314 14.3049L15.5059 9.23137C15.6162 9.12121 15.7657 9.05934 15.9216 9.05934C16.0775 9.05934 16.227 9.12121 16.3373 9.23137ZM22 12C22 13.9778 21.4135 15.9112 20.3147 17.5557C19.2159 19.2002 17.6541 20.4819 15.8268 21.2388C13.9996 21.9957 11.9889 22.1937 10.0491 21.8078C8.10929 21.422 6.32746 20.4696 4.92894 19.0711C3.53041 17.6725 2.578 15.8907 2.19215 13.9509C1.8063 12.0111 2.00433 10.0004 2.76121 8.17316C3.51809 6.3459 4.79981 4.78412 6.4443 3.6853C8.08879 2.58649 10.0222 2 12 2C14.6512 2.00311 17.1929 3.05768 19.0676 4.93237C20.9423 6.80706 21.9969 9.34879 22 12ZM20.8235 12C20.8235 10.2549 20.306 8.54893 19.3365 7.09791C18.367 5.64689 16.9889 4.51595 15.3766 3.84812C13.7643 3.18029 11.9902 3.00555 10.2786 3.34601C8.56702 3.68647 6.99482 4.52683 5.76083 5.76082C4.52683 6.99481 3.68647 8.56702 3.34602 10.2786C3.00556 11.9902 3.18029 13.7643 3.84813 15.3766C4.51596 16.9889 5.64689 18.367 7.09791 19.3365C8.54893 20.306 10.2549 20.8235 12 20.8235C14.3394 20.8209 16.5821 19.8905 18.2363 18.2363C19.8905 16.5821 20.8209 14.3393 20.8235 12Z" fill="#008E4C" />
                                        </svg>
                                        <div class="grow shrink basis-0 h-4 justify-start items-center gap-1 flex">
                                            <div class="text-[#008e4b] text-base font-semibold  leading-none couponCode">EXTRAVEL100</div>
                                        </div>
                                    </div>
                                    <div id="removeCoupon" class="w-[72px] self-stretch bg-[#e3373a]/5 rounded-lg justify-center items-center gap-2.5 flex cursor-pointer">
                                        <div class="text-[#e3373a] text-sm font-medium leading-tight tracking-tight select-none">Remove</div>
                                    </div>
                                </div>
                                <div class="px-[9px] py-1 bg-[#20bc73]/10 rounded-lg justify-start items-center gap-1 inline-flex my-2">
                                    
                                    <div><span class="text-[#008e4b] text-[14px] font-bold  leading-[18px] couponCode">EXTRA100</span><span class="text-[#008e4b] text-[14px] font-normal leading-[18px]">  Successfully Applied, You saved  </span><span class="text-[#008e4b] text-[14px] font-bold leading-[18px]" id="discountRate">₹1500 </span><span class="text-[#008e4b] text-[14px] font-normal  leading-[18px]"> on this order.</span></div>
                                </div>
                            </div>

                            <div class="moneyT px-3 pb-3">
                                <span class="text-black/60 text-xs font-normal  leading-[18px]" id="intermediatoryNote">Note: Intermediatory bank may charge US$ 15-30 for receiving the Wire Transfer. Kindly check with the beneficiary to find out the exact fee.</span>
                                <p class="text-black/60 text-xs font-normal  leading-[18px] mt-4"><span>TCS (Tax Collected at Source) may be applicable on your Wire Transfer. It is NOT an additional charge and can be claimed when filing Income Tax Returns. </span><a href="https://www.extravelmoney.com/tcs-tax-on-remittance-from-india/" target="_blank" class="text-[#0e51a0] text-xs font-normal  underline leading-[18px]"> Know more about TCS.</a></p>
                            </div>



                        </div>

                        <div class="flex w-full md:w-2/5 flex-col mt-6">


                            <p class="text-black/60 text-sm font-semibold">Select Payment Method</p>




                            <div class="flex flex-col gap-2 forexContainer">
                                <div id=""
                                    class="radio  p-4 rounded-lg border flex-col justify-center items-start gap-2 inline-flex mt-2 selectedRadio w-full select-none cursor-pointer">
                                    <div class="justify-start items-center gap-2 inline-flex">
                                        <svg class="checkedIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M16.1475 9.91695C16.2528 10.0224 16.312 10.1654 16.312 10.3145C16.312 10.4635 16.2528 10.6065 16.1475 10.712L10.8975 15.962C10.792 16.0673 10.6491 16.1265 10.5 16.1265C10.3509 16.1265 10.208 16.0673 10.1025 15.962L7.8525 13.712C7.75314 13.6053 7.69905 13.4643 7.70162 13.3186C7.70419 13.1728 7.76323 13.0338 7.86629 12.9307C7.96935 12.8277 8.10839 12.7686 8.25411 12.7661C8.39984 12.7635 8.54087 12.8176 8.6475 12.917L10.5 14.7685L15.3525 9.91695C15.458 9.81162 15.6009 9.75245 15.75 9.75245C15.8991 9.75245 16.042 9.81162 16.1475 9.91695ZM21.5625 12.5645C21.5625 14.4557 21.0017 16.3045 19.9509 17.8771C18.9002 19.4496 17.4067 20.6753 15.6594 21.3991C13.9121 22.1228 11.9894 22.3122 10.1345 21.9432C8.27951 21.5742 6.57564 20.6635 5.2383 19.3262C3.90096 17.9888 2.99022 16.2849 2.62125 14.43C2.25227 12.5751 2.44164 10.6524 3.16541 8.90504C3.88917 7.15772 5.11482 5.66427 6.68736 4.61352C8.25991 3.56278 10.1087 3.00195 12 3.00195C14.5352 3.00493 16.9658 4.01336 18.7584 5.80603C20.5511 7.5987 21.5595 10.0292 21.5625 12.5645ZM20.4375 12.5645C20.4375 10.8957 19.9427 9.26437 19.0155 7.87683C18.0884 6.48929 16.7706 5.40783 15.2289 4.76922C13.6871 4.13061 11.9906 3.96351 10.3539 4.28908C8.71722 4.61464 7.2138 5.41823 6.03379 6.59824C4.85379 7.77825 4.05019 9.28166 3.72463 10.9184C3.39907 12.5551 3.56616 14.2516 4.20477 15.7933C4.84338 17.3351 5.92484 18.6529 7.31238 19.58C8.69992 20.5071 10.3312 21.002 12 21.002C14.237 20.9995 16.3817 20.1097 17.9635 18.5279C19.5453 16.9461 20.435 14.8015 20.4375 12.5645Z"
                                                fill="white" />
                                        </svg>
                                        <div class="w-5 aspect-square border border-gray-300 rounded-full uncheckedIcon">
                                        </div>
                                        <p class=" text-sm font-semibold">Book now & Pay later</p>
                                    </div>
                                    <div class="self-stretch">
                                        <div class=" text-xs font-normal leading-5">
                                            <p id="paymentInfoText"></p>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="flex flex-col gap-2 moneyT">
                                <div id="radio1"
                                    class="radio h-28 p-4 rounded-lg border flex-col justify-center items-start gap-2 inline-flex mt-2 selectedRadio w-full select-none cursor-pointer">
                                    <div class="justify-start items-center gap-2 inline-flex">
                                        <svg class="checkedIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M16.1475 9.91695C16.2528 10.0224 16.312 10.1654 16.312 10.3145C16.312 10.4635 16.2528 10.6065 16.1475 10.712L10.8975 15.962C10.792 16.0673 10.6491 16.1265 10.5 16.1265C10.3509 16.1265 10.208 16.0673 10.1025 15.962L7.8525 13.712C7.75314 13.6053 7.69905 13.4643 7.70162 13.3186C7.70419 13.1728 7.76323 13.0338 7.86629 12.9307C7.96935 12.8277 8.10839 12.7686 8.25411 12.7661C8.39984 12.7635 8.54087 12.8176 8.6475 12.917L10.5 14.7685L15.3525 9.91695C15.458 9.81162 15.6009 9.75245 15.75 9.75245C15.8991 9.75245 16.042 9.81162 16.1475 9.91695ZM21.5625 12.5645C21.5625 14.4557 21.0017 16.3045 19.9509 17.8771C18.9002 19.4496 17.4067 20.6753 15.6594 21.3991C13.9121 22.1228 11.9894 22.3122 10.1345 21.9432C8.27951 21.5742 6.57564 20.6635 5.2383 19.3262C3.90096 17.9888 2.99022 16.2849 2.62125 14.43C2.25227 12.5751 2.44164 10.6524 3.16541 8.90504C3.88917 7.15772 5.11482 5.66427 6.68736 4.61352C8.25991 3.56278 10.1087 3.00195 12 3.00195C14.5352 3.00493 16.9658 4.01336 18.7584 5.80603C20.5511 7.5987 21.5595 10.0292 21.5625 12.5645ZM20.4375 12.5645C20.4375 10.8957 19.9427 9.26437 19.0155 7.87683C18.0884 6.48929 16.7706 5.40783 15.2289 4.76922C13.6871 4.13061 11.9906 3.96351 10.3539 4.28908C8.71722 4.61464 7.2138 5.41823 6.03379 6.59824C4.85379 7.77825 4.05019 9.28166 3.72463 10.9184C3.39907 12.5551 3.56616 14.2516 4.20477 15.7933C4.84338 17.3351 5.92484 18.6529 7.31238 19.58C8.69992 20.5071 10.3312 21.002 12 21.002C14.237 20.9995 16.3817 20.1097 17.9635 18.5279C19.5453 16.9461 20.435 14.8015 20.4375 12.5645Z"
                                                fill="white" />
                                        </svg>
                                        <div class="w-5 aspect-square border border-gray-300 rounded-full uncheckedIcon">
                                        </div>
                                        <p class=" text-sm font-semibold">NEFT/RTGS</p>
                                    </div>
                                    <div class="self-stretch">
                                        <p class=" text-xs font-normal leading-5">Pay as NEFT/RTGS transfer to the Bank/Exchange House's Account. Payment instructions will be shared on your registered email.</p>
                                    </div>
                                </div>

                                <div id="radio2"
                                    class="radio h-28 p-4 rounded-lg border flex-col justify-center items-start gap-2 inline-flex mt-2 w-full select-none cursor-pointer">
                                    <div class="justify-start items-center gap-2 inline-flex">
                                        <svg class="checkedIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M16.1475 9.91695C16.2528 10.0224 16.312 10.1654 16.312 10.3145C16.312 10.4635 16.2528 10.6065 16.1475 10.712L10.8975 15.962C10.792 16.0673 10.6491 16.1265 10.5 16.1265C10.3509 16.1265 10.208 16.0673 10.1025 15.962L7.8525 13.712C7.75314 13.6053 7.69905 13.4643 7.70162 13.3186C7.70419 13.1728 7.76323 13.0338 7.86629 12.9307C7.96935 12.8277 8.10839 12.7686 8.25411 12.7661C8.39984 12.7635 8.54087 12.8176 8.6475 12.917L10.5 14.7685L15.3525 9.91695C15.458 9.81162 15.6009 9.75245 15.75 9.75245C15.8991 9.75245 16.042 9.81162 16.1475 9.91695ZM21.5625 12.5645C21.5625 14.4557 21.0017 16.3045 19.9509 17.8771C18.9002 19.4496 17.4067 20.6753 15.6594 21.3991C13.9121 22.1228 11.9894 22.3122 10.1345 21.9432C8.27951 21.5742 6.57564 20.6635 5.2383 19.3262C3.90096 17.9888 2.99022 16.2849 2.62125 14.43C2.25227 12.5751 2.44164 10.6524 3.16541 8.90504C3.88917 7.15772 5.11482 5.66427 6.68736 4.61352C8.25991 3.56278 10.1087 3.00195 12 3.00195C14.5352 3.00493 16.9658 4.01336 18.7584 5.80603C20.5511 7.5987 21.5595 10.0292 21.5625 12.5645ZM20.4375 12.5645C20.4375 10.8957 19.9427 9.26437 19.0155 7.87683C18.0884 6.48929 16.7706 5.40783 15.2289 4.76922C13.6871 4.13061 11.9906 3.96351 10.3539 4.28908C8.71722 4.61464 7.2138 5.41823 6.03379 6.59824C4.85379 7.77825 4.05019 9.28166 3.72463 10.9184C3.39907 12.5551 3.56616 14.2516 4.20477 15.7933C4.84338 17.3351 5.92484 18.6529 7.31238 19.58C8.69992 20.5071 10.3312 21.002 12 21.002C14.237 20.9995 16.3817 20.1097 17.9635 18.5279C19.5453 16.9461 20.435 14.8015 20.4375 12.5645Z"
                                                fill="white" />
                                        </svg>
                                        <div class="w-5 aspect-square border border-gray-300 rounded-full uncheckedIcon">
                                        </div>
                                        <p class=" text-sm font-semibold">Payment Gateway</p>
                                    </div>
                                    <div class="self-stretch">
                                        <p class=" text-xs font-normal leading-5">Pay via the payment gateway provided by the Bank/Exchange House. Payment instructions will be shared on your registered email.</p>
                                    </div>
                                </div>

                            </div>

                            <div class="text-black/60 text-xs font-normal mt-10"><span>By proceeding I agree to the </span><a class="cursor-pointer" target=_blank href="https://www.extravelmoney.com/terms/"><span class="underline">Terms & Conditions</span></a><span> and </span><a class="cursor-pointer" target=_blank href="https://www.extravelmoney.com/refund-policy/"><span class="underline">Cancellation & Refund Policy</span></a><span> of ExTravelmoney Technosol Pvt. Ltd.</span></div>


                            <div class="bg-white py-4 rounded-t-3xl  md:static fixed bottom-0 left-0 w-full flex items-center justify-center">
                                <div class="w-[90%] md:w-full h-12 px-2 py-3 bg-primary-blue rounded-lg justify-center items-center gap-1   flex md:inline-flex cursor-pointer" id="summaryConfirm">
                                    <div class="text-white text-sm font-bold">Place Order</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z" fill="white" />
                                    </svg>
                                </div>
                            </div>


                        </div>
                    </div>









                </div>














            </section>

        </div>

    </div>
    <footer>

        <div class="loadingAnimationContainer flex items-center justify-center h-screen fixed top-0 left-0 w-full bg-white z-50">
            <div class="loading">
                <svg viewBox="0 0 187.3 93.7" height="200px" width="300px" class="svgbox">
                    <defs>
                        <linearGradient y2="0%" x2="100%" y1="0%" x1="0%" id="gradient">
                            <stop stop-color="#2C5AA2" offset="0%"></stop>
                            <stop stop-color="#E3373A" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path stroke="url(#gradient)" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
                </svg>
            </div>
        </div>


        <?php
        include $fold . 'includesv2/footerScripts.php';
        ?>


    </footer>
</body>

</html>