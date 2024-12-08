<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>


.bar {
            background-color: #3b82f6; /* Tailwind's blue-600 */
            margin: 0 auto;
            transition: height 0.3s ease;
        }
        .bar-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 1rem;
        }
        .bar-label {
            text-align: center;
            margin-top: 0.5rem;
        }
        .chart {
            background-color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }


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


              <!-- Main Content -->
  <div class="flex-1 p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">
          Data Visualization
        </h1>
      
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
        Monthly Report of Documents
      </h2>
      
         
<div class="chart">
    <div class="bar-container">
        <div class="bar" style="height: 6rem; width: 100%;"></div>
        <div class="bar" style="height: 4rem; width: 100%;"></div>
        <div class="bar" style="height: 4rem; width: 100%;"></div>
        <div class="bar" style="height: 6rem; width: 100%;"></div>
        <div class="bar" style="height: 2rem; width: 100%;"></div>
        <div class="bar" style="height: 4rem; width: 100%;"></div>
    </div>
    <div class="bar-container">
        <span class="bar-label">Pantawid Pamilyang Pilipino Program</span>
        <span class="bar-label">Senior Citizen Program</span>
        <span class="bar-label">Male</span>
        <span class="bar-label">Female</span>
        <span class="bar-label">Single</span>
        <span class="bar-label">Married</span>
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
</ht