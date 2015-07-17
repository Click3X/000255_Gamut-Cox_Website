// side-bar-highlight
jQuery(document).ready(function($) {
	var $cat = $('#sidebar-title'),
		cat = $cat.text().toLowerCase(),
		$menulis = $('#menu-watch-read li');

	$.each($menulis, function() {
		var $a = $(this).find('a').eq(0),
			a = $a.text().toLowerCase(),
			$_t = $(this);

		if(a == cat) {
			$($_t).addClass('current-menu-item');
			$($a).addClass('sidebar-selected');
		}

	});

});