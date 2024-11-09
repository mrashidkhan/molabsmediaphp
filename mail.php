<?php
//get data from form  
$full_name = $_POST['full_name'];
$email= $_POST['email'];
$phone_number= $_POST['phone_number'];
$lead_business_name= $_POST['lead_business_name'];
$message= $_POST['msg'];
$to = "mrashid2000@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@molabsmedia.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.php");
?>