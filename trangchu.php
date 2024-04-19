<?php include 'header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .anh {
            max-width: 60%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        a.button {
            display: inline-block;
            padding: 15px 20px;
            background-color: #4CAF50;
            color: white;
            font-weight:bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a.button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <img class ="anh" src="img/lsviet.png" alt="Description of the image">
    <p><a href="index.php" class="button">Đăng xuất</a></p>
</body>

</html>
