<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/7.8.5/d3.min.js"></script>
<?php
$title="Currency Converter | Convert to INR - ExTravelMoney"; 
$description="Convert any currency to Indian rupee (INR) at live exchange rates with this free currency converter. Forex rates updated every five minutes."; 
$sub=1; 
$page=0; 
$citypage=0; 
$curpage=1; 
$fold = "../../";
$ogurl="https://www.extravelmoney.com/currency-converter/";
$ogtype="article";


$country = "UK";
$currency = "GBP";
$currencyfull = "British Pound Sterling";


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
            include 'gbp-inr.php';
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