<?php
	session_start();
	  
	include_once('includes/conn_set.php'); 	
	

?>

<!DOCTYPE html>
<html>
<head>
<meta name="tindercars" content="with all cars">

<link rel="stylesheet" href="./css/styling.css">



</head>

<?php
	$sql = "SELECT * FROM carsid";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		echo '<body> <div id="container" >';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="buddy" href = "/tindercars/description.php?id=' .$row["id"] . '" style="display: block;"><div class="avatar"  style="display: block; background-image: url(./images/' . $row["id"] . '.jpg)"></div></div>';
    }
    echo '</div></body>';
} else {
    echo "0 results";
}
?>

<script src="./js/test.js"></script>

</html>
