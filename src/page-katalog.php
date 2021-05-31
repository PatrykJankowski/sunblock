<?php /* Template Name: Katalog */ ?>

<?php get_header(); ?>

    <div class="subpage-top__wrapper">
        <section class="section section--pn">
            <h1><?php the_title(); ?></h1>
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

                <div class="col-md-12 col-lg-8">
                    <h3>Katalog produktów</h3>
                    <p>Zapoznaj się z naszymi produktami</p>

                    <div class="catalog__categories">

                        <a href="/produkty/zaluzje" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Żaluzje</h3>
                            <img src="/wp-content/themes/sunblock/img/zaluzje.webp" alt="" loading="lazy"">
                        </a>

                        <a href="/produkty/rolety" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Rolety</h3>
                            <img src="/wp-content/themes/sunblock/img/rolety.webp" alt="" loading="lazy"">
                        </a>

                        <a href="/produkty/moskitiery" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Moskitiery</h3>
                            <img src="/wp-content/themes/sunblock/img/moskitiery.webp" alt="" loading="lazy"">
                        </a>

                        <a href="/produkty/karnisze" class="catalog__img-wrapper">
                            <h3 class="catalog__desc">Karnisze</h3>
                            <img src="/wp-content/themes/sunblock/img/karnisze.webp" alt="" loading="lazy"">
                        </a>

                        <a href="/produkty/akcesoria" class="catalog__img-wrapper" style="width: 50%">
                            <h3 class="catalog__desc">Akcesoria</h3>
                            <img src="/wp-content/themes/sunblock/img/akcesoria.webp" alt="" loading="lazy"">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>