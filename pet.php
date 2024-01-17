<?php 
require_once 'include/login_header.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user = fetch_single_user($user_id);
    extract($user);
  }else{
    header("Location:login.php");
  }


if (isset($_POST['submit'])) {
    $result = login_access($_POST);
    if ($result === true) {
    header("Location: dashboard.php");
  } else {
    $errors = $result;
    extract($errors);
  }
  // var_dump($_POST);
}

 ?>

       <style type="text/css">
        .er{
          color: red;
          font-weight: bold;
        }
      </style>
          <ul>
            <?php if (isset($errors)) { ?>
            <?php if (isset($errors['access_code'])) { ?><li class="er"><?php echo $errors['access_code'] ?></li> <?php  } ?>
            <?php if (isset($errors['incorrect'])) { ?><li class="er"><?php echo $errors['incorrect']; ?></li> <?php  } ?>

            <?php  } ?>
          </ul>


        <!-- id="login_frm" -->
        <form action="" class="sl-form"  method="post">
           <input type="hidden" name="username" value="<?php echo $username; ?>">
          <input type="hidden" name="password" value="<?php echo $password ?>"> 
	     	<div id="result_display" class="result_display"></div>
		    <div id="stepone">
        
          <!-- <div class="form-group">
            <label>User ID *</label>
            <input type="text" class="required" id="login_id" name="username" title="! User ID is required." placeholder="Enter your User ID" autocomplete="off" />
          </div>
          <div class="form-group">
            <label>Password *</label>
            <input type="password" class="required" id="password" name="password" title="! Password is required." placeholder="Enter Password" autocomplete="off" />
          </div> -->
		 </div>
		 <div id="steptwo" >
		     <!--<center><h5>Help Us Confirm You Own This Account</h5></center>-->
		 	<div class="form-group">
				<center><label><b>What is your Pet Name?</b></label></center>
				<input type="text" class="" id="pet_name" name="access_code" placeholder="Enter Pet Name" autocomplete="off" />
			  </div>
		 </div> 
          <!--<div class="form-check">-->
          <!--  <input type="checkbox" class="form-check-input">-->
          <!--  <label class="form-check-label">Remember Password</label>-->
          <!--</div>-->
          <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" name="submit" type="submit"><span class="bh"></span> <span id="main_login_btn"><i class="fas fa-sign-in-alt"></i> Login Securely</span></button>
          <!--<p class="notice">Don't have an account? <a href="#">Signup Now</a></p>-->
        </form>

        <?php 
        require_once 'include/login_footer.php';
         ?>