<?php include('partials/header.php'); ?>

<!-- <h1>Contact Us</h1>
<h3>Leave your details and we will get back to you</h3> -->

<!-- <form action="/contact" method="POST">
	<ul>
		<label name="lblName">Name:</label>
		<input type="text" name="name">
		<p>
		<label name="lblEmail">Email:</label>
		<input type="text" name="email">
		<p>
		<button type="submit">Submit</button>
	</ul>
</form> -->

<form action="/contact" method="POST">
<div class="bg-gradient-to-b from-purple-600 to-indigo-700 h-96 w-full">
            <div class="md:px-20 px-4 py-8">
                <div class="flex items-center justify-between">
                   
                </div>
                
            </div>
            <div class="w-full flex items-center justify-center my-12">
                <div class="absolute top-40 bg-white dark:bg-gray-800 shadow rounded py-12 lg:px-28 px-8">
                    <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 dark:text-white">Contact US</p>
</br>
					<p class="md:text-l text-l font-normal leading-5 text-center text-gray-200 dark:text-white">Leave your details and we will get back to you</p>
                    
					
					<div class="md:flex items-center mt-12">
                        <div class="md:w-70 flex flex-col">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Name</label>
                            <input  type="text" tabindex="0" arial-label="Please input name" type="name" class=" text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100 resize-none" placeholder="Please input  name" />
                        </div>
                        
                    </div>
                    <div class="md:flex items-center mt-12">
					<div class="md:w-72 flex flex-col">
                            <label name="lblName" class="text-base font-semibold leading-none text-gray-800 dark:text-white">Email Address</label>
                            <input  type="email" tabindex="0" arial-label="Please input email address" type="name" class=" text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100 resize-none" placeholder="Please input email address" />
                        </div>
                        
                        
                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label name="lblEmail" class="text-base font-semibold leading-none text-gray-800 dark:text-white">Message</label>
                            <textarea tabindex="0" aria-label="leave a message" role="textbox" type="name" class="h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100 resize-none"></textarea>
                        </div>
                    </div>
                    <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-4">By clicking submit you agree to our terms of service, privacy policy and how we use data as stated</p>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit" class="mt-9 text-base font-semibold leading-none text-white py-4 px-10 bg-indigo-700 rounded hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
</form>
        
        
    

<?php include('partials/footer.php'); ?>