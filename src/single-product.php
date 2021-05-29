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
        #menu-katalog > li:first-of-type > a:after {
            background: none;        }
    </style>
<?php elseif (in_category('rolety')): ?>
    <style>
        #menu-katalog > li:nth-of-type(2) > ul {
            display: block;
        }
        #menu-katalog > li:nth-of-type(2) > a:after {
            background: none;
        }
    </style>
<?php elseif (in_category('moskitiery')): ?>
    <style>
        #menu-katalog > li:nth-of-type(3) > ul {
            display: block;
        }
        #menu-katalog > li:nth-of-type(3) > a:after {
            background: none;
        }
    </style>
<?php elseif (in_category('karnisze')): ?>
    <style>
        #menu-katalog > li:nth-of-type(4) > ul {
            display: block;
        }
        #menu-katalog > li:nth-of-type(4) > a:after {
            background: none;
        }
    </style>
<?php elseif (in_category('akcesoria')): ?>
    <style>
        #menu-katalog > li:nth-of-type(5) > ul {
            display: block;
        }
        #menu-katalog > li:nth-of-type(5) > a:after {
            background: none;
        }
    </style>
<?php endif ?>

<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1><?php the_title(); ?></h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section section--pt-l">
    <div class="container">
        <div class="row">
            <div class="col-md-4 catalog__menu">
                <h4>Nasze produkty</h4>
                <?php wp_nav_menu(array('theme_location' => 'catalog-menu', 'container' => false)); ?>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="product">
                    <h3><?php the_title(); ?></h3>
                    <div>
                        <?php the_content(); ?>
                        <?php
                        $featured_post = get_field('realizacja1');
                        echo $featured_post->post_title;
                        // echo wp_get_attachment_url(get_post_thumbnail_id($featured_post));
                        // echo get_the_post_thumbnail( $featured_post, 'thumbnail' );
                        ?>

                        <?php if(get_post_thumbnail_id(get_the_ID())) { ?>
                        <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" data-fslightbox="gallery" class="thumbnail-wrapper">
                            <?php echo get_the_post_thumbnail( $featured_post, 'full' ); ?>
                        </a>
                        <?php } else { ?>
                        <a class="thumbnail-wrapper">
                            <img src="/wp-content/themes/sunblock/img/brak-obrazka.webp">
                        </a>
                        <?php } ?>

                        <?php
                        $photosNumber = 1;

                        $image = get_field('zdjecie_1');
                        if(!empty($image)):
                            $photosNumber++;
                        ?>
                        <?php endif; ?>

                        <?php
                        $image2 = get_field('zdjecie_2');
                        if(!empty($image2)):
                            $photosNumber++;
                        ?>
                            <a href="<?php echo esc_url($image2['url']); ?>" data-fslightbox="gallery" class="gallery-photo"></a>
                        <?php endif; ?>


                        <?php the_field('realizacja2'); ?>
                        <?php the_field('realizacja3'); ?>

                        <?php
                        if(!empty($photosNumber > 1)):
                        ?>

                        <div class="wrapper">
                            <a href="<?php echo esc_url($image['url']); ?>" data-fslightbox="gallery" class="see-gallery">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.5" y="1.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                    <rect x="1.5" y="1.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                    <rect x="1.5" y="1.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                    <rect x="4.5" y="4.5" width="16" height="16" fill="white"/>
                                    <rect x="4.5" y="4.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                    <rect x="4.5" y="4.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                    <rect x="4.5" y="4.5" width="16" height="16" stroke="#1A2938" stroke-width="3"/>
                                </svg>
                                Zobacz galerię (<?php echo $photosNumber; ?>)
                            </a>

                            <?php endif; ?>

                            <a href="#form" class="button button--dark">Zapytaj o szczegóły</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(get_field('zalety')) { ?>
    <section class="pluses">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="header header--center header--mb-m">Zalety produktu</h3>
                    <?php the_field('zalety'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php
    $typ = get_field_object('typ');
    $mocowanie = get_field_object('mocowanie');
    $wysokosc = get_field_object('wysokosc');
    $szerokosc = get_field_object('szerokosc');
?>

<?php if ($typ['value'] or $mocowanie['value'] or $wysokosc['value'] or $szerokosc['value']) { ?>
<section class="technical-info">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m">Dane techniczne</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php if ($typ['value']) { ?>
                <div class="wrapper">
                    <h4><?php echo $typ['label']; ?></h4> <p><?php echo $typ['value']; ?></p>
                </div>
                <?php } ?>
                <?php if ($mocowanie['value']) { ?>
                <div class="wrapper">
                    <h4><?php echo $mocowanie['label']; ?></h4> <p><?php echo $mocowanie['value']; ?></p>
                </div>
                <?php } ?>
                <?php if ($wysokosc['value']) { ?>
                <div class="wrapper">
                    <h4><?php echo $wysokosc['label']; ?></h4> <p><?php echo $wysokosc['value']; ?></p>
                </div>
                <?php } ?>
                <?php if ($szerokosc['value']) { ?>
                <div class="wrapper">
                    <h4><?php echo $szerokosc['label']; ?></h4> <p><?php echo $szerokosc['value']; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php if(get_field('files')) { ?>
<section class="pluses">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m">Pliki do pobrania</h3>
                <?php the_field('files'); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php
    $realizacja1 = get_field('realizacja_1');
    $realizacja2 = get_field('realizacja_2');
    $realizacja3 = get_field('realizacja_3');

    $realizacje[1][1] = get_field('dodatkowe_zdjecie_1', $realizacja1->ID)['url'];
    $realizacje[1][2] = get_field('dodatkowe_zdjecie_2', $realizacja1->ID)['url'];
    $realizacje[1][3] = get_field('dodatkowe_zdjecie_3', $realizacja1->ID)['url'];
    $realizacje[2][1] = get_field('dodatkowe_zdjecie_1', $realizacja2->ID)['url'];
    $realizacje[2][2] = get_field('dodatkowe_zdjecie_2', $realizacja2->ID)['url'];
    $realizacje[2][3] = get_field('dodatkowe_zdjecie_3', $realizacja2->ID)['url'];
    $realizacje[3][1] = get_field('dodatkowe_zdjecie_1', $realizacja2->ID)['url'];
    $realizacje[3][2] = get_field('dodatkowe_zdjecie_2', $realizacja2->ID)['url'];
    $realizacje[3][3] = get_field('dodatkowe_zdjecie_3', $realizacja2->ID)['url'];
?>

<?php if ($realizacja1) { ?>
<section class="projects">
    <h3 class="header header--center header--mb-m header--mt-l">Galeria realizacji</h3>
    <?php echo get_the_post_thumbnail($realizacja1); ?>

    <div class="thumbs">

        <?php for ($i=1; $i<=count($realizacje); $i++) { ?>
            <?php for ($j=1; $j<=count($realizacje[$i]); $j++) { ?>
                <?php if ($realizacje[$i][$j]) { ?>
                    <a href="<?php echo esc_url($realizacje[$i][$j]); ?>" data-fslightbox="projects">
                        <img src="<?php echo esc_html($realizacje[$i][$j]) ?>" class="thumb">
                    </a>
                <?php } ?>
            <?php } ?>
        <?php } ?>

    </div>
</section>
<?php } ?>

<section id="form" class="section contact-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m">Zapytaj o szczegóły</h3>
                <?php echo do_shortcode('[contact-form-7 id="289" title="Zapytaj o produkt"]'); ?>
            </div>
        </div>
    </div>
</section>


<script defer src="/wp-content/themes/sunblock/fslightbox.js"></script>

<?php get_footer(); ?>