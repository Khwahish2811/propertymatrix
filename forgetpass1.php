<?php 
session_start();
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="">enter your email</label>
        <input type="text" name="email" id=""><br>
        <input type="submit" value="Submit" name="submit">
        <?php 
        if(isset($_POST["submit"]))
        {
            
            $_SESSION["email"]=$_POST["email"];
            header("location:one.php");
        } 
        ?>
    </form>
</body>
</html>