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
            position: relative;
        }
        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        .admin:hover .dropdown {
            display: block;
        }
        .dropdown a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
        }
        .dropdown a:hover {
            background-color: #f0f0f0;
        }

        .dropdown {
        position: absolute;
        right: 0;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }
    .dropdown.hidden {
        display: none;
    }
    </style>
</head>
<body class="bg-gray-200">
    <!-- Header -->
    <header class="header">
        <div class="title">
            <img alt="Logo of Indigenous People Portal System" src="https://storage.googleapis.com/a1aa/image/guDdHkdbSKqTD9Syi5jefwsa3Q1O0ilUoXiBUeW0BeKIUhhPB.jpg"/>
            <span>Indigenous People Portal System</span>
        </div>
        <div class="icons">
    <i class="fas fa-bell" aria-label="Notifications"></i>
    <i class="fas fa-user" aria-label="User  Profile"></i>
    <div class="admin" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
        <button class="flex items-center bg-transparent border-none cursor-pointer">
            <span>Admin</span>
            <i class="fas fa-caret-down ml-1" aria-label="Admin Dropdown"></i>
        </button>
        <div class="dropdown hidden">
            <a href="profile_update.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Update Profile</a>
            <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
        </div>
    </div>
</div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-800 text-white min-h-screen transition-transform duration-300">
            <div class="flex items-center justify-center py-4">
                <img alt="Admin Logo" class="rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/vDBGItvDpS4wH5H8NceawEyJjDOolOl0heYDPIWI3hL1kY4TA.jpg" width="50"/>
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
                <a class="block py-2.5 px-4 hover:bg -gray-700 flex items-center" href="#">
                    <i class="fas fa-plus mr-2"></i> Add Record
                </a>
                <a class="block py-2.5 px-4 hover:bg-gray-700 flex items-center" href="#">
                    <i class="fas fa-chart-bar mr-2"></i> Visualization
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <button onclick="toggleSidebar()" class="p-2 bg-gray-300 rounded fixed top-4 left-4 z-10" aria-label="Toggle Sidebar">
                <i class="fas fa-bars"></i>
            </button>

            <main class="p-8">
                <div class="bg-white p-6 rounded shadow-md">
                    <h2 class="text-lg font-bold mb-4">Add Profile</h2>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700" for="name">Name</label>
                            <input class="w-full border-gray-300 rounded p-2" id="name" type="text" value="jose carlos" required/>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="tribe">Tribe</label>
                            <select class="w-full border-gray-300 rounded p-2" id="tribe" required>
                                <option value="">Select Tribe</option>
                                <option>Bagobo klata</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="beneficiary">Beneficiary</label>
                            <select class="w-full border-gray-300 rounded p-2" id="beneficiary" required>
                                <option value="">Select Beneficiary</option>
                                <option>Pantawid Pamilyang Pilipino Program</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="purok">Purok</label>
                            <input class="w-full border-gray-300 rounded p-2" id="purok" type="text" value="Purok 5 Bato Village, Manuel guiang" required/>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="status">Status</label>
                            <select class="w-full border-gray-300 rounded p-2" id="status" required>
                                <option value="">Select Status</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                                <option value="separated">Separated</option>
                                <option value="divorced">Divorced</option>
                                <option value="single">Single</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="age">Age</label>
                            <input class="w-full border-gray-300 rounded p-2" id="age" type="number" value="50" required/>
                        </div>
                        <div>
                            <label class="block text-gray-700" for="gender">Gender</label>
                            <select class="w-full border-gray-300 rounded p-2" id="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-500 text-white rounded p-2 hover:bg-blue-600">Submit</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-hidden');
        }


        function toggleDropdown() {
        const dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('hidden');
    }

    // Close the dropdown if clicked outside
    window.onclick = function(event) {
        if (!event.target.matches('.admin *')) {
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(drop => drop.classList.add('hidden'));
        }
    }
    </script>
</body>
</html>