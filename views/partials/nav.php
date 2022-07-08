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
	</ul>
</nav>