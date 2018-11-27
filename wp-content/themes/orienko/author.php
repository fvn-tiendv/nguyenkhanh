<?php
/**
 * The template for displaying Author Archive pages
 *
 * @package LionThemes
 * @subpackage Orienko_theme
 * @since Orienko Themes 1.3.7
 */

get_header();

$orienko_opt = get_option( 'orienko_opt' );
?>
<div class="main-container page-wrapper">
	<div class="container">
		<?php if(isset($orienko_opt['blog_header_text'])) { ?>
		<header class="entry-header">
			<div class="container">
				<h1 class="entry-title"><?php echo esc_html($orienko_opt['blog_header_text']); ?></h1>
			</div>
		</header>
		<?php } ?>
		<div class="row">
			<div class="col-xs-12">
				<?php orienko_breadcrumb(); ?>
			</div>
			<?php if(isset($orienko_opt['sidebarblog_pos']) && $orienko_opt['sidebarblog_pos']=='left') :?>
				<?php get_sidebar('blog'); ?>
			<?php endif; ?>
			<div class="col-xs-12 <?php if ( is_active_sidebar( 'blog' ) ) : ?>col-md-9<?php endif; ?>">
				<div class="page-content blog-page grid-layout">
					<?php if ( have_posts() ) : ?>

						<?php
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							 *
							 * We reset this later so we can run the loop
							 * properly with a call to rewind_posts().
							 */
							the_post();
						?>

						<header class="archive-header">
							<h1 class="archive-title"><?php printf( esc_html__( 'Author Archives: %s', 'orienko' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
						</header><!-- .archive-header -->

						<?php
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
						?>

						<?php
						// If a user has filled out their description, show a bio on their entries.
						if ( get_the_author_meta( 'description' ) ) : ?>
						<div class="author-info archives">
							<div class="author-avatar">
								<?php
								/**
								 * Filter the author bio avatar size.
								 *
								 * @since Orienko Themes 1.3.7
								 *
								 * @param int $size The height and width of the avatar in pixels.
								 */
								$author_bio_avatar_size = apply_filters( 'orienko_author_bio_avatar_size', 68 );
								echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
								?>
							</div><!-- .author-avatar -->
							<div class="author-description">
								<h2><?php printf( esc_html__( 'About %s', 'orienko' ), get_the_author() ); ?></h2>
								<p><?php the_author_meta( 'description' ); ?></p>
							</div><!-- .author-description	-->
						</div><!-- .author-info -->
						<?php endif; ?>

						<?php /* Start the Loop */ ?>
						<div class="grid-wrapper">
						<div id="shufflegrid" class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-xs-12 col-md-6 shuffle-item">
							<?php get_template_part( 'content', get_post_format() ); ?>
							</div>
						<?php endwhile; ?>
						</div>
						</div>
						<div class="pagination">
							<?php orienko_bootstrap_pagination(); ?>
						</div>

					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php if(isset($orienko_opt['sidebarblog_pos']) && $orienko_opt['sidebarblog_pos']=='right') :?>
				<?php get_sidebar('blog'); ?>
			<?php endif; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>