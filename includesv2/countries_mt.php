<?php
// Array of all countries with their details
$countries = [
    'USA' => [
        'flag' => 'us',
        'slug' => 'usa',
        'hidden' => false
    ],
    'Australia' => [
        'flag' => 'au',
        'slug' => 'australia',
        'hidden' => false
    ],
    'Canada' => [
        'flag' => 'ca',
        'slug' => 'canada',
        'hidden' => false
    ],
    'UK' => [
        'flag' => 'gb',
        'slug' => 'uk',
        'hidden' => false
    ],
    'Europe' => [
        'flag' => 'eu',
        'slug' => 'europe',
        'hidden' => false
    ],
    'UAE' => [
        'flag' => 'ae',
        'slug' => 'uae',
        'hidden' => false
    ],
    'Philippines' => [
        'flag' => 'ph',
        'slug' => 'philippines',
        'hidden' => false
    ],
    'Malaysia' => [
        'flag' => 'my',
        'slug' => 'malaysia',
        'hidden' => false
    ],
    // Hidden countries
    'Germany' => [
        'flag' => 'de',
        'slug' => 'germany',
        'hidden' => false
    ],
    'Singapore' => [
        'flag' => 'sg',
        'slug' => 'singapore',
        'hidden' => true
    ],
    'Saudi Arabia' => [
        'flag' => 'sa',
        'slug' => 'saudi-arabia',
        'hidden' => true
    ],
    'New Zealand' => [
        'flag' => 'nz',
        'slug' => 'new-zealand',
        'hidden' => true
    ],
    'France' => [
        'flag' => 'fr',
        'slug' => 'france',
        'hidden' => true
    ],
    'China' => [
        'flag' => 'cn',
        'slug' => 'china',
        'hidden' => true
    ],
    'Netherlands' => [
        'flag' => 'nl',
        'slug' => 'netherlands',
        'hidden' => true
    ],
    'Spain' => [
        'flag' => 'es',
        'slug' => 'spain',
        'hidden' => true
    ],
    'Switzerland' => [
        'flag' => 'ch',
        'slug' => 'switzerland',
        'hidden' => true
    ],
    'Ireland' => [
        'flag' => 'ie',
        'slug' => 'ireland',
        'hidden' => true
    ],
    'Austria' => [
        'flag' => 'at',
        'slug' => 'austria',
        'hidden' => true
    ],
    'Latvia' => [
        'flag' => 'lv',
        'slug' => 'latvia',
        'hidden' => true
    ],
    'Lithuania' => [
        'flag' => 'lt',
        'slug' => 'lithuania',
        'hidden' => true
    ],
    'Finland' => [
        'flag' => 'fi',
        'slug' => 'finland',
        'hidden' => true
    ],
    'Sweden' => [
        'flag' => 'se',
        'slug' => 'sweden',
        'hidden' => true
    ],
    'Malta' => [
        'flag' => 'mt',
        'slug' => 'malta',
        'hidden' => true
    ],
    'Denmark' => [
        'flag' => 'dk',
        'slug' => 'denmark',
        'hidden' => true
    ],
    'Slovenia' => [
        'flag' => 'si',
        'slug' => 'slovenia',
        'hidden' => true
    ],
    'Japan' => [
        'flag' => 'jp',
        'slug' => 'japan',
        'hidden' => true
    ],
    'South Korea' => [
        'flag' => 'kr',
        'slug' => 'south-korea',
        'hidden' => true
    ],
    'Georgia' => [
        'flag' => 'ge',
        'slug' => 'georgia',
        'hidden' => true
    ],
    'Italy' => [
        'flag' => 'it',
        'slug' => 'italy',
        'hidden' => true
    ],
    'Oman' => [
        'flag' => 'om',
        'slug' => 'oman',
        'hidden' => true
    ],
    'Kuwait' => [
        'flag' => 'kw',
        'slug' => 'kuwait',
        'hidden' => true
    ],
    'Qatar' => [
        'flag' => 'qa',
        'slug' => 'qatar',
        'hidden' => true
    ],
    'Bahrain' => [
        'flag' => 'bh',
        'slug' => 'bahrain',
        'hidden' => true
    ],
    'Poland' => [
        'flag' => 'pl',
        'slug' => 'poland',
        'hidden' => true
    ],
    'Indonesia' => [
        'flag' => 'id',
        'slug' => 'indonesia',
        'hidden' => true
    ],
    'Thailand' => [
        'flag' => 'th',
        'slug' => 'thailand',
        'hidden' => true
    ],
    'Russia' => [
        'flag' => 'ru',
        'slug' => 'russia',
        'hidden' => true
    ],
    'Uzbekistan' => [
        'flag' => 'uz',
        'slug' => 'uzbekistan',
        'hidden' => true
    ],
    'South Africa' => [
        'flag' => 'za',
        'slug' => 'south-africa',
        'hidden' => true
    ]
];
?>

<section class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-8">
    <div class="flex items-center gap-2">
        <div class="w-2 h-12 bg-[#e31d1c]"></div>
        <h2 class="text-[#040815] text-xl customMd:text-[40px] font-bold customMd:leading-[60px]">
            Transfer Money to 100+ Countries
        </h2>
    </div>


<div class="locationContainer mt-8 flex-col gap-4 w-fit">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:whitespace-nowrap">
        <?php foreach($countries as $countryName => $countryData): ?>
            <?php if(strtolower($countryData['slug']) !== strtolower($country)): ?>
                <a href="../wire-transfer/india-to-<?php echo $countryData['slug']; ?>/" 
                   class="<?php echo $countryData['hidden'] ? 'hidden hidden-locations' : ''; ?>" 
                   target="_blank" 
                   countryName="<?php echo $countryName; ?>">
                    <div class="location">
                        <span class="flag-icon flag-icon-<?php echo $countryData['flag']; ?> mr-2" style="width:1.8rem;"></span>
                        <span class="locationName">Send Money to <?php echo $countryName; ?></span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Show More/Less Button -->
    <div class="mt-4 text-center">
        <button id="toggleLocations" active="true" class="border-[#0e51a0] border rounded-3xl px-4 py-1 text-primary-blue text-sm hover:bg-[#0e51a0] hover:text-white transition-colors duration-300">Show More</button>
    </div>
</div>

    
</div>

</section>

<!-- JavaScript to toggle visibility -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hiddenLocations = document.querySelectorAll(".hidden-locations");
        const toggleButton = document.getElementById("toggleLocations");

        toggleButton.addEventListener("click", function () {
            hiddenLocations.forEach(location => {
                location.classList.toggle("hidden");
            });

            // Properly toggle the button text
            if (toggleButton.getAttribute("active")==="true") {
                toggleButton.textContent = "Show Less"; // Fix: Change to "Show Less"
                toggleButton.setAttribute("active",false)
            } else if(toggleButton.getAttribute("active")==="false"){
                toggleButton.textContent = "Show More"; // Fix: Change to "Show Less"
                toggleButton.setAttribute("active",true)
            }
        });
    });

</script>