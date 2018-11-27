<?php
/**
 * The template for default page
 *
 * @package LionThemes
 * @subpackage Orienko_theme
 * @since Orienko Themes 1.3.7
 */
 
get_header();

/**
 * determine main column size from actived sidebar
 */
$orienko_opt = get_option( 'orienko_opt' );
?> 
<div id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php orienko_breadcrumb(); ?>
			</div>
			<div class="col-xs-12 content-area" id="main-column">
				<main id="main" class="site-main">
					<?php 
					while (have_posts()) {
						the_post();

						get_template_part('content', 'page');

						echo "\n\n";
						
						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || '0' != get_comments_number()) {
							comments_template();
						}

						echo "\n\n";

					} //endwhile;
					?> 
				</main>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?> 