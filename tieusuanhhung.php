<?php
include "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <style>
      body {
        text-align: center;
    }

    .khung {
        background-color: #ffffff;
        border: 3px solid green;
        max-width: 60%;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 23px;
        margin-top:0.5cm;
        text-decoration: none; /* Remove underlines from links */
        color: inherit; /* Inherit text color from the parent */
    }
    .information {
        font-size: 25px;
        font-weight: bold;
        color: red ;
        text-align:center;
        text-decoration: none;
        width: 60%; /* Adjusted width for better responsiveness */
    }

    .anh {
        width: 25%;
        height: 300px;
        border: 2px solid #000000; /* Thêm đường viền 2px solid màu xanh dương */
        border-radius: 3%;
    }

    @media only screen and (max-width: 600px) {
        .khung {
            width: 100%;
            align-items: center;
            justify-content: space-between;
        }

        .information {
            font-size: 14px;
            width: 50%; /* Full width on smaller screens */
            margin-bottom: 10px; /* Added margin for better spacing */
        }

        .anh {
            width: 30%;
            height: 100px; /* Maintain aspect ratio */
        }
    }
    .khung:hover {
        color: rgb(255, 255, 255);
    }
    </style>
</head>

<center>
    <a href="anhhungnguyenvantroi.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Nguyễn Văn Trỗi – một tấm gương cách mạng sáng ngời</p>
        <img src="img/nguyenvantroiposter.jpg" alt="Image" class="anh">
    </a>
    
    <a href="anhhungnguyenvietxuan.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Nguyễn Viết Xuân - Biểu tượng Anh hùng Cách mạng Việt Nam
</p>
        <img src="img/nvx2.jpg" alt="Image" class="anh">
    </a>
    <!-- // -->
    <a href="anhhungvothisau.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Cuộc đời và chiến công của Võ Thị Sáu – Người nữ anh hùng</p>
        <img src="img/vothisau.jpg" alt="Image" class="anh">
    </a>
    <a href="anhhunglytutrong.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Lý Tự Trọng - Một tấm gương sáng ngời về tinh thần quả cảm</p>
        <img src="img/lytutrong.jpg" alt="Image" class="anh">
    </a>
    <a href="anhhungcuchinhlan.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Anh hùng Cù Chính Lan - người con quả cảm của xứ Quỳnh Đôi, Nghệ An.</p>
        <img src="img/cuchinhlan.jpg" alt="Image" class="anh">
    </a>
    <a href="sukiengacma.php?id=<?php echo $id ?>" class="khung">
        <p class="information">Sự kiện Gạc Ma - 64 anh hùng liệt sĩ là gương sáng cho mai sau</p>
        <img src="img/gacma1.jpg" alt="Image" class="anh">
    </a>
    <p></p>
    </center>

</html>
