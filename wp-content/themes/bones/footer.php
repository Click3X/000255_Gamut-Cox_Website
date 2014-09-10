			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<!-- <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p> -->
					<?php
				        $footer_copyright_title = get_field('footer-copyright-title');
						$footer_copyright_content = get_field('footer-copyright-content');
						$footer_contact_title = get_field('footer-contact-title');
						$footer_contact_content = get_field('footer-contact-content');
						$footer_privacy = get_field('footer-privacy');
						$footer_terms = get_field('footer-terms');
						$footer_follow = get_field('footer-follow');

						echo '<div class="footer-cols"><h4>'.$footer_copyright_title.'</h4><span>'.$footer_copyright_content.'</span></div>';
						echo '<div class="footer-cols"><h4>'.$footer_contact_title.'</h4><span>' . $footer_contact_content.'</span></div>';
						echo '<div class="footer-cols"><h4>'.$footer_privacy.'</h4><h4>' . $footer_terms.'</h4></div>';
						echo '<div class="footer-cols"><h4>'.$footer_follow.'</h4></div>';
				                  ?>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
