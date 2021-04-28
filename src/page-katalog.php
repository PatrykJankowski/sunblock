<?php /* Template Name: Katalog */ ?>

<?php get_header(); ?>

    <div class="subpage-top__wrapper">
        <section class="subpage-top"></section>
    </div>

    <section class="catalog">
        <div class="container">

            <div class="row">
                <div class="col-md-3 catalog__menu">
                    <h4>Nasze produkty</h4>
                    <?php wp_nav_menu(array('theme_location' => 'catalog-menu', 'container' => false)); ?>
                </div>

                <div class="col-md-9">
                    <h3>Katalog produktów</h3>
                    <p>Zapoznaj się z naszymi produktami</p>

                    <?php
                    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'realizacje',
                        'posts_per_page' => 32,
                        'paged' => $paged,
                    );
                    $arr_posts = new WP_Query( $args );

                    if ( $arr_posts->have_posts() ) :


                        while ( $arr_posts->have_posts() ) :

                            $arr_posts->the_post();
                    ?>

                    <a class="catalog__img-wrapper">
                        <h4 class="catalog__desc">Żaluzje</h4>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                    </a>

                   <?php

                        endwhile;

                    endif;
                    ?>
                </div>
            </div>


        </div>
    </section>

<?php get_footer(); ?>