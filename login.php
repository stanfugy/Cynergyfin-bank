<?php 
require_once 'include/login_header.php';
if (isset($_POST['submit'])) {

  $result = login_user($_POST);

  if ($result === true) {
   
    header("Location: pet.php");
  } else {
    $errors = $result; 
  }
  // var_dump($result);
}

 ?>

      <style type="text/css">
        .er{
          color: red;
          font-weight: bold;
        }
      </style>
       <div class="content-box">
          <h3 style="font-weight: bold">Account Login</h3> <br>
          <!--<p>No matter how coronavirus (COVID-19) is affecting your finances, we’ll be by your side with expert support and guidance.</p>-->
        </div>
          <ul>
            <?php if (isset($errors)) { ?>
            <?php if (isset($errors['invalid_username'])) { ?><li class="er"><?php echo $errors['invalid_username'] ?></li>> <?php  } ?>
            <?php if (isset($errors['username'])) { ?><li class="er"><?php echo $errors['username']; ?></li> <?php  } ?>
            
            <?php if (isset($errors['not'])) { ?><li class="er"><?php echo $errors['not']; ?></li> <?php  } ?>
            
            <?php if (isset($errors['password'])) { ?><li class="er"><?php echo $errors['password']; ?></li> <?php  } ?>
            <?php if (isset($errors['incorrect'])) { ?><li class="er"><?php echo $errors['incorrect']; ?></li> <?php  } ?>

            <?php  } ?>
          </ul>

        <form action="" class="sl-form" method="post">
	     	<div id="result_display" class="result_display"></div>
		    <div id="stepone">
        
          <div class="form-group">
            <label>User ID *</label>
            <input type="text" class="required" id="login_id" name="username" title="! User ID is required." placeholder="Enter your User ID" autocomplete="off" />
          </div>
          <div class="form-group">
            <label>Password *</label>
            <input type="password" class="required" id="password" name="password" title="! Password is required." placeholder="Enter Password" autocomplete="off" />
          </div>
		 </div>

		 <div id="steptwo" >
		  <a href="register.php"><b>Register</b></a> 
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