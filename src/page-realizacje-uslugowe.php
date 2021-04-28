<?php /* Template Name: Realizacje usługowe */ ?>

<?php get_header(); ?>

    <div class="subpage-top__wrapper">
        <section class="subpage-top"></section>
    </div>

    <section class="realizacje">
        <div class="container">

            <div class="row realizacje__menu-wrapper">
                <div class="col-md-6"><a href="/realziacje/prywatne" class="realizacje__menu">Pomieszczenia prywatne</a></div>
                <div class="col-md-6"><a href="/realziacje/uslugowe" class="realizacje__menu realizacje__menu--active">Pomieszczenia usługowe</a></div>
            </div>

            <div class="realizacje__photos">

                <?php
                $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'uslugowe',
                    'posts_per_page' => 32,
                    'paged' => $paged,
                );
                $arr_posts = new WP_Query( $args );

                if ( $arr_posts->have_posts() ) :

                    $count = 1;
                    while ( $arr_posts->have_posts() ) :

                        if($count == 1 or !($count % 5)) { ?>

                        <div class="row">

                        <?php }

                        $arr_posts->the_post();
                        ?>

                        <div class="col-md-3">
                            <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" data-fslightbox="gallery">
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                                ?>
                            </a>
                        </div>

                        <?php if(!($count % 4) or $arr_posts->post_count == $count) { ?>
                            </div>
                        <?php }

                        $count++;

                    endwhile;

                endif;
                ?>

            </div>
        </div>
    </section>

    <script defer src="/wp-content/themes/sunblock/fslightbox.js"></script>

<?php get_footer(); ?>