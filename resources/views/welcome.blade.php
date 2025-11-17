<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passage Greens - Cultivating Reimagined</title>
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

        .btn-auth {
            padding: 8px 16px;
            font-size: 0.9rem;
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
            align-items: center;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-gray);
            font-weight: 500;
            transition: var(--transition);
            font-family: 'Open Sans', sans-serif;
        }

        .nav-links a:hover {
            color: var(--leaf-green);
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
            margin-left: 15px;
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

        /* How It Works */
        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 0 20px;
            position: relative;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 40px;
            right: 0;
            width: 50%;
            height: 2px;
            background-color: var(--leaf-green);
        }

        .step-number {
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            background-color: var(--leaf-green);
            color: var(--white);
            border-radius: 50%;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
        }

        .step h3 {
            font-family: 'Playfair Display', serif;
            color: var(--dark-forest-green);
            margin-bottom: 15px;
        }

        /* Testimonials */
        .testimonials {
            background-color: var(--light-sage-green);
            color: var(--dark-forest-green);
        }

        .testimonials .section-title h2 {
            color: var(--dark-forest-green);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--leaf-green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--white);
            font-weight: bold;
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

            .step:not(:last-child)::after {
                display: none;
            }

            .steps {
                gap: 30px;
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

            .auth-buttons {
                margin-left: 0;
                margin-top: 15px;
                justify-content: center;
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
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-text">
                    <span class="brand serif-font">PASSAGE GREENS</span>
                    <span class="tagline sans-serif-font">CULTIVATING REIMAGINED</span>
                </div>
            </div>

            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links">
                <li><a href="#home" class="sans-serif-font">Home</a></li>
                <li><a href="#about" class="sans-serif-font">About</a></li>
                <li><a href="#team" class="sans-serif-font">Team</a></li>
                <li><a href="#contact" class="sans-serif-font">Contact Us</a></li>
                <li><a href="#technology" class="sans-serif-font">Technology</a></li>
                <div class="auth-buttons">
                    <a href="{{ route('register') }}" class="btn btn-auth btn-outline sans-serif-font">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-auth sans-serif-font">Log In</a>
                </div>
            </ul>




        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1 class="serif-font">Grow Abundance, Independent of the Rain</h1>
            <p class="sans-serif-font">The fully automated, soil-free farming system that uses 90% less water to guarantee your harvest, year-round in Botswana.</p>
            <div class="hero-buttons">
                <a href="{{ route('register') }}" class="btn sans-serif-font">Start Your Journey</a>
                <a href="#" class="btn btn-secondary sans-serif-font">Watch a Demo</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="technology">
        <div class="container">
            <div class="section-title">
                <h2 class="serif-font">Why Choose SmartTunnel Hydroponics?</h2>
                <p class="sans-serif-font">Our innovative system transforms farming in water-scarce regions with cutting-edge technology</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3 class="serif-font">90% Less Water</h3>
                    <p class="sans-serif-font">Our closed-loop system recirculates water, using only a fraction of traditional farming methods while maximizing plant growth.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="serif-font">AI-Powered Automation</h3>
                    <p class="sans-serif-font">Smart sensors and AI algorithms monitor and adjust nutrient levels, water, and lighting for optimal plant health.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="serif-font">Remote Monitoring</h3>
                    <p class="sans-serif-font">Control and monitor your farm from anywhere using our mobile app. Get alerts and insights directly to your phone.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2 class="serif-font">How SmartTunnel Works</h2>
                <p class="sans-serif-font">Getting started with automated hydroponic farming is simple and straightforward</p>
            </div>

            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3 class="serif-font">Choose Your Package</h3>
                    <p class="sans-serif-font">Select from our HomeGrow, ProFarming, or Enterprise solutions based on your needs and scale.</p>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <h3 class="serif-font">Install & Set Up</h3>
                    <p class="sans-serif-font">Our team helps install your system and connect it to the mobile app for monitoring and control.</p>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <h3 class="serif-font">Monitor & Grow</h3>
                    <p class="sans-serif-font">The system automates watering, nutrients, and lighting while you monitor progress from your phone.</p>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <h3 class="serif-font">Harvest & Enjoy</h3>
                    <p class="sans-serif-font">Harvest fresh, organic produce year-round for your family or for commercial sale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Preview Section -->
    <section id="team">
        <div class="container">
            <div class="section-title">
                <h2 class="serif-font">Our Team</h2>
                <p class="sans-serif-font">Meet the passionate individuals behind Passage Greens</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="serif-font">Leadership</h3>
                    <p class="sans-serif-font">Our experienced leadership team brings together expertise in agriculture, technology, and business development.</p>
                    <a href="#" class="btn btn-outline sans-serif-font" style="margin-top: 15px;">Meet Our Leaders</a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="serif-font">Technical Experts</h3>
                    <p class="sans-serif-font">Our engineers and developers create the innovative technology that powers the SmartTunnel system.</p>
                    <a href="#" class="btn btn-outline sans-serif-font" style="margin-top: 15px;">Meet Our Engineers</a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="serif-font">Support Team</h3>
                    <p class="sans-serif-font">Our dedicated support team ensures our customers get the most out of their Passage Greens systems.</p>
                    <a href="#" class="btn btn-outline sans-serif-font" style="margin-top: 15px;">Meet Our Support Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2 class="serif-font">Success Stories</h2>
                <p class="sans-serif-font">Hear from farmers and households who have transformed their food production with Passage Greens</p>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text sans-serif-font">
                        "I never imagined I could grow fresh lettuce, basil, and even strawberries right in my living space. The app tells me when to refill water and adjusts everything for me."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">LM</div>
                        <div>
                            <h4 class="serif-font">Lesedi Mokoka</h4>
                            <p class="sans-serif-font">Gaborone Resident</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-text sans-serif-font">
                        "As a commercial farmer, water costs were bankrupting me. With Passage Greens, I've cut my water usage by 90% and my yields have increased by 40%. This system saved my business."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">TM</div>
                        <div>
                            <h4 class="serif-font">Thabo Modise</h4>
                            <p class="sans-serif-font">Commercial Farmer, Maun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2 class="serif-font">Ready to Transform Your Farming?</h2>
            <p class="sans-serif-font">Join the sustainable farming revolution and discover the benefits of smart hydroponics for yourself</p>
            <a href="{{ route('register') }}" class="btn sans-serif-font">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
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
                        <li><a href="#home" class="sans-serif-font">Home</a></li>
                        <li><a href="#about" class="sans-serif-font">About</a></li>
                        <li><a href="#team" class="sans-serif-font">Team</a></li>
                        <li><a href="#technology" class="sans-serif-font">Technology</a></li>
                        <li><a href="#contact" class="sans-serif-font">Contact Us</a></li>
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
                <p class="sans-serif-font">&copy; 2025 Passage Greens. All rights reserved. | CULTIVATING REIMAGINED</p>
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
</body>

</html>