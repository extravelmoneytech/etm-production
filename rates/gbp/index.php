<!DOCTYPE html>
<html lang="en">

<?php
$title="British Pound Rate Today In India | GBP Buying Rate | GBP Selling Rate"; 
$description="Find today's British Pound (GBP) rate in India. Get today's best rates for buying and selling British Pound in India. Exchange GBP currency, buy forex card or send money to UK easily!"; 
$sub=1; 
$page=0; 
$city=0; 
$curpage=1; 
$fold="../../"; 
$ogurl="https://www.extravelmoney.com/rates/gbp/";
$ogtype="article";


$country = "United Kingdom";
$currency = "GBP";
$currencyfull = "British Pounds Sterling";
$ratesPage = true;

include $fold . 'includesv2/head.php';
?>
<body>
    <div class="flex flex-col items-center justify-center relative bg-white">
        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">
            <?php
            include $fold . 'includesv2/header.php';
            ?>
            <section class="w-full flex justify-center items-center relative">
                <div
                    class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-16">
    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!--includes /  graph -->
                        <div class="w-full md:pr-4">
                            <?php
                            include $fold . 'includesv2/ratesGraph.php';
                            ?>
                        </div>
                        <!--includes/ cityratetable -->
                        <div class="w-full md:pr-4">
                            <?php
                            include $fold . 'includesv2/ratesCityTable.php';
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            include $fold . 'includesv2/currencyRateTable.php';
            ?>
            <?php
            include $fold . 'includesv2/buy-sell-rates.php';
            ?>
            <?php
            include $fold . 'includesv2/rates-url.php';
            ?>
            <?php
            include $fold . 'includesv2/services-rates.php';
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