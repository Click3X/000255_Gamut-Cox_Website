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

    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">Foreground Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>

    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title">Background Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--deep">
        <div class="title">Deep Background Layer</div>
      </div>
    </div>

    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">Foreground Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>

    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back">
        <div class="title">Background Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
      </div>
    </div>

    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Base Layer</div>
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