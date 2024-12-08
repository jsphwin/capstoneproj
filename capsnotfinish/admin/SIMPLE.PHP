<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Indigenous People Portal System
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-200">
  <div class="flex">
    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-64 min-h-screen">
      <div class="flex items-center justify-center p-4">
        <img alt="Logo" class="rounded-full" height="50" src="https://placehold.co/50x50" width="50"/>
        <span class="ml-2 text-xl font-bold">
          Indigenous People Portal System
        </span>
      </div>
      <div class="flex flex-col items-center mt-4">
        <img alt="User Avatar" class="rounded-full" height="50" src="https://placehold.co/50x50" width="50"/>
        <span class="mt-2">
          Admin
        </span>
      </div>
      <nav class="mt-4">
        <ul>
          <li class="p-2 hover:bg-gray-700">
            <i class="fas fa-tachometer-alt mr-2"></i>
            Dashboard
          </li>
          <li class="p-2 hover:bg-gray-700">
            <i class="fas fa-user mr-2"></i>
            User Account
          </li>
          <li class="p-2 hover:bg-gray-700">
            <i class="fas fa-plus mr-2"></i>
            Add Record
          </li>
          <li class="p-2 bg-green-500">
            <i class="fas fa-chart-bar mr-2"></i>
            Visualization
          </li>
          <li class="p-2 hover:bg-gray-700">
            <i class="fas fa-sms mr-2"></i>
            SMS
          </li>
        </ul>
      </nav>
    </div>
    <!-- Main Content -->
    <div class="flex-1 p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">
          Data Visualization
        </h1>
        <div class="flex items-center">
          <i class="fas fa-bell mr-4"></i>
          <i class="fas fa-user mr-2"></i>
          <span>
            Admin
          </span>
          <i class="fas fa-caret-down ml-2"></i>
        </div>
      </div>
      <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="bg-teal-600 text-white p-4 rounded">
          <h2 class="text-lg">
            TOTAL NUMBER OF RECORD
          </h2>
          <p class="text-2xl font-bold">
            100
          </p>
        </div>
        <div class="bg-green-600 text-white p-4 rounded">
          <h2 class="text-lg">
            TOTAL NUMBER OF BENEFICIARY
          </h2>
          <p class="text-2xl font-bold">
            60
          </p>
        </div>
        <div class="bg-orange-600 text-white p-4 rounded">
          <h2 class="text-lg">
            TOTAL NUMBER OF TRIBE
          </h2>
          <p class="text-2xl font-bold">
            5
          </p>
        </div>
      </div>
      <h2 class="text-xl font-bold mb-4">
        Yearly Report of Documents
      </h2>
      <div class="bg-white p-4 rounded shadow mb-6">
        <div class="flex justify-between items-end mb-4">
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-24"></div>
            <span>
              Pantawid Pamilyang Pilipino Program
            </span>
          </div>
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-16"></div>
            <span>
              Senior Citizen Program
            </span>
          </div>
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-16"></div>
            <span>
              Male
            </span>
          </div>
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-24"></div>
            <span>
              Female
            </span>
          </div>
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-8"></div>
            <span>
              Single
            </span>
          </div>
          <div class="w-1/6 text-center">
            <div class="bg-blue-600 h-16"></div>
            <span>
              Married
            </span>
          </div>
        </div>
        <div class="flex justify-center">
          <img alt="Pie chart showing distribution of tribes" height="300" src="https://placehold.co/400x300" width="400"/>
        </div>
      </div>
    </div>
  </div>
</body>
</html>