<?php get_header(); the_post(); ?>

<article id="emoji-interpretation" class="center">

<header class="no-intro emoji">

    <div>

        <a href="<?php echo home_url ('/emojis');?>"><?php _e ('Emoji interpretations', 'emojibook')?></a>
        <h1><?php the_tittle();?></h1>
        <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php _e ( 'Submitted on', 'emojibook' ); ?> <?php the_time ( 'd.m.Y' ); ?></time>

    </div>

    <?php echo wp_get_attachment_image ( get_field ( 'emoji_original' ) ); ?>

</header>

<?php the_post_thumbail ('large');?>

<div class="flex">

    <div class="author-info cols-3">

        <h2><?php _e ('by', 'emojibook');?><?php the_field('autor');?></h2>
        <span><?php the_field('sitio_web');?></span>

        <?php $web=get_field ('sitio web');?>
        <a href="<?php echo $web;?>" target="_blank"><?php echo str_replace ('//' '', $web, );?></a>

    </div>

    <div class="interpretation-info cols-8">

       <?php the_content();?>

    </div>

</div>

<a href="<?php echo home_url ( '/emojis/' ); ?>" class="button"><?php _e ( 'Other emojis', 'emojibook' ); ?></a>

</article>

<?php get_footer(); ?>