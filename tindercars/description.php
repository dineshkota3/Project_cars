<?php

$id = $_GET['id'];
session_start();
	  
	include_once('includes/conn_set.php'); 	

?>


<!DOCTYPE html>
<html>
<head>
<meta name="tindercars" content="with all cars">
<link rel="stylesheet" href="./css/description.css">

</head>

<body>
	<center>
	<div>
	<?php echo' <img src="./images/'.$id.'.jpg" alt="Forest" width="300" height="200">';?>
	</div>
	</center>
	
	
	<table>
    <thead>
        <tr>
            <th>Properties</th>
            <th>Values</th>
        </tr>
    </thead>
    
    <?php
    
    $sql = "SELECT * FROM carsid WHERE id =";
    $sql = $sql . $id;
	$result = $conn->query($sql);
	
	$row = $result->fetch_assoc();
    
    echo'  <tbody>
        <tr>
            <td> Name</td>
            <td>' .$row["name"] .'</td>
        </tr>
        <tr>
            <td>Year</td>
            <td>'. $row["year"] .'</td>
        </tr>
        <tr>
            <td>Color</td>
            <td>' .$row["color"]. '</td>
        </tr>
        <tr>
            <td>Weight</td>
            <td>' .$row["weight"]. '</td>
        </tr>
        <tr>
            <td>Height</td>
            <td>' .$row["height"]. '</td>
        </tr>
        <tr>
            <td>Dealer</td>
            <td>' .$row["dealer"]. '</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>' .$row["number"]. '</td>
        </tr>
    </tbody>';
    ?>
    
    
</table>
<center><div class="btn">call</div></center>

</body>


</html>


