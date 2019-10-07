<?php
	$name = 'Paul';
	$age = 45;
	$activity = '';
	$color = '';
	if($age <= 18){
		$activity = 'Have an icecream';
		$color = 'pink';
	}
	if(($age > 18) && ($age<=65)){
		$activity = 'Go to work';
		$color = 'blue';
	}
	if($age > 65){
		$activity = 'Take a cruise';
		$color = 'grey';
	}


	// Arrays and loops

	$names = ['Mary','Luke','Mathew'];
	$names[] = 'Joseph';
	

	$person = [
		'name' => 'John',
		'age' => 20,
		'title' => 'the disciple'
	];
	$person['location'] = 'the middle East, or whereabout';

	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div style="color:<?php echo $color;?>">
		<h1>Hello <?php echo $name; ?></h1>
		<h1><?php echo $activity; ?></h1>
	</div>
	<!-- Arrays and loops out put -->

	<h1>And the winners are</h1>
	<ul>
		<?php
			for($i=0; $i<count($names) ;$i++){
				echo '<li>' . $names[$i] . '</li>';
			}
		?>
	</ul>

	<h1>I repeat, the winners are</h1>
	<ul>
		<?php
			foreach($names as $name){
				echo '<li>' . $name . '</li>';
			}
		?>
	</ul>

	<?php 
	// echo '<pre>';
	// print_r($person);
	// echo '</pre>';
	?>
	<h1>Your celebrity bio</h1>
	<ul>
		<?php
		foreach($person as $key=>$value){
			echo '<li>' .$key. ': ' . $value . '</li>';
		}
		?>
	</ul>

</body>
</html>


