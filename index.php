<?php

/*------------------------
Coded By Tahi Boumediene.
------------------------*/

include('DB.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
if(!isset($_GET['id'])){
	$arr=array();
$stmt= $pdo->query("SELECT quote_id from content");
	while($row=$stmt->fetch()){
		$arr[]+=$row['quote_id'];
		shuffle($arr);
	}
	shuffle($arr);
	shuffle($arr);
	shuffle($arr);
	shuffle($arr);
	shuffle($arr);
	header("Location: index.php?id=".$arr[0]);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Awesome Quotes</title>
<link rel="stylesheet prefetch" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/goofy.css">

</head>

<body>
<h2>Quote For Today: </h2>
	<?php 
$stmt= $pdo->query("SELECT * from content where quote_id =".$id);
					   while($row=$stmt->fetch()){
echo '<div class="quote">';
echo '<div class="card-box">';
echo '<div class="front">';
echo '<div class="quote-content">"'.$row['quote_content'].'"</div>';
echo '<div class="quote-name">';
echo '<div><br />'.$row["quote_name"].'</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo'<a class="btn" href="/index.php">New Quote</a>';
echo '</div>';
}
?>
</body>

</html>