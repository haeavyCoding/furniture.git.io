<?php include 'layout/header.php';
include '../dbconnect/config.php';
$slidernameerr=$contenterr=$titleerr=$imageerr=$buttonerr='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['addslider'])){ 
        if(empty($_POST['slidername']) || $_POST['slidername']==''){
            $slidernameerr="*Please Enter slider name";
        }else if(empty($_POST['content']) || $_POST['content']==''){
            $contenterr="*Please Enter content";
        }else if(empty($_POST['title']) || $_POST['title']==''){
            $branderr="*Please Enter title";
        }else if((empty($_FILES['image']['name']) || $_FILES['image']['name']=='')){
            $imageerr="*Enter your image";
        }else if(empty($_POST['button']) || $_POST['button']==''){
            $buttonerr="*Please Enter button";
        }
        else{
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'productimage/'.$imagename);
            $slidername = $_POST['slidername'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $description = $_POST['content'];
            $sliderbutton = $_POST['button'];
            $query = "INSERT INTO slider(slidername,image,title,content,button) 
            values('$slidername','$imagename','$title','$description','$sliderbutton')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('slider addded successfully');
                    window.location.href='slider.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($con);
            }
        }
    }
}
?>
<section class="section-class pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Add Slider</h3>
                <form action="" class="row" method="post" enctype="multipart/form-data" class="d-flex flex-wrap">
                    <div class="mb-3">
                        <label for="slidername" class="form-label fw-bold">Slider Name:</label>
                        <input type="text" class="form-control" name="slidername" placeholder="Enter your product name">
                        <small style="color:red"><?php echo $slidernameerr;?></small>
                    </div>
                    <div class="mb-3">
                        <label for="sliderimage" class="form-label  fw-bold">Slider Image:</label>
                        <input type="file" name="image" class="form-control" id="sliderimage" aria-describedby="emailHelp">
                        <!-- <small style="color:red"><?php echo $imageerr;?></small> -->
                    </div>
    
                    <div class="mb-3">
                        <label for="title" class="form-label  fw-bold">Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter your productprice name">
                        <small style="color:red"><?php echo $titleerr;?></small>
                    </div>

                    <div class="mb-3">
                        <label for="button" class="form-label  fw-bold">Button:</label>
                        <input type="text" class="form-control" name="button" placeholder="Enter slider button name">
                        <small style="color:red"><?php echo $buttonerr;?></small>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label  fw-bold">Content:</label>
                        <textarea class="form-control" cols="30" rows="10" name="content" placeholder="Enter your description name"></textarea>
                        <small style="color:red"><?php echo $contenterr;?></small>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="addslider">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'layout/footer.php' ?>