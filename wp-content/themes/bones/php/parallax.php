  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div>


  <div class="parallax">

    <!-- HOME SLIDER -->
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- BASE LAYER-->
        <div class="gamut-defined-wrapper bg-i h-slider-pic" style="background-image: url('<?php bloginfo('url'); ?>/img/gamut_slide4.png');"></div>
      </div>
    </div>



    <!-- GAMUT DEFINED -->
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- BASE LAYER-->
        <div class="home-wrap">
          <h1><?php echo $gamut_defined_title ?></h1>
          <div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <!-- BACKGROUND-LAYER -->
        <div class="clearfix gamut-defined-wrapper bg-i h-slider-pic" style="background-image: url('<?php echo $bg_img['url'] ?>');"></div>
      </div>
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
      </div>

      <div class="parallax__layer parallax__layer--base">
        <!-- BASE LAYER -->
      </div>
      <div class="parallax__layer parallax__layer--back">
        <!-- BACKGROUND LAYER -->
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <!-- DEEP LAYER -->
      </div>
    </div>




    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- <div class="title">Foreground Layer 5</div> -->

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
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 5</div>
      </div>
    </div>

    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back para-grey">
        <div class="title">Background Layer 6</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 6</div>
      </div>

    </div>

    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 7</div>
      </div>
    </div>

  </div>

  <script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
  </script>