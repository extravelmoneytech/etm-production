<!DOCTYPE html>
<html lang="en">
<?php
$title = "NZD Buying Rate in India Today |  NZD to INR Selling Rate Today";
$description = "Find today's New Zealand Dollar rate in India and NZD-INR rate history. Get today's buy & sell rates of New Zealand Dollar in India. Exchange NZD currency, buy forex card or send money to New Zealand easily!";
$sub = 1;
$page = 0;
$city = 0;
$curpage = 1;
$fold = "../../";
$ogurl = "https://www.extravelmoney.com/rates/nzd/";
$ogtype = "article";


$country = "New Zealand";
$currency = "NZD";
$currencyfull = "New Zealand Dollar";
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