<?php

if(isset($_POST['contact-submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $send_email = "insafinhaam732@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recieved an E-mail from ".$name. ".\n\n".$message;

    mail($send_email, $subject, $txt, $headers);
    header("location: ../index.html");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}