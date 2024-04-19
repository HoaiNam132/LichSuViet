
<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập  </title>
<link rel="icon" href="/img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="styledangnhap.css">
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
    .button {
      background-color: Crimson;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      width: 50%;
      cursor: pointer;
    }
    
    .button2 {
      background-color: rgb(87, 60, 65)
      border: none;
      color: white;
      padding: 16px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      width: 45%;
      cursor: pointer;
    }

</style>
</head>
<body>

     <form action="login.php" method="post">
     	<h2>Đăng Nhập</h2>  
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label><strong>Tên đăng nhập</strong></label>
     	<input type="text" name="uname" placeholder="Tên đăng nhập"><br>
     	<label><strong>Mật Khẩu</strong></label>
     	<input type="password" name="password" placeholder="Mật khẩu" ><br>
     	<button type="submit" class="button">Đăng Nhập</button>
		 <a href = "register.php" class="button2"> Đăng ký </a>
		
       </form>
</body>
</html>
