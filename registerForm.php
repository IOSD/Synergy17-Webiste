<?php
function Connect()
{
// change here with new db host, user, pass and db name
  // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

require_once('recaptchalib.php');
  $privatekey = "6Le5AxQUAAAAAIaEyNaKxA5__TQ2aCX6x4tcg15D";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
  
$conn    = Connect();

$name = $conn->real_escape_string($_POST['u_name']);
$email = $conn->real_escape_string($_POST['u_email']);
$phone = $conn->real_escape_string($_POST['u_phone']);
$institute = $conn->real_escape_string($_POST['u_institute']);
$dob = $conn->real_escape_string($_POST['u_dob']);
$gender = $conn->real_escape_string($_POST['u_gender']);
$address = $conn->real_escape_string($_POST['u_address']);
$finquest = $conn->real_escape_string($_POST['u_finquest']);
$codewar = $conn->real_escape_string($_POST['u_codewar']);
$hackdtu = $conn->real_escape_string($_POST['u_hackdtu']);
$quedar = $conn->real_escape_string($_POST['u_quedar']);
$team_name = $conn->real_escape_string($_POST['u_team_name']);
$name_hacker2 = $conn->real_escape_string($_POST['u_name_hacker2']);
$email_hacker2 = $conn->real_escape_string($_POST['u_email_hacker2']);
$phone_hacker2 = $conn->real_escape_string($_POST['u_phone_hacker2']);
$name_hacker3 = $conn->real_escape_string($_POST['u_name_hacker3']);
$email_hacker3 = $conn->real_escape_string($_POST['u_email_hacker3']);
$phone_hacker3 = $conn->real_escape_string($_POST['u_phone_hacker3']);
$name_hacker4 = $conn->real_escape_string($_POST['u_name_hacker4']);
$email_hacker4 = $conn->real_escape_string($_POST['u_email_hacker4']);
$phone_hacker4 = $conn->real_escape_string($_POST['u_phone_hacker4']);
$link_codechef = $conn->real_escape_string($_POST['u_link_codechef']);
$link_topcoder = $conn->real_escape_string($_POST['u_link_topcoder']);
$link_codeforces = $conn->real_escape_string($_POST['u_link_codeforces']);
$link_github = $conn->real_escape_string($_POST['u_link_github']);
$link_resume = $conn->real_escape_string($_POST['u_link_resume']);
$link_fb = $conn->real_escape_string($_POST['u_link_fb']);
$thing1 = $conn->real_escape_string($_POST['u_thing1']);
$thing2 = $conn->real_escape_string($_POST['u_thing2']);
$thing3 = $conn->real_escape_string($_POST['u_thing3']);

// insert into finquest table
if(strcmp($finquest,'finquest')==0){
$query   = "INSERT into finquest
(name,email,phone,institute,dob,gender,address,codechef,topcoder,codeforces,github,resume,fb,thing1,thing2,thing3)
VALUES
('" . $name . "','" . $email . "','" . $phone . "','" . $institute . "','" . $dob . "','" . $gender . "','" . $address . "',
'" . $link_codechef . "','" . $link_topcoder . "','" . $link_codeforces . "','" . $link_github . "','" . $link_resume . "','" . $link_fb . "',
'" . $thing1 . "','" . $thing2 . "','" . $thing3 . "')";

$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    }
}

// insert into codewar table
if(strcmp($codewar,'codewar')==0){
$query   = "INSERT into codewar
(name,email,phone,institute,dob,gender,address,codechef,topcoder,codeforces,github,resume,fb,thing1,thing2,thing3)
VALUES
('" . $name . "','" . $email . "','" . $phone . "','" . $institute . "','" . $dob . "','" . $gender . "','" . $address . "',
'" . $link_codechef . "','" . $link_topcoder . "','" . $link_codeforces . "','" . $link_github . "','" . $link_resume . "','" . $link_fb . "',
'" . $thing1 . "','" . $thing2 . "','" . $thing3 . "')";

$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    }
}

// insert into hackdtu table
if(strcmp($hackdtu,'hackdtu')==0){
$query   = "INSERT into hackdtu
(name,email,phone,institute,dob,gender,address,codechef,topcoder,codeforces,github,resume,fb,
  teamname,
  hacker2name, hacker2email, hacker2phone,
  hacker3name, hacker3email, hacker3phone,
  hacker4name, hacker4email, hacker4phone,
  thing1,thing2,thing3)
VALUES
('" . $name . "','" . $email . "','" . $phone . "','" . $institute . "','" . $dob . "','" . $gender . "','" . $address . "',
'" . $link_codechef . "','" . $link_topcoder . "','" . $link_codeforces . "','" . $link_github . "','" . $link_resume . "','" . $link_fb . "',
'" . $team_name . "',
'" . $name_hacker2 . "','" . $email_hacker2 . "','" . $phone_hacker2 . "',
'" . $name_hacker3 . "','" . $email_hacker3 . "','" . $phone_hacker3 . "',
'" . $name_hacker4 . "','" . $email_hacker4 . "','" . $phone_hacker4 . "',
'" . $thing1 . "','" . $thing2 . "','" . $thing3 . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    }
}

// insert into quedar table
if(strcmp($quedar,'quedar')==0){
$query   = "INSERT into quedar
(name,email,phone,institute,dob,gender,address,codechef,topcoder,codeforces,github,resume,fb,thing1,thing2,thing3)
VALUES
('" . $name . "','" . $email . "','" . $phone . "','" . $institute . "','" . $dob . "','" . $gender . "','" . $address . "',
'" . $link_codechef . "','" . $link_topcoder . "','" . $link_codeforces . "','" . $link_github . "','" . $link_resume . "','" . $link_fb . "',
'" . $thing1 . "','" . $thing2 . "','" . $thing3 . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    }
}
$conn->close();
}
?>
<script>
    window.location = 'http://synergy.sddtu.org/#regSuccess';
</script>