<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature API Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #009688;
            --secondary-color: #ff9800;
        }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e0f2f1 0%, #ffffff 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .weather-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
            position: relative;
        }
        .header h2 {
            margin: 0;
            color: #333;
            font-size: 24px;
        }
        .search-container {
            position: relative;
            margin-top: 20px;
        }
        .search-input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 16px;
            box-sizing: border-box;
            outline: none;
            transition: 0.3s;
        }
        .search-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 5px rgba(0, 150, 136, 0.3);
        }
        .suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 10px 10px;
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            text-align: left;
            display: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .suggestion-item {
            padding: 10px 15px;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
        }
        .suggestion-item:hover {
            background-color: #f9f9f9;
        }
        .suggestion-item:last-child {
            border-bottom: none;
        }
        .temp-display {
            margin: 25px 0;
            font-size: 64px;
            font-weight: bold;
            color: var(--primary-color);
        }
        .details {
            display: flex;
            justify-content: space-around;
            margin-bottom: 25px;
            color: #666;
            font-size: 14px;
        }
        .detail-item i {
            color: var(--secondary-color);
            margin-bottom: 5px;
            display: block;
        }
        .btn-weather {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }
        .btn-weather:hover {
            background-color: #00796b;
            transform: scale(1.02);
        }
        .btn-weather:disabled {
            background-color: #ccc;
        }
        #error-msg {
            color: #d32f2f;
            font-size: 12px;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>

<div class="weather-card">
    <div class="header">
        <h2><i class="fa-solid fa-cloud-sun"></i> Dynamic Weather</h2>
        <div class="search-container">
            <input type="text" id="citySearch" class="search-input" placeholder="Search city (e.g. Mumbai, Delhi)..." autocomplete="off">
            <div id="suggestions" class="suggestions"></div>
        </div>
    </div>

    <div id="weather-content" style="margin-top: 25px;">
        <h3 id="cityNameDisplay" style="margin: 0; color: #333;">New Delhi, India</h3>
        <div class="temp-display" id="temperature">--°C</div>
        
        <div class="details">
            <div class="detail-item">
                <i class="fa-solid fa-wind"></i>
                <span id="windspeed">-- km/h</span>
            </div>
            <div class="detail-item">
                <i class="fa-solid fa-droplet"></i>
                <span id="weather-desc">Clear</span>
            </div>
        </div>
    </div>

    <button id="getWeather" class="btn-weather">
        <i class="fa-solid fa-sync"></i> Refresh Temperature
    </button>
    
    <p id="error-msg">City not found or API error.</p>
</div>

<script>
    let currentLat = 28.61;
    let currentLon = 77.23;
    let searchTimeout = null;

    const citySearch = document.getElementById('citySearch');
    const suggestionsBox = document.getElementById('suggestions');
    const nameDisplay = document.getElementById('cityNameDisplay');

    // Dynamic Geocoding Search
    citySearch.addEventListener('input', function() {
        const query = this.value.trim();
        clearTimeout(searchTimeout);

        if (query.length < 2) {
            suggestionsBox.style.display = 'none';
            return;
        }

        searchTimeout = setTimeout(() => {
            fetch(`https://geocoding-api.open-meteo.com/v1/search?name=${query}&count=5&language=en&format=json`)
                .then(res => res.json())
                .then(data => {
                    if (data.results && data.results.length > 0) {
                        displaySuggestions(data.results);
                    } else {
                        suggestionsBox.style.display = 'none';
                    }
                })
                .catch(() => {
                    suggestionsBox.style.display = 'none';
                });
        }, 300);
    });

    function displaySuggestions(results) {
        suggestionsBox.innerHTML = '';
        results.forEach(city => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            const location = `${city.name}, ${city.admin1 ? city.admin1 + ', ' : ''}${city.country}`;
            div.innerHTML = `<strong>${city.name}</strong> <span style="font-size:12px; color:#999;">${city.admin1 || ''}, ${city.country}</span>`;
            div.addEventListener('click', () => {
                selectCity(city.latitude, city.longitude, location);
            });
            suggestionsBox.appendChild(div);
        });
        suggestionsBox.style.display = 'block';
    }

    function selectCity(lat, lon, name) {
        currentLat = lat;
        currentLon = lon;
        nameDisplay.textContent = name;
        citySearch.value = name;
        suggestionsBox.style.display = 'none';
        fetchWeather();
    }

    // Close suggestions on click outside
    document.addEventListener('click', (e) => {
        if (!citySearch.contains(e.target) && !suggestionsBox.contains(e.target)) {
            suggestionsBox.style.display = 'none';
        }
    });

    function fetchWeather() {
        const tempEl = document.getElementById('temperature');
        const windEl = document.getElementById('windspeed');
        const descEl = document.getElementById('weather-desc');
        const btn = document.getElementById('getWeather');
        const errorMsg = document.getElementById('error-msg');

        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Fetching weather...';
        errorMsg.style.display = 'none';

        const url = `https://api.open-meteo.com/v1/forecast?latitude=${currentLat}&longitude=${currentLon}&current_weather=true`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const weather = data.current_weather;
                tempEl.textContent = `${weather.temperature}°C`;
                windEl.textContent = `${weather.windspeed} km/h`;
                
                // Better weather code descriptions
                const codes = {
                    0: 'Clear Sky', 1: 'Mainly Clear', 2: 'Partly Cloudy', 3: 'Overcast',
                    45: 'Fog', 48: 'Fog', 51: 'Light Drizzle', 61: 'Rain', 95: 'Storm'
                };
                descEl.textContent = codes[weather.weathercode] || 'Cloudy';
                
                btn.disabled = false;
                btn.innerHTML = '<i class="fa-solid fa-sync"></i> Refresh Temperature';
            })
            .catch(error => {
                console.error(error);
                btn.disabled = false;
                btn.innerHTML = '<i class="fa-solid fa-sync"></i> Try Again';
                errorMsg.style.display = 'block';
            });
    }

    document.getElementById('getWeather').addEventListener('click', fetchWeather);

    // Initial load for New Delhi
    fetchWeather();
</script>

</body>
</html>
