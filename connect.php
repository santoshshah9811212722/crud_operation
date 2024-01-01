
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_into_database</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<?php
$name=$_POST['name'];
$class=$_POST['class'];
$phone=$_POST['phone'];

// now connecting to the database
$conn=new mysqli('localhost','root','','admission');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into new(name,class,phone)value(?,?,?)");
    $stmt->bind_param("sii",$name,$class,$phone);
    $stmt->execute();
    header("location:read.php");
    $stmt->close();
    $conn->close(); 
}
?>  
</body> 
</html>
