<?php

// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdeSEoaAAAAAFj7pIudIfKRO8zE-mZEahfOiXQ7',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
          $errors = array();


if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "subgeta@hotmail.com";
    $email_subject = "PORTFOLIO SITE EMAIL";
 
    function died($error) {
        // your error code can go here
        echo "Sorry, but there are error(s) found in the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please review, and fix these errors.<br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject'])) {
        died('Sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($subject) < 2) {
    $error_message .= 'The Message you entered does not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->


<?php
// wait 5 seconds and redirect :)
echo "<meta http-equiv=\"refresh\" content=\"8;url=http://subgeta.com/contact.html\"/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank You! We Will be in touch!</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen|Noto Sans|Noto Sans JP|Roboto|Noto Serif">
</head>
<body class="w3-light-grey"> 
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">
  <!-- Contact section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <div class="container">
        <h2 class="title__pg">
          <strong>THANK YOU!</strong>
          <span>ありがとうございます!</span>
        </h2>
        <p style="text-align: center;"><br />
          Thank you for your message. I'll be in touch with you very soon.<br /><br />
         ご連絡頂きまして、ありがとうございます。すぐにご連絡します。<br /><br />
        </p>
      </div>
<div class="cellgrid">
  <a href="http://www.subgeta.com">
    <div class="triangle">
      <div class="cir"></div>
      <div class="ln1"></div>
      <div class="ln2"></div>
      <div class="sq1"></div>
      <div class="sq2"></div>
      <div class="crs">©</div>
    </div>
  </a>
</div>
    </div>
  </div>
<!-- Footer -->
<!-- Copyright -->
<div class="w3-center">© Juan Arriaga All Rights Reserved.</div>
<!-- End page content -->
</div>

</body>
</html>

 
<?php
}
die();
?>