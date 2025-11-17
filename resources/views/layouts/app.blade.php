<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Passage Greens - Cultivating Reimagined')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Brand Colors from Guidelines */
        :root {
            --dark-forest-green: #1E3A2A;
            --light-sage-green: #C3CCBA;
            --leaf-green: #6E8C3D;
            --muted-olive-green: #8AA572;
            --brown-stem: #6B4E2E;
            --white: #ffffff;
            --light-gray: #f5f5f5;
            --dark-gray: #333333;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            background-color: var(--white);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Typography from Brand Guidelines */
        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .sans-serif-font {
            font-family: 'Open Sans', sans-serif;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            background-color: var(--leaf-green);
            color: var(--white);
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            text-align: center;
        }

        .btn:hover {
            background-color: var(--dark-forest-green);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--brown-stem);
        }

        .btn-secondary:hover {
            background-color: var(--dark-forest-green);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--leaf-green);
            color: var(--leaf-green);
        }

        .btn-outline:hover {
            background-color: var(--leaf-green);
            color: var(--white);
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--dark-forest-green);
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--dark-gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .logo-text .brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-forest-green);
            font-family: 'Playfair Display', serif;
        }

        .logo-text .tagline {
            font-size: 0.7rem;
            color: var(--muted-olive-green);
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1.5px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-gray);
            font-weight: 500;
            transition: var(--transition);
            font-family: 'Open Sans', sans-serif;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--leaf-green);
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-forest-green);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(30, 58, 42, 0.8), rgba(30, 58, 42, 0.9)), url('https://images.unsplash.com/photo-1592841897891-7dc7a7d784e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
            padding: 150px 0;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
            font-family: 'Playfair Display', serif;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            font-family: 'Open Sans', sans-serif;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--light-sage-green);
            border-radius: 8px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--leaf-green);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-forest-green);
            font-family: 'Playfair Display', serif;
        }

        /* CTA Section */
        .cta {
            text-align: center;
            background-color: var(--white);
        }

        .cta h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark-forest-green);
            font-family: 'Playfair Display', serif;
        }

        .cta p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 30px;
            color: var(--dark-gray);
            font-family: 'Open Sans', sans-serif;
        }

        /* Footer */
        footer {
            background-color: var(--dark-forest-green);
            color: var(--white);
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            font-family: 'Playfair Display', serif;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--leaf-green);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--light-sage-green);
            text-decoration: none;
            transition: var(--transition);
            font-family: 'Open Sans', sans-serif;
        }

        .footer-links a:hover {
            color: var(--white);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--leaf-green);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--light-sage-green);
            font-size: 0.9rem;
            font-family: 'Open Sans', sans-serif;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: var(--white);
                flex-direction: column;
                padding: 20px;
                box-shadow: var(--shadow);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .mobile-menu {
                display: block;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 250px;
                margin-bottom: 10px;
            }

            .hero {
                padding: 100px 0;
            }

            section {
                padding: 60px 0;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .logo-text .brand {
                font-size: 1.5rem;
            }
        }
    </style>
    @yield('extra_css')
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="{{ route('home') }}" style="text-decoration: none;">
                    <div class="logo-text">
                        <span class="brand serif-font">PASSAGE GREENS</span>
                        <span class="tagline sans-serif-font">CULTIVATING REIMAGINED</span>
                    </div>
                </a>
            </div>

            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="sans-serif-font {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="sans-serif-font {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('team') }}" class="sans-serif-font {{ request()->routeIs('team') ? 'active' : '' }}">Team</a></li>
                <li><a href="{{ route('contact') }}" class="sans-serif-font {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
                <li><a href="{{ route('technology') }}" class="sans-serif-font {{ request()->routeIs('technology') ? 'active' : '' }}">Technology</a></li>
                <li><a href="#" class="btn btn-outline sans-serif-font">Get Started</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3 class="serif-font">Passage Greens</h3>
                    <p class="sans-serif-font">Cultivating Reimagined. We're revolutionizing agriculture in Botswana with smart, sustainable hydroponic technology.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3 class="serif-font">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}" class="sans-serif-font">Home</a></li>
                        <li><a href="{{ route('about') }}" class="sans-serif-font">About</a></li>
                        <li><a href="{{ route('team') }}" class="sans-serif-font">Team</a></li>
                        <li><a href="{{ route('technology') }}" class="sans-serif-font">Technology</a></li>
                        <li><a href="{{ route('contact') }}" class="sans-serif-font">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="serif-font">Products</h3>
                    <ul class="footer-links">
                        <li><a href="#" class="sans-serif-font">HomeGrow Pack</a></li>
                        <li><a href="#" class="sans-serif-font">ProFarming Pack</a></li>
                        <li><a href="#" class="sans-serif-font">Enterprise Solutions</a></li>
                        <li><a href="#" class="sans-serif-font">Mobile App</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="serif-font">Contact Us</h3>
                    <ul class="footer-links">
                        <li class="sans-serif-font"><i class="fas fa-map-marker-alt"></i> Gaborone, Botswana</li>
                        <li class="sans-serif-font"><i class="fas fa-phone"></i> +267 XXX-XXXX</li>
                        <li class="sans-serif-font"><i class="fas fa-envelope"></i> info@passagegreens.com</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p class="sans-serif-font">&copy; {{ date('Y') }} Passage Greens. All rights reserved. | CULTIVATING REIMAGINED</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    document.querySelector('.nav-links').classList.remove('active');
                }
            });
        });
    </script>
    @yield('extra_js')
</body>

</html>