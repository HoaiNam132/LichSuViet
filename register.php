<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="icon" href="/img/logoltk.png">
    <link rel="stylesheet" href="styledangky.css"/>
    <style>
    	 body {
        background-image: url('img/poster.png'); /* Replace 'img/background.jpg' with the correct path to your image */
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }
        .form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 12px;
        }

        .button, .button1 {
            background-color: crimson;
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 8px;
        }

        .button1 {
            background-color: gray;
        }
    </style>
</head>
<body>
    <form method="post" action="#" class="form">

        <h2>Đăng Ký</h2>

        <label for="name">Họ và Tên</label>
        <input type="text" name="name" pattern=".{3,}" placeholder="Họ và Tên" required/>

        <label for="uname">Tên đăng nhập</label>
        <input type="text" name="uname" placeholder="Tên đăng nhập" pattern="[a-z0-9]{5,35}" title="Tên đăng nhập không quá ngắn hoặc dài và không chứa các kí tự đặc biệt" required>

        <label for="password">Mật khẩu</label>
        <input type="password" name="password" placeholder="Mật khẩu" pattern=".{6,}" title="Mật khẩu phải có 6 kí tự trở lên" required/>

        <input type="submit" class="button" name="dangky" value="Đăng Ký"/>
        
        <p><a href="index.php" class="button1">Quay lại</a></p>

        <?php require 'dangky.php';?>

    </form>
</body>
</html>
