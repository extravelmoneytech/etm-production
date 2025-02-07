<!DOCTYPE html>
<html lang="en">

<?php
$title = "Buy Australian Dollar in India | Find Lowest Rates | Get Door Delivery";
$description = " Buy Australian Dollar online in India at the best rates. Compare AUD exchange rates offered by RBI Authorized money changers in your city & book online. Get door delivery of Australian Dollar currency & travel card.";
$sub = 1;
$page = 3005;
$citypage = 1;
$curpage = 0;
$fold = "../../";

$ogurl = "https://www.extravelmoney.com/buy-forex/australian-dollar/";
$ogtype = "article";

$_SESSION['fold'] = $fold;
$_SESSION['currency'] = "AUD";

$city = "Bangalore";
$city = "Australia";
$currency = "AUD";
$currencyfull = "Australian Dollar";
$indexPage = true;
$widgetType = 'fx';
$defaultCountry = "au";

$buy_forex = true;

include $fold . 'includesv2/head.php';
include $fold . 'includes/best-city-rates.php';
?>

<body>
    <div class="flex flex-col items-center justify-center relative bg-white">
        <div class="chooseCityOverlay absolute top-0 left-0 w-full h-[100vh] bg-white customMd:bg-black/30 customMd:bg-opacity-60 z-20" style="backdrop-filter: blur(7px)">
            <div class="chooseCityWidget flex w-full absolute z-20 top-0 left-0 bg-white px-5 py-5 customMd:rounded-xl flex-col customMd:mt-12 customMd:bg-white h-fit min-h-[100vh] customMd:min-h-fit customMd:max-w-2xl customMd:left-2/4 customMd:top-1/2 customMd:transform customMd:-translate-x-1/2 customMd:-translate-y-1/2">
                <img class="w-44" src="<?php echo $fold . 'public/images/logo/ETM logo without tagline.png'; ?>" alt="ETM logo without tagline">
                <h2 class="font-bold text-2xl mt-6">
                    <span class="custom-gradient-text">We Promise</span>
                    the Best Rates,<br> From the Market for
                    <span class="custom-gradient-text">you.</span>
                </h2>
                <p class="text-[#777777] text-xs leading-3 mt-4">Our Services are provided all across the country</p>

                <div id="citySelectorContainer" class="custom-gradient-border relative rounded-lg h-12 flex items-center justify-between border-2 mt-4 px-3">
                    <input type="text" value="" placeholder="Search your city" autocomplete="off" id="citySelector" class="text-black font-semibold text-base w-full h-full outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M21.3963 20.6203L16.5794 15.8035C17.953 14.2238 18.6596 12.1725 18.5503 10.082C18.441 7.99156 17.5243 6.02518 15.9934 4.59741C14.4626 3.16964 12.4371 2.39202 10.3441 2.42847C8.2511 2.46493 6.25399 3.3126 4.77378 4.79282C3.29356 6.27303 2.44588 8.27014 2.40943 10.3632C2.37298 12.4562 3.15059 14.4816 4.57837 16.0125C6.00614 17.5433 7.97252 18.46 10.063 18.5694C12.1535 18.6787 14.2048 17.9721 15.7844 16.5985L20.6013 21.4153C20.7079 21.5147 20.8489 21.5688 20.9947 21.5662C21.1404 21.5636 21.2794 21.5046 21.3825 21.4015C21.4856 21.2985 21.5446 21.1594 21.5472 21.0137C21.5497 20.868 21.4956 20.727 21.3963 20.6203ZM3.56128 10.5178C3.56128 9.14572 3.96816 7.80442 4.73046 6.66356C5.49277 5.52269 6.57625 4.6335 7.84392 4.10841C9.11158 3.58333 10.5065 3.44594 11.8522 3.71363C13.198 3.98131 14.4341 4.64205 15.4043 5.61227C16.3746 6.5825 17.0353 7.81864 17.303 9.16439C17.5707 10.5101 17.4333 11.905 16.9082 13.1727C16.3831 14.4404 15.4939 15.5238 14.3531 16.2861C13.2122 17.0484 11.8709 17.4553 10.4988 17.4553C8.65953 17.4531 6.89625 16.7215 5.5957 15.4209C4.29515 14.1204 3.56352 12.3571 3.56128 10.5178Z" fill="black" />
                    </svg>
                </div>
                <p class="text-[#777777] text-sm font-bold leading-3 mt-4">Popular Cities</p>
                <div id="searchspin" style="display: none;">Loading...</div>
                <div id="results" class="popularCityContainer flex flex-wrap gap-3 mt-3 text-[#777777]"></div>
                <button id="citySelect" disabled class="h-12 px-2 py-3 bg-primary-blue rounded-lg justify-center items-center gap-1 inline-flex mt-6 select-none cursor-pointer opacity-60">
                    <span class="text-white text-sm font-bold">View Best Rates in your City</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15.781 12.7823L8.28104 20.2823C8.21136 20.3519 8.12863 20.4072 8.03759 20.4449C7.94654 20.4826 7.84896 20.5021 7.75042 20.5021C7.65187 20.5021 7.55429 20.4826 7.46324 20.4449C7.3722 20.4072 7.28947 20.3519 7.21979 20.2823C7.15011 20.2126 7.09483 20.1299 7.05712 20.0388C7.01941 19.9478 7 19.8502 7 19.7516C7 19.6531 7.01941 19.5555 7.05712 19.4645C7.09483 19.3734 7.15011 19.2907 7.21979 19.221L14.1901 12.2516L7.21979 5.28226C7.07906 5.14153 7 4.95066 7 4.75164C7 4.55261 7.07906 4.36174 7.21979 4.22101C7.36052 4.08028 7.55139 4.00122 7.75042 4.00122C7.94944 4.00122 8.14031 4.08028 8.28104 4.22101L15.781 11.721C15.8508 11.7907 15.9061 11.8734 15.9438 11.9644C15.9816 12.0555 16.001 12.1531 16.001 12.2516C16.001 12.3502 15.9816 12.4478 15.9438 12.5388C15.9061 12.6299 15.8508 12.7126 15.781 12.7823Z" fill="white" />
                    </svg>
                </button>

                <div class="flex items-center mt-10 justify-center customMd:hidden">
                    <!-- SVG content -->
                </div>
            </div>
        </div>

        <div class="w-full chooseCityOverlayMain relative" style="max-width: 103rem;">
            <?php include $fold . 'includesv2/header.php'; ?>
            <?php include $fold . 'includesv2/rateWidget_forex.php'; ?>
            <?php include $fold . 'includesv2/bankingPartners.php'; ?>
            <?php include $fold . 'includesv2/howItWorksBuyForex.php'; ?>
            <?php include $fold . 'includesv2/extravelmoneyNumbers.php'; ?>
            <?php include $fold . 'includesv2/features_ce.php'; ?>
            <?php include $fold . 'includesv2/press.php'; ?>
            <?php include 'facts-aud.php'; ?>
            <?php include '../currency-list.php'; ?>

            <div class="mt-12 customMd:mt-24 h-1"></div>
        </div>
    </div>

    <?php
    include $fold . 'includesv2/footer.php';
    include $fold . 'includesv2/footerScripts.php';
    ?>
</body>
</html>