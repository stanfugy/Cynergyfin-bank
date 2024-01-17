<?php 
require_once 'include/sheader.php';

if ($account_status === "Active") {
  
if (isset($_POST['submit'])) {
   $tr = transfer($_POST);

if ($tr === true) {
  // echo "dd";
  header("Location: success.php");
  } else {
    $errors = $tr;
    extract($errors);
    
  }
  
}
}elseif (isset($_POST['submit'])) {

echo '<script type="text/javascript">
  alert("Your acount is inactive")
</script>
';
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
          <h3 class="admin-heading">INTERNATIONAL FUND TRANSFER</h3>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link " id="step_bar_one" href="#" style="font-size: 10px; font-weight: bold">Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="step_bar_two" href="#" style="font-size: 10px; font-weight: bold">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="step_bar_three" href="#" style="font-size: 10px; font-weight: bold">Confirm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="step_bar_four" href="#" style="font-size: 10px; font-weight: bold">Success</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


            <form id="send-money" method="post" action="" class="form bg-offwhite">
             
              
                <div id="result_display" class="result_display">
                  
                   <style type="text/css">
        .er{
          color: red;
          font-weight: bold;
        }
      </style>
          <ul>
            <?php if (isset($errors)) { ?>
            <?php if (isset($errors['token'])) { ?><li class="er"><?php echo $errors['token'] ?></li> <?php  } ?>
             <?php if (isset($errors['limit'])) { ?><li class="er"><?php echo $errors['limit'] ?></li> <?php  } ?>
           
            <?php  } ?>
          </ul>

                </div>
                <div class="up_bk_step_one upbk_box" id="up_bk_step_one">
               <!--  <div class="text-center">
                  <h3 class="text-5 msg-header">Recipient's Details</h3>
                  <p class="text-4 text-center">{All fields are mandatory}</p>
                </div> -->

                <!--<div class="form-group">-->
                <!--  <label for="emailID">Reference Number * <sub>Note: this will be used to identify this recipient when you make payment</sub></label>-->
                <!--  <input type="text" class="form-control" name="uf_reference" id="uf_reference" placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_reference');" />       -->
                <!--  <div id="uf_error_reference" class="uf_error_in"></div>-->
                <!--</div>-->

         
                                            
                <div class="up_bk_step_three upbk_box " >
                  <div class="text-center">
                                            <h3>You're sending money to <?php echo $_SESSION['t']['uf_account_name']; ?></h3>
                                            <h2 class="bef_trans_amt"><?php echo $currency. $_SESSION['x']['uf_transfer_amt'];  ?></h2>
                                         </div>
                                        <br>
                                        <div class="row">
                                                                  <div class="col-md-6">
                                                <p class="text-left"><label>Transaction fee </label></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <!--<span class="bg-success free-charge">Free</span>-->
                                                    <span class="trsmy_acct_curr"><?php echo $currency; ?></span> 25                          <input type="hidden" id="h_transactions_fees" name="h_transactions_fees" value="25" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left"><label>Total</label></p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="float-right" id="final_amt_snt"></span>
                                            </div>
                                        </div>
                                        <!--<p class="text-center">For more information, please read our <a href="#">user agreement.</a></p>-->
                    <div class="form-group">
                                            <label for="baccount">Transfer Pin* </label>
                                            <input type="text" title='<i class="fa fa-exclamation"></i> Enter Transfer Pin' class="form-control required" name="uf_vat_code" id="uf_vat_code" placeholder="" autocomplete="off" value="" onkeyup="return remove_field_validation('uf_error_vat_code');" />        
                      <div id="uf_error_vat_code" class="uf_error_in"></div>
                                        </div>
                                        <ul class="pager mt-4">
                                            <li>
                                                <a onclick="return back_step_two();" class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <i class="fas fa-chevron-left"></i>
                                                    <span>Back</span>
                                                </a>
                                            </li>
                                            <li>
                                                <button type="submit" name="submit" class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <span id="send_btn">Transfer Now <i class="fas fa-chevron-right"></i></span>                                                    
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