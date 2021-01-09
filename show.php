<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Show Image in PHP - Campuslife</title>
	<style>
		body{background-color: #f2f2f2; color: #333;}
		.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
		h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
		.img-box{margin-top: 20px;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
	</style>
	</head>

	<body>
		<!-------------------Main Content------------------------------>
		<div class="container main">
			<h3>Showing Images from database</h3>
			<div class="img-box">
           
	
	<?php
	/*-- we included connection files--*/
	include "connection.php";

	$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select img_id,img_path from image_table");
	while($rows = mysqli_fetch_array($image_query))
	{
		$img_id = $rows['img_id'];
		$img_src = $rows['img_path'];
	?>
	
	<div class="img-block">
	<img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_id; ?>" class="img-responsive" />
	<p><strong><?php echo $img_id; ?></strong></p>

	</div>
		 	


	
<?php
	}
?>

			</div>
		</div>
	</body>
	</html>