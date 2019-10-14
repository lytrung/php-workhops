<?php

	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';

	$title = '';
	$description = '';
	$link = '';
	$photo = 'dog.jpg';

	if(isset($_POST['submit'])){

		$title = $_POST['title'];
		$description = $_POST['description'];
		$link = $_POST['link'];
		$photo = $_POST['photo'];
	}else{
		//send user to form.php
		header('Location:form.php');
		exit;
	}

	require_once('header.php');
?>
	
		<div class="card" style="width: 18rem;">
		  <img src="<?php echo $photo ?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $title ?></h5>
		    <p class="card-text"><?php echo $description ?></p>
		    <a href="<?php echo $link ?>" class="btn btn-primary">See more</a>
		  </div>
		</div>

<?php
	require_once('footer.php');
?>