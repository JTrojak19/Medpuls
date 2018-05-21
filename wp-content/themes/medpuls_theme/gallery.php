<?php
/*
Template Name: Gallery Template
Template Post Type: page
*/
get_header(); ?>
<section class="section section-icons #80cbc4 teal lighten-3 center">
    <div class="container">
        <div class="row">
            <div class="col s12 m10">
                <?php photo_gallery(1); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
