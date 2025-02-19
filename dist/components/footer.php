<footer class="footer">
    <div class="footer__content">
        <!-- Footer Menu -->
        <?php
        wp_nav_menu([
            'theme_location' => 'footer-menu', // Footer menu
            'menu_class' => 'footer-menu',
            'container' => false,
        ]);
        ?>
        
        <!-- Copyright Section -->
        <p class="footer__text">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        
        <!-- Social Media Icons -->
        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/your-facebook-page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/facebook_icon.png" alt="Facebook" height="50"></a></li>
                <li><a href="https://twitter.com/your-twitter-handle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/twitter_icon.png" alt="Twitter" height="50"></a></li>
                <li><a href="https://www.linkedin.com/in/your-linkedin-profile"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/linkedin_icon.png" alt="LinkedIn" height="50"></a></li>
                <li><a href="https://www.instagram.com/your-instagram-handle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/instagram_icon.png" alt="Instagram" height="50"></a></li>
            </ul>
        </div>
    </div>
</footer>
