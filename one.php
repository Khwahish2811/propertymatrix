<?php
    session_start();
    $otp=random_int(10000,99999);
    $to_email=$_SESSION["email"];
    $subject="otp verification";
    $body="hello i am khwahish your otp is $otp";
    $headers="from: 21bmiit040@gmail.com";
    if(mail($to_email,$subject,$body,$headers)){
        $_SESSION["otp"]=$otp;
        echo $_SESSION["otp"];
        header("location:forgetpass.php");
    }
    else{
      
        echo"fail";
    }
?>