<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Indigenous People Portal System - Sign Up
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080');">
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-50">
   <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg w-full">
    <div class="flex justify-center mb-4">
     <img alt="Logo of Indigenous People Portal System" class="h-16 w-16" height="100" src="https://storage.googleapis.com/a1aa/image/MxRLZCOJwuI5IhZv97mC3MHyhYKC7oaLToSY733m08CGCHeJA.jpg" width="100"/>
    </div>
    <h2 class="text-2xl font-semibold text-center mb-2">
     INDIGENOUS PEOPLE PORTAL SYSTEM
    </h2>
    <h3 class="text-xl font-semibold text-gray-700 mb-2">
     Sign Up
    </h3>
    <p class="text-gray-500 mb-6">
     Enter your details to access our system
    </p>
    <form action="sign_up-code.php" method="POST">
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
       <label class="block text-gray-700">
        First Name
       </label>
       <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your first name" type="text" name="first_name"/>
      </div>
      <div>
       <label class="block text-gray-700">
        Last Name
       </label>
       <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your last name" type="text" name="last_name"/>
      </div>
     </div>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
       <label class="block text-gray-700">
        Email Address
       </label>
       <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email address" type="email" name="email"/>
      </div>
      <div>
       <label class="block text-gray-700">
        Phone Number
       </label>
       <div class="flex">
        <span class="inline-flex items-center px-3 border border-r-0 rounded-l-lg bg-gray-200 text-gray-600">
         +639
        </span>
        <input class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your number" type="text" name="phone_number"/>
       </div>
      </div>
     </div>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
       <label class="block text-gray-700">
        Password
       </label>
       <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" type="password" name="password"/>
       <p class="text-gray-500 text-sm mt-1">
        Password must be at least 12 characters
       </p>
      </div>
      <div>
       <label class="block text-gray-700">
        Confirm Password
       </label>
       <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm your password" type="password" name="confirm_password"/>
      </div>
     </div>
     <div class="flex items-center mb-4">
      <input class="mr-2" type="checkbox" name="terms_conditions"/>
      <label class="text-gray-700">
       I accept Terms and Conditions
      </label>
     </div>
     <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="submit">
      <i class="fas fa-arrow-right"></i>
      Register
     </button>
    </form>
    <p class="text-center text-gray-500 mt-4">
     Already have an account?
     <a class="text-blue-500" href="login.php">
      Sign In
     </a>
    </p>
   </div>
  </div>
 </body>
</html>
