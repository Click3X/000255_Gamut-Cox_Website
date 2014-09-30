// PLAY SOUND JS
window.onload = function() {

	console.log('Play sound is here!');
	// Video
	var video = document.getElementById("video");

	// Buttons
	// var playButton = document.getElementById("play-pause");
	var muteButton = document.getElementById("mute");
	// var fullScreenButton = document.getElementById("full-screen");

	// Sliders
	// var seekBar = document.getElementById("seek-bar");
	// var volumeBar = document.getElementById("volume-bar");


	// Event listener for the mute button
	muteButton.addEventListener("click", function() {
		if (video.muted == false) {
			// Mute the video
			video.muted = true;

			// Update the button text
			// muteButton.innerHTML = "Unmute";
			// muteButton.innerHTML = "Play Sound";
			jQuery(muteButton).removeClass('playsound');
			jQuery(muteButton).addClass('stopsound');

		} else {
			// Unmute the video
			video.muted = false;

			// Update the button text
			// muteButton.innerHTML = "Stop Sound";

			jQuery(muteButton).addClass('playsound');
			jQuery(muteButton).removeClass('stopsound');
			
		}
	});

};