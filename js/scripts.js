$(function () {
  $(document).scroll(function () {
    var $nav = $("header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

var mymap = L.map('mapid').setView([49.030503, 17.338915], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYW50ZXNzIiwiYSI6ImNrZ3FrdW13ZTA2NTgydW9ibXN4a2lid2YifQ.BHHtSg1y_gGdfTujYNih8Q'
}).addTo(mymap);

var marker = L.marker([49.030503, 17.338915]).addTo(mymap);

marker.bindPopup("<b>Polešovice 794</b><br>687 37").openPopup();