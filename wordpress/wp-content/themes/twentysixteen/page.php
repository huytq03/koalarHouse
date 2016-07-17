<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php

	if ($post->post_parent)	{
		$ancestors=get_post_ancestors($post->ID);
		$root = count($ancestors)-1;
		$parent = $ancestors[$root];
	} else {
		$parent = $post->ID;
	}


	$children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0&depth=1");

	if ($children) : ?>

	<div class="site-menu-child">
		<div class="site-header-menu-child">
			<img src="../../wp-content/uploads/2016/07/<?php echo $parent;?>.png">
			<h2 class="child-menu-title"> <?php echo get_the_title($parent); ?> </h2>
		</div>
		<ul class="menu-child-items">
		<?php echo $children; ?>
		</ul>
	</div>
<?php endif; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
