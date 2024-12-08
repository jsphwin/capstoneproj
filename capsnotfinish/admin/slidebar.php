<html>
<head>
    <title>Admin Sidebar</title>
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
        .sidebar a i {
            margin-right: 10px;
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
<body>
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
    <div class="content">
        <h1>Welcome to the Admin Dashboard</h1>
    </div>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            toggleBtn.classList.toggle('hidden');
        });
    </script>
</body>
</html>