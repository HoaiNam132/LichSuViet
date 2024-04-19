<?php include "./header.php"; ?>
<style>
  p.input{
    text-align:center;
  }
  .titleAns{
    font-size: 30px;
    margin: 0.4cm 0.6cm 0.4cm 0.6cm;
    color:black;
    text-align: justify;

  }
  label{
    font-size: 20px;
    font-weight: bold;
    color:#A71C0F;
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
    color:red;
    font-weight:bold;
  }
  .borderdiv {
    margin: 0 2cm 0 2cm;
    max-width:100%;
    color: rgb(192, 190, 190);
    font-size: 20px;
    border: 1.2px solid;
    border-radius: 15px;
}
.question-content{
  text-align:center;
  font-size: 24px;
  font-weight: 100;
  color:black;
  margin-left:1cm;
  margin-right:1cm;
}
.ans{
  text-align: center;
}
.ans-content{
  margin-left: 2cm;
  margin-right: 2cm;
  justify-content: space-between; /* Để căn giữa theo chiều ngang */
}
.Notice{
  color:#2D548B;
  font-weight:300;
  margin-left: 1cm;
  font-size:20px;
}
.center {
  display: flex;
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
  <div class="title">BÀI KHẢO SÁT PCL-5</div>
  <p></p>
  <form method="post" action="testPCL-5.php?id=<?php echo $_GET['id']?>">
    <div class="borderdiv"> 
      <p class="question-content">Độ tuổi hiện tại của bạn là?</p>
      <div class="container">
        <div class="radio-group">
          <label for="option1">15</label>
          <p></p>
          <input type="radio"  name="myRadioa" value="15">
        </div>
        <div class="radio-group">
          <label for="option2">16</label>
          <p></p>
          <input type="radio"  name="myRadioa" value="16">
        </div>
        <div class="radio-group">
          <label for="option3">17</label>
          <p></p>
          <input type="radio"  name="myRadioa" value="17">
        </div>
        <div class="radio-group">
          <label for="option4">18</label>
          <p></p>
          <input type="radio"  name="myRadioa" value="18">
        </div>
      </div>
    </div>
    <p></p>
    <div class="borderdiv">
        <div class="titleAns"> Bạn đã từng trải qua những sự kiện thế này chưa?
            <p>– Tai nạn hoặc hỏa hoạn nghiêm trọng </p>
            <p>– Tấn công hay lạm dụng về thể chất hay tình dục</p>
            <p>– Động đất hoặc lũ lụt</p>
            <p>– Chiến tranh</p>
            <p>– Chứng kiến người khác tử vong hoặc chấn thương nặng</p>
            <p>– Người thân bị sát hại hoặc tự sát</p>
            <p>Nếu có, hãy trả lời những câu hỏi dưới đây:</p>
        </div>
    </div>
    <p></p>
    <div class="borderdiv"> 
        <p class="question-content">Câu 1: Bất kỳ lời nhắc nhở về sự kiện đó đều khiến cảm xúc bạn bị ảnh hưởng</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio1" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio1" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 2: Bạn gặp triệu chứng khó ngủ</p>
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
            <input type="radio"  name="myRadio2" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio2" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio2" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 3: Một vài hành động thường cứ khiến bạn phải suy nghĩ về những sự kiện đã qua</p>
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
            <input type="radio"  name="myRadio3" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio3" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio3" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 4: Bạn cảm thấy dễ cáu kỉnh, tức giận</p>
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
            <input type="radio"  name="myRadio4" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio4" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio4" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 5: Bạn tránh để bản thân khó chịu khi nghĩ về  hoặc bị nhắc nhở về điều đó</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio5" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio5" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 6: Bạn thường nghĩ về những việc đã xảy ra dù bạn không cố ý</p>
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
            <input type="radio"  name="myRadio6" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio6" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio6" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 7: Bạn cảm thấy như thể sự kiện đó chưa hề xảy ra hoặc nó không có thật</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio7" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio7" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 8: Bạn đã cố tình tránh xa những lời nhắc nhở về sự kiện đó</p>
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
            <input type="radio"  name="myRadio8" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio8" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio8" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content"> Câu 9: Những hình ảnh về sự kiện đó thường hiện lên trong tâm trí bạn</p>
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
            <input type="radio"  name="myRadio9" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio9" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio9" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content"> Câu 10: Bạn rất bồn chồn và dễ bị giật mình</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio10" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio10" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content"> Câu 11: Bạn đã cố gắng không nghĩ về tình huống này</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio11" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio11" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio11" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio11" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio11" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content"> Câu 12: Bạn biết mình có rất nhiều cảm xúc về chuyện đã xảy ra nhưng chưa giải quyết được chúng</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio12" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio12" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio12" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio12" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio12" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 13: Bạn cảm thấy khá 'bất lực"' về tình trạng này</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio13" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio13" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio13" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio13" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio13" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 14: Bạn thấy mình có cảm giác như mình đang quay lại thời điểm diễn ra sự kiện</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio14" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio14" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio14" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio14" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio14" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 15: Bạn gặp khó khăn khi ngủ</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio15" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio15" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio15" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio15" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio15" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 16: Bạn đã trải qua những cảm xúc mạnh mẽ về sự kiện này</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio16" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio16" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio16" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio16" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio16" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 17: Bạn đã cố gắng xóa bỏ tình huống đó khỏi trí nhớ của mình</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio17" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio17" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio17" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio17" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio17" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 18: Bạn khó tập trung vào những việc cần phải làm</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio18" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio18" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio18" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio18" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio18" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 19: Nhắc nhở về sự kiện khiến bạn có những phản ứng thể chất như đổ mồ hôi, đánh trống ngực, hoảng loạn</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio19" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio19" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio19" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio19" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio19" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 20: Bạn có những giấc mơ về sự kiện này</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio20" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio20" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio20" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio20" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio20" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 21: Bạn cảm thấy cảnh giác và đấu tranh để thư giãn</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio21" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio21" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio21" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio21" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio21" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
      <div class="borderdiv"> 
        <p class="question-content">Câu 22: Bạn cố gắng không nói về sự kiện đó</p>
        <div class="container">
          <div class="radio-group">
            <label for="option1">A</label>
            <p></p>
            <input type="radio"  name="myRadio22" value="0">
          </div>
          <div class="radio-group">
            <label for="option2">B</label>
            <p></p>
            <input type="radio"  name="myRadio22" value="1">
          </div>
          <div class="radio-group">
            <label for="option3">C</label>
            <p></p>
            <input type="radio"  name="myRadio22" value="2">
          </div>
          <div class="radio-group">
            <label for="option4">D</label>
            <p></p>
            <input type="radio"  name="myRadio22" value="3">
          </div>
          <div class="radio-group">
              <label for="option5">D</label>
              <p></p>
              <input type="radio"  name="myRadio22" value="4">
            </div>
        </div>
        <div class="Notice">
          <p >A. Hoàn toàn không đồng ý</p>
          <p >B. Không đồng ý</p>
          <p >C. Trung lập</p>
          <p >D. Đồng ý </p>
          <p >E. Hoàn toàn đồng ý </p>
        </div>
      </div>
      <p></p>
</div>
<p class = "center"><input class="nutsubmit" name="submit" type="submit" value="Kiểm tra"></p>
</form>
</body>