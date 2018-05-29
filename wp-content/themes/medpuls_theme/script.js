
//sidenav
const sideNav = document.querySelector(".sidenav");
M.Sidenav.init(sideNav, {});
//slider
const slider = document.querySelector(".slider");
M.Slider.init(slider, {
    indicators: false,
    transition: 500,
    interval: 9000
});

const ss = document.querySelectorAll(".scrollspy");
M.ScrollSpy.init(ss, {});
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {accordion: true});
});
function initMap(){
    var options = {
        zoom: 18,
        center: {lat: 51.793600, lng: 19.401632}
    }
    var map = new google.maps.Map(document.getElementById('map'), options);

    var marker = new google.maps.Marker({
        position: {lat: 51.793812, lng: 19.403789},
        map: map,
    });
    var infoWindow = new google.maps.InfoWindow(
        {
            content: '<h5 class="black-text">Medpuls</h5><p class="black-text">ul. Łanowa 83, 91-110 Łódź</p><p>426527233 lub 426522819</p>'
        }
    );
    marker.addListener('click', function () {
        infoWindow.open(map, marker);
    });
}
