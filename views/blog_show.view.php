<?php include('partials/header.php'); ?>

<h2>
  <?= $blog->title ?>
  <style type ="text/css">
    *{
      margin: 0;
      padding: 0;
    }
    body{
      /* background: #C70039; */
    }
    .container{
      position: absoulte;
      left: 50%;
      top: 50%;

    }
    </style>
</h2>

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
		<!-- <?php
			echo ($blog->featured == 0) ? "Feature" : "Unfeature";
		?> -->
    </div>
    
                     <!-- Code block for primary button starts -->
					 <button type="submit" class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600"><?php
			echo ($blog->featured == 0) ? "Feature" : "Unfeature";
		?></button>
                    <!-- Code block for primary button ends -->
         </div>
		</a>
	</div></br>
<?php
}
?>


<p>
	<?= $blog->content; ?>
</p>

<?php include('partials/comment.php'); ?>

<?php include('partials/footer.php'); ?>