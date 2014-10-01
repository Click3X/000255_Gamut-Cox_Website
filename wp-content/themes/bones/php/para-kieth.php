
<div id="parallax-kieth" class="parallax-kieth">

  <div id="group1" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      

      <div id="home-slider-holder" class="container clearfix">
      <?php 
        require_once 'Mobile_Detect.php'; 
        $detect = new Mobile_Detect;
      ?>
      
      <?php if ( $detect->isMobile() ) : ?>
          <img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
        <?php  else : ?>
    
          <!-- VIDEO -->
          <video id="video" width="100%" loop autoplay muted>
            
            <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.mp4" type="video/mp4">
            <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.ogv" type="video/ogg">
            <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.webm" type="video/webm">
              
            <img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
          </video>

          <!-- VIDEO CONTROLS -->
          <div id="video-controls">
            <button id="mute" class="stopsound" type="button"></button>
          </div>

      <?php endif; ?>
    </div>


    </div>
  </div>


  <div id="group2" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">

        <div class="clearfix txt-hold-hold title">
          <div class="clearfix txt-holder">
            <h1><?php echo $gamut_defined_title ?></h1>
            <div class="difference">
              <?php echo $gamut_defined_content ?>
            </div>
          </div>
        </div>

    </div>
    <div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $bg_img['url'] ?>');background-size: cover; background-repeat:no-repeat;"></div>
  </div>


  <div id="group3" class="parallax__group">
    <div class="parallax__layer parallax__layer--fore">
      
      <div class="clearfix txt-hold-hold title">
        <div class="clearfix grey-bg txt-holder">
          <h1 id="solutions-title"><?php echo $our_solutions_title ?></h1>
          <div class="difference"><?php echo $our_solutions_content ?></div>
        </div>
      </div>

    </div>
    <div class="parallax__layer parallax__layer--base"></div>
  </div>



  <div id="group4" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      <!-- PROGRAMMATIC -->
       <div class="clearfix subpage-wrap">
        <div class="clearfix subpage">
          <div class="p-holder">
            <?php echo $programmatic_intro_content; ?>
          </div>
          <div class="clearfix half blue">
            <a href="<?php echo get_permalink(11);?>" class="gamut-btn abs-center" id="home-btn-pro">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-pro-arrow"></span></a>
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
            <a href="<?php echo get_permalink(15);?>" class="gamut-btn abs-center" id="home-btn-rep">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rep-arrow"></span></a>

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
<!--               <a href="<?php echo get_permalink(24);?>" class="gamut-btn abs-center" id="home-btn-rea">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rea-arrow"></span></a> -->
              <a href="<?php echo get_permalink(24);?>"><button class="home-btn-test">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rea-arrow"></span></button></a>
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
            <a href="<?php echo get_permalink(13);?>" class="gamut-btn abs-center" id="home-btn-cro">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-cro-arrow"></span></a>
          </div>
          <div class="clearfix half red">
            <img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
            <div id="fly-it-4" class="bg-img crossmedia"></div>
          </div>
        </div>
      </div>



    </div>
    <div class="parallax__layer parallax__layer--back"></div>
    <div class="parallax__layer parallax__layer--deep"></div>
  </div>



  
  <div id="group5" class="parallax__group">
    <div class="parallax__layer parallax__layer--fore">
      <div class="clearfix txt-hold-hold title">
        <div class="clearfix grey-bg txt-holder">
          <h1><?php echo $gamut_difference_title; ?></h1>
          <div class="difference"><?php echo $gamut_difference_content; ?></div>
          <a href="<?php echo get_permalink(184);?>" class="gamut-btn" id="home-btn-difference">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-difference-arrow" style="border-left: 6px solid #ed228b;"></span></a>
        </div>
      </div>

    </div>
    <div class="parallax__layer parallax__layer--base"></div>
  </div>


  <!-- CAREER AND SMART SERVICE -->
  <div id="group6" class="parallax__group">
    
    <div class="parallax__layer parallax__layer--back no-vis">
      <!-- SERVICES -->
      <div class="clearfix ss-bg-holder">
        <div id="smart-service-bg" class="smart-service-bag" style="background-image:url('<?php echo $smart_service_image['sizes']['para-bg']; ?>');"></div>
      </div>

      <!-- CAREERS -->
      <div class="clearfix new-b"></div>
      <div class="clearfix cc-bg-holder">
        <div id="careers-bg" class="careers-bag" style="background-image:url('<?php echo $careers_image['sizes']['para-bg']; ?>');"></div>
      </div>


    </div>

    <div class="parallax__layer parallax__layer--base">
      <div id="ss-bg-mobile" class="clearfix ss-bg-mobile c-mobile" style="background-image:url('<?php echo $smart_service_image['sizes']['para-bg']; ?>');"></div>

      <div class="clearfix ccc-holder">
        <div class="clearfix c-smart">
          <div class="clearfix h1-hold">
            <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
            <?php echo $smart_service_content; ?>
            <div class="clearfix c-btn-hold">
              <a href="<?php echo get_permalink(61);?>" class="gamut-btn" id="home-btn-service">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-service-arrow" style="border-left: 6px solid #ed228b;"></span></a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>


  <div id="group7" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      <div id="cc-bg-mobile" class="clearfix ss-bg-mobile c-mobile" style="background-image:url('<?php echo $careers_image['sizes']['para-bg']; ?>');"></div>
      
      <div class="clearfix ccc-holder">
        <div class="clearfix c-career">
          <div class="clearfix h1-hold">
            <h1><?php echo $careers_title; ?></h1>
            <?php echo $careers_content; ?>
            <div class="clearfix c-btn-hold">
              <a href="<?php echo get_permalink(388);?>" class="gamut-btn" id="home-btn-careers">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-careers-arrow" style="border-left: 6px solid #ed228b;"></span></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>