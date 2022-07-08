<?php include('partials/header.php') ?>

<h1>Apache Spark</h1>

<?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
		<div>
		<h3> <?= $blog->title ?> </h3>
		<div>
			Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | 
			<a href="/blog/show?blog_id=<?= $blog->id ?>" title="Click to see all comments">
			Comments: <?= $blog->commentCount ?>
			</a>
		</div>
		<p>
			<?= $blog->content ?>
		</p>
		</div>
	<?php
	}	
} else {
?>
	<div>
		<h2>No Posts featured</h2>
		<h3>Feature Posts to showcase Blogs in Homepage</h3>
	</div>
<?php
}
?>

<?php include('partials/footer.php') ?>