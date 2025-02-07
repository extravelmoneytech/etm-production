<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/7.8.5/d3.min.js"></script>
<?php
$title = "Australian Dollar to INR Rate Today | AUD to INR History | Convert AUD to INR";
$description = "Find Australian Dollar to INR rate today and convert AUD to INR. Also find AUD to INR Rate history and chart for the last 10 days. Australian Dollar is the official currency of the Commonwealth of Australia. The currency is represented by $ or AU$ and by the ISO code AUD.";
$sub = 1;
$page = 0;
$city = 0;
$curpage = 1;
$fold = "../../";

error_reporting(0);

$ogurl = "https://www.extravelmoney.com/currency-converter/aud-inr/";
$ogtype = "article";


$country = "Australia";
$currency = "AUD";
$currencyfull = "Australian Dollar";
include $fold . 'includesv2/head.php';
?>




<body>
    <div class="flex flex-col items-center justify-center relative bg-white">

        <div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">

            <?php

            include $fold . 'includesv2/header.php';

            ?>
            <?php

            include $fold . 'includesv2/currency-converter.php';

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
                            include 'rates-history-table.php';
                            ?>
                        </div>
                    </div>
                </div>
            </section>





            <!-- hero section contents end -->



            <?php
            include 'aud-inr.php';
            ?>

            <?php

            include $fold . 'includesv2/currencyRateTable.php';

            ?>











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