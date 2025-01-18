<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <!-- Link ke CSS Bootstrap dan Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f1f1;
        }

        .login-container {
            max-width: 600px;  /* Lebarkan form */
            margin: 80px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #343a40;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
            outline: none;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        .icon {
            color: #007bff;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Sign Up</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label"><i class="fas fa-user icon"></i> Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required placeholder="Enter your name">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><i class="fas fa-envelope icon"></i> Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required placeholder="Enter your email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><i class="fas fa-lock icon"></i> Password:</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter your password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label"><i class="fas fa-lock icon"></i> Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="Confirm your password">
            </div>

            <button type="submit" class="btn btn-primary p-2 w-100">Register</button>
        </form>

        <div class="register-link">
            <p>Already have an account? <a href="{{ route('home') }}">Login here</a></p>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
