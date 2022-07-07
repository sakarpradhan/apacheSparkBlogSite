<?php include('partials/header.php'); ?>

<h1>Blog List</h1>

<?php
foreach ($blogs as $blog)
{
?>
	<div>
	<h3><?= $blog->title ?></h3>
	<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?></div>
	<p>
		<?= $blog->content ?>
		<!-- <?php echo(strip_tags($blog->content)) ?> -->
	</p>
	</div>
<?php
}
?>


<?php include('partials/footer.php'); ?>