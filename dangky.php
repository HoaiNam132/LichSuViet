<?php
include "configDB.php";

if (isset($_POST['dangky'])) {
    $uname = trim($_POST['uname']);
    $password = trim($_POST['password']);
    $name = trim($_POST['name']);

    // Check if the username is already taken
    $checkQuery = "SELECT * FROM users WHERE user_name = '$uname'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo '<script language="javascript">alert("Tên đăng nhập đã được sử dụng! Vui lòng chọn tên đăng nhập khác!"); window.location="register.php";</script>';
        die();
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO `users` (`user_name`, `password`, `name`, `xuthuong`, `thongtindoiqua`, `TN1`, `TN2`,`TN3`,`TN4`) VALUES (?, ?, ?, 0, '', '', '','','')";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            mysqli_stmt_bind_param($stmt, "sss", $uname, $password, $name);
            mysqli_stmt_execute($stmt);

            echo '<script language="javascript">alert("Đăng ký thành công! Hệ thống sẽ chuyển hướng sang trang đăng nhập!"); window.location="index.php";</script>';
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý! Vui lòng thử lại!"); window.location="register.php";</script>';
        }

        mysqli_stmt_close($stmt);
    }
}
?>
