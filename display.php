<?php
include 'connect.php';
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
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `db_employee`";
    $result = mysqli_query($con, $sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $password=$row['password'];
        $email=$row['email'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$password.'</td>
        <td>'.$email.'</td>
      </tr>';

      }
    }

    
    ?>




<!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
-->
  </tbody>
</table>

</div>
</body>

</html>
