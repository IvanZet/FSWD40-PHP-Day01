<?php 
	require "header.php";
	include("data.php");
?>
	
	
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