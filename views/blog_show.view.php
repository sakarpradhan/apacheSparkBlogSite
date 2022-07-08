<?php include('partials/header.php'); ?>

<h3><?= $blog->title ?></h3>
<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?>
	<?php
		if( $blog->featured == 1 )
		{
			echo "| Featured Post 🌟";
		}
	?>
</div>

<?php
if ( isAdmin() )
{
?>
	<div>
		<a href="/blog/feature?blog_id= <?= $blog->id ?>">
		<?php
			echo ($blog->featured == 0) ? "Feature" : "Unfeature";
		?>
		</a>
	</div>
<?php
}
?>

<p>
	<?= $blog->content; ?>
</p>

<?php include('partials/comment.php'); ?>

<?php include('partials/footer.php'); ?>