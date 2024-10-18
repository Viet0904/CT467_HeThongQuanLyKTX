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
## Bước 6: Tạo khóa bảo mật
`php artisan key:generate`
## Bước 7: Chạy migration để tạo bảng trong database
`php artisan migrate`
## Bước 8: Chạy Serve
`php artisan serve`


