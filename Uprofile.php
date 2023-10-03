<?php
session_start();

include "conn.php";

if(isset($_POST['Update']))
{
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];

    $select="select * from tblregister where id='$id'";
    $sql=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($sql);

    $res=$row['id'];
    if($res === $id)
    {
        $update="UPDATE tblregister SET name='$name',email='$email',username='$username' WHERE id='$id'";
        $sql2=mysqli_query($conn,$update);

        if($sql2)
        {
            header('location:tenant_panel.php');
        }
        else
        {
            echo "error";
            header('location:updateprofile.php');
        }
    }

}

?>