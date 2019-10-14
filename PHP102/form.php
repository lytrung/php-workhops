<?php
	require_once('header.php');
?>
	
		<form action="card.php" method="post">
			<div class="form-group">
			    <label for="title">Card title</label>

			    <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title">
			    
			</div>
			<div class="form-group">
			  	<label for="description">Description</label>
			    <input type="text" class="form-control" id="description" name="description" placeholder="Enter your description">
			</div>

			<div class="form-group">
			    <label for="photo">Photo</label>
			    <select class="form-control" id="photo" name="photo">
			     	<option value="palace.jpg">Palace</option>
			     	<option value="dog.jpg">Dog</option>
			     	<option value="food.jpg">Food</option>
			    </select>
			</div>

			<div class="form-group">
			  	<label for="link">Link</label>
			    <input type="text" class="form-control" id="link" name="link" placeholder="Enter your link">
			</div>
			
			<input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>


<?php
	require_once('footer.php');
?>