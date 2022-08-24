<?php
include 'connect.php';
if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$password =md5( $_POST["password"]);
	if($name == "" || $email == "" || $number == "" || $password == "")
        {
            echo '<center><div class="alert alert-danger w-50 mt-5" role="alert">
			Please fill All These Feilds
		  </div></center>';
        }
        else
        {
            $insert = "insert into crud(name,email,number,password) 
            values ('".$name."','".$email."','".$number."','".$password."')";
            $insert1 = mysqli_query($conn,$insert);
if($insert1){
    echo header("location:display.php");
}
else{
    echo "not inserted";
}
        }
 
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form method="post" class="my-5">
        <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
        <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">number</label>
                <input type="text" class="form-control" name="number">
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
          
           <a href="display.php"> <button type="submit" class="btn btn-primary" name="submit">Submit</button></a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>