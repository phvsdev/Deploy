<?php get_header(); $fields = get_fields(); ?>

<section class="section" id="contato">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <div data-aos="fade-in" data-aos-delay="100">
                        <figure data-aos="fade-in"  class="bl rellax" data-rellax-speed="1">
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/bl.png" class="img-fluid"
                                alt="<?php the_title(); ?>">
                        </figure>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>