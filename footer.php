<footer class="footer">
    <div class="container">
        <div class="left-column">
            <h2><?php echo get_theme_mod('footer_heading', 'Let\'s Connect!'); ?></h2>
            
            <p><?php echo get_theme_mod('footer_email', 'Lorem@email.com'); ?></p>
            
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
        <div class="right-column">
            <ul class="social-icons">
                <?php if ($facebook = get_theme_mod('facebook_link')): ?>
                    <li><a href="<?php echo esc_url($facebook); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/facebook_icon.png" alt="Facebook" height="50"></a></li>
                <?php endif; ?>

                <?php if ($twitter = get_theme_mod('twitter_link')): ?>
                    <li><a href="<?php echo esc_url($twitter); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/twitter_icon.png" alt="Twitter" height="50"></a></li>
                <?php endif; ?>

                <?php if ($linkedin = get_theme_mod('linkedin_link')): ?>
                    <li><a href="<?php echo esc_url($linkedin); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/linkedin_icon.png" alt="LinkedIn" height="50"></a></li>
                <?php endif; ?>

                <?php if ($instagram = get_theme_mod('instagram_link')): ?>
                    <li><a href="<?php echo esc_url($instagram); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/instagram_icon.png" alt="Instagram" height="50"></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</footer>
