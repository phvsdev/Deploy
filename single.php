<?php get_header(); ?>

<section class="section" id="blog">
    <div class="container">
        <div class="row">
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
                <div class="col-md-6">
                    <div class="title" data-aos="fade-in" data-aos-delay="100">
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                            }
                        ?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="col-md-12 post">
                    <div class="cats">
                        <div class="cts">
                            <?php 
                                $cats = wp_get_object_terms( $post->ID, 'category'); 
                                foreach($cats as $k => $v) :
                                    if($v->name !== 'Blog') :
                            ?>
                            <a href="<?php bloginfo('url');?>/?cat=<?php print_r($v->term_id); ?>"><?php print_r($v->name); ?></a>
                            <?php 
                                    endif;
                                endforeach;
                            ?>
                        </div>
                        <small class="calendar"><i class="ion-ios-calendar-outline"></i> <?php the_time('d'); ?>.<?php the_time('m'); ?>.<?php the_time('Y'); ?></small>
                    </div>
                    <figure>
                        <?php
                            if (has_post_thumbnail()) { 
                                the_post_thumbnail('inner'); 
                            }
                        ?>
                    </figure>
                    <div class="inner">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 d-flex">
                    <div class="navg">

                    <?php
                        $postlist_args = array(
                            'posts_per_page' => -1,
                            'orderby'        => 'menu_order title',
                            'order'          => 'ASC',
                            'post_type'      => 'post',
                            'category'       => 12
                        );

                        $postlist = get_posts($postlist_args);
                        $ids      = array();
                        
                        foreach ($postlist as $thepost) {
                            $ids[] = $thepost->ID;
                        }

                        $thisindex = array_search($post->ID, $ids);
                        $previd    = $ids[$thisindex-1];
                        $nextid    = $ids[$thisindex+1];

                        if ( !empty($previd) ) {
                            echo '<a class="btn_" rel="prev" href="' . get_permalink($previd). '"><i class="ion-android-arrow-back"></i> Anterior</a>';
                        }

                        if ( !empty($nextid) ) {
                            echo '<a class="btn_" rel="next" href="' . get_permalink($nextid). '">Próximo <i class="ion-android-arrow-forward"></i></a>';
                        }
                    ?>

                    </div>
                    <span class="shari"><strong>Compartilhe esta publicação:</strong> <?php echo do_shortcode('[addtoany]'); ?></span>
                </div>

            <?php 
                endwhile;
                endif; 
                wp_reset_query(); 
            ?>

        </div>

    </div>
</section>
 

<?php get_footer(); ?>