<?php
/**
* The Projects archive file.
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
    
    <section id="work-hero" class="hero-area">
        <div class="content-wrapper">
            <h1>Work</h1>
        </div>
    </section>
    
    <div class="alternate">
        <?php while ( have_posts()): the_post();
            $image = get_field('image');
            $size = "full";
            $link = get_field('link');
        ?>
        <section id="project">
            <div class="content-wrapper">
                <a href="<?php echo $link ?>" target="_blank">
                    <div class="project-image">
                        <?php if($image){
                            echo wp_get_attachment_image($image, $size);
                        }?>
                    </div>
                </a>
                <div class="project-info">
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