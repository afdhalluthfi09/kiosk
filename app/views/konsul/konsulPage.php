<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.21672" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.21672" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.21672" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21672" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
      setTimeout(function() {
          $('input_4').hint('ex: 902000');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_7').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_7').hint('silahkana masukan nama usaha anda..');
       }, 20);
      setTimeout(function() {
          $('input_9').hint('ex: +62 856 xxxx xxxx');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("12", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("12", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"konsultasiUmum","qid":"1","text":"Konsultasi Umum","type":"control_head"},null,null,{"description":"","name":"nomorInduk","qid":"4","subLabel":"perhatikan nomor induk anda","text":"Nomor Induk (NIK)","type":"control_number"},null,{"description":"","name":"name","qid":"6","text":"Name","type":"control_fullname"},{"description":"","name":"usaha","qid":"7","subLabel":"perhatikan pengetikan nama usaha anda","text":"Usaha","type":"control_textbox"},null,{"description":"","name":"nomorWhatsapp","qid":"9","subLabel":"perhatikan no whatsapp yang anda masukan","text":"nomor whatsapp","type":"control_number"},{"description":"","name":"jenisUsaha","qid":"10","subLabel":"","text":"Jenis Usaha","type":"control_dropdown"},null,{"description":"","name":"tanggal","qid":"12","text":"Tanggal","type":"control_datetime"},{"description":"","name":"typeA","qid":"13","text":"Type a question","type":"control_radio"},{"description":"","name":"ulasan","qid":"14","subLabel":"","text":"ulasan","type":"control_textarea"},null,null,null,null,{"name":"submit","qid":"19","text":"Submit","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"konsultasiUmum","qid":"1","text":"Konsultasi Umum","type":"control_head"},null,null,{"description":"","name":"nomorInduk","qid":"4","subLabel":"perhatikan nomor induk anda","text":"Nomor Induk (NIK)","type":"control_number"},null,{"description":"","name":"name","qid":"6","text":"Name","type":"control_fullname"},{"description":"","name":"usaha","qid":"7","subLabel":"perhatikan pengetikan nama usaha anda","text":"Usaha","type":"control_textbox"},null,{"description":"","name":"nomorWhatsapp","qid":"9","subLabel":"perhatikan no whatsapp yang anda masukan","text":"nomor whatsapp","type":"control_number"},{"description":"","name":"jenisUsaha","qid":"10","subLabel":"","text":"Jenis Usaha","type":"control_dropdown"},null,{"description":"","name":"tanggal","qid":"12","text":"Tanggal","type":"control_datetime"},{"description":"","name":"typeA","qid":"13","text":"Type a question","type":"control_radio"},{"description":"","name":"ulasan","qid":"14","subLabel":"","text":"ulasan","type":"control_textarea"},null,null,null,null,{"name":"submit","qid":"19","text":"Submit","type":"control_button"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21672" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21672" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21672" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #ffffff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: rgba(255,255,255,0);
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/korla_hemad/form_files/logos3.1.5faf86f2e6a0e4.26239829.png");
      display: inline-block;
      height: 113px;
      position: absolute;
      background-size: 451px 113px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 133px !important;
    }
    .form-all:before {
      top: -123px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>

<form class="jotform-form" 
      action="<?= BASEURL; ?>/KonsukUm/tambahData" 
      method="post" 
      accept-charset="utf-8" 
      autocomplete="on">

  <div role="main" class="form-all">
    <div class="formLogoWrapper Center">
      <img class="formLogoImg" src="https://www.jotform.com/uploads/korla_hemad/form_files/logos3.1.5faf86f2e6a0e4.26239829.png" height="113" width="451">
    </div>
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -123px; text-align: center;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Konsultasi Umum
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              sibakul jogja
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_6" data-compound-hint=",">
        <label class="form-label form-label-top" id="label_6" for="first_6"> Nama </label>
        <div id="cid_6" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_6" name="nama" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_6 sublabel_6_first" />
              <label class="form-sub-label" for="first_6" id="sublabel_6_first" style="min-height:13px" aria-hidden="false"> Nama Lengkap </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-2" data-type="control_number" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4"> Nomor Induk (NIK) </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_4" name="nik" data-type="input-number" class=" form-number-input form-textbox" style="width:259px" size="259" value="" placeholder="ex: 902000" data-component="number" aria-labelledby="label_4 sublabel_input_4" step="any" />
            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> perhatikan nomor induk anda </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Usaha </label>
        <div id="cid_7" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_7" name="usaha" data-type="input-textbox" class="form-textbox validate[AlphaNumeric]" style="width:310px" size="310" value="" placeholder="silahkana masukan nama usaha anda.." data-component="textbox" aria-labelledby="label_7 sublabel_input_7" />
            <label class="form-sub-label" for="input_7" id="sublabel_input_7" style="min-height:13px" aria-hidden="false"> perhatikan pengetikan nama usaha anda </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_number" id="id_9">
        <label class="form-label form-label-top" id="label_9" for="input_9"> nomor whatsapp </label>
        <div id="cid_9" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_9" name="no_wa" data-type="input-number" class=" form-number-input form-textbox" style="width:310px" size="310" value="" placeholder="ex: +62 856 xxxx xxxx" data-component="number" aria-labelledby="label_9 sublabel_input_9" step="any" />
            <label class="form-sub-label" for="input_9" id="sublabel_input_9" style="min-height:13px" aria-hidden="false"> perhatikan no whatsapp yang anda masukan </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10"> Jenis Usaha </label>
        <div id="cid_10" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="input_10" name="j_konsultasi" style="width:310px" data-component="dropdown" aria-labelledby="label_10">
            <option value=""> Masukan Produk anda </option>
            <option value="produk"> produk </option>
            <option value="pendampingan"> pendampingan </option>
            <option value="acara"> acara </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-6" data-type="control_datetime" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="lite_mode_12"> Tanggal </label>
        <div id="cid_12" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="date" name="tgl_konsul" class="validate[limitDate, validateLiteDate]" id="lite_mode_12" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_12 sublabel_12_litemode" />
              <label class="form-sub-label" for="lite_mode_12" id="sublabel_12_litemode" style="min-height:13px" aria-hidden="false"> Tanggal </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-7" data-type="control_radio" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="input_13"> Type a question </label>
        <div id="cid_13" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_13" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" name="jam_konsul" id="input_13_0"  value="09.00" />
              <label id="label_input_13_0" for="input_13_0"> 09.00 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_1" name="jam_konsul" value="04.00" />
              <label id="label_input_13_1" for="input_13_1"> 04.00 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_2" name="jam_konsul" value="11.00" />
              <label id="label_input_13_2" for="input_13_2"> 11.00 </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-8" data-type="control_textarea" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> ulasan </label>
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <textarea id="input_14" class="form-textarea" name="uraian_m" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_14"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_19">
        <div id="cid_19" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_19" type="submit" name="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.21672"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.21672"></script>