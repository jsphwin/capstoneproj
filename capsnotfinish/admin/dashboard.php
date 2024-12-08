<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        .sidebar-hidden {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #9E9E9E;
            padding: 10px 20px;
        }
        .header img {
            height: 40px;
            width: 40px;
            margin-left:30px;
        }
        .header .title {
            display: flex;
            align-items: center;
            font-size: 18px;
            margin-left: 25px;
            color: #000;
        }
        .header .icons {
            display: flex;
            align-items: center;
        }
        .header .icons i {
            margin-left: 20px;
            font-size: 18px;
            color: #000;
        }
        .header .admin {
            display: flex;
            align-items: center;
            margin-left: 20px;
            font-size: 18px;
            color: #000;
        }
    </style>
</head>
<body class="bg-gray-200">
    <!-- Header -->
    <div class="header">
        <div class="title">
            <img alt="Logo of Indigenous People Portal System" src="https://storage.googleapis.com/a1aa/image/guDdHkdbSKqTD9Syi5jefwsa3Q1O0ilUoXiBUeW0BeKIUhhPB.jpg"/>
            <span>Indigenous People Portal System</span>
        </div>
        <div class="icons">
            <i class="fas fa-bell"></i>
            <i class="fas fa-user"></i>
            <div class="admin">
                <span>Admin</span>
                <i class="fas fa-caret-down"></i>
            </div>
        </div>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-800 text-white min-h-screen transition-transform duration-300">
            <div class="flex items-center justify-center py-4">
                <img alt="Logo" class="rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/vDBGItvDpS4wH5H8NceawEyJjDOolOl0heYDPIWI3hL1kY4TA.jpg" width="50"/>
            </div>
            <div class="text-center mb-4">
                <h1 class="text-xl font-bold">Admin</h1>
            </div>
            <nav class="text-sm">
                <a class="block py-2.5 px-4 bg-gray-700 flex items-center" href="new/admin/dashboard.php">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="user_account.php">
                    <i class="fas fa-user mr-2"></i> User Account
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="#">
                    <i class="fas fa-plus mr-2"></i> Add Record
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="#">
                    <i class="fas fa-chart-bar mr-2"></i> Visualization
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <button onclick="toggleSidebar()" class="p-2 bg-gray-300 rounded fixed top-4 left-4 z-10">
                <i class="fas fa-bars"></i>
            </button>
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Admin Dashboard</h2>
                <div class="flex items-center space-x-4">
                
                </div>
            </header>

            <div class="flex flex-col space-y-4 mb-6">
                <div class="flex items-center border border-gray-300 rounded w-full">
                    <select class="p-2 border-none rounded-l">
                        <option>Show All Categories</option>
                    </select>
                    <input class="p-2 outline-none flex-grow" placeholder="Search by Keyword" type="text"/>
                    <button class="p-2 bg-blue-500 text-white rounded-r">Search</button>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
        <div class="bg-teal-500 text-white p-4 rounded shadow">
          <div class="text-3xl font-bold">10</div>
          <div class="text-lg">Total User</div>
          <div class="flex justify-between items-center mt-4">
            <button class="text-sm bg-gray-700 py-1 px-2 rounded">More info</button>
            <i class="fas fa-user text-2xl"></i>
          </div>
        </div>
        <div class="bg-red-500 text-white p-4 rounded shadow">
          <div class="text-3xl font-bold">30</div>
          <div class="text-lg">Total Profile</div>
          <div class="flex justify-between items-center mt-4">
            <button class="text-sm bg-gray-700 py-1 px-2 rounded">More info</button>
            <i class="fas fa-file-alt text-2xl"></i>
          </div>
        </div>
        <div class="bg-purple-500 text-white p-4 rounded shadow">
          <div class="text-3xl font-bold">100</div>
          <div class="text-lg">Total Record</div>
          <div class="flex justify-between items-center mt-4">
            <button class="text-sm bg-gray-700 py-1 px-2 rounded">More info</button>
            <i class="fas fa-folder text-2xl"></i>
          </div>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded shadow">
          <div class="text-3xl font-bold">1</div>
          <div class="text-lg">Data Visualization</div>
          <div class="flex justify-between items-center mt-4">
            <button class="text-sm bg-gray-700 py-1 px-2 rounded">More info</button>
            <i class="fas fa-chart-line text-2xl"></i>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-hidden');
        }
    </script>
</body>
</html>