<?php include "layout/header.php";
include "../dbconnect/config.php";?>
<section class="section-class pb-4">
    <div class="container">
        <div class="row">
            <h1 class="text-center py-2">User Contact</h1>
        <table class="table">
        <tr class="table-success">
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Create At</th>
            <th>Response</th>
            <th colspan="2">Action</th>
        </tr>
<?php
$query = "SELECT * FROM contact_user";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['message'];?></td>
            <td><?php echo $row['creat_at'];?></td>
            <td><?php echo $row['response'];?></td>
            <td><a href='<?php echo "contact_update.php?id=$row[id]"; ?>' class="btn btn-warning me-3"><i class="fa-solid fa-user-pen"></i></a></td> 
            <td><a href='<?php echo "contactdelete.php?id=$row[id]"; ?>' class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
    <?php }
} ?>
</table>
        </div>
    </div>
</section>
<?php include "layout/footer.php"?>