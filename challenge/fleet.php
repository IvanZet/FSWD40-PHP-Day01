<?php 
	require "header.php";
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
							<div class="item-header">
								<p><?= $row['model'] ?></p>
								<p><?= $row['brand'] ?></p>
								
							</div>
							<div class="item-header-subtitle">
								<p><?= $row['type'] ?></p>
								<p><?= $row['airCon'] ?></p>
								<p><?= $row['transmission'] ?></p>
								<p><?= $row['color'] ?></p>
								<p><?= $row['seats'] ?></p>
								<p><?= $row['bags'] ?></p>
							</div>
							
							<!-- <div class="item-header">
								<p><?= $row['model'] ?></p>
								<p><?= $row['brand'] ?></p>
							</div> -->
							
						</div>
					<?php }
         ?>
		</div>
</body>
