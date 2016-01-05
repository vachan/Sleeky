<?php
  // grab recaptcha library
  require_once "recaptchalib.php";

  // your secret key
  $secret = "6LfbghQTAAAAAG-tcIfwTv00dvw_Ehi1Be_HdA_G";
   
  // empty response
  $response = null;
   
  // check secret key
  $reCaptcha = new ReCaptcha($secret);

  // if submitted check response
  if ($_POST["g-recaptcha-response"]) {
      $response = $reCaptcha->verifyResponse(
          $_SERVER["REMOTE_ADDR"],
          $_POST["g-recaptcha-response"]
      );
  } 
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>

  <body>
  <?php
    if ($response != null && $response->success) {
      echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
    } else {
  ?>
    <form action="" method="post">
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
      <div class="g-recaptcha" data-sitekey="6LfbghQTAAAAAMXE4Cipk44LYqH4S7Ds-aIpG5KE"></div>
 
      <input type="submit" value="Submit" />
 
    </form>
    <?php } ?>
 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>


