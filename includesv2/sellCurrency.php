<div id="sellCurrencyContainer" class="flex items-center justify-center mt-3 gap-2 w-full md:w-5/6 cursor-pointer"  <?php if ($widgetType == 'mt') echo 'style="display:none;"' ?>>
    <div class="flex">
        <span class="text-primary-blue text-xs font-medium">Are You Looking to Sell
            Currency
        </span>
        <svg width="14" height="12" viewBox="0 0 14 14" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g id="ArrowRight">
                <path
                    d="M14.265 8.26498L9.765 12.765C9.69391 12.8312 9.59989 12.8673 9.50274 12.8656C9.40559 12.8639 9.3129 12.8245 9.24419 12.7558C9.17548 12.6871 9.13613 12.5944 9.13441 12.4972C9.1327 12.4001 9.16876 12.3061 9.235 12.235L13.0944 8.37498H3C2.90054 8.37498 2.80516 8.33548 2.73483 8.26515C2.66451 8.19482 2.625 8.09944 2.625 7.99998C2.625 7.90053 2.66451 7.80515 2.73483 7.73482C2.80516 7.66449 2.90054 7.62498 3 7.62498H13.0944L9.235 3.76498C9.16876 3.6939 9.1327 3.59987 9.13441 3.50272C9.13613 3.40557 9.17548 3.31288 9.24419 3.24417C9.3129 3.17547 9.40559 3.13611 9.50274 3.1344C9.59989 3.13268 9.69391 3.16874 9.765 3.23498L14.265 7.73498C14.3352 7.8053 14.3747 7.90061 14.3747 7.99998C14.3747 8.09936 14.3352 8.19467 14.265 8.26498Z"
                    fill="#2E42A5" />
            </g>
        </svg>

    </div>
</div>

<div id="callBackOverLay" class="w-full h-[120vh] fixed hidden top-0 left-0 z-[1000] bg-white customMd:bg-black/30  customMd:bg-opacity-60 " style="backdrop-filter: blur(7px)">

    <div id="callBackWidget" class="mt-4 sm:mt-0 flex w-full absolute  z-20 top-0 left-0 bg-white px-6  py-6 customMd:rounded-xl flex-col  customMd:bg-white h-fit min-h-[100vh] customMd:min-h-fit customMd:max-w-2xl customMd:left-2/4 customMd:top-1/2  customMd:transform customMd:-translate-x-1/2 customMd:-translate-y-2/3">
        <div class="text-[#18325b] text-2xl font-extrabold font-['Plus Jakarta Sans'] leading-[31.20px]">Connect with a real expert <span style="word-wrap: break-word;background: linear-gradient(329deg, #0E51A0 -43.1%, #E31D1C 144.49%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">instantly!</span></div>
        <div class="mt-4">
            <p class="text-black/60 text-sm font-medium leading-[21px]">Full Name</p>
            <input value="" placeholder="Enter you full name here." id="fullName" type="text" class="h-12 p-2 rounded-lg border border-black/10 text-black text-sm font-bold w-full mt-2 outline-none">

        </div>

        <div class="mt-4" id="mobContainer">
            <p class="text-black/60 text-sm font-medium leading-[21px] ">Phone Number</p>
            <div class="flex gap-2 h-12 rounded-lg border border-black/10 text-black mt-2" id="otpMobileContainer ">
                <div id="" class="p-[2px] rounded-[12px] justify-start items-center gap-2.5 inline-flex">
                    <div style="padding: 0.75rem 0.5rem;height: 3rem;" class="justify-start rounded-[10px] items-center gap-2.5 flex w-full border-0">
                        <div style="height: fit-content;padding: 0;border: none;width: 100%;" class="dropdownMain select-none countryCodeContainer" data-search="true" id="callBackCountryCodeMain" dataval="IN" custom-content>

                            <div class="selectedItem"><span>+91</span><span>IN</span></div>

                            <ul class="dropdownList overflow-scroll w-80">

                                <li class="text-sm" value="AF" alternativename="Afghanistan (‫افغانستان‬‎)" mob-code="+93"><span>+93</span> <span> Afghanistan (‫افغانستان‬‎)</span></li>
                                <li class="text-sm" value="AL" alternativename="Albania (Shqipëri)" mob-code="+355"><span>+355</span> <span> Albania (Shqipëri)</span></li>
                                <li class="text-sm" value="DZ" alternativename="Algeria (‫الجزائر‬‎)" mob-code="+213"><span>+213</span> <span> Algeria (‫الجزائر‬‎)</span></li>
                                <li class="text-sm" value="AS" alternativename="American Samoa" mob-code="+1"><span>+1</span> <span> American Samoa</span></li>
                                <li class="text-sm" value="AD" alternativename="Andorra" mob-code="+376"><span>+376</span> <span> Andorra</span></li>
                                <li class="text-sm" value="AO" alternativename="Angola" mob-code="+244"><span>+244</span> <span> Angola</span></li>
                                <li class="text-sm" value="AI" alternativename="Anguilla" mob-code="+1"><span>+1</span> <span> Anguilla</span></li>
                                <li class="text-sm" value="AG" alternativename="Antigua and Barbuda" mob-code="+1"><span>+1</span> <span> Antigua and Barbuda</span></li>
                                <li class="text-sm" value="AR" alternativename="Argentina" mob-code="+54"><span>+54</span> <span> Argentina</span></li>
                                <li class="text-sm" value="AM" alternativename="Armenia (Հայաստան)" mob-code="+374"><span>+374</span> <span> Armenia (Հայաստան)</span></li>
                                <li class="text-sm" value="AW" alternativename="Aruba" mob-code="+297"><span>+297</span> <span> Aruba</span></li>
                                <li class="text-sm" value="AC" alternativename="Ascension Island" mob-code="+247"><span>+247</span> <span> Ascension Island</span></li>
                                <li class="text-sm" value="AU" alternativename="Australia" mob-code="+61"><span>+61</span> <span> Australia</span></li>
                                <li class="text-sm" value="AT" alternativename="Austria (Österreich)" mob-code="+43"><span>+43</span> <span> Austria (Österreich)</span></li>
                                <li class="text-sm" value="AZ" alternativename="Azerbaijan (Azərbaycan)" mob-code="+994"><span>+994</span> <span> Azerbaijan (Azərbaycan)</span></li>
                                <li class="text-sm" value="BS" alternativename="Bahamas" mob-code="+1"><span>+1</span> <span> Bahamas</span></li>
                                <li class="text-sm" value="BH" alternativename="Bahrain (‫البحرين‬‎)" mob-code="+973"><span>+973</span> <span> Bahrain (‫البحرين‬‎)</span></li>
                                <li class="text-sm" value="BD" alternativename="Bangladesh (বাংলাদেশ)" mob-code="+880"><span>+880</span> <span> Bangladesh (বাংলাদেশ)</span></li>
                                <li class="text-sm" value="BB" alternativename="Barbados" mob-code="+1"><span>+1</span> <span> Barbados</span></li>
                                <li class="text-sm" value="BY" alternativename="Belarus (Беларусь)" mob-code="+375"><span>+375</span> <span> Belarus (Беларусь)</span></li>
                                <li class="text-sm" value="BE" alternativename="Belgium (België)" mob-code="+32"><span>+32</span> <span> Belgium (België)</span></li>
                                <li class="text-sm" value="BZ" alternativename="Belize" mob-code="+501"><span>+501</span> <span> Belize</span></li>
                                <li class="text-sm" value="BJ" alternativename="Benin (Bénin)" mob-code="+229"><span>+229</span> <span> Benin (Bénin)</span></li>
                                <li class="text-sm" value="BM" alternativename="Bermuda" mob-code="+1"><span>+1</span> <span> Bermuda</span></li>
                                <li class="text-sm" value="BT" alternativename="Bhutan (འབྲུག)" mob-code="+975"><span>+975</span> <span> Bhutan (འབྲུག)</span></li>
                                <li class="text-sm" value="BO" alternativename="Bolivia" mob-code="+591"><span>+591</span> <span> Bolivia</span></li>
                                <li class="text-sm" value="BA" alternativename="Bosnia and Herzegovina (Босна и Херцеговина)" mob-code="+387"><span>+387</span> <span> Bosnia and Herzegovina (Босна и Херцеговина)</span></li>
                                <li class="text-sm" value="BW" alternativename="Botswana" mob-code="+267"><span>+267</span> <span> Botswana</span></li>
                                <li class="text-sm" value="BR" alternativename="Brazil (Brasil)" mob-code="+55"><span>+55</span> <span> Brazil (Brasil)</span></li>
                                <li class="text-sm" value="IO" alternativename="British Indian Ocean Territory" mob-code="+246"><span>+246</span> <span> British Indian Ocean Territory</span></li>
                                <li class="text-sm" value="VG" alternativename="British Virgin Islands" mob-code="+1"><span>+1</span> <span> British Virgin Islands</span></li>
                                <li class="text-sm" value="BN" alternativename="Brunei" mob-code="+673"><span>+673</span> <span> Brunei</span></li>
                                <li class="text-sm" value="BG" alternativename="Bulgaria (България)" mob-code="+359"><span>+359</span> <span> Bulgaria (България)</span></li>
                                <li class="text-sm" value="BF" alternativename="Burkina Faso" mob-code="+226"><span>+226</span> <span> Burkina Faso</span></li>
                                <li class="text-sm" value="BI" alternativename="Burundi (Uburundi)" mob-code="+257"><span>+257</span> <span> Burundi (Uburundi)</span></li>
                                <li class="text-sm" value="KH" alternativename="Cambodia (កម្ពុជា)" mob-code="+855"><span>+855</span> <span> Cambodia (កម្ពុជា)</span></li>
                                <li class="text-sm" value="CM" alternativename="Cameroon (Cameroun)" mob-code="+237"><span>+237</span> <span> Cameroon (Cameroun)</span></li>
                                <li class="text-sm" value="CA" alternativename="Canada" mob-code="+1"><span>+1</span> <span> Canada</span></li>
                                <li class="text-sm" value="CV" alternativename="Cape Verde (Kabu Verdi)" mob-code="+238"><span>+238</span> <span> Cape Verde (Kabu Verdi)</span></li>
                                <li class="text-sm" value="BQ" alternativename="Caribbean Netherlands" mob-code="+599"><span>+599</span> <span> Caribbean Netherlands</span></li>
                                <li class="text-sm" value="KY" alternativename="Cayman Islands" mob-code="+1"><span>+1</span> <span> Cayman Islands</span></li>
                                <li class="text-sm" value="CF" alternativename="Central African Republic (République centrafricaine)" mob-code="+236"><span>+236</span> <span> Central African Republic (République centrafricaine)</span></li>
                                <li class="text-sm" value="TD" alternativename="Chad (Tchad)" mob-code="+235"><span>+235</span> <span> Chad (Tchad)</span></li>
                                <li class="text-sm" value="CL" alternativename="Chile" mob-code="+56"><span>+56</span> <span> Chile</span></li>
                                <li class="text-sm" value="CN" alternativename="China (中国)" mob-code="+86"><span>+86</span> <span> China (中国)</span></li>
                                <li class="text-sm" value="CX" alternativename="Christmas Island" mob-code="+61"><span>+61</span> <span> Christmas Island</span></li>
                                <li class="text-sm" value="CC" alternativename="Cocos (Keeling) Islands" mob-code="+61"><span>+61</span> <span> Cocos (Keeling) Islands</span></li>
                                <li class="text-sm" value="CO" alternativename="Colombia" mob-code="+57"><span>+57</span> <span> Colombia</span></li>
                                <li class="text-sm" value="KM" alternativename="Comoros (‫جزر القمر‬‎)" mob-code="+269"><span>+269</span> <span> Comoros (‫جزر القمر‬‎)</span></li>
                                <li class="text-sm" value="CD" alternativename="Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)" mob-code="+243"><span>+243</span> <span> Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span></li>
                                <li class="text-sm" value="CG" alternativename="Congo (Republic) (Congo-Brazzaville)" mob-code="+242"><span>+242</span> <span> Congo (Republic) (Congo-Brazzaville)</span></li>
                                <li class="text-sm" value="CK" alternativename="Cook Islands" mob-code="+682"><span>+682</span> <span> Cook Islands</span></li>
                                <li class="text-sm" value="CR" alternativename="Costa Rica" mob-code="+506"><span>+506</span> <span> Costa Rica</span></li>
                                <li class="text-sm" value="CI" alternativename="Côte d’Ivoire" mob-code="+225"><span>+225</span> <span> Côte d’Ivoire</span></li>
                                <li class="text-sm" value="HR" alternativename="Croatia (Hrvatska)" mob-code="+385"><span>+385</span> <span> Croatia (Hrvatska)</span></li>
                                <li class="text-sm" value="CU" alternativename="Cuba" mob-code="+53"><span>+53</span> <span> Cuba</span></li>
                                <li class="text-sm" value="CW" alternativename="Curaçao" mob-code="+599"><span>+599</span> <span> Curaçao</span></li>
                                <li class="text-sm" value="CY" alternativename="Cyprus (Κύπρος)" mob-code="+357"><span>+357</span> <span> Cyprus (Κύπρος)</span></li>
                                <li class="text-sm" value="CZ" alternativename="Czech Republic (Česká republika)" mob-code="+420"><span>+420</span> <span> Czech Republic (Česká republika)</span></li>
                                <li class="text-sm" value="DK" alternativename="Denmark (Danmark)" mob-code="+45"><span>+45</span> <span> Denmark (Danmark)</span></li>
                                <li class="text-sm" value="DJ" alternativename="Djibouti" mob-code="+253"><span>+253</span> <span> Djibouti</span></li>
                                <li class="text-sm" value="DM" alternativename="Dominica" mob-code="+1"><span>+1</span> <span> Dominica</span></li>
                                <li class="text-sm" value="DO" alternativename="Dominican Republic (República Dominicana)" mob-code="+1"><span>+1</span> <span> Dominican Republic (República Dominicana)</span></li>
                                <li class="text-sm" value="EC" alternativename="Ecuador" mob-code="+593"><span>+593</span> <span> Ecuador</span></li>
                                <li class="text-sm" value="EG" alternativename="Egypt (‫مصر‬‎)" mob-code="+20"><span>+20</span> <span> Egypt (‫مصر‬‎)</span></li>
                                <li class="text-sm" value="SV" alternativename="El Salvador" mob-code="+503"><span>+503</span> <span> El Salvador</span></li>
                                <li class="text-sm" value="GQ" alternativename="Equatorial Guinea (Guinea Ecuatorial)" mob-code="+240"><span>+240</span> <span> Equatorial Guinea (Guinea Ecuatorial)</span></li>
                                <li class="text-sm" value="ER" alternativename="Eritrea" mob-code="+291"><span>+291</span> <span> Eritrea</span></li>
                                <li class="text-sm" value="EE" alternativename="Estonia (Eesti)" mob-code="+372"><span>+372</span> <span> Estonia (Eesti)</span></li>
                                <li class="text-sm" value="SZ" alternativename="Eswatini" mob-code="+268"><span>+268</span> <span> Eswatini</span></li>
                                <li class="text-sm" value="ET" alternativename="Ethiopia" mob-code="+251"><span>+251</span> <span> Ethiopia</span></li>
                                <li class="text-sm" value="FK" alternativename="Falkland Islands (Islas Malvinas)" mob-code="+500"><span>+500</span> <span> Falkland Islands (Islas Malvinas)</span></li>
                                <li class="text-sm" value="FO" alternativename="Faroe Islands (Føroyar)" mob-code="+298"><span>+298</span> <span> Faroe Islands (Føroyar)</span></li>
                                <li class="text-sm" value="FJ" alternativename="Fiji" mob-code="+679"><span>+679</span> <span> Fiji</span></li>
                                <li class="text-sm" value="FI" alternativename="Finland (Suomi)" mob-code="+358"><span>+358</span> <span> Finland (Suomi)</span></li>
                                <li class="text-sm" value="FR" alternativename="France" mob-code="+33"><span>+33</span> <span> France</span></li>
                                <li class="text-sm" value="GF" alternativename="French Guiana (Guyane française)" mob-code="+594"><span>+594</span> <span> French Guiana (Guyane française)</span></li>
                                <li class="text-sm" value="PF" alternativename="French Polynesia (Polynésie française)" mob-code="+689"><span>+689</span> <span> French Polynesia (Polynésie française)</span></li>
                                <li class="text-sm" value="GA" alternativename="Gabon" mob-code="+241"><span>+241</span> <span> Gabon</span></li>
                                <li class="text-sm" value="GM" alternativename="Gambia" mob-code="+220"><span>+220</span> <span> Gambia</span></li>
                                <li class="text-sm" value="GE" alternativename="Georgia (საქართველო)" mob-code="+995"><span>+995</span> <span> Georgia (საქართველო)</span></li>
                                <li class="text-sm" value="DE" alternativename="Germany (Deutschland)" mob-code="+49"><span>+49</span> <span> Germany (Deutschland)</span></li>
                                <li class="text-sm" value="GH" alternativename="Ghana (Gaana)" mob-code="+233"><span>+233</span> <span> Ghana (Gaana)</span></li>
                                <li class="text-sm" value="GI" alternativename="Gibraltar" mob-code="+350"><span>+350</span> <span> Gibraltar</span></li>
                                <li class="text-sm" value="GR" alternativename="Greece (Ελλάδα)" mob-code="+30"><span>+30</span> <span> Greece (Ελλάδα)</span></li>
                                <li class="text-sm" value="GL" alternativename="Greenland (Kalaallit Nunaat)" mob-code="+299"><span>+299</span> <span> Greenland (Kalaallit Nunaat)</span></li>
                                <li class="text-sm" value="GD" alternativename="Grenada" mob-code="+1"><span>+1</span> <span> Grenada</span></li>
                                <li class="text-sm" value="GP" alternativename="Guadeloupe" mob-code="+590"><span>+590</span> <span> Guadeloupe</span></li>
                                <li class="text-sm" value="GU" alternativename="Guam" mob-code="+1"><span>+1</span> <span> Guam</span></li>
                                <li class="text-sm" value="GT" alternativename="Guatemala" mob-code="+502"><span>+502</span> <span> Guatemala</span></li>
                                <li class="text-sm" value="GG" alternativename="Guernsey" mob-code="+44"><span>+44</span> <span> Guernsey</span></li>
                                <li class="text-sm" value="GN" alternativename="Guinea (Guinée)" mob-code="+224"><span>+224</span> <span> Guinea (Guinée)</span></li>
                                <li class="text-sm" value="GW" alternativename="Guinea-Bissau (Guiné Bissau)" mob-code="+245"><span>+245</span> <span> Guinea-Bissau (Guiné Bissau)</span></li>
                                <li class="text-sm" value="GY" alternativename="Guyana" mob-code="+592"><span>+592</span> <span> Guyana</span></li>
                                <li class="text-sm" value="HT" alternativename="Haiti" mob-code="+509"><span>+509</span> <span> Haiti</span></li>
                                <li class="text-sm" value="HN" alternativename="Honduras" mob-code="+504"><span>+504</span> <span> Honduras</span></li>
                                <li class="text-sm" value="HK" alternativename="Hong Kong (香港)" mob-code="+852"><span>+852</span> <span> Hong Kong (香港)</span></li>
                                <li class="text-sm" value="HU" alternativename="Hungary (Magyarország)" mob-code="+36"><span>+36</span> <span> Hungary (Magyarország)</span></li>
                                <li class="text-sm" value="IS" alternativename="Iceland (Ísland)" mob-code="+354"><span>+354</span> <span> Iceland (Ísland)</span></li>
                                <li class="text-sm selectedDropDownItem" value="IN" alternativename="India (भारत)" mob-code="+91"><span>+91</span> <span> India (भारत)</span></li>
                                <li class="text-sm" value="ID" alternativename="Indonesia" mob-code="+62"><span>+62</span> <span> Indonesia</span></li>
                                <li class="text-sm" value="IR" alternativename="Iran (‫ایران‬‎)" mob-code="+98"><span>+98</span> <span> Iran (‫ایران‬‎)</span></li>
                                <li class="text-sm" value="IQ" alternativename="Iraq (‫العراق‬‎)" mob-code="+964"><span>+964</span> <span> Iraq (‫العراق‬‎)</span></li>
                                <li class="text-sm" value="IE" alternativename="Ireland" mob-code="+353"><span>+353</span> <span> Ireland</span></li>
                                <li class="text-sm" value="IM" alternativename="Isle of Man" mob-code="+44"><span>+44</span> <span> Isle of Man</span></li>
                                <li class="text-sm" value="IL" alternativename="Israel (‫ישראל‬‎)" mob-code="+972"><span>+972</span> <span> Israel (‫ישראל‬‎)</span></li>
                                <li class="text-sm" value="IT" alternativename="Italy (Italia)" mob-code="+39"><span>+39</span> <span> Italy (Italia)</span></li>
                                <li class="text-sm" value="JM" alternativename="Jamaica" mob-code="+1"><span>+1</span> <span> Jamaica</span></li>
                                <li class="text-sm" value="JP" alternativename="Japan (日本)" mob-code="+81"><span>+81</span> <span> Japan (日本)</span></li>
                                <li class="text-sm" value="JE" alternativename="Jersey" mob-code="+44"><span>+44</span> <span> Jersey</span></li>
                                <li class="text-sm" value="JO" alternativename="Jordan (‫الأردن‬‎)" mob-code="+962"><span>+962</span> <span> Jordan (‫الأردن‬‎)</span></li>
                                <li class="text-sm" value="KZ" alternativename="Kazakhstan (Казахстан)" mob-code="+7"><span>+7</span> <span> Kazakhstan (Казахстан)</span></li>
                                <li class="text-sm" value="KE" alternativename="Kenya" mob-code="+254"><span>+254</span> <span> Kenya</span></li>
                                <li class="text-sm" value="KI" alternativename="Kiribati" mob-code="+686"><span>+686</span> <span> Kiribati</span></li>
                                <li class="text-sm" value="XK" alternativename="Kosovo" mob-code="+383"><span>+383</span> <span> Kosovo</span></li>
                                <li class="text-sm" value="KW" alternativename="Kuwait (‫الكويت‬‎)" mob-code="+965"><span>+965</span> <span> Kuwait (‫الكويت‬‎)</span></li>
                                <li class="text-sm" value="KG" alternativename="Kyrgyzstan (Кыргызстан)" mob-code="+996"><span>+996</span> <span> Kyrgyzstan (Кыргызстан)</span></li>
                                <li class="text-sm" value="LA" alternativename="Laos (ລາວ)" mob-code="+856"><span>+856</span> <span> Laos (ລາວ)</span></li>
                                <li class="text-sm" value="LV" alternativename="Latvia (Latvija)" mob-code="+371"><span>+371</span> <span> Latvia (Latvija)</span></li>
                                <li class="text-sm" value="LB" alternativename="Lebanon (‫لبنان‬‎)" mob-code="+961"><span>+961</span> <span> Lebanon (‫لبنان‬‎)</span></li>
                                <li class="text-sm" value="LS" alternativename="Lesotho" mob-code="+266"><span>+266</span> <span> Lesotho</span></li>
                                <li class="text-sm" value="LR" alternativename="Liberia" mob-code="+231"><span>+231</span> <span> Liberia</span></li>
                                <li class="text-sm" value="LY" alternativename="Libya (‫ليبيا‬‎)" mob-code="+218"><span>+218</span> <span> Libya (‫ليبيا‬‎)</span></li>
                                <li class="text-sm" value="LI" alternativename="Liechtenstein" mob-code="+423"><span>+423</span> <span> Liechtenstein</span></li>
                                <li class="text-sm" value="LT" alternativename="Lithuania (Lietuva)" mob-code="+370"><span>+370</span> <span> Lithuania (Lietuva)</span></li>
                                <li class="text-sm" value="LU" alternativename="Luxembourg" mob-code="+352"><span>+352</span> <span> Luxembourg</span></li>
                                <li class="text-sm" value="MO" alternativename="Macau (澳門)" mob-code="+853"><span>+853</span> <span> Macau (澳門)</span></li>
                                <li class="text-sm" value="MK" alternativename="Macedonia (FYROM) (Македонија)" mob-code="+389"><span>+389</span> <span> Macedonia (FYROM) (Македонија)</span></li>
                                <li class="text-sm" value="MG" alternativename="Madagascar (Madagasikara)" mob-code="+261"><span>+261</span> <span> Madagascar (Madagasikara)</span></li>
                                <li class="text-sm" value="MW" alternativename="Malawi" mob-code="+265"><span>+265</span> <span> Malawi</span></li>
                                <li class="text-sm" value="MY" alternativename="Malaysia" mob-code="+60"><span>+60</span> <span> Malaysia</span></li>
                                <li class="text-sm" value="MV" alternativename="Maldives" mob-code="+960"><span>+960</span> <span> Maldives</span></li>
                                <li class="text-sm" value="ML" alternativename="Mali" mob-code="+223"><span>+223</span> <span> Mali</span></li>
                                <li class="text-sm" value="MT" alternativename="Malta" mob-code="+356"><span>+356</span> <span> Malta</span></li>
                                <li class="text-sm" value="MH" alternativename="Marshall Islands" mob-code="+692"><span>+692</span> <span> Marshall Islands</span></li>
                                <li class="text-sm" value="MQ" alternativename="Martinique" mob-code="+596"><span>+596</span> <span> Martinique</span></li>
                                <li class="text-sm" value="MR" alternativename="Mauritania (‫موريتانيا‬‎)" mob-code="+222"><span>+222</span> <span> Mauritania (‫موريتانيا‬‎)</span></li>
                                <li class="text-sm" value="MU" alternativename="Mauritius (Moris)" mob-code="+230"><span>+230</span> <span> Mauritius (Moris)</span></li>
                                <li class="text-sm" value="YT" alternativename="Mayotte" mob-code="+262"><span>+262</span> <span> Mayotte</span></li>
                                <li class="text-sm" value="MX" alternativename="Mexico (México)" mob-code="+52"><span>+52</span> <span> Mexico (México)</span></li>
                                <li class="text-sm" value="FM" alternativename="Micronesia" mob-code="+691"><span>+691</span> <span> Micronesia</span></li>
                                <li class="text-sm" value="MD" alternativename="Moldova (Republica Moldova)" mob-code="+373"><span>+373</span> <span> Moldova (Republica Moldova)</span></li>
                                <li class="text-sm" value="MC" alternativename="Monaco" mob-code="+377"><span>+377</span> <span> Monaco</span></li>
                                <li class="text-sm" value="MN" alternativename="Mongolia (Монгол)" mob-code="+976"><span>+976</span> <span> Mongolia (Монгол)</span></li>
                                <li class="text-sm" value="ME" alternativename="Montenegro (Crna Gora)" mob-code="+382"><span>+382</span> <span> Montenegro (Crna Gora)</span></li>
                                <li class="text-sm" value="MS" alternativename="Montserrat" mob-code="+1"><span>+1</span> <span> Montserrat</span></li>
                                <li class="text-sm" value="MA" alternativename="Morocco (‫المغرب‬‎)" mob-code="+212"><span>+212</span> <span> Morocco (‫المغرب‬‎)</span></li>
                                <li class="text-sm" value="MZ" alternativename="Mozambique (Moçambique)" mob-code="+258"><span>+258</span> <span> Mozambique (Moçambique)</span></li>
                                <li class="text-sm" value="MM" alternativename="Myanmar (Burma) (မြန်မာ)" mob-code="+95"><span>+95</span> <span> Myanmar (Burma) (မြန်မာ)</span></li>
                                <li class="text-sm" value="NA" alternativename="Namibia (Namibië)" mob-code="+264"><span>+264</span> <span> Namibia (Namibië)</span></li>
                                <li class="text-sm" value="NR" alternativename="Nauru" mob-code="+674"><span>+674</span> <span> Nauru</span></li>
                                <li class="text-sm" value="NP" alternativename="Nepal (नेपाल)" mob-code="+977"><span>+977</span> <span> Nepal (नेपाल)</span></li>
                                <li class="text-sm" value="NL" alternativename="Netherlands (Nederland)" mob-code="+31"><span>+31</span> <span> Netherlands (Nederland)</span></li>
                                <li class="text-sm" value="NC" alternativename="New Caledonia (Nouvelle-Calédonie)" mob-code="+687"><span>+687</span> <span> New Caledonia (Nouvelle-Calédonie)</span></li>
                                <li class="text-sm" value="NZ" alternativename="New Zealand" mob-code="+64"><span>+64</span> <span> New Zealand</span></li>
                                <li class="text-sm" value="NI" alternativename="Nicaragua" mob-code="+505"><span>+505</span> <span> Nicaragua</span></li>
                                <li class="text-sm" value="NE" alternativename="Niger (Nijar)" mob-code="+227"><span>+227</span> <span> Niger (Nijar)</span></li>
                                <li class="text-sm" value="NG" alternativename="Nigeria" mob-code="+234"><span>+234</span> <span> Nigeria</span></li>
                                <li class="text-sm" value="NU" alternativename="Niue" mob-code="+683"><span>+683</span> <span> Niue</span></li>
                                <li class="text-sm" value="NF" alternativename="Norfolk Island" mob-code="+672"><span>+672</span> <span> Norfolk Island</span></li>
                                <li class="text-sm" value="KP" alternativename="North Korea (조선 민주주의 인민 공화국)" mob-code="+850"><span>+850</span> <span> North Korea (조선 민주주의 인민 공화국)</span></li>
                                <li class="text-sm" value="MP" alternativename="Northern Mariana Islands" mob-code="+1"><span>+1</span> <span> Northern Mariana Islands</span></li>
                                <li class="text-sm" value="NO" alternativename="Norway (Norge)" mob-code="+47"><span>+47</span> <span> Norway (Norge)</span></li>
                                <li class="text-sm" value="OM" alternativename="Oman (‫عُمان‬‎)" mob-code="+968"><span>+968</span> <span> Oman (‫عُمان‬‎)</span></li>
                                <li class="text-sm" value="PK" alternativename="Pakistan (‫پاکستان‬‎)" mob-code="+92"><span>+92</span> <span> Pakistan (‫پاکستان‬‎)</span></li>
                                <li class="text-sm" value="PW" alternativename="Palau" mob-code="+680"><span>+680</span> <span> Palau</span></li>
                                <li class="text-sm" value="PS" alternativename="Palestine (‫فلسطين‬‎)" mob-code="+970"><span>+970</span> <span> Palestine (‫فلسطين‬‎)</span></li>
                                <li class="text-sm" value="PA" alternativename="Panama (Panamá)" mob-code="+507"><span>+507</span> <span> Panama (Panamá)</span></li>
                                <li class="text-sm" value="PG" alternativename="Papua New Guinea" mob-code="+675"><span>+675</span> <span> Papua New Guinea</span></li>
                                <li class="text-sm" value="PY" alternativename="Paraguay" mob-code="+595"><span>+595</span> <span> Paraguay</span></li>
                                <li class="text-sm" value="PE" alternativename="Peru (Perú)" mob-code="+51"><span>+51</span> <span> Peru (Perú)</span></li>
                                <li class="text-sm" value="PH" alternativename="Philippines" mob-code="+63"><span>+63</span> <span> Philippines</span></li>
                                <li class="text-sm" value="PL" alternativename="Poland (Polska)" mob-code="+48"><span>+48</span> <span> Poland (Polska)</span></li>
                                <li class="text-sm" value="PT" alternativename="Portugal" mob-code="+351"><span>+351</span> <span> Portugal</span></li>
                                <li class="text-sm" value="PR" alternativename="Puerto Rico" mob-code="+1"><span>+1</span> <span> Puerto Rico</span></li>
                                <li class="text-sm" value="QA" alternativename="Qatar (‫قطر‬‎)" mob-code="+974"><span>+974</span> <span> Qatar (‫قطر‬‎)</span></li>
                                <li class="text-sm" value="RE" alternativename="Réunion (La Réunion)" mob-code="+262"><span>+262</span> <span> Réunion (La Réunion)</span></li>
                                <li class="text-sm" value="RO" alternativename="Romania (România)" mob-code="+40"><span>+40</span> <span> Romania (România)</span></li>
                                <li class="text-sm" value="RU" alternativename="Russia (Россия)" mob-code="+7"><span>+7</span> <span> Russia (Россия)</span></li>
                                <li class="text-sm" value="RW" alternativename="Rwanda" mob-code="+250"><span>+250</span> <span> Rwanda</span></li>
                                <li class="text-sm" value="BL" alternativename="Saint Barthélemy" mob-code="+590"><span>+590</span> <span> Saint Barthélemy</span></li>
                                <li class="text-sm" value="SH" alternativename="Saint Helena" mob-code="+290"><span>+290</span> <span> Saint Helena</span></li>
                                <li class="text-sm" value="KN" alternativename="Saint Kitts and Nevis" mob-code="+1"><span>+1</span> <span> Saint Kitts and Nevis</span></li>
                                <li class="text-sm" value="LC" alternativename="Saint Lucia" mob-code="+1"><span>+1</span> <span> Saint Lucia</span></li>
                                <li class="text-sm" value="MF" alternativename="Saint Martin (Saint-Martin (partie française))" mob-code="+590"><span>+590</span> <span> Saint Martin (Saint-Martin (partie française))</span></li>
                                <li class="text-sm" value="PM" alternativename="Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)" mob-code="+508"><span>+508</span> <span> Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span></li>
                                <li class="text-sm" value="VC" alternativename="Saint Vincent and the Grenadines" mob-code="+1"><span>+1</span> <span> Saint Vincent and the Grenadines</span></li>
                                <li class="text-sm" value="WS" alternativename="Samoa" mob-code="+685"><span>+685</span> <span> Samoa</span></li>
                                <li class="text-sm" value="SM" alternativename="San Marino" mob-code="+378"><span>+378</span> <span> San Marino</span></li>
                                <li class="text-sm" value="ST" alternativename="São Tomé and Príncipe (São Tomé e Príncipe)" mob-code="+239"><span>+239</span> <span> São Tomé and Príncipe (São Tomé e Príncipe)</span></li>
                                <li class="text-sm" value="SA" alternativename="Saudi Arabia (‫المملكة العربية السعودية‬‎)" mob-code="+966"><span>+966</span> <span> Saudi Arabia (‫المملكة العربية السعودية‬‎)</span></li>
                                <li class="text-sm" value="SN" alternativename="Senegal (Sénégal)" mob-code="+221"><span>+221</span> <span> Senegal (Sénégal)</span></li>
                                <li class="text-sm" value="RS" alternativename="Serbia (Србија)" mob-code="+381"><span>+381</span> <span> Serbia (Србија)</span></li>
                                <li class="text-sm" value="SC" alternativename="Seychelles" mob-code="+248"><span>+248</span> <span> Seychelles</span></li>
                                <li class="text-sm" value="SL" alternativename="Sierra Leone" mob-code="+232"><span>+232</span> <span> Sierra Leone</span></li>
                                <li class="text-sm" value="SG" alternativename="Singapore" mob-code="+65"><span>+65</span> <span> Singapore</span></li>
                                <li class="text-sm" value="SX" alternativename="Sint Maarten" mob-code="+1"><span>+1</span> <span> Sint Maarten</span></li>
                                <li class="text-sm" value="SK" alternativename="Slovakia (Slovensko)" mob-code="+421"><span>+421</span> <span> Slovakia (Slovensko)</span></li>
                                <li class="text-sm" value="SI" alternativename="Slovenia (Slovenija)" mob-code="+386"><span>+386</span> <span> Slovenia (Slovenija)</span></li>
                                <li class="text-sm" value="SB" alternativename="Solomon Islands" mob-code="+677"><span>+677</span> <span> Solomon Islands</span></li>
                                <li class="text-sm" value="SO" alternativename="Somalia (Soomaaliya)" mob-code="+252"><span>+252</span> <span> Somalia (Soomaaliya)</span></li>
                                <li class="text-sm" value="ZA" alternativename="South Africa" mob-code="+27"><span>+27</span> <span> South Africa</span></li>
                                <li class="text-sm" value="KR" alternativename="South Korea (대한민국)" mob-code="+82"><span>+82</span> <span> South Korea (대한민국)</span></li>
                                <li class="text-sm" value="SS" alternativename="South Sudan (‫جنوب السودان‬‎)" mob-code="+211"><span>+211</span> <span> South Sudan (‫جنوب السودان‬‎)</span></li>
                                <li class="text-sm" value="ES" alternativename="Spain (España)" mob-code="+34"><span>+34</span> <span> Spain (España)</span></li>
                                <li class="text-sm" value="LK" alternativename="Sri Lanka (ශ්‍රී ලංකාව)" mob-code="+94"><span>+94</span> <span> Sri Lanka (ශ්‍රී ලංකාව)</span></li>
                                <li class="text-sm" value="SD" alternativename="Sudan (‫السودان‬‎)" mob-code="+249"><span>+249</span> <span> Sudan (‫السودان‬‎)</span></li>
                                <li class="text-sm" value="SR" alternativename="Suriname" mob-code="+597"><span>+597</span> <span> Suriname</span></li>
                                <li class="text-sm" value="SJ" alternativename="Svalbard and Jan Mayen" mob-code="+47"><span>+47</span> <span> Svalbard and Jan Mayen</span></li>
                                <li class="text-sm" value="SE" alternativename="Sweden (Sverige)" mob-code="+46"><span>+46</span> <span> Sweden (Sverige)</span></li>
                                <li class="text-sm" value="CH" alternativename="Switzerland (Schweiz)" mob-code="+41"><span>+41</span> <span> Switzerland (Schweiz)</span></li>
                                <li class="text-sm" value="SY" alternativename="Syria (‫سوريا‬‎)" mob-code="+963"><span>+963</span> <span> Syria (‫سوريا‬‎)</span></li>
                                <li class="text-sm" value="TW" alternativename="Taiwan (台灣)" mob-code="+886"><span>+886</span> <span> Taiwan (台灣)</span></li>
                                <li class="text-sm" value="TJ" alternativename="Tajikistan" mob-code="+992"><span>+992</span> <span> Tajikistan</span></li>
                                <li class="text-sm" value="TZ" alternativename="Tanzania" mob-code="+255"><span>+255</span> <span> Tanzania</span></li>
                                <li class="text-sm" value="TH" alternativename="Thailand (ไทย)" mob-code="+66"><span>+66</span> <span> Thailand (ไทย)</span></li>
                                <li class="text-sm" value="TL" alternativename="Timor-Leste" mob-code="+670"><span>+670</span> <span> Timor-Leste</span></li>
                                <li class="text-sm" value="TG" alternativename="Togo" mob-code="+228"><span>+228</span> <span> Togo</span></li>
                                <li class="text-sm" value="TK" alternativename="Tokelau" mob-code="+690"><span>+690</span> <span> Tokelau</span></li>
                                <li class="text-sm" value="TO" alternativename="Tonga" mob-code="+676"><span>+676</span> <span> Tonga</span></li>
                                <li class="text-sm" value="TT" alternativename="Trinidad and Tobago" mob-code="+1"><span>+1</span> <span> Trinidad and Tobago</span></li>
                                <li class="text-sm" value="TN" alternativename="Tunisia (‫تونس‬‎)" mob-code="+216"><span>+216</span> <span> Tunisia (‫تونس‬‎)</span></li>
                                <li class="text-sm" value="TR" alternativename="Turkey (Türkiye)" mob-code="+90"><span>+90</span> <span> Turkey (Türkiye)</span></li>
                                <li class="text-sm" value="TM" alternativename="Turkmenistan" mob-code="+993"><span>+993</span> <span> Turkmenistan</span></li>
                                <li class="text-sm" value="TC" alternativename="Turks and Caicos Islands" mob-code="+1"><span>+1</span> <span> Turks and Caicos Islands</span></li>
                                <li class="text-sm" value="TV" alternativename="Tuvalu" mob-code="+688"><span>+688</span> <span> Tuvalu</span></li>
                                <li class="text-sm" value="VI" alternativename="U.S. Virgin Islands" mob-code="+1"><span>+1</span> <span> U.S. Virgin Islands</span></li>
                                <li class="text-sm" value="UG" alternativename="Uganda" mob-code="+256"><span>+256</span> <span> Uganda</span></li>
                                <li class="text-sm" value="UA" alternativename="Ukraine (Україна)" mob-code="+380"><span>+380</span> <span> Ukraine (Україна)</span></li>
                                <li class="text-sm" value="AE" alternativename="United Arab Emirates (‫الإمارات العربية المتحدة‬‎)" mob-code="+971"><span>+971</span> <span> United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span></li>
                                <li class="text-sm" value="GB" alternativename="United Kingdom" mob-code="+44"><span>+44</span> <span> United Kingdom</span></li>
                                <li class="text-sm" value="US" alternativename="United States" mob-code="+1"><span>+1</span> <span> United States</span></li>
                                <li class="text-sm" value="UY" alternativename="Uruguay" mob-code="+598"><span>+598</span> <span> Uruguay</span></li>
                                <li class="text-sm" value="UZ" alternativename="Uzbekistan (Oʻzbekiston)" mob-code="+998"><span>+998</span> <span> Uzbekistan (Oʻzbekiston)</span></li>
                                <li class="text-sm" value="VU" alternativename="Vanuatu" mob-code="+678"><span>+678</span> <span> Vanuatu</span></li>
                                <li class="text-sm" value="VA" alternativename="Vatican City (Città del Vaticano)" mob-code="+39"><span>+39</span> <span> Vatican City (Città del Vaticano)</span></li>
                                <li class="text-sm" value="VE" alternativename="Venezuela" mob-code="+58"><span>+58</span> <span> Venezuela</span></li>
                                <li class="text-sm" value="VN" alternativename="Vietnam (Việt Nam)" mob-code="+84"><span>+84</span> <span> Vietnam (Việt Nam)</span></li>
                                <li class="text-sm" value="WF" alternativename="Wallis and Futuna (Wallis-et-Futuna)" mob-code="+681"><span>+681</span> <span> Wallis and Futuna (Wallis-et-Futuna)</span></li>
                                <li class="text-sm" value="EH" alternativename="Western Sahara (‫الصحراء الغربية‬‎)" mob-code="+212"><span>+212</span> <span> Western Sahara (‫الصحراء الغربية‬‎)</span></li>
                                <li class="text-sm" value="YE" alternativename="Yemen (‫اليمن‬‎)" mob-code="+967"><span>+967</span> <span> Yemen (‫اليمن‬‎)</span></li>
                                <li class="text-sm" value="ZM" alternativename="Zambia" mob-code="+260"><span>+260</span> <span> Zambia</span></li>
                                <li class="text-sm" value="ZW" alternativename="Zimbabwe" mob-code="+263"><span>+263</span> <span> Zimbabwe</span></li>
                                <li class="text-sm" value="AX" alternativename="Åland Islands" mob-code="+358"><span>+358</span> <span> Åland Islands</span></li>
                            </ul>
                            <svg class="dropdownArrow" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M13.354 6.85354L8.35403 11.8535C8.30759 11.9 8.25245 11.9369 8.19175 11.9621C8.13105 11.9872 8.06599 12.0002 8.00028 12.0002C7.93457 12.0002 7.86951 11.9872 7.80881 11.9621C7.74811 11.9369 7.69296 11.9 7.64653 11.8535L2.64653 6.85354C2.55271 6.75972 2.5 6.63247 2.5 6.49979C2.5 6.36711 2.55271 6.23986 2.64653 6.14604C2.74035 6.05222 2.8676 5.99951 3.00028 5.99951C3.13296 5.99951 3.26021 6.05222 3.35403 6.14604L8.00028 10.7929L12.6465 6.14604C12.693 6.09958 12.7481 6.06273 12.8088 6.03759C12.8695 6.01245 12.9346 5.99951 13.0003 5.99951C13.066 5.99951 13.131 6.01245 13.1917 6.03759C13.2524 6.06273 13.3076 6.09958 13.354 6.14604C13.4005 6.19249 13.4373 6.24764 13.4625 6.30834C13.4876 6.36904 13.5006 6.43409 13.5006 6.49979C13.5006 6.56549 13.4876 6.63054 13.4625 6.69124C13.4373 6.75193 13.4005 6.80708 13.354 6.85354Z" fill="black"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div id="otpInputContainer" class="p-[2px] rounded-[12px]  justify-start items-center gap-2.5 inline-flex w-full">
                    <div class="justify-start rounded-[10px] items-center gap-2.5 flex w-full">
                        <input type="text" id="mobNumber" class="font-semibold w-full outline-none border-0 bg-transparent py-3 px-2 ">
                    </div>
                </div>
            </div>

        </div>


        <div class="mt-4">
            <p class="text-black/60 text-sm font-medium leading-[21px]">Got a question?</p>
            <input value="" id="question" placeholder="Type your question here." type="text" class="h-12 p-2 rounded-lg border border-black/10 text-black text-sm w-full mt-2 outline-none font-bold">

        </div>

        <div class="h-8 justify-center items-center gap-1 inline-flex mt-8 mb-4 sm:mt-4 sm:mb-0">
            <div class="bg-[#ff9933]/5 rounded-[25px] justify-start items-center gap-2.5 flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                    <path d="M16 6.5C14.0222 6.5 12.0888 7.08649 10.4443 8.1853C8.79981 9.28412 7.51809 10.8459 6.76121 12.6732C6.00433 14.5004 5.8063 16.5111 6.19215 18.4509C6.578 20.3907 7.53041 22.1725 8.92894 23.5711C10.3275 24.9696 12.1093 25.922 14.0491 26.3078C15.9889 26.6937 17.9996 26.4957 19.8268 25.7388C21.6541 24.9819 23.2159 23.7002 24.3147 22.0557C25.4135 20.4112 26 18.4778 26 16.5C25.9972 13.8487 24.9427 11.3068 23.068 9.43202C21.1932 7.55727 18.6513 6.5028 16 6.5ZM16 24.9615C14.3265 24.9615 12.6905 24.4653 11.299 23.5355C9.90753 22.6057 8.823 21.2842 8.18256 19.7381C7.54213 18.1919 7.37456 16.4906 7.70105 14.8492C8.02754 13.2079 8.83343 11.7002 10.0168 10.5168C11.2002 9.33342 12.7079 8.52754 14.3492 8.20105C15.9906 7.87456 17.6919 8.04212 19.2381 8.68256C20.7842 9.32299 22.1057 10.4075 23.0355 11.799C23.9653 13.1905 24.4615 14.8265 24.4615 16.5C24.459 18.7434 23.5667 20.8941 21.9804 22.4804C20.3941 24.0667 18.2434 24.959 16 24.9615ZM15.2308 17.2692V11.8846C15.2308 11.6806 15.3118 11.4849 15.4561 11.3407C15.6003 11.1964 15.796 11.1154 16 11.1154C16.204 11.1154 16.3997 11.1964 16.5439 11.3407C16.6882 11.4849 16.7692 11.6806 16.7692 11.8846V17.2692C16.7692 17.4732 16.6882 17.6689 16.5439 17.8132C16.3997 17.9574 16.204 18.0385 16 18.0385C15.796 18.0385 15.6003 17.9574 15.4561 17.8132C15.3118 17.6689 15.2308 17.4732 15.2308 17.2692ZM17.1538 20.7308C17.1538 20.959 17.0862 21.1821 16.9594 21.3718C16.8326 21.5616 16.6524 21.7094 16.4416 21.7968C16.2307 21.8841 15.9987 21.907 15.7749 21.8624C15.5511 21.8179 15.3455 21.708 15.1841 21.5467C15.0227 21.3853 14.9128 21.1797 14.8683 20.9559C14.8238 20.732 14.8467 20.5 14.934 20.2892C15.0213 20.0784 15.1692 19.8982 15.359 19.7714C15.5487 19.6446 15.7718 19.5769 16 19.5769C16.306 19.5769 16.5995 19.6985 16.8159 19.9149C17.0323 20.1313 17.1538 20.4247 17.1538 20.7308Z" fill="#FF9933" />
                </svg>
            </div>
            <div class="grow shrink basis-0 text-[#555555] text-[13px] font-bold leading-[18.20px]"><span class="font-bold">Service Hours: </span>Mon-Fri : 9:30 am to 6:00 pm | Sat: 9:30 am to 2:00 pm</div>
        </div>

        <div class="mt-4 flex gap-4 flex-col sm:flex-row">
            <div id="intiateCallBack" class="h-14 p-2.5 bg-[#0e51a0] rounded-lg justify-center items-center gap-1 inline-flex w-full cursor-pointer">
                <div class="text-white text-base font-bold  leading-normal ">Call Me Back</div>
            </div>

            <div id="closeCallBackWidget" class="h-14 p-2.5 bg-neutral-50 rounded-lg border justify-center items-center gap-1 inline-flex w-full cursor-pointer">
                <div class="text-black text-base font-bold  leading-normal ">Cancel</div>
            </div>
        </div>

    </div>
</div>


<script defer>
    let btn = document.querySelector('#sellCurrencyContainer');
    let overLay = document.querySelector('#callBackOverLay');
    let closeCallBackWidget = document.querySelector('#closeCallBackWidget')
    let widgetOpen = false;
    let callBackBtn = document.querySelector('#intiateCallBack')



    btn.addEventListener('click', () => {
        // Show overlay
        overLay.style.display = 'block';

        // Disable scrolling
        document.body.style.overflow = 'hidden';
        widgetOpen = true;
    });

    let callBackWidget = document.querySelector('#callBackWidget')
    overLay.addEventListener('click', (event) => {
        if (!callBackWidget.contains(event.target)) {
            closeCallbackWidget(); // Only close if the click was outside the otpWidget
        }
    })

    function closeCallbackWidget() {
        // Show overlay
        overLay.style.display = 'none';

        // Disable scrolling
        document.body.style.overflow = 'unset';
        widgetOpen = false;
    }


    closeCallBackWidget.addEventListener('click', () => {
        closeCallbackWidget()
    })

    callBackBtn.addEventListener('click', () => {
        let fullName = document.querySelector('#fullName').value;
        let question = document.querySelector('#question').value;
        let mobNumber = document.querySelector('#mobNumber').value;
        let countryCode = getSelectedDropdownItemElement('callBackCountryCodeMain').getAttribute('mob-code');

        // Name validation
        if (!fullName.trim()) {
            insertAlertBelowElement(document.querySelector('#fullName'), 'Enter a valid name!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#fullName'))
        }

        // Question validation
        if (!question.trim()) {
            insertAlertBelowElement(document.querySelector('#question'), 'Enter a valid question!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#question'))
        }

        // Mobile validation
        if (!mobNumber) {
            insertAlertBelowElement(document.querySelector('#mobContainer'), 'Enter a mobile number!')
            return;
        } else removeAlertBelowElement(document.querySelector('#mobContainer'));

        if (mobNumber.length !== 10 || !/^[6-9]\d{9}$/.test(mobNumber)) {
            insertAlertBelowElement(document.querySelector('#mobContainer'), 'Please enter valid number!')
            return;
        } else {
            removeAlertBelowElement(document.querySelector('#mobContainer'))
        }

        console.log(fullName, question, mobNumber, parseInt(countryCode));

        const formData = new URLSearchParams();
        formData.append('r_name', fullName);
        formData.append('r_phno', mobNumber);
        formData.append('r_code', parseInt(countryCode));
        formData.append('r_msg', question);
        formData.append('user_email', '');
        formData.append('user_location', '');

        fetch('https://mvc.extravelmoney.com/req-callback/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: formData
            })
            .then(response => response.text())
            .then(output => {
                console.log(output)
                if (output == 1) {
                    closeCallbackWidget();
                    showSuccessPopup();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });


    function showSuccessPopup(message = 'Request sent successfully!') {
        // Create popup container
        const popup = document.createElement('div');
        popup.className = 'success-popup';

        // Add checkmark SVG
        popup.innerHTML = `
        <svg class="checkmark" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <span>${message}</span>
    `;

        // Add to document
        document.body.appendChild(popup);

        // Remove after delay
        setTimeout(() => {
            popup.classList.add('fade-out');
            setTimeout(() => {
                document.body.removeChild(popup);
            }, 300); // Wait for fade out animation
        }, 2000); // Show for 2 seconds
    }
</script>