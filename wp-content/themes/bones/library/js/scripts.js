/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y }
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function



/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  // CHECK FOR DEVICE (JS CODE FROM HEADER)
  $('body').addClass(device);

  // CHARLES MOBILE BUTTON TOGGLE-HIDE-SHOW
    $('#mobile-btn').click(function(event) {
      event.preventDefault();
      // console.log('I am clicked!');

      $('#main-nav').toggleClass('show-nav');

    });

  // CAREERS PAGE ACCORDION
  $(".accordion").click(function(){
    $(this).find('img').toggle();
    $(this).next().slideToggle('fast');
  });

  $(".jobSlideUp").click(function(){
    $(this).parent().prev().find('img').toggle();
    $(this).parent().slideToggle('fast');
  });

  // reorder careers order
  $('.featured_job').prependTo('.job_container');

  // initiate lightbox
  $(".fancybox").fancybox();


  $(".various").fancybox({
    maxWidth  : 800,
    // maxHeight : 600,
    // fitToView : false,
    // width   : '70%',
    // height    : '70%',
    // autoSize  : false,
    closeClick  : false,
    // openEffect  : 'none',
    // closeEffect : 'none'
  });


  // EMAIL SCRAMBLE

    //email spam protection - Example Markup: <span class="email">name[at]domain[dot]com</span>
$('.email').each(function() {
    var $email = $(this);
    var address = $email.text()
    .replace(/s*[at]s*/, '@')
    .replace(/s*[dot]s*/g, '.');
    $email.html('<a href="mailto:' + address + '">'+ address +'</a>');
});
  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();


    // PARALLAX WINDOW FUNCITON
    function elementInViewport(el) {
      var top = el.offsetTop;
      var left = el.offsetLeft;
      var width = el.offsetWidth;
      var height = el.offsetHeight;

      while(el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
      }

      return (
        top >= window.pageYOffset &&
        left >= window.pageXOffset &&
        (top + height) <= (window.pageYOffset + window.innerHeight) &&
        (left + width) <= (window.pageXOffset + window.innerWidth)
      );
    }





  // Beam slide animation
  $('.home-beam').hide();
  $('#pro-logo').click(function (){
    $('.home-beam').show('slide', {direction:'left'}, 200);
  });

// home slide
// load gif
// $('fg').hide();
// $('#bg>img').attr('src', 'img/home-animation.gif');

// load images
// setTimeout(function (){
//   // $('#bg>img').css('opacity', 0);
//   $('#bg>img').attr('src', 'img/bg-long-copy.png');
//   // $('#bg>img').css('opacity', 1);
//   $('fg').show();
// }, 2000);



 // control gif
 // frame=7;
 //  var sup1 = new SuperGif({ gif: document.getElementById('marquee') } );
 //  sup1.load();
 //  sup1.move_to(frame);




// var $bg = $('#bg');
// var $fg = $('#fg');

// var bgImageWidth = 1600;
// var bgNumberOfImages = 4;
// var bgWidth = bgImageWidth * bgNumberOfImages;

// var bgShift = 0;
// var bgShiftDesired = 0;

// setInterval(function(){ 
//   bgShift += (bgShiftDesired-bgShift)/8;
//   $bg.css({left:-bgShift});
//   $fg.css({left:-bgShift*1.5});
// },30);



// function forward(){
//   bgShiftDesired += bgImageWidth;
//   if (bgShiftDesired>bgWidth){
//     bgShiftDesired -= bgWidth;
//     bgShift -= bgWidth;
//   }
// }

// setInterval(function(){ 
//   forward();
// },5000);


// highlight selected menu item

  var url = window.location;

  $('a[href="'+url+'"]').parent('#menu-main-menu>li').addClass('main-menu-selected');

  $('a[href="'+url+'"]').parent('.sidebar li').children().addClass('sidebar-selected');

  // DETECT IE
  var isMSIE = /*@cc_on!@*/0,
  isIE11 = !!navigator.userAgent.match(/Trident.*rv[ :]*11\./),
  isIE11_2 = !!window.MSStream;

  if (isMSIE || isIE11 || isIE11_2) {
    // do IE-specific things
    console.log('this is ie');

    var css = 'body.home, html.home-para, .page-id-107 {overflow:auto;} #video {height:100% !important; width:100% !important;}',
      head = document.head || document.getElementsByTagName('head')[0],
      style = document.createElement('style');

      style.type = 'text/css';
      if (style.styleSheet){
        style.styleSheet.cssText = css;
      } else {
        style.appendChild(document.createTextNode(css));
      }

      head.appendChild(style);
    

  } 


  var ie10Styles = [
  'msTouchAction',
  'msWrapFlow'];
   
  var ie11Styles = [
  'msTextCombineHorizontal'];
 
/*
* Test all IE only CSS properties
*/
 
var d = document,
    b = d.body,
    s = b.style,
    brwoser = null,
    property,
    mq = window.matchMedia('all and (min-width: 1030px)');
 
// Tests IE10 properties
for (var i = 0; i < ie10Styles.length; i++) {
    property = ie10Styles[i];
    if (s[property] != undefined) {
        brwoser = "ie10";
    }
}
 
// Tests IE11 properties
for (var i = 0; i < ie11Styles.length; i++) {
    property = ie11Styles[i];
    if (s[property] != undefined) {
        brwoser = "ie11";
    }
}

if(brwoser == "ie10" || brwoser == "ie11" ){
    $('body').addClass('ie11'); // Fixes marbin issue on IE10 and IE11 after canvas function on images
    $('.grayscale').each(function(){
        var el = $(this);
        el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale ieImage').css({"position":"absolute","z-index":"5","opacity":"0"}).insertBefore(el).queue(function(){
            var el = $(this);
            if (mq.matches) {
              el.parent().css({"width":'180px',"height":'180px'});
            } else {
              el.parent().css({"width":'140px',"height":'140px'});
            }

            $( window ).resize(function() {
              if (mq.matches) {
                el.parent().css({"width":'180px',"height":'180px'});
              } else {
                el.parent().css({"width":'140px',"height":'140px'});
              }
            });
            
            el.dequeue();
        });
        this.src = grayscaleIe(this.src);
    });
 
    // Quick animation on IE10+ 
    $('.grayscale').hover(
        function () {
            $(this).parent().find('img:first').stop().animate({opacity:1}, 200);
        }, 
        function () {
            $('.img_grayscale').stop().animate({opacity:0}, 200);
        }
    );
 
    // Custom grayscale function for IE10 and IE11
    function grayscaleIe(src){
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        var imgObj = new Image();
        imgObj.src = src;
        canvas.width = imgObj.width;
        canvas.height = imgObj.height; 
        ctx.drawImage(imgObj, 0, 0); 
        var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
        for(var y = 0; y < imgPixels.height; y++){
            for(var x = 0; x < imgPixels.width; x++){
                var i = (y * 4) * imgPixels.width + x * 4;
                var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
                imgPixels.data[i] = avg; 
                imgPixels.data[i + 1] = avg; 
                imgPixels.data[i + 2] = avg;
            }
        }
        ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
        return canvas.toDataURL();
    };
 };

 // GA TO TRACK CLICK-TO-CALL
   $('#call-ny').click(function(){
      _gaq.push(['_trackEvent', 'Click to call', 'click/tab', 'Call NYC office']);
   });

    $('#call-sf').click(function(){
      _gaq.push(['_trackEvent', 'Click to call', 'click/tab', 'Call San Francisco office']);
   });

}); /* end of as page load scripts */
