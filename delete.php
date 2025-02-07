<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employee_tab` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data Deleted";
    }else{
        die(mysqli_error($conn));
    }
}

?>