<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dormitory Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: url('/images/cover.png') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }
        #page-title{
        text-shadow: 6px 4px 7px black;
        font-size: 3.5em;
        color: #fff4f4 !important;
        background: #8080801c;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-white px-4 py-5" id="page-title">Hệ thống quản lí ký túc xá<b></b></h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="modal-dialog rounded shadow-lg p-2 m-4 bg-body rounded w-50 min-vw-25">
            <div class="modal-content p-2">
                <div class="modal-header text-center d-block">
                    <h2 class="modal-title">
                        Đăng nhập
                    </h2>
                </div>
    
                <div class="modal-body">
                    <form method="POST" name="login" id="login">
                        <div class="form-group">
                            <label for="EmailInput" class="pt-2">
                                <i class="fa-solid fa-envelope"></i> Mã số đăng nhập:
                            </label>
                            <input class="form-control mt-1 border rounded-1" placeholder="Nhập mã số đăng nhập của bạn" id="EmailInput" name="EmailInput"></input>
                            <span id="emailError" style="color: red;"></span>
                        </div>
    
                        <div class="form-group">
                            <label for="passwordInput" class="pt-4">
                                <i class="fas fa-eye"></i> Mật khẩu:
                            </label>
                            <input class="form-control mt-1 border rounded-1" placeholder="Nhập mật khẩu" id="passwordInput" name="password" type="password"></input>
                        </div>
    
                        <div class="form-group form-check pt-4 d-flex justify-content-between align-items-center">
                            <div>
                                <input type="checkbox" class="form-check-input d-none" id="rememberMe">
                                <label class="form-check-label d-none" for="rememberMe">Ghi nhớ tôi</label>
                            </div>
                            <a href="{{ route('index') }}" class="text-decoration-none">Đăng nhập</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3 w-100 mb-4" name="login">
                            <i class="fas fa-power-off"></i>
                            <span href="" class="text-decoration-none text-white">Đăng ký</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script></script>
</html>
