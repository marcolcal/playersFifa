<?php
	require_once('includes/config.php');

	$LeagueCategoryController = new LeagueCategoryController();
	$PlayerController = new PlayerController();

	$categories = $LeagueCategoryController->getAll();
	$PlayerController->processForm();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Players</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<label>Leagues</label>
		<select name="leagueCategoryId">
			<?php
				if(count($categories)>0){
					foreach ($categories as $category) {
						echo ('<option value="'.$category->getId().'">'.$category->getName().'</option>');
					}
				}
			?>
		</select><br><br>

		<label>Name</label><br>
		<input type="text" name="name"><br><br>

		<label>Shirt Number</label><br>
		<input type="number" name="shirtNumber"></input><br><br>

		<label>Team</label><br>
		<input type="text" name="team"><br><br>

		<label>Image</label><br>
		<input type="file" name="image"><br><br>

		<label>Postition</label><br>
		<select name="playerPosition">
			<?php
				foreach (PlayerController::$POSITIONS as $key => $value) {
					echo ('<option value="'.$key.'">'.$value.'</option>');
				}
			?>
		</select><br><br>
		<input type="text" name="position"><br><br>

		<label>Amount Due</label><br>
		<input type="float" name="amountDue"><br><br>
		
		<input type="submit" name="action" value="Add">


	</form>
</body>
</html>