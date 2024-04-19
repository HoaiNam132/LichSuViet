<?php include "./header.php"; ?>
<style>
{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Style cho form */
.form-container {
  width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  text-align: left;
  font-size:20px;
}
.anhqua {
  max-width: 200px;
  border: 3px solid #003366; /* Thêm khung viền với độ dày 2px và màu xám */
  padding: 5px; /* Thêm padding để tạo khoảng cách giữa khung viền và hình ảnh */
  margin-top: 1cm;
  margin-bottom: 1cm;
}
option{
  font-size:15px;
}

input[type="text"]{
  width: 93%;
  padding: 15px;
  border: 1px solid #ccc;

}
select {
  width: 100%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style cho nút gửi */
.btn-submit {
  background-color: #4CAF50;
  color: white;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
  font-size:20px;
  cursor: pointer;
  font-weight: bold;
}

.btn-submit:hover {
  background-color: #45a049;
}

/* CSS cho thiết bị di động */
@media only screen and (max-width: 600px) {
  .form-container {
    width: 70%; /* Giảm chiều rộng của form container */
  }
  input[type="text"]{
  width: 89%;

}
  label {
    font-size:15px;
  }
  option{
    font-size:13px;
  }

  .btn-submit {
    font-size:16px;

  }

  
}
</style>
<center>
  <form method="post" action="sitedoiqua.php?id=<?php echo $_GET['id']?>">
<h1 style="margin-top: 0.5cm; color: red;"> Chọn quà</h1>
<img id="gift-image" src="img/qua0.jpg" class="anhqua">
<p></p>
<h2 style="margin-bottom: 0.5cm; color: #003333;">Điểm thưởng hiện có: <?php echo $row["xuthuong"]; ?> điểm</h2>

<div class="form-container">
    <input type="hidden" name="new_xuthuong" value="<?php echo $new_xuthuong; ?>"> <!-- Thêm trường ẩn -->

    <div class="form-group">
        <label for="fullname">Họ và tên:</label>
        <input type="text" id="fullname" name="fullname" required>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ nhận quà:</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="city">Số điện thoại liên lạc:</label>
        <input type="text" id="city" name="city" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="country">Chọn phần quà muốn quy đổi:</label>
        <select id="country" name="country" onchange="changeImage()" required>
            <option value="">Chọn phần quà</option>
            <option value="d1">Dụng cụ học tập cho bé (cần có 100 điểm)</option>
            <option value="d2">Bộ dụng cụ học tập tiện dụng (cần có 100 điểm)</option>
            <option value="d3">Vở ghi chép học tập bìa in hình gấu dễ thương (cần có 100 điểm)</option>
            <option value="v1">Set 4 cuốn Tập A5 Gấu cute (cần có 100 điểm)</option>
            <option value="v2">Bìa vở trang trí khủng long xanh (cần có 100 điểm)</option>
            <option value="v3">Set 6 Bút Mực Gel Hoạt Hình (cần có 100 điểm)</option>
            <option value="c1">Ba Lô MLKSRH KQES (cần có 100 điểm)</option>
            <option value="c2">Balo Ulzzang (cần có 100 điểm)</option>
            <option value="c3">Ba Lô Nam Học Sinh Trung Học (cần có 100 điểm)</option>
            <!-- Thêm các quốc gia khác nếu cần -->
        </select>
    </div>
</div>

<script>
  function changeImage() {
    var selectBox = document.getElementById("country");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var image = document.getElementById("gift-image");

    // Thay đổi src của ảnh tùy theo phần quà đã chọn
    switch(selectedValue) {
      case "d1":
        image.src = "img/d1.jpg";
        break;
      case "d2":
        image.src = "img/d2.jpg";
        break;
      case "d3":
        image.src = "img/d3.jpg";
        break;
      case "v1":
        image.src = "img/v1.jpg";
        break;
      case "v2":
        image.src = "img/v2.jpg";
        break;
      case "v3":
        image.src = "img/v3.jpg";
        break;
      case "c1":
        image.src = "img/c1.jpg";
        break;
      case "c2":
        image.src = "img/c2.jpg";
        break;
      case "c3":
        image.src = "img/c3.jpg";
        break;
      default:
        image.src = "img/qua0.jpg"; // Trường hợp không chọn phần quà
    }
  }
</script>

<p><input class="btn-submit" name="submit" type="submit" value="Gửi"></p>
</form>
</center>