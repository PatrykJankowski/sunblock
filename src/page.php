<?php get_header(); ?>

<section class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>


