<?php
// Define all scripts
$SCRIPTS = [
    // Common scripts
    'header' => "<script src=\"{$fold}scripts/header.js\"></script>",
    'loadingAnimation' => "<script src=\"{$fold}scripts/loadingAnimation.js\"></script>",
    'userCheck' => "<script src=\"{$fold}scripts/pageScripts/userCheck.js?ver=1.5\"></script>",
    'api' => "<script src=\"{$fold}scripts/api.js\"></script>",
    
    // All other scripts
    'cart' => "<script src=\"{$fold}scripts/cart.js?ver=1.2\"></script>",
    'alert' => "<script src=\"{$fold}scripts/alert.js\"></script>",
    'dropDown' => "<script src=\"{$fold}scripts/dropDown.js?ver=2.2\"></script>",
    'changePage' => "<script src=\"{$fold}scripts/changePageScript.js?ver=1.0\"></script>",
    'countryData' => "<script src=\"{$fold}scripts/countryData.js\"></script>",
    'forexSuggestion' => "<script src=\"{$fold}scripts/forexSuggestion.js?ver=1.2\" defer></script>",
    'countryDropDown' => "<script src=\"{$fold}scripts/countryDropDown.js\"></script>",
    'homePage' => "<script src=\"{$fold}scripts/homePage.js?ver=10.8\"></script>",
    'cityListLoader' => "<script src=\"{$fold}scripts/cityListLoader.js?ver=5.7\"></script>",
    'getRates' => "<script src=\"{$fold}scripts/pageScripts/getRates.js?ver=1.78\"></script>",
    'multipleCurrency' => "<script src=\"{$fold}scripts/multipleCurrency.js\"></script>",
    'telInput' => "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js\"></script>",
    'otp' => "<script src=\"{$fold}scripts/otp.js?ver=1.0\"></script>",
    'login' => "<script src=\"{$fold}scripts/login.js?ver=1.14\"></script>",
    'deliveryDetails' => "<script src=\"{$fold}scripts/pageScripts/deliveryDetails.js?ver=2.5\"></script>",
    'datePicker' => "<script src=\"{$fold}scripts/datePicker.js\"></script>",
    'contactDetails' => "<script src=\"{$fold}scripts/pageScripts/contactDetails.js?ver=3.0\"></script>",
    'reviewAndPayment' => "<script src=\"{$fold}scripts/pageScripts/reviewAndPayment.js?ver=2.9\"></script>",
    'completeKyc' => "<script src=\"{$fold}scripts/pageScripts/completeKyc.js?ver=2.6\"></script>",
    'myAccount' => "<script src=\"{$fold}scripts/myAccount.js?ver=26\"></script>",
    'myAccountSingle' => "<script src=\"{$fold}scripts/myAccountSingle.js?ver=3.1\"></script>",
    'myAccountProfile' => "<script src=\"{$fold}scripts/myAccountProfile.js?ver=5.6\"></script>"
];

// Function to load scripts
function loadPageScripts($scriptKeys, $SCRIPTS) {
    foreach ($scriptKeys as $key) {
        if (isset($SCRIPTS[$key])) {
            echo $SCRIPTS[$key] . "\n";
        }
    }
}

// Common scripts for all pages
loadPageScripts(['api','header', 'loadingAnimation', 'userCheck'], $SCRIPTS);

// Index Page
if (isset($indexPage) && $indexPage) {
    loadPageScripts([
        'cart',
        'alert',
        'dropDown',
        'countryData',
        'forexSuggestion',
        'countryDropDown',
        'homePage',
        'cityListLoader'
    ], $SCRIPTS);
}

// Get Rates Page
if (isset($getRatesPage) && $getRatesPage) {
    loadPageScripts([
        'cart',
        'alert',
        'dropDown',
        'changePage',
        'getRates',
        'multipleCurrency',
        'telInput',
        'otp'
    ], $SCRIPTS);
}

// Login Page
if (isset($loginPage) && $loginPage) {
    loadPageScripts([
        'dropDown',
        'telInput',
        'otp',
        'alert',
        'login'
    ], $SCRIPTS);
}

// Delivery Details Page
if (isset($deliveryDetailsPage) && $deliveryDetailsPage) {
    loadPageScripts([
        'cart',
        'alert',
        'dropDown',
        'changePage',
        'deliveryDetails'
    ], $SCRIPTS);
}

// Contact Details Page
if (isset($contactDetailsPage) && $contactDetailsPage) {
    loadPageScripts([
        'cart',
        'alert',
        'dropDown',
        'changePage',
        'datePicker',
        'contactDetails'
    ], $SCRIPTS);
}

// Review and Payment Page
if (isset($reviewAndPaymentPage) && $reviewAndPaymentPage) {
    loadPageScripts([
        'cart',
        'alert',
        'changePage',
        'reviewAndPayment'
    ], $SCRIPTS);
}

// KYC Complete Page
if (isset($kycCompletePage) && $kycCompletePage) {
    loadPageScripts([
        'changePage',
        'completeKyc'
    ], $SCRIPTS);
}

// My Account Page
if (isset($myAccountPage) && $myAccountPage) {
    loadPageScripts([
        'myAccount',
        'alert'
    ], $SCRIPTS);
}

// My Account Order Page
if (isset($myAccountOrderPage) && $myAccountOrderPage) {
    loadPageScripts(['myAccountSingle'], $SCRIPTS);
}

// My Account Profile Page
if (isset($myAccountProfilePage) && $myAccountProfilePage) {
    loadPageScripts([
        'myAccountProfile',
        'alert'
    ], $SCRIPTS);
}
?>