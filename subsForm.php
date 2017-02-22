<?php

function Connect()
{
  // change here with new db host, user, pass and db name
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}


$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$phone = $conn->real_escape_string($_POST['u_phone']);
// change here with new table name
$query   = "INSERT into subs (name,email,phone) VALUES('" . $name . "','" . $email . "','" . $phone . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
// change here with new host location
header('Location: http://synergy.sddtu.org/index.html#subsSuccess');
$conn->close();

?>
