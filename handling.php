<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $sql="Insert Into EMPLOYEES (fullname, email, address) values('".$fullname."','".$email."','".$address."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['sua'])) {
    $id=$_GET['id'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $sql = "UPDATE EMPLOYEES SET fullname = '".$fullname."', email = '".$email."', address = '".$address."' WHERE id = $id"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $id=$_GET['id'];
    $sql="DELETE FROM EMPLOYEES WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>
