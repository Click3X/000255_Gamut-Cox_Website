			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="inner-footer cf">

				   	<?php
				   		// START FOOTER OPTIONS CODE
				   		// first reset postdata() as the 'options' word similar as 'pages'
				   		// and its best to reset data since its likely a loop will already have been run
				   		// earlier on the page
				    	wp_reset_postdata();

				    	// LOGO AND SOCIAL LINKS
				    	echo '<div class="logo-social clearfix">';
				    		echo '<div class="wrap cf">';

				    		// SAVE FOOTER LOGO
				    		$clientLogo = get_field('client_logo', 'options');
					    	
					    	// SOCIAL MEDIA LINKS
					    	if(get_field('social_media_links', 'options')):
								// SOCIAL MEDIA LINKS
								echo '<ul class="social-media-links">';

								// CHECK FOR LOGO
								if($clientLogo) {
									echo '<li class="footer-logo-holder">';
						    			echo '<img id="footer-logo" class="footer-logo" src="'.$clientLogo.'" alt="logo">';
						    		echo '</li>';
						    	}
								while(has_sub_field('social_media_links', 'options')): ?>
									<li class="social">
										<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title');?>">
											<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title');?>">
										</a>
									</li>
								<?php endwhile;
								echo '</ul>';
							endif; 
							echo '</div>'; // .wrap
				    	echo '</div>';

				    	// CONTACT LINKS
					    echo '<div class="footer-links">';
						    	echo '<div class="wrap cf">';
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
									
									<ul class="client-info policy-links">

									<?php 
									if($careers) {
										echo '<li class="career-button"><a href="'.$careers.'" id="careers-link">Careers&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a></li>';
										// echo '<li class="career-button"><a href="'.$careers.'" id="careers-link" class="careers-link">Careers</a></li>';
									}
									?>
									
									<?php // EACH LOCATION ('City-Address combo') GETS ITS OWN UL
										while(has_sub_field('policy_links', 'options')): ?>
										<li class="copy link"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
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

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
