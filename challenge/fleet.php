<?php include("data.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Cool wheels</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">Cool wheels</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="fleet.php">Our fleet<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="reservation.php">Make reservation</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contacts</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>

	<main>
	
	
	<div class="container">
		<div class="row">
		<?php
		foreach ($fleet as $car => $features) { ?>
				<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 18rem;">
			  <!--<img class="card-img-top" src=".../100px180/" alt="Card image cap">-->
			  <img class="card-img-top"src="<?php echo $features['img'] ?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $car ?></h5>
				    <ul class="list-unstyled">
				    	<li><em>Brand: </em><?php echo $features['brand'] ?></li>
				    	<li><em>Model: </em><?php echo $features['model'] ?></li>
				    	<li><em>Color: </em><?php echo $features['color'] ?></li>
				    	<li><em>Air conditioner: </em><?php echo $features['airCond'] ?></li>
				    	<li><em>Transmission: </em><?php echo $features['trans'] ?></li>
				    	<li><em>Seats: </em><?php echo $features['seats'] ?></li>
				    	<li><em>Price: </em><?php echo $features['price'] ?></li>
				    </ul>
				  </div>
				</div>
				<?php
		}
		?>
		</div>
	</div>
		

			<!-- <div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 18rem;">
					  <img class="card-img-top" src="http://via.placeholder.com/350x250" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  	</div>
			</div>
			
			<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 18rem;">
					  <img class="card-img-top" src="http://via.placeholder.com/350x250" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  	</div>
			</div>
			
			<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 18rem;">
					  <img class="card-img-top" src="http://via.placeholder.com/350x250" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  	</div>
			</div>
			 -->

	</main>
</body>
</html>