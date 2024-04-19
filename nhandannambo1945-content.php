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
  <div class="title">Chủ đề: Kháng chiến của nhân dân Nam Bộ chống thực dân Pháp trở lại xâm lược (1945)</div>
  <p></p>
  <form method="post" action="nhandannambo1945.php?id=<?php echo $_GET['id']?>">
  <div class="borderdiv"> 
        <p class="question-content">Câu 1: Cuộc chiến đấu nào của quân nhân Việt Nam đã tạo điều kiện để cả nước đi vào cuộc kháng chiến chống Pháp lâu dài?</p>
        <div class="Notice">
          <p > A. Cuộc chiến đấu ở các đô thị phía Bắc vĩ tuyến 16 </p>
          <p > B. Chiến dịch Việt Bắc thu - đông </p>
          <p > C. Chiến dịch Biên giới thu - đông </p>
          <p > D. Chiến dịch trung du và đồng bằng Bắc Bộ  </p>
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
        <p class="question-content">Câu 2: Bất kì đàn ông, đàn bà, bất kì người già người trẻ, không chia tôn giáo đảng phái, dân tộc. Hễ là người Việt Nam thì phải đứng lên đánh thực dân Pháp để cứu Tổ quốc” Đoạn văn trên phản ánh nội dung nào trong đường lối kháng chiến chống Pháp của Đảng?</p>
        <div class="Notice">
          <p > A. Kháng chiến toàn dân </p>
          <p > B. Kháng chiến toàn diện </p>
          <p > C. Kháng chiến trường kì </p>
          <p > D. Tự lực cánh sinh. </p>
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
        <p class="question-content">Câu 3: Tại hội nghị lần thứ 15 Ban chấp hành Trung ương Đảng đã xác định phương pháp cách mạng của cuộc đấu tranh giải phóng dân tộc ở miền Nam là</p>
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
        <p class="question-content">Câu 4: Ngày Nam Bộ kháng chiến chống Pháp trở lại xâm lược là ngày</p>
        <div class="Notice">
          <p > A. Ngày 6/9/1945. </p>
          <p > B. Ngày 23/9/1945. </p>
          <p > C. Ngày 5/10/1945. </p>
          <p > D. Ngày 22/9/1945.  </p>
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
        <p class="question-content">Câu 5: Vì sao cuộc kháng chiến toàn quốc chống Pháp bùng nổ ngày 19/12/1946?</p>
        <div class="Notice">
          <p > A. Đó là thời điểm ta đã hoàn tất mọi công tác chuẩn bị cho kháng chiến, còn Pháp đang gặp khó khăn vì xung đột Pháp - Anh ở Nam bộ đã bùng nổ.  </p>
          <p > B. Lúc này viện quân Pháp vừa mới đến Hải Phòng, chưa kịp củng cố lực lượng, ta chủ động tiến công để tạo thế áp đảo, bất ngờ.  </p>
          <p > C. Sự nhân nhượng đã đến giới hạn, dân tộc ta không thể lùi thêm được nữa, không còn có sự lựa chọn nào.  </p>
          <p > D. Quân đội Pháp đã mở rộng đánh chiếm Hà Nội, ta không có sự lựa chọn nào khác. </p>
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
        <p class="question-content">Câu 6: Vì sao Hội nghị 15 Ban chấp hành trung ương Đảng Lao động Việt Nam quyết định để nhân dân miền Nam sử dụng bạo lực cách mạng?</p>
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
        <p class="question-content">Câu 7: Phong trào bình dân học vụ trong kháng chiến chống Pháp là ?</p>
        <div class="Notice">
          <p > A. Cuộc vận động cải cách giáo dục xóa bỏ nền giáo dục thực dân, xây dựng nền giáo dục dân tộc, dân chủ Việt Nam.   </p>
          <p > B. Cuộc vận động toàn dân tăng gia sản xuất, thực hành tiết kiệm.  </p>
          <p > C. Cuộc vận động nhân dân tham gia các lớp học để xóa mù chữ. </p>
          <p > D. Cuộc vận động nhân dân tham gia để thực hiện nếp sống mới. </p>
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
        <p class="question-content">Câu 8: Văn kiện nào trình bày đầy đủ nhất đường lối kháng chiến chống Pháp của Đảng ta ?</p>
        <div class="Notice">
          <p > A. Lời kêu gọi toàn quốc kháng chiến của Chủ tịch Hồ Chí Minh.  </p>
          <p > B. Bản chỉ thị Toàn quốc kháng chiến của Ban thường vụ Trung ương Đảng.  </p>
          <p > C. Tác phẩm "Kháng chiến nhất định thắng lợi" của Trường Chinh.  </p>
          <p > D. A và B đúng. </p>
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
            <input type="radio"  name="myRadio8" value="0">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="1">
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
        <p class="question-content">Câu 9: Trong kháng chiến chống Pháp trên mặt trận kinh tế, Đảng và Chính phủ đã đề ra 1 cuộc vận động lớn về sản xuất và tiết kiệm được diễn ra trong thời gian nào ?</p>
        <div class="Notice">
          <p >A. 1951   </p>
          <p >B. 1952 </p>
          <p >C. 1953 </p>
          <p >D. 1954</p>
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