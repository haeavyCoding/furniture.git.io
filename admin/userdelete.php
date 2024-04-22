<?php 
include "../dbconnect/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="delete from users where id=$id";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert ('your data deleted');
            window.location.href='users.php';
        </script>";
    }
    else{
        echo "Somthing went wrong" .mysqli_error($con);
    }
}else{
    header('location:users.php');
}