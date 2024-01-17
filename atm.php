<?php 
require_once 'include/sheader.php';

if (isset($_POST['submit'])) {
    
      $bank_name = "Cynergy";
 date_default_timezone_set('America/Chicago');
  $date = date('Y-m-d H:i:s');


$body = '
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 0px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #ccc; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>
  <body class="">
    <span class="preheader">ATM Caard Request</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <table role="presentation" class="main">

              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <img src="https://cynergyfin.cyou/en/images/logoos.png" width="200">
                        

                        
                        <p><b> Welcome to'.$bank_name.' </b></p>
                        <p> You Have successfully applied for ATM Card. We Will process your request and get back to you shortly</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">

                                <table  border="1" cellpadding="3" cellspacing="0">
                                  <tbody>
                                <tr>
                                      <td>Name</td>
                                       <td>'.$firstname.'</td>
                                    </tr>

                                    <tr>
                                      <td>Account Number</td>
                                       <td>'.$account_number.'</td>
                                    </tr>

                                   

                                    

                


                                     <tr>
                                      <td>Date</td>
                                       <td>'
                                        . $date.
                                       '
                                       </td>
                                    </tr>


                                  
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                      
                        <p>Thank you for banking with us</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">&copy; '. $bank_name.'</span>
                    <br> Dont like these emails? <a href="#">Unsubscribe</a>.
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by">
                  
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';
    
    
   $s=  send_mail($email, $firstname, "Card Request", $body);    
  
  echo ' <script>
   alert("Your application has been submitted");
   window.location = "dashboard.php";
 </script>';

  // $result = login_user($_POST);

  // if ($result === true) {
   
  //   header("Location: pet.php");
  // } else {
  //   $errors = $result;
  //   extract($errors);
    
  // }
  // var_dump($_POST);
}
 ?>

<script type="text/javascript">function change_min_bal_top_profile(amt){$('#top_profile_cur_bal').html(amt);}</script>
<!--<div class="profilebar">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      -->
<!--      <div class="col">-->
<!--        <div class="balance-area">-->
<!--          <select name="bal_top_profile" class="custom-select" style="width:200px;" onchange="return change_min_bal_top_profile(this.value);">-->
<!--            -->
<!--            <option value='<i class="fas fa-dollar-sign"></i> 1,017,779.00 USD'>USD Balance</option>-->
<!--            -->
<!--          </select>-->
<!--          <p class="total-blance" id="top_profile_cur_bal"><i class="fas fa-dollar-sign"></i> 1,017,779.00</p>-->

<!--        </div>-->
<!--      </div>-->
<!--      -->
      
<!--      <div class="col">-->
           
<!--        <div class="local-time">-->
<!--          <p><b>Account No:</b> 09906123</p>-->
<!--          -->
<!--        </div>-->
        
        
<!--      </div>-->
<!--      <div class="col">-->
<!--        <div class="local-time">-->
<!--          <p><b>Local Time :</b> 12:51 PM</p>-->
<!--        </div>-->
        
        
<!--      </div>-->
      
      <!--<div class="col">-->
        <!--<div class="local-time">-->
        <!--  <p><b>Last Visit :</b> 01/01/1970 - 01:00 AM</p>-->
        <!--</div>-->
      <!--</div>-->
      <!--<div class="col notify-col text-right">-->
      <!--  <div class="notify-btn"><a href="https://login.qnbfinance.com/transfer_money/history"><i class="far fa-bell"></i></a></div>-->
      <!--</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- End Profile bar -->

<!--<div style="color: #32375c; font-size: 20px; font-weight:bold; font: normal 14px arial, sans-serif; background-color: #f7f7f7;  width: 100%; margin: 0 auto; padding: 4px 5px 3px 5px;">-->
<!--<marquee scrolldelay="125" style="font-size: 14px; font-weight:bold; color: #d2418b;">-->
<!--WELCOME TO PINNACLE’S INVESTORS BANK. WE ARE A THRIVING COMMUNITY BANK WITH A RICH HISTORY, DEDICATED STAFF AND COMMITTED LEADERSHIP FOCUSED ON FOSTERING AN EXCEPTIONAL BANKING RELATIONSHIP WITH YOU WHILE MAINTAINING OUR CORE DEDICATION TO THE COMMUNITIES WE SERVE. WE ARE FINANCIALLY STRONG AND WELL POSITIONED TO PROVIDE YOU WITH THE RIGHT FINANCIAL SERVICES THAT WILL MEET YOUR FINANCIAL CHALLENGES. GET THE FINANCIAL FREEDOM YOU DESERVE. CREDIT CARDS OFFERS EXCEPTIONAL BENEFITS, REWARDS, SERVICES AND SPENDING POWER THAT CAN HELP MAKE YOUR FINANCIAL AND PERSONAL DREAMS COME TRUE. ESCAPE FROM THE DAILY ROUTINE AND RELAX AT A SPA, GO ON A THRILL-SEEKING ADVENTURE, OR TAKE IN A ROUND OF GOLF WITH PRO INSTRUCTION. ACCESS RESTAURANT REVIEWS AND MAKE DINNING RESERVATIONS ONLINE. WE ARE DEDICATED TO DELIVERING THE HIGHEST LEVELS OF SERVICE, SUPPORT AND PRODUCT EXCELLENCE. YOU MAY CALL ON US ANY TIME. WE ARE COMMITTED TO FACILITATING AND SUSTAINING THE BEST BANKING RELATIONSHIPS POSSIBLE. WE THANK YOU FOR YOUR CONTINUED PARTNERSHIP AND LOOK FORWARD TO GROWING TOGETHER.</marquee>-->
<!--</div>--><style>
.trns_my .disnon{display:none;}
.trns_my .uf_error_in .uf_error{line-height: 20px;color: #a94442 !important;font-size: 14px !important;margin-top: 5px;margin-bottom: 0;font-weight: 500; margin-left:6px}
.trns_my .error{line-height: 20px;color: #a94442 !important;font-size: 14px !important;margin-top: 5px;margin-bottom: 0;font-weight: 500; margin-left:6px}
.trns_my .uf_error_in .uf_error i,.error i{font-size: 11px;}
</style>
<div id="content" class="py-4 trns_my">
  <div class="container">
    <div class="row">
    <!-- Left sidebar -->
<?php   require_once 'include/aside.php'; ?>
<!-- Left Panel End -->




<style type="text/css">
    
    .nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: Fontawesome;
  content: "\f105";
  display: inline-block;
  padding-left: 20px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

.nav-side-menu ul .sub-menu ul .sub-line li.active,
.nav-side-menu li .sub-menu li .sub-line li.active {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li .sub-line li.active a,
.nav-side-menu li .sub-menu li .sub-line li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li .sub-line li,
.nav-side-menu li .sub-menu li .sub-line li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li .sub-line li:hover,
.nav-side-menu li .sub-menu li .sub-line li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li .sub-line li:before,
.nav-side-menu li .sub-menu li .sub-line li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 100px;
  padding-right: 10px;
  vertical-align: middle;
}

.nav-side-menu .sub-menu li {
  padding-left: 20px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu .sub-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.sub-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li .sub-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
 .nav-side-menu .sub-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
.nav-side-menu  .sub-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  
  .sub-line ul .sub-press li.active,
.sub-line li .sub-press li.active {
  color: #d19b3d;
}

.sub-line ul .sub-press li.active a,
.sub-line li .sub-press li.active a {
  color: #d19b3d;
}
.sub-line ul .sub-press li,
.sub-line li .sub-press li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.sub-line ul .sub-press li:hover,
.sub-line li .sub-press li:hover {
  background-color: #020203;
}
.sub-line ul .sub-press li:before,
.sub-line li .sub-press li:before {
  font-family: Arial;
  content: "\f105";
  display: inline-block;
  padding-left: 50px;
  padding-right: 10px;
  vertical-align: middle;
}

.sub-line li {
  padding-left: 20px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.sub-line li a {
  text-decoration: none;
  color: #e1ffff;
}
.sub-line li a i {
  padding-left: 50px;
  width: 20px;
  padding-right: 20px;
}
.sub-line li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .sub-line {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .sub-line .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }

</style>
    <div class="col-lg-9">
        <div class="profile-content">
          <h3 class="admin-heading">ATM CARD REQUEST</h3>
         
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">           
            <form id="send-money" method="post" action="" class="form bg-offwhite">
             
              
                <div id="result_display" class="result_display"></div>
                <div class="up_bk_step_one upbk_box" id="up_bk_step_one">
                <div class="text-center">
                  <h3 class="text-5 msg-header">Customers Details</h3>
                  <p class="text-4 text-center"></p>
                </div>

                <!--<div class="form-group">-->
                <!--  <label for="emailID">Reference Number * <sub>Note: this will be used to identify this recipient when you make payment</sub></label>-->
                <!--  <input type="text" class="form-control" name="uf_reference" id="uf_reference" placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_reference');" />       -->
                <!--  <div id="uf_error_reference" class="uf_error_in"></div>-->
                <!--</div>-->

                <div class="form-group">
                  <label for="bname">Customers's Name* <sub></sub></label>
                  <input type="text" class="form-control" required name="uf_account_name" id="uf_account_name" placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_account_name');" />        
                  <div id="uf_error_account_name" class="uf_error_in"></div>
                </div>
                
                <div class="form-group">
                  <label for="description">Customer's Email* </label>
                  <input type="text" class="form-control" id="uf_bank_name_address" required name="uf_bank_name_address" placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_bank_name_address');" />
                    <div id="uf_error_bank_name_address" class="uf_error_in"></div>
                </div>

                 <div class="form-group">
                  <label for="baccount">Customer's Phone Number* </label>
                  <input type="text" class="form-control" name="uf_iban_no" id="uf_iban_no" required placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_iban_no');" />       
                  <div id="uf_error_iban_no" class="uf_error_in"></div>
                </div>
                
                <ul class="pager mt-4">
                  <li>&nbsp;</li>
                  <li>
                    <button type="submit" name="submit" class="btn btn-default mr-0">
                      <span class="bh"></span>
                      <span>Apply for Card</span>
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </li>
                </ul>
                </div>
                
                <div class="up_bk_step_four upbk_box disnon" id="up_bk_step_four">
                  <div class="">
                                        <div class="text-center">
                                            <h1 class=""><i class="far fa-check-circle text-success"></i></h1>
                                            <h3 class=" text-success">Successful!</h3>
                                            <p class="">Transaction Completed</p>
                                            <p class="">The sum of <b id="succ_trans_amt"></b> have been debited from your account successfully.</p>
                                            <p>See transaction details under <a class="succ_trans_summary">Activity</a></p>
                                            <p>
                                                <span class="name"><b>Transaction ID:</b></span>
                                                <span class="decs" id="succ_trans_id"></span>
                                            </p>
                                            <hr>
                                            <a href="https://login.qnbfinance.com/transfer_money" class="btn btn-default mr-0 mt-5">
                                                <span class="bh"></span>
                                                <span>Send Money Again</span>
                                            </a>
                                            <a href="https://login.qnbfinance.com/transfer_money/history" class="btn btn-default mr-0 mt-5">
                                                <span class="bh"></span>
                                                <span>Go to Summary</span>
                                            </a>
                                        </div>
                                    </div>
                </div>
              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  
  <!-- Footer
  ============================================= -->
  <?php 
require_once 'include/sfooter.php';
   ?>