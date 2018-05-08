<section id="kontakt" class="section section-contact scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card-panel #26a69a teal lighten-1 white-text left">
                    <i class="fas fa-phone fa-2x"></i>
                    <h5>426527233 <br>lub <br>426522819</h5>
                    <p>Zadzwoń do nas, aby umówić wizytę! </p>
                    <i class="fas fa-clock fa-2x"></i>
                    <h5>Godziny otwarcia</h5>
                    <p>Poniedziałek-Piątek</p>
                    <p>8:00 - 18:00</p>
                </div>
            </div>
            <div class="col s12 m6">
                <div id="map" class="card-panel black white-text center">
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="section #26a69a teal lighten-1 white-text center">
    <p class="flow text">&copy <?php echo Date('Y');?> - <?php bloginfo('name'); ?> </p>
</footer>
<?php wp_footer(); ?>
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


</body>
</html>