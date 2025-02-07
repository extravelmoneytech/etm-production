<!-- Cheap Wire Transfers from India to USA -->
<section class="w-full flex justify-center items-center relative">
    <div class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-8">
        <div class="rounded-3xl overflow-hidden bg-gradient-to-r from-[#0e51a0] to-[#051d3a]">
            <div class="grid grid-cols-1 sm:grid-cols-2 relative">
                <!-- Left Column -->
                <div class="p-6 lg:p-12 order-2 md:order-1 sm:order-1">
                    <h1 class="text-white text-xl md:text-3xl font-bold mb-4 leading-tight md:whitespace-nowrap">
                        Cheap Wire Transfers from India to <?php echo $country ?>
                    </h1>
                    <p class="text-white text-sm mb-6">
                        Need to send money from India to <?php echo $country ?>? We have tied up with the leading
                        exchange houses & banks
                        to make it easy for you!
                    </p>

                    <div class="flex items-center justify-center md:items-start md:justify-start">
                        <?php
                        // Define the mapping of specific currencies to their URLs
                        $currencyUrls = [
                            "usd" => "https://www.extravelmoney.com/wire-transfer/india-to-usa/",
                            "eur" => "https://www.extravelmoney.com/wire-transfer/india-to-europe/",
                            "gbp" => "https://www.extravelmoney.com/wire-transfer/india-to-uk/",
                            "aud" => "https://www.extravelmoney.com/wire-transfer/india-to-australia/",
                            "aed" => "https://www.extravelmoney.com/wire-transfer/india-to-uae/",
                            "nzd" => "https://www.extravelmoney.com/wire-transfer/india-to-new-zealand/",
                            "cad" => "https://www.extravelmoney.com/wire-transfer/india-to-canada/",
                            "chf" => "https://www.extravelmoney.com/wire-transfer/india-to-switzerland/",
                            "jpy" => "https://www.extravelmoney.com/wire-transfer/india-to-japan/",
                            "sar" => "https://www.extravelmoney.com/wire-transfer/india-to-saudi-arabia/",
                            "qar" => "https://www.extravelmoney.com/wire-transfer/india-to-qatar/",
                            "omr" => "https://www.extravelmoney.com/wire-transfer/india-to-oman/",
                            "bhd" => "https://www.extravelmoney.com/wire-transfer/india-to-bahrain/",
                            "kwd" => "https://www.extravelmoney.com/wire-transfer/india-to-kuwait/",
                            "sgd" => "https://www.extravelmoney.com/wire-transfer/india-to-singapore/",
                            "myr" => "https://www.extravelmoney.com/wire-transfer/india-to-malaysia/",
                            "sek" => "https://www.extravelmoney.com/wire-transfer/india-to-sweden/",
                            "dkk" => "https://www.extravelmoney.com/wire-transfer/india-to-denmark/",
                            "thb" => "https://www.extravelmoney.com/wire-transfer/india-to-thailand/",
                            "zar" => "https://www.extravelmoney.com/wire-transfer/india-to-south-africa/",
                            "cny" => "https://www.extravelmoney.com/wire-transfer/india-to-china/",
                        ];

                        // Default page  
                        $defaultPage = "https://www.extravelmoney.com/wire-transfer/";

                        $targetUrl = $currencyUrls[strtolower($currency)] ?? $defaultPage;
                        echo "
                        <a href='$targetUrl' id='transfer-button'
                        class='bg-white text-[#0E51A0] font-semibold rounded-lg px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base transition-colors flex items-center gap-2 w-fit hover:bg-opacity-90'>
                        <span class='block sm:hidden'>Transfer Money</span>
                        <span class='hidden sm:block'>Transfer Money from India to " . ucfirst($country) . "</span>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' class='stroke-current sm:w-6 sm:h-6'>
                        <path d='M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z'
                        fill='currentColor' />
                        </svg>
                        </a>
                        ";

                       ?>
                    </div>
                    
                </div>
                <!-- Right Column -->
                <div class="p-6 lg:p-12 order-1 md:order-2 sm:order-2 relative flex items-center justify-center"
                    style="background-image: url('../../public/images/globe.png'); background-size: cover; background-position: center;">
                    <!-- Feature Cards -->
                    <div class="flex flex-wrap justify-center items-center gap-4 relative z-10">
                        <div>
                            <div style="background-color: rgba(255, 255, 255, 0.1);"
                                class="w-24 h-24 rounded-full flex items-center justify-center">
                                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white shadow-lg">
                                    <span class="font-bold text-[#0E51A0] text-center text-xs leading-tight">Zero
                                        Commission</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div style="background-color: rgba(255, 255, 255, 0.1);"
                                class="w-24 h-24 rounded-full flex items-center justify-center">
                                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white shadow-lg">
                                    <span class="text-[#FB944B] font-bold text-center text-xs leading-tight">Free
                                        Instant Quotes</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div style="background-color: rgba(255, 255, 255, 0.1);"
                                class="w-24 h-24 rounded-full flex items-center justify-center">
                                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white shadow-lg">
                                    <span class="text-[#008E4C] font-bold text-center text-xs leading-tight">Free KYC
                                        Pickup</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div style="background-color: rgba(255, 255, 255, 0.1);"
                                class="w-24 h-24 rounded-full flex items-center justify-center">
                                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white shadow-lg">
                                    <span class="font-bold text-[#0E51A0] text-center text-xs leading-tight">Credit in
                                        48 Hours</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Overlay for better text visibility -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open GIC Account and Money Transfer -->
<section class="w-full flex justify-center items-center relative">
    <div class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-8">
        <!-- Outer Container with Background -->
        <div class="rounded-3xl overflow-hidden mx-auto"
            style="background: linear-gradient(90deg, #D3DDF8 0%, #DBE9FF 48.49%, #B2CDFF 100%);">
            <div class="grid grid-cols-1 sm:grid-cols-2 relative">
                <!-- Left Column: Content Section -->
                <div class="p-6 lg:p-12 order-2 md:order-1 sm:order-1">
                    <h1 class="text-[#21317D] text-xl md:text-3xl font-bold mb-4 leading-tight md:whitespace-nowrap">
                        Open GIC Account and Money Transfer at lowest Rates!
                    </h1>
                    <ul class="space-y-4 mt-8 mb-8">
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M16.2502 11.25C16.2518 11.5048 16.1744 11.7539 16.0286 11.9629C15.8828 12.1719 15.6759 12.3306 15.4362 12.4172L11.4065 13.9062L9.92212 17.9391C9.83422 18.1779 9.67518 18.384 9.46647 18.5295C9.25775 18.6751 9.0094 18.7532 8.75493 18.7532C8.50046 18.7532 8.25212 18.6751 8.0434 18.5295C7.83469 18.384 7.67565 18.1779 7.58775 17.9391L6.094 13.9062L2.06118 12.4219C1.82238 12.334 1.61628 12.1749 1.4707 11.9662C1.32513 11.7575 1.24707 11.5092 1.24707 11.2547C1.24707 11.0002 1.32513 10.7519 1.4707 10.5432C1.61628 10.3344 1.82238 10.1754 2.06118 10.0875L6.094 8.59375L7.57837 4.56094C7.66628 4.32213 7.82531 4.11604 8.03403 3.97046C8.24274 3.82488 8.49109 3.74682 8.74556 3.74682C9.00003 3.74682 9.24838 3.82488 9.45709 3.97046C9.6658 4.11604 9.82484 4.32213 9.91275 4.56094L11.4065 8.59375L15.4393 10.0781C15.6792 10.1655 15.886 10.3251 16.0313 10.535C16.1765 10.7449 16.253 10.9947 16.2502 11.25ZM11.8752 3.75H13.1252V5C13.1252 5.16576 13.1911 5.32473 13.3083 5.44194C13.4255 5.55915 13.5845 5.625 13.7502 5.625C13.916 5.625 14.075 5.55915 14.1922 5.44194C14.3094 5.32473 14.3752 5.16576 14.3752 5V3.75H15.6252C15.791 3.75 15.95 3.68415 16.0672 3.56694C16.1844 3.44973 16.2502 3.29076 16.2502 3.125C16.2502 2.95924 16.1844 2.80027 16.0672 2.68306C15.95 2.56585 15.791 2.5 15.6252 2.5H14.3752V1.25C14.3752 1.08424 14.3094 0.925268 14.1922 0.808058C14.075 0.690848 13.916 0.625 13.7502 0.625C13.5845 0.625 13.4255 0.690848 13.3083 0.808058C13.1911 0.925268 13.1252 1.08424 13.1252 1.25V2.5H11.8752C11.7095 2.5 11.5505 2.56585 11.4333 2.68306C11.3161 2.80027 11.2502 2.95924 11.2502 3.125C11.2502 3.29076 11.3161 3.44973 11.4333 3.56694C11.5505 3.68415 11.7095 3.75 11.8752 3.75ZM18.7502 6.25H18.1252V5.625C18.1252 5.45924 18.0594 5.30027 17.9422 5.18306C17.825 5.06585 17.666 5 17.5002 5C17.3345 5 17.1755 5.06585 17.0583 5.18306C16.9411 5.30027 16.8752 5.45924 16.8752 5.625V6.25H16.2502C16.0845 6.25 15.9255 6.31585 15.8083 6.43306C15.6911 6.55027 15.6252 6.70924 15.6252 6.875C15.6252 7.04076 15.6911 7.19973 15.8083 7.31694C15.9255 7.43415 16.0845 7.5 16.2502 7.5H16.8752V8.125C16.8752 8.29076 16.9411 8.44973 17.0583 8.56694C17.1755 8.68415 17.3345 8.75 17.5002 8.75C17.666 8.75 17.825 8.68415 17.9422 8.56694C18.0594 8.44973 18.1252 8.29076 18.1252 8.125V7.5H18.7502C18.916 7.5 19.075 7.43415 19.1922 7.31694C19.3094 7.19973 19.3752 7.04076 19.3752 6.875C19.3752 6.70924 19.3094 6.55027 19.1922 6.43306C19.075 6.31585 18.916 6.25 18.7502 6.25Z"
                                    fill="#21317D" />
                            </svg>
                            <span class="text-sm text-black">We will open a GIC account in a bank of your choice at no
                                extra cost! Yes, absolutely free!</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M16.2502 11.25C16.2518 11.5048 16.1744 11.7539 16.0286 11.9629C15.8828 12.1719 15.6759 12.3306 15.4362 12.4172L11.4065 13.9062L9.92212 17.9391C9.83422 18.1779 9.67518 18.384 9.46647 18.5295C9.25775 18.6751 9.0094 18.7532 8.75493 18.7532C8.50046 18.7532 8.25212 18.6751 8.0434 18.5295C7.83469 18.384 7.67565 18.1779 7.58775 17.9391L6.094 13.9062L2.06118 12.4219C1.82238 12.334 1.61628 12.1749 1.4707 11.9662C1.32513 11.7575 1.24707 11.5092 1.24707 11.2547C1.24707 11.0002 1.32513 10.7519 1.4707 10.5432C1.61628 10.3344 1.82238 10.1754 2.06118 10.0875L6.094 8.59375L7.57837 4.56094C7.66628 4.32213 7.82531 4.11604 8.03403 3.97046C8.24274 3.82488 8.49109 3.74682 8.74556 3.74682C9.00003 3.74682 9.24838 3.82488 9.45709 3.97046C9.6658 4.11604 9.82484 4.32213 9.91275 4.56094L11.4065 8.59375L15.4393 10.0781C15.6792 10.1655 15.886 10.3251 16.0313 10.535C16.1765 10.7449 16.253 10.9947 16.2502 11.25ZM11.8752 3.75H13.1252V5C13.1252 5.16576 13.1911 5.32473 13.3083 5.44194C13.4255 5.55915 13.5845 5.625 13.7502 5.625C13.916 5.625 14.075 5.55915 14.1922 5.44194C14.3094 5.32473 14.3752 5.16576 14.3752 5V3.75H15.6252C15.791 3.75 15.95 3.68415 16.0672 3.56694C16.1844 3.44973 16.2502 3.29076 16.2502 3.125C16.2502 2.95924 16.1844 2.80027 16.0672 2.68306C15.95 2.56585 15.791 2.5 15.6252 2.5H14.3752V1.25C14.3752 1.08424 14.3094 0.925268 14.1922 0.808058C14.075 0.690848 13.916 0.625 13.7502 0.625C13.5845 0.625 13.4255 0.690848 13.3083 0.808058C13.1911 0.925268 13.1252 1.08424 13.1252 1.25V2.5H11.8752C11.7095 2.5 11.5505 2.56585 11.4333 2.68306C11.3161 2.80027 11.2502 2.95924 11.2502 3.125C11.2502 3.29076 11.3161 3.44973 11.4333 3.56694C11.5505 3.68415 11.7095 3.75 11.8752 3.75ZM18.7502 6.25H18.1252V5.625C18.1252 5.45924 18.0594 5.30027 17.9422 5.18306C17.825 5.06585 17.666 5 17.5002 5C17.3345 5 17.1755 5.06585 17.0583 5.18306C16.9411 5.30027 16.8752 5.45924 16.8752 5.625V6.25H16.2502C16.0845 6.25 15.9255 6.31585 15.8083 6.43306C15.6911 6.55027 15.6252 6.70924 15.6252 6.875C15.6252 7.04076 15.6911 7.19973 15.8083 7.31694C15.9255 7.43415 16.0845 7.5 16.2502 7.5H16.8752V8.125C16.8752 8.29076 16.9411 8.44973 17.0583 8.56694C17.1755 8.68415 17.3345 8.75 17.5002 8.75C17.666 8.75 17.825 8.68415 17.9422 8.56694C18.0594 8.44973 18.1252 8.29076 18.1252 8.125V7.5H18.7502C18.916 7.5 19.075 7.43415 19.1922 7.31694C19.3094 7.19973 19.3752 7.04076 19.3752 6.875C19.3752 6.70924 19.3094 6.55027 19.1922 6.43306C19.075 6.31585 18.916 6.25 18.7502 6.25Z"
                                    fill="#21317D" />
                            </svg>
                            <span class="text-sm text-black">Once the account is opened, we will transfer the amount
                                to your GIC account at the best rates!</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M16.2502 11.25C16.2518 11.5048 16.1744 11.7539 16.0286 11.9629C15.8828 12.1719 15.6759 12.3306 15.4362 12.4172L11.4065 13.9062L9.92212 17.9391C9.83422 18.1779 9.67518 18.384 9.46647 18.5295C9.25775 18.6751 9.0094 18.7532 8.75493 18.7532C8.50046 18.7532 8.25212 18.6751 8.0434 18.5295C7.83469 18.384 7.67565 18.1779 7.58775 17.9391L6.094 13.9062L2.06118 12.4219C1.82238 12.334 1.61628 12.1749 1.4707 11.9662C1.32513 11.7575 1.24707 11.5092 1.24707 11.2547C1.24707 11.0002 1.32513 10.7519 1.4707 10.5432C1.61628 10.3344 1.82238 10.1754 2.06118 10.0875L6.094 8.59375L7.57837 4.56094C7.66628 4.32213 7.82531 4.11604 8.03403 3.97046C8.24274 3.82488 8.49109 3.74682 8.74556 3.74682C9.00003 3.74682 9.24838 3.82488 9.45709 3.97046C9.6658 4.11604 9.82484 4.32213 9.91275 4.56094L11.4065 8.59375L15.4393 10.0781C15.6792 10.1655 15.886 10.3251 16.0313 10.535C16.1765 10.7449 16.253 10.9947 16.2502 11.25ZM11.8752 3.75H13.1252V5C13.1252 5.16576 13.1911 5.32473 13.3083 5.44194C13.4255 5.55915 13.5845 5.625 13.7502 5.625C13.916 5.625 14.075 5.55915 14.1922 5.44194C14.3094 5.32473 14.3752 5.16576 14.3752 5V3.75H15.6252C15.791 3.75 15.95 3.68415 16.0672 3.56694C16.1844 3.44973 16.2502 3.29076 16.2502 3.125C16.2502 2.95924 16.1844 2.80027 16.0672 2.68306C15.95 2.56585 15.791 2.5 15.6252 2.5H14.3752V1.25C14.3752 1.08424 14.3094 0.925268 14.1922 0.808058C14.075 0.690848 13.916 0.625 13.7502 0.625C13.5845 0.625 13.4255 0.690848 13.3083 0.808058C13.1911 0.925268 13.1252 1.08424 13.1252 1.25V2.5H11.8752C11.7095 2.5 11.5505 2.56585 11.4333 2.68306C11.3161 2.80027 11.2502 2.95924 11.2502 3.125C11.2502 3.29076 11.3161 3.44973 11.4333 3.56694C11.5505 3.68415 11.7095 3.75 11.8752 3.75ZM18.7502 6.25H18.1252V5.625C18.1252 5.45924 18.0594 5.30027 17.9422 5.18306C17.825 5.06585 17.666 5 17.5002 5C17.3345 5 17.1755 5.06585 17.0583 5.18306C16.9411 5.30027 16.8752 5.45924 16.8752 5.625V6.25H16.2502C16.0845 6.25 15.9255 6.31585 15.8083 6.43306C15.6911 6.55027 15.6252 6.70924 15.6252 6.875C15.6252 7.04076 15.6911 7.19973 15.8083 7.31694C15.9255 7.43415 16.0845 7.5 16.2502 7.5H16.8752V8.125C16.8752 8.29076 16.9411 8.44973 17.0583 8.56694C17.1755 8.68415 17.3345 8.75 17.5002 8.75C17.666 8.75 17.825 8.68415 17.9422 8.56694C18.0594 8.44973 18.1252 8.29076 18.1252 8.125V7.5H18.7502C18.916 7.5 19.075 7.43415 19.1922 7.31694C19.3094 7.19973 19.3752 7.04076 19.3752 6.875C19.3752 6.70924 19.3094 6.55027 19.1922 6.43306C19.075 6.31585 18.916 6.25 18.7502 6.25Z"
                                    fill="#21317D" />
                            </svg>
                            <span class="text-sm text-black">You save a minimum of 5% compared to normal bank
                                rates!</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M16.2502 11.25C16.2518 11.5048 16.1744 11.7539 16.0286 11.9629C15.8828 12.1719 15.6759 12.3306 15.4362 12.4172L11.4065 13.9062L9.92212 17.9391C9.83422 18.1779 9.67518 18.384 9.46647 18.5295C9.25775 18.6751 9.0094 18.7532 8.75493 18.7532C8.50046 18.7532 8.25212 18.6751 8.0434 18.5295C7.83469 18.384 7.67565 18.1779 7.58775 17.9391L6.094 13.9062L2.06118 12.4219C1.82238 12.334 1.61628 12.1749 1.4707 11.9662C1.32513 11.7575 1.24707 11.5092 1.24707 11.2547C1.24707 11.0002 1.32513 10.7519 1.4707 10.5432C1.61628 10.3344 1.82238 10.1754 2.06118 10.0875L6.094 8.59375L7.57837 4.56094C7.66628 4.32213 7.82531 4.11604 8.03403 3.97046C8.24274 3.82488 8.49109 3.74682 8.74556 3.74682C9.00003 3.74682 9.24838 3.82488 9.45709 3.97046C9.6658 4.11604 9.82484 4.32213 9.91275 4.56094L11.4065 8.59375L15.4393 10.0781C15.6792 10.1655 15.886 10.3251 16.0313 10.535C16.1765 10.7449 16.253 10.9947 16.2502 11.25ZM11.8752 3.75H13.1252V5C13.1252 5.16576 13.1911 5.32473 13.3083 5.44194C13.4255 5.55915 13.5845 5.625 13.7502 5.625C13.916 5.625 14.075 5.55915 14.1922 5.44194C14.3094 5.32473 14.3752 5.16576 14.3752 5V3.75H15.6252C15.791 3.75 15.95 3.68415 16.0672 3.56694C16.1844 3.44973 16.2502 3.29076 16.2502 3.125C16.2502 2.95924 16.1844 2.80027 16.0672 2.68306C15.95 2.56585 15.791 2.5 15.6252 2.5H14.3752V1.25C14.3752 1.08424 14.3094 0.925268 14.1922 0.808058C14.075 0.690848 13.916 0.625 13.7502 0.625C13.5845 0.625 13.4255 0.690848 13.3083 0.808058C13.1911 0.925268 13.1252 1.08424 13.1252 1.25V2.5H11.8752C11.7095 2.5 11.5505 2.56585 11.4333 2.68306C11.3161 2.80027 11.2502 2.95924 11.2502 3.125C11.2502 3.29076 11.3161 3.44973 11.4333 3.56694C11.5505 3.68415 11.7095 3.75 11.8752 3.75ZM18.7502 6.25H18.1252V5.625C18.1252 5.45924 18.0594 5.30027 17.9422 5.18306C17.825 5.06585 17.666 5 17.5002 5C17.3345 5 17.1755 5.06585 17.0583 5.18306C16.9411 5.30027 16.8752 5.45924 16.8752 5.625V6.25H16.2502C16.0845 6.25 15.9255 6.31585 15.8083 6.43306C15.6911 6.55027 15.6252 6.70924 15.6252 6.875C15.6252 7.04076 15.6911 7.19973 15.8083 7.31694C15.9255 7.43415 16.0845 7.5 16.2502 7.5H16.8752V8.125C16.8752 8.29076 16.9411 8.44973 17.0583 8.56694C17.1755 8.68415 17.3345 8.75 17.5002 8.75C17.666 8.75 17.825 8.68415 17.9422 8.56694C18.0594 8.44973 18.1252 8.29076 18.1252 8.125V7.5H18.7502C18.916 7.5 19.075 7.43415 19.1922 7.31694C19.3094 7.19973 19.3752 7.04076 19.3752 6.875C19.3752 6.70924 19.3094 6.55027 19.1922 6.43306C19.075 6.31585 18.916 6.25 18.7502 6.25Z"
                                    fill="#21317D" />
                            </svg>
                            <span class="text-sm text-black">Hassle-free KYC verification. Peace of mind
                                guaranteed!</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center md:items-start md:justify-start">
                        <a href="https://www.extravelmoney.com/order/gic/" target="_blank"
                            class="bg-[#21317D] text-white font-semibold rounded-lg px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base transition-colors flex items-center gap-2 w-fit hover:bg-opacity-90">
                            Open GIC Account Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" class="stroke-current sm:w-6 sm:h-6">
                                <path
                                    d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                    fill="currentColor" />
                            </svg>
                        </a>

                    </div>


                </div>

                <!-- Right Column: Image Section -->
                <div class="p-6 lg:p-12 order-1 md:order-2 sm:order-2 relative flex items-center justify-center">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="../../public/images/globe.png" alt="globe"
                            class="w-full h-full object-cover  object-left transform translate-x-20 md:translate-x-32 lg:translate-x-32"
                            aria-hidden="true" />
                    </div>

                    <!-- Overlay Image -->
                    <div class="relative h-full flex items-center justify-center">
                        <img src="../../public/images/student.png" alt="Student with laptop illustration"
                            class="relative z-10 sm:w-3/4 lg:w-1/2 md:translate-x-16 lg:translate-x-32" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>