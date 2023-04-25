<?php 
@include('config.php');
  session_start();
  if(isset($_POST['loginin'])) {
    $ulemail = mysqli_real_escape_string($conn, $_POST['email']);
    $ulpass = md5($_POST['pass']);
    echo "<meta http-equiv='refresh' content='0'>";
    $select = "SELECT * FROM user WHERE uemail='$ulemail' && upass='$ulpass';";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        // $row = mysqli_fetch_assoc($result);
        //  echo $row['uemail'];
        //  $_SESSION['passenger_name'] = $row['usrname'];
        header('location:./start.php');
    } else{
        $error = 'incorrect email or password!';
        // echo "<script>toastr.error('Incorrect Pass')</script>";
        $_SESSION['error']=$error;
        header('location:./index.php');
    }
  };
  if(isset($_POST['signin'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $uphone = mysqli_real_escape_string($conn, $_POST['uphone']);
    $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
    $upass = md5($_POST['upass']);
    echo "<meta http-equiv='refresh' content='0'>";
    $select = "SELECT * FROM user WHERE uemail ='$uemail' && upass='$upass';";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0) {
      echo "<script type='text/javascript'>toastr.warning('User exists');</script>";
      $_SESSION['error']=$error;
      $error=('user exists');
    } else {
      // if(phonevalidator((int)$uphone) && emailvalidator($uemail)){
      // if(phonevalidator((int)$uphone) && emailvalidator($uemail)){
        $insert = "INSERT INTO user(uname,uemail,uphone,upass) VALUES('$uname','$uemail','$uphone','$upass');";
        $a = mysqli_query($conn, $insert);
        // echo $a;
        if($a) {
          echo "<script type='text/javascript'>toastr.success('User Created');</script>";
        } else {
          echo "<script type='text/javascript'>toastr.error('Error');</script>";
          $error='Error';
        }
        header('./index.php');
      } 
    };
  function phonevalidator($uphone) {
    $ch = curl_init();
    // Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, 'https://phonevalidation.abstractapi.com/v1/?api_key=581bd3e5ff54496a9055c4cccaf916c3&phone=+91'.$uphone);
    // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Close the cURL handle.
    curl_close($ch);
    
    // Print the data out onto the page.
    // echo $data;
    if(strpos($data, "\"valid\":true")) {
      return 1;
    } else { echo "<script type='text/javascript'>toastr.error('Phone Num error');</script>";return 0;}
  }
  function emailvalidator($uemail) {
    // Initialize cURL.
    $ch = curl_init();

    // Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, 'https://emailvalidation.abstractapi.com/v1/?api_key=5b9088679f5743f69f9a92640327bed2&email='.$uemail);

    // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Close the cURL handle.
    curl_close($ch);
    // Print the data out onto the page.
    if(strpos($data, '"is_valid_format":{"value":true')) {
      return 1;
    } else {echo"<script type='text/javascript'>toastr.error('Email Id error');</script>";return 0;} 
                
  }       
              
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/pass_icon_logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/pass_icon_logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/pass_icon_logo/favicon-16x16.png">
    <link rel="manifest" href="./assets/pass_icon_logo/site.webmanifest">
    <title>User Signin/SignUp</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <p><?php
            // session_start();
              if(isset($_SESSION['error'])){
                $error=$_SESSION['error'];
                if(isset($error)){
                  foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                  };
              }
              }
              unset($_SESSION['error']);
            ?></p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="loginin" />
            <!-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
          <form method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="uname" required/>
            </div>
            <!-- <div class="input-field">
              <i class="fas fa-id-card"></i>
              <input type="text" placeholder="Aadhar" name="uaadhar" required/>
            </div> -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="uemail" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="tel" placeholder="Phone" name="uphone" required/>
            </div>
            <!-- <select name="ugender" style="text-align: center;" class="input-field" required>
              <option value="#" selected disabled>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Prefer not to say</option>
            </select> -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="upass" required/>
            </div>
            <div id="terms">
            <input type="checkbox" value="*Terms and conditions apply" required />
            <label><a href="terms.php" target="_blank">Terms and conditions</a> apply</label>
            </div>
            <input type="submit" class="btn" value="Sign up" name="signin"/>
            <!-- <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1 style="text-decoration">RED</h1>
            <br>
            <h3>New here ?</h3>
            <p>
              We welcome you to begin your journey with us...
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="./assets/svgs/log2.webp" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
          <h1 style="text-decoration">RED</h1>
          <br>
            <h3>One of us ?</h3>
            <p>
              Pick up where you left off.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="./assets/svgs/pm.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(function () {
            toastr.options.showMethod = 'slideDown';
            toastr.options.hideMethod = 'slideUp';
            toastr.options.closeMethod = 'slideUp';
            toastr.options.progressBar = true;
            toastr.options.preventDuplicates = true;
        })
    </script>
    <footer>
    <center>	<p>copyrights RED &copy;</p></center>
	</footer>
  </body>
</html>
