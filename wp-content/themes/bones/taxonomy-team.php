<?php 

get_header(); 

// GET TAX NAME TITLE FOR SIDEBAR AND TAX TITLE
global $wp_query;
$term = $wp_query->get_queried_object();
$tax_title = $term->name;


// GET HEADER FROM OUR LEADERSHIP PAGE
$headerId = get_post_custom_values( 'header-image', 48 );
$header = wp_get_attachment_image_src( $headerId[0], 'full' );
helper($header);

?>

<div id="content" class="fixed-header-bg">

	<header class="article-header">
		<div class="page-header" style="background-image: url('<?php echo $header[0] ?>')"></div>
	</header>

	<div class="wrap-wrap cf">

		<div id="inner-content" class="wrap cf">

			<?php get_sidebar(); ?>

			<div id="main" class="m-all t-2of3 d-6of7 cf" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content cf" itemprop="articleBody">

						<div class="sub-page-content-wrapper" style="">
							<h1><?php echo $tax_title; ?></h1>
						</div>

						<ul id="og-grid" class="og-grid">
							<?php
							// GO THROUGH LOOP FIRST AND CACHE DATA BEFORE PRINTING
							// ANY HTML TAGS
							if (have_posts()) : while (have_posts()) : the_post(); 

								$id = $post->ID;
								$name = $post->post_title;
								$link = $post->guid;
								$size = 'thumb';
								$full = 'full';
								$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
								// hover over
								$thumb_hover = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
								$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'full');

								
								// GET CUSTOM FIELDS ASSOCIATED WITH TEAM MEMBER
								$emp_title = get_field('title');
								// $add_info = get_field('additional_info');
								$email = get_field('email');
								$tele = get_field('telephone');
								$empThumb = get_field('thumbnail');
								
								$addInfo = get_post_custom_values('additional_info', $id);
								$add_info = $addInfo[0];


								// helper($empThumb);
								// hover over
								$empThumb_hover = get_field('thumbnail_hover');
								$empId = $empThumb[0];
								$empHoverId = $empThumb_hover[0];
								$bwHoverThumb = wp_get_attachment_image_src($empHoverId , 'emp-thumb');
								$newHoverThumb = $bwHoverThumb[0];

								$bwThumb = wp_get_attachment_image_src($empId , 'emp-thumb');
								$newThumb = $bwThumb[0];
								
								?>

								<li id="post-<?php echo $id; ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a class="fancybox various" href="<?php echo '#' . $id; ?>">
								<?php 
									echo '<img src="'.$empThumb.'" alt="'.$name.'" class="grid-thumb grayscale">';
									echo '<h2 class="small-name gothic">'.$name.'</h2>';
									echo '<h3 class="small-title gothic">'.$emp_title.'</h3>';
								?>
									</a>
								</li>

								<div id="<?php echo $id; ?>" style="width:100%;display: none;">
									<?php echo '<img class="bio-left-column-image" src="'.$largeThumb[0].'" alt="'.$name.'">' ?>
									<div class="bio-right-column-container">
									<h3 class="bio-name"><?php echo $name; ?></h3><br />
									<h3 class="bio-title"><?php echo $emp_title; ?></h3>	
									<p><?php echo $add_info; ?></p>
									</div>
									
								</div> 
									
							<?php

							endwhile;

							endif;

							?>

						</ul>

					</section>

				</article>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>