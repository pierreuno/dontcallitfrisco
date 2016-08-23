<?php

$email = $_POST['email'];

// the message
$msg = "Email: " . $email;

// send email
mail("matt@vibrantfilms.com", "Don't Call It Frisco Newsletter Sign Up", $msg);

?>
