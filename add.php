<?php
	
	 session_start();
	 $errors=  array('usernameError'=>'','passwordError'=>'' );
	 $inputUsername = '';
	 if (isset($_POST['login'])) {
		if (empty($_POST['Username'])) {
			$errors['usernameError']= "Please enter a username <br />";
		}else{
			$inputUsername= htmlspecialchars($_POST['Username']);
		}

		if (empty($_POST['Password'])) {
			$errors['passwordError']= "Please enter a Password <br />";
		}else{
			//echo  htmlspecialchars($_POST['Password'])."<br />";
		}


		if (array_filter($errors)) {
			
		}else{
			header("Location: index.php");

		}
		 $_SESSION["username"]=$inputUsername;
	}
?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php');?>

	<section class="container grey-text">
	<h4 class="center" style="font-family:Garamond">Bienvenido</h4>	
	<form class="white" action="add.php" method="POST">
		<label>Username:</label>
		<input type="text" name="Username" value="<?php echo $inputUsername?>">
		<div class="red-text"><?php echo $errors['usernameError']; ?></div>
		<label>Password:</label>
		<input type="password" name="Password">
		<div class="red-text"><?php echo $errors['passwordError']; ?></div>
		<div class="center">
			<input type="submit" name="login" value="login" class="btn brand z-depth-0">
			
		</div>
		
	</form>

	</section>

    <?php include('templates/fooder.php');?>




</html>

