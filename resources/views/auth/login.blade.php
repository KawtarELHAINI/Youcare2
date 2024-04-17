<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
 

    <!-- component -->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Login Form </h1>
				</div>
                <form id="login-form" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email" class="text-black block w-full p-4 text-lg rounded-sm bg-white">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm text-black bg-white" type="password" name="password" id="password" placeholder="Password">
                    </div>
                
                    <div class="px-4 pb-2 pt-4">
                        <a href="/register">Create account</a>
                    </div>
                    
                    <div class="px-4 pb-2 pt-4">
                        <button type="submit" class=" px-4 pb-2 pt-4 bg-blue-500 text-white rounded-md px-2 py-1">Sign in</button>
                    </div>

                    
                </form>
			</div>
		</div>
	</div>
</div>
    <script src="js/login.js"></script>
</body>
</html>