<?php include "layout/header.php";
include "../dbconnect/config.php"
?>
<section class="section-class pb-5">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Slider List</h3>
            <a class="btn btn-primary my-2" href="addslider.php">Add Slider</a>
            <table class="table">
                <tr class="table-success">
                   <th>Id</th>
                   <th>Slider Name</th>
                   <th>Image</th>
                   <th>Content</th>
                   <th>Title</th>
                   <th>Button</th>
                   <th>Created At</th>
                   <th colspan="2">Action</th>
                </tr>
                <?php 
                $query = "select * from slider";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td ><?=$row['id']?></td>
                            <td><?=$row['slidername']?></td>
                            <td><img src="productimage/<?=$row['image']?>" alt="image" width="100"></td>
                            <td><?=$row['content']?></td>
                            <td><?=$row['title']?></td>
                            <td><?=$row['button']?></td>
                            <td><?=$row['created_at']?></td>
                            <td><a href="<?php echo "updateslider.php?id=$row[id]"; ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href="<?php echo "deleteslider.php?id=$row[id]"; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>

                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
</section>
<?php include "layout/footer.php";?>