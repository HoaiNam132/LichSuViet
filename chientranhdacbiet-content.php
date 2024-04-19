<?php include "./header.php"; ?>
<style>
  p.input{
    text-align:center;
    line-height: 1.5;
  }
  .titleAns{
    font-size: 30px;
    margin: 0.4cm 0.6cm 0.4cm 0.6cm;
    color:rgb(0, 0, 0);
    line-height: 1.5;
    text-align: justify;

  }
  label{
    font-size: 20px;
    font-weight: bold;
    color:#000000;
    line-height: 1.5;
  }
  .container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding-bottom: 1cm;
}

.radio-group {
    text-align: center;
}

  .title{
    font-size:30px;
    text-align:center;
    color:#CC0000;
    font-weight:bold;
    line-height: 1.5;
  }
  .borderdiv {
    margin: 0 2cm 0 2cm;
    max-width:100%;
    color: rgb(87, 80, 80);
    font-size: 20px;
    border: 1.2px solid;
    border-radius: 15px;
}
.question-content{
  text-align:justify;
  font-size: 24px;
  font-weight: bold;
  color:#006600;
  margin-left:1cm;
  line-height:1.5;
  margin-right:1cm;
}
.ans{
  text-align: center;
  line-height: 1.5;
}
.ans-content{
  margin-left: 2cm;
  margin-right: 2cm;
  line-height: 1.5;
  justify-content: space-between; /* Để căn giữa theo chiều ngang */
}
.Notice{
  color:#0066CC;
  font-weight:300;
  margin-left: 1cm;
  line-height: 1.5;
  font-size:20px;
}
.center {
  display: flex;
  line-height: 1.5;
  justify-content: center;
}

.nutsubmit {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 25px;
    cursor: pointer;
    border-radius: 10px;
    font-weight:bold;
  }

  /* Tạo nutsubmit hover */
  .nutsubmit:hover {
    background-color: #3e8e41;
  }

  /* Tạo nutsubmit active */
  .nutsubmit:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }

  /* Tạo nutsubmit disabled */
  .nutsubmit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
  }

 input[type="radio"] {
  width: 40px;
  height: 30px;
}
@media only screen and (max-width: 600px) {
  .question-content{
  font-size: 15px;
  margin-left:0.3cm;
  margin-right:0.3cm;
}
input[type="radio"] {
  width: 26px;
  height: 20px;
}
.Notice{
  margin-left:0.4cm;
  margin-right:0.4cm;
  font-size:14px;
}
.borderdiv {
    margin: 0 0.4cm 0 0.4cm;
    max-width:90%;
}
.nutsubmit {
    padding: 12px 18px;
    font-size: 20px;

  }
  .titleAns{
    font-size: 20px;

  }
}

</style>

<body>
  <p></p>
  <div class="title">Chủ đề: Chiến lược chiến tranh đặc biệt</div>
  <p></p>
  <form method="post" action="chientranhdacbiet.php?id=<?php echo $_GET['id']?>">
    <div class="borderdiv"> 
        <p class="question-content">Câu 1: Âm mưu cơ bản của Mĩ trong chiến lược “chiến tranh đặc biệt” ở miền Nam Việt Nam (1961-1965) là</p>
        <div class="Notice">
          <p >A.“Dùng người Việt đánh người Việt”.</p>
          <p >B.Đưa quân Mĩ ào ạt vào miền Nam.</p>
          <p >C.Đưa quân chư hầu vào miền Nam Việt Nam.</p>
          <p >D.“Lấy chiến tranh nuôi chiến tranh” </p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 2: Lực lượng đóng vai trò nòng cốt trong việc thực hiện chiến lược “chiến tranh đặc biệt” của Mĩ ở miền Nam Việt Nam (1961-1965) là</p>
        <div class="Notice">
          <p >A.Quân đội Việt Nam Cộng hòa</p>
          <p >B.Quân viễn chinh Mĩ</p>
          <p >C.Quân đồng minh Mĩ</p>
          <p >D.Quân viễn chinh và đồng minh Mĩ</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 3: Mục tiêu của kế hoạch Giônxơn – Mác Namara trong chiến lược “chiến tranh đặc biệt” ở miền Nam (1961-1965) là gì?</p>
        <div class="Notice">
          <p >A.Hoàn thành bình định có trọng điểm miền Nam trong vòng 2 năm</p>
          <p >B.Hoàn thành bình định miền Nam trong vòng 18 tháng</p>
          <p >C.Hoàn thành bình định miền Nam trong vòng 16 tháng</p>
          <p >D.Hoàn thành bình định miền Nam trong vòng 24 tháng </p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 4: Xương sống của chiến lược “chiến tranh đặc biệt” Mĩ thực hiện ở miền Nam Việt Nam là</p>
        <div class="Notice">
          <p >A.Quân đội Việt Nam Cộng hòa</p>
          <p >B.Cố vấn Mĩ</p>
          <p >C.Phương tiện chiến tranh của Mĩ</p>
          <p >D.Ấp chiến lược</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="1">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 5: Chiến lược “chiến tranh đặc biệt” (1961-1965) của Mĩ ở miền Nam Việt Nam được triển khai thông qua những kế hoạch nào?</p>
        <div class="Notice">
          <p >A.Xtalây- Taylo</p>
          <p >B.Giôn xơn- Mác Namara </p>
          <p >C.Xtalây- Taylo và Giônxơn- Mác Namara </p>
          <p >D.Bên miệng hố chiến tranh</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="1">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 6: “Một tấc không đi, một ly không rời” là khẩu hiệu đấu tranh của phong trào nào?</p>
        <div class="Notice">
          <p >A.Cuộc đấu tranh của các tín đồ Phật giáo </p>
          <p >B.Phá ấp chiến lược</p>
          <p >C.Cuộc đấu tranh của học sinh, sinh viên</p>
          <p >D.Cuộc đấu tranh chống càn quét</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 7: Những thắng lợi của quân dân miền Nam trên mặt trận quân sự trong xuân - hè 1965 có tác động như thế nào đến chiến lược "Chiến tranh đặc biệt"?</p>
        <div class="Notice">
          <p >A.Đánh dấu sự phá sản hoàn toàn của chiến lược “Chiến tranh đặc biệt” ở miền Nam Việt Nam </p>
          <p >B.Làm phá sản về cơ bản chiến lược “Chiến tranh đặc biệt” </p>
          <p >C.Chứng tỏ quân dân miền Nam có thể đánh bại chiến lược chiến tranh xâm lược thực dân mới của Mỹ</p>
          <p >D.Đánh dấu sự sụp đổ hoàn toàn của quốc sách “ấp chiến lược” của địch</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="1">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 8: Vì sao Mĩ lại chuyển sang thực hiện Chiến lược "Chiến tranh đặc biệt" (1961 - 1965) ở miền Nam Việt Nam?</p>
        <div class="Notice">
          <p >A.Hình thức thống trị bằng chính quyền tay sai độc tài Ngô Đình Diệm bị thất bại  </p>
          <p >B.Phong trào "Đồng khởi" đã phá vỡ hệ thống chính quyền địch ở miền Nam </p>
          <p >C.Chính quyền tay sai độc tài Ngô Đình Diệm khủng bố cách mạng miền Nam </p>
          <p >D.Hình thức thống trị bằng chính quyền tay sai độc tài Ngô Đình Diệm được củng cố</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 9: Bản chất của chiến lược “chiến tranh đặc biệt” của Mĩ thực hiện ở miền Nam Việt Nam là</p>
        <div class="Notice">
          <p >A.Chiến tranh xâm lược thực dân kiểu cũ </p>
          <p >B.Chiến tranh xâm lược thực dân kiểu mới </p>
          <p >C.Nội chiến giữa hai miền Nam </p>
          <p >D.Chiến tranh giới hạn</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
      <p class="question-content">Câu 10: Đâu không phải là nguyên nhân khiến sau chiến thắng Ấp Bắc (1963) một phong trào chống Mĩ lại dấy lên khắp miền Nam?
      </p>
        <div class="Notice">
          <p >A.Chứng minh quân dân miền Nam hoàn toàn có khả năng đánh thắng “chiến tranh đặc biệt"  </p>
          <p >B.Lòng tin của quân đội Sài Gòn vào trang bị vũ khí hiện đại của Mĩ bị đánh sụp </p>
          <p >C.Lực lượng vũ trang cách mạng miền Nam có bước trưởng thành vượt bậc</p>
          <p >D.Bước đầu làm phá sản chiến lược “chiến tranh đặc biệt”</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="1">
          </div>
        </div>
      </div>
      <p></p>
</div>
<p class = "center"><input class="nutsubmit" name="submit" type="submit" value="Hoàn thành"></p>
</form>
</body>