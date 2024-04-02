function saveCity() {
    var cityInput = document.getElementById('cityInput').value;
    var cityList = JSON.parse(localStorage.getItem('cityList')) || [];
    
    if (!cityList.includes(cityInput)) {
        cityList.push(cityInput);
        localStorage.setItem('cityList', JSON.stringify(cityList));
        updateCityList();
    }
}

function updateCityList() {
    var cityList = JSON.parse(localStorage.getItem('cityList')) || [];
    var cityListElement = document.getElementById('cityList');
    cityListElement.innerHTML = '';
    cityList.forEach(function(city) {
        var div = document.createElement('div');
        div.className = 'city-box';
        div.textContent = city;
        cityListElement.appendChild(div);
    });
}

updateCityList();
