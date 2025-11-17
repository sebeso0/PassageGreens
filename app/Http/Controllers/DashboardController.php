<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        // Get current user's systems (in a real app, this would come from database)
        $userSystems = [
            [
                'id' => 1,
                'name' => 'Backyard SmartTunnel',
                'location' => 'Gaborone',
                'status' => 'active',
                'last_update' => now()->subMinutes(5),
            ]
        ];

        // Mock sensor data - in real application, this would come from database
        $sensorData = [
            'ph' => [
                'value' => 6.8,
                'status' => 'optimal',
                'min' => 5.5,
                'max' => 7.5,
                'trend' => 'stable'
            ],
            'water_level' => [
                'value' => 75,
                'status' => 'good',
                'unit' => '%',
                'min' => 20,
                'max' => 100,
                'trend' => 'decreasing'
            ],
            'nutrients' => [
                'value' => 850,
                'status' => 'low',
                'unit' => 'ppm',
                'min' => 800,
                'max' => 1200,
                'trend' => 'decreasing'
            ]
        ];

        // Add sensor readings data for the table
        $sensorReadings = [
            [
                'device_id' => 'PG-001',
                'timestamp' => now()->subMinutes(2),
                'ph' => 6.8,
                'ec' => 850,
                'water_level' => 75
            ],
            [
                'device_id' => 'PG-002',
                'timestamp' => now()->subMinutes(5),
                'ph' => 7.2,
                'ec' => 920,
                'water_level' => 82
            ]
        ];

        // Get weather data
        $weatherData = $this->getWeatherData();

        return view('dashboard', [
            'title' => 'Dashboard - Passage Greens',
            'user' => Auth::user(),
            'systems' => $userSystems,
            'sensorData' => $sensorData,
            'sensorReadings' => $sensorReadings,
            'weatherData' => $weatherData
        ]);
    }

    public function getSensorData()
    {
        // In a real application, this would fetch live data from database or IoT devices
        $mockData = [
            'ph' => [
                'value' => round(6.5 + (mt_rand(-10, 10) / 10), 1), // Random between 5.5-7.5
                'status' => 'optimal',
                'timestamp' => now()->toISOString()
            ],
            'water_level' => [
                'value' => mt_rand(65, 85), // Random between 65-85%
                'status' => 'good',
                'timestamp' => now()->toISOString()
            ],
            'nutrients' => [
                'value' => mt_rand(800, 900), // Random between 800-900 ppm
                'status' => 'low',
                'timestamp' => now()->toISOString()
            ]
        ];

        return response()->json($mockData);
    }

    private function getWeatherData()
    {
        return Cache::remember('weather_data', 1800, function () { // Cache for 30 minutes
            $apiKey = env('WEATHER_API_KEY');
            $city = 'Gaborone';
            $country = 'BW';

            // If no API key, return demo data
            if (!$apiKey || $apiKey === 'your_openweathermap_api_key_here') {
                return $this->getDemoWeatherData();
            }

            try {
                $response = Http::timeout(10)->get(
                    "https://api.openweathermap.org/data/2.5/weather?q={$city},{$country}&appid={$apiKey}&units=metric"
                );

                if ($response->successful()) {
                    $data = $response->json();
                    return [
                        'temperature' => round($data['main']['temp']),
                        'condition' => $data['weather'][0]['main'],
                        'humidity' => $data['main']['humidity'],
                        'wind_speed' => round($data['wind']['speed'] * 3.6), // Convert m/s to km/h
                        'pressure' => $data['main']['pressure'],
                        'visibility' => ($data['visibility'] / 1000),
                        'sunrise' => date('H:i', $data['sys']['sunrise']),
                        'sunset' => date('H:i', $data['sys']['sunset']),
                        'location' => $data['name'] . ', ' . $data['sys']['country'],
                        'icon' => $data['weather'][0]['icon']
                    ];
                }
            } catch (\Exception $e) {
                \Log::error('Weather API error: ' . $e->getMessage());
            }

            return $this->getDemoWeatherData();
        });
    }

    private function getDemoWeatherData()
    {
        return [
            'temperature' => 28,
            'condition' => 'Clear',
            'humidity' => 45,
            'wind_speed' => 15,
            'pressure' => 1013,
            'visibility' => 10,
            'sunrise' => '06:15',
            'sunset' => '18:45',
            'location' => 'Gaborone, BW',
            'icon' => '01d'
        ];
    }
}
