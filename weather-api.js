const apiKey = 'b1be4f9f32b188bb8da88a85f8e6cb9d';
const city = 'Ahmedabad';
const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

fetch(url)
    .then(response => response.json())
    .then(data => {
        // Process the data and create the chart
        createWeatherChart(data);
    })
    .catch(error => {
        console.error('Error fetching weather data:', error);
    });
