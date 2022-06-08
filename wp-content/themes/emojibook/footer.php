        <!-- PREFOOTER -->

        <section id="blog-prefooter" class="prefooter">

            <div class="center">

                <?php if ( !is_home() ) : ?>

                    <h1><?php _e ( 'From our Blog', 'emojibook' ); ?></h1>

                    <?php
                    
                        $posts = new WP_Query ( array
                        (
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));
                        
                    ?>

                    <?php while ( $posts -> have_posts() ) : $posts -> the_post(); ?>

                        <article>

                            <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                        </article>

                    <?php endwhile; ?>

                    <a href="<?php echo home_url ( '/blog/' ); ?>" class="button noborder"><?php _e ( 'View all posts', 'emojibook' ); ?></a>

                <?php else: ?>

                    <h1><?php _e ( 'From our Emoji Book', 'emojibook' ); ?></h1>

                    <?php
                    
                        $emojis = new WP_Query ( array
                        (
                            'post_type' => 'emoji',
                            'posts_per_page' => 3
                        ));
                        
                    ?>

                    <?php while ( $emojis -> have_posts() ) : $emojis -> the_post(); ?>

                        <article>

                            <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php _e ( 'by', 'emojibook' ); ?> <?php the_field ( 'autor' ); ?></a></h1>

                        </article>

                    <?php endwhile; ?>

                    <a href="<?php echo home_url ( '/emojis/' ); ?>" class="button noborder"><?php _e ( 'View all emojis', 'emojibook' ); ?></a>

                <?php endif; ?>

            </div>

        </section>

        <!-- FOOTER -->

        <footer>

            <div class="center">

                <h6 class="hidden">Page footer</h6>

                <div id="footer-menu">

                    <a href="<?php echo home_url(); ?>" id="copyright"><?php bloginfo ( 'name' ); ?></a>

                    <?php wp_nav_menu ( array
                    (
                        'theme_location' => 'footer',
                        'container' => false
                    )); ?>

                </div>

                <div id="footer-social">

                    <?php wp_nav_menu ( array
                    (
                        'theme_location' => 'social',
                        'container' => false
                    )); ?>

                </div>

            </div>

        </footer>

        <?php wp_footer(); ?>
        <?php the_field ( 'scripts_footer','option'); ?>
    </body>

</html>