<?php get_header(); ?>

<section class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div>
                        <time><?php echo get_the_date(); ?></time>
                        <h3><?php the_title(); ?></h3>
                        <div>
                            <?php the_content(); ?>--
                            <?php
                            $featured_post = get_field('realizacja1');
                            echo $featured_post->post_title;
                            // echo wp_get_attachment_url(get_post_thumbnail_id($featured_post));
                            echo get_the_post_thumbnail( $featured_post, 'thumbnail' );
                            ?>--
                            <?php the_field('realizacja2'); ?>--
                            <?php the_field('realizacja3'); ?>--
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>


