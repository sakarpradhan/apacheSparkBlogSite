<?php
if ( isUserLogged() ) 
{
?>
	<form action="/comment" method="POST">
		<input hidden name="user_id" value="<?= $_SESSION['user']->id ?>">
		<input hidden name="blog_id" value="<?= $blog->id ?>">
		<textarea id="comment" name="content"></textarea>
		<button type="submit">Post Comment</button>
	</form>
<?php
}
else
{?>
	<a href="/login">Login</a> to share your comment.
<?php
}
?>

<div>
	<?php
	foreach($comments as $comment)
	{
		echo $comment->content;
		echo '-' . $comment->user_id . ' @ ' . $comment->created_at;
	}
	?>
</div>