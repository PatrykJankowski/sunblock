<?php /* Template Name: Realizacje */ ?>

<?php get_header(); ?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'realizacje',
        'posts_per_page' => 32,
        'paged' => $paged,
    );
    $posts = new WP_Query($args);
?>


    <div class="subpage-top__wrapper">
        <section class="subpage-top"></section>
    </div>

    <section class="realizacje">
        <div class="container">

            <div class="row realizacje__menu-wrapper">
                <div class="col-md-6"><a href="/realziacje/prywatne" class="realizacje__menu">Pomieszczenia prywatne</a></div>
                <div class="col-md-6"><a href="/realziacje/uslugowe" class="realizacje__menu">Pomieszczenia usługowe</a></div>
            </div>

            <div class="realizacje__photos">

                <?php

                    $counter = 1;

                    while ($posts->have_posts()):

                        $postName = get_post_field('post_name');

                        if($counter == 1 or !($counter % 5)) { ?>

                            <div class="row">

                        <?php }
                            $posts->the_post();
                        ?>

                        <div class="col-md-3">
                            <a onclick="openModal('<?php echo $postName ?>'); currentSlide(<?php echo $counter; ?>)" class="hover-shadow">
                            <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                            ?>
                            </a>
                        </div>

                        <?php if(!($counter % 4) or $posts->post_count == $counter) { ?>
                            </div>
                        <?php } ?>



                        <!-- The modals -->
                        <div id="<?php echo $postName; ?>" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">

                                <div class="numbertext"><?php echo $counter; ?> / 4</div>

                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">

                                <?php if(get_field('dodatkowe_zdjecie_1')['url']) { ?>
                                    <img src="<?php echo get_field('dodatkowe_zdjecie_1')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                                <?php } ?>
                                <?php if(get_field('dodatkowe_zdjecie_2')['url']) { ?>
                                    <img src="<?php echo get_field('dodatkowe_zdjecie_2')['url'] ?>" class="featured-image images<?php echo $postName ?>" loading="lazy">
                                <?php } ?>
                                <?php if(get_field('dodatkowe_zdjecie_3')['url']) { ?>
                                    <img src="<?php echo get_field('dodatkowe_zdjecie_3')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                                <?php } ?>
                                <?php if(get_field('dodatkowe_zdjecie_4')['url']) { ?>
                                    <img src="<?php echo get_field('dodatkowe_zdjecie_4')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                                <?php } ?>
                                <?php if(get_field('dodatkowe_zdjecie_5')['url']) { ?>
                                    <img src="<?php echo get_field('dodatkowe_zdjecie_5')['url'] ?>" class="featured-image images<?php echo $postName; ?>" loading="lazy">
                                <?php } ?>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><?php the_title(); ?></h3>
                                            <div><?php the_content(); ?></div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" style="width: 200px; height: 200px; display: inline-flex">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" style="width: 200px; height: 200px; display: inline-flex">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" style="width: 200px; height: 200px; display: inline-flex">
                                        </div>
                                    </div>
                                </div>

                                <!-- Next/previous controls -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

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

    // Open the Modal
    function openModal(id) {
        postName = id;
        document.getElementById(postName).style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById(postName).style.display = "none";
    }

    let slideIndex = 1;


    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("images"+postName);
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