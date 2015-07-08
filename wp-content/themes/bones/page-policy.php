<?php 
 /* 

Template Name: Policy

 */
get_header(); ?>



			<div id="content">
			<?php
				$header = get_field('header');
				$policy_title = get_field('policy-title');
				$policy_content = get_field('policy-content');
			?>
<!-- 				<header class="article-header">
					<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
				</header> -->

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>						

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						

						<section class="entry-content cf" itemprop="articleBody">


								<div>
										
										<h1><?php echo $policy_title; ?></h1>
										<?php echo $policy_content; ?>
									
								</div>

								<!-- adding opt-out policy -->
								<?php if (is_page(275) || is_page(278)) { ?>

							<div id="opt">
					            <h6>Your browser&#8217;s current status</h6>
					            <div id="opt-out-status">
					              <iframe id="ooStatusFrame" src="http://oo.afy11.net/NAIIsOptOut.aspx?nocache=0.2900599" width="259" height="60" style="overflow:hidden;border:none;border:solid 1px #eee;" scrolling="no"></iframe>
					            </div>
					            <div class="opt_btn_wrapper">
					              <a name="oo" id="ooButton" class="button opt_btn" id="btn-opt-out">Opt-Out</a><br />
					              <!-- <iframe id="ooResponseFrame" src="" width="30" height="30" style="border:none;position:relative;top:10px;margin-top:-30px;" ></iframe> -->
					            </div>
					            <p>
                                        <script language="JavaScript" type="text/javascript">
                                              document.getElementById('ooButton').onclick = function () {
                                                var statusFrame = document.getElementById('ooStatusFrame');
                                                statusFrame.src = "http://oo.afy11.net/NAIOptOut.aspx";
                                                                statusFrame.width = 401;
                                                return false;
                                              }
                                        </script>
					            </p>
					        </div>

					        <?php } ?>
								<!-- end of content wrapper -->


									

									<?php

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								


						</div>

						

				</div>

			</div>

<?php get_footer(); ?>
