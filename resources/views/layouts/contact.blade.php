@extends('layouts.app')

@section('title', 'Contact Us - Passage Greens')

@section('content')
<!-- Hero Section -->
<section class="hero" style="padding: 120px 0;">
    <div class="container">
        <h1 class="serif-font">Get In Touch</h1>
        <p class="sans-serif-font">We're here to answer your questions and help you start your farming journey</p>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <!-- Contact Form -->
            <div style="background-color: var(--white); padding: 40px; border-radius: 8px; box-shadow: var(--shadow);">
                <h2 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px;">Send Us a Message</h2>
                <p class="sans-serif-font" style="margin-bottom: 30px; color: var(--dark-gray);">Fill out the form below and we'll get back to you within 24 hours</p>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 20px;">
                        <label class="sans-serif-font" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-forest-green);">Full Name *</label>
                        <input type="text" name="name" required style="width: 100%; padding: 12px; border: 2px solid var(--light-sage-green); border-radius: 4px; font-family: 'Open Sans', sans-serif; font-size: 1rem;" placeholder="Enter your full name">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label class="sans-serif-font" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-forest-green);">Email Address *</label>
                        <input type="email" name="email" required style="width: 100%; padding: 12px; border: 2px solid var(--light-sage-green); border-radius: 4px; font-family: 'Open Sans', sans-serif; font-size: 1rem;" placeholder="your.email@example.com">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label class="sans-serif-font" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-forest-green);">Phone Number</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 12px; border: 2px solid var(--light-sage-green); border-radius: 4px; font-family: 'Open Sans', sans-serif; font-size: 1rem;" placeholder="+267 XXX XXXX">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label class="sans-serif-font" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-forest-green);">Subject *</label>
                        <select name="subject" required style="width: 100%; padding: 12px; border: 2px solid var(--light-sage-green); border-radius: 4px; font-family: 'Open Sans', sans-serif; font-size: 1rem;">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="product">Product Information</option>
                            <option value="support">Technical Support</option>
                            <option value="partnership">Partnership Opportunities</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label class="sans-serif-font" style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-forest-green);">Message *</label>
                        <textarea name="message" required rows="6" style="width: 100%; padding: 12px; border: 2px solid var(--light-sage-green); border-radius: 4px; font-family: 'Open Sans', sans-serif; font-size: 1rem; resize: vertical;" placeholder="Tell us how we can help you..."></textarea>
                    </div>

                    <button type="submit" class="btn sans-serif-font" style="width: 100%;">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <div style="background-color: var(--light-sage-green); padding: 40px; border-radius: 8px; margin-bottom: 30px;">
                    <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 25px; font-size: 1.8rem;">Contact Information</h3>

                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-map-marker-alt" style="color: var(--white); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Office Address</h4>
                                <p class="sans-serif-font" style="line-height: 1.6;">Plot 12345, Industrial Area<br>Gaborone, Botswana<br>P.O. Box 12345</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-phone" style="color: var(--white); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Phone</h4>
                                <p class="sans-serif-font" style="line-height: 1.6;">Main: +267 XXX XXXX<br>Support: +267 XXX XXXX<br>Mon-Fri: 8:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; align-items: start; margin-bottom: 15px;">
                            <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-envelope" style="color: var(--white); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Email</h4>
                                <p class="sans-serif-font" style="line-height: 1.6;">General: info@passagegreens.com<br>Support: support@passagegreens.com<br>Sales: sales@passagegreens.com</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-clock" style="color: var(--white); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Business Hours</h4>
                                <p class="sans-serif-font" style="line-height: 1.6;">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div style="background-color: var(--white); padding: 40px; border-radius: 8px; box-shadow: var(--shadow);">
                    <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 20px; font-size: 1.8rem;">Follow Us</h3>
                    <p class="sans-serif-font" style="margin-bottom: 20px; line-height: 1.6;">Stay connected with us on social media for updates, tips, and success stories</p>
                    <div class="social-links">
                        <a href="#" style="background-color: var(--leaf-green);"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="background-color: var(--leaf-green);"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="background-color: var(--leaf-green);"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="background-color: var(--leaf-green);"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" style="background-color: var(--leaf-green);"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section style="background-color: var(--light-sage-green);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Frequently Asked Questions</h2>
            <p class="sans-serif-font">Quick answers to common questions</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div style="background-color: var(--white); padding: 25px; border-radius: 8px; margin-bottom: 15px; box-shadow: var(--shadow);">
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.2rem;">How long does installation take?</h4>
                <p class="sans-serif-font" style="line-height: 1.6;">Installation typically takes 1-3 days depending on the system size. Our team handles everything from setup to training, ensuring you're ready to start growing immediately.</p>
            </div>

            <div style="background-color: var(--white); padding: 25px; border-radius: 8px; margin-bottom: 15px; box-shadow: var(--shadow);">
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.2rem;">What kind of support do you provide?</h4>
                <p class="sans-serif-font" style="line-height: 1.6;">We offer comprehensive support including phone and email assistance, on-site visits when needed, mobile app guidance, and regular maintenance checks to ensure optimal system performance.</p>
            </div>

            <div style="background-color: var(--white); padding: 25px; border-radius: 8px; margin-bottom: 15px; box-shadow: var(--shadow);">
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.2rem;">Do you offer financing options?</h4>
                <p class="sans-serif-font" style="line-height: 1.6;">Yes! We partner with local financial institutions to offer flexible payment plans. Contact our sales team to discuss financing options that work for your budget.</p>
            </div>

            <div style="background-color: var(--white); padding: 25px; border-radius: 8px; margin-bottom: 15px; box-shadow: var(--shadow);">
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.2rem;">Can I visit your facility?</h4>
                <p class="sans-serif-font" style="line-height: 1.6;">Absolutely! We welcome visits to our demonstration facility in Gaborone. Schedule a tour to see the SmartTunnel system in action and speak with our experts.</p>
            </div>

            <div style="background-color: var(--white); padding: 25px; border-radius: 8px; box-shadow: var(--shadow);">
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.2rem;">What is your warranty policy?</h4>
                <p class="sans-serif-font" style="line-height: 1.6;">All SmartTunnel systems come with a 2-year comprehensive warranty covering parts and labor. Extended warranty options are also available.</p>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section style="padding: 0;">
    <div style="width: 100%; height: 400px; background-color: var(--light-sage-green); display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center;">
            <i class="fas fa-map-marked-alt" style="font-size: 4rem; color: var(--leaf-green); margin-bottom: 20px;"></i>
            <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px;">Visit Our Office</h3>
            <p class="sans-serif-font" style="color: var(--dark-gray);">Located in the heart of Gaborone, Botswana</p>
            <a href="https://maps.google.com" target="_blank" class="btn btn-outline sans-serif-font" style="margin-top: 15px;">Get Directions</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2 class="serif-font">Ready to Get Started?</h2>
        <p class="sans-serif-font">Join hundreds of satisfied customers growing fresh produce with Passage Greens</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:+267XXXXXXX" class="btn sans-serif-font">Call Us Now</a>
            <a href="#" class="btn btn-secondary sans-serif-font">Schedule a Demo</a>
        </div>
    </div>
</section>
@endsection