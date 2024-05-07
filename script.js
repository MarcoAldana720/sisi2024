function iniciarMap()
{
    var coord = {lat:21.012882, lng:-89.665100};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map:map
    });
}