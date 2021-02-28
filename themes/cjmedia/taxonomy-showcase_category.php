<?php
/**
 * The template for displaying showcase category taxonomy archive pages.
 *
 * @package Chelsea_Jade_Media_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

<?php $terms = get_terms( array(
					'taxonomy'=>'showcase_category',
					'hide_empty' => 0,
				));
				if (! empty($terms) && ! is_wp_error($terms)) :
				?>
				
				<div class="product-type">
					<?php foreach($terms as $term) : ?>
						<p><a href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?>
					</a>
					</p>

					<?php endforeach; ?>
					<?php endif; ?>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php
					get_template_part( 'template-parts/content' );
				?>
		

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
