<?php include('partials/header.php'); ?>





<?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
	<div class="blogCards">
		<div class="blogCard">
			<div class="blogCard_info">
			
		<h3 class="blog_title"><?= $blog->title ?></h3>
		<div class="blog_type">Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | Comments: <?= $blog->commentCount ?></div>
		<p>
			<?php
			echo substr(strip_tags($blog->content), 0, 300);		
			echo strlen(strip_tags($blog->content)) > 300 ? "..." : "";
			?>
			<div class="readmore">
				<u>
			<a href="/blog/show?blog_id=<?= $blog->id ?> "> Read More </a>
	</u>
	</div>
    </br>
    </br>
		</p>
	</div>
		</div>
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

<style>


.blogCards {
    margin: 2rem;
    display: grid;
    gap: 2rem;
    grid-template-columns: 1fr;
    justify-content: center;
    margin-left: 8rem;
    margin-right: 8rem;

  }

  .blogCard {
    box-shadow: 0 0 2px 2px;
    border-radius: 1%;
    min-width: 28rem;
    display: flex;
  }

 

  .blogCard_info {
    margin: 1rem;
    flex-grow: 1;
  }
 
  .blog_title {
    line-height: 1.4rem;
    margin-bottom: 0.5rem;
	font-size: 30px;
	font-weight: bold;
  }

  .readmore{
	color: blue;

  }

</style>

<?php include('partials/footer.php'); ?>