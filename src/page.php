<?php get_header(); ?>

<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1><?php the_title(); ?></h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        //
                        // Post Content here
                        //
                    } // end while
                } // end if
                ?>

                <article>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


