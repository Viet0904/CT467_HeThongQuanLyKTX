<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lop')->insert([
            ['MaLop' => '01', 'TenLop' => 'Sư phạm Toán học'],
            ['MaLop' => '02', 'TenLop' => 'Sư phạm Vật lý'],
            ['MaLop' => '08', 'TenLop' => 'Công nghệ thực phẩm'],
            ['MaLop' => '09', 'TenLop' => 'Sư phạm Hóa học'],
            ['MaLop' => '10', 'TenLop' => 'Sư phạm Sinh học'],
            ['MaLop' => '13', 'TenLop' => 'Nuôi trồng thủy sản'],
            ['MaLop' => '16', 'TenLop' => 'Sư phạm Địa lý'],
            ['MaLop' => '17', 'TenLop' => 'Sư phạm Ngữ văn'],
            ['MaLop' => '18', 'TenLop' => 'Sư phạm Lịch sử'],
            ['MaLop' => '19', 'TenLop' => 'Nông học'],
            ['MaLop' => '20', 'TenLop' => 'Kế toán'],
            ['MaLop' => '21', 'TenLop' => 'Tài chính - Ngân hàng'],
            ['MaLop' => '22', 'TenLop' => 'Quản trị kinh doanh'],
            ['MaLop' => '22A', 'TenLop' => 'Quản trị kinh doanh - học tại Hòa An'],
            ['MaLop' => '23', 'TenLop' => 'Kinh tế nông nghiệp'],
            ['MaLop' => '23A', 'TenLop' => 'Kinh tế nông nghiệp - học tại Hòa An'],
            ['MaLop' => '25', 'TenLop' => 'Quản lý đất đai'],
            ['MaLop' => '32', 'TenLop' => 'Luật'],
            ['MaLop' => '38', 'TenLop' => 'Khoa học môi trường'],
            ['MaLop' => '45', 'TenLop' => 'Marketing'],
            ['MaLop' => '48', 'TenLop' => 'Kỹ thuật cơ khí'],
            ['MaLop' => '57', 'TenLop' => 'Kỹ thuật môi trường'],
            ['MaLop' => '63', 'TenLop' => 'Luật - học tại Hòa An'],
            ['MaLop' => '66', 'TenLop' => 'Công nghệ sinh học'],
            ['MaLop' => '67', 'TenLop' => 'Thú y'],
            ['MaLop' => '69', 'TenLop' => 'Hóa học'],
            ['MaLop' => '72', 'TenLop' => 'Khoa học đất'],
            ['MaLop' => '73', 'TenLop' => 'Bảo vệ thực vật'],
            ['MaLop' => '76', 'TenLop' => 'Bệnh học thủy sản'],
            ['MaLop' => '80', 'TenLop' => 'Thông tin - thư viện'],
            ['MaLop' => '82', 'TenLop' => 'Công nghệ chế biến thủy sản'],
            ['MaLop' => '83', 'TenLop' => 'Quản lý công nghiệp'],
            ['MaLop' => '89', 'TenLop' => 'Toán ứng dụng'],
            ['MaLop' => '90', 'TenLop' => 'Kinh tế tài nguyên thiên nhiên'],
            ['MaLop' => '94', 'TenLop' => 'Sinh học'],
            ['MaLop' => '95', 'TenLop' => 'Hệ thống thông tin'],
            ['MaLop' => '96', 'TenLop' => 'Kỹ thuật phần mềm'],
            ['MaLop' => 'B1', 'TenLop' => 'Kỹ thuật ô tô'],
            ['MaLop' => 'B2', 'TenLop' => 'Kỹ thuật y sinh'],
            ['MaLop' => 'B3', 'TenLop' => 'Kỹ thuật máy tính'],
            ['MaLop' => 'D1', 'TenLop' => 'Truyền thông đa phương tiện'],
            ['MaLop' => 'D2', 'TenLop' => 'An toàn thông tin'],
            ['MaLop' => 'D3', 'TenLop' => 'Thống kê'],
            ['MaLop' => 'D4', 'TenLop' => 'Kỹ thuật cấp thoát nước'],
            ['MaLop' => 'D5', 'TenLop' => 'Logistics và Quản lý chuỗi cung ứng'],
            ['MaLop' => 'E1', 'TenLop' => 'Giáo dục mầm non'],
            ['MaLop' => 'E2', 'TenLop' => 'Sư phạm Khoa học tự nhiên'],
            ['MaLop' => 'N1', 'TenLop' => 'Báo chí'],
            ['MaLop' => 'N2', 'TenLop' => 'Du lịch'],
            ['MaLop' => 'N2A', 'TenLop' => 'Du lịch - học tại Hòa An'],
            ['MaLop' => 'S1', 'TenLop' => 'Chăn nuôi'],
            ['MaLop' => 'S2', 'TenLop' => 'Quản lý thủy sản'],
            ['MaLop' => 'S3', 'TenLop' => 'Kỹ thuật cơ điện tử'],
            ['MaLop' => 'S7', 'TenLop' => 'Kiến trúc'],
            ['MaLop' => 'S8', 'TenLop' => 'Quy hoạch vùng và đô thị'],
            ['MaLop' => 'S9', 'TenLop' => 'Luật kinh tế'],
            ['MaLop' => 'T1', 'TenLop' => 'Kỹ thuật xây dựng công trình giao thông'],
            ['MaLop' => 'T3', 'TenLop' => 'Hóa dược'],
            ['MaLop' => 'T4', 'TenLop' => 'Kỹ thuật vật liệu'],
            ['MaLop' => 'T5', 'TenLop' => 'Kỹ thuật điện'],
            ['MaLop' => 'T6', 'TenLop' => 'Kỹ thuật điện tử - viễn thông'],
            ['MaLop' => 'T7', 'TenLop' => 'Kỹ thuật xây dựng'],
            ['MaLop' => 'T8', 'TenLop' => 'Kỹ thuật xây dựng công trình thủy'],
            ['MaLop' => 'T9', 'TenLop' => 'Mạng máy tính và truyền thông dữ liệu'],
            ['MaLop' => 'U1', 'TenLop' => 'Vật lý kỹ thuật'],
            ['MaLop' => 'U3', 'TenLop' => 'Triết học'],
            ['MaLop' => 'U4', 'TenLop' => 'Xã hội học'],
            ['MaLop' => 'U5', 'TenLop' => 'Công nghệ sau thu hoạch'],
            ['MaLop' => 'U7A', 'TenLop' => 'Kinh doanh nông nghiệp - học tại Hòa An'],
            ['MaLop' => 'U8', 'TenLop' => 'Sư phạm Tin học'],
            ['MaLop' => 'V1', 'TenLop' => 'Ngôn ngữ Anh'],
            ['MaLop' => 'V1A', 'TenLop' => 'Ngôn ngữ Anh - học tại Hòa An'],
            ['MaLop' => 'V5', 'TenLop' => 'Kiểm toán'],
            ['MaLop' => 'V6', 'TenLop' => 'Công nghệ kỹ thuật hóa học'],
            ['MaLop' => 'V7', 'TenLop' => 'Công nghệ thông tin'],
            ['MaLop' => 'V7A', 'TenLop' => 'Công nghệ thông tin - học tại Hòa An'],
            ['MaLop' => 'V8', 'TenLop' => 'Sinh học ứng dụng'],
            ['MaLop' => 'V9', 'TenLop' => 'Chính trị học'],
            ['MaLop' => 'W1', 'TenLop' => 'Kinh tế'],
            ['MaLop' => 'W2', 'TenLop' => 'Quản trị dịch vụ du lịch và lữ hành'],
            ['MaLop' => 'W3', 'TenLop' => 'Kinh doanh thương mại'],
            ['MaLop' => 'W4', 'TenLop' => 'Kinh doanh quốc tế'],
            ['MaLop' => 'W7', 'TenLop' => 'Văn học'],
            ['MaLop' => 'X1', 'TenLop' => 'Sư phạm Tiếng Anh'],
            ['MaLop' => 'X2', 'TenLop' => 'Sư phạm Tiếng Pháp'],
            ['MaLop' => 'X3', 'TenLop' => 'Giáo dục Tiểu học'],
            ['MaLop' => 'X4', 'TenLop' => 'Giáo dục Công dân'],
            ['MaLop' => 'X6', 'TenLop' => 'Giáo dục Thể chất'],
            ['MaLop' => 'X7', 'TenLop' => 'Quản lý tài nguyên và môi trường'],
            ['MaLop' => 'X8', 'TenLop' => 'Khoa học cây trồng'],
            ['MaLop' => 'X9', 'TenLop' => 'Công nghệ rau hoa quả và cảnh quan'],
            ['MaLop' => 'Y8', 'TenLop' => 'Kỹ thuật điều khiển và tự động hóa'],
            ['MaLop' => 'Z6', 'TenLop' => 'Khoa học máy tính'],
            ['MaLop' => 'Z9', 'TenLop' => 'Ngôn ngữ Pháp'],
        ]);
    }
}
