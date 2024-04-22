<?php include 'layout/header.php';
include '../dbconnect/config.php';


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $response=$_POST['response'];
   
    $query="UPDATE contact_user set name='$firstname',lastname='$last',email='$email',message='$message',response='$response' where id=$id";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('response send successfully');
            window.location.href='user_contact.php';
        </script>";
    }else{
        echo mysqli_error($con);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from contact_user where id=$id";
    $selectresult=mysqli_query($con,$select);
    if(mysqli_num_rows($selectresult)){
        $row=mysqli_fetch_assoc($selectresult);
            
?>
<section class="section-class">
    <div class="container">
        <div class="row">
        <h2 class="text-center">Contact Update</h2>
            <div class="col-lg-2 "></div>
            <div class="col-lg-8 contact-info">
                <form class="row g-3 mt-4" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="hidden" value="<?=$row['id']?>" name="id">
                        <input type="text" value="<?=$row['name']?>" class="form-control new-field" id="first_name" name="first_name">
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" value="<?=$row['lastname']?>" class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="text" value="<?=$row['email']?>" class="form-control new-field" id="inputPassword2" name="email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="message">Message</label>
                        <textarea value="<?=$row['message']?>" class="form-control new-field" id="message" name="message" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="response">Response</label>
                        <textarea value="<?=$row['response']?>" class="form-control new-field" id="message" name="response" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input class="btn btn-dark mt-4 mb-5 px-5 py-2 rounded-pill " name="update" value="Update" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php 
    }
}else{
    header('Location:users.php');
}
include 'layout/footer.php' ?>