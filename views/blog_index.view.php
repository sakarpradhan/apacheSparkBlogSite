<?php include('partials/header.php'); ?>

<!-- <h1>Blog List</h1> -->

<!-- <?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
		<div>
		<h3><?= $blog->title ?></h3>
		<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | Comments: <?= $blog->commentCount ?></div>
		<p>
			<?php
			echo substr(strip_tags($blog->content), 0, 300);		
			echo strlen(strip_tags($blog->content)) > 300 ? "..." : "";
			?>
			<a href="/blog/show?blog_id=<?= $blog->id ?> "> Read More </a>
    </br>
    </br>
		</p>
		</div>
	<?php
	}	
} else {
?>
	<div>
		<h2>No Blogs posted yet</h2>
		<h3>Feature Posts to showcase Blogs in Homepage</h3>
	</div>
<?php
}
?> -->

<div role="article" tabindex="0" class="focus:outline-none container mx-auto py-8 px-4">
            <h1 tabindex="0"  class="focus:outline-none text-5xl text-center f-m-w text-indigo-700 dark:text-indigo-400 font-bold pt-0">Our Blogs</h1>
            <div class="pt-14 xl:px-0 px-4">
                <div class="w-full lg:flex">
                    <div class="lg:w-1/2">
                        <img tabindex="0" role="img" aria-label="Apche Spark" src="https://prod-discovery.edx-cdn.org/media/course/image/6b2559aa-c997-46df-9041-05aca4affb81-f4e2f1f1019f.small.png" class="focus:outline-none w-full" alt="Beautiful italy street" />
                        <div class="mt-8 lg:mb-0 mb-8">
                            <h2 tabindex="0" class="focus:outline-none dark:text-black f-m-m text-2xl font-semibold leading-7">Apache Sparks</h1>
                            <p tabindex="0" class="focus:outline-none dark:text-black text-base f-m-m leading-loose mt-2"><?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
		<div>
		<h3><?= $blog->title ?></h3>
		<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | Comments: <?= $blog->commentCount ?></div>
		<p>
			<?php
			echo substr(strip_tags($blog->content), 0, 300);		
			echo strlen(strip_tags($blog->content)) > 300 ? "..." : "";
			?>
			<a href="/blog/show?blog_id=<?= $blog->id ?> "> Read More </a>
    </br>
    </br>
		</p>
		</div>
	<?php
	}	
} else {
?>
	<div>
		<h2>No Blogs posted yet</h2>
		<h3>Feature Posts to showcase Blogs in Homepage</h3>
	</div>
<?php
}
?></p>
                            <div class="mt-6">
                                <div>
                                    <a class="hover:text-indigo-900 dark:hover:text-indigo-500 text-indigo-700 dark:text-indigo-400 underline text-base font-semibold f-m-m" role="link" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:ml-8">
                    
                        <div class="lg:flex items-start mb-8">
                            <img tabindex="0" role="img" aria-label="car in desert" alt="car in desert" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/23/26f311d7f04721990f809c7bf60b76/IBM-DE7-Course-Image.png?auto=format%2Ccompress&dpr=1&w=330&h=330&fit=fill&q=25" class="focus:outline-none w-full" />
                            <div class="lg:ml-6">
                                <h3  tabindex="0" class="focus:outline-none dark:text-black f-m-m text-2xl font-semibold leading-7 lg:mt-0 mt-8">Introducing Spark Connect – The Power of Apache Spark, Everywhere</h1>
                                <p tabindex="0" class="focus:outline-none dark:text-black text-base f-m-m leading-loose mt-2"><?php
if ( !empty($blogs) )
{
	foreach ($blogs as $blog)
	{
	?>
		<div>
		<h3><?= $blog->title ?></h3>
		<div>Author: <?= $blog->author_id ?> | Created at: <?= $blog->created_at ?> | Comments: <?= $blog->commentCount ?></div>
		<p>
			<?php
			echo substr(strip_tags($blog->content), 0, 300);		
			echo strlen(strip_tags($blog->content)) > 300 ? "..." : "";
			?>
			<a href="/blog/show?blog_id=<?= $blog->id ?> "> Read More </a>
    </br>
    </br>
		</p>
		</div>
	<?php
	}	
} else {
?>
	<div>
		<h2>No Blogs posted yet</h2>
		<h3>Feature Posts to showcase Blogs in Homepage</h3>
	</div>
<?php
}
?></p>
                                <div class="mt-4">
                                    <a class="hover:text-indigo-900 dark:hover:text-indigo-500 text-indigo-700 dark:text-indigo-400 underline text-base font-semibold f-m-m" role="link" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex items-start mb-8">
                            <img tabindex="0" role="img" aria-label="man with camel" alt="man with camel" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZQTyb5RPPrv8m0IGzPEeuudU5SFHm9qMJDQ&usqp=CAU" class="focus:outline-none w-full" />
                            <div class="lg:ml-6">
                                <h3 tabindex="0" class="focus:outline-none dark:text-black -m-m text-2xl font-semibold leading-7 lg:mt-0 mt-8">Lilii’s Travel Plans</h1>
                                <p tabindex="0" class="focus:outline-none dark:text-black text-base f-m-m leading-loose mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="mt-4">
                                    <a class="hover:text-indigo-900 dark:hover:text-indigo-500 text-indigo-700 dark:text-indigo-400 underline text-base font-semibold f-m-m" role="link" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-16 w-full">
                <button class="border border-indigo-700 focus:bg-gray-200 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 border-2 lg:text-2xl md:text-lg text-sm rounded f-m-m font-semibold text-indigo-700 focus:outline-none lg:px-12 px-6 lg:py-6 py-3 xl:leading-4 hover:bg-gray-200">Browse More</button>
            </div>
        </div>   
    
    

<?php include('partials/footer.php'); ?>