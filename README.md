# File Hướng dẫn sử dụng Web
## Bước 1: Tải Composer về máy và cài đặt
`Tải https://getcomposer.org/download/`
## Bước 2: Clone dự án về máy 
`git clone https://github.com/Viet0904/CT467_HeThongQuanLyKTX.git`
## Bước 3: Di chuyển vào thư mục dự án
`cd QuanLyKTX` 
## Bước 4: Cài đặt các package cần thiết
`composer install`
## Bước 5: Thiết lập file môi trường
`cp .env.example .env`
<b> Lưu ý </b>

![image](https://github.com/user-attachments/assets/04d378b1-5084-4d43-9d84-8f2db616afd8)
<p> Do tôi cấu hình Mysql của XAMP là cổng 3308. Nêu cổng của bạn là 3306 hoặc khác thì sửa </p>

## Bước 6: Tạo Database bằng Xamp
<p> Mở MySQL của Xamp và truy cập <b> http://localhost/phpmyadmin/ </b> </p>
<b>Tạo Database tên htqlktx</b>

## Bước 7: Tạo khóa bảo mật
`php artisan key:generate`
## Bước 8: Chạy migration để tạo bảng trong database
`php artisan migrate`
## Bước 9: Chạy Server
`php artisan serve`


