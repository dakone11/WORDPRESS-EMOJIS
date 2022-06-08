<?php get_header(); ?>

    <!-- INTRO -->

    <section id="home-intro" class="page-intro center">

        <?php get_template_part ( 'snippets/page-title' ); ?>

    </section>

    <!-- EMOJIS -->

    <section id="home-emojis" class="emoji-grid center">

        <h1 class="hidden"><?php _e ( 'Emoji interpretations', 'emojibook' ); ?></h1>

        <div class="flex">

            <?php

                $emojis = new WP_Query ( array
                (
                    'post_type' => 'emoji',
                    'posts_per_page' => 4
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

        <a href="<?php echo home_url ( '/emojis/' ); ?>" class="button"><?php _e ( 'View all emojis', 'emojibook' ); ?></a>

    </section>

<?php get_footer(); ?>