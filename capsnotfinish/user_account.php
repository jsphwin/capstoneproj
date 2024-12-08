<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            height: 100vh;
            width: 200px;
            background-color: #0b0f2f;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            transition: transform 0.3s ease;
        }
        .sidebar img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        .sidebar h2 {
            margin: 10px 0;
            font-size: 18px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #1a1e3a;
        }
        .sidebar a.active {
            color: #00ff00;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #9E9E9E;
            padding: 10px 20px;
            width: calc(100% - 200px);
            position: absolute;
            top: 0;
            left: 200px;
        }
        .header img {
            height: 40px;
            width: 40px;
        }
        .header .title {
            display: flex;
            align-items: center;
            font-size: 18px;
            color: #000;
        }
        .header .icons {
            display: flex;
            align-items: center;
        }
        .header .admin {
            display: flex;
            align-items: center;
            margin-left: 20px;
            font-size: 18px;
            color: #000;
        }
        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 220px;
            font-size: 20px;
            cursor: pointer;
            color: #0b0f2f;
        }
        .sidebar.hidden {
            transform: translateX(-100%);
        }
        .toggle-btn.hidden {
            left: 20px;
        }
    </style>
</head>
<body class="bg-gray-200">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <img src="https://placehold.co/50x50" alt="Profile picture of the admin" />
        <h2>Admin</h2>
        <a href="#" class="active"><i class="fas fa-home"></i>Dashboard</a>
        <a href="#"><i class="fas fa-user"></i>User Account</a>
        <a href="#"><i class="fas fa-plus-square"></i>Add Record</a>
        <a href="#"><i class="fas fa-chart-bar"></i>Visualization</a>
        <a href="#"><i class="fas fa-sms"></i>SMS</a>
    </div>
    
    <div class="toggle-btn" id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Header -->
    <div class="header">
        <div class="title">
            <img alt="Logo of Indigenous People " src="https://placehold.co/40x40" />
            <span>Indigenous People Dashboard</span>
        </div>
        <div class="icons">
            <i class="fas fa-bell"></i>
            <i class="fas fa-cog"></i>
            <div class="admin">Admin Name</div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>Here you can manage all aspects of the system.</p>
    </div>

    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            toggleBtn.classList.toggle('hidden');
        });
    </script>
</body>
</html> ⬤