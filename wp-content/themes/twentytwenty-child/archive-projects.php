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
        </div> <!-- end content-wrapper-->
    </section><!-- end #work-hero-->
    
    <div class="alternate">
        <section id="project">
            <div class="content-wrapper">
                
                <?php query_posts('pagename=Contact');?>
                <?php while ( have_posts()): the_post();
                
                $contact_link = get_permalink();?>
                
                <?php endwhile;?>
                <?php wp_reset_query();?>
                
                <p>Click any of my projects below to learn more about my involvement with the design and development, as well as browse the sites yourself. If you have any questions about a project, or if you are interested in working together on a website, please feel free to reach out to me via my <a href="<?php echo $contact_link ?>">contact page.</a></p>
        
                <?php while ( have_posts()): the_post();
                    $image = get_field('image');
                    $size = "full";
                ?>
                <div class="individual-project">
                    <a href="<?php the_permalink(); ?>">
                        <div class="project-image">
                            <?php if($image){
                                echo wp_get_attachment_image($image, $size);
                            }?>
                        </div><!-- end project-image-->
                    </a>
                    <div class="project-info">
                        <h2><?php the_title(); ?></h2>
                    </div><!-- end project-info-->
                </div><!-- end individual-project-->
            
        <?php endwhile; //end of the loop. ?>
            </div><!-- end content-wrapper-->
        </section> <!-- end #project-->
    
        <section id="chat">
            <?php if(is_active_sidebar('sidebar-3')): ?>
            <div class="content-wrapper">
                <div id="chat-sidebar" class="chat-container">
                    <?php dynamic_sidebar('sidebar-3'); ?>
                    <?php query_posts('pagename=Contact'); ?>
                    <?php while (have_posts()): the_post(); ?>
                    <div class="contact-btn-link">
                        <a href="<?php the_permalink(); ?>" class="chat-btn">Say Hey</a>
                    </div><!-- end contact-btn-link-->
                    <?php endwhile; //end of loop ?>
                </div><!-- end #chat-sidebar-->
            </div> <!-- end content-wrapper-->
            <?php endif; ?>
        </section><!-- end #chat-->
    </div> <!-- end alternate-->
    
</main> <!-- end #site-content-->



<?php
get_footer(); ?>