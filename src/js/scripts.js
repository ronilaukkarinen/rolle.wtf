$(window).load(function() {

	setTimeout(function() {

		// Packery
		var $container = $('.items').packery({
		   itemSelector: '.item',
		   gutter: 0
		});

	}, 50);

	$(".twitter").tweet({
		modpath: '/inc/twitter/',
		username: "rolle",
		join_text: "auto",
		count: 1,
		retweets: true,
		auto_join_text_default: "", 
		auto_join_text_ed: "",
		auto_join_text_ing: "",
		auto_join_text_reply: "",
		auto_join_text_url: "",
		loading_text: "<span class=\"tweet_text\">Loading...</span>",
		template: "Last tweet {time}."
	});

});

$(document).ready(function(){

	// Disable tawk.to default styles
    $("#tawkchat-minified-iframe-element").removeAttr('style');

});