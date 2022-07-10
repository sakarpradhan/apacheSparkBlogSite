<?php include('partials/header.php'); ?>

<h1>Blog List</h1>

<?php
if ( !empty($blogs) )
{
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
} else {
?>
	<div>
		<h2>No Blogs posted yet</h2>
		<h3>Feature Posts to showcase Blogs in Homepage</h3>
	</div>
<?php
}
?>

<?php include('partials/footer.php'); ?>