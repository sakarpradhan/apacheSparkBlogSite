<?php include('partials/header.php'); ?>

<h1>Contact Us</h1>
<h3>Leave your details and we will get back to you</h3>

<form action="/contact" method="POST">
	<ul>
		<label name="lblName">Name:</label>
		<input type="text" name="name">
		<p>
		<label name="lblEmail">Email:</label>
		<input type="text" name="email">
		<p>
		<button type="submit">Submit</button>
	</ul>
</form>

<?php include('partials/footer.php'); ?>