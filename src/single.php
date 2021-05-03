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
                <article class="article-details">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    ?>
                    <time><?php echo get_the_date(); ?></time>
                    <h3><?php the_title(); ?></h3>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>


