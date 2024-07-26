<!--
<!--
<!--
 <?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "sagarabhishek1399@gmail.com";
$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "gk646208@gmail.com" . "\r\n" .
 
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
 
?>
-->
-->
-->

<?php 
if(isset($_POST[''])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $to="sagarabhishek1399@gmail.com";
    $header="from:$email";
    if(mail($to,$msg,$header)){
        $msg1="Message submitted successfully";
    }
    
}
 
 
