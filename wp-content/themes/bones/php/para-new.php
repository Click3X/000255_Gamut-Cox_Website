  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div>

  <div class="new-c parallax">

<!-- SLIDER -->    
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        
        <div class="title">
          <span>Base Layer 1</span>
        </div>
        
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
        <div class="title">
          <span>Base Layer 2</span>

            <div class="clearfix txt-holder">
              <h1><?php echo $gamut_defined_title ?></h1>
              <div class="difference">
                <?php echo $gamut_defined_content ?>
              </div>
            </div>

        </div>
      </div>
      <div class="parallax__layer parallax__layer--back bg c-desk" style="background-image: url('<?php echo $bg_img['url'] ?>');">
        <div class="title">Background Layer 2</div>
      </div>
    </div>



<!-- GREY -->
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore c-desk">
        <div class="title">Foreground Layer 3</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title" style="background-color:rgb(61,61,61);">
          <span>Base Layer 3</span>

          <div class="clearfix grey-bg txt-holder">
            <h1><?php echo $our_solutions_title ?></h1>
            <div class="difference"><?php echo $our_solutions_content ?></div>
          </div>

        </div>
      </div>
    </div>



<!-- BIZ CONTAINER -->
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">
          <span>Base Layer 4</span>
           
            <!-- PROGRAMMATIC -->
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


            <!-- REPS -->
            <div class="clearfix subpage">
              <div class="p-holder">
                  <?php echo $reps_intro_content; ?>
                </div>
                <div class="clearfix half blue">
                  <a href="<?php echo get_permalink(15);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
                </div>
                <div class="clearfix half red">
                  <img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
                  <div id="fly-it-2" class="bg-img reps"></div>
                </div>
            </div>

            <!-- REACH -->
            <div class="clearfix subpage">
              <div class="p-holder">
                  <?php echo $reach_intro_content; ?>
                </div>
                <div class="clearfix half blue">
                  <a href="<?php echo get_permalink(24);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
                </div>
                <div class="clearfix half red">
                  <img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
                  <div id="fly-it-3" class="bg-img reach"></div>
                </div>
            </div>


            <!-- CROSSMEDIA -->
            <div class="clearfix subpage">
              <div class="p-holder">
                  <?php echo $convergence_intro_content; ?>
              </div>
              <div class="clearfix half blue">
                <a href="<?php echo get_permalink(13);?>" class="gamut-btn abs-center">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
              <div class="clearfix half red">
                <img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
                <div id="fly-it-4" class="bg-img crossmedia"></div>
              </div>
            </div>

        </div>
      </div>
      <div class="parallax__layer parallax__layer--back c-desk">
        <div class="title">Background Layer 4</div>
      </div>

    </div>


<!-- GROUP 5 - DIFFERENCE -->
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title" style="background-color:rgb(61,61,61);">
          <span>Base Layer 5</span>

          <!-- <div class="new-home-wrap abs-center white"> -->
          <div class="clearfix grey-bg txt-holder">
            <h1><?php echo $gamut_difference_title; ?></h1>
            <div class="difference"><?php echo $gamut_difference_content; ?></div>
            <div class="clearfix">
              <a href="<?php echo get_permalink(11);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
            </div>
          </div>

        </div>
      </div>
    </div>

<!-- SMART HOLDER & CAREER HOLDER -->
    <div id="group6" class="parallax__group">
      <!-- BACKGROUND -->      
      <div class="parallax__layer parallax__layer--back" style="background-color:#ffffff; background-image:url('<?php echo $careers_image['url'];?>'); background-size:50%; background-repeat:no-repeat;">
        <!-- <div class="title">Background Layer 6</div> -->
        <div class="title">
          <div class="clearfix cs-holder">
            <span>Base Layer 6</span>
            
            <div class="clearfix cc-holder">
              <div class="clearfix c-smart">
                <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
                <?php echo $smart_service_content; ?>
                <a href="<?php echo get_permalink(61);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
            </div>
            <!-- MOBILE DIV -->
            <div class="bg career-bg c-mobile" style="background-image:url('<?php echo $smart_service_image['url'];?>'); background-size:cover; background-repeat:no-repeat;"></div>
          </div>
          <div class="clearfix cs-holder new">
            <div class="clearfix cc-holder">
              <div class="clearfix c-career">
                <h1><?php echo $careers_title; ?></h1>
                <?php echo $careers_content; ?>
                <a href="<?php echo get_permalink(388);?>" class="gamut-btn">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>

               <!--  <div class="bg career-bg c-desk" style="background-image:url('<?php echo $smart_service_image['url'];?>'); background-size:cover; background-repeat:no-repeat;"></div> -->
               <!-- MOBILE DIV -->
              <!-- <div class="bg career-bg c-mobile" style="background-image:url('<?php echo $careers_image['url'];?>'); background-size:cover; background-repeat:no-repeat;"></div> -->
            </div>

          </div>
        </div>
        <!-- <div class="bg smart-bg" style="background-color:#ffffff; background-image:url('<?php echo $careers_image['url'];?>'); background-size:cover; background-repeat:no-repeat;"></div> -->
        <!-- <div class="bg career-bg c-desk" style="background-image:url('<?php echo $smart_service_image['url'];?>'); background-size:cover; background-repeat:no-repeat;"></div> -->
      </div>

      <!-- TEXT -->

    </div>


    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <!-- <div class="title">Base Layer Footer Layer 7</div -->>
<!--       </div>
    </div>
  </div> -->