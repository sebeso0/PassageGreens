@extends('layouts.app')

@section('title', 'Our Technology - Passage Greens')

@section('content')
<!-- Hero Section -->
<section class="hero" style="padding: 120px 0;">
    <div class="container">
        <h1 class="serif-font">SmartTunnel Technology</h1>
        <p class="sans-serif-font">Revolutionary hydroponic systems powered by AI and IoT for sustainable farming</p>
    </div>
</section>

<!-- Technology Overview -->
<section>
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">How SmartTunnel Works</h2>
            <p class="sans-serif-font">Advanced technology meets sustainable agriculture</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-water"></i>
                </div>
                <h3 class="serif-font">Hydroponic System</h3>
                <p class="sans-serif-font">Our closed-loop nutrient delivery system eliminates soil, reduces water usage by 90%, and provides plants with precisely calibrated nutrients for optimal growth.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="serif-font">AI-Driven Optimization</h3>
                <p class="sans-serif-font">Machine learning algorithms analyze plant health data in real-time, automatically adjusting conditions to maximize yield and prevent issues before they occur.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="serif-font">IoT Connectivity</h3>
                <p class="sans-serif-font">Cloud-connected sensors monitor temperature, humidity, pH levels, and nutrient concentrations, sending data to your smartphone 24/7.</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section style="background-color: var(--light-sage-green);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Key Technology Features</h2>
            <p class="sans-serif-font">Innovation that makes sustainable farming accessible</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-tint" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">Water Recirculation</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">Advanced filtration and recirculation system recovers and reuses up to 95% of water, making farming viable in drought-prone regions.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-sun" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">LED Grow Lights</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">Energy-efficient full-spectrum LED lighting mimics natural sunlight, optimized for each growth stage to accelerate plant development.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-thermometer-half" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">Climate Control</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">Automated temperature and humidity regulation creates the perfect microclimate for plant growth, regardless of external weather conditions.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-flask" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">Nutrient Management</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">Automated nutrient dosing system maintains optimal pH and EC levels, adjusting concentrations based on plant growth stage and needs.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-chart-line" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">Growth Analytics</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">AI-powered analytics track plant growth patterns, predict harvest dates, and provide insights to continuously improve yields.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <div style="width: 60px; height: 60px; background-color: var(--leaf-green); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-bell" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="serif-font" style="color: var(--dark-forest-green); font-size: 1.3rem;">Smart Alerts</h3>
                </div>
                <p class="sans-serif-font" style="line-height: 1.6;">Receive instant notifications about system status, maintenance needs, and optimal harvest times directly to your mobile device.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mobile App Features -->
<section>
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">SmartTunnel Mobile App</h2>
            <p class="sans-serif-font">Complete farm management from your smartphone</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; align-items: center;">
            <div>
                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: start; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                            <i class="fas fa-eye" style="color: var(--white); font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 8px; font-size: 1.2rem;">Real-Time Monitoring</h4>
                            <p class="sans-serif-font" style="line-height: 1.6;">View live data from all sensors including temperature, humidity, pH levels, and water levels from anywhere.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: start; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                            <i class="fas fa-sliders-h" style="color: var(--white); font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 8px; font-size: 1.2rem;">Remote Control</h4>
                            <p class="sans-serif-font" style="line-height: 1.6;">Adjust lighting schedules, nutrient levels, and climate settings with simple touch controls.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: start; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                            <i class="fas fa-calendar-alt" style="color: var(--white); font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 8px; font-size: 1.2rem;">Harvest Scheduling</h4>
                            <p class="sans-serif-font" style="line-height: 1.6;">AI predicts optimal harvest times and helps you plan your planting schedule for continuous production.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="display: flex; align-items: start;">
                        <div style="width: 50px; height: 50px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                            <i class="fas fa-book" style="color: var(--white); font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 8px; font-size: 1.2rem;">Growing Guides</h4>
                            <p class="sans-serif-font" style="line-height: 1.6;">Access comprehensive guides for growing various crops optimized for Botswana's climate.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <div style="width: 100%; max-width: 300px; height: 500px; background: linear-gradient(135deg, var(--leaf-green), var(--muted-olive-green)); border-radius: 30px; margin: 0 auto; display: flex; align-items: center; justify-content: center; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
                    <i class="fas fa-mobile-alt" style="font-size: 8rem; color: var(--white);"></i>
                </div>
                <div style="margin-top: 30px;">
                    <a href="#" class="btn sans-serif-font" style="margin-right: 10px;"><i class="fab fa-apple"></i> Download for iOS</a>
                    <a href="#" class="btn btn-secondary sans-serif-font"><i class="fab fa-google-play"></i> Download for Android</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Components -->
<section style="background-color: var(--white);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">System Components</h2>
            <p class="sans-serif-font">Quality components engineered for durability and performance</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3 class="serif-font">Control Unit</h3>
                <p class="sans-serif-font">The brain of the system featuring a powerful microcontroller, wireless connectivity, and backup battery for uninterrupted operation.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3 class="serif-font">Sensor Array</h3>
                <p class="sans-serif-font">Industrial-grade sensors monitor pH, EC, temperature, humidity, water level, and light intensity with laboratory precision.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-pump-soap"></i>
                </div>
                <h3 class="serif-font">Pump System</h3>
                <p class="sans-serif-font">Energy-efficient water and nutrient pumps with variable speed control for precise delivery and minimal power consumption.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-wind"></i>
                </div>
                <h3 class="serif-font">Ventilation</h3>
                <p class="sans-serif-font">Smart ventilation system maintains optimal air circulation and CO2 levels for maximum photosynthesis efficiency.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3 class="serif-font">Growing Channels</h3>
                <p class="sans-serif-font">Food-grade growing channels designed for optimal root oxygenation and nutrient absorption with easy cleaning access.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-battery-full"></i>
                </div>
                <h3 class="serif-font">Power Management</h3>
                <p class="sans-serif-font">Intelligent power system with solar compatibility, battery backup, and energy monitoring to minimize operational costs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section style="background-color: var(--light-sage-green);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Technical Specifications</h2>
            <p class="sans-serif-font">Detailed specifications for our SmartTunnel systems</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- HomeGrow Specs -->
            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 20px; font-size: 1.5rem;">HomeGrow Pack</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Dimensions:</strong> 2m × 1m × 1.8m</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Plant Capacity:</strong> 20-30 plants</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Water Tank:</strong> 50 liters</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Power:</strong> 100W average</li>
                    <li style="padding: 10px 0;" class="sans-serif-font"><strong>Connectivity:</strong> WiFi, Bluetooth</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline sans-serif-font" style="width: 100%; margin-top: 20px;">Learn More</a>
            </div>

            <!-- ProFarming Specs -->
            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 20px; font-size: 1.5rem;">ProFarming Pack</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Dimensions:</strong> 6m × 2m × 2.2m</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Plant Capacity:</strong> 100-150 plants</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Water Tank:</strong> 200 liters</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Power:</strong> 350W average</li>
                    <li style="padding: 10px 0;" class="sans-serif-font"><strong>Connectivity:</strong> WiFi, 4G LTE</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline sans-serif-font" style="width: 100%; margin-top: 20px;">Learn More</a>
            </div>

            <!-- Enterprise Specs -->
            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow);">
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 20px; font-size: 1.5rem;">Enterprise Solutions</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Dimensions:</strong> Custom modular design</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Plant Capacity:</strong> 500+ plants</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Water Tank:</strong> 1000+ liters</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid var(--light-sage-green);" class="sans-serif-font"><strong>Power:</strong> Scalable</li>
                    <li style="padding: 10px 0;" class="sans-serif-font"><strong>Connectivity:</strong> Enterprise IoT</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline sans-serif-font" style="width: 100%; margin-top: 20px;">Contact Sales</a>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Comparison -->
<section>
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">SmartTunnel vs Traditional Farming</h2>
            <p class="sans-serif-font">See how our technology compares to conventional agriculture</p>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; background-color: var(--white); border-radius: 8px; overflow: hidden; box-shadow: var(--shadow);">
                <thead>
                    <tr style="background-color: var(--dark-forest-green); color: var(--white);">
                        <th style="padding: 20px; text-align: left; font-family: 'Playfair Display', serif; font-size: 1.1rem;">Feature</th>
                        <th style="padding: 20px; text-align: center; font-family: 'Playfair Display', serif; font-size: 1.1rem;">SmartTunnel</th>
                        <th style="padding: 20px; text-align: center; font-family: 'Playfair Display', serif; font-size: 1.1rem;">Traditional Farming</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-sage-green);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Water Usage</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">90% Less</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">High Water Consumption</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green); background-color: rgba(195, 204, 186, 0.2);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Growing Season</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">Year-Round</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">Seasonal</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Yield per Square Meter</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">3-4x Higher</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">Standard</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green); background-color: rgba(195, 204, 186, 0.2);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Labor Required</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">Minimal (Automated)</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">High</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Pesticide Use</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">Zero</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">Regular Application</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green); background-color: rgba(195, 204, 186, 0.2);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Weather Dependency</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">None</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">High</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-sage-green);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Growth Speed</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">25-30% Faster</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">Standard</td>
                    </tr>
                    <tr style="background-color: rgba(195, 204, 186, 0.2);">
                        <td style="padding: 20px; font-family: 'Open Sans', sans-serif; font-weight: 600;">Monitoring</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif; color: var(--leaf-green); font-weight: 600;">24/7 Automated</td>
                        <td style="padding: 20px; text-align: center; font-family: 'Open Sans', sans-serif;">Manual</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Innovation & Research -->
<section style="background-color: var(--light-sage-green);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Continuous Innovation</h2>
            <p class="sans-serif-font">Our commitment to advancing agricultural technology</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow); text-align: center;">
                <i class="fas fa-microscope" style="font-size: 3rem; color: var(--leaf-green); margin-bottom: 20px;"></i>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 15px;">Research & Development</h3>
                <p class="sans-serif-font" style="line-height: 1.6;">Our R&D team continuously tests new growing techniques, nutrient formulations, and crop varieties optimized for Botswana.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow); text-align: center;">
                <i class="fas fa-university" style="font-size: 3rem; color: var(--leaf-green); margin-bottom: 20px;"></i>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 15px;">Academic Partnerships</h3>
                <p class="sans-serif-font" style="line-height: 1.6;">We collaborate with local universities and research institutions to advance hydroponic science and train the next generation of agricultural innovators.</p>
            </div>

            <div style="background-color: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow); text-align: center;">
                <i class="fas fa-rocket" style="font-size: 3rem; color: var(--leaf-green); margin-bottom: 20px;"></i>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 15px;">Future Development</h3>
                <p class="sans-serif-font" style="line-height: 1.6;">We're developing AI-powered disease detection, blockchain-based supply chain tracking, and integration with renewable energy systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- Supported Crops -->
<section>
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Crops You Can Grow</h2>
            <p class="sans-serif-font">A wide variety of vegetables, herbs, and fruits thrive in SmartTunnel systems</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div style="background-color: var(--light-sage-green); padding: 20px; border-radius: 8px; text-align: center;">
                <i class="fas fa-leaf" style="font-size: 2rem; color: var(--leaf-green); margin-bottom: 10px;"></i>
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Leafy Greens</h4>
                <p class="sans-serif-font" style="font-size: 0.9rem;">Lettuce, Spinach, Kale, Chard</p>
            </div>

            <div style="background-color: var(--light-sage-green); padding: 20px; border-radius: 8px; text-align: center;">
                <i class="fas fa-pepper-hot" style="font-size: 2rem; color: var(--leaf-green); margin-bottom: 10px;"></i>
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Vegetables</h4>
                <p class="sans-serif-font" style="font-size: 0.9rem;">Tomatoes, Peppers, Cucumbers</p>
            </div>

            <div style="background-color: var(--light-sage-green); padding: 20px; border-radius: 8px; text-align: center;">
                <i class="fas fa-seedling" style="font-size: 2rem; color: var(--leaf-green); margin-bottom: 10px;"></i>
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Herbs</h4>
                <p class="sans-serif-font" style="font-size: 0.9rem;">Basil, Mint, Cilantro, Parsley</p>
            </div>

            <div style="background-color: var(--light-sage-green); padding: 20px; border-radius: 8px; text-align: center;">
                <i class="fas fa-apple-alt" style="font-size: 2rem; color: var(--leaf-green); margin-bottom: 10px;"></i>
                <h4 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 5px;">Fruits</h4>
                <p class="sans-serif-font" style="font-size: 0.9rem;">Strawberries, Melons (small varieties)</p>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Impact -->
<section style="background-color: var(--white);">
    <div class="container">
        <div class="section-title">
            <h2 class="serif-font">Environmental Impact</h2>
            <p class="sans-serif-font">Technology that's good for your crops and the planet</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; text-align: center;">
            <div style="padding: 30px;">
                <div style="width: 100px; height: 100px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-tint" style="font-size: 2.5rem; color: var(--white);"></i>
                </div>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.8rem;">90%</h3>
                <p class="sans-serif-font" style="font-weight: 600; color: var(--dark-gray);">Less Water Used</p>
                <p class="sans-serif-font" style="font-size: 0.9rem; margin-top: 10px;">Conserving precious water resources in Botswana</p>
            </div>

            <div style="padding: 30px;">
                <div style="width: 100px; height: 100px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-ban" style="font-size: 2.5rem; color: var(--white);"></i>
                </div>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.8rem;">0</h3>
                <p class="sans-serif-font" style="font-weight: 600; color: var(--dark-gray);">Pesticides Required</p>
                <p class="sans-serif-font" style="font-size: 0.9rem; margin-top: 10px;">Controlled environment eliminates pests naturally</p>
            </div>

            <div style="padding: 30px;">
                <div style="width: 100px; height: 100px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-recycle" style="font-size: 2.5rem; color: var(--white);"></i>
                </div>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.8rem;">100%</h3>
                <p class="sans-serif-font" style="font-weight: 600; color: var(--dark-gray);">Nutrient Recovery</p>
                <p class="sans-serif-font" style="font-size: 0.9rem; margin-top: 10px;">Closed-loop system recycles all nutrients</p>
            </div>

            <div style="padding: 30px;">
                <div style="width: 100px; height: 100px; background-color: var(--leaf-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-chart-line" style="font-size: 2.5rem; color: var(--white);"></i>
                </div>
                <h3 class="serif-font" style="color: var(--dark-forest-green); margin-bottom: 10px; font-size: 1.8rem;">300%</h3>
                <p class="sans-serif-font" style="font-weight: 600; color: var(--dark-gray);">Higher Yields</p>
                <p class="sans-serif-font" style="font-size: 0.9rem; margin-top: 10px;">More food from less space and resources</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2 class="serif-font">Experience SmartTunnel Technology</h2>
        <p class="sans-serif-font">Schedule a demonstration and see our revolutionary system in action</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="{{ route('contact') }}" class="btn sans-serif-font">Schedule a Demo</a>
            <a href="#" class="btn btn-secondary sans-serif-font">Download Brochure</a>
        </div>
    </div>
</section>
@endsection