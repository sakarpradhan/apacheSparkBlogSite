<nav>
	<ul>
		<li><a href="/">Apache Spark</a></li>
		<li><a href="/blog">Blogs</a></li>
		<?php
		if( isUserLogged() )
		{
			?>
			<li><a href="/blog/create">Create Blog Post</a></li>
			<li><a href="/logout">Logout</a></li>
			<?php
		} else {
			?>
		<li><a href="/register">Sign up</a></li>
		<li><a href="/login">Sign in</a></li>
		<?php
		}
		?>
    <style>
      .container-bottom{
        /* position: fixed;
			width: 50px;
			height: 50px;
			bottom: 10px;
			right: 50px; 
			background-color: #f3e6ff;
			text-decoration: none;
			text-align: center;
			line-height: 50px; */
			display: inline;
			font-family: 'Roboto Slab', serif;
			width: 8800px;
      height: 144px;
      
		}

      </style>
	</ul>
</nav>

<div class="container-bottom">
<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-900">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="false">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="https://spark.apache.org/images/spark-logo-back.png" alt="Apache Spark">
          <img class="hidden lg:block h-8 w-auto" src="https://spark.apache.org/images/spark-logo-back.png" alt="Apache Spark">
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>
            <?php 
            if( isUserLogged() )
            {
              ?>
              <a href="/blog/create" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blogs</a>
              <?php
            } else {
              ?>
               <a href="/blog" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blogs</a>
               <?php
            }
            ?>
            
           

            <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sign up</a>

            <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log in</a>
            <a href="/contact" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact Us</a>

		</div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        
        <!-- Profile dropdown -->
        <div class="ml-3 relative">
          <div>
            <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</nav>
          


