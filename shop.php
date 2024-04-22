<?php include "layout/header.php" ?>
<!-- breadcrumbs Section start -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <h1>Shop</h1>
            </div>
        </div>
    </section>
<!-- breadcrumbs Section End -->
<!-- material section start -->
<section class="material material-shop">
    <div class="container">
        <div class="row">
        <?php include "dbconnect/config.php";
                    $query ="SELECT  * FROM addproduct";
                    $result= mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                  
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 material-image">
                    <img src="admin/productimage/<?= $row['image'] ?>" alt="material Image" class="img-fluid">
                    <span class=" brandname"><?= $row['brand']?></span>
                    <div class="d-flex justify-content-between align-items-center pe-5">
                    <h3 class="material-title"><?= $row['productname']?></h3>
                    <strong class="material-price"><?php echo "Rs." .$row['price']?></strong>
                    </div>
                    <button class="btn btn-primary rounded-pill">Add Cart</button>
                    <small class="material-price py-3"><?= $row['description']?></small>
                </div>
                <?php           
                        }
                    } ?>
        </div>
    </div>
</section>
<!-- material section end -->
<?php include "layout/footer.php" ?>