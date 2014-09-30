// PLAY SOUND JS
window.onload = function() {

	// Video
	var video = document.getElementById("video");

	// Buttons
	var muteButton = document.getElementById("mute");

	// Event listener for the mute button
	muteButton.addEventListener("click", function() {
		if (video.muted == false) {
			// Mute the video
			video.muted = true;

			// Update class
			jQuery(muteButton).removeClass('playsound');
			jQuery(muteButton).addClass('stopsound');

		} else {
			// Unmute the video
			video.muted = false;

			// Update class
			jQuery(muteButton).addClass('playsound');
			jQuery(muteButton).removeClass('stopsound');
			
		}
	});

};