jQuery(document).ready(function() {
	jQuery(".tx_grbzlbfile-content").hide();
	//toggle the componenet with class msg_body
	jQuery(".tx_grbzlbfile-header").click(function() {
		jQuery(this).next(".tx_grbzlbfile-content").slideToggle(500);
	});
});