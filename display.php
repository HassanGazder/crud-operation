<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container my-5">
    <a href="user.php"><button class="btn btn-info">Add User</button></a>
    <table class="table table-dark table-striped my-5 text-center">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Password</th>
    <th>Action</th>
  </tr>



</div>
<?php
         $select= "select * from crud";
         $select1 = mysqli_query($conn, $select);
         while($r = mysqli_fetch_array($select1))
         
{
         ?>
         

<tr>
    <td>
        <?php echo $r["ID"]?>
    </td>
    <td>
        <?php echo $r["name"]?>
    </td>
    <td>
        <?php echo $r["email"]?>
    </td>
    <td>
        <?php echo $r["number"]?>
    </td>
    
    <td>
        <?php echo $r["password"]?>
    </td>
 <td>
 <a href="delete.php?id=<?php echo $r["ID"]?>" class="btn btn-danger"> Delete</a>
<button class="btn btn-info"><a href="update.php?id=<?php echo $r["ID"]?>"></a>Update</button>
 </td>

    
</tr>

<?php
}


?>
    </table>
</body>
</html>