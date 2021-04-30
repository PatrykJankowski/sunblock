<?php /* Template Name: Katalog */ ?>

<?php get_header(); ?>

    <div class="subpage-top__wrapper">
        <section class="subpage-top"></section>
    </div>

    <section class="catalog">
        <div class="container">

            <div class="row">
                <div class="col-md-4 catalog__menu">
                    <h4>Nasze produkty</h4>
                    <?php wp_nav_menu(array('theme_location' => 'catalog-menu', 'container' => false)); ?>
                </div>

                <div class="col-md-8">
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

            </div>
        </div>
    </section>

<?php get_footer(); ?>