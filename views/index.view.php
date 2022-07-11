<?php include('partials/header.php') ?>
<html>
	<head>

	<h1>Apache Spark</h1>
</head>
<body>
	<div class = "container">


	
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
	
	</br>
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
</div>
</body>
<style type ="text/css">
    body{
		display: flex;
		font-family: 'Amatic SC', cursive;
			font-size: 18px;
			margin: auto;
			flex-wrap: wrap;
			width: 1300px;
			text-align: justify;
    }
	html{
			scroll-behavior: smooth;
		}
    </style>



<?php include('partials/footer.php') ?>
</html>