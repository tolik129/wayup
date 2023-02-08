<?php
/*
* Template name: Template order
*/
get_header(); 
$cost = '0';
$title = 'Не выбрано';
$content = 'Не выбрано';

if(isset($_GET["price"])) {
	$cost = $_GET["price"];
}
if(isset($_GET["title"])) {
	$title = $_GET["title"];
}
if(isset($_GET["content"])) {
	$content = $_GET["content"];
}
?>

<!-- Content -->
		<section class="inner order-page">
			<div class="wrapper">

               <?php while ( have_posts() ) : the_post(); ?>
				<div class="inner__content">
					<h2 class="inner__title inner-title"><span><?php the_title(); ?></h2>
					<div class="inner__img blue-noise">
							<?php echo get_the_post_thumbnail(get_the_ID(),'full');?>
					</div>
					<div class="inner__block">
						<div class="inner__text">
							<h5 class="inner__top"><?php echo $title; ?></h5>
						       <?php echo $content; ?>
							<span class="inner__price">$<?php echo $cost; ?></span>
						</div>
					 <?php echo do_shortcode(get_metadata('post',get_the_ID(),'wayup_shortcode_order',true)); ?>
					</div>
				</div>
              <?php endwhile; // End of the loop.?>


			</div>
		</section><!-- End content -->

<?php get_footer(); ?>