<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_POST["updatebrand"])){
    $id=$_POST['id'];
    $brandname = $_POST['brand'];
    $query="Update  brandname set brandname='$brandname' where id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your product addded successfully');
            window.location.href='brand.php';
        </script>";
    }else{
        echo "something went wrong".mysqli_error($con);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from brandname where id=$id";
    $result=mysqli_query($con,$select);
    // print_r($result);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result);
?>
<section class="section-class pb-5">
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Update Brand</h3>
                <form class="col-lg-12 row" action="" method="post" >
                       
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Brand:</label>
                        
                        <select name="brand" id="">
                            <option>--select--</option>
                            <?php 
                            $brandquery = "select * from brandname";
                            $brandres = mysqli_query($con,$brandquery);
                            if(mysqli_num_rows($brandres)>0){
                                while($brand= mysqli_fetch_assoc($brandres)){ ?>
                                    <option <?php echo $row['brandname']==$brand['brandname']?'selected':'' ?> value="plastic"><?= $brand['brandname'];?></option>
                            <?php        
                                }
                            }
                           ?>
                            
                        </select>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                    <input type="submit" class="btn btn-primary form-control" name="updateproduct" value="Updateproduct">
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