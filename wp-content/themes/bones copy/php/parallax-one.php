  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div>


  <div class="parallax">

    <!-- HOME SLIDER -->
    <div id="group1" class="parallax__group">
      <!-- BASE LAYER -->
      <!-- <div class="parallax__layer parallax__layer--base f-slider" style="background-image: url('<?php bloginfo('url'); ?>/img/gamut_slide4.png');"></div> -->
      <div class="clearfix home-slide-holder">
        <div id="homeSliderContainer">
          <div id="home-slider">
            <div id="bg">
              <img src=""/>
            </div>
            <div id="fg">
              <img src="<?php bloginfo('url'); ?>/img/fg-long-copy2.png" alt="slide">
            </div> 
          </div>
        </div>
      </div>
    </div>



    <!-- GAMUT DEFINED -->
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- BASE LAYER-->
        <div class="home-wrap">
          <h1><?php echo $gamut_defined_title ?></h1>
          <div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
        </div>
      </div>

    <!-- BACKGROUND-LAYER -->
      <div class="parallax__layer parallax__layer--back def" style="background-image: url('<?php echo $bg_img['url'] ?>');"></div>
    </div>



    <!-- OUR SOLUTIONS -->
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- FOREGROUND LAYER -->
        <div class="home-wrap white">
          <h1><?php echo $our_solutions_title ?></h1>
          <div style="margin-left: 9%"><?php echo $our_solutions_content ?></div>
        </div>
      </div>
      <!-- BASE LAYER -->
      <div class="parallax__layer parallax__layer--base para-grey"></div>
    </div>



    <!-- BIZ SUB PAGES -->
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- FOREGROUND LAYER -->
        <!-- Programmatic -->
          <div class="subpage-wrapper clearfix">
            <div class="p-holder">
              <p class="p"><?php echo $programmatic_intro_content; ?></p>
            </div>
            <div class="half blue">
              <a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
            <div class="half red">
              <img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png" alt="programmatic">
              <div id="fly-it" class="bg-img programmatic"></div>
            </div>
          </div>



          <!-- Reps -->
          <div class="subpage-wrapper clearfix">
            <div class="p-holder">
              <p class="p"><?php echo $reps_intro_content; ?></p>
            </div>
            <div class="half blue">
              <a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
            <div class="half red">
              <img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
              <div id="fly-it-2" class="bg-img reps"></div>
            </div>
          </div>

          <!-- Reach -->
          <div class="subpage-wrapper clearfix">
            <div class="p-holder">
              <p class="p"><?php echo $reach_intro_content; ?></p>
            </div>
            <div class="half blue">
              <a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
            <div class="half red">
              <img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
              <div id="fly-it-3" class="bg-img reach"></div>
            </div>
          </div>


          <!-- Cross Media -->
          <div class="subpage-wrapper clearfix">
            <div class="p-holder">
              <p class="p"><?php echo $convergence_intro_content; ?></p>
            </div>
            <div class="half blue">
              <a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
            <div class="half red">
              <img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
              <div id="fly-it-4" class="bg-img crossmedia"></div>
            </div>
          </div>
      </div>


    </div>



    <!-- DIFFERENCE -->
    <div id="group6" class="parallax__group half-vh">
       <div class="parallax__layer parallax__layer--base para-grey">
        <!-- BASE LAYER -->
        <div class="home-wrap white white-bg">
          <h1><?php echo $gamut_difference_title ?></h1>
          <div class="difference"><?php echo $gamut_difference_content ?></div>
          <a href="#" class="gamut-btn diff">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
        </div>
      </div>
    </div>




    <!-- DUDE -->
    <div id="group8" class="parallax__group half-vh">
      <!-- BASE LAYER -->
      
      <div class="parallax__layer parallax__layer--fore  dude" style="background-color:#fff; background-image:url('<?php echo $careers_image['url'];?>');">
        <!-- FOREGROUND LAYER -->
        <div class="smart-copy">
          <!-- BASE LAYER -->
          <div class="copy-holder">
            <div class="clearfix copy-c">
              <div class="clearfix">
                <img src="<?php bloginfo('url'); ?>/img/plus-sign.png" alt="plus">
                <h1> <?php echo $smart_service_title ?></h1>
              </div>
            </div>
            <?php echo $smart_service_content ?>
          </div>
        </div>
      </div>
    </div>


    <!-- MOUNTAIN -->
    <!-- DUDE -->
    <div id="group9" class="parallax__group half-vh">
      <!-- BASE LAYER -->
      <div class="parallax__layer parallax__layer--fore mountain" style="background-color: #f8f8ef; background-image:url('<?php echo $smart_service_image['url'];?>');">
        <!-- FOREGROUND LAYER -->
        <div class="clearfix careers-wrapper">
          <div class="career-copy-c">
            <div class="c-hold">
              <h1> <?php echo $careers_title ?></h1>
              <?php echo $careers_content ?>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>  <!-- END PARALLAX HOLDER -->

  <script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
  </script>