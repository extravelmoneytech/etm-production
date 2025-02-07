<!DOCTYPE html>
<html lang="en">
<?php
$title = "Thai Bhat Buying Rate Today In India | Thai Bhat to INR Selling Rate";
$description = "Get today's best buy & sell rates for Thai Baht in cities across India. Exchange THB currency or buy forex card online easily. Compare rates offered by your nearest RBI authorized money changers, book online & get same day door delivery!";
$sub = 1;
$page = 0;
$city = 0;
$curpage = 1;
$fold = "../../";
$ogurl = "https://www.extravelmoney.com/rates/thb/";
$ogtype = "article";


$country = "Thailand";
$currency = "THB";
$currencyfull = "Thai Bhatt";
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