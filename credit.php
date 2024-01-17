<?php 
require_once 'include/sheader.php';
$history_id = $_GET['history_id'];
$q = fetch_history_single($history_id);
extract($q);
 ?>

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
<!--          <p><b>Local Time :</b> 12:44 PM</p>-->
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
<!--</div>--><div id="content" class="py-4">
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
<!-- Container Panel  -->
      <div class="col-lg-9">
        <div class="profile-content">
                            <h3 class="admin-heading bg-offwhite">
                                <p>Transaction Details</p>
                                <span>Details Activity</span>
                            </h3>
                            <div class="order-summery transaction-summery">
                                <div class="order-details-area table">
                                    <div class="table-head">
                                        <div class="modal_header">
                                            <span class="status bg-success">Success</span>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="content-area">
                                                        <b>Successful Transaction </b>
                                                                                                <p><?php  echo $trans_date; ?></p>
                                                        <p>Transaction ID: TX<?php  echo $history_id; ?></p>
                            <p>Payment Status: COMPLETED</p>                                                       
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="content-area text-right">
                                                        <div class="price">
                                                            <b>Amount</b>
                                                            <p><i class="fas fa-dollar-sign"></i> <?php $amt = number_format(floatval($amount)); echo $amt; ?>.00 USD</p>
                              <b> (Credit)</b>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-content bg-offwhite">
                                            <b>
                                                <div class="row">
                                                    <div class="col">Your Transaction Details</div>
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                    <div class="col text-right"></div>
                                                </div>
                                            </b>
                                        </div>
                                        <!--<div class="table-content">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col">-->
                                        <!--            Account Number:</div>-->
                                        <!--        <div class="col">09906123</div>-->
                                        <!--        <div class="col"></div>-->
                                        <!--        <div class="col text-right"></div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                    Amount:</div>
                                                <div class="col">USD <?php echo $amt; ?>.00 (Credit)</div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                    Transaction Charge:</div>
                                                <div class="col">Free</div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                   Transaction Narration:</div>
                                                <div class="col" style="width: 400px;">CREDIT TRANSFER</div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                   Transaction ID:</div>
                                                <div class="col">TX<?php  echo $history_id; ?></div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                   System Date:</div>
                                                <div class="col"><?php  echo $trans_date; ?></div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="row">
                                                <div class="col">
                                                  Available Balance:</div>
                                                <div class="col"><i class="fas fa-dollar-sign"></i> 0.00 USD</div>
                                                <div class="col"></div>
                                                <div class="col text-right"></div>
                                            </div>
                                        </div>
                                                           
                                    </div>
                                </div>
                            </div>
                        </div> 
      </div>
      <!-- Middle End -->
    </div>
  </div>
</div>
  
  <!-- Footer
  ============================================= -->
  <?php 
require_once 'include/sfooter.php';
   ?>