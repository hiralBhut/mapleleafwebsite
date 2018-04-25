
<?php 
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = $_POST['email']; 
  $to = "info@hiralbhut.thecompletewebhosting.com"; 
  $subject = 'Message from client ';
    
    $body = "From: $name.\n"."E-Mail: $email\n"."Message:\n $message";
    $headers = "From: $from \r\n";
    $headers .= "Reply-To: $email \r\n";

  
  if (!$_POST['name']) {
      $errName = '<p>Please enter your name!</p>';
      $errors .=$errName;
      
    }

  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = '<p>Please enter a valid email address!</p>';
      $errors .= $errEmail;
    }

  if (!$_POST['message']) {
      $errMessage = '<p>Please enter your message!</p>';
      $errors .= $errMessage;
    }

if($errors){
    $resultmessage = '<div class="alert alert-danger text-center">' . $errors . ' </div>';
    echo $resultmessage;
}

  // If there are no errors, send the email
   if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
      
    if (mail ($to, $subject, $body, $headers)) {
      $result='<div class="alert alert-success text-center">Thank You! I will be in touch</div>';
      echo $result;
      $_POST = array();
    } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
      echo $result;
    }
  }



?>