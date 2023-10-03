<?php 
session_start();
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
    <label for="">Enter Password</label>
    <input type="password" name="password"><br>
    <label for="">Entr otp</label>
    <input type="text" name="otp"><br>
    <input type="submit" value="Submit" name="submit">
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        echo "1";
        echo $_POST["otp"];
        echo $_SESSION["otp"];
        if($_POST["otp"]==$_SESSION["otp"])
        {
            echo "2";
            $conn=mysqli_connect("localhost","root","","nbm");
            $query="update tblregister set password='".$_POST["password"]."' where email='".$_SESSION["email"]."'";
            echo $query;
            $result=mysqli_query($conn,$query);
            if($result)
            {
                header("location:index.html");
            }
        }
        else
        {
            echo "fail";
        }
    }
    ?>
    </form>
</body>
</html>