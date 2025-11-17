<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Passage Greens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --dark-forest-green: #1E3A2A;
            --light-sage-green: #C3CCBA;
            --leaf-green: #6E8C3D;
            --muted-olive-green: #8AA572;
            --sidebar-width: 280px;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .dashboard-layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--dark-forest-green);
            color: white;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 30px 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header .logo h1 {
            font-family: 'Playfair Display', serif;
            color: white;
            font-size: 1.8rem;
            margin: 0 0 5px 0;
        }

        .sidebar-header .logo p {
            color: var(--light-sage-green);
            font-size: 0.8rem;
            letter-spacing: 1.5px;
            margin: 0;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .nav-links li {
            margin: 5px 0;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: var(--light-sage-green);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: var(--leaf-green);
        }

        .nav-links a.active {
            background: rgba(110, 140, 61, 0.2);
            color: white;
            border-left-color: var(--leaf-green);
        }

        .nav-links i {
            width: 20px;
            margin-right: 12px;
            font-size: 1.1rem;
        }

        .nav-links .logout-link {
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        .nav-links .logout-link a {
            color: #ff6b6b;
        }

        .nav-links .logout-link a:hover {
            background: rgba(255, 107, 107, 0.1);
            color: #ff6b6b;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 0;
        }

        .content-header {
            background: white;
            padding: 20px 30px;
            border-bottom: 1px solid #e9ecef;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content-body {
            padding: 30px;
        }

        /* Card Styles */
        .dashboard-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            height: 100%;
        }

        .dashboard-card:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
            transform: translateY(-2px);
        }

        .system-card {
            border-left: 4px solid var(--leaf-green);
        }

        .sensor-card {
            border-top: 4px solid transparent;
        }

        .sensor-card:hover {
            border-top-color: var(--leaf-green);
        }

        /* Weather Widget Styles */
        .weather-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .weather-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
        }

        .weather-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .weather-temp {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .weather-location {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .weather-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }

        .weather-detail {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .weather-detail i {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        .weather-detail span {
            font-size: 0.9rem;
        }

        /* Temperature Gauge Styles */
        .temperature-gauge {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
        }

        .gauge-background {
            width: 100%;
            height: 100%;
            border: 8px solid #e9ecef;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
        }

        .gauge-fill {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            clip: rect(0px, 120px, 120px, 60px);
        }

        .gauge-cover {
            position: absolute;
            top: 8px;
            left: 8px;
            width: calc(100% - 16px);
            height: calc(100% - 16px);
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .temperature-range {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 0.8rem;
            color: #666;
        }

        /* Typography */
        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .sans-serif-font {
            font-family: 'Open Sans', sans-serif;
        }

        .text-brand {
            color: var(--dark-forest-green);
        }

        .text-accent {
            color: var(--leaf-green);
        }

        /* Buttons */
        .btn-brand {
            background: var(--leaf-green);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-brand:hover {
            background: var(--dark-forest-green);
            transform: translateY(-2px);
            color: white;
        }

        .btn-outline-brand {
            border: 2px solid var(--leaf-green);
            color: var(--leaf-green);
            background: transparent;
            padding: 8px 18px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-outline-brand:hover {
            background: var(--leaf-green);
            color: white;
        }

        /* Sensor Specific Styles */
        .sensor-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .value-display {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1;
        }

        .water-tank {
            background: #e9ecef;
            height: 120px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            border: 2px solid #dee2e6;
        }

        .water-fill {
            background: linear-gradient(to top, #11998e, #38ef7d);
            position: absolute;
            bottom: 0;
            width: 100%;
            transition: height 0.5s ease;
        }

        .water-markers {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .water-markers div {
            position: absolute;
            left: 10px;
            border-top: 1px dashed rgba(255, 255, 255, 0.5);
            width: 100%;
        }

        /* Sensor Data Table Styles */
        .sensor-table-card {
            margin-top: 30px;
        }

        .sensor-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .sensor-table th {
            background: linear-gradient(135deg, var(--leaf-green), var(--dark-forest-green));
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            border: none;
        }

        .sensor-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
            background: white;
        }

        .sensor-table tr:hover td {
            background-color: #f8f9fa;
        }

        .sensor-table tr:last-child td {
            border-bottom: none;
        }

        .table-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h3 {
            margin: 0;
            color: var(--dark-forest-green);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .dashboard-layout {
                flex-direction: column;
            }

            .weather-details {
                grid-template-columns: 1fr;
            }

            .sensor-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-layout">
        <!-- Vertical Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <h1>PASSAGE GREENS</h1>
                    <p>CULTIVATING REIMAGINED</p>
                </div>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="#" class="active">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-bell"></i>
                        Notification
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </li>
                <li class="logout-link">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Content Header -->
            <div class="content-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="serif-font text-brand mb-2">Dashboard</h1>
                        <p class="sans-serif-font text-muted mb-0">
                            Welcome back, {{ $user->name }}!
                            @if($user->isFarmer())
                            <span class="badge" style="background: var(--leaf-green); color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8rem;">
                                Commercial Farmer
                            </span>
                            @elseif($user->isHousehold())
                            <span class="badge" style="background: var(--muted-olive-green); color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.8rem;">
                                Household User
                            </span>
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="system-status">
                            <span class="sans-serif-font text-muted">Last updated: </span>
                            <span class="sans-serif-font text-brand fw-600" id="last-update">
                                {{ $systems[0]['last_update']->format('H:i:s') }}
                            </span>
                            <button class="btn btn-brand btn-sm ms-2" onclick="refreshData()">
                                <i class="fas fa-sync-alt"></i> Refresh
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Body -->
            <div class="content-body">
                <!-- Sensor Data Table -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="dashboard-card sensor-table-card">
                            <div class="table-header">
                                <h3 class="serif-font text-brand mb-0">Live Sensor Data</h3>
                                <div class="d-flex align-items-center">
                                    <span class="sans-serif-font text-muted me-3" id="table-last-update">
                                        Updated: Just now
                                    </span>
                                    <button class="btn btn-brand btn-sm" onclick="refreshTableData()">
                                        <i class="fas fa-sync-alt"></i> Refresh
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="sensor-table">
                                    <thead>
                                        <tr>
                                            <th>Device ID</th>
                                            <th>Timestamp</th>
                                            <th>pH Level</th>
                                            <th>EC (µS/cm)</th>
                                            <th>Water Level</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sensor-table-body">
                                        @if(isset($sensorReadings) && count($sensorReadings) > 0)
                                        @foreach ($sensorReadings as $row)
                                        <tr>
                                            <td>
                                                <i class="fas fa-microchip text-accent me-2"></i>
                                                {{ $row['device_id'] }}
                                            </td>
                                            <td>
                                                <i class="far fa-clock text-muted me-2"></i>
                                                {{ \Carbon\Carbon::parse($row['timestamp'])->format('M j, H:i:s') }}
                                            </td>
                                            <td>
                                                <span class="badge 
                                            @if($row['ph'] >= 5.5 && $row['ph'] <= 7.5) 
                                                bg-success
                                            @else
                                                bg-warning
                                            @endif">
                                                    {{ $row['ph'] }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge 
                                            @if($row['ec'] >= 800 && $row['ec'] <= 1200) 
                                                bg-success
                                            @else
                                                bg-warning
                                            @endif">
                                                    {{ $row['ec'] }} µS/cm
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-2" style="width: 80px; height: 8px;">
                                                        <div class="progress-bar 
                                                    @if($row['water_level'] < 30) 
                                                        bg-danger
                                                    @elseif($row['water_level'] < 60)
                                                        bg-warning
                                                    @else
                                                        bg-success
                                                    @endif"
                                                            style="width: {{ $row['water_level'] }}%">
                                                        </div>
                                                    </div>
                                                    <span>{{ $row['water_level'] }}%</span>
                                                </div>
                                            </td>
                                            <td>
                                                @if($row['ph'] >= 5.5 && $row['ph'] <= 7.5 && $row['ec']>= 800 && $row['ec'] <= 1200 && $row['water_level']> 30)
                                                        <span class="badge bg-success">
                                                            <i class="fas fa-check-circle me-1"></i> Optimal
                                                        </span>
                                                        @else
                                                        <span class="badge bg-warning">
                                                            <i class="fas fa-exclamation-triangle me-1"></i> Check
                                                        </span>
                                                        @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">
                                                <i class="fas fa-database fa-2x mb-3"></i>
                                                <p>No sensor data available</p>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weather Widget and Recommendations Row -->
                <div class="row mt-4">
                    <!-- Weather Widget -->
                    <div class="col-md-6">
                        <div class="dashboard-card weather-card">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="text-white mb-2">Current Weather</h5>
                                    <div class="weather-temp">{{ $weatherData['temperature'] ?? 28 }}°C</div>
                                    <div class="weather-location">{{ $weatherData['location'] ?? 'Gaborone, BW' }}</div>
                                    <div class="weather-condition">{{ $weatherData['condition'] ?? 'Clear' }}</div>
                                </div>
                                <div class="weather-icon">
                                    @if(isset($weatherData['icon']))
                                    <img src="http://openweathermap.org/img/w/{{ $weatherData['icon'] }}.png" alt="Weather Icon">
                                    @else
                                    <i class="fas fa-sun fa-3x"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="weather-details mt-3">
                                <div class="weather-detail">
                                    <i class="fas fa-tint"></i>
                                    <span>Humidity: {{ $weatherData['humidity'] ?? 45 }}%</span>
                                </div>
                                <div class="weather-detail">
                                    <i class="fas fa-wind"></i>
                                    <span>Wind: {{ $weatherData['wind_speed'] ?? 15 }} km/h</span>
                                </div>
                            </div>
                            <button class="btn btn-light btn-sm mt-3" onclick="refreshWeather()">
                                <i class="fas fa-sync-alt"></i> Refresh Weather
                            </button>
                        </div>
                    </div>

                    <!-- System Recommendations -->
                    <div class="col-md-6">
                        <div class="dashboard-card h-100">
                            <h4 class="serif-font text-brand mb-3">System Recommendations</h4>
                            <div class="recommendations">
                                <div class="alert alert-warning sans-serif-font">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <strong>Nutrient level is low.</strong> Consider adding nutrient solution to maintain optimal plant growth.
                                </div>
                                <div class="alert alert-info sans-serif-font mt-2">
                                    <i class="fas fa-info-circle"></i>
                                    <strong>Water level is adequate.</strong> Next refill recommended in approximately 3 days.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Weather data (fallback data)
            const weatherData = {
                temperature: 28,
                condition: 'Sunny',
                humidity: 45,
                windSpeed: 15,
                pressure: 1013,
                visibility: 10,
                sunrise: '06:15',
                sunset: '18:45',
                location: 'Gaborone, BW'
            };

            // Temperature sensor data
            const temperatureData = {
                value: 24,
                min: 15,
                max: 35,
                optimal_min: 20,
                optimal_max: 25,
                status: 'optimal',
                trend: 'stable'
            };

            // Weather icon mapping
            const weatherIcons = {
                'Clear': 'fa-sun',
                'Clouds': 'fa-cloud',
                'Rain': 'fa-cloud-rain',
                'Drizzle': 'fa-cloud-rain',
                'Thunderstorm': 'fa-bolt',
                'Snow': 'fa-snowflake',
                'Mist': 'fa-smog',
                'Smoke': 'fa-smog',
                'Haze': 'fa-smog',
                'Dust': 'fa-smog',
                'Fog': 'fa-smog',
                'Sand': 'fa-smog',
                'Ash': 'fa-smog',
                'Squall': 'fa-wind',
                'Tornado': 'fa-tornado'
            };

            // Function to update temperature display
            function updateTemperatureDisplay(data) {
                const tempValue = document.getElementById('temperature-value');
                const tempStatus = document.getElementById('temperature-status');
                const tempTrend = document.getElementById('temperature-trend');
                const tempTimestamp = document.getElementById('temperature-timestamp');

                tempValue.textContent = data.value;
                tempStatus.textContent = data.status.charAt(0).toUpperCase() + data.status.slice(1);
                tempTimestamp.textContent = 'Just now';

                // Update status color based on temperature
                if (data.value < data.optimal_min) {
                    tempStatus.style.color = '#2196F3'; // Blue for cold
                } else if (data.value > data.optimal_max) {
                    tempStatus.style.color = '#FF5722'; // Red for hot
                } else {
                    tempStatus.style.color = '#28a745'; // Green for optimal
                }

                // Update trend indicator
                const trendIcon = tempTrend.querySelector('i');
                trendIcon.className = `fas fa-arrow-${data.trend === 'increasing' ? 'up' : data.trend === 'decreasing' ? 'down' : 'right'}`;
                trendIcon.style.color = data.trend === 'increasing' ? '#FF5722' : data.trend === 'decreasing' ? '#2196F3' : '#6c757d';
                tempTrend.querySelector('span').textContent = data.trend.charAt(0).toUpperCase() + data.trend.slice(1);
            }

            // Function to generate random temperature data for demo
            function generateTemperatureData() {
                const baseTemp = 24;
                const variation = Math.random() * 4 - 2; // -2 to +2 variation
                const newTemp = Math.round((baseTemp + variation) * 10) / 10;

                let status = 'optimal';
                if (newTemp < 20) status = 'low';
                if (newTemp > 25) status = 'high';

                const trends = ['stable', 'increasing', 'decreasing'];
                const trend = trends[Math.floor(Math.random() * trends.length)];

                return {
                    value: newTemp,
                    min: 15,
                    max: 35,
                    optimal_min: 20,
                    optimal_max: 25,
                    status: status,
                    trend: trend
                };
            }

            // Function to update weather display
            function updateWeatherDisplay(data) {
                console.log('Updating weather display with:', data);
                document.getElementById('weather-temp').textContent = `${data.temperature}°C`;
                document.getElementById('weather-condition').textContent = data.condition;
                document.getElementById('weather-humidity').textContent = `${data.humidity}%`;
                document.getElementById('weather-wind').textContent = `${data.windSpeed} km/h`;
                document.getElementById('weather-pressure').textContent = `${data.pressure} hPa`;
                document.getElementById('weather-visibility').textContent = `${data.visibility} km`;
                document.getElementById('weather-sunrise').textContent = data.sunrise;
                document.getElementById('weather-sunset').textContent = data.sunset;
                document.getElementById('weather-location').textContent = data.location;

                // Update weather icon
                const weatherIcon = document.getElementById('weather-icon');
                const iconClass = weatherIcons[data.condition] || 'fa-sun';
                weatherIcon.className = `fas ${iconClass}`;
            }

            // NEW: Function to refresh table data
            async function refreshTableData() {
                try {
                    const response = await fetch('{{ route("api.sensor-data") }}');
                    const data = await response.json();

                    // Update table last updated time
                    const now = new Date();
                    document.getElementById('table-last-update').textContent =
                        `Updated: ${now.toLocaleTimeString()}`;

                    showNotification('Sensor table updated successfully!', 'success');

                } catch (error) {
                    console.error('Error fetching table data:', error);
                    showNotification('Failed to update sensor table.', 'error');
                }
            }

            // Function to fetch real weather data from OpenWeatherMap API
            async function fetchRealWeatherData() {
                const apiKey = 'f228ceeb802ce0c87140b5111876ebcc';
                const city = 'Gaborone';
                const country = 'BW';

                // If no API key is set, use demo data
                if (apiKey === 'f228ceeb802ce0c87140b5111876ebcc') {
                    console.log('No API key configured, using demo data');
                    return null;
                }

                try {
                    console.log('Fetching weather data from API...');
                    const response = await fetch(
                        `https://api.openweathermap.org/data/2.5/weather?q=${city},${country}&appid=${apiKey}&units=metric`
                    );

                    console.log('API Response status:', response.status);

                    if (response.ok) {
                        const data = await response.json();
                        console.log('API Data received:', data);

                        const weatherInfo = {
                            temperature: Math.round(data.main.temp),
                            condition: data.weather[0].main,
                            humidity: data.main.humidity,
                            windSpeed: Math.round(data.wind.speed * 3.6),
                            pressure: data.main.pressure,
                            visibility: (data.visibility / 1000).toFixed(1),
                            sunrise: new Date(data.sys.sunrise * 1000).toLocaleTimeString('en-US', {
                                hour: '2-digit',
                                minute: '2-digit',
                                hour12: true
                            }),
                            sunset: new Date(data.sys.sunset * 1000).toLocaleTimeString('en-US', {
                                hour: '2-digit',
                                minute: '2-digit',
                                hour12: true
                            }),
                            location: `${data.name}, ${data.sys.country}`
                        };

                        console.log('Processed weather info:', weatherInfo);
                        return weatherInfo;
                    } else {
                        const errorText = await response.text();
                        console.error('API Error response:', errorText);
                        throw new Error(`API response not OK: ${response.status}`);
                    }
                } catch (error) {
                    console.error('Error fetching weather data from API:', error);
                    throw error;
                }
            }

            // Function to generate realistic demo data with variations
            function generateDemoWeatherData() {
                const conditions = ['Clear', 'Clouds', 'Rain', 'Thunderstorm'];
                const randomCondition = conditions[Math.floor(Math.random() * conditions.length)];

                const baseTemp = 28;
                const baseHumidity = 45;
                const baseWind = 15;

                return {
                    temperature: baseTemp + Math.floor(Math.random() * 8) - 4,
                    condition: randomCondition,
                    humidity: baseHumidity + Math.floor(Math.random() * 30) - 10,
                    windSpeed: baseWind + Math.floor(Math.random() * 12) - 4,
                    pressure: 1010 + Math.floor(Math.random() * 10) - 5,
                    visibility: (8 + Math.random() * 4).toFixed(1),
                    sunrise: '06:15 AM',
                    sunset: '06:45 PM',
                    location: 'Gaborone, BW'
                };
            }

            // Function to refresh weather data
            async function refreshWeather() {
                console.log('Refreshing weather data...');

                try {
                    const realData = await fetchRealWeatherData();
                    if (realData) {
                        updateWeatherDisplay(realData);
                        showNotification('Weather data updated from API!', 'success');
                    } else {
                        const demoData = generateDemoWeatherData();
                        updateWeatherDisplay(demoData);
                        showNotification('Weather data refreshed (demo mode)', 'info');
                    }
                } catch (error) {
                    console.error('Failed to fetch real weather data, using demo data:', error);
                    const demoData = generateDemoWeatherData();
                    updateWeatherDisplay(demoData);
                    showNotification('Using demo weather data', 'info');
                }
            }

            // Function to update sensor data
            async function refreshData() {
                try {
                    const response = await fetch('{{ route("api.sensor-data") }}');
                    const data = await response.json();

                    // Update pH data
                    document.getElementById('ph-value').textContent = data.ph.value;
                    document.getElementById('ph-status').textContent = data.ph.status.charAt(0).toUpperCase() + data.ph.status.slice(1);
                    document.getElementById('ph-timestamp').textContent = 'Just now';

                    // Update water level data
                    document.getElementById('water-level-value').textContent = data.water_level.value;
                    document.getElementById('water-level-status').textContent = data.water_level.status.charAt(0).toUpperCase() + data.water_level.status.slice(1);
                    document.getElementById('water-fill').style.height = data.water_level.value + '%';

                    // Update nutrients data
                    document.getElementById('nutrients-value').textContent = data.nutrients.value;
                    document.getElementById('nutrients-status').textContent = data.nutrients.status.charAt(0).toUpperCase() + data.nutrients.status.slice(1);

                    // Update temperature data
                    const tempData = generateTemperatureData();
                    updateTemperatureDisplay(tempData);

                    // Update last update time
                    const now = new Date();
                    document.getElementById('last-update').textContent = now.toLocaleTimeString();

                    // Also update table timestamp
                    document.getElementById('table-last-update').textContent =
                        `Updated: ${now.toLocaleTimeString()}`;

                    // Show success feedback
                    showNotification('Sensor data updated successfully!', 'success');

                } catch (error) {
                    console.error('Error fetching sensor data:', error);
                    showNotification('Failed to update sensor data. Please try again.', 'error');
                }
            }

            // Function to show notifications
            function showNotification(message, type) {
                const existingNotifications = document.querySelectorAll('.custom-notification');
                existingNotifications.forEach(notification => notification.remove());

                const notification = document.createElement('div');
                notification.className = 'custom-notification';
                notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 20px;
            border-radius: 6px;
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        `;

                if (type === 'success') {
                    notification.style.background = '#28a745';
                } else if (type === 'error') {
                    notification.style.background = '#dc3545';
                } else {
                    notification.style.background = '#17a2b8';
                }

                notification.textContent = message;
                document.body.appendChild(notification);

                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }

            // Auto-refresh sensor data every 30 seconds
            setInterval(refreshData, 30000);

            // Auto-refresh weather every 2 minutes
            setInterval(refreshWeather, 120000);

            // Initialize on page load
            document.addEventListener('DOMContentLoaded', function() {
                console.log('Dashboard initialized');

                // Load weather data when page loads
                refreshWeather();

                // Initialize temperature display
                updateTemperatureDisplay(temperatureData);

                // Initialize nutrient gauge
                updateNutrientGauge({
                    {
                        $sensorData['nutrients']['value']
                    }
                });

                // Add CSS for animations
                const style = document.createElement('style');
                style.textContent = `
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            
            .weather-card {
                transition: all 0.3s ease;
            }
            
            .weather-card:hover {
                transform: translateY(-2px);
            }
        `;
                document.head.appendChild(style);
            });

            // Initialize nutrient gauge position
            function updateNutrientGauge(value) {
                const min = 800;
                const max = 1200;
                const range = max - min;
                const percentage = ((value - min) / range) * 100;
                const indicator = document.getElementById('nutrient-indicator');
                if (indicator) {
                    indicator.style.left = Math.min(Math.max(percentage, 0), 100) + '%';
                }
            }
        </script>
</body>

</html>