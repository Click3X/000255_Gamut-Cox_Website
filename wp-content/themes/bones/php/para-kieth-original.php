<!-- 
  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div> -->

  <div id="parallax-kieth" class="parallax-kieth">


    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        
        <!-- <div class="title">Base Layer</div> -->

        <div id="home-slider-holder" class="container clearfix">
        <!-- <ul id="marquee-slider" class="royalSlider contentSlider rsDefault js-show">
          <?php
          foreach ($images as $key => $image) { ?>
            <li class="marquee-slide" style="background-image:url('<?php echo $image;?>');"></li>
          <?php 
            }
          ?>
        </ul> -->
        <?php 
          require_once 'Mobile_Detect.php'; 
          $detect = new Mobile_Detect;
        ?>
        <?php if ( $detect->isMobile() ) : ?>
        <img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
        <?php else : ?>
        <video width="100%" loop autoplay muted>
          <!-- poster="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_h264.png" -->
          <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_h264.mp4" type="video/mp4">
          <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_h264.ogv" type="video/ogg">
          <img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
        </video>
        <?php endif; ?>
      </div>


      </div>
    </div>


    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->

          <div class="clearfix txt-hold-hold title">
            <div class="clearfix txt-holder">
              <h1><?php echo $gamut_defined_title ?></h1>
              <div class="difference">
                <?php echo $gamut_defined_content ?>
              </div>
            </div>
          </div>

      </div>
      <div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $bg_img['url'] ?>');background-size: cover; background-repeat:no-repeat;">
        <!-- <div class="title">Background Layer</div> -->
      </div>
    </div>


    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- <div class="title">Foreground Layer</div> -->
        
        <div class="clearfix txt-hold-hold title">
          <div class="clearfix grey-bg txt-holder">
            <h1 id="solutions-title"><?php echo $our_solutions_title ?></h1>
            <div class="difference"><?php echo $our_solutions_content ?></div>
          </div>
        </div>

      </div>
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
      </div>
    </div>



    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
        <!-- PROGRAMMATIC -->
         <div class="clearfix subpage-wrap">
          <div class="clearfix subpage">
            <div class="p-holder">
              <?php echo $programmatic_intro_content; ?>
            </div>
            <div class="clearfix half blue">
              <a href="<?php echo get_permalink(11);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
            <div class="clearfix half red">
              <img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png" alt="programmatic">
              <div id="fly-it" class="bg-img programmatic"></div>
            </div>
          </div>
        </div>

          <!-- REPS -->
         <div class="clearfix subpage-wrap">
          <div class="clearfix subpage">
            <div class="p-holder">
                <?php echo $reps_intro_content; ?>
              </div>
              <div class="clearfix half blue">
                <a href="<?php echo get_permalink(15);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #039fd3;"></span></a>
              </div>
              <div class="clearfix half red">
                <img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
                <div id="fly-it-2" class="bg-img reps"></div>
              </div>
          </div>
        </div>

          <!-- REACH -->
         <div class="clearfix subpage-wrap">
          <div class="clearfix subpage">
            <div class="p-holder">
                <?php echo $reach_intro_content; ?>
              </div>
              <div class="clearfix half blue">
                <a href="<?php echo get_permalink(24);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #8fc73e;"></span></a>
              </div>
              <div class="clearfix half red">
                <img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
                <div id="fly-it-3" class="bg-img reach"></div>
              </div>
          </div>
        </div>

          <!-- CROSSMEDIA -->
         <div class="clearfix subpage-wrap">
          <div class="clearfix subpage">
            <div class="p-holder">
                <?php echo $convergence_intro_content; ?>
            </div>
            <div class="clearfix half blue">
              <a href="<?php echo get_permalink(13);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #fba211;"></span></a>
            </div>
            <div class="clearfix half red">
              <img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
              <div id="fly-it-4" class="bg-img crossmedia"></div>
            </div>
          </div>
        </div>



      </div>
      <div class="parallax__layer parallax__layer--back">
        <!-- <div class="title">Background Layer</div> -->
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <!-- <div class="title">Deep Background Layer</div> -->
      </div>
    </div>



    
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- <div class="title">Foreground Layer</div> -->
        <div class="clearfix txt-hold-hold title">
          <div class="clearfix grey-bg txt-holder">
            <h1><?php echo $gamut_difference_title; ?></h1>
            <div class="difference"><?php echo $gamut_difference_content; ?></div>
            <a href="<?php echo get_permalink(184);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
          </div>
        </div>

      </div>
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
      </div>
    </div>


    <!-- CAREER AND SMART SERVICE -->
    <div id="group6" class="parallax__group">

      <div class="parallax__layer parallax__layer--back no-vis">
        <!-- SERVICES -->
        <div id="smart-service-bg" class="smart-service-bag" style="background-image:url('<?php echo $smart_service_image['url']; ?>');"></div>
        <!-- CAREERS -->
        <div class="clearfix new-b"></div>
        
        <div id="careers-bg" class="careers-bag" style="background-image:url('<?php echo $careers_image['url']; ?>');"></div>
      
      </div>

      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
        <div class="clearfix ccc-holder">
          <div class="clearfix c-smart">
            <div class="clearfix h1-hold">
              <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
              <?php echo $smart_service_content; ?>
              <div class="clearfix c-btn-hold">
                <a href="<?php echo get_permalink(61);?>" class="gamut-btn">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>


    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
        <div class="clearfix ccc-holder">
          <div class="clearfix c-career">
            <div class="clearfix h1-hold">
              <h1><?php echo $careers_title; ?></h1>
              <?php echo $careers_content; ?>
              <div class="clearfix c-btn-hold">
                <a href="<?php echo get_permalink(388);?>" class="gamut-btn">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  <!-- </div> END PARALLAX CONTAINER -->