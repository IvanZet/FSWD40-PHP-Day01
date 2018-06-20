<?php 
	require 'header.php'
?>

		<h1>Fill the form to book a car</h1>
		<div class="row">
		<div class="col-8 col-md-offset-2">
		<form >

			<select class="custom-select">
				<option selected>Select your car</option>
				<?php 
				$i = 1;
				foreach($fleet as $car => $features){
					?>
					<option value="<?php echo $i++ ?>"><?php echo $car?></option>
					<?php
				}	
				?>
			</select>

			<div class="form-group">
				<label for="exampleFormControlInput1">First name</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Max">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Second name</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Musterman">
			</div>
			<div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
	<input id="datepicker">


			<div class="form-group">
				<label for="exampleFormControlTextarea1">Example textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
		</form>
		</div>		
		
		</div>
	</main>
	<script> $('#datepicker').datepicker();</script>
</body>
</html>