<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<style>
.input-textbody{
	width:100%;
	height:100%;
	margin-right:5px;
}
.head{
	display: flex;
	justify-content:center;
	color:white;
}
.logout{
	margin-left:800px;
	margin-top:20px;
	width: 70px;
	height:20px
}
.logout:hover{
	width: 90px;
	height:30px;
	letter-spacing:1.5;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Welcome</title>
	
	<link rel="stylesheet" type="text/css" href="main.css">
</head>




<body>

<div class="head">
	
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
	
	include("db_conn.php");
    $ss= $_SESSION['username'];

	$query= "SELECT  Diary from `users` WHERE username = '$ss' ";

	$row = mysqli_fetch_array(mysqli_query($conn, $query));
	$dcont = $row["Diary"];
	
	?>
 
    	
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	<button class="logout" onclick ="window.location.href='logout.php';">
     Logout</button>
	
	</div>
	<div class="container">

<textarea id="diary" class="input-textbody"><?php echo $dcont; ?></textarea>
</div>

</body>
</html>
<?php
	include("footer.php");
?>
	