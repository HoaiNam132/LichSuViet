<?php
$snamedb= "localhost";
$unmaedb= "id22012526_data";
$passworddb = "giangkhkt123A@";
$db_namedb = "id22012526_data";
$conn = mysqli_connect($snamedb, $unmaedb, $passworddb, $db_namedb);
if (!$conn) {
  echo "Kết nối TB";
}else {
// echo "Kết nối thành công";
}

?>
