<?php
/**
* Custom Post Type file for individual Projects.
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
    
    <section id="work-slider">
        <div class="content-wrapper">
            <?php the_content(); ?>
        </div> <!-- end content-wrapper-->
    </section><!-- end #work-hero-->
    
    <div class="alternate">
        <section id="single-project">
            <div class="content-wrapper">
        
                <?php while ( have_posts()): the_post();
                    $site_link = get_field('link');
                    $proj_desc = get_field('project_description');
                    $des_desc = get_field('design_description');
                    $dev_desc = get_field('development_description');
                ?>
                <div class="single-desc reveal">
                    <h1><?php the_title(); ?></h1>
                    <p> <?php echo $proj_desc; ?></p>
                </div><!-- end of single-desc-->
                
                <?php if($des_desc && $dev_desc): ?>
                    <div class="design-detail reveal">
                        <h2>Design</h2>
                        <p><?php echo $des_desc; ?></p>
                    </div>
                    <div class="development-detail reveal">
                        <h2>Development</h2>
                        <p><?php echo $dev_desc; ?></p>
                    </div>
                <?php elseif($des_desc):?>
                    <div class="single-desc reveal">
                        <h2>Design</h2>
                        <p><?php echo $des_desc; ?></p>
                    </div>
                <?php elseif($dev_desc): ?>
                    <div class="single-desc reveal">
                        <h2>Development</h2>
                        <p><?php echo $dev_desc; ?></p>
                    </div>
                <?php endif; ?>
            
        <?php endwhile; //end of the loop. ?>
            </div><!-- end content-wrapper-->
        </section> <!-- end #single-project-->
    
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