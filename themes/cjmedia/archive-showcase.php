<?php
/**
 * The Template Name: Showcase
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php
			    $args = array( 
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'name'           => 'showcase',
			    );
			    $showcase_page = get_posts( $args ); // returns an array of posts
			
			?>

		<header class="showcase-header">											
			<?php foreach ( $showcase_page as $post ) : setup_postdata( $post ); ?>
			<h1 class="showcase-title"><?php the_title(); ?></h1>
					
		</header>

		<?php endforeach;?>  

			<?php $terms = get_terms( array(
					'taxonomy'=>'showcase_category',
					'field' => 'slug', 
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="showcase-type">
				<?php foreach($terms as $term) : ?>
					<a href="<?php echo get_term_link($term); ?>">
					<div class="showcase-container">
						<div class="cat-image" style="background: url('<?php echo the_field('category_image',$term); ?>') no-repeat; background-size: cover; background-position: center;" >
						</div>
						<p class="cat-title">
							<?php echo $term->name ?>
						</p>
					</div> <!-- showcase-type-->
					</a>
				<?php endforeach; ?>
				
				<?php endif; ?>
				</div>

<?php wp_reset_postdata(); ?>

</main><!-- #main -->
</div><!-- #primary -->		

<?php get_footer(); ?>
