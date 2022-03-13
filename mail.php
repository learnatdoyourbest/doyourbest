<?php
//get data from form  

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$address= $_POST['address'];
$mailid= $_POST['mailid'];
$course1= $_POST['sbl'];
$course2= $_POST['sal'];

$to = "learn.doyourbest@gmail.com";
$subject = "Mail From DYB";
$txt ="FName = ". $firstname . "\r\n  SName = " . $lastname ."\r\n  Mobile = " . $mobile . "\r\n Address =" . $address;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>