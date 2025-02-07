<style>
    
    .col4 a {
        
        color:  #182432;
    }
    
    .flag {
        
        height: 16px;
        width: 16px  !important;
        margin-right: 6px;
    }
    .currencyConverterMain{
        background:#0e51a0;
        height:22rem;
        
    }
    .ccWidget{
        margin-top:-12rem;
        background:white;
        box-shadow: rgba(35, 55, 80, 0.3) 0px 6px 12px;
        border-radius:10px;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:20px 0;
        font-family: 'Open Sans';
        width:80%;
    }
    .ccContainer{
        width:90%;
        
    }
    .formContainer{
        display:flex;
        justify-content:center;
    }
    .inputContainer{
        width:50%;
        padding:12px;
        padding-top:5px;
    }
    .ccHeadings{
        margin:0;
        padding:0 12px;
        font-size:1.5rem;
        font-weight:600;
        font-family:inherit;
        
    }
    .ccSelect{
        outline:none;
        border:none;
        background:white;
        
    }
    .ccSelect .select2-choice{
        background-color:white !important;
        background:white;
        border: 1px solid #d8d8d8 !important;
        padding-top:2px;
        padding-bottom:2px;
        height:2.5rem;
        display: flex;
        align-items: center;
        border-radius: 6px;
    }
    .ccSelect .select2-choice .select2-arrow{
        background:white;
        border:none;
        background-color:white !important;
        
    }
    .ccSelect .select2-container-disabled .select2-choice{
        background:white;
    }
    .inputContainer input{
        border: 1px solid #d8d8d8 !important;
        padding-top:2px;
        padding-bottom:2px;
        height:2.5rem;
        border-radius: 6px;
    }
    #ccHeading{
            color: white;
    text-align: center;
    padding-top: 3rem;
    margin: 0;
    font-family: 'Open Sans';
    font-weight: 500;
    }
    @media(max-width:700px){
        .formContainer{
            flex-direction:column;
        }
        .formContainer .inputContainer{
            width:100% !important;
            padding-left:0 !important;
            padding-right:0 !important;
            
        }
        .inputContainer select, .inputContainer input{
            width:100% !important;
            padding:0;
            text-indent:1rem;
        }
        .ccHeadings{
            padding:0 ;
        }
        .ccWidgetCont{
            background:#0e51a0;
            padding-bottom:2rem;
        }
        
    }
    @media(max-width:500px){
        #ccHeading{
           font-size: 1.5rem;
           padding-left: 15px;
           padding-right: 15px;
        }
        .ccHeadings{
            font-size:1.2rem;
        }
    }
    .col4{
        width:24%;
        margin:0 !important;
    }
    .countryContainer p{
        padding:10px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        border-radius:30px;
        display:flex;
        align-items:center;
        column-gap:1rem;
    }
    .countryContainer p img{
        width:1.2rem !important;
        height:1.2rem;
    }
    .countryContainer{
        margin-right:10px !important;
    }
</style>
<section class="currencyConverterMain">
		    <h2 id="ccHeading"><?php echo $currency ?> to INR - Convert <?php echo $currencyfull ?> to Indian Rupee</h2>
		</section>
		<div class="ccWidgetCont" style="display:flex;align-items:center;justify-content:center;">
		   <section class="ccWidget">
						<div class="ccContainer" style="margin-top: 10px; padding-bottom: 0px; margin-bottom: 0px;">
						
						
						
						
						    <h2 class="ccHeadings">From</h2>
							<div  class="formContainer">
							
						 <div class="form-group inputContainer">
								 <label>Currency</label>
									 <select name="bcurr" id="bcurr" style="width: 100%;" class="sselect ccSelect">
										
											<option value="AUD" id="c_aud">AUD - Australian Dollar</option>
											<option value="BHD">BHD - Bahrain Dinar</option>
											<option value="CAD">CAD - Canadian Dollar</option>
											<option value="DKK">DKK - Danish Kroner</option>
											<option value="EUR">EUR - Euro</option>
											<option value="HKD">HKD - Hongkong Dollar</option>
											<option value="JPY">JPY - Japanese Yen</option>
											<option value="KWD">KWD - Kuwait Dinar</option>
											<option value="MYR">MYR - Malaysian Ringgit</option>
											<option value="NZD">NZD - New Zealand Dollar</option>
											<option value="NOK">NOK - Norwegian Kroner</option>
											<option value="OMR">OMR - Omani Riyal</option>
											<option value="QAR">QAR - Qatar Riyal</option>
											<option value="SAR">SAR - Saudi Riyal</option>
											<option value="SGD">SGD - Singapore Dollar</option>
											<option value="ZAR">ZAR - South African Rand</option>
											<option value="GBP">GBP - Britain Pound</option>
											<option value="SEK">SEK - Swedish Kroner</option>
											<option value="CHF">CHF - Swiss Franc</option>
											<option value="THB">THB - Thai Baht</option>
											<option value="AED">AED - UAE Dirham</option>
											<option value="USD" selected="">USD - US Dollar</option>
											<option value="CNY">CNY - Chinese Yuan</option>

										
									 </select>
									 </div>
						<div class="form-group inputContainer ">
							   <label for="text">Amount</label><input name="mamount" id="bamount111a" style="width: 90%;" placeholder="Enter amount">
									
									 </div>			 
									 
						 
								 </div>
								 <h2 class="ccHeadings" style="margin-top:1rem;">To</h2>
								 <div class="formContainer" >
							
						 <div class="form-group inputContainer" >
									 <label>Currency</label>
									 <select name="bcurr2" id="bcurr2" disabled="true" style="width: 100%;" class="sselect ccSelect">
										
										<option value="INR">INDIAN RUPEE</option>
									 
									 </select>
									 </div>
						 <div class="form-group inputContainer">
									  <label for="text">Amount</label><input name="mamount" id="bamount222a" style="width: 90%;" placeholder="Enter amount in INR">
									 </div>
								 </div>
								 
								 
								 
							</div>					 
									 
			
			

			
			


		</section> 
		</div>