<?php
/**
 * Main template file.
 * 
 * @package Aquila
 */
get_header();
 ?>

    <div class="content">Content</div>
    <div> <?php esc_html_e('Hello World', 'aquila'); ?></div>

<?php get_footer();
