<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Carey
 * @since Carey 1.0
 */
get_header(); ?>

<section id="content">            
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-5">
                <h3>Events & Special Dates</h3> 
                <article class="post post-event">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t</p>
                        <div class="post-meta">                                    
                            <div class="entry-time"><li class="month"> Febuary </li><li> 22nd - 23rd </li></div>
                        </div>
                    </div>                            
                </article>
                <article class="post post-event">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t</p>
                        <div class="post-meta">                                    
                            <div class="entry-time"><li class="month"> Febuary </li><li> 22nd - 23rd </li></div>
                        </div>
                    </div>                            
                </article>
                <article class="post post-event">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t</p>
                        <div class="post-meta">                                    
                            <div class="entry-time"><li class="month"> Febuary </li><li> 22nd - 23rd </li></div>
                        </div>
                    </div>                            
                </article> 
            </div>
            <div class="col-sm-9 col-md-5 right-sidebar right">
                <?php get_sidebar(); ?>
            </div>                
            <div class="col-md-8">
                <h3>Featured Videos</h3>                        
                <article class="post post-video">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/video_sample1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">WHY I CHOSE TO STUDY WITH CAREY</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>
                <article class="post post-video">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/video_sample1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">WHY I CHOSE TO STUDY WITH CAREY</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>                               
            </div>
    </div>            
</section>

<?php
//get_sidebar();
get_footer();
