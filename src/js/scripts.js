$(window).load(function() {

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

	$("#open-chat").animatedModal({
		modalTarget:'chat',
        animatedIn:'zoomIn',
        animatedOut:'bounceOut',
        color:'#3F434C'
	});

	setTimeout(function() {

		// Packery
		var $container = $('.items').packery({
		   itemSelector: '.item',
		   gutter: 0
		});

	}, 100);

});