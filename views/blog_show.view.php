<?php include('partials/header.php'); ?>
<div class="main-title">
		<h3> <?= $blog->title ?> </h3>
	</div>

<div class = "blog-title">
<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?>
	<?php
		if( $blog->featured == 1 )
		{
			echo "| Featured Post 🌟";
		}
	?>
</div>
  </div>

<?php
if ( isAdmin() )
{
?>
	<div>
		<a href="/blog/feature?blog_id= <?= $blog->id ?>">
		<!-- <?php
			echo ($blog->featured == 0) ? "Feature" : "Unfeature";
		?> -->
    </div>
    
                     <!-- Code block for primary button starts -->
                     <div class="btn">
					 <button type="submit" class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600"><?php
			echo ($blog->featured == 0) ? "Feature" : "Unfeature";
		?></button>
    </btn>
                    <!-- Code block for primary button ends -->
         </div>
		</a>
	</div></br>
<?php
}
?>

<div class="blog">
		<p>
			<?= $blog->content ?>
		</p>
	</div>

  
<style type ="text/css">
    .blog{
      display: flex;
      flex-wrap: wrap;
		font-family: 'Amatic SC', cursive;
    font-size: 18px;
			text-align: justify;
			width: 1300px;
      margin: auto;
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
    .btn{
		display: flex;
			margin: auto;
			flex-wrap: wrap;
			width: 1300px;
			
			
    }
    /* .footer{
      display: flex;
		font-family: 'Raleway', sans-serif;
			font-size: 15px;
			margin: auto;
			flex-wrap: wrap;
			width: 1300px;
			text-align: justify;
    } */
	
	html{
			scroll-behavior: smooth;
		}
    </style>

<div class="footer">
<?php include('partials/comment.php') ?>
  </div>