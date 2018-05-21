<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<!--Let browser know website is optimized for mobile-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet"
	      href="https://fonts.googleapis.com/css?family=Tangerine">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description'): wp_title(); ?>
	</title>
	<style>
		#map{
			height: 400px;
			width: 100%;
		}
	</style>
	<?php wp_head();?>
</head>
<body id="home">
<!-- Navbar !-->
	<nav class="#b2dfdb teal lighten-4">
		<div class="container">
			<div class="nav-wrapper">
                <a href="#" class="brand-logo"><span class="bold"><?php bloginfo('name');?></span></a>
				<a href="#" data-target="mobile-nav" class="sidenav-trigger">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'my-custom-menu',
						'container_class' => 'custom-menu-class' ) );
					?>
				</ul>
			</div>
		</div>
	</nav>
<ul class="sidenav" id="mobile-nav">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'my-custom-menu',
		'container_class' => 'custom-menu-class' ) );
	?>
</ul>
<section class="slider">
    <ul class="slides">
        <li>
            <img class="responsive-img" src="<?php bloginfo('template_url'); ?>/image1-enhanced.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h2 class="white-text">MEDPULS</h2>
                <h3 class="light white-text text-lighten-3">Niepubliczny Zakład Opieki Zdrowotnej "Medpuls"</h3>
            </div>
        </li>
        <li>
            <img class="responsive-img" src="<?php bloginfo('template_url'); ?>/image9-enhanced.jpg">
            <div class="caption center-align">
                <h3 class="black text"></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
        </li>
        <li>
            <img class="responsive-img" src="<?php bloginfo('template_url'); ?>/image8-enhanced.jpg">
            <div class="caption center-align">
                <h3 class="black text"></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
        </li>
    </ul>
</section>
<!--Icon boxes !-->
<section id="usługi" class="section section-icons #80cbc4 teal lighten-3 center">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel #e0f2f1 teal lighten-5">
                    <i class="fas fa-info fa-3x"></i>
                    <h4>Podstawowe informacje</h4>
                    <p>
                        NZOZ Medpuls istnieje od 2002 roku i znajduje się przy ulicy <span class="bold">Łanowej 83 w Łodzi</span>.</br>
                        Wizyty można umówić pod telefonem <span class="bold">426527233 lub 426522819</span>. </br>Przychodnia jest otwarta
                        od godziny <span class="bold">8</span> do godziny <span class="bold">18</span>.
                    </p>
                </div>
            </div>
            <div class="col s12">
                <div class="card-panel #e0f2f1 teal lighten-5">
                    <i class="fas fa-user-md fa-3x"></i>
                    <h4>Lekarze przyjmujący</h4>
                    <p>W przychodni przyjmują lekarze posiadający następujące specjalizacje:</p>
                    <ul class="collection">
                        <a href="specjalisci#internisci"><li class="collection-item">internista</li></a>
                        <a href="specjalisci#alergolog"><li class="collection-item">alergolog</li></a>
                        <a href="specjalisci#pediatra"><li class="collection-item">pediatra</li></a>
                        <a href="specjalisci#urolog"><li class="collection-item">urolog</li></a>
                        <a href="specjalisci#rehabilitacja"><li class="collection-item">lekarz rehabilitacji</li></a>
                        <a href="specjalisci#endykrynolog"><li class="collection-item">endykrynolog</li></a>
                    </ul>
                    <p>Oferujemy także rehabilitację komercyjną oraz posiadamy własny gabinet zabiegowy. </p>
                </div>
            </div>
            <div class="col s12">
                <div class="card-panel #e0f2f1 teal lighten-5">
                    <i class="material-icons large black-text">g translate</i>
                    <h4>Dodatkowe informacje</h4>
                    <ul class="collection">
                        <li class="collection-item"><i class="fas fa-home"></i> wizyty domowe przyjmowane telefonicznie lub za
                            pośrednictwem osób trzecich do godz. 10:00</li>
                        <li class="collection-item">
                            <i class="fas fa-diagnoses"></i> do lekarza rodzinnego, internisty czy pediatry pacjent może zarejestrować się osobiście,
                            telefonicznie lub za pośrednictwem osób trzecich
                        </li>
                        <li class="collection-item">
                            <i class="fas fa-id-card-alt"></i> pacjent zgłaszający się do lekarza musi posiadać przy sobie aktualny dokument ubezpieczeniowy
                        </li>
                        <li class="collection-item">
                            <i class="fas fa-exclamation"></i> skierowanie - pacjent zobowiązany jest dostarczyć do placówki medycznej oryginał skierowania w
                            postaci papierowej nie później niż w terminie 14 dni roboczych od dnia dokonania wpisu na listę
                            oczekujących, pod rygorem skreślenia z listy oczekujących
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section - contact !-->
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
                <h5>Adres</h5>
                <p><i class="fas fa-map-marker"></i> ul. Łanowa 83, 91-110 Łódź</p>
            </div>
            <div class="col s12">
                <div id="map">

                </div>
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
