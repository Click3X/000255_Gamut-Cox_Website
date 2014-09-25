<div class="debug">
    <label><input type="checkbox"> Debug</label>
</div>
<div class="parallax">


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


    <div id="group2" class="parallax__group">
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

    </div>


    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">Foreground Layer</div>
        <div class="clearfix grey-bg txt-holder">
          <h1><?php echo $gamut_difference_title; ?></h1>
          <div class="difference"><?php echo $gamut_difference_content; ?></div>
          <a href="<?php echo get_permalink(11);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
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
          <div class="clearfix cc-holder c-smart-bg" style="background-image:url('<?php echo $smart_service_image['url']; ?>');">
            <div class="clearfix ccc-holder">
              <div class="clearfix c-smart">
                <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
                <?php echo $smart_service_content; ?>
                <a href="<?php echo get_permalink(61);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
            </div>
          </div>
        <!-- </div> -->

        <div class="clearfix cc-holder c-career-bg" style="background-color:rgb(248,248,239); background-image:url('<?php echo $careers_image['url']; ?>');">
          <div class="clearfix ccc-holder">
            <div class="clearfix c-career">
              <h1><?php echo $careers_title; ?></h1>
              <?php echo $careers_content; ?>
              <a href="<?php echo get_permalink(388);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
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