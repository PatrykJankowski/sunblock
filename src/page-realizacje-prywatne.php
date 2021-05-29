<?php /* Template Name: Realizacje */ ?>

<?php get_header(); ?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'prywatne',
        'posts_per_page' => 32,
        'paged' => $paged,
    );
    $posts = new WP_Query($args);
?>


    <div class="subpage-top__wrapper">
        <section class="section section--pn">
            <h1><?php the_title(); ?></h1>
            <div class="subpage-top"></div>
        </section>
    </div>

    <section class="realizacje">
        <div class="container">

            <div class="row realizacje__menu-wrapper">
                <div class="col-md-4"><a href="/realizacje" class="realizacje__menu button button--dark">Wszystkie</a></div>
                <div class="col-md-4"><a href="#" class="realizacje__menu button button--filled-dark">Pomieszczenia prywatne</a></div>
                <div class="col-md-4"><a href="/realizacje/uslugowe" class="realizacje__menu button button--dark">Pomieszczenia usługowe</a></div>
            </div>

            <div class="realizacje__photos">

                <?php

                $counter = 1;

                while ($posts->have_posts()):
                    $postName = get_post_field('post_name');

                    if($counter == 1 or !($counter % 5)) { ?>
                        <div class="row">
                    <?php }

                    $posts->the_post(); ?>

                    <div class="col-md-3">
                        <a onclick="openModal('<?php echo $postName ?>'); currentSlide(<?php echo $counter; ?>)" class="realizacje__photo-container">
                            <h4><?php echo the_title() ?></h4>
                            <?php
                            if (has_post_thumbnail()): the_post_thumbnail();
                            endif;
                            ?>
                        </a>
                    </div>

                    <?php if(!($counter % 4) or $posts->post_count == $counter) { ?>
                    </div>
                <?php } ?>


                    <!-- The modals -->
                    <div id="<?php echo $postName; ?>" class="modal">
                        <div class="modal-content">
                            <?php $photosNumber = 1 ?>

                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">

                            <?php if(get_field('dodatkowe_zdjecie_1')['url']) { $photosNumber++ ?>
                                <img src="<?php echo get_field('dodatkowe_zdjecie_1')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                            <?php } ?>
                            <?php if(get_field('dodatkowe_zdjecie_2')['url']) { $photosNumber++ ?>
                                <img src="<?php echo get_field('dodatkowe_zdjecie_2')['url'] ?>" class="featured-image images<?php echo $postName ?>" loading="lazy">
                            <?php } ?>
                            <?php if(get_field('dodatkowe_zdjecie_3')['url']) { $photosNumber++ ?>
                                <img src="<?php echo get_field('dodatkowe_zdjecie_3')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                            <?php } ?>
                            <?php if(get_field('dodatkowe_zdjecie_4')['url']) { $photosNumber++ ?>
                                <img src="<?php echo get_field('dodatkowe_zdjecie_4')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                            <?php } ?>
                            <?php if(get_field('dodatkowe_zdjecie_5')['url']) { $photosNumber++ ?>
                                <img src="<?php echo get_field('dodatkowe_zdjecie_5')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                            <?php } ?>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3><?php the_title(); ?></h3>
                                        <div><?php the_content(); ?></div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if(get_field('produkt_1')) { ?>

                                            <h4>Produkty wykorzystane przy realizacji:</h4>

                                            <?php if(get_field('produkt_1')) { ?>
                                                <a href="<?php echo get_post_permalink(get_field('produkt_1')->ID); ?>" target="_blank">
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_field('produkt_1'))); ?>" class="product">
                                                </a>
                                            <?php } ?>
                                            <?php if(get_field('produkt_2')) { ?>
                                                <a href="<?php echo get_post_permalink(get_field('produkt_2')->ID); ?>" target="_blank">
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_field('produkt_2'))); ?>" class="product">
                                                </a>
                                            <?php } ?>
                                            <?php if(get_field('produkt_3')) { ?>
                                                <a href="<?php echo get_post_permalink(get_field('produkt_3')->ID); ?>" target="_blank">
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_field('produkt_3'))); ?>" class="product">
                                                </a>
                                            <?php } ?>
                                            <?php if(get_field('produkt_4')) { ?>
                                                <a href="<?php echo get_post_permalink(get_field('produkt_4')->ID); ?>" target="_blank">
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_field('produkt_4'))); ?>" class="product">
                                                </a>
                                            <?php } ?>
                                            <?php if(get_field('produkt_5')) { ?>
                                                <a href="<?php echo get_post_permalink(get_field('produkt_5')->ID); ?>" target="_blank">
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_field('produkt_5'))); ?>" class="product">
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Next/previous controls -->
                            <div class="modal-nav">
                                <?php if($photosNumber > 1) { ?>
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                <?php } ?>
                                <div class="numbertext"><span class="number">1</span>/<?php echo $photosNumber; ?></div>
                                <span class="close cursor" onclick="closeModal()">&times;</span>
                            </div>
                        </div>
                    </div>

                    <?php
                    $counter++;

                endwhile;
                ?>

            </div>
        </div>
    </section>


    <script>
        let postName = '';
        let slideIndex = 1;

        // Open the Modal
        function openModal(id) {
            postName = id;
            slideIndex = 1;
            document.getElementById(postName).getElementsByClassName('number')[0].innerHTML = slideIndex;
            console.log(slideIndex)
            document.getElementById(postName).style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById(postName).style.display = "none";
            slideIndex = 1;
            document.getElementById(postName).getElementsByClassName('number')[0].innerHTML = slideIndex;
        }

        // Next/previous controls
        function plusSlides(n) {
            console.log(slideIndex)
            showSlides(slideIndex += n);
            console.log(slideIndex);
            document.getElementById(postName).getElementsByClassName('number')[0].innerHTML = slideIndex;
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("images"+postName);
            console.log(slideIndex)
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex-1].style.display = "block";
        }

        document.onkeydown = function(e) {
            e = e || window.event;
            if (e.key === 'ArrowLeft') {
                plusSlides(-1) //left <- show Prev image
            } else if (e.key === 'ArrowRight') {
                // right -> show next image
                plusSlides(1)
            } else if (e.key === 'Escape') {
                // right -> show next image
                closeModal(postName);
            }
        }
    </script>

<?php get_footer(); ?>