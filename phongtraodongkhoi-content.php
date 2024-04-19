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
  <div class="title">Chủ đề: Phong trào Đồng Khởi</div>
  <p></p>
  <form method="post" action="phongtraodongkhoi.php?id=<?php echo $_GET['id']?>">
    <div class="borderdiv"> 
        <p class="question-content">Câu 1: Bước ngoặt của cách mạng miền Nam sau phong trào “Đồng khởi” năm 1960 là</p>
        <div class="Notice">
          <p >A. Chuyển từ thế giữ gìn lực lượng sang thế tiến công</p>
          <p >B. Chuyển sang tổng tiến công trên khắp miền Nam</p>
          <p >C. Chuyển từ phòng ngự sang phản công chiến lược</p>
          <p >D. Chuyển từ đấu tranh chính trị sang đấu tranh vũ trang </p>
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
        <p class="question-content">Câu 2: Thắng lợi nào của nhân dân miền Nam đã đưa cách mạng miền Nam từ thế giữ gìn lực lượng sang thế tiến công</p>
        <div class="Notice">
          <p >A. Ấp Bắc</p>
          <p >B. Bác Ái</p>
          <p >C. Đồng Khởi</p>
          <p >D. Vạn Tường </p>
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
            <input type="radio"  name="myRadio2" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="1">
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
        <p class="question-content">Câu 3: Tại hội nghị lần thứ 15 Ban chấp hành Trung ương Đảng (1-1959) đã xác định phương pháp cách mạng của cuộc đấu tranh giải phóng dân tộc ở miền Nam là</p>
        <div class="Notice">
          <p >A. Đấu tranh chính trị</p>
          <p >B. Đấu tranh vũ trang</p>
          <p >C. Bạo lực cách mạng</p>
          <p >D. Đấu tranh </p>
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
            <input type="radio"  name="myRadio3" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="1">
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
        <p class="question-content">Câu 4: Phong trào nào đã chuyển cách mạng miền Nam từ thế giữ gìn lực lượng sang tiến công?</p>
        <div class="Notice">
          <p >A. Phong trào Hòa Bình (1954)</p>
          <p >B. Phong Trào Đồng Khởi (1959-1960)</p>
          <p >C. Cuộc tổng tiến công và nổi dậy xuân Mậu Thân (1968)</p>
          <p >D. Tấn công chiến lượt (1972) </p>
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
        <p class="question-content">Câu 5: Đâu không phải là ý nghĩa của phong trào Đồng Khởi?</p>
        <div class="Notice">
          <p >A. Làm phá sản chiến lược “chiến tranh đơn phương” của đế quốc Mĩ </p>
          <p >B. Làm lung lay tận gốc chính quyền tay sai Ngô Đình Diệm </p>
          <p >C. Chuyển cách mạng miền Nam từ thế giữ gìn lực lượng sang thế tiến công </p>
          <p >D. Chứng tỏ quân dân miền Nam hoàn toàn có thể đánh thắng các chiến lược chiến tranh của Mĩ</p>
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
            <input type="radio"  name="myRadio5" value="0">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="1">
          </div>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 6: Vì sao Hội nghị 15 Ban chấp hành trung ương Đảng Lao động Việt Nam (1-1959) quyết định để nhân dân miền Nam sử dụng bạo lực cách mạng?</p>
        <div class="Notice">
          <p >A. Các lực lượng cách mạng miền Nam đã phát triển  </p>
          <p >B. Hành động khủng bố dã man của chính quyền Mĩ- Diệm  </p>
          <p >C. Đã có lực lượng chính trị và lực lượng vũ trang lớn mạnh  </p>
          <p >D. Mĩ và chính quyền Sài Gòn phá hoại hiệp định Giơ-ne-vơ</p>
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
        <p class="question-content">Câu 7: Nguyên nhân trực tiếp dẫn đến sự bùng nổ của phong trào Đồng Khởi (1959-1960) là ?</p>
        <div class="Notice">
          <p >A. Lực lượng cách mạng được giữ gìn và phát triển trong những năm 1954-1959  </p>
          <p >B. Mâu thuẫn giữa nhân dân miền Nam với chính quyền Mĩ- Diệm </p>
          <p >C. Tác động của nghị quyết 15 Ban chấp hành Trung ương Đảng (1-1959)</p>
          <p >D. Hành động phá hoại hiệp định Giơ-ne-vơ của chính quyền Mĩ - Diệm</p>
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
        <p class="question-content">Câu 8: Nguyên nhân cơ bản nhất dẫn đến bùng nổ phong trào “Đồng khởi” 1959 -1960 là ?</p>
        <div class="Notice">
          <p >A. Mỹ - Diệm phá hoại Hiệp định Giơnevơ, thực hiện chính sách “tố cộng”, “diệt cộng”.  </p>
          <p >B. Thông qua nghị quyết Hội nghị lần thứ XV của Đảng về đường lối cách mạng miền Nam. </p>
          <p >C. Do chính sách cai trị của Mỹ - Diệm làm cho cách mạng miền Nam bị tổn thất nặng. </p>
          <p >D. Mỹ Diệm phá hoại hiệp định, thực hiện chiến dịch tố cộng diệt cộng, thi hành Luật 10-59  lê máy chém đi khắp miền Nam làm cho cách mạng miền Nam bị tổn thất nặng nề.</p>
        </div>       
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="1">
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
        <p class="question-content">Câu 9: Đâu là lực lượng chính trị trực tiếp lãnh đạo cách mạng miền Nam sau phong trào Đồng Khởi (1959-1960)?</p>
        <div class="Notice">
          <p >A. Đảng Lao động Việt Nam   </p>
          <p >B. Mặt trận Dân tộc giải phóng miền Nam Việt Nam </p>
          <p >C. Nổ ra ngay sau khi nghị quyết 15 ra đời, chứng tỏ đường lối của Đảng là đúng </p>
          <p >D. Phát triển mạnh ngay trong các đô thị miền Nam</p>
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
      <p class="question-content">Câu 10: Đâu là nhận xét đúng và đầy đủ về Nghị quyết lần thứ 15 của Trung ương Đảng (1/1959)?
      </p>
        <div class="Notice">
          <p >A. Chỉ ra một cách toàn diện con đường tiến lên cách mạng Việt Nam  </p>
          <p >B. Thể hiện sự độc lập, tự chủ, quyết đoán của Đảng trong quá trình lãnh đạo cách mạng  </p>
          <p >C. Ra đời muộn nhưng đáp ứng đúng yêu cầu lịch sử của cách mạng miền Nam, chỉ ra một cách toàn diện con đường tiến lên của cách mạng miền Nam </p>
          <p >D. Ra đời muộn nhưng đáp ứng yêu cầu lịch sử của cách mạng miền Nam.</p>
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