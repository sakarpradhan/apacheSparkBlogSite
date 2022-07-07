<?php include('partials/header.php'); ?>

<h1>Blog Create</h1>

<form action="/blog/create" method="POST">
	<input type="text" name="title" placeholder="title of your article">
	<br>
	<textarea id="content" name="content" placeholder="content of article"></textarea>
	<br><br>
	<button type="submit">Publish</button>
</form>

<?php include('partials/footer.php'); ?>