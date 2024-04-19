<?php 
include 'doiqua-content.php';
$xuthuong = $row["xuthuong"];
// Kiểm tra nếu người dùng đã làm bài trắc nghiệm này trước đó
// Kiểm tra nếu người dùng đã làm bài trắc nghiệm này trước đó
if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $sdt = $_POST['city'];
    $email = $_POST['email'];
    $loaiqua = $_POST['country'];

    // Kiểm tra xem số xu thưởng đủ để đổi quà không
    if ($xuthuong >= 100) {
        // Trừ xu thưởng
        $xuthuong -= 100;
        
        // Cập nhật số xu thưởng mới vào cơ sở dữ liệu
        $sql_update = "UPDATE users SET xuthuong='$xuthuong' WHERE id = $id";
        $result_update = mysqli_query($conn, $sql_update);

        // Thêm thông tin đổi quà vào bảng thongtindoiqua
        $sql_insert = "INSERT INTO thongtindoiqua (fullname, address, sdt, email, loaiqua)
            VALUES ('$fullname', '$address', '$sdt', '$email', '$loaiqua')";
        $result_insert = mysqli_query($conn, $sql_insert);

        if ($result_update && $result_insert) {
            echo '<script language="javascript">alert("Đã đổi quà thành công! Quản trị viên LICHSUVIET sẽ gửi quà cho bạn vào thời gian sớm nhất!"); window.history.back();</script>';
        } else {
            echo "Đã xảy ra lỗi: " . mysqli_error($conn);
        }
    } else {
        echo '<script language="javascript">alert("Số xu thưởng không đủ để đổi quà!"); window.history.back();</script>';
    }
}
?>
