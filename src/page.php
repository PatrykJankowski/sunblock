<?php get_header(); ?>

<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1><?php the_title(); ?></h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="241" title="Formularz kontaktowy"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


