<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
    Indigenous People Portal System - Login
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-cover bg-center" style="background-image: url('https://placehold.co/800x600');">
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <div class="flex items-center justify-center mb-6">
        <img alt="Logo" class="w-12 h-12 mr-2" height="50" src="https://storage.googleapis.com/a1aa/image/w5Motlo9GibVNp2IhHwPNAAtS97y0HtH9S2y8iOlL2yrCHeJA.jpg" width="50"/>
        <h1 class="text-xl font-bold">
          INDIGENOUS PEOPLE PORTAL SYSTEM
        </h1>
      </div>
      <h2 class="text-2xl font-semibold mb-2">
        Login
      </h2>
      <p class="text-gray-600 mb-4">
        Enter your details to access the system
      </p>
      <form action="login-code.php" method="POST">
        <div class="mb-4">
          <label class="block text-gray-700" for="email">
            Email Address
          </label>
          <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" placeholder="Enter your email address" type="email" name="email" required/>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700" for="password">
            Password
          </label>
          <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" placeholder="Enter your password" type="password" name="password" required/>
        </div>
        <div class="flex items-center mb-4">
          <input class="mr-2" id="remember" type="checkbox" name="remember"/>
          <label class="text-gray-700" for="remember">
            Remember me
          </label>
        </div>
        <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">
          Login
        </button>
      </form>
      <p class="text-center text-gray-600 mt-4">
        Don't have an account?
        <a class="text-blue-500 hover:underline" href="sign_up.php">
          Sign Up
        </a>
      </p>
    </div>
  </div>
</body>
</html>
