<?php get_header(); ?>

<section class="section" id="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="title" data-aos="fade-in" data-aos-delay="100">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                    <h2>Blog</h2>
                </div>
            </div>
            <div class="col-md-12">
                <nav id="filtro" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                    <ul id="filters">
                        <li><a href="<?php bloginfo('url'); ?>/?cat=2">Todos os Posts</a></li>
                        <?php
                            $categories = get_categories( array(
                                'orderby' => 'name',
                                'order'   => 'ASC',
                                'parent'  => 12,
                                'hide_empty' => false,
                            ) );
                            foreach( $categories as $category ) :
                        ?>
                        <li>
                            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <?php 
                $i = 1;
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $i++;
            ?>

            <div class="col-md-4">
                <div class="box" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    data-aos-delay="<?php echo $i;?>00">
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                            <?php
                                if (has_post_thumbnail()) { 
                                    the_post_thumbnail('thumbnail'); 
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
                            <!-- <small class="calendar"><?php the_time('d'); ?>.<?php the_time('m'); ?>.<?php the_time('Y'); ?></small> -->
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                    </div>
                    <a href="<?php the_permalink() ?>" class="btn_">
                        <i class="ion-android-arrow-forward"></i> <span>leia mais</span>
                    </a>
                </div>
            </div>    

            <?php 
                endwhile;
                else :
            ?>
            <div class="col-md-12">
                <p>Sem registros!</p>
            </div>
            <?php
                endif; 
                wp_reset_query(); 
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>