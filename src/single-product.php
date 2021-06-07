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

                        <div class="wrapper">
                            <?php if(!empty($photosNumber > 1)): ?>

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

<?php
    $acf_group_id = 'group_60b65452cca03';
    $acf_fields = acf_get_fields($acf_group_id);
?>

<?php if(get_field($acf_fields[0]["name"])) { ?>
    <section class="pluses">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="header header--center header--mb-m accordion active">Zalety produktu</h3>

                    <div class="panel" style="max-height: 2000px;">

                    <?php
                    $count = 0;

                    foreach($acf_fields as $acf_field) {
                        $field_name = $acf_fields[$count]["name"];

                        //create a dynanic variable and grab the value of the field
                        $field_value = get_field($field_name);

                        if ($field_value) { ?>
                            <div class="pluses__plus">
                                <svg width="47" height="30" viewBox="0 0 47 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M18.6115 30L0 11.3885L1.8333 9.56165L18.6115 26.3334L44.9449 0L46.7782 1.8333L18.6115 30Z" fill="#231F20"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="46.7782" height="30" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo $field_value; ?>
                            </div>
                        <?php }

                        $count = $count + 1;
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<?php $podkategoria = get_field_object('podkategoria'); ?>

<?php if ($podkategoria['value']) { ?>
<section class="technical-info">
    <div class="container">
        <h3 class="header header--center header--mb-m accordion accordion--reverted active">Dane techniczne</h3>

        <?php
        $acf_group_id = 'group_608ac1ca8bbde';
        $acf_fields = acf_get_fields($acf_group_id);
        $count = 0;
        ?>

        <div class="panel" style="max-height: 2000px;">
            <div class="row">
                <div class="col">
                    <?php
                    foreach($acf_fields as $acf_field) {
                        $field_name = $acf_fields[$count]["name"];

                        //create a dymanic variable and grab the value of the field
                        $field_value = get_field($field_name);

                        if ($field_value) { ?>
                            <div class="wrapper">
                                <h4><?php echo $acf_fields[$count]["label"]; ?></h4> <p><?php echo $field_value; ?></p>
                            </div>
                        <?php }

                        $count = $count + 1;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php if(get_field('plik_1')) { ?>
<section class="pluses">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m accordion active">Pliki do pobrania</h3>
                <div class="panel" style="max-height: 2000px;">
                <?php
                $acf_group_id = 'group_60b67f3b30fbd';
                $acf_fields = acf_get_fields($acf_group_id);
                $count = 0;

                foreach($acf_fields as $acf_field) {
                    $field_name = $acf_fields[$count]["name"];

                    //create a dynanic variable and grab the value of the field
                    $field_value = get_field($field_name);

                    if ($field_value) { ?>
                        <div class="pluses__plus">
                            <svg width="40" height="64" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M26.37 17.4662L17.0681 26.7633L7.88477 17.5847L9.22579 16.2436L16.1773 23.1951V-0.000244141H18.0727V23.0814L25.029 16.1252L26.37 17.4662Z" fill="#1A2938"/> <path d="M34.2553 24.7969V29.9998H0V24.7969H1.89544V28.1044H32.3598V24.7969H34.2553Z" fill="#1A2938"/> </svg>
                            <div>
                                <a href="<?php echo $field_value['url']; ?>" target="_blank">
                                    <?php echo $field_value['title']; ?>
                                </a>
                                <p><?php echo $field_value['description']; ?></p>
                            </div>
                        </div>
                    <?php }

                    $count = $count + 1;
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php
  $opis_po_lewej = get_field('opis_po_lewej');
  $zdjecie_po_prawej = get_field('zdjecie_po_prawej');
  $opis_po_prawej = get_field('opis_po_prawej');
  $zdjecie_po_lewej = get_field('zdjecie_po_lewej');
  $opis = get_field('opis');
?>

<?php if($opis_po_lewej or $opis_po_prawej or $opis): ?>
<section class="section description">
    <div class="container">
        <h3 class="header header--center header--mb-m accordion active">Opis</h3>

        <div class="panel" style="max-height: 2000px;">
            <?php if($opis_po_lewej): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="description__content">
                        <?php echo get_field('opis_po_lewej'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="description__photo" src="<?php echo get_field('zdjecie_po_prawej')['url']?>">
                </div>
            </div>
            <?php endif; ?>

            <?php if($opis_po_prawej): ?>
            <div class="row">
                <div class="col-md-6">
                    <img class="description__photo" src="<?php echo get_field('zdjecie_po_lewej')['url']?>">
                </div>
                <div class="col-md-6">
                    <div class="description__content">
                        <?php echo get_field('opis_po_prawej'); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($opis): ?>
            <div class="row">
                <div class="col">
                    <div class="description__one-line">
                        <?php echo $opis ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif ?>

<?php
    $realizacja1 = get_field('realizacja_1');
    $realizacja2 = get_field('realizacja_2');
?>

<?php if ($realizacja1) { ?>
<section class="projects">
    <h3 class="header header--center header--mb-m header--mt-l accordion active">Galeria realizacji</h3>
    <div class="panel" style="max-height: 2000px;">
        <a href="<?php echo $realizacja1['url']; ?>" data-fslightbox="projects">
            <img src="<?php echo $realizacja1['url']; ?>" class="projects__main-image">
        </a>

        <?php if ($realizacja2) { ?>
        <div class="thumbs">
            <?php
            $acf_group_id = 'group_60869c6bf044f';
            $acf_fields = acf_get_fields($acf_group_id);
            $count = 1;

            foreach($acf_fields as $acf_field) {
                $field_name = $acf_fields[$count]["name"];
                $field_value = get_field($field_name);

                if ($field_value) { ?>
                    <a href="<?php echo $field_value['url']; ?>" data-fslightbox="projects">
                        <img src="<?php echo $field_value['url']; ?>" class="thumb">
                    </a>
                <?php }

                $count = $count + 1;
            }
            ?>
        </div>
    <?php } ?>
    </div>
</section>
<?php } ?>

<section id="form" class="section contact-page form-desktop">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m">Zapytaj o szczegóły</h3>
                <?php echo do_shortcode('[contact-form-7 id="289" title="Zapytaj o produkt"]'); ?>
            </div>
        </div>
    </div>
</section>

<section id="form" class="section contact-page form-mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="header header--center header--mb-m">Zapytaj o szczegóły</h3>
                <?php echo do_shortcode('[contact-form-7 id="241" title="Zapytaj o produkt"]'); ?>
            </div>
        </div>
    </div>
</section>

<script>
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<script defer src="/wp-content/themes/sunblock/fslightbox.js"></script>

<?php get_footer(); ?>