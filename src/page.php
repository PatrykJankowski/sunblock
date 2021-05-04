<?php get_header(); ?>

<div class="subpage-top__wrapper">
    <section class="section section--pn">
        <h1><?php the_title(); ?></h1>
        <div class="subpage-top"></div>
    </section>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="post" name="contact-me" id="contact-form" class="contact-form">
                    <input type="text" name="name" placeholder="Imię i nazwisko_">
                    <input type="hidden" name="lastname" placeholder="Nazwisko_">
                    <input type="email" name="email" placeholder="E-mail_">
                    <input type="text" name="phone" placeholder="Numer telefonu (opcjonalnie)_">
                    <textarea name="message" placeholder="Treść wiadomości_"></textarea>
                    <input type="hidden" name="action" value="send_form">
                    <input type="submit" value="Wyślij" class="button button--bg button--mt">
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


