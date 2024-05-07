window.addEventListener('load', () => {
  let lon;
  let lat;

  let temperaturaValor = document.getElementById('temperatura-valor');
  let temperaturaDescripcion = document.getElementById('temperatura-descripcion');
  let ubicacion = document.getElementById('ubicacion');
  let iconoAnimado = document.getElementById('icono-animado');
  let vientoVelocidad = document.getElementById('viento-velocidad');

  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(posicion => {
          lon = posicion.coords.longitude;
          lat = posicion.coords.latitude;

          const apiKey = '58f2a83d0e597c80302e86baf778a2d7'; // Reemplaza 'your-api-key' con tu clave de API de OpenWeatherMap

          const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&lang=es&units=metric&appid=${apiKey}`;

          fetch(url)
              .then(response => response.json())
              .then(data => {
                  let temp = Math.round(data.main.temp);
                  temperaturaValor.textContent = `${temp} °C`;

                  let desc = data.weather[0].description;
                  temperaturaDescripcion.textContent = desc.toUpperCase();
                  ubicacion.textContent = data.name;
                  vientoVelocidad.textContent = `${data.wind.speed} m/s`;

                  switch (data.weather[0].main) {
                      case 'Thunderstorm':
                          iconoAnimado.src = 'animated/thunder.svg';
                          break;
                      case 'Drizzle':
                          iconoAnimado.src = 'animated/rainy-2.svg';
                          break;
                      case 'Rain':
                          iconoAnimado.src = 'animated/rainy-7.svg';
                          break;
                      case 'Snow':
                          iconoAnimado.src = 'animated/snowy-6.svg';
                          break;
                      case 'Clear':
                          iconoAnimado.src = 'animated/day.svg';
                          break;
                      case 'Atmosphere':
                          iconoAnimado.src = 'animated/weather.svg';
                          break;
                      case 'Clouds':
                          iconoAnimado.src = 'animated/cloudy-day-1.svg';
                          break;
                      default:
                          iconoAnimado.src = 'animated/cloudy-day-1.svg';
                  }
              })
              .catch(error => {
                  console.log(error);
              });
      }, error => {
          console.error('Error al obtener la ubicación:', error);
          // Aquí podrías proporcionar un mensaje al usuario o utilizar una ubicación predeterminada.
      });
  } else {
      console.error('La geolocalización no está disponible en este navegador.');
      // Aquí podrías proporcionar un mensaje al usuario o utilizar una ubicación predeterminada.
  }
});