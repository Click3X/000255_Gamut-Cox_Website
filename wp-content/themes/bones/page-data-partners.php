<?php // DATA PARTNERS
	
get_header();

$dataPartners = array();

// RUN LOOP, STRORE VARS
if (have_posts()) : while (have_posts()) : the_post();

	$header_image = get_field('header-image');
	$sub_page_title = get_field('sub-page-title');
	$sub_page_content = get_field('sub-page-content');
	$dPartners = get_field('data_partners');

	foreach ($dPartners as $key => $dPartner) {
		$dataPartners[$key]['id'] = cleanString($dPartner['name']);
		$dataPartners[$key]['logo'] = $dPartner['logo'];
		$dataPartners[$key]['link'] = $dPartner['link'];
	}


endwhile;

endif;

// helper($dataPartners);

?>

	<div id="content" class="fixed-header-bg">

		<header class="article-header">
			<!-- <div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div> -->
			<div id="page-header-<?php echo get_queried_object_id(); ?>" class="page-header"></div>
		</header>

		<div class="wrap-wrap cf">

		<div id="inner-content" class="wrap cf">

			<?php get_sidebar(); ?>

			<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content cf" itemprop="articleBody">

						<div class="sub-page-content-wrapper" style="">
							<?php echo $sub_page_title; ?>

							<?php 
								// SUB-PAGE CONTENT
								if($sub_page_content != '') { ?>
								<div class="sub-page-content">
									<?php echo $sub_page_content ?>
								</div>
							<?php } ?>

							<?php 
								// SUB-PAGE CONTENT
								// GET LENGTH OF ARRAY & ENSURE ITS NOT 0 - IF NOT - PRINT DATA PARTNERS
								$pLength = sizeof($dataPartners);
								if( $pLength > 0 ) { ?>
								<ul class="clearfix data-partners">
									<?php
										foreach ($dataPartners as $key => $dataPartner) {
											echo '<li class="'.$dataPartner['id'].'"><a href="'.$dataPartner['link'].'" target="_blank"><img src="'.$dataPartner['logo'].'"></a></li>';
										}
									?>
								</ul>
							<?php } ?>
						</div>

					</section> <?php // end article section ?>

					<footer class="article-footer cf">

					</footer>								

				</article>

			</div>

		</div>

		</div>

	</div>

<?php get_footer(); ?>
