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
        <label for="">Enter Registered email</label>
        <input type="email" name="email" id="" required><br>
        <input type="submit" name="submit" value="submit">
        <?php 
        if(isset($_POST["email"]))
        {
            include "conn.php";
            $query="select email from tblregister where email='".$_POST["email"]."'";
            $result=mysqli_query($conn,$query);

            if($result->num_rows>0)
            {
                $_SESSION["email"]=$_POST["email"];
                $_SESSION["url"]="forget.php";
                echo "<script>window.location='otp.php'</script>";
            }
            else
            {
                echo "<script>alert('email is not registered in the system')</script>";
            }
            
        }
    ?>
    </form>
    
</body>
</html>