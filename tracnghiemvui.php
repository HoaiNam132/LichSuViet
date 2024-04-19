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
            border: 2px solid #148e59;
            width: 50%;
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
            text-decoration: none;
            width: 50%; /* Adjusted width for better responsiveness */
        }

        .anh {
            width: 35%;
            height: 200px;
            border-radius: 3%;
            border: 2px solid rgb(243, 235, 235);
        }

        @media only screen and (max-width: 600px) {
            .khung {
                width: 80%;
                align-items: center;
                justify-content: space-between;
            }

            .information {
                font-size: 17px;
                width: 60%; /* Full width on smaller screens */
                margin-bottom: 10px; /* Added margin for better spacing */
            }

            .anh {
                width: 30%;
                height: 80px; /* Maintain aspect ratio */
            }
        }
        .khung:hover {
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<center>
    <h1 style= "color:#003333;">Chọn chủ đề làm trắc nghiệm </h1>
<a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ dựng nước và giữ nước (<span>2.879 TCN - 938)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l1.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Bắc thuộc lần thứ I <span>(208 TCN – 39)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l2.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Trưng Nữ Vương <span>(40 – 43)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l3.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Bắc thuộc lần II <span>(43 – 543)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l4.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Nhà Tiền Lý <span>(544 - 602)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l5.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Bắc thuộc lần III <span>(602 – 905)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l6.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Bắc thuộc lần IV <span>(1413 – 1428)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l7.jpg" alt="Image" class="anh">
    </a>

    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ Trịnh - Nguyễn phân tranh (1593 – 1778)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l9.jpg" alt="Image" class="anh">
    </a>
    <a href="thongbao2.html" class="khung">
        <p class="information">Thời kỳ thống nhất (1802 – 1883)</p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l10.jpg" alt="Image" class="anh">
    </a>
    <a href="selectKCCP.php?id=<?php echo $id; ?>" class="khung">
        <p class="information">Thời kỳ kháng chiến chống Pháp <span>(1945 - 1954)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l11.jpg" alt="Image" class="anh">
    </a>
    <a href="selectKCCM.php?id=<?php echo $id; ?>" class="khung">
        <p class="information">Thời kỳ kháng chiến chống Mỹ <span>(1954 - 1975)</span></p>
        <!-- Add your image here with the appropriate HTML and CSS -->
        <img src="img/l12.jpg" alt="Image" class="anh">
    </a>
    
    </center>

</html>
