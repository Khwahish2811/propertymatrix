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
    // echo $select;
    $res=$row['id'];
    // echo $res;
    if($res === $id)
    {
        $update="UPDATE tblregister SET name='".$name."',email='$email',username='$username' WHERE id='".$res."'";
        $sql2=mysqli_query($conn,$update);

        if($sql2)
        {
            header('location:tenant_panel.php');
            // echo $update;
        }
        else
        {
            echo "error";
            header('location:updateprofile.php');
        }
    }

}

    // $id=$_SESSION['id'];

    // $stmt=$conn->prepare("SELECT * FROM tblregister WHERE id='$id'");
    // $stmt->bind_param(':id',$id);
    // $stmt->execute();
    // $data=$stmt->fetch();

    // if($_SERVER["REQUEST_METHOD"]=="POST")
    // {
    //     $NewName=$_POST['name'];
    //     $NewEmail=$_POST['email'];
    //     $NewUsername=$_POST['username'];

    //     $updatestmt=$conn->prepare("UPDATE tblregister SET name=:NewName, email=:NewEmail, username=:NewUsername WHERE id=$id");
    //     $updatestmt->bind_param(':NewName',$NewName);
    //     $updatestmt->bind_param(':NewEmail',$NewEmail);
    //     $updatestmt->bind_param(':NewUsername',$NewUsername);
    //     $updatestmt->bind_param(':id',$id);

    //     if($updatestmt->execute())
    //     {
    //         echo "Profile updated succesfully!";
    //     }
    //     else
    //     {
    //         echo "Error updating profile";
    //     }

    // }



?>