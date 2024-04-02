<!DOCTYPE html>
<html>
<head>
    <title>Weather Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="weatherChart" width="400" height="400"></canvas>

    <script>
        const apiKey = 'YOUR_API_KEY';
        const city = 'Ahmedabad';
        const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const temperature = data.main.temp;
                const humidity = data.main.humidity;

                const ctx = document.getElementById('weatherChart').getContext('2d');
                const weatherChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Temperature', 'Humidity'],
                        datasets: [{
                            label: 'Weather Data',
                            data: [temperature, humidity],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching weather data:', error);
            });
    </script>
</body>
</html>
