<?php get_header(404); ?>

    
<?php echo wp_get_attachment_image ( get_field ( 'imagen_404','option' ) ); ?>

<div>
    <h1><a href="index.html"><?php _e ('Four hundred four', 'emojibook');?> <span><?php _e ('Page not found', 'emojibook');?><span></a></h1>
    <a href="<?php echo><img src="images/emoji-neutral-face.png" alt="404 thinking face Emoji"></a>
</div>

<?php get_footer(404); ?> 