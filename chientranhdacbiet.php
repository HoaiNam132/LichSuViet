<?php 
include 'chientranhdacbiet-content.php';
include 'dieukienchonTN.php';

$Count = 0;
$xuthuong = $row["xuthuong"];
// Kiểm tra nếu người dùng đã làm bài trắc nghiệm này trước đó
if ($row["TN2"] == '1') {
    echo '<script language="javascript">alert("Bạn đã làm bài trắc nghiệm này rồi!"); window.history.back();</script>';
    exit();
} else {
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST['myRadio'.$i])) {
            $Count += intval($_POST['myRadio'.$i]);
        }
    }

    if (isset($_POST['submit'])) {
        $xuthuong += $Count * 10;
        $sql = "UPDATE users SET xuthuong='$xuthuong', TN2 = '1' WHERE id = $id";
        $result = $conn->query($sql);

        if ($result) {
            echo '<script language="javascript">alert("Hoàn thành! Bạn đạt được ' . $Count . ' câu đúng! Bạn đã nhận được ' . $Count*10 . ' xu đổi quà! Số xu thưởng hiện tại: ' . $xuthuong . ' xu !"); window.history.back();</script>';
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý! Vui lòng thử lại!"); window.history.back();</script>';
        }
        exit();
    }
}
?>
