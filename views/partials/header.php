<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apache Spark</title>
	<script src="\vendor\tinymce\tinymce\tinymce.min.js" referrerpolicy="origin"></script>
	<script>
      tinymce.init(
		{
			selector: '#content',
			plugins: 'lists link image autoresize wordcount quickbars',
			toolbar: 'undo redo | styles | bold italic underline| indent outdent | numlist bullist | link image',
			menubar: 'false',
			content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
			quickbars_selection_toolbar: 'bold italic underline | blocks | bullist numlist | quicklink',
			quickbars_insert_toolbar: false
      	}
	  );

	  tinymce.init(
		{
			selector: '#comment',
			plugins: 'autoresize wordcount quickbars',
			toolbar: 'false',
			menubar: 'false',
			content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
			quickbars_selection_toolbar: 'bold italic underline',
			quickbars_insert_toolbar: false	
		}
	  );
    </script>
</head>
<body>

<?php include('nav.php') ?>
