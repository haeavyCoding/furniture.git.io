<?php include 'layout/header.php';
include '../dbconnect/config.php' ?>
<section class="section-class pb-4">
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center pt-3 d-flex justify-content-center">Product List</h3>
                <a href="addproduct.php" class="btn btn-primary my-2">Add product</a>
                <table class="table">
                        <tr class="table-success">
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">productimage</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created_at</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    <?php
                        $query="Select * from addproduct";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){  
                    ?>
                        <tr>
                            <td scope="row"><?= $row['pid'];?></td>
                            <td><?= $row['productname'];?></td>
                            <td><?= $row['category'];?></td>
                            <td><?= $row['brand'];?></td>
                            <td><?= $row['price'];?></td>
                            <td><img src="productimage/<?= $row['image']?>" height="50px" width="50px" alt=""></td>
                            <td><?= $row['description'];?></td>
                            <td><?= $row['created_at'];?></td>
                            <td><a href="<?php echo "updateproduct.php?id=$row[pid]"; ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href="<?php echo "deleteproduct.php?id=$row[pid]"; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'layout/footer.php' ?>