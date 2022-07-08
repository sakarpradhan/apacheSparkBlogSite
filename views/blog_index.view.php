<?php include('partials/header.php'); ?>

<h1>Blog List</h1>

<?php
foreach ($blogs as $blog)
{
?>
	<div>
	<h3><?= $blog->title ?></h3>
	<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | Comments: <?= $blog->commentCount ?></div>
	<p>
		<?php
		echo substr(strip_tags($blog->content), 0, 300);		
		echo strlen(strip_tags($blog->content)) > 300 ? "..." : "";
		?>
		<a href="/blog/show?blog_id=<?= $blog->id ?> "> Read More </a>
	</p>
	</div>
<?php
}
?>


<?php include('partials/footer.php'); ?>