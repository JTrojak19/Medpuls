<?php
/*
Template Name: Doctors List Template
Template Post Type: page
*/

get_header();

?>
<section class="section section-icons #80cbc4 teal lighten-3 center">
<div class="container">
    <div class="row center">
        <h3 class="white-text">Specjaliści</h3>
    </div>
    <div class="row center">
        <h4 id="internisci" class="white-text">INTERNIŚCI:</h4>
    </div>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <p><?php echo get_field('internista');?>
            </div>
        </div>
        <div class="col s">
            <div class="card-panel">
                <p><?php echo get_field('internista2');?>
            </div>
        </div>
        <div class="col s">
            <div class="card-panel">
                <p><?php echo get_field('internista3');?>
            </div>
        </div>
    </div>
    <h4 id="alergolog" class="white-text">ALERGOLOG:</h4>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("alergolog");?>
            </div>
        </div>
    </div>
    <h4 id="pediatra" class="white-text">PEDIATRA:</h4>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("pediatra"); ?>
            </div>
        </div>
    </div>
    <h4 id="urolog" class="white-text">UROLOG:</h4>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("urolog");?>
            </div>
        </div>
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("urolog2");?>
            </div>
        </div>
    </div>
    <h4 id="rehabilitacja" class="white-text">LEKARZE REHABILITACJI:</h4>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("lekearz_rehabiliacji");?>
            </div>
        </div>
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("lekarz_rehabilitacji2");?>
            </div>
        </div>
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("lekarz_rehabilitacji3");?>
            </div>
        </div>
    </div>
    <h4 id= "endokrynolog" class="white-text">ENDOKRYNOLOG:</h4>
    <div class="row">
        <div class="col s">
            <div class="card-panel">
                <?php echo get_field("endokrynolog");?>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>