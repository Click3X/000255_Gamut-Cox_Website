<?php // PARA TUES ?>

<div class="debug">
    <label><input type="checkbox"> Debug</label>
</div>

<div class="parallax">



    <!-- SLIDER -->
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer</div> -->
        <div id="home-slider-holder" class="container clearfix">
          <ul id="marquee-slider" class="royalSlider contentSlider rsDefault js-show">
            <?php
            foreach ($images as $key => $image) { ?>
              <li class="marquee-slide" style="background-image:url('<?php echo $image;?>');"></li>
            <?php 
              }
            ?>
          </ul>
        </div>

      </div>
    </div>




    <!-- BG -->
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">
          <!-- Base Layer -->
          <!-- <h1>Grey Definition</h1>
          <p>The source of all wisdom comes from letting go and letting god.</p> -->
          <div class="new-home-wrap">
            <h1><?php echo $our_solutions_title ?></h1>
            <div class="difference">
              <?php echo $our_solutions_content ?>
            </div>
            <a href="#" class="gamut-btn diff">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
          </div>

        </div>
      </div>
      <div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $bg_img['url'] ?>');">
        <div class="title">Background Layer</div>
      </div>
    </div>




    <!-- GREY -->
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">
          <!-- Foreground Layer -->
          <!-- <h1>Things aren't always as they seem</h1>
          <p>However, often times they are exactly what they seem to be. Experience is crucial to getting it right.</p> -->
          <div class="new-home-wrap abs-center white">
            <h1><?php echo $gamut_defined_title ?></h1>
            <div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
          </div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>






    <!-- BIZ CONTAINERS -->
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title">
          <!-- Background Layer -->

          <!-- PROGRAMMATIC -->
          <div class="clearfix subpage">
              <div class="p-holder">
                <p class="p"><?php echo $programmatic_intro_content; ?></p>
              </div>
              <div class="half blue">
                <a href="#" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
              <div class="half red">
                <img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png" alt="programmatic">
                <div id="fly-it" class="bg-img programmatic"></div>
              </div>
          </div>


          <!-- REPS -->
          <div class="clearfix subpage">
            <div class="p-holder">
                <p class="p"><?php echo $reps_intro_content; ?></p>
              </div>
              <div class="half blue">
                <a href="#" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
              <div class="half red">
                <img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
                <div id="fly-it-2" class="bg-img reps"></div>
              </div>
          </div>

          <!-- REACH -->
          <div class="clearfix subpage">
            <div class="p-holder">
                <p class="p"><?php echo $reach_intro_content; ?></p>
              </div>
              <div class="half blue">
                <a href="#" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
              <div class="half red">
                <img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
                <div id="fly-it-3" class="bg-img reach"></div>
              </div>
          </div>


          <!-- CROSSMEDIA -->
          <div class="clearfix subpage">
            <div class="p-holder">
                <p class="p"><?php echo $convergence_intro_content; ?></p>
              </div>
              <div class="half blue">
                <a href="#" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
              <div class="half red">
                <img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
                <div id="fly-it-4" class="bg-img crossmedia"></div>
              </div>
          </div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <div class="title">Deep Background Layer</div>
      </div>
    </div>



    <!-- GROUP 5 - DIFFERENCE -->
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">
          <!-- Foreground Layer -->
          <div class="new-home-wrap abs-center white">
            <h1><?php echo $gamut_difference_title ?></h1>
            <div class="difference"><?php echo $gamut_difference_content ?></div>
          </div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>



    <!-- SMART HOLDER -->
    <div id="group6" class="parallax__group">
      <!-- <div class="parallax__layer parallax__layer--back"> -->
      <div class="parallax__layer parallax__layer--deep no-vis">
        <div class="title">Deep Background Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <!-- <div class="title">Deep Background Layer</div> -->
        <div class="smart">
            <div class="clearfix">
              <!-- <h1 class="smart-replace" style="background-image:url('<?php echo bloginfo('url'); ?>/img/smart-service.png');"><span><?php echo $smart_service_title ?></span></h1> -->
              <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
            </div>
            <?php echo $smart_service_content; ?>
          </div>
      </div>
    </div>

    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>


    <div id="group8" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
  

  