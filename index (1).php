<?php
include 'connect.php';
if(isset($_POST['submit'])){
   $id=$_POST['id'];
   $name=$_POST['name'];
   $password=$_POST['password'];
   $email=$_POST['email'];

   $sql="INSERT INTO `db_employee` (id, name, password, email) VALUES ('$id', '$name', '$password', '$email')";
   $result=mysqli_query($con,$sql);
   if($result){
    echo "Data inserted";
   }else{
    die(mysqli_error($con));
   }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="number" class="form-control" placeholder="Enter your ID" name="id">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="password">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>
