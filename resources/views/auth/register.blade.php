<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Salvana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }
        .register-box {
            max-width: 450px;
            margin: auto;
            padding: 40px;
            margin-top: 10vh;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        .register-title {
            font-weight: 700;
            font-size: 28px;
            text-align: center;
            margin-bottom: 25px;
        }
        .form-control {
            border-radius: 999px;
            padding: 12px 20px;
        }
        .btn-twitter {
            background-color: #1da1f2;
            color: white;
            border-radius: 999px;
            font-weight: bold;
        }
        .btn-twitter:hover {
            background-color: #1991da;
        }
        .login-link {
            margin-top: 20px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-box bg-white">
            <div class="register-title">Create your account</div>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-3">
                    <input name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-twitter">Register</button>
                </div>
            </form>
            <div class="login-link mt-3">
                Already have an account?
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
