<?php

  require_once 'admin/libraries/functions.inc.php';

  // if session is not set this will redirect to login page
  // if(!isset($_SESSION['track_no']) ) {
  //  header("Location: track.php");
  //  exit;
  // }

    $history_id = $_GET['history_id'];
    $sql = "SELECT * FROM history WHERE history_id='$history_id'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    extract($row);


?>

<style type="text/css">
@media print{
  body{ background-color:#FFFFFF; background-image:none; color:#000000 }
  #ad{ display:none;}
  #leftbar{ display:none;}
  #contentarea{ width:100%;}
}
</style>

<!DOCTYPE html>
<!-- saved from url=(0058)https://sparksuite.github.io/simple-html-invoice-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Receipt</title>

    <!-- Favicon -->
    <link rel="icon" href="https://sparksuite.github.io/simple-html-invoice-template/images/favicon.png" type="image/x-icon">

    <!-- Invoice styling -->
    <style>
      body {
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        text-align: center;
        color: #777;
      }

      body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
      }

      body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
      }

      body a {
        color: #06f;
      }

      .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }

      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-collapse: collapse;
      }

      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }

      .invoice-box table tr td:nth-child(2) {
        text-align: right;
      }

      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }

      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }

      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }

      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }

      .invoice-box table tr.item.last td {
        border-bottom: none;
      }

      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }

      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }

        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }
    </style>
  </head>

  <body>

<!--     <h1>A simple, clean, and responsive HTML invoice template</h1>
    <h3>Because sometimes, all you need is something simple.</h3>
    Find the code on <a href="https://github.com/sparksuite/simple-html-invoice-template">GitHub</a>. Licensed under the
    <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. -->

    <br><br><br>

    <div class="invoice-box">
      <table>
        <tbody><tr class="top">
          <td colspan="2">
            <table>
              <tbody><tr>
                <td class="title">
                 
                  <img src="https://cynergytrust.online/images/logoos.png" alt="" style="width: 100%; max-width: 300px">
                </td>

                <td>
                  Transaction ID #: 12<?php echo $history_id; ?><br>
                  Created: <?php  echo $trans_date; ?><br>
                  completed: <?php  echo $trans_date; ?>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>

        <tr class="information">
          <td colspan="2">
            <table>
              <tbody><tr>
                

                <td>
                  <?php   echo $sender_name; ?><br>
                 <!--  John Doe<br>
                  john@example.com -->
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>

        <!-- <tr class="heading">
          <td>Trasaction Details</td>

          <td></td>
        </tr>

        <tr class="details">
          <td>Check</td>

          <td>1000</td>
        </tr> -->

        <tr class="heading">
          <td>Trasaction Details</td>

          <td></td>
        </tr>

          <tr class="item">
          <td>Transaction Type</td>

          <td>Debit</td>
        </tr>
        <tr class="item">
          <td>Amount</td>

          <td><?php echo $currency; ?><?php   echo $amount; ?>.00</td>
        </tr>

        <!--<tr class="item">-->
        <!--  <td>Balance</td>-->

        <!--  <td>$<?php   echo $h_balance; ?>.00</td>-->
        <!--</tr>-->

        <tr class="item last">
          <td>Transaction Description</td>

          <td><?php   echo $trans_discrip.$sender_name ;?></td>
        </tr>
<!-- 
        <tr class="total">
          <td></td>

          <td>Total: $385.00</td>
        </tr> -->
      </tbody></table>
    </div>
  

</body></html>

  
<a class="hide-on-mobile" href="javascript:printPage();"><i class="fa fa-print"></i> Print Page</a>
<!-- <h4 style="color: #28856D; text-align: center; font-weight: bold;">Thank you for your patronage</h4> -->

<script type="text/javascript">
  function printPage() { window.print(); }
</script>
