<footer class="page-footer #26a69a teal lighten-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Kontakt</h5>
                <p><i class="fas fa-phone fa-1x"></i> 426527233 lub 426522819</p>
                <p>Zadzwoń do nas, aby umówić wizytę! </p>
                <h5>Godziny otwarcia</h5>
                <p><i class="fas fa-clock fa-1x"></i> Poniedziałek-Piątek</p>
                <p>8:00 - 18:00</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy Medpuls 2018
        </div>
    </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    //sidenav
    const sideNav = document.querySelector(".sidenav");
    M.Sidenav.init(sideNav, {});
    //slider
    const slider = document.querySelector(".slider");
    M.Slider.init(slider, {
        indicators: false,
        height: 510,
        transition: 500,
        interval: 9000
    });

    const ss = document.querySelectorAll(".scrollspy");
    M.ScrollSpy.init(ss, {});
</script>
<script>
    function initMap(){
        var options = {
            zoom: 18,
            center: {lat: 51.793600, lng: 19.401632}
        }
        var map = new google.maps.Map(document.getElementById('map'), options);

        var marker = new google.maps.Marker({
            position: {lat: 51.793600, lng: 19.401632},
            map: map,
        });
        var infoWindow = new google.maps.InfoWindow(
            {
                content: '<h5 class="black-text">Medpuls</h5><p class="black-text">ul. Łanowa 83, 91-110 Łódź</p>'
            }
        );
        marker.addListener('click', function () {
           infoWindow.open(map, marker);
        });
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXIVRObK-Twu-ij5WtdZ9onYObRVmxl8k&callback=initMap">
</script>
<?php wp_footer(); ?>
</body>
</html>
