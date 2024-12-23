<?php
// Cấu hình kết nối MySQL
$host = "localhost";    // Địa chỉ máy chủ MySQL (thường là 'localhost')
$username = "root";     // Tên người dùng MySQL
$password = "";         // Mật khẩu MySQL
$database = "your_database_name"; // Tên cơ sở dữ liệu

// Kết nối tới MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thiết lập bộ ký tự (nếu cần)
mysqli_set_charset($conn, "utf8");

// Bạn có thể thêm các chức năng khác nếu cần
?>