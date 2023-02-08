<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wayup
 */

get_header();
?>
<section class="inner clients">
			<div class="wrapper">
				<h2 class="clients__title secondary-title"><?php the_title();?></h2>
				<div class="clients__box">
					<?php the_content();?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</section>

<?php

get_footer();
