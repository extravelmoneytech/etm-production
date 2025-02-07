<?php
// Array of all countries with their details
$countries = [
    'US Dollar' => [
        'flag' => 'us',
        'slug' => 'us-dollar',
        'currency' => 'USD'
    ],
    'Australian Dollar' => [
        'flag' => 'au',
        'slug' => 'australian-dollar',
        'currency' => 'AUD'
    ],
    'Canadian Dollar' => [
        'flag' => 'ca',
        'slug' => 'canadian-dollar',
        'currency' => 'CAD'
    ],
    'British Pound' => [
        'flag' => 'gb',
        'slug' => 'british-pound',
        'currency' => 'GBP'
    ],
    'Euro' => [
        'flag' => 'eu',
        'slug' => 'euro',
        'currency' => 'EUR'
    ],
    'UAE Dirham' => [
        'flag' => 'ae',
        'slug' => 'uae-dirham',
        'currency' => 'AED'
    ],
    'Malaysian Ringgit' => [
        'flag' => 'my',
        'slug' => 'malaysian-ringgit',
        'currency' => 'MYR'
    ],
    'Singapore Dollar' => [
        'flag' => 'sg',
        'slug' => 'singapore-dollar',
        'currency' => 'SGD'
    ],
    'Saudi Riyal' => [
        'flag' => 'sa',
        'slug' => 'saudi-riyal',
        'currency' => 'SAR'
    ],
    'New Zealand Dollar' => [
        'flag' => 'nz',
        'slug' => 'new-zealand-dollar',
        'currency' => 'NZD'
    ],
    'Chinese Yuan' => [
        'flag' => 'cn',
        'slug' => 'chinese-yuan',
        'currency' => 'CNY'
    ],
    'Thai Baht' => [
        'flag' => 'th',
        'slug' => 'thai-baht',
        'currency' => 'THB'
    ],
    'Hong Kong Dollar' => [
        'flag' => 'hk',
        'slug' => 'hong-kong-dollar',
        'currency' => 'HKD'
    ]
];
?>

<section class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-8">
    <div class="flex items-center gap-2">
        <div class="w-2 h-12 bg-[#e31d1c]"></div>
        <h2 class="text-[#040815] text-xl customMd:text-[40px] font-bold customMd:leading-[60px]">
        <?php if (isset($buy_forex) && isset($city)): ?>
                Buy Forex Online
            <?php else: ?>
                Buy Foreign Currencies & Travel Cards Easily
            <?php endif; ?>
        </h2>
    </div>

    <div class="mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($countries as $currencyName => $countryData): ?>
                <?php if (strtolower($countryData['slug']) !== strtolower($currency)): ?>
                    <div class="flex justify-start">
                        <a href="<?php echo '/buy-forex/' . $countryData['slug']; ?>">
                            <div class="flex items-center location group space-x-1">
                                <span class="flag-icon flag-icon-<?php echo $countryData['flag']; ?> mr-2" style="width:1.8rem;"></span>
                                <span class="locationName">Buy <?php echo $currencyName; ?></span>
                                <svg class="locationBtnArrow opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>