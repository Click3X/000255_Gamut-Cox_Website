		<?php
			// IF PAGE IS HOME, WRAP THE FOOTER IN GROUP 7 PARALLAX DIV
			if(is_page(107)) {
				echo '<div class="parallax__layer parallax__layer--base">
				      	<div class="title">Base Layer 7</div>';
				}
			?>

			<footer class="footer" role="contentinfo">

				<div id="footer-beam-container">

					<div id="footer-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/footer-beam.png);"></div>

				</div>

				<div id="inner-footer" class="inner-footer cf">

				   	<?php
				   		// START FOOTER OPTIONS CODE
				   		// first reset postdata() as the 'options' word similar as 'pages'
				   		// and its best to reset data since its likely a loop will already have been run
				   		// earlier on the page
				    	wp_reset_postdata();

				    	// LOGO AND SOCIAL LINKS
				    	echo '<div class="logo-social clearfix">';
				    		echo '<div class="footer-links-content wrap cf">';
					    	
					    	// SOCIAL MEDIA LINKS
					    	if(get_field('social_media_links', 'options')):
								// SOCIAL MEDIA LINKS
								echo '<ul class="social-media-links">';

								while(has_sub_field('social_media_links', 'options')): 
									$socialTitle = cleanString(get_sub_field('title'));

									?>
									<li class="social">
										<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title');?>" class="<?php echo $socialTitle; ?>">
										</a>
									</li>
								<?php endwhile;
								echo '</ul>';
							endif; 
							echo '</div>'; // .wrap
				    	echo '</div>';

				    	// CONTACT LINKS
					    echo '<div class="footer-links">';
						    	echo '<div class="footer-links-content wrap cf">';
						    	// LOCATIONS - CITY & ADDRESS
								if(get_field('locations', 'options')): ?>

									<?php 
									// EACH LOCATION ('City-Address combo') GETS ITS OWN UL
									while(has_sub_field('locations', 'options')): ?>
									<ul class="client-info location">
										<li class="headline city"><?php the_sub_field('city'); ?></li>
										<li class="copy address"><?php the_sub_field('address'); ?></li>
									</ul>
									<?php endwhile; ?>

								<?php 
								endif; 


								// CAREERS BUTTON
								$careers = get_field('careers', 'options');
								
								// POLICY LINKS - 
								if(get_field('policy_links', 'options')): ?>
									
									

									<?php 
									if($careers) {
										echo '<ul class="client-info career-button"><li><a href="'.$careers.'" id="careers-link">Careers&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #eb0a8e;"></span></a></li></ul>';
									}?>

									<ul class="client-info policy-links">
									
									<?php // EACH LOCATION ('City-Address combo') GETS ITS OWN UL
										while(has_sub_field('policy_links', 'options')): ?>
										<li class="copy link"><a class="policy-links" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
									<?php endwhile; ?>

									</ul>

								<?php 
								endif;
							echo '</div>'; // .wrap

						echo '</div>';


						// RESET POST DATA ONE MORE TIME FOR GOOD MEASURE
						wp_reset_postdata();
						// END FOOTER OPTIONS CODE
					?>

				</div>

			</footer>

			<?php 
			// IF IS HOME PAGE, CLOSE PARALLAX GROUP 7 WRAP
			if(is_page(107)) {
					echo '</div>'; //  END PARALLAX GROUP
				echo '</div>'; // END GROUP 7

				echo '</div>'; // END PARALLAX
				// DEBUG SCRIPT
				echo '<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script>
			    var debugInput = document.querySelector("input");
			    function updateDebugState() {
			        document.body.classList.toggle("debug-on", debugInput.checked);
			    }
			    debugInput.addEventListener("click", updateDebugState);
			    updateDebugState();
			  </script>';
			}

			?>

		</div> <!-- END CONTAINER -->

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		
	</body>

</html> <!-- end of site. what a ride! -->
