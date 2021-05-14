<?php get_header(); ?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'aktualnosci',
        'posts_per_page' => 7,
        'paged' => $paged,
    );
    $posts = new WP_Query($args);
?>


<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1>Blog</h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section">
    <div class="container">

    <?php
        $counter = 1;

        while ( $posts->have_posts() ) {
            $posts->the_post();

            if($counter == 1) { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="articles">
                    <article class="articles__article articles__article--main">
                        <div class="articles__desc" style="flex-direction: column; width: 50%; left: 50%">
                            <data value="<?php echo get_the_date('d.m.Y'); ?>" class="articles__date"><?php echo get_the_date('d.m.Y'); ?></data>
                            <h3><?php the_title() ?></h3>
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
        </div>
            <?php }

            elseif(!($counter % 2)) { ?>
        <div class="row">
             <?php } ?>

            <?php if($counter > 1) { ?>
            <div class="col-md-6">
                <div class="articles">
                    <article class="articles__article">
                        <div class="articles__desc" style="flex-direction: column; width: 50%; left: 50%">
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
            <?php } ?>

        <?php if(($counter > 1 and !(($counter+1) % 2)) or $posts->post_count == $counter) { ?>
        </div>
        <?php }

            $counter++;
        }

        ?>

    </div>
</section>

<?php get_footer(); ?>


