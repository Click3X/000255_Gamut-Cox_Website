<?php // DATA PARTNERS
	
get_header();


// RUN LOOP, STRORE VARS
if (have_posts()) : while (have_posts()) : the_post();

	$header_image = get_field('header-image');
	$sub_page_title = get_field('sub-page-title');
	$sub_page_content = get_field('sub-page-content');



endwhile;

endif; 

?>

	<div id="content">

		<header class="article-header">
			<div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>
		</header>

		<div id="inner-content" class="wrap cf">

			<?php get_sidebar(); ?>

			<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content cf" itemprop="articleBody">

						<div class="sub-page-content-wrapper" style="">
							<h1><?php the_title();?></h1>
							<div>
								<?php echo $sub_page_content ?>
							</div>
						</div>

					</section> <?php // end article section ?>

					<footer class="article-footer cf">

					</footer>								

				</article>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
