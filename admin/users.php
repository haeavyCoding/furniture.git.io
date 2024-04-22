<?php include 'layout/header.php'; 
include '../dbconnect/config.php';
?>
<section class="section-class pb-4">
    <div class="container">
        <div class="row">
            <h1 class="text-center py-4">User List</h1>
            <table class="table">
                <thead>
                    <tr class="table-success">
                        <th>#Id</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM users";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result)){

                    ?>

                    <tr>
                        <th><?= $row['id'] ?></th>
                        <td><?= $row['firstname'] ?></td>
                        <td><?= $row['lastname'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['role'] ?></td>
                        <td><?= $row['timestamp'] ?></td>
                        <td><a href='<?php echo "userupdate.php?id=$row[id]"; ?>' class="btn btn-warning me-3"><i class="fa-solid fa-user-pen"></i></a> 
                        <a href='<?php echo "userdelete.php?id=$row[id]"; ?>' class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php
                          }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'layout/footer.php';?>