<?php
/**
 * The template for displaying single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="single-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
		<?php endwhile; ?>
	</div>

</section>

<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('') ?>">&larr; <span>Back to portfolio</span></a></div>
</nav>

<?php get_footer(); ?>
