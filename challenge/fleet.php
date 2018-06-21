<?php 
	require "header.php";
	require "modal.php";
	include("db.php");

?>
<link rel="stylesheet" href="css/style_fleet.css">
		<div class="wrapper">
    	<?php
					// $data = 'SELECT * FROM vehicles';
					// $result = mysqli_query($conn, $data);
					
					// while($row = mysqli_fetch_array($result)){
					// 				echo "<p>".$row['brand']."</p>";
					// 				echo "<p>".$row['model']."</p>";

					// }
					$statement = "SELECT * FROM vehicles";
					$result = $conn->query($statement);
				// Check data are and throw an error if there would be a mistake
					if (!$result) {
								$outputDisplay .= "<p>MySQL No: " . $conn->errno . "</p>";
								$outputDisplay .= "<p>MySQL Error: " . $conn->error . "</p>";
								$outputDisplay .= "<p>SQL Statement: " . $statement . "</p>";
								$outputDisplay .= "<p>MySQL Affected Rows: " . $conn->affected_rows . "</p>";
								echo "fail";
					} 
					$rows = $result->fetch_all(MYSQLI_ASSOC);
					foreach($rows as $row){?>
						<div class="item">
							<div class="item-img-container">
								<img src="<?= $row['img'] ?>" alt="<?= $row['model'] ?> Image">
							</div>
							<div class="item-header-container">
								<div class="item-header-headline-container">
									<p class="item-headline"><?= $row['model'] ?></p>
									<p class="item-headline-two"><?= $row['brand'] ?></p>
								</div>
								
								<div class="item-header-subtitle">
									<p><?= $row['type'] ?></p>
									<p><i class="fas fa-snowflake"></i><?= $row['airCon'] ?></p>
									<p><i class="fas fa-cogs"></i><?= $row['transmittion'] ?></p>
									
									<p><i class="fas fa-user"></i><?= $row['seats'] ?></p>
									<p><i class="fas fa-suitcase"></i><?= $row['bags'] ?></p>
								</div>
							</div>
							
							
							<div class="item-price-container">
								<div class="item-price-container-inside">
									<p class="item-price"><?= $row['price'] ?>,00 €</p>
									
									<button  class="open" type="button" >book</button>
								</div>
							</div>
							
						</div>
					<?php }
         ?>
			
			<!--Creates the popup body-->
				<div class="popup-overlay">
			<!--Creates the popup content-->
				<div class="popup-content">
					<h2>Pop-Up</h2>
					<p> This is an example pop-up that you can make using jQuery.</p>
				<!--popup's close button-->
					<button class="close">Close</button>    
				</div>
			</div>

			

</div>
		<script src="js/modal.js"></script>
</body>
