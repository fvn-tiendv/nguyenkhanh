<?php
/**
 * Template for aside post format
 * 
 * @package LionThemes
 * @subpackage Orienko_theme
 * @since Orienko Themes 1.3.7
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(orienko_bootstrap_more_link_text()); ?> 
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name orienko_bootstrap_link_pages_link() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'orienko') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php 
		if (is_single()) {
			?> 
			<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?> 
			<div class="entry-meta-category-tag">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list(esc_html__(', ', 'orienko'));
					if (!empty($categories_list)) {
				?> 
				<span class="cat-links">
					<?php echo orienko_bootstrap_categories_list($categories_list); ?> 
				</span>
				<?php } // End if categories ?> 

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list('', esc_html__(', ', 'orienko'));
					if ($tags_list) {
				?> 
				<span class="tags-links">
					<?php echo orienko_bootstrap_tags_list($tags_list); ?> 
				</span>
				<?php } // End if $tags_list ?> 
			</div><!--.entry-meta-category-tag-->
			<?php } // End if 'post' == get_post_type() ?> 

			<div class="entry-meta-comment-tools">
				<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
				<span class="comments-link"><?php orienko_bootstrap_comments_popup_link(); ?></span>
				<?php } //endif; ?> 

				<?php orienko_bootstrap_edit_post_link(); ?> 
			</div><!--.entry-meta-comment-tools-->
			<?php 
		} else {
			orienko_bootstrap_post_on();
		} // is_single() 
		?> 
	</footer><!-- .entry-meta -->
</article><!-- #post -->