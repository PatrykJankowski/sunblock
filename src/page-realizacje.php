<?php /* Template Name: Realizacje */ ?>

<?php get_header(); ?>


<style>
    .row > .column {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Create four equal columns that floats next to eachother */
    .column {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 20;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,.8);
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 100%;
        height: calc(100vh);
    }

    .modal-content .featured-image {
        height: 500px;
        width: 100%;
        object-fit: cover;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        z-index: 20;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    /* Hide the slides by default */
    .mySlides {
        display: none;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        background-color: #192937;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Caption text */
    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    img.demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>


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
                $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'realizacje',
                    'posts_per_page' => 32,
                    'paged' => $paged,
                );
                $arr_posts = new WP_Query( $args );

                if ( $arr_posts->have_posts() ) :

                    $count = 1;
                    while ( $arr_posts->have_posts() ) :

                        if($count == 1 or !($count % 5)) { ?>

                        <div class="row">

                        <?php }
                        $arr_posts->the_post();
                        ?>

                        <div class="col-md-3">
                            <a <!--href="--><?php /*echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) */?>" onclick="openModal();currentSlide(<?php echo $count ?>)" class="hover-shadow"> <!--data-fslightbox="gallery"-->
                            <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                            ?>
                            </a>
                        </div>

                        <?php if(!($count % 4) or $arr_posts->post_count == $count) { ?>
                            </div>
                        <?php }

                        $count++;

                    endwhile;

                endif;
                ?>

            </div>
        </div>
    </section>


    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">


                    <?php

                    $counter = 1;
                    while ( $arr_posts->have_posts() ) :

                        $arr_posts->the_post();
                        ?>

                        <div class="mySlides">
                            <div class="numbertext"><?php echo $counter ?> / 4</div>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" class="featured-image" loading="lazy">
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
                        </div>

                        <?php

                        $counter++;

                    endwhile;
                    ?>

                    <!-- Next/previous controls -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
    </div>




    <script defer src="/wp-content/themes/sunblock/fslightbox.js"></script>


<script>
        // Open the Modal
        function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

        // Close the Modal
        function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
    }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
    }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        //var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
        /*for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }*/
        slides[slideIndex-1].style.display = "block";
        //dots[slideIndex-1].className += " active";
        //captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

<?php get_footer(); ?>