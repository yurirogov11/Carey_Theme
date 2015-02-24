<?php 
/**
 * Adds News_Article_Widget widget.
 */
class News_Article_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'news_article_widget', 
			__( 'Lastest News & Articles', 'text_domain' ),
			array( 'description' => __( 'Lastest News & Articles', 'text_domain' ), ) 
		);
	}
	
	public function widget( $args, $instance ) {
		echo $args['before_widget'];		
		?>
			<h3><?php echo $instance['title']; ?></h3>
			<?php
				$args=array(
				  'post_type' => 'news',
				  'post_status' => 'publish',
				  'posts_per_page' => $instance['news_number'],
				  'caller_get_posts'=> 1

				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
				    <?php
				  endwhile;
				}
				wp_reset_query(); 
			?>
                <article class="post post-news">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/news_image1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>

                <article class="post post-article">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/article_image1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>
                <article class="post post-article">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/article_image1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>
                <article class="post post-article">
                    <div class="post-image">
                        <a class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/article_image1.jpg" alt="">                                    
                        </a>
                    </div>
                    <div class="post-content">                                
                        <h4 class="entry-title"><a href="#">Conference - Art of Forgiveness</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, t audantium, t </p>                                
                    </div>                            
                </article>
		<?php
		echo $args['after_widget'];
	}
	
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Lastest News & Articles', 'text_domain' );
		$news_number = ! empty( $instance['news_number'] ) ? $instance['news_number'] : 3;
		$articles_number = ! empty( $instance['articles_number'] ) ? $instance['articles_number'] : 3;
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'news_number' ); ?>"><?php _e( 'Number of News to show:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'news_number' ); ?>" name="<?php echo $this->get_field_name( 'news_number' ); ?>" type="text" value="<?php echo esc_attr( $news_number ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'articles_number' ); ?>"><?php _e( 'Number of News to show:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'articles_number' ); ?>" name="<?php echo $this->get_field_name( 'articles_number' ); ?>" type="text" value="<?php echo esc_attr( $articles_number ); ?>">
		</p>
		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['news_number'] = ( ! empty( $new_instance['news_number'] ) ) ? strip_tags( $new_instance['news_number'] ) : '';
		$instance['articles_number'] = ( ! empty( $new_instance['articles_number'] ) ) ? strip_tags( $new_instance['articles_number'] ) : '';

		return $instance;
	}

} // class Foo_Widget