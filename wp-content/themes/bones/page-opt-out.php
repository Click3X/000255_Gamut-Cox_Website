<?php
/*
 Template Name: Opt Out
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>



								</header>

								<section class="entry-content cf" itemprop="articleBody">


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
                                  
                                        <script language="JavaScript" type="text/javascript">
                                                                                                document.getElementById('ooButton').onclick = function () {
                                                                                                                var statusDiv = document.getElementById('opt-out-status');
                                                                                                                var responseDiv = document.getElementById('statusDiv');


                                                                                                                // if initial status frame has already been hidden, it means this
                                                                                                                // function has already been called.  Exit.
                                                                                                                statusFrame = document.getElementById('ooStatusFrame');
                                                                                                                if (statusFrame.style.display == 'none') { return false; }
                                                                                                               
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
                                                                                                                //statusFrame = document.getElementById('ooStatusFrame');
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

                                </div>
 
                </div>

									<?php
										// the content (pretty self explanatory huh)
										the_content();

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
								</section>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php //get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
