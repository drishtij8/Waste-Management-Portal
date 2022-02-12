<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}
td
{
	border-style:solid;

border-width:2px;

border-color:pink;
}

</style>
<h1>CUSTOMER REPORTS</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "prince0308";
$dbname = "android";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select * from test";

$result = $conn->query($sql);

//if ($result->num_rows > 0) {
	
	?>
   
<?php
    while($row = $result->fetch_assoc()) {
    	?>
<table class="table table-striped">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Name</th>
        <th>IMAGE</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Status</th>
    </tr>
</thead>
    	
    	<tbody>
         <tr>
             <td><?php echo $row["id"];?></td>
             <td><?php echo $row["image_name"];?></td>
             <td><?php echo $row["image_path"];?></td>
             <td><?php echo $row["lat"];?></td>
             <td><?php echo $row["long"];?></td>
             <td><button type="button" class="btn btn-success">Accept</button></td>

             <br>	
         </tr>
     </table>
     <?php
        /*echo "id: ";
        echo $row["id"] ;
        echo " - Name: "; 
        echo $row["image_name"];
        echo  " lat :";
        echo $row["lat"];
        echo "longitude";
        echo $row["long"];
         "<br>";*/
        
    }
//}
/*else {
    echo "0 results";
}*/
$conn->close();
?>
</html>