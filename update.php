<?php
include 'connect.php';

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    //$id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $sql="update `employee_tab` set name='$name', password='$password', email='$email' where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data Updated";
    }else{
        die(mysqli_error($conn));
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
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>
