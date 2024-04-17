<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
  <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
     
    </div>
    <div class="w-full py-6 z-20">
    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Register</h1>
      </div>
    </div>
               
                <form id="register-form" action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <input type="text" name="name" id="name" placeholder="Name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <input type="email" name="email" id="email" placeholder="Email" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <select name="role" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"   id="role" >
                            <option value="organizer">organisateur</option>
                            <option value="benevole">benevole</option>
                        </select>
                    </div>
                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="/login">Already have account?Login</a>
                    </div>
                    
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <button type="submit" class="w-auto bg-blue-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">sign in</button>
                    </div>

                    
                </form>
            </div>

</div>

    <script src="js/register.js"></script>
</body>
</html>