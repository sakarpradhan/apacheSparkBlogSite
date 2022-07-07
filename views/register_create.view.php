<?php include('partials/header.php') ?>

<h1>User Registration Form</h1>

<form method="POST" action="/register">
	Name: <input name="name"><br><br>
	Email: <input name="email"><br><br>
	Password: <input name="password" type="password"><br><br>
	<button type="submit">Register</button>
</form>

<?php include('partials/footer.php') ?>
