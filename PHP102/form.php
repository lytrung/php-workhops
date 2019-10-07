<?php
	require_once('header.php');
?>
	
		<form>
			<div class="form-group">
			    <label for="name">Name</label>

			    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
			    
			</div>
			<div class="form-group">
			  	<label for="description">Description</label>
			    <input type="text" class="form-control" id="description" name="description" placeholder="Enter your description">
			</div>

			<div class="form-group">
			  	<label for="link">Link</label>
			    <input type="text" class="form-control" id="link" name="link" placeholder="Enter your link">
			</div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>


<?php
	require_once('footer.php');
?>