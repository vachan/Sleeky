<?php
  // grab recaptcha library
  require('recaptcha/autoload.php');

  // your secret key
  $secret = "6LfbghQTAAAAAG-tcIfwTv00dvw_Ehi1Be_HdA_G";
   
  // empty response
  $response = null;
   
  // init 
  $reCaptcha = new \ReCaptcha\ReCaptcha($secret);

  // if submitted check response
  if ($_POST["g-recaptcha-response"] && $_POST["name"] && $_POST["email"]) {
    $resp = $reCaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);
    if ($resp->isSuccess()) {
        echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
    } else {
        $errors = $resp->getErrorCodes();
        echo "$errors";
    }
  } else {
    echo 'You did not fill all form!';
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>

  <body>


    <form action="" method="post">
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
      <div class="g-recaptcha" data-sitekey="6LfbghQTAAAAAMXE4Cipk44LYqH4S7Ds-aIpG5KE"></div>
 
      <input type="submit" value="Submit" />
 
    </form>

 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>