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
		template: "Tweeted {time}"
	});

});