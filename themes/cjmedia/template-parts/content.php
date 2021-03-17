<?php
/**
 * Template part for displaying posts.
 *
 * @package Chelsea_Jade_Media_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		<div class="entry-header">
			<?php if ( has_post_thumbnail() ) {
				$vidImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full"); 
				}
			?>


			<?php the_title(); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			
				<a href="//www.youtube.com/watch?v=FLBd218SDaA" data-lity data-featherlight="#<?php the_ID(); ?>" >
					<div id="<?php the_ID(); ?> style="background-color:#000; width:350px; border-radius:50px; color:#ffffff;text-transform: uppercase;  letter-spacing: 2px; height:60px;">
						<p style="padding-top:10px;">
						Watch Video <i class="fa fa-play-circle" aria-hidden="true"></i> 
						</p> 
					</div>
				</a>

			<?php endif; ?>
		</div><!-- .entry-header -->

	</div><!-- .entry-content -->

</article><!-- #post-## -->
