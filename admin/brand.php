<?php include 'layout/header.php';
include '../dbconnect/config.php' ?>
<section class="section-class pb-4">
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center pt-3 d-flex justify-content-center">Product List</h3>
                <table class="table">
                    <tr><td colspan="5"><a href="addbrand.php">Add Brand</a></td></tr>
                        <tr class="table-success">
                            <th scope="col">Product ID</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Created_at</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    <?php
                        $query="Select * from brandname";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){  
                    ?>
                        <tr>
                            <td scope="row"><?= $row['id'];?></td>
                            <td><?= $row['brandname'];?></td>
                            <td><?= $row['timestamp'];?></td>
                            <td><a href="<?php echo "updatebrand.php?id=$row[id]"; ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href="<?php echo "deletebrand.php?id=$row[id]"; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
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