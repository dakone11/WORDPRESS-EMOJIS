<?php /* Template name: Emojis */ ?>

<?php get_header(); the_post(); ?>

    <!-- EMOJIS -->

    <section id="about" class="center">

        <header class="page-intro">

            <?php get_template_part ( 'snippets/page-title' ); ?>

        </header>

    </section>

    <!-- EMOJIS -->

    <section id="home-emojis" class="emoji-grid center">

        <div class="flex">

            <?php

                $emojis = new WP_Query ( array
                (
                    'post_type' => 'emoji',
                    'posts_per_page' => -1
                ));

            ?>

            <?php while ( $emojis -> have_posts() ) : $emojis -> the_post(); ?>

                <article>

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ( 'medium' ); ?></a>

                    <div>
                        <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image ( get_field ( 'emoji_original' ) ); ?></a>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span><?php _e ( 'by', 'emojibook' ); ?> <?php the_field ( 'autor' ); ?></span></a></h1>
                    </div>

                </article>

            <?php endwhile; ?>

        </div>

    </section>

<?php get_footer(); ?>