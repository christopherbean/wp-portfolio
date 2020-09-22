<?php
/**
 * The contact page template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="contact-hero" class="hero-area">
            <div class="content-wrapper">
                <?php while ( have_posts()): the_post(); 
                    the_content();
                ?>
                <?php endwhile; //end of the loop. ?>
            </div>
    </section>
    
  
</main><!-- #site-content -->



<?php
get_footer(); ?>