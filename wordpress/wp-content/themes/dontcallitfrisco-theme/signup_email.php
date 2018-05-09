<?php

$email = $_POST['email'];

// the message
$msg = "Email: " . $email;

// $send_to = "matt@vibrantfilms.com";
$send_to = "mattbarkin@gmail.com";

// send email
if ( mail($send_to, "Don't Call It Frisco Newsletter Sign Up", $msg) ){
  $response = "Email successfully registered";
} else {
  $response = "Error: Could not register email";
}

header('Content-Type: application/json');
echo json_encode($response);

?>
