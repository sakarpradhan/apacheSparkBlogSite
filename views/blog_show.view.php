<?php include('partials/header.php'); ?>

<h1>Blog Show</h1>

	<h3><?= $blog->title ?></h3>
	<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?></div>
	<p>
		<?= $blog->content; ?>
	</p>

<?php include('partials/comment.php'); ?>

<?php include('partials/footer.php'); ?>