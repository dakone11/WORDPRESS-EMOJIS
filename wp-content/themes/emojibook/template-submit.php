<?php /* Template name: Submit */ ?>

<?php get_header(); the_post(); ?>

    <!-- SUBMIT -->

    <section id="submit" class="center">

        <header class="page-intro">

            <?php get_template_part ( 'snippets/page-title' ); ?>

        </header>        

        <!-- FORM -->

        <?php the_content(); ?>

    </section>

<?php get_footer(); ?>