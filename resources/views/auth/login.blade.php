<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Salvana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }

        .login-box {
            max-width: 400px;
            margin: auto;
            padding: 40px;
            margin-top: 10vh;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .login-title {
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

        .register-link {
            margin-top: 20px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-box bg-white">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="login-title">Log in Account</div>
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-twitter">Login</button>
                </div>
            </form>
            <div class="register-link mt-3">
                Don't have an account?
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>