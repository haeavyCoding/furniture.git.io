<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_POST["updateslider"])){
    $id=$_POST['id'];
    $imagename = $_FILES['image']['name'];    
    $tmpname = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname,'productimage/'.$imagename);
    $slidername = $_POST['sname'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $button = $_POST['button'];
    $created_at = $_POST['created_at'];
    $query="Update slider set slidername='$slidername',title='$title',content='$content',button='$button', image='$imagename' where id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your slider added successfully');
            window.location.href='slider.php';
        </script>";
    }else{
        echo "something went wrong".mysqli_error($con);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from slider where id=$id";
    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
?>
<section class="section-class pb-5">
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Update Slider</h3>
                <form class="col-lg-12 row" action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="hidden" value="<?= $row['id']?>" name="id">
                        <input type="text" value="<?= $row['slidername'];?>" class="form-control" name="sname" placeholder="Enter your product name">
                        
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" name="image" value="<?= $row['image'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div><img class="pt-2" src="productimage/<?= $row['image']?>" width='50' height="50"></div>
                        
                    </div>
                   
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Title:</label>
                        <input type="text" value="<?=$row['title']?>" class="form-control" name="title" placeholder="Enter titel name">
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Button:</label>
                        <input type="text" value="<?=$row['button']?>" class="form-control" name="button" placeholder="Enter Button">
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Conten:</label>
                        <textarea class="form-control" name="content" placeholder="Enter content"><?=$row['content']?></textarea>
                    </div>
                    <div class="mb-3 col-lg-12">
                    <input type="submit" class="btn btn-primary form-control" name="updateslider" value="Updateslider">
                        </div>
                </form>
                <?php
                  }
                } 
                ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php
include 'layout/footer.php';
?>