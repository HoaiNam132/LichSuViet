<?php
include "configDB.php";
$id = $_GET['id'];
$CheckDatabase = "SELECT *FROM users WHERE id = $id";
$SQL = mysqli_query($conn, $CheckDatabase);
$row = mysqli_fetch_assoc($SQL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LICHSUVIET - Công cụ hỗ trợ học tập bộ môn lịch sử</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style for the dropdown items */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown content when hovering over the dropdown */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #07ad04; /* Màu cam nhạt */
            padding: 10px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #024e34; /* Màu cam đậm khi hover */
        }

        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: white;
        }

        .navbar .menu {
            display: flex;
            margin: 0 auto; /* Thêm margin để căn giữa */
        }

        .navbar .menu a {
            margin: 0 10px;
        }

        .menu-icon {
            display: none;
            cursor: pointer;
            font-size: 1.5em;
            color: white;
        }

        @media only screen and (max-width: 600px) {
            .navbar .menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #07ad04; /* Màu cam nhạt */
            }
            .navbar .menu.show {
                display: flex;
            }

            .menu-icon {
                display: block;
            }

            .navbar .menu a {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="menu-icon" onclick="toggleMenu()">  ☰ Menu</div>
        <div class="menu">
<a href="trangchu.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Trang Chủ</a>
<a href="tailieuhoctap.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Tài Liệu Học Tập</a>
<a href="theodonglichsu.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Theo Dòng Lịch Sử</a>
<a href="tieusuanhhung.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Tiểu Sử Anh Hùng</a>
<a href="tracnghiemvui.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Trắc Nghiệm Vui</a>
<a href="doiqua.php?id=<?php echo $id ?>" style ="font-size:20px;font-weight:bold;">Đổi Quà</a>

        </div>
    </div>

    

    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>