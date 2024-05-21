//DETECTA LA UBICACION POR COORDENADAS
function iniciarMap()
{
    var coord = {lat:21.012882, lng:-89.665100};
    var map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: coord});
    var marker = new google.maps.Marker({position: coord, map:map});
}

// -------------------------------------------------------------------------------------
// DETECTA MI UBICACION ACTUAL
//function iniciarMap() {
//    if (navigator.geolocation) {
//        navigator.geolocation.getCurrentPosition(function(position) {
//            var coord = {lat: position.coords.latitude, lng: position.coords.longitude};
//            var map = new google.maps.Map(document.getElementById('map'),{
//                zoom: 15,
//                center: coord
//            });
//            var marker = new google.maps.Marker({
//                position: coord,
//                map: map
//            });
//        }, function() {
//            // Error de geolocalización
//            handleLocationError(true);
//        });
//    } else {
//        // El navegador no soporta geolocalización
//        handleLocationError(false);
//    }
//}

function handleLocationError(browserHasGeolocation) {
    var errorMessage = browserHasGeolocation ? 'Error: La geolocalización ha fallado.' : 'Error: Tu navegador no soporta geolocalización.';
    alert(errorMessage);
}