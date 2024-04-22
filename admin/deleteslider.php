<?php include "../dbconnect/config.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "delete from slider where id=$id";
$result = mysqli_query($con,$query);
if($result){
    echo "<script>
            alert('Data Dleted');
            window.location.href='slider.php';
        </script>";
}
}