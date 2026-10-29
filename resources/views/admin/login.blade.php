<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | FamilyDentalCare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-light) 0%, #e0f2fe 100%);
            padding: 2rem;
        }
        .login-card {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border);
            padding: 3rem;
            width: 100%;
            max-width: 480px;
            box-shadow: var(--shadow-lg);
        }
        .login-card h2 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            text-align: center;
        }
        .login-card p {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 2.5rem;
            font-size: 0.95rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            color: var(--text-dark);
            transition: var(--transition);
            outline: none;
        }
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15);
        }
        .alert-error {
            background: #fef2f2;
            border: 1px solid #fee2e2;
            color: #ef4444;
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            font-weight: 600;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h2>Admin Portal</h2>
            <p>Sign in to manage the dental clinic articles</p>

            @if(session('error'))
                <div class="alert-error">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="admin@familydental.com" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                    Sign In <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="{{ url('/') }}" style="color: var(--primary); text-decoration: none; font-weight: 700; font-size: 0.95rem;">
                    <i class="fas fa-arrow-left"></i> Return to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>
