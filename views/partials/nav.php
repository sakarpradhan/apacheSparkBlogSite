<nav>
	<ul>
		<li><a href="/">Apache Spark</a></li>
		<li><a href="/blog">Blogs</a></li>
		<li><a href="/contact">Contact Us</a></li>
		<?php
		if( !empty($_SESSION['login_status']) && $_SESSION['login_status'] == true)
		{
		?>
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