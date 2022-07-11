<?php include('partials/header.php') ?>
<html>
	<head>
</head>
<body>
	<div class = "container">


	
<?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
		<div class="main-title">
		<h3> <?= $blog->title ?> </h3>
	</div>
		<div class="blog-title">
		
			Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | 
			<a href="/blog/show?blog_id=<?= $blog->id ?>" title="Click to see all comments">
			Comments: <?= $blog->commentCount ?>
			</a>
			
		</div>
		
		
	</br>
	<div class="blog">
		<p>
			<?= $blog->content ?>
		</p>
	</div>
	
		</div>
		</br>
		</br>
		</br>
	</br>
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
    .blog{
		display: flex;
		font-family: 'Amatic SC', cursive;
			font-size: 18px;
			margin: auto;
			flex-wrap: wrap;
			width: 1300px;
			text-align: justify;
			height: 144px;
    }
	.main-title{
		display: flex;
		font-family: 'Roboto Slab', serif;
			font-size: 37px;
			margin: auto;
			flex-wrap: wrap;
			width: 1300px;
			text-align: center;
			
    }
	.blog-title{
		display: flex;
		font-family: 'Raleway', sans-serif;
			font-size: 15px;
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