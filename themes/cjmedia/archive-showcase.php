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
						<div class="shop-title-box">
							<h1 class="shop-title-mobile"><?php the_title(); ?></h1>
							<div class="shop-title-dkp"><?php the_content(); ?></div>
						</div> 


		</header>


		<?php endforeach; wp_reset_postdata(); ?>  

			<?php $terms = get_terms( array(
					'taxonomy'=>'showcase_category',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<h2 class="product-type-title">Categories</h2>
				<div class="product-type">
					<?php foreach($terms as $term) : ?>
						<p>
						<a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?></a>
						</p>

					<?php endforeach; ?>
					<?php endif; ?>
				</div>


<!-- Product Grid -->


	<nav class="pagination">
				<?php
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $products->max_num_pages,
					'prev_text' => '',
					'next_text' => ''
				) );
				?>
			</nav>
<?php wp_reset_postdata(); ?>

</main><!-- #main -->
</div><!-- #primary -->		

<?php get_footer(); ?>