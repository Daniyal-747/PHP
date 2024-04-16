<?php
      include("../config/one.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <table class="table table-bordered text-center">
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
<?php
            $sql = "select * from employee";
            $result = mysqli_query($conn , $sql);

            while($rows = mysqli_fetch_assoc($result)){
?>                

           <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['name'] ?></td>
            <td><?php echo $rows['email'] ?></td>
            <td><?php echo $rows['password'] ?></td>

           <?php
                  echo "<td><img src=\"images/{$rows['image']}\" height=50px;></td>"
           ?>

            </tr>
         
<?php } ?>

    </table>
</div>