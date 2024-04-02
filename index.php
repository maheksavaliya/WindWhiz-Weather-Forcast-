<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App Project JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="style.css">

    <script src="script.js" defer></script>
    <script src="demo.js"></script>
    <link rel="stylesheet" href="demo.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Additional CSS for the city history box */
        .city-history {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .city-history div {
            background: rgba(158, 108, 141, 0.724);
            width: 40%;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .city-history div:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="nav">
        <a href="#" class="nav_logo"><b><font color="#023e8a">WindWhiz</font></b></a>

        <ul class="nav_items">
            <li class="nav_item">
                <a href="#" class="nav_link"><font size="5" color="#023e8a">Home</font></a>
                <a href="#" class="nav_link"><font size="5" color="#023e8a">About</font></a>
                <a href="#" class="nav_link"><font size="5" color="#023e8a">news</font></a>
                <a href="#" class="nav_link"><font size="5" color="#023e8a">Blog</font></a>
            </li>
        </ul>


    </nav>
</header>

<!-- Home -->
<section class="home">


</section>
<!-- img -->
<div >
    <!-- <img src="./weather.jpg" alt="Image" class="img" width="1519" height="500"> -->
    <div class="overlay-text">
        <div class="weather-input">
            <h3>Enter a City Name</h3>
            <input class="city-input" type="text"  style="background-color:rgba(192, 192, 192, 0.4);" id="cityInput" placeholder="E.g., New York, London, Tokyo">
            <button class="search-btn" onclick="searchWeather(); saveCity();"><b style="color: rgb(9, 93, 146);">Search</b></button>
            <div class="separator"></div>
            <button class="location-btn">Use Current Location</button>
            <div style="border-style:none; height:10px;"></div>
            <h5>City History:</h5>
            <div class="city-history" id="cityList"></div>
        </div>
    </div>

</div>


<div class="container">

    <div class="weather-data">
        <div class="current-weather">
            <div class="details">
                <h2>_______ ( ______ )</h2>
                <h6>Temperature: __°C</h6>
                <h6>Wind: __ M/S</h6>
                <h6>Humidity: __%</h6>
            </div>
        </div>
        <div class="days-forecast">
            <h2> <font color="#184e77">5-Day Forecast</font></h2>
            <ul class="weather-cards">
                <li class="card">
                    <h3>( ______ )</h3>
                    <h6>Temp: __C</h6>
                    <h6>Wind: __ M/S</h6>
                    <h6>Humidity: __%</h6>
                </li>
                <li class="card">
                    <h3>( ______ )</h3>
                    <h6>Temp: __C</h6>
                    <h6>Wind: __ M/S</h6>
                    <h6>Humidity: __%</h6>
                </li>
                <li class="card">
                    <h3>( ______ )</h3>
                    <h6>Temp: __C</h6>
                    <h6>Wind: __ M/S</h6>
                    <h6>Humidity: __%</h6>
                </li>
                <li class="card">
                    <h3>( ______ )</h3>
                    <h6>Temp: __C</h6>
                    <h6>Wind: __ M/S</h6>
                    <h6>Humidity: __%</h6>
                </li>
                <li class="card">
                    <h3>( ______ )</h3>
                    <h6>Temp: __C</h6>
                    <h6>Wind: __ M/S</h6>
                    <h6>Humidity: __%</h6>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- third page -->
<div class="t_page">Weather Forecast for Major Cities in India</div>
<table id="weatherTable">
    <tr>
        <th>City</th>
        <th>Temperature (&deg;C)</th>
        <th>Weather</th>
    </tr>
</table>

<!-- geographic -->
<div class="main">
    <div class="box">
        <canvas id="barChart" width="800" height="400"></canvas>
    </div>
    <div class="map">
        <iframe style="height: 380px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.2991879023!2d72.41493012913726!3d23.020158084541748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1711691237027!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


<div class="about-us">
    <div class="about-item">
        <i class="fas fa-clock"></i>
        <h3>Real-Time Updates</h3>
        <p>Receive real-time weather updates to stay informed about changing conditions.</p>
    </div>
    <div class="about-item">
        <i class="fas fa-umbrella"></i>
        <h3>Weather Alerts</h3>
        <p>Get notified about severe weather alerts and stay safe during extreme conditions.</p>
    </div>
    <div class="about-item">
        <i class="fas fa-cogs"></i>
        <h3>Customizable Options</h3>
        <p>Customize your weather dashboard to display the information that matters most to you.</p>
    </div>
</div>


<div class="about-us">

    <div class="about-item">
        <i class="fas fa-users"></i>
        <h3>Community and Engagement</h3>
        <p>Weather is a shared experience that impacts us all.  </p>
    </div>
    <div class="about-item">
        <i class="fas fa-cogs"></i>
        <h3>Advanced Technology</h3>
        <p>Our weather platform is powered by advanced technology and cutting-edge algorithms that ensure the delivery of accurate and reliable weather information. </p>
    </div>
    <div class="about-item">
        <i class="fas fa-umbrella-beach"></i>
        <h3>Weather for Your Lifestyle</h3>
        <p>Whether you're a beach bum, outdoor adventurer, or city slicker, WeatherHub offers weather insights tailored to your lifestyle.</p>
    </div>
</div>


<!-- 5 page -->
<div class="black-div">

</div>
<div class="s_text"><h2>Use our Professional collections to get extended weather data for any <br>coordinates on the globe</h2></div>
<div class="s_text1"><h5>or professionals and specialists with middle and large sized project, we recommend our Professional collections. They include either an <br>extended data sets, or various tools for receiving and displaying data, etc.</h5></div>
<div class="s_icon">
    <div class="weather-icons">
        <img src="icon-1.png" alt="">
        <img src="icon-2.png" alt="">
        <img src="icon-3.png" alt="">
        <img src="icon-4 (1).png" alt="">
        <img src="icon-5.png" alt="">
    </div>
</div>

<div class="s_icon_name">
    <div class="weather-icons_name">
        <div>Current <br>Weather<br>(current)</div>
        <div>Current <br>Weather<br>(current)</div>
        <div>Current <br>Weather<br>(current)</div>
        <div>Current <br>Weather<br>(current)</div>
        <div>Current <br>Weather<br>(current)</div>
    </div>
</div>

<div class="s_text2">
    <h5>Called by:<br>
        geographic coordinates, zip/post code, city name, city ID, number of cities (only in current weather and forecast APIs)</h5>
</div>

<script>
    // API Key for OpenWeatherMap
    const apiKey1 = 'b1be4f9f32b188bb8da88a85f8e6cb9d'; // Replace 'YOUR_API_KEY' with your actual API key

    // List of major cities in India
    const cities = ['Mumbai', 'Delhi', 'Bangalore', 'Kolkata', 'Chennai', 'Hyderabad', 'Pune', 'Ahmedabad', 'Jaipur', 'Lucknow'];

    // Array to store the entered city names
    let cityHistory = [];

    // Fetch weather data from OpenWeatherMap API
    const fetchWeather = async () => {
        try {
            const responses = await Promise.all(
                cities.map(city =>
                    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city},IN&units=metric&appid=${apiKey1}`)
                )
            );
            const data = await Promise.all(responses.map(response => response.json()));

            const tableBody = document.getElementById('weatherTable');

            data.forEach((cityData, index) => {
                const row = tableBody.insertRow();
                const cityNameCell = row.insertCell(0);
                const temperatureCell = row.insertCell(1);
                const weatherCell = row.insertCell(2);

                cityNameCell.textContent = cities[index];
                temperatureCell.textContent = cityData.main.temp;
                weatherCell.textContent = cityData.weather[0].description;
            });
        } catch (error) {
            console.error('Error fetching weather data:', error);
        }
    };

    // Call the fetchWeather function
    fetchWeather();

    // Function to save the entered city name to the city history
    function saveCity() {
        let cityInput = document.getElementById('cityInput').value.trim();
        if (cityInput !== '') {
            if (cityHistory.length >= 4) {
                cityHistory.shift(); // Remove the oldest city if history is full
            }
            cityHistory.push(cityInput);
            displayCityHistory();
        }
    }

    // Function to fetch the current weather for a city
    async function getWeather(city) {
        try {
            const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey1}`);
            const data = await response.json();
            return {
                temp: data.main.temp,
                weather: data.weather[0].description,
                icon: data.weather[0].icon
            };
        } catch (error) {
            console.error('Error fetching weather data:', error);
        }
    }

    // Function to display the city history in the cityList element
    async function displayCityHistory() {
        let cityList = document.getElementById('cityList');
        cityList.innerHTML = '';
        for (let i = 0; i < cityHistory.length; i++) {
            let city = cityHistory[i];
            let weatherData = await getWeather(city);
            let cityElement = document.createElement('div');
            cityElement.textContent = city;
            let icon = document.createElement('img');
            icon.src = `http://openweathermap.org/img/wn/${weatherData.icon}.png`;
            cityElement.appendChild(icon);
            cityElement.addEventListener('click', () => {
                document.getElementById('cityInput').value = city;
                searchWeather();
            });
            cityList.appendChild(cityElement);
        }
    }

    // Call displayCityHistory initially to display any existing city history
    displayCityHistory();
</script>
<!-- login -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
