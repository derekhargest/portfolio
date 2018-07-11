<?php
/**
 * Template part for displaying a post preview on the main blog page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage dhargest
 * @since 1.0
 * @version 1.0
 */

?>
<div class="blog-entry-preview">
	<article>
		<header><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></header>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
	</article>
</div>