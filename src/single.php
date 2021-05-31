<?php get_header(); ?>

<?php $id = get_the_ID(); ?>

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
                    <time class="time"><?php echo get_the_date(); ?></time>
                    <h3 class="header header--mb-xs"><?php the_title(); ?></h3>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php
// the query
$the_query = new WP_Query( array(
    'category_name' => 'aktualnosci',
    'posts_per_page' => 2,
    'post__not_in' => array($id),
));
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header--mb-m">Zobacz inne aktualności:</h3>
            </div>
        </div>

        <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-6">
                        <div class="articles">
                            <article class="articles__article">
                                <div class="articles__desc">
                                    <h3 class="articles__header"><?php the_title() ?></h3>
                                    <?php the_excerpt(); ?>
                                    <a class="articles__more" href="<?php the_permalink(); ?>">Czytaj więcej...</a>
                                </div>

                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </article>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>


