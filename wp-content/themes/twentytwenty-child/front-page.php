<?php
/**
 * The front page template file.
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

	<section id="about-hero" class="hero-area">
            <div class="content-wrapper">
                <h1>I'm Chris,<br>a Frontend Developer.</h1>
            </div>
    </section>
    
    <div class="alternate">
        <section id="about-me">
            <div class="content-wrapper">
                
                <div class="about-me-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <figure class="my-portrait seen-mobile">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                    
                        <figure class="my-portrait reveal not-seen-mobile">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <h1 class="seen-mobile reveal">Why, Hello There</h1>
                        <div class="about-me-text reveal">
                            <h1 class="not-seen-mobile">Why, Hello There</h1>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; //end of the loop ?>
                </div>
            </div>
        </section>

        <section id="work-preview">
            <div class="content-wrapper">
                <h1>Work</h1>
                <ul class="featured-work">
                    <?php query_posts('posts_per_page=3&post_type=projects&order=DEC'); ?>
                        <?php while ( have_posts()) : the_post();
                            $image = get_field("image");
                            $size = "medium";
                        ?>
                    <li class="individual-work">
                        <figure>
                            <a href="<?php echo get_post_type_archive_link('projects'); ?>">
                             <?php echo wp_get_attachment_image($image, $size); ?>
                            </a>
                        </figure>
                        
                        <h3><a href="<?php echo get_post_type_archive_link('projects'); ?>"><?php the_title(); ?></a></h3>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </section>

        <section id="chat">
            <?php if(is_active_sidebar('sidebar-3')): ?>
            <div class="content-wrapper">
                <div id="chat-sidebar" class="chat-container">
                    <?php dynamic_sidebar('sidebar-3'); ?>
                    <?php query_posts('pagename=Contact'); ?>
                    <?php while (have_posts()): the_post(); ?>
                    <div class="contact-btn-link">
                        <a href="<?php the_permalink(); ?>" class="chat-btn">Say Hey</a>
                    </div>
                    <?php endwhile; //end of loop ?>
                </div>
            </div>
            <?php endif; ?>
        </section>
	</div>
    

</main><!-- #site-content -->



<?php
get_footer(); ?>
