<?php include('partials/header.php') ?>

<h1>User Sign in</h1>
<h3>Enter your credentials</h3>

<form action="login" method="POST">
	Email: <input name="email" type="email"><br><br>
	Password: <input name="password" type="password"><br><br>
	<button type="submit">Login</button>

	<?php 
	if (!empty($_SESSION['message']))
	{
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
	?>

</form>

<?php include('partials/footer.php') ?>
