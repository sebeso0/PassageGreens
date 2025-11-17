<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Passage Greens</title>
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

        .user-type-card {
            border: 2px solid #E8EDE6;
            border-radius: 8px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        .user-type-card:hover {
            border-color: #6E8C3D;
        }

        .user-type-card.selected {
            border-color: #6E8C3D;
            background-color: rgba(110, 140, 61, 0.05);
        }

        .user-type-icon {
            font-size: 1.5rem;
            color: #6E8C3D;
            margin-bottom: 8px;
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
                <div class="col-md-8 col-lg-7">
                    <div class="auth-card">
                        <!-- Logo -->
                        <div class="logo">
                            <h1>PASSAGE GREENS</h1>
                            <p>CULTIVATING REIMAGINED</p>
                        </div>

                        <h2 class="text-center mb-4" style="color: #1E3A2A; font-family: 'Playfair Display', serif;">Join Passage Greens</h2>
                        <p class="text-center text-muted mb-4">Create your account to start your smart farming journey</p>

                        <!-- Registration Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label" style="color: #1E3A2A; font-weight: 600;">Full Name *</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="name"
                                        autofocus
                                        placeholder="Enter your full name">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label" style="color: #1E3A2A; font-weight: 600;">Email Address *</label>
                                    <input type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        placeholder="Enter your email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <!-- Phone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label" style="color: #1E3A2A; font-weight: 600;">Phone Number *</label>
                                    <input type="tel"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        id="phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        required
                                        autocomplete="tel"
                                        placeholder="Enter your phone number">
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!-- Location -->
                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label" style="color: #1E3A2A; font-weight: 600;">Location *</label>
                                    <input type="text"
                                        class="form-control @error('location') is-invalid @enderror"
                                        id="location"
                                        name="location"
                                        value="{{ old('location') }}"
                                        required
                                        autocomplete="address-level2"
                                        placeholder="e.g., Gaborone, Botswana">
                                    @error('location')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- User Type -->
                            <div class="mb-4">
                                <label class="form-label" style="color: #1E3A2A; font-weight: 600;">I am a *</label>
                                <div class="row">
                                    @foreach($userTypes as $value => $label)
                                    <div class="col-md-6 mb-2">
                                        <div class="user-type-card @if(old('user_type') == $value) selected @endif"
                                            onclick="selectUserType('{{ $value }}')">
                                            <input type="radio"
                                                class="form-check-input"
                                                name="user_type"
                                                id="user_type_{{ $value }}"
                                                value="{{ $value }}"
                                                {{ old('user_type') == $value ? 'checked' : '' }}
                                                style="display: none;">
                                            <div class="text-center">
                                                @if($value == 'household')
                                                <div class="user-type-icon">
                                                    <i class="fas fa-home"></i>
                                                </div>
                                                @elseif($value == 'farmer')
                                                <div class="user-type-icon">
                                                    <i class="fas fa-tractor"></i>
                                                </div>
                                                @elseif($value == 'school')
                                                <div class="user-type-icon">
                                                    <i class="fas fa-school"></i>
                                                </div>
                                                @elseif($value == 'business')
                                                <div class="user-type-icon">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                                @endif
                                                <div style="font-weight: 600; color: #1E3A2A;">{{ $label }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @error('user_type')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <!-- Password -->
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label" style="color: #1E3A2A; font-weight: 600;">Password *</label>
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                        placeholder="Create a password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-text">Must be at least 8 characters long</div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label" style="color: #1E3A2A; font-weight: 600;">Confirm Password *</label>
                                    <input type="password"
                                        class="form-control"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        placeholder="Confirm your password">
                                </div>
                            </div>

                            <!-- Terms Agreement -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input @error('agree_terms') is-invalid @enderror"
                                        type="checkbox"
                                        name="agree_terms"
                                        id="agree_terms"
                                        {{ old('agree_terms') ? 'checked' : '' }}
                                        required>
                                    <label class="form-check-label" for="agree_terms">
                                        I agree to the <a href="#" class="auth-link">Terms of Service</a> and <a href="#" class="auth-link">Privacy Policy</a>
                                    </label>
                                    @error('agree_terms')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 mb-4" style="font-size: 1.1rem;">
                                Create Account
                            </button>

                            <!-- Login Link -->
                            <div class="text-center">
                                <p style="color: #666;">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="auth-link">Sign in here</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function selectUserType(value) {
            // Remove selected class from all cards
            document.querySelectorAll('.user-type-card').forEach(card => {
                card.classList.remove('selected');
            });

            // Add selected class to clicked card
            event.currentTarget.classList.add('selected');

            // Check the radio button
            const radio = document.getElementById('user_type_' + value);
            radio.checked = true;
        }

        // Initialize selected state on page load
        document.addEventListener('DOMContentLoaded', function() {
            const selectedRadio = document.querySelector('input[name="user_type"]:checked');
            if (selectedRadio) {
                const card = selectedRadio.closest('.user-type-card');
                if (card) {
                    card.classList.add('selected');
                }
            }
        });
    </script>
</body>

</html>