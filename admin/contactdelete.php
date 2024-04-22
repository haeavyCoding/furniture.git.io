<?php 
include "../dbconnect/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="DELETE from contact_user where id=$id";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert ('your data deleted');
            window.location.href='user_contact.php';
        </script>";
    }
    else{
        echo "Somthing went wrong" .mysqli_error($con);
    }
}else{
    header('location:users.php');
}