<?php 
ob_start();
session_start(); 
include "configDB.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu");
        setTimeout(function(){ window.location.href = "index.php"; }, 50);
        </script>';
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $id = $row['id'];
                    echo '<script language="javascript">
                    alert("Đăng Nhập Thành Công !");
                    setTimeout(function() {
                        window.location.href = "trangchu.php?id=' . $id . '";
                    }, 300);
                    </script>';
                exit();  
            } else {
                echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu");
                setTimeout(function(){ window.location.href = "index.php"; }, 50);
                </script>';
                exit();
            }
        } else {
            echo '<script language="javascript">alert("Đã có lỗi xảy ra trong quá trình truy vấn cơ sở dữ liệu");setTimeout(function(){ window.location.href = "index.php"; }, 50);</script>';
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
