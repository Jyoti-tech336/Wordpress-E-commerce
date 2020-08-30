<?php 
include'includes/header.php';
include'includes/navbar1.php';
include'includes/navbar2.php';

?>

<!DOCTYPE html>

<html>
<head>
	<title>Slider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/stylepro.css">
	
</head>
<body>

	<div id="content-wrapper">

		<div class="column image ">
		 <?php
 
     $id=$_GET['bid'];
 $select="select * from product where prd_id =$id";
$result=mysqli_query($connection,$select);
     
        while($row=mysqli_fetch_assoc($result)){ ?>
			<img  class="image" id=featured  src="images/<?php echo $row['image1'];?> " >

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="images/<?php echo $row['image1'];?>">
					<img class="thumbnail MagicZoom" src="images/<?php echo $row['image2'];?>">
					<img class="thumbnail" src="images/<?php echo $row['image3'];?>">

				<!--	<img class="thumbnail" src="images/preset1.png">
					<img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg">-->
				</div>

				<img id="slideRight"  class="arrow" src="images/arrow-right.png">
			</div><?php } ?>
		</div>

		<div class="column">
		<?php
		 $id=$_GET['bid'];
 $select="select * from product where prd_id =$id";
$result=mysqli_query($connection,$select);
     
        while($row=mysqli_fetch_assoc($result)){ ?>
			<h1><?php echo $row['prd_name'];?></h1>
            <h5><small class="text-muted"><?php echo $row['small_des'];?></small></h5>
			
			<hr>
			<h3><i class="fa fa-inr fa-sm" aria-hidden="true"></i> <?php echo $row['prd_price'];?></h3>
            <br>
            <ul class="list-group list-group-horizontal">
  <li class="list-group-item" style="border: 2px solid grey;"><a href="">S</a></li>&nbsp;&nbsp;
  <li class="list-group-item" style="border: 2px solid grey;">M</li>&nbsp;&nbsp;
  <li class="list-group-item" style="border: 2px solid grey;">L</li>&nbsp;&nbsp;
  <li class="list-group-item" style="border: 2px solid grey;">XXL</li>
            </ul><br>
             <h5>PRODUCT DETAILS</h5>
			<p><?php echo $row['prd_description'];?></p>
			<br>
			<h5>FEATURES</h5>
			<p><?php echo $row['features'];?></p>
			<br>
		<h5>MATERIAL CARE</h5>
		<p><?php echo $row['material_care'];?></p>

			<input value=1 type="number">
			 <a   href="#"  class="btn btn-danger btn-sm " style=" font-family: 'Roboto', sans-serif; border-radius:15px;">Add to cart</a>
                   <a   href="buy.php"  class="btn btn-danger btn-sm " style=" font-family: 'Roboto', sans-serif;border-radius:15px;">Buy Now</a>
		</div><?php } ?>

    </div>


	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		});


        
        
        
	</script>
	
<br>
  <br>
   <?php include'includes/footer.php';?>
