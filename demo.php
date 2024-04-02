<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="demo.css" />
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
      .demo_s_text{
  position: absolute;
  top: 263%;
  color: #184e77;
  left: 20%;
}
.demo_s_text1{
  position: absolute;
  top: 275%;
  color: #184e77;
  left: 20%;
}
.demo_s_text2{
  position: absolute;
  top: 310%;
  color: #184e77;
  left: 20%;
}
.demo_black-div {
  /* background-color: #ffd6ff; */
  color: #184e77;
  padding: 18%;
  height: 30%;
  position: relative;
  text-align: center;
}
.demo_weather-icons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  color: black;
  gap: 115px;
  
}
.demo_s_icon{
  position: absolute;
  top: 285%;
  left: 25%;
  color: #184e77;
}
.demo_weather-icons_name {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  color: #184e77;
  gap: 115px;
  
}
.demo_s_icon_name{
  position: absolute;
  top: 296%;
  left: 25%;
  color: black;
}
    </style>
  </head>
  <body>
    <!-- Header -->
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

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="index.php" method="post">
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" id="email"  name="email"placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" id="password"  name="password"placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            <input type="submit" class="button" value="Login" name="Login">

            <div class="login_signup">Don't have an account? <a href="signup.html" id="signup">Signup</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="#">
            <h2>Signup</h2>

            <div class="input_box">
              <input type="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Confirm password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Signup Now</button>

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
      <div class="text"><h2>OpenWeather</h2><br>
        <h4>Weather forecasts, nowcasts and <br>history in a fast and elegant way</h4></div>
    </section>

    <div class="t_page">Weather Forecast for Major Cities in India</div>

<table id="weatherTable">
  <tr>
    <th>City</th>
    <th>Temperature (&deg;C)</th>
    <th>Weather</th>
  </tr>
</table>
  <div style="border-style:none; height:30px;">

  </div>

    <div class="about-us" style="background-color:ffb3c6;">
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

      <!-- second page -->
      <div class="demo_black-div">
        
      </div>
      <div class="demo_s_text"><h2>Use our Professional collections to get extended weather data for any <br>coordinates on the globe</h2></div>
        <div class="demo_s_text1"><h5>or professionals and specialists with middle and large sized project, we recommend our Professional collections. They include either an <br>extended data sets, or various tools for receiving and displaying data, etc.</h5></div>
        <div class="demo_s_icon">
          <div class="demo_weather-icons">
            <img src="icon-1.png" alt="">
            <img src="icon-2.png" alt="">
            <img src="icon-3.png" alt="">
            <img src="icon-4 (1).png" alt="">
            <img src="icon-5.png" alt="">
          </div>
        </div>

        <div class="demo_s_icon_name">
          <div class="demo_weather-icons_name">
            <div>Current <br>Weather<br>(current)</div>
            <div>Current <br>Weather<br>(current)</div>
            <div>Current <br>Weather<br>(current)</div>
            <div>Current <br>Weather<br>(current)</div>
            <div>Current <br>Weather<br>(current)</div>
          </div>
        </div>

        <div class="demo_s_text2">
          <h5>Called by:<br>
            geographic coordinates, zip/post code, city name, city ID, number of cities (only in current weather and forecast APIs)</h5>
        </div>


        

        <!-- third page -->

        

    
        <script src="demo.js"></script>
        <script>
          // API Key for OpenWeatherMap
          const apiKey = 'b1be4f9f32b188bb8da88a85f8e6cb9d'; // Replace 'YOUR_API_KEY' with your actual API key
        
          // List of major cities in India
          const cities = ['Mumbai', 'Delhi', 'Bangalore', 'Kolkata', 'Chennai', 'Hyderabad', 'Pune', 'Ahmedabad', 'Jaipur', 'Lucknow'];
        
          // Fetch weather data from OpenWeatherMap API
          const fetchWeather = async () => {
            try {
              const responses = await Promise.all(
                cities.map(city =>
                  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city},IN&units=metric&appid=${apiKey}`)
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
        </script>
  </body>
</html>