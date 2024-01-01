<!-- #include(header); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
   
   
</head>
<body>
 <h1 class="head">List of New Admission</h1>
 

 <form  action="new_addmission.html" >
   <button  type="submit" class="add" >Add</button>
   </form> 
   
   <table class="table" >
      <thead>
        
        <tr>
          <th>s No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        </tr>
      </thead>

        <tbody>

         

          <?php
         /* this is processwise connection to the db xampp server~~
          $servername="localhost";
          $username="root";
          $password="";
          $database="admission";
          $connection= new mysqli($servername,$username,$password,$database);
          */
// connection established
$connection=new mysqli('localhost','root','','admission');

// check connection established is correct or not
if($connection->connect_error){
  die("connection failed: ".$connection->connect_error);
}

// select the table name
$sql="SELECT * FROM new";
$result=$connection->query($sql);
if(!$result){
  die("invalid query : ". $connection->error);
}

while($row=$result->fetch_assoc())
{
  $id=$row["ID"];
  $name=$row["name"];
  $phone=$row["phone"];
  $class=$row["class"];
 
  echo  "<tr>
          <td>" .$id. "</td>
          <td>" .$name. "</td>
          <td> " .$phone. "</td>
          <td>".$class."</td>

          <td> 
          <button > <a href='update.php?updateid=$id'>update</a> </button>
          </td>

          <td>
          <button type='submit'> <a href='delete.php?deleteid=$id'>Delete</a> </button>
          </td>
        </tr>";
}
       ?> 
      </tbody>
    </table> 
  
    <!-- <script src="login.js"></script> -->
  </body>
  </html>
 