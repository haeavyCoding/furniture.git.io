<?php include "layout/header.php";

session_start();
if(!isset($_SESSION['id'])){
    header('Location:login.php');
}
?>
<section class="padding-block">
    <div class="container">
        <div class="row">
        <a href="logout.php">Logout</a>
        </div>
    </div>
</section>

<?php include "layout/footer.php";?>