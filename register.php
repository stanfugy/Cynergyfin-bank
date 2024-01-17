<?php 
require_once 'include/login_header.php';
if (isset($_POST['submit'])) {

  $result = reg($_POST,  $_FILES['picture']);

  if ($result === true) {
   
  echo '<script>
    alert("Successful, Your account has been created");
       window.location.href = "login.php";
</script>';      

}
}

 ?>
      <style type="text/css">
        .er{
          color: red;
          font-weight: bold;
        }
      </style>
       <div class="content-box">
          <h3 style="font-weight: bold">Open Account</h3> <br>
          <!--<p>No matter how coronavirus (COVID-19) is affecting your finances, we’ll be by your side with expert support and guidance.</p>-->
        </div>
          <ul>
            <?php if (isset($errors)) { ?>
            <?php if (isset($errors['invalid_username'])) { ?><li class="er"><?php echo $errors['invalid_username'] ?></li>> <?php  } ?>
            <?php if (isset($errors['username'])) { ?><li class="er"><?php echo $errors['username']; ?></li> <?php  } ?>
            <?php if (isset($errors['password'])) { ?><li class="er"><?php echo $errors['password']; ?></li> <?php  } ?>
            <?php if (isset($errors['incorrect'])) { ?><li class="er"><?php echo $errors['incorrect']; ?></li> <?php  } ?>

            <?php  } ?>
          </ul>

        <form action="" class="sl-form" method="post" enctype="multipart/form-data">
        <div id="result_display" class="result_display"></div>
        <div id="stepone">
        <!-- begin -->

          <div class="form-group">
            <label>Surname *</label>
            <input type="text" class="required" id="login_id" name="surname" title="! Surname is required." placeholder="Enter your Surname" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Firsrname *</label>
            <input type="text" class="required" id="login_id" name="firstname" title="! Firsrname is required." placeholder="Enter your Firsrname" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Email *</label>
            <input type="text" class="required" id="login_id" name="email" title="! email is required." placeholder="Enter your email" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Phone *</label>
            <input type="text" class="required" id="login_id" name="phone" title="! Phone is required." placeholder="Enter your phone number" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Gender *</label>
            <input type="text" class="required" id="login_id" name="gender" title="! User ID is required." placeholder="Enter your User ID" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Address *</label>
            <input type="text" class="required" id="login_id" name="address" title="! address is required." placeholder="Enter your Address" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Country *</label>
            <input type="text" class="required" id="login_id" name="country" title="! Country is required." placeholder="Enter your Country" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>State *</label>
            <input type="text" class="required" id="login_id" name="state" title="! State is required." placeholder="Enter your State" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Date Of Birth*</label>
            <input type="text" class="required" id="login_id" name="dob" title="! Date of birth is required." placeholder="Enter your Date of birth" autocomplete="off" />
          </div>

            

           <div class="form-group">
            <label>Account Type *</label>
            <input type="text" class="required" id="login_id" name="account_type" title="! Account Type is required." placeholder="Enter Account Type" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Next of Kin *</label>
            <input type="text" class="required" id="login_id" name="next_kin" title="! Next of Kin is required." placeholder="Enter your Next of Kin" autocomplete="off" />
          </div>

           <div class="form-group">
            <label>Passport Photo *</label>
            <input type="file" class="required" id="login_id" name="picture" title="! Next of Kin is required." placeholder="Enter your Next of Kin" autocomplete="off" />
          </div>


            <div class="form-group">
            <label>Username*</label>
            <input type="text" class="required" id="login_id" name="username" title="! Username is required." placeholder="Enter your Username" autocomplete="off" />
          </div>

            <div class="form-group">
            <label>Password *</label>
            <input type="text" class="required" id="login_id" name="password" title="! Password is required." placeholder="Enter your password" autocomplete="off" />
          </div>

           
      <!-- end -->
     <div id="steptwo" >
      <a href="login.php"><b>Login</b></a> 
     </div> 
          <!--<div class="form-check">-->
          <!--  <input type="checkbox" class="form-check-input">-->
          <!--  <label class="form-check-label">Remember Password</label>-->
          <!--</div>-->
          <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" name="submit" type="submit"><span class="bh"></span> <span id="main_login_btn"><i class="fas fa-sign-in-alt"></i> Open Account Securely</span></button>
          <!--<p class="notice">Don't have an account? <a href="#">Signup Now</a></p>-->
        </form>

        <?php 
        require_once 'include/login_footer.php';
         ?>