<?php
if (!isset($_SESSION)) {
     session_start();
}
$conn = mysqli_connect("localhost", "root", "", "doan3") or die("kết nối không thành công");
mysqli_set_charset($conn, 'UTF8');