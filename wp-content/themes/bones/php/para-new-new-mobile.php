<!-- <div class="debug">
  <label><input type="checkbox"> Debug</label>
</div> -->
<div class="parallax">


  <div id="group1" class="parallax__group">
    
    <div class="parallax__layer parallax__layer--base">
      <!-- <div class="title">Base Layer</div> -->
      <!-- <div id="home-slider-holder" class="container clearfix">
        <ul id="marquee-slider" class="royalSlider contentSlider rsDefault js-show">
          <?php
          foreach ($images as $key => $image) { ?>
            <li class="marquee-slide" style="background-image:url('<?php echo $image;?>');"></li>
          <?php 
            }
          ?>
        </ul>
      </div> -->

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

          <img src="<?php echo $images[0]; ?>" width="100%"/>
          <?php  else : ?>
<!--           <img src="<?php echo $images[0]; ?>" width="100%"/> -->
          <video width="100%" style="width:100%; height:auto;" loop autoplay muted>
            <!-- poster="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_h264.png" -->
            
            <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.mp4" type="video/mp4">
            <source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.ogv" type="video/ogg">
            
            <img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
          </video>
        <?php endif; ?>
      </div>

      

    </div>

  </div>


  <div id="group2" class="parallax__group" style="background-image: url('<?php echo $bg_img['url'] ?>');">
    <div class="parallax__layer parallax__layer--base">
      <!-- <div class="title">Base Layer</div> -->


      <div class="txt-holder-holder">
        <div class="clearfix txt-holder">
          <h1><?php echo $gamut_defined_title ?></h1>
          <div class="difference">
            <?php echo $gamut_defined_content ?>
          </div>
        </div>
      </div>


    </div>
    <div class="parallax__layer parallax__layer--deep"  style="background-image: url('<?php echo $bg_img['url'] ?>');">
      <!-- <div class="title">Background Layer</div> -->
    </div>
  </div>


  <!-- GREY -->
  <div id="group3" class="parallax__group">
    <div class="parallax__layer parallax__layer--fore">
      <!-- <div class="title">Foreground Layer</div> -->
      <div class="clearfix grey-bg txt-holder">
        <h1><?php echo $our_solutions_title ?></h1>
        <div class="difference"><?php echo $our_solutions_content ?></div>
      </div>
    </div>
    <div class="parallax__layer parallax__layer--base" style="background-color:rgb(61,61,61);">
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
                <a href="<?php echo get_permalink(11);?>" class="gamut-btn abs-center" id="home-btn-pro">LEARN HOW&nbsp;&nbsp;<span id="home-btn-pro-arrow" class="arrow-right"></span></a>
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
                <a href="<?php echo get_permalink(15);?>" class="gamut-btn abs-center" id="home-btn-rep">LEARN HOW&nbsp;&nbsp;<span id="home-btn-rep-arrow" class="arrow-right"></span></a>
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
                <a href="<?php echo get_permalink(24);?>" class="gamut-btn abs-center" id="home-btn-rea">LEARN HOW&nbsp;&nbsp;<span id="home-btn-rea-arrow" class="arrow-right"></span></a>
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
              <a href="<?php echo get_permalink(13);?>" class="gamut-btn abs-center" id="home-btn-cro">LEARN HOW&nbsp;&nbsp;<span id="home-btn-cro-arrow" class="arrow-right"></span></a>
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

  </div>



  <div id="group5" class="parallax__group">
    <div class="parallax__layer parallax__layer--fore">
      <!-- <div class="title">Foreground Layer</div> -->
      <div class="clearfix grey-bg txt-holder">
        <h1><?php echo $gamut_difference_title; ?></h1>
        <div class="difference"><?php echo $gamut_difference_content; ?></div>
        <a href="<?php echo get_permalink(184);?>" class="gamut-btn" id="home-btn-difference">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-difference-arrow" style="border-left: 6px solid #ed228b;"></span></a>
      </div>
    </div>
    <div class="parallax__layer parallax__layer--base" style="background-color:rgb(61,61,61);">
      <!-- <div class="title">Base Layer</div> -->
    </div>
  </div>


  <!-- CAREERS AND SMART -->
  <div id="group6" class="parallax__group">
<!--       <?php echo $careers_image['url'];?> -->
    <div class="parallax__layer parallax__layer--back">
      <!-- <div class="title">Background Layer</div> -->
    </div>

    <div class="parallax__layer parallax__layer--base">
      <!-- <div class="title">Base Layer</div> -->

      <!-- <div class="clearfix cs-holder"> -->
        <div class="clearfix cc-holder c-smart-bg c-bg-mobile" style="background-image:url('<?php echo $smart_service_image['url']; ?>');"></div>
        <div class="clearfix cc-holder c-smart-bg" style="background-image:url('<?php echo $smart_service_image['sizes']['para-bg']; ?>');">
          <div class="clearfix ccc-holder">
            <div class="clearfix c-smart">
              <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
              <?php echo $smart_service_content; ?>
              <a href="<?php echo get_permalink(61);?>" class="gamut-btn" id="home-btn-service">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-service-arrow" style="border-left: 6px solid #ed228b;"></span></a>
            </div>
          </div>
        </div>
      <!-- </div> -->

      <div class="clearfix cc-holder c-career-bg c-bg-mobile" style="background-image:url('<?php echo $careers_image['sizes']['para-bg']; ?>');"></div>
      <div class="clearfix cc-holder c-career-bg" style="background-color:rgb(248,248,239); background-image:url('<?php echo $careers_image['url']; ?>');">
        <div class="clearfix ccc-holder">
          <div class="clearfix c-career">
            <h1><?php echo $careers_title; ?></h1>
            <?php echo $careers_content; ?>
            <a href="<?php echo get_permalink(388);?>" class="gamut-btn" id="home-btn-careers">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-careers-arrow" style="border-left: 6px solid #ed228b;"></span></a>
          </div>
        </div>
      </div>


    </div>

  </div>

  <div id="group7" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      <!-- <div class="title">Base Layer</div> -->
    <!-- </div>
  </div>
</div> -->