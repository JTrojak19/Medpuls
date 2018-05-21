<?php get_header();
if(! is_front_page()):
?>
<section class="section section-icons #80cbc4 teal lighten-3 center">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
				<?php if (have_posts()) :
					while (have_posts()) :
						the_post();?>
                        <div class="card-panel">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
							<?php
							the_content();?>

                        </div>
					<?php endwhile;?>
				<?php endif;?>
            </div>
        </div>
        <div class="row center">
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="waves-effect "><?php wpbeginner_numeric_posts_nav(); ?></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
</section>
<?php endif;?>
<?php get_footer();?>

