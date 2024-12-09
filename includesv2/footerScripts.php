


<script src="<?php echo $fold . 'scripts/api.js'; ?>"></script>
<script src="<?php echo $fold . 'scripts/header.js'; ?>"></script>
<script src="<?php echo $fold . 'scripts/loadingAnimation.js'; ?>"></script>
<script src="<?php echo $fold . 'scripts/pageScripts/userCheck.js?ver=1.5'; ?>"></script>

<?php
// 2. Group-specific scripts (used on more than one page)

// Scripts shared by Index, Get Rates, and Delivery Details pages
if ($indexPage || $getRatesPage || $deliveryDetailsPage || $contactDetailsPage || $reviewAndPaymentPage) {
?>
    <script src="<?php echo $fold . 'scripts/cart.js?ver=1.2'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/alert.js'; ?>"></script>
<?php
}

// Scripts shared by Index, Get Rates, and Contact Details pages
if ($indexPage || $getRatesPage || $contactDetailsPage || $deliveryDetailsPage ||$loginPage) {
?>
    <script src="<?php echo $fold . 'scripts/dropDown.js?ver=1.8'; ?>"></script>
<?php
}

// Scripts shared by Get Rates, Delivery Details, Contact Details, and Review and Payment pages
if ($getRatesPage || $deliveryDetailsPage || $contactDetailsPage || $reviewAndPaymentPage || $kycCompletePage) {
?>
    <script src="<?php echo $fold . 'scripts/changePageScript.js?ver=1.0'; ?>"></script>
<?php
}

// 3. Page-specific scripts (used on individual pages)

// Index Page specific scripts
if ($indexPage) {
?>
    <script src="<?php echo $fold . 'scripts/countryData.js'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/forexSuggestion.js?ver=1.0'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/countryDropDown.js'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/homePage.js?ver=10.8'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/cityListLoader.js?ver=5.7'; ?>"></script>
<?php
}

// Get Rates Page specific scripts
if ($getRatesPage) {
?>
    
    <script src="<?php echo $fold . 'scripts/pageScripts/getRates.js?ver=1.78'; ?>"></script>
    
    <script src="<?php echo $fold . 'scripts/multipleCurrency.js'; ?>"></script>
<?php
}

// Get Rates and login Page specific scripts
if ($getRatesPage || $loginPage) {
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
    
    <script src="<?php echo $fold . 'scripts/otp.js?ver=1.0'; ?>"></script>
    
    <script src="<?php echo $fold . 'scripts/alert.js'; ?>"></script>
    
<?php
}

//  login Page specific scripts
if ($loginPage) {
?>
    <script src="<?php echo $fold . 'scripts/login.js?ver=1.14'; ?>"></script>
    
<?php
}

// Delivery Details Page specific scripts
if ($deliveryDetailsPage) {
?>
    <script src="<?php echo $fold . 'scripts/pageScripts/deliveryDetails.js?ver=2.5'; ?>"></script>
<?php
}

// Contact Details Page specific scripts
if ($contactDetailsPage) {
?>
    <script src="<?php echo $fold . 'scripts/datePicker.js'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/pageScripts/contactDetails.js?ver=3.0'; ?>"></script>
<?php
}

// Review and Payment Page specific scripts
if ($reviewAndPaymentPage) {
?>
    <script src="<?php echo $fold . 'scripts/pageScripts/reviewAndPayment.js?ver=2.9'; ?>"></script>
<?php
}

// KYC Complete Page specific scripts
if ($kycCompletePage) {
?>
    <script src="<?php echo $fold . 'scripts/pageScripts/completeKyc.js?ver=2.6'; ?>"></script>
<?php
}

// My Account Page specific scripts
if ($myAccountPage) {
?>
    <script src="<?php echo $fold . 'scripts/myAccount.js?ver=26'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/alert.js'; ?>"></script>
<?php
}
if ($myAccountOrderPage) {
?>
    <script src="<?php echo $fold . 'scripts/myAccountSingle.js?ver=3.1'; ?>"></script>
<?php
}

if ($myAccountProfilePage) {
?>
    <script src="<?php echo $fold . 'scripts/myAccountProfile.js?ver=5.6'; ?>"></script>
    <script src="<?php echo $fold . 'scripts/alert.js'; ?>"></script>
<?php
}


?>