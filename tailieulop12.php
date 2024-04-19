<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lịch Sử - Sách Giáo Khoa Lớp 12</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header, footer {
  text-align: center;
  padding: 5px 0;
}

main {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.chapter {
    border:3px solid green;
  margin-bottom: 20px;
  background-color: #f1efef;
  max-width:50%;
  padding: 15px;
  border-radius: 5px;

}

.chapter h2 {
  display: block;
  border:3px solid white;
  background-color: green;
  color: white;
  text-decoration: none;
  padding: 10px;
  width: 80%;
  text-align: center;
  margin-top: 10px;
  font-weight:Bold;
  border-radius: 5px;
}


.chapter a {
  display: block;
  border:3px solid white;
  background-color: #33FF33;
  color: black;
  text-decoration: none;
  padding: 10px;
  width: 80%;
  text-align: center;
  margin-top: 10px;
  font-weight:Bold;
  border-radius: 5px;
}

.chapter a:hover {
  background-color: #00CC00;
}

@media only screen and (max-width: 600px) {
  main {
    flex-direction: row;
    justify-content: center;
  }

  .chapter {
    max-width: 80%;
  }
}

  </style>
</head>
<body>
  <p></p>
  <center>
    
    <section id="chuong1" class="chapter" style = "background-image: url('img/ctl1.jpg');background-size: cover; background-position: center;">
      <h2>Chủ đề 1: Thế giới trong và sau chiến tranh lạnh</h2>
      <a href="lienhopquoc.php?id=<?php echo $id; ?>">Bài 1: Liên hợp quốc</a>
      <a href="coldwar.php?id=<?php echo $id; ?>">Bài 2: Trật tự thế giới trong chiến tranh lạnh</a>
      <a href="coldwar.php?id=<?php echo $id; ?>">Bài 3: Trật tự thế giới sau chiến tranh lạnh</a>
    </section>
    
    <section id="chuong2" class="chapter" style = "background-image: url('img/asean.jpg');background-size: cover; background-position: center;">
      <h2>Chủ đề 2: ASEAN: Những chặng đường lịch sử</h2>
      <a href="asean1.php?id=<?php echo $id; ?>">Bài 4: Sự ra đời và phát triển của Hiệp hội các quốc gia ĐNÁ (ASEAN)</a>
      <a href="asean2.php?id=<?php echo $id; ?>">Bài 5: Cộng đồng ASEAN - từ ý tưởng đến hiện thực</a>
    </section>
    
    <section id="chuong3" class="chapter" style = "background-image: url('img/gpdt.jpg');background-size: cover; background-position: center;">
      <h2>Chủ đề 3: Cách mạng tháng Tám năm 1945, chiến tranh giải phóng dân tộc và chiến tranh bảo vệ tổ quốc trong lịch sử Việt Nam</h2>
      <a href="cmtt.php?id=<?php echo $id; ?>">Bài 6: Cách mạng tháng Tám năm 1945</a>
      <a href="khangchienchongphap.php?id=<?php echo $id; ?>">Bài 7: Cuộc kháng chiến chống thực dân Pháp (1945-1954)</a>
      <a href="khangchienchongmy.php?id=<?php echo $id; ?>">Bài 8: Cuộc kháng chiến chống Mỹ cứu nước (1954-1975)</a>
    </section>
    <!-- Thêm các chương khác tương tự -->
</center>
  
  <footer>
    <p>&copy; 2024 Lịch Sử - Sách Giáo Khoa Lớp 12</p>
  </footer>
</body>
</html>
