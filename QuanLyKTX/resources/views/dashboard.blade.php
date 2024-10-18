<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            color: #333;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar-header {
            background-color: #ec407a;
            padding: 20px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 10px 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 14px;
        }
        .sidebar ul li a:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .sidebar ul li.active {
            background-color: #ec407a;
            color: white;
        }
        .sidebar ul li.active a {
            color: white;
            font-weight: bold;
        }
        .sidebar ul li.active a:hover {
            background-color: #d81b60;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }
        .section-header {
            padding: 10px 20px;
            font-size: 12px;
            font-weight: bold;
            color: #555;
            background-color: #f4f4f4;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
        }

        /* Phần chính của Dashboard */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .dashboard-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card {
        background-color: #f7f7f7;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 20%; /* Điều chỉnh độ rộng thẻ */
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
    }
        .card:hover {
        background-color: #ec407a;
        color: white;
    }
        .card i {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .card-number {
            font-size: 24px;
            font-weight: bold;
            color: #ec407a;
        }
        .row {
            display: flex;
            gap: 20px;
        }
        .row .card {
            
        }
        /* Khung chứa mục con "Log Out" */
        .dropdown-menu {
            top: 100%; /* Đẩy xuống dưới avatar */
            right: 0;
            background-color: white;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            min-width: 150px; /* Đặt kích thước tối thiểu */
        }

        /* Đổi màu khi hover */
        .dropdown-menu .dropdown-item {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: #333;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f0f0f0;
        }
        
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
    </div>
    <ul>
        <!-- Main Section -->
        <li class="section-header">Main</li>
        <li><a href="#"><i class="fas fa-users"></i> Student List</a></li>
        <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Accounts</a></li>

        <!-- Reports Section -->
        <li class="section-header">Reports</li>
        <li><a href="#"><i class="fas fa-chart-line"></i> Monthly Collection Report</a></li>

        <!-- Master List Section -->
        <li class="section-header">Master List</li>
        <li><a href="#"><i class="fas fa-building"></i> Dorm List</a></li>
        <li><a href="#"><i class="fas fa-door-open"></i> List of Rooms</a></li>

        <!-- Maintenance Section -->
        <li class="section-header">Maintenance</li>
        <li><a href="#"><i class="fas fa-users-cog"></i> User List</a></li>
        <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
    </ul>
</div>

<!-- Phần Header trên cùng -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #dee2e6; margin-left: 250px;">
    <div class="container-fluid">

        <!-- Tiêu đề hệ thống -->
        <a class="navbar-brand ms-3" href="#">School Dormitory Management System - Admin</a>

        <!-- Phần thông tin tài khoản người dùng -->
        <div class="d-flex align-items-center position-relative me-3">
            <img src="../public/images/user.jpg" class="rounded-circle" alt="User Avatar" width="40" height="40">
            <span class="me-2 ms-2" id="userDropdown" style="cursor: pointer;" onclick="toggleDropdown()">Administrator Admin</span>
            <span class="ms-1" style="cursor: pointer; font-size: 12px;" onclick="toggleDropdown()">▼</span>

            <!-- Khung dropdown -->
            <div id="dropdownMenu" class="dropdown-menu position-absolute" style="display: none;">
                <a class="dropdown-item" href="#">Log Out</a>
            </div>
        </div>
    </div>
</nav>


<!-- Nội dung chính của trang -->
<div class="content">
    <div class="dashboard-header">Welcome, admin!</div>

    <!-- Dashboard cards - Hàng đầu tiên với 3 thẻ -->
    <div style="margin-top: 30px; margin-left: 40px;">
        <div class="row">
            <div class="card">
                <i class="fas fa-building"></i>
                <div class="card-title">Total Dorms</div>
                <div class="card-number">4</div>
            </div>
            <div class="card">
                <i class="fas fa-door-open"></i>
                <div class="card-title">Total Rooms</div>
                <div class="card-number">6</div>
            </div>
            <div class="card">
                <i class="fas fa-users"></i>
                <div class="card-title">Registered Students</div>
                <div class="card-number">2</div>
            </div>
        </div>
    
    </div> 
    
    <!-- Dashboard cards - Hàng thứ hai với 2 thẻ -->
    <div style="margin-top: 30px; margin-left: 40px;">
        <div class="row">
            <div class="card">
                <i class="fas fa-coins"></i>
                <div class="card-title">This Month Total Collection</div>
                <div class="card-number">$8,500.00</div>
            </div>
            <div class="card">
                <i class="fas fa-cogs"></i>
                <div class="card-title">Totals active Accounts</div>
                <div class="card-number">2</div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzPztE1M5rZG/8Xlqh8fATrSWJZDmmW4Ll48dWkOVbCH" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-shoIXUoVOFk60M7DuE4bfOY1pNIqcd9tPCSZrhTDQTXkNv8El+fEfXksqNhUNuUc" crossorigin="anonymous"></script>

<script>
    // Hàm mở và đóng dropdown
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdownMenu");
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
            dropdown.style.display = "block"; // Hiển thị dropdown
        } else {
            dropdown.style.display = "none"; // Ẩn dropdown
        }
    }

    // Đóng dropdown nếu click bên ngoài
    window.onclick = function(event) {
        if (!event.target.matches('#userDropdown') && !event.target.matches('.ms-1')) {
            var dropdown = document.getElementById("dropdownMenu");
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            }
        }
    }
</script>


</body>
</html>
