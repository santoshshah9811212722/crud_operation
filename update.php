
<?php
        $connection=new mysqli('localhost','root','','admission');
        if($connection->connect_error){
            die("connection failed".$connection->connect_error);
        }    
        
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
    

$query="SELECT * FROM `new` where `id`='$id'";
$result=mysqli_query($connection,$query);

if(!$result){
    die("query failed". mysqli_error());
}
else{
    $row=$result->fetch_assoc();
//    print_r($row);
    
}


}

       ?>   


<?php
if(isset($_POST['submit'])){
    if(isset($_GET['idnew'])){
        $idnew=$_GET['idnew'];
    }
    $name=$_POST['name'];
    $class=$_POST['class'];
    $phone=$_POST['phone'];


    $query="UPDATE new SET `name`='$name', `class`='$class' ,`phone`='$phone' where `ID`='$idnew'";
    $result= mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error());
    }
    else{
        header('location:read.php?update=update successful');
    }
     
}
?>

<link rel="stylesheet" href="login.css">

    <form  action="update.php?idnew=<?php echo $id; ?>" method="post" onsubmit="return update()"  class="addmissionform">
    <h1><b>Addmission Form</b></h1>
        <br>
        <h3>update the existing data</h3>
        
        
        <label for="name">Name:
            <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>">
        </label>
        <br><br>
    
        <label for="phone">Phone:
            <input type="number" id="phone" name="phone" value="<?php echo $row['phone'] ?>">
        </label>
        <br>
        <br>

        <label for="class">Class:
            <input type="number" id="class" name="class" value="<?php echo $row['class'] ?>" > 
        </label>
        <br>
        <br>

        <button type="submit"  class="submit" name="submit"  value="" >Submit</button>
       </form>

    <script src="login.js"></script>


