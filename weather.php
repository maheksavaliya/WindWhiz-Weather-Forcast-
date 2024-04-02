<?php

$apiKey = 'YOUR_API_KEY';
$city = 'Ahmedabad';
$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
$response = file_get_contents($url);
$data = json_decode($response, true);

$temperature = $data['main']['temp'];
$humidity = $data['main']['humidity'];
$windSpeed = $data['wind']['speed'];

$weatherData = [
    'temperature' => $temperature,
    'humidity' => $humidity,
    'windSpeed' => $windSpeed
];

echo json_encode($weatherData);
