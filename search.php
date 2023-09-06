<?php get_header(); ?>

<?php //include'filtro.php'; ?>

<section class="section" id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title" data-aos="fade-in" data-aos-delay="100">
                    <div class="tEsq">
                        <h1>Notícias</h1>
                        <p>Veja nossas últimas publicações e <br>conheça mais sobre a Torres Miranda Arquitetura.</p>
                    </div>
                    <div class="bl rellax" data-rellax-speed="-3"><img
                            src="<?php bloginfo('template_directory'); ?>/app/images/bl1.svg"
                            alt="<?php the_title(); ?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $i++;
                ?>

                <div class="box" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    data-aos-delay="<?php echo $i;?>00">
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                            <?php
                                        if (has_post_thumbnail()) { 
                                            the_post_thumbnail('featuredImageCropped'); 
                                        }
                                    ?>
                        </figure>
                    </a>
                    <div class="txt">
                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                        <div class="cats">
                            <div class="cts">
                                <?php 
                                            $cats = wp_get_object_terms( $post->ID, 'category'); 
                                            foreach($cats as $k => $v) :
                                                if($v->name !== 'Blog') :
                                        ?>
                                <a
                                    href="<?php bloginfo('url');?>/?cat=<?php print_r($v->term_id); ?>"><?php print_r($v->name); ?></a>
                                <?php 
                                                endif;
                                            endforeach;
                                        ?>
                            </div>
                            <small
                                class="calendar"><?php the_time('d'); ?>.<?php the_time('m'); ?>.<?php the_time('Y'); ?></small>
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                        <!-- <span class="btn">Veja mais <i class="ion-android-arrow-forward"></i></span> -->
                    </div>
                </div>

                <?php 
                    endwhile;
                    endif; 
                    wp_reset_query(); 
                ?>
            </div>
            <div class="col-md-4">
                <?php include'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>