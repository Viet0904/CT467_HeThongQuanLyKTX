<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dormitory Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/cover.png') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }
        .login-box {
            margin-top: 10%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .brand-title {
            font-size: 36px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .developer-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 12px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
  {{-- <img src="{{ asset('/images/cover.png') }}" alt="Logo"> --}}
    <div class="container d-flex justify-content-center align-items-center">
      {{-- <div class="brand-title">School Dormitory Management System</div> --}}
        <div class="login-box col-md-4 col-sm-6 col-12">
            <div class="brand-title">Vui lòng nhập thông tin xác thực của bạn</div>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
