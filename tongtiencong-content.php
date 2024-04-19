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
  <div class="title">Chủ đề: Tổng tiến công và nổi dậy mùa Xuân năm 1975 và giải phóng miền Nam 1975</div>
  <p></p>
  <form method="post" action="tongtiencong.php?id=<?php echo $_GET['id']?>">
    <div class="borderdiv"> 
        <p class="question-content">Câu 1: Chiến dịch Hồ Chí Minh diễn ra ngày nào ?</p>
        <div class="Notice">
          <p >A.22/04/1975</p>
          <p >B.23/04/1975</p>
          <p >C.25/04/1975</p>
          <p >D.26/04/1975 </p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="0">
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
            <input type="radio"  name="myRadio1" value="1">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 2: Cuộc tổng tiến công và nổi dậy mùa xuân năm 1975 bao gồm mấy chiến dịch lớn ?
</p>
        <div class="Notice">
          <p >A.2</p>
          <p >B.3</p>
          <p >C.4</p>
          <p >D.5</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="1">
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
        <p class="question-content">Câu 3: Thành phố nào là căn cứ liên sự hợp lớn nhất của Việt Nam Cộng hòa , là thành phố lớn thứ hai ở Miền Nam được giải phóng tổng tiến công và nổi dậy mùa xuân 1975 ?</p>
        <div class="Notice">
          <p >A.TP. Hồ Chí Minh</p>
          <p >B.TP. Đà Nẵng</p>
          <p >C.TP. Biên Hòa ( Đồng Nai )</p>
          <p >D.TP. Cần Thơ </p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="1">
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
        <p class="question-content">Câu 4: Chiến dịch giải phóng thành phố Sài Gòn - Gia Định mang tên Hồ Chí Minh được chính thức quyết định ngày nào ? </p>
        <div class="Notice">
          <p >A.Ngày 8 - 4</p>
          <p >B.Ngày 12 - 4</p>
          <p >C.Ngày 14 - 4</p>
          <p >D.Ngày 22 - 4</p>
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
            <input type="radio"  name="myRadio4" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="0">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 5: Viên phi công của quân đội Sài Gòn phản chiến thực hiện vụ ném bom dinh Độc Lập ngày 8 - 4 - 1975 tên là gì ?
</p>
        <div class="Notice">
          <p >A.Nguyễn Thành Trung </p>
          <p >B.Nguyễn Văn Nghĩa </p>
          <p >C.Nguyễn Văn Bảy </p>
          <p >D.Nguyễn Nhật Chiêu</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
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
        <p class="question-content">Câu 6: Địa danh nào được mang tên " Cánh Cửa Thép " cuối cùng bảo vệ Sài Gòn từ hướng Đông của Việt Nam Cộng hòa ?</p>
        <div class="Notice">
          <p >A.Trảng Bom </p>
          <p >B.Biên Hòa</p>
          <p >C.Xuân Lộc</p>
          <p >D.Long Khánh</p>
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
            <input type="radio"  name="myRadio6" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="1">
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
        <p class="question-content">Câu 7: Mệnh lệnh " Thần tốc , thần tốc hơn nữa , táo bạo , táo bạo hơn nữa , tranh thủ từng giờ từng phút , xốc tới mặt trận , giải phóng Miền Nam . Quyết Chiến và toàn thắng " do ai đưa ra ? </p>
        <div class="Notice">
          <p >A.Thiếu tướng Lê Ngọc Hiền</p>
          <p >B.Đại tướng Văn Tiến Dũng</p>
          <p >C.Đại tướng Võ Nguyễn Giáp</p>
          <p >D.Tổng bí thư Lê Duẩn</p>
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
        <p class="question-content">Câu 8: Chiến thắng nào vào đầu năm 1975 là chiến thắng đầu tiên trong lịch sử kháng chiến chống Mỹ cứu nước ở miền Nam Việt nam mà nhân dân ta giành được quyền làm chủ trong phạm vi một tỉnh ?</p>
        <div class="Notice">
          <p >A.Phước Long   </p>
          <p >B.Bình Long</p>
          <p >C.Biên Hòa </p>
          <p >D.Thủ Dầu Một</p>
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
        <p class="question-content">Câu 9: Chiến dịch nào đã mở màn cho đại thắng mùa xuân 1975 ? </p>
        <div class="Notice">
          <p >A. Chiến dịch Tây Nguyên </p>
          <p >B. Chiến dịch Trị - Thiên  </p>
          <p >C. Chiến dịch Huế - Đà Nẵng  </p>
          <p >D. Chiến dịch Phước Long </p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="1">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="0">
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
      <p class="question-content">Câu 10: Chiến sĩ đầu tiên cắm lá cờ chiến thắng của mặt trận dân tộc giải phóng miền Nam Việt Nam trên nóc dinh Độc lập vào ngày 30 - 4 - 1975 là ai ? 
      </p>
        <div class="Notice">
          <p >A.Nguyễn Văn Kỷ   </p>
          <p >B.Lữ Văn Hỏa </p>
          <p >C.Thái Bá Minh</p>
          <p >D.Bùi Quang Thuận</p>
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