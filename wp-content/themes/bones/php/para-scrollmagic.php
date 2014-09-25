<div class="spacer s0"></div>
<div id="parallax1" style="background-image: url(../../img/example_parallax_bg1.png);"></div>
<div class="spacer s1">
	<div class="box2 blue">
		<p>Content 1</p>
		<a href="#" class="viewsource">view source</a>
	</div>
</div>
<div class="spacer s0"></div>
<div id="parallax2" style="background-image: url(../../img/example_parallax_bg2.png);"></div>
<div class="spacer s1">
	<div class="box2 blue">
		<p>Content 2</p>
		<a href="#" class="viewsource">view source</a>
	</div>
</div>
<div class="spacer s0"></div>
<div id="parallax3" style="background-image: url(../../img/example_parallax_bg3.png);"></div>
<div class="spacer s2"></div>
<script>
	$(document).ready(function($) {
		// define params
		var duration = $("#parallax1").height() + $(window).height();
		var bgPosMovement = "0 " + (duration*0.8) + "px";

		// init controller
		var controller = new ScrollMagic({globalSceneOptions: {triggerHook: "onEnter", duration: duration}});

		// build scenes
		new ScrollScene({triggerElement: "#parallax1"})
						.setTween(TweenMax.to("#parallax1", 1, {backgroundPosition: bgPosMovement, ease: Linear.easeNone}))
						.addTo(controller)
						.addIndicators({zindex: 1, suffix: "1"});

		new ScrollScene({triggerElement: "#parallax2"})
						.setTween(TweenMax.to("#parallax2", 1, {backgroundPosition: bgPosMovement, ease: Linear.easeNone}))
						.addTo(controller)
						.addIndicators({zindex: 1, suffix: "2"});

		new ScrollScene({triggerElement: "#parallax3"})
						.setTween(TweenMax.to("#parallax3", 1, {backgroundPosition: bgPosMovement, ease: Linear.easeNone}))
						.addTo(controller)
						.addIndicators({zindex: 1, suffix: "3"});

	});
</script>