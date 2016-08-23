<?php

$email = $_POST['email'];

// the message
$msg = "Email: " . $email;

// send email
mail("phunault@gmail.com", "Don't Call It Frisco Newsletter Sign Up", $msg);

?>
