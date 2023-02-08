<?php 
get_header();
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
			the_title();
			endwhile;
		else :
			echo "Нет Кейса";
		endif;
 get_footer();