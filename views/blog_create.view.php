<!DOCTYPE html>
<head>
<head> 
    <link href=
"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" 
          rel="stylesheet"> 
</head>
<body class="text-center mx-4 space-y-2">
	<?php include('partials/header.php'); ?>

	<h1 class="text-blue-600 text-5xl font-bold">Create Blog</h1>

	<form action="/blog/create" method="POST">
	<label for="name" class="sr-only">Full Name</label>
	<div>
          <input type="text" name="title"  required class="appearance-none rounded-none relative block w-full px-1 py-2 border border-gray-300 placeholder-gray-500 text-gray-500 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Title of the blog">
    </div>
		<br>
		<textarea id="content" name="content" placeholder="content of article"></textarea>
		<br><br>
		
		<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Publish
        </button>
	</form>

	<?php include('partials/footer.php'); ?>
</body>
</html>