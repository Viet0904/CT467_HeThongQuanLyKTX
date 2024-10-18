<?php
// Khởi tạo phiên làm việc
if (!isset($_SESSION)) {
    session_start();
}

// Kiểm tra xem vai trò đã được lưu trong session hay chưa
if (isset($_SESSION['Role'])) {
    $role = $_SESSION['Role'];
    if ($role === 'user') {
        header("Location: ./dashboard.php");
        die();
    } elseif ($role === 'admin') {
        echo "<script>alert('Bạn không có quyền truy cập vào trang này.')
        window.location.href='../../admin/dashboard.php';
        </script>";
        die();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['EmailInput'];
    $password = $_POST['password'];
    try {
        $query = "SELECT * FROM tblclient WHERE Email = :email";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $user['Password'];

            // Sử dụng password_verify để kiểm tra mật khẩu
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['ClientID'] = $user['ClientID'];
                $_SESSION['Email'] = $user['Email'];
                $_SESSION['ContactName'] = $user['ContactName'];
                $_SESSION['Role'] = $user['Role'];

                echo "<script>alert('Đăng nhập thành công')
                window.location.href = './dashboard.php';
                </script>";

                exit();
            } else {
                echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại.');</script>";
            }
        } else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại.');</script>";
        }
    } catch (PDOException $e) {
        header('Location: /../../views/errors/404.php');
        echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ký túc xá')</title>
    <!-- Load CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('css')
</head>
<body>
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Load JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
{{-- Add js --}}
<script src="/resources/js/checklogin_user"></script>
{{-- JQuery --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
