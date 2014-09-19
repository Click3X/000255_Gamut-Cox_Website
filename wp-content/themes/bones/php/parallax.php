  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div>

  <div class="parallax">

    <!-- PARALLAX CAROUSEL -->
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 1</div>
        
        <!-- CHARLES NEW SLIDER ROYAL SLIDER -->
        <div id="parallax-slider" class="parallax-slider royalSlider rsDefault">
          <?php
            foreach ($images as $key => $image) {
              // echo '<div class="parallax-slide rsSlide">';
              echo '<img class="rsImg" src="'.$image.'" alt="slide">';
              // echo '</div>';
            }
          ?>
        </div><!--  END SLIDER -->


      </div>
    </div>


    <!-- DEFINED -->
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 2</div>
        <div class="clearfix wrap-holder defined-txt">
          <div class="new-home-wrap abs-center">
            <h1><?php echo $gamut_defined_title ?></h1>
            <div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
          </div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--back back outside"  style="background-image: url('<?php echo $bg_img['url'] ?>');">
        <div class="title">Background Layer 2</div>
      </div>
    </div>



    <!-- OUR SOLUTIONS -->
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">Foreground Layer 3</div>

        <div class="clearfix wrap-holder outlines">
          <div class="new-home-wrap abs-center white outlines">
            <h1><?php echo $our_solutions_title ?></h1>
            <div class="difference outlines">
              <?php echo $our_solutions_content ?>
            </div>
            <a href="#" class="gamut-btn diff outlines">LEARN MORE&nbsp;&nbsp;<span class="arrow-right outlines" style="border-left: 6px solid #dd1420;"></span></a>
          </div>
        </div>

      </div>
      <div class="parallax__layer parallax__layer--base grey-bg">
        <div class="title">Base Layer 3</div>
      </div>
    </div>


    <!-- SUB PAGES -->
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 4</div>
        <!-- Programmatic -->
          <div class="subpage-wrapper-c clearfix">
            <div class="clearfix subpage-holder">
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
          </div>



          <!-- Reps -->
          <div class="subpage-wrapper-c clearfix">
            <div class="clearfix subpage-holder">
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

      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title">Background Layer 4</div>
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <div class="title">Deep Background Layer 4</div>
      </div>
    </div>


    <!-- SUB PAGES 2 -->
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">Foreground Layer 5</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 5</div>
        <!-- Reach -->

          <div class="subpage-wrapper-c clearfix">
            <div class="clearfix subpage-holder">
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
          </div>


          <!-- Cross Media -->
          <div class="subpage-wrapper-c clearfix">
            <div class="clearfix subpage-holder">
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
    </div>


    <!-- DIFFERENCE -->
    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back grey-bg">
        <div class="title">Background Layer 6</div>
          <div class="clearfix wrap-holder">
            <div class="new-home-wrap abs-center white">
            <h1><?php echo $gamut_difference_title ?></h1>
            <div class="difference"><?php echo $gamut_difference_content ?></div>
            <a href="#" class="gamut-btn diff">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
          </div>
        </div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer 6</div>
      </div>
    </div>


    <!-- DUDE MOUNTAIN -->
    <div id="group7" class="parallax__group">
      <!-- COPY -->
      <div class="parallax__layer parallax__layer--fore">

        <div class="new-smart-copy">
          <div class="new-copy-holder">
            <div class="clearfix">
              <img src="<?php bloginfo('url'); ?>/img/plus-sign.png" alt="plus">
              <h1> <?php echo $smart_service_title ?></h1>
            </div>
            <?php echo $smart_service_content ?>
          </div>
        </div>
        
        <div class="new-c-copy">
          <div class="clearfix">
            <h1><?php echo $careers_title ?></h1>
            <?php echo $careers_content ?>
          </div>
        </div>

        <div class="title">Foreground Layer 7</div>
      </div>
      
      <!-- BACKGROUND-IMGS -->
      <div class="parallax__layer parallax__layer--base">
        <div class="back dude" style="background-image:url('<?php echo $careers_image['url'];?>');"></div>
        <div class="beige"></div>
        <div class="back mtn" style="background-image:url('<?php echo $smart_service_image['url'];?>');"></div>
        <div class="title">Base Layer 7</div>
      </div>

    </div>

  </div>

  <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
  </script>