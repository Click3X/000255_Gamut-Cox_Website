  <div class="debug">
    <label><input type="checkbox"> Debug</label>
  </div>

 <div class="parallax"> 

    <!-- CAROUSEL 
        GROUP 1 -->
    <div id="group1" class="parallax__group">
      <!-- END BASE -->
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer 1</div> -->
      </div>

      <!-- END BACKGROUND -->
      <div class="parallax__layer parallax__layer--back">
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
        <!-- <div class="title">Background Layer 1</div> -->
      </div>

      <!-- DEEP BACKGROUND -->
      <!-- MTN BG -->
      <div class="parallax__layer parallax__layer--deep background" style="background-image: url('<?php echo $bg_img['url'] ?>');">
        <!-- <div class="title">Deep Background Layer 1</div> -->
      </div>

    </div>



    <!-- GROUP 2 -->
    <div id="group2" class="parallax__group">
      <!-- BASE -->
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer 2</div> -->
        <!-- OUR SOLUTIONS -->
        <div class="clearfix wrap-holder">
          <div class="abs-center white our-solutions">
            <div class="clearfix sol-holder">
              <div class="new-home-wrap">
                <h1><?php echo $our_solutions_title ?></h1>
                <div class="difference">
                  <?php echo $our_solutions_content ?>
                </div>
                <a href="#" class="gamut-btn diff">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BACK -->
      <!-- GAMUT DEFINED -->
      <div class="parallax__layer parallax__layer--back">  
        <div class="clearfix wrap-holder defined-txt">
          <div class="new-home-wrap abs-center">
            <h1><?php echo $gamut_defined_title ?></h1>
            <div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
          </div>
        </div>

        <!-- <div class="title">Background Layer 2</div> -->
      </div>
    </div>


    <!-- SUBPAGES -->
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer 3</div> -->
      </div>
      
      <!-- START BASE -->
      <div class="parallax__layer parallax__layer--fore">

       <!--  <div class="title">Foreground  Layer 3</div> -->

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

      
      </div> <!-- END FORE -->

    </div>


    <!-- GROUP 4 -->
    <div id="group4" class="parallax__group">
    
      <!-- IMAGES GO HERE -->
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer 4</div> -->
      </div>
    
      <div class="parallax__layer parallax__layer--back">
        <!-- <div class="title">Background Layer 4</div> -->
          <div class="clearfix wrap-holder">
            <div class="abs-center white grey-bg difference">
              <h1><?php echo $gamut_difference_title ?></h1>
              <div class="difference"><?php echo $gamut_difference_content ?></div>
            </div>
          </div>
      </div>
    
      <div class="parallax__layer parallax__layer--deep grey-bg">
        <!-- <div class="title">Deep Background Layer 4</div> -->
      </div>
    </div>


    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back">
        <!-- <div class="title">Deep Layer 6</div> -->
        <div class="clearfix abs-holder">
            <div class="clearfix white-bg">
              <div class=" background dude" style="background-color:#fff; background-image:url('<?php echo $careers_image['url'];?>');"></div>
            </div>
          <div class="clearfix abs-holder">
            <div class="clearfix wrap-holder">
              <div class="smart">
                <div class="clearfix">
                  <!-- <h1 class="smart-replace" style="background-image:url('<?php echo bloginfo('url'); ?>/img/smart-service.png');"><span><?php echo $smart_service_title ?></span></h1> -->
                  <h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
                </div>
                <?php echo $smart_service_content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- SMART  -->
      <div class="parallax__layer parallax__layer--base">
        <!-- <div class="title">Base Layer 6</div> -->
      </div>
    </div>


    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base beige">
        <!-- MTN -->
        <div class="background mtn" style="background-color:rgb(248,248,239); background-image:url('<?php echo $smart_service_image['url'];?>');"></div>
         <!-- CAREERS -->
            <div class="clearfix abs-holder">
              <div class="clearfix wrap-holder">
                <div class="carr beige">
                  <div class="clearfix">
                    <h1><?php echo $careers_title ?></h1>
                    <?php echo $careers_content ?>
                  </div>
                </div>
              </div>
          </div>
        <!-- <div class="title">Base Layer 7</div> -->
      </div>

      
  <!-- </div> PARALLAX IS CLOSED ON FOOTER.PHP FOR HOME PAGE-->
