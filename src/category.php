<?php /* Category Template */ ?>

<?php get_header(); ?>

<?php global $wp; ?>

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

            <div class="subpage-top"></div>
        </section>
    </div>

    <section class="catalog">
        <div class="container">

            <div class="row">
                <div class="col-md-4 catalog__menu">
                    <h4>Nasze produkty</h4>
                    <?php wp_nav_menu(array('theme_location' => 'catalog-menu', 'container' => false)); ?>
                </div>

                <?php if (is_category('katalog')): ?>
                <div class="col-md-12 col-lg-8">
                    <h3>Katalog produktów</h3>
                    <p>Zapoznaj się z naszymi produktami</p>

                    <div class="catalog__categories">

                        <a href="/zaluzje" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Żaluzje</h3>
                            <img src="/wp-content/themes/sunblock/img/zaluzje.webp" alt="" loading="lazy"">
                        </a>

                        <a href="https://sunblock.usermd.net/?post_type=post&amp;p=141" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Rolety</h3>
                            <img src="/wp-content/themes/sunblock/img/rolety.webp" alt="" loading="lazy"">
                        </a>

                        <a href="https://sunblock.usermd.net/?post_type=post&amp;p=138" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Moskitiery</h3>
                            <img src="/wp-content/themes/sunblock/img/moskitiery.webp" alt="" loading="lazy"">
                        </a>

                        <a href="https://sunblock.usermd.net/?post_type=post&amp;p=136" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Karnisze</h3>
                            <img src="/wp-content/themes/sunblock/img/karnisze.webp" alt="" loading="lazy"">
                        </a>

                        <a href="https://sunblock.usermd.net/?post_type=post&amp;p=134" class="catalog__img-wrapper" style="width: 50%">
                            <h3 class="catalog__desc">Akcesoria</h3>
                            <img src="/wp-content/themes/sunblock/img/akcesoria.webp" alt="" loading="lazy"">
                        </a>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-md-8">
                        <h3>Katalog produktów</h3>
                        <p>Zapoznaj się z naszymi produktami</p>

                        <div class="catalog__categories">

                            <?php

                            if ( have_posts() ) :

                                while ( have_posts() ) :

                                    the_post();
                                    ?>

                                    <a href="<?php echo get_post_permalink() ?>" class="catalog__img-wrapper">
                                        <h3 class="catalog__desc"><?php the_title() ?></h3>
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
                <?php endif; ?>


            </div>
        </div>
    </section>

<?php get_footer(); ?>