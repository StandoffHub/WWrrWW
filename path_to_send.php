<?php
$name  = $_POST['name']; // from input name
$phone = $_POST['phone']; // from input name
// Need security data
$msg   = "Username: {$name}<br>";
$msg   = "Phone: {$phone}<br>";

mail('arturvolod4@gmail.com', 'User submitted the form', $msg); // send to mail, need check
