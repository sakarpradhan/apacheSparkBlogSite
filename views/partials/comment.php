<?php
if ( isUserLogged() ) 
{
?>
</br>
</br>
<div class= "comment-write">
<h1> Write down your comment</h1>
</br>
</div>
	<form action="/comment" method="POST">
		<input hidden name="user_id" value="<?= $_SESSION['user']->id ?>">
		<input hidden name="blog_id" value="<?= $blog->id ?>">
		<textarea id="comment" name="content"></textarea>
		
		</div>
                     <!-- Code block for primary button starts -->
					 <button type="submit" class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600">Post Comment</button>
                    <!-- Code block for primary button ends -->
         </div>
		<!-- <button type="submit">Post Comment</button> -->
	</form>
<?php
}
else
{?>
	<div class="login-to-share">
	<a href="/login">Please login to share your comment. </a>  
</div>
<?php
}
?>



<style type ="text/css">
	.login-to-share{
		display: flex;
		font-family: 'Amatic SC', cursive;
			font-size: 22px;
			margin: auto;
			flex-wrap: wrap;
			width: 5500px;
			text-align: center;
	}
	.comment-write{
		display: flex;
		font-family: 'Amatic SC', cursive;
			font-size: 22px;
			margin: auto;
			flex-wrap: wrap;
			width: 400px;
			text-align: center;
	}
    .comment{
		display: flex;
		font-family: 'Amatic SC', cursive;
			font-size: 18px;
			margin: auto;
			flex-wrap: wrap;
			width: 500px;
			text-align: center;
	}
	.comment-heading{
		display: flex;
		font-family: 'Domine', serif;
			font-size: 28px;
			margin: auto;
			flex-wrap: wrap;
			width: 290px;
			text-align: justify;
    }
	html{
			scroll-behavior: smooth;
		}
    </style>
	<div class= "comment-heading">
	<h1> Comment Section</h1>
	</div>
<div class="comment">
	<?php
	foreach($comments as $comment)
	{
		echo $comment->content;
		echo '-' . $comment->user_id . ' @ ' . $comment->created_at;
	}
	?>
		