<?php

$email = $_POST['email'];

// the message
$msg = "Email: " . $email;

// send email
if ( mail("matt@vibrantfilms.com", "Don't Call It Frisco Newsletter Sign Up", $msg) ){
  $response = "Email successfully registered";
} else {
  $response = "Error: Could not register email";
}

header('Content-Type: application/json');
echo json_encode($response);

?>
