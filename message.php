<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 15/06/2017
 * Time: 16:30
 */
    require_once "admin/connect_db/db_connection.php";
    if(isset($_POST['send'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $query="insert into strict.staywithat (email, fullname, message) VALUE ('$email','$fullname','$message')";
        $result=mysqli_query($link, $query);
        if($result){
           header("location: strict.php");
        }else{
            echo "fail".mysqli_error($link);
        }
    }
?>