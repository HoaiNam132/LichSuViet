<?php
    include "header.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p{
            line-height:3;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        
        .product-item {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            width: 25%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        
        .product-item img {
            max-width: 100%;
            height: 200px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .product-item:hover {
            transform: scale(1.05);
        }
            .btn-submit {
                background-color: #4CAF50;
                color: white;
                padding: 15px 20px;
                border: none;
                border-radius: 5px;
                font-size: 20px;
                cursor: pointer;
                font-weight: bold;
                text-decoration: none; /* Loại bỏ gạch chân */
                transition: background-color 0.3s ease;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            }
            
            .btn-submit:hover {
                background-color: #45a049;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

        
        /* CSS cho thiết bị di động */
        @media screen and (max-width: 768px) {
            .product-item {
                width: 100%;
            }
        }
    </style>
    <title>Shop</title>
</head>
<center>
<h1><b style ="color:red;" >ĐỔI QUÀ </b></h1>
</center>
<body>
    
    <div class="product-list">
        <div class="product-item">
            <img src="/img/d1.jpg" alt="Product 3">
            <h3>Dụng cụ học tập cho bé</h3>
            <p>Loại sản phẩm: Bộ Học tập cho bé</p>
            <p> Thước kẻ, bút chì, bút bi, tẩy, gọt bút chì, kéo</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/d2.jpg" alt="Product 3">
            <h3>Bộ dụng cụ học tập tiện dụng</h3>
            <p>Loại sản phẩm: Bộ Học tập cho bé</p>
            <p> Thước kẻ, bút chì, bút bi, tẩy, gọt bút chì, kéo</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/d3.jpg" alt="Product 3">
            <h3>Vở ghi chép học tập bìa in hình gấu dễ thương</h3>
              <p>Loại sản phẩm: Bộ Học tập cho bé</p>
            <p> Chất liệu giấy đẹp, không nhòe, dễ nhìn, ăn mực</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/v1.jpg" alt="Product 3">
            <h3>Set 4 cuốn Tập A5 Gấu cute</h3>
            <p>Kích thước: 21 x 14cm</p>
            <p>Sổ tay ghi chú tiện dụng, có thể mang đi mọi nơi</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/v2.jpg" alt="Product 3">
            <h3>Bìa vở trang trí khủng long xanh</h3>
            <p>Kích thước: 21 x 14cm</p>
            <p>Sổ tay ghi chú tiện dụng, có thể mang đi mọi nơi</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/v3.jpg" alt="Product 3">
            <h3>Set 6 Bút Mực Gel Hoạt Hình</h3>
            <p>Phong cách: Nhật Bản và Hàn Quốc</p>
            <p> Màu mực đẹp, không nhòe, dễ nhìn, không bị lem</p>
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/c1.jpg" alt="Product 1">
            <h3>Ba Lô MLKSRH KQES  </h3>
            <p>Ba Lô Giấy Kraft Mẫu Mới Phong Cách Hàn Quốc Dành Cho Học Sinh Tiểu Học 6 Đến MLKSRH KQES 0 Tuổi</p>
            <p>Chất liệu lót: Polyester (sợi polyester)</p>
            <p>Kích thước: 31x43x12cm</p>  
                   <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/c2.jpg" alt="Product 2">
            <h3>Balo Ulzzang </h3>
            <p>Balo ulzzang đi học, chống thấm - MTKV</p>
            <p>Kích thước: 31x43x12cm</p>  
            <p>Đựng dư a4, đựng tập vở đi học thoải mái</p> 
            <p> Dùng đi học, đi chơi.</p>
             <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
        <div class="product-item">
            <img src="/img/c3.jpg" alt="Product 3">
            <h3>Ba Lô Nam Học Sinh Trung Học</h3>
            <p>Ba lô Ba lô học sinh trung học sành điệu</p>
            <p>Chất liệu lót: Polyester (sợi polyester)</p>
            <p>Kết cấu: Nylon</p>
            <p>Kích thước: 31x43x12cm</p>  
              <p></p><a href="sitedoiqua.php?id=<?php echo $id ?>" class="btn-submit">Đổi Quà</a>
        </div>
    

    </div>
</body>
</html>
