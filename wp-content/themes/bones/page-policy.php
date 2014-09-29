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
                                                <h6>Your browser’s current status</h6>
                                    <div id="opt-out-status">
                                      <iframe id="ooStatusFrame" src="./Cox Digital Solutions - Privacy Policy_files/no_cookie.gif" width="259" height="60" style="overflow:hidden;border:none;border:solid 1px #eee;" scrolling="no"></iframe>
                                    </div>
                                    <div class="opt_btn_wrapper">
                                      <a name="oo" id="ooButton" class="button opt_btn" href="http://www.coxdigitalsolutions.com/privacy-policy/consumer-opt-out-program/#">Opt-Out</a><br>
                                                  <div id="statusDiv">
                                                  </div>
                                    </div>
                                    <p>
                                        <script language="JavaScript" type="text/javascript">
                                                                                                document.getElementById('ooButton').onclick = function () {
                                                                                                                var statusDiv = document.getElementById('opt-out-status');
                                                                                                                var responseDiv = document.getElementById('statusDiv');
                                                                                                               
                                                                                                                // create css classes for the new iframes
                                                                                                                addClass('statusClass', 'overflow:hidden;border:none;border:solid 1px #eee;');
                                                                                                                addClass('responseClass', 'border:none;position:relative;top:10px;margin-top:-30px;');
                                                                                                               
                                                                                                                // show the response                                                                                                   
                                                                                                                addIframe(
                                                                                                                                responseDiv,
                                                                                                                                'http://oo.afy11.net/NAIOptOut.aspx',
                                                                                                                                30,
                                                                                                                                30,
                                                                                                                                'responseClass');
                                                                                                                               
                                                                                                                // show the status
                                                                                                                addIframe(
                                                                                                                                statusDiv,
                                                                                                                                'http://oo.afy11.net/NAIIsOptOut.aspx?nocache=0.2900600',
                                                                                                                                259,
                                                                                                                                60,
                                                                                                                                'statusClass');
                                                                                                               
                                                                                                                // hide the old status frame
                                                                                                                statusFrame = document.getElementById('ooStatusFrame');
                                                                                                                statusFrame.style.display = 'none';
                                                                                                               
                                                   return false;
                                               }
                                                                                   
                                                                                   // appends an iFrame to the parent div
                                                                                   var addIframe = function(parentDiv, url, width, height, className)
                                                                                   {
                                                                                                var iframe = document.createElement('iframe');
                                                                                                                iframe.src = url;
                                                                                                                iframe.width = width;
                                                                                                                iframe.height = height;
                                                                                                                iframe.className = className;
                                                                                                                parentDiv.appendChild(iframe);
                                                                                   }
                                                                                  
                                                                                   // created this function to facilitate setting style
                                                                                   // of new iFrames by dynamically add css class to the page
                                                                                   var addClass = function(className, styleText)
                                                                                   {
                                                                                                                var style = document.createElement('style');
                                                                                                                style.type = 'text/css';
                                                                                                                style.innerHTML = '.' + className + ' { ' + styleText + ' }';
                                                                                                                document.getElementsByTagName('head')[0].appendChild(style);
                                                                                   }
                                        </script>
                                    </p>
                                </div>
 
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
