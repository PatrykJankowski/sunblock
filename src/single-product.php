<?php
/*
 * Template Name: Produkt
 * Template Post Type: post, product
 */
?>

<?php get_header(); ?>

<?php if (in_category('zaluzje')): ?>
    <style>
        #menu-katalog > li:first-of-type > ul {
            display: block;
        }
    </style>
<?php elseif (in_category('rolety')): ?>
    <style>
        #menu-katalog > li:nth-of-type(2) > ul {
            display: block;
        }
    </style>
<?php endif ?>

<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1><?php the_title(); ?></h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 catalog__menu">
                <h4>Nasze produkty</h4>
                <?php wp_nav_menu(array('theme_location' => 'catalog-menu', 'container' => false)); ?>
            </div>
            <div class="col-md-8">
                <div>
                    <h3><?php the_title(); ?></h3>
                    <div>
                        <?php the_content(); ?>
                        <?php
                        $featured_post = get_field('realizacja1');
                        echo $featured_post->post_title;
                        // echo wp_get_attachment_url(get_post_thumbnail_id($featured_post));
                        // echo get_the_post_thumbnail( $featured_post, 'thumbnail' );
                        ?>

                        <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" data-fslightbox="gallery"><?php echo get_the_post_thumbnail( $featured_post, 'full' ); ?></a>

                        <?php
                        $image = get_field('zdjecie_1');
                        if( !empty( $image ) ):
                        ?>
                        <a href="<?php echo esc_url($image['url']); ?>" data-fslightbox="gallery" class="see-gallery">
                            Zobacz galerię
                        </a>
                        <?php endif; ?>

                        <?php
                        $image2 = get_field('zdjecie_2');
                        if( !empty( $image2 ) ):
                        ?>
                            <a href="<?php echo esc_url($image2['url']); ?>" data-fslightbox="gallery"></a>
                        <?php endif; ?>

                        <?php the_field('realizacja2'); ?>
                        <?php the_field('realizacja3'); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pluses">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center">Zalety produktu</h3>
                <?php the_field('zalety'); ?>
            </div>
        </div>
    </div>
</section>

<?php
    $typ = get_field_object('typ');
    $mocowanie = get_field_object('mocowanie');
?>

<section class="technical-info">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center">Dane techniczne</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <h4><?php echo $typ['label']; ?></h4> <p><?php echo $typ['value']; ?></p>
                </div>

                <div class="wrapper">
                    <h4><?php echo $mocowanie['label']; ?></h4> <p><?php echo $mocowanie['value']; ?></p>
                </div>

                <div class="wrapper">
                    <h4><?php echo $typ['label']; ?></h4> <p><?php echo $typ['value']; ?></p>
                </div>

                <div class="wrapper">
                    <h4><?php echo $typ['label']; ?></h4> <p><?php echo $typ['value']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<script defer src="/wp-content/themes/sunblock/fslightbox.js"></script>

<?php get_footer(); ?>