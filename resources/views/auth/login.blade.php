<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Passage Greens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --dark-forest-green: #1E3A2A;
            --light-sage-green: #C3CCBA;
            --leaf-green: #6E8C3D;
            --muted-olive-green: #8AA572;
        }

        body {
            background: linear-gradient(135deg, #C3CCBA 0%, #8AA572 50%, #1E3A2A 100%);
            min-height: 100vh;
            font-family: 'Open Sans', sans-serif;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }

        .auth-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(30, 58, 42, 0.15);
            border: 1px solid rgba(110, 140, 61, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            color: #1E3A2A;
            font-size: 2.5rem;
            margin-bottom: 5px;
        }

        .logo p {
            color: #6E8C3D;
            font-size: 0.9rem;
            letter-spacing: 2px;
            margin: 0;
        }

        .form-control {
            border: 2px solid #E8EDE6;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #6E8C3D;
            box-shadow: 0 0 0 0.2rem rgba(110, 140, 61, 0.15);
        }

        .btn-primary {
            background: #6E8C3D;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #1E3A2A;
            transform: translateY(-2px);
        }

        .form-check-input:checked {
            background-color: #6E8C3D;
            border-color: #6E8C3D;
        }

        .auth-link {
            color: #6E8C3D;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            color: #1E3A2A;
            text-decoration: underline;
        }

        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="auth-card">
                        <!-- Logo -->
                        <div class="logo">
                            <h1>PASSAGE GREENS</h1>
                            <p>CULTIVATING REIMAGINED</p>
                        </div>

                        <h2 class="text-center mb-4" style="color: #1E3A2A; font-family: 'Playfair Display', serif;">Welcome Back</h2>
                        <p class="text-center text-muted mb-4">Sign in to your Passage Greens account</p>

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: #1E3A2A; font-weight: 600;">Email Address</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    placeholder="Enter your email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: #1E3A2A; font-weight: 600;">Password</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Enter your password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: #666;">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="auth-link">Forgot password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 mb-4" style="font-size: 1.1rem;">
                                Sign In
                            </button>

                            <!-- Register Link -->
                            <div class="text-center">
                                <p style="color: #666;">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="auth-link">Create one here</a>
                                </p>
                            </div>
                        </form>

                        <!-- Demo Accounts (for development) -->
                        @if(env('APP_DEBUG'))
                        <div class="mt-4 pt-4 border-top">
                            <p class="text-center small text-muted mb-2">Demo Accounts (Development Only):</p>
                            <div class="row text-center">
                                <div class="col-12">
                                    <small class="text-muted">Email: demo@passagegreens.com | Password: password</small>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>