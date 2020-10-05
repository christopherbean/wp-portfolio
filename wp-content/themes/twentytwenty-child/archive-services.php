<?php
/**
* The Services archive file.
*
*
*
* @package Wordpress
* @subpackage Twenty_Twenty
* @since Twenty Twenty 1.0
*/

get_header();
?>

<main id="site-content" role="main">
    
    <section id="services-hero" class="hero-area">
        <div class="content-wrapper">
            <h2>So you're curious about what I can do for you? I thought you'd never ask! Here's a few services that I currently offer. Have a question about a service or how I can help you on your project?</h2>
            
        <?php query_posts('pagename=Contact'); ?>
            <?php while (have_posts()): the_post(); ?>
            <div class="lets-chat-link">
                <a href="<?php the_permalink(); ?>" class="cta-btn">Let's Chat</a>
            </div>
            <?php endwhile; //end of loop ?>
        <?php wp_reset_query() ?>
    
            
        </div>
    </section>
    
    <div class="alternate">
        <?php while ( have_posts()): the_post();
        $image = get_field('service_icon');
        $size = 'full';
        ?>
        <section id="service">
            <div class="content-wrapper">
                    <div class="service-icon">
                        <?php if($image){
                            echo wp_get_attachment_image($image, $size);
                        } ?>
                    </div>
                <div class="service-info">
                    <h2><?php the_title(); ?></h2>
                    
                    <?php the_content(); ?>
                
                </div>
            </div>
        </section>
        <?php endwhile; //end of the loop. ?>
    
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
    
</main>



<?php
get_footer(); ?>