<?php
$products = array(
				"Electronics" => array(
									"Television" => array(
														array(
															"id" => "PR001", 
															"name" => "MAX-001",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR002", 
															"name" => "BIG-301",
															"brand" => "Bravia"
														),
														array(
															"id" => "PR003", 
															"name" => "APL-02",
															"brand" => "Apple"
														)
													),
									"Mobile" => array(
														array(
															"id" => "PR004", 
															"name" => "GT-1980",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR005", 
															"name" => "IG-5467",
															"brand" => "Motorola"
														),
														array(
															"id" => "PR006", 
															"name" => "IP-8930",
															"brand" => "Apple"
														)
													)
								),
				"Jewelry" => array(
									"Earrings" => array(
														array(
															"id" => "PR007", 
															"name" => "ER-001",
															"brand" => "Chopard"
														),
														array(
															"id" => "PR008", 
															"name" => "ER-002",
															"brand" => "Mikimoto"
														),
														array(
															"id" => "PR009", 
															"name" => "ER-003",
															"brand" => "Bvlgari"
														)
													),
									"Necklaces" => array(
														array(
															"id" => "PR010", 
															"name" => "NK-001",
															"brand" => "Piaget"
														),
														array(
															"id" => "PR011", 
															"name" => "NK-002",
															"brand" => "Graff"
														),
														array(
															"id" => "PR012", 
															"name" => "NK-003",
															"brand" => "Tiffany"
														)
													)				
							)
			)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
<?php include 'header.php';?>
<?php 		
	foreach ($products as $key => $category) {
		echo "<h1 style='color:#673ab7;font-size:70px;'><b>".$key."</b></h1>";
		foreach ($category as $key1 => $Subcategory) {
			echo "<h2 style='color: #FF9800;font-size:50px;'>".$key1."</h2>";
			echo "<div class='row' style='margin:5% 0 5% 15%;'>";
			foreach ($Subcategory as $key2 => $item) {
				if($key=="Jewelry" && $key1=="Earrings"){
					echo '<div class="col-md"><img src="images/e1.png">';
				}
				elseif($key=="Jewelry" && $key1=="Necklaces"){
					echo '<div class="col-md"><img src="images/j1.png">';
				}
				elseif($key=="Electronics" &&  $key1=="Mobile" ){
					echo '<div class="col-md"><img src="images/m3.png">';
				}
				else{
					echo '<div class="col-md"><img src="images/t2.png">'; 

				}
				foreach ($item as $key3 => $subitem) {
					
					echo "<h3 style='padding-left:35px;'>".$subitem."</h3>";
				}
				echo '<button class=" btn-info" >Add To Cart</button>';
				
				echo '</div>';
				
			}
			echo '</div>';
		
		}
	}		
?>
<?php include 'footer.php';?>
</body>
</html