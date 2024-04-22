<?php include 'layout/header.php';
include '../dbconnect/config.php';
$branderr='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['addbrand'])){
        if(empty($_POST['brand']) || $_POST['brand']==''){
            $branderr="*Please Enter your brand";
        }
        else{
          
            $brand = $_POST['brand'];
            $query = "INSERT INTO brandname(brandname) 
            values('$brand')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product addded successfully');
                    window.location.href='brand.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($con);
            }
        }
    }
}
?>
<section class="section-class pb-4">
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Addproduct</h3>
                <form action="" class="row" method="post" class="d-flex flex-wrap">

                    <div class="mb-3 w-50">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Brand:</label>
                        <!-- <input type="text" class="form-control" name="brand" placeholder="Enter your brand name"> -->
                        <select name="brand" id="">
                            <option>--select--</option>
                            <option value="sleepwell">sleepwell</option>
                            <option value="fiber">fiber</option>
                            <option value="plastic">plastic</option>
                        </select>
                        <small style="color:red"><?php echo $branderr;?></small>
                    </div>
                    
                        
                    </div>
                    <div class="mb-3 w-50">
                    <input type="submit" class="btn btn-primary" name="addbrand" value="Add Brand">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'layout/footer.php' ?>