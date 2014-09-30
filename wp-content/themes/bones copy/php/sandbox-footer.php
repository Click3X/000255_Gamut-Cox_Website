<div style="clear: both"></div>

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

        // CAREERS BUTTON
        $careers = get_field('careers', 'options');

        // LOGO AND SOCIAL LINKS
        echo '<div class="logo-social clearfix">';
          echo '<div class="footer-links-content wrap cf">';
          
          // SOCIAL MEDIA LINKS
            if(get_field('social_media_links', 'options')):

            echo '<ul class="social-media-links">';
              while(has_sub_field('social_media_links', 'options')): 
                $socialTitle = cleanString(get_sub_field('title'));
                $sub_title = get_sub_field('title');
                if ($sub_title == 'Google Plus') { ?>
                <li class="social">
                  <a href="<?php echo get_sub_field('link'); ?>" target="_blank" rel="publisher" title="<?php echo get_sub_field('title');?>" class="<?php echo $socialTitle; ?>">
                  </a>
                </li>
                <?php } else { ?>
                <li class="social">
                  <a href="<?php echo get_sub_field('link'); ?>" target="_blank" title="<?php echo get_sub_field('title');?>" class="<?php echo $socialTitle; ?>">
                  </a>
                </li>
                <?php } ?>
              <?php endwhile;
            echo '</ul>';
          endif; 


          if($careers) {
            echo '<ul class="client-info career-button"><li><a href="'.$careers.'" id="careers-link">Careers&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #eb0a8e;"></span></a></li></ul>';
          }

          echo '</div>'; // .wrap
          echo '</div>';

          // CONTACT LINKS
          echo '<div class="footer-links">';
              echo '<div class="footer-links-content cf">';


                // LEFT COLUMN CONTAINER
                echo '<div class="footer-left-column">'; 
                  // HEADQUARTERS
                  echo '<div class="headquarters-container">'; 
                  // LOCATIONS - CITY & ADDRESS
                if(get_field('locations', 'options')): ?>

                  <?php 
                  echo '<div class="headquarters-wrapper">'; 
                    $headquarters = get_field('headquarters', 'options');
                    echo '<span class="headline city">' . $headquarters . '</span>';

                    // EACH LOCATION ('City-Address combo') GETS ITS OWN UL
                    while(has_sub_field('locations', 'options')): ?>
                    <ul class="client-info location">
                      
                      <li class="copy address headquarter-title"><?php echo get_sub_field('city'); ?></li>
                      <li class="copy address"><?php echo get_sub_field('address'); ?></li>
                    </ul>
                    <?php endwhile; ?>

                    <?php 
                    endif; 
                  echo '</div>';

                echo '</div>';

                // CONTACT LOCAL OFFICES                    
                $footer_contact = get_field('footer_contact', 'options');
                echo '<div class="footer-contact-wrapper"><a class="footer-contact-link" href="?page_id=9"><div class="footer-contact-container headline">' . $footer_contact . '&nbsp;&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid white"></span></div></a></div>'; 


            echo '</div>'; ?>


            <?php echo '<div class="other-businesses-container">';


            if(get_field('other_businesses_list', 'options')): 
              $other_businesses = get_field('other_businesses', 'options'); ?>
              <span class="headline city"><?php echo $other_businesses ?></span>
              <ul>
                
              <?php // EACH LOCATION ('City-Address combo') GETS ITS OWN UL
                while(has_sub_field('other_businesses_list', 'options')): 
                $sub_title = get_sub_field('title');
                if ($sub_title == 'Cox Enterprises') { ?>
                <li class="copy address other-businesses-content"><a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('title'); ?></a></li>
                <?php } else { ?>
                <li class="copy address other-businesses-content"><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a></li>
                <?php } ?>
              <?php endwhile; ?>

              </ul>

            <?php 
            endif;

            echo '</div>'; ?>
            
            <div class="iab_logo_container">
              <a href="http://www.iab.net/about_the_iab/recent_press_releases/press_release_archive/press_release/pr-051314?gko=96140" target="blank" class="iab_logo">
                <img src="<?php bloginfo('url'); ?>/img/iab_logo.png" alt="iab logo">
              </a>
            </div>        

          <?php echo '</div>'; // .wrap

        echo '</div>';

        echo '<div class="footer-bottom footer-links-content">';

          // POLICY LINKS - 
          if(get_field('policy_links', 'options')): ?>
            
              
            <ul class="client-info policy-links">
              
            <?php // EACH LOCATION ('City-Address combo') GETS ITS OWN UL
              while(has_sub_field('policy_links', 'options')): ?>
              <?php //if () ?>
              <li class="copy link"><a class="policy-links" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a></li>
            <?php endwhile; ?>

            </ul>

          <?php 
          endif;

          $copyright = get_field('copyright', 'options');
          echo '<div class="copyright">' . $copyright . '</div>';

        echo '</div>';

      // RESET POST DATA ONE MORE TIME FOR GOOD MEASURE
      wp_reset_postdata();
      // END FOOTER OPTIONS CODE
    ?>

  </div>

</footer>