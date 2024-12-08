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
            margin-left: 30px;
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
            <i class="fas fa-bell" aria-label="Notifications"></i>
            <i class="fas fa-user" aria-label="User  Profile"></i>
            <div class="admin">
                <span>Admin</span>
                <i class="fas fa-caret-down" aria-label="Admin Dropdown"></i>
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
                <a class="block py-2.5 px-4 bg-gray-700 flex items-center" href="dashboard.php">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="user_account.php">
                    <i class="fas fa-user mr-2"></i> User Account
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="user_account.php">
                    <i class="fas fa-plus mr-2"></i> Add Record
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="Visulation.php">
                    <i class="fas fa-chart-bar mr-2"></i> Visualization
                </a>
            </nav>
        </aside>

 <!-- Main Content -->
        <div class="flex-1 p-6">
            <button onclick="toggleSidebar()" class="p-2 bg-gray-300 rounded fixed top-4 left-4 z-10" aria-label="Toggle Sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">User  Account</h2>
            </header>

            <div class="flex flex-col space-y-4 mb-6">
                <div class="flex">
                    <input class="p-2 outline-none flex-grow border border-gray-300 rounded-l" placeholder="Search by Keyword" type="text"/>
                    <button class="p-2 bg-blue-500 text-white rounded-r">Search</button>
                </div>
            </div>

            <div class="bg-white p-4 mt-4 rounded shadow">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-2">
                        <label class="text-sm" for="entries">Show</label>
                        <select class="border border-gray-300 rounded p-1 text-sm" id="entries">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-sm">entries</span>
                    </div>
                    <div>
                        <input class="border border-gray-300 rounded p-1 text-sm" placeholder="Search" type="text"/>
                    </div>
                </div>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Contact Number</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">James Edison</td>
                            <td class="py-2 px-4 border-b">Jamesedison12@gmail.com</td>
                            <td class="py-2 px-4 border-b">9233728322</td>
                            <td class="py-2 px-4 border-b">Active</td>
                            <td class="py-2 px-4 border-b">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Deactivate</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Joseph Daug</td>
                            <td class="py-2 px-4 border-b">josephdaug23@gmail.com</td>
                            <td class="py-2 px-4 border-b">9456737883</td>
                            <td class="py-2 px-4 border-b">Active</td>
                            <td class="py-2 px-4 border-b">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Deactivate</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Odely Jose</td>
                            <td class="py-2 px-4 border-b">odelyjose25@gmail.com</td>
                            <td class="py-2 px-4 border-b">9073298398</td>
                            <td class="py-2 px-4 border-b">Active</td>
                            <td class="py-2 px-4 border-b">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Deactivate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-between items-center mt-4">
                    <div class="text-sm">Showing 1 to 3 of 3 entries</div>
                    <div class=" flex items-center space-x-2">
                        <button class="bg-gray-300 text-gray-700 px-2 py-1 rounded">&lt;</button>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded">1</button>
                        <button class="bg-gray-300 text-gray-700 px-2 py-1 rounded">&gt;</button>
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