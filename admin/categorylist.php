<?php include 'layout/header.php';
include '../dbconnect/config.php' ?>
<section class="section-class pb-4">
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center pt-3 d-flex justify-content-center">Category List</h3>
                <table class="table">
                        <tr class="table-success">
                            <th scope="col">ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Created_at</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    <?php
                        $query="Select * from category";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){  
                    ?>
                        <tr>
                            <td scope="row"><?= $row['id'];?></td>
                            <td><?= $row['category'];?></td>
                            <td><?= $row['create_at'];?></td>
                            <td><a href="<?php echo "updatecategory.php?id=$row[id]"; ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href="<?php echo "deletecategory.php?id=$row[id]"; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
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