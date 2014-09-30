// // SCROLL JS
//     jQuery(document).ready(function($) {
//       // This example adds a duration to the tweens so they are synced to the scroll position

//       var controller = $.superscrollorama();
      
//       // amount of scrolling over which the tween takes place (in pixels)
//       var scrollDuration = 800;

//       // individual element tween examples
//       // controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}), scrollDuration);
//      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{left:'1000px'}, ease:Quad.easeInOut}), scrollDuration);
//       // controller.addTween('#spin-it', TweenMax.from( $('#spin-it'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut}), scrollDuration);
//       // controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'20px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'240px'}, ease:Quad.easeInOut}), scrollDuration);
//       // controller.addTween('#smush-it', TweenMax.fromTo( $('#smush-it'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), scrollDuration); // 100 px offset for better timing
//     });




    $(document).ready(function() {
      
      // initialize the plugin, pass in the class selector for the sections of content (blocks)
      var scrollorama = $.scrollorama({ blocks:'.scrollblock' });
      
      // assign function to add behavior for onBlockChange event
      scrollorama.onBlockChange(function() {
        var i = scrollorama.blockIndex;
        $('#console')
          .css('display','block')
          .text('onBlockChange | blockIndex:'+i+' | current block: '+scrollorama.settings.blocks.eq(i).attr('id'));
      });
      
      // lettering.js for coolness
      $('#title').lettering();
      $('#title span')
        .css('display','block')
        .css('float','left');
      $('.char9').css('padding-left','6px');
      
      // animate the title letters to explode
      scrollorama
        .animate('#title',{ duration: 300, property:'zoom', end: 8 })
        .animate('#author',{ duration: 10, property:'z-index', end: 0 });
      
      $('#title span').each(function() {
        scrollorama
          .animate($(this),{ duration: 400, property:'top', end: Math.random()*120-180 })
          .animate($(this),{ duration: 300, property:'rotate', start:0, end:Math.random()*720-360 });
      });
      
      // animate some examples
      scrollorama
        .animate('#unpin',{ duration:500, property:'padding-top', start:400, pin:true })
        .animate('#fade-in',{ delay: 400, duration: 300, property:'opacity', start:0 })
        .animate('#fly-in',{ delay: 400, duration: 300, property:'left', start:-1400, end:0 })
        .animate('#rotate-in',{ duration: 800, property:'rotate', start:720 })
        .animate('#zoom-in',{ delay: 200, duration: 600, property:'zoom', start:8 })
        .animate('#any',{ delay: 700, duration: 200, property:'opacity', start:0 })
        .animate('#any',{ delay: 800, duration: 200, property:'letter-spacing', start:18 });
      
      // animate the parallaxing
      scrollorama
        .animate('#parallax2',{ delay: 400, duration: 600, property:'top', start:800, end:-800 })
        .animate('#parallax3',{ delay: 200, duration: 1200, property:'top', start:500, end:-500 });
      
      // animate some easing examples
      var $easing = $('#easing'),
        $clone = $easing.clone().appendTo('#examples-easing')
                .css({position:'relative',top:'-2.95em'})
                .lettering();
      $easing.css({ color: '#131420', textShadow: '0 1px 0 #363959' });
      easing_array = [  'easeOutBounce',
                'easeOutQuad',
                'easeOutCubic',
                'easeOutQuart',
                'easeOutQuint', 
                'easeOutExpo'     ];
      $clone.find('span')
        .each( function( idx, el ){
          scrollorama.animate( $(this), { delay:400, duration: 500, 
                          property:'top', end: 300,
                          easing: easing_array[idx] });
        })
      
    });
  