<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_POST["updateproduct"])){
    $id=$_POST['pid'];
    $imagename = $_FILES['image']['name'];    
    $tmpname = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname,'productimage/'.$imagename);
    $productname = $_POST['productname'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $created_at = $_POST['created_at'];
    $query="Update  addproduct set productname='$productname',category='$category',brand='$brand',price='$price', image='$imagename',description='$description',created_at='$created_at' where pid=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your product addded successfully');
            window.location.href='product.php';
        </script>";
    }else{
        echo "something went wrong".mysqli_error($con);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="select * from addproduct where pid=$id";
    $result=mysqli_query($con,$select);
    // print_r($result);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
?>
<section class="section-class pb-5">
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Addproduct</h3>
                <form class="col-lg-12 row" action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="hidden" value="<?= $row['pid']?>" name="pid">
                        <input type="text" value="<?= $row['productname'];?>" class="form-control" name="productname" placeholder="Enter your product name">
                        
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" name="image" value="<?= $row['image'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div><img class="pt-2" src="productimage/<?= $row['image']?>" width='50' height="50"></div>
                        
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Category:</label>
                        
                        <select name="category" id="">
                            <option>--select--</option>
                            <?php 
                            $cat = "select * from category";
                            $res = mysqli_query($con,$cat);
                            if(mysqli_num_rows($res)>0){
                                while($category= mysqli_fetch_assoc($res)){ ?>
                                    <option <?php echo $row['category']==$category['categoryname']?'selected':'' ?> value="plastic">plastic</option>
                            <?php        
                                }
                            }
                           ?>
                            
                        </select>
                       
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
                                    <option <?php echo $row['brandname']==$brand['brandname']?'selected':'' ?> value="plastic">plastic</option>
                            <?php        
                                }
                            }
                           ?>
                            
                            <option <?php echo $row['brand']=='plastic'?'selected':'' ?> value="plastic">plastic</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">TotalPrice:</label>
                        <input type="text" value="<?=$row['price']?>" class="form-control" name="price" placeholder="Enter your productprice name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?=$row['description']?>" class="form-control" name="description" placeholder="Enter your description name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?=$row['created_at']?>" class="form-control" name="created_at" placeholder="Enter your description name">
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