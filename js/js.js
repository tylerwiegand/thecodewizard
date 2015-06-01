jQuery(document).ready(function() {
	jQuery('.code-faded').hover(function() {
		jQuery('.code-faded').addClass('code-not-faded', 2000);
	});
});

$(function () {
	$('[data-toggle="popover"]').popover()
})