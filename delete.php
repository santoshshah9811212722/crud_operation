<?php
// include 'connect.php';
$connection=new mysqli('localhost','root','','admission');
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `new` where ID=$id";
$result=mysqli_query($connection,$sql);
if($result){
    // echo "deleted successfully"; 
    header('location:read.php');
}
else{
    echo "not connected to the server";
    die(mysqli_error($connection));
}
}



?>