(function ($, root, undefined) {

	$(function () {

		'use strict';

	  $('.play-video').on('click', function(e){
	    e.preventDefault();

	    var that = $(this);
	    var dom = that.parent();

	    console.log(that);

	    var youtube_id = that.data('youtube-id');
	    loadYoutubeVideoEmbed(dom, youtube_id);
	  });

	  function loadYoutubeVideoEmbed(dom, youtube_id){
	    var width = dom.width();
	    var height = dom.height();
	    var html = '<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+youtube_id+'?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>';
	    dom.html(html);
	  }

		$('input[name="signup_email"]').on('keyup', function(){
			$('.sign-up-error').remove();
		});

		$('.sign-up').on('click', function(e){
	    e.preventDefault();

			function validateEmail(email) {
			    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return re.test(email);
			}

			var signup_button = $('button.sign-up');
			var dom_container = signup_button.parent();
			var email_input = $('input[name="signup_email"]');
			var loader = $('.sign-up-loader');
			var email_val = email_input.val();

			$('.sign-up-error').remove();

			if(validateEmail(email_val)){
				email_input.hide();
				signup_button.hide();
				loader.show();
				$.post('/wp-content/themes/dontcallitfrisco-theme/signup_email.php', {email: email_val}, function(output) {
					email_input.hide();
					signup_button.hide();
					loader.hide();
					dom_container.append('<p class="sign-up-thank-you">THANK YOU!</p>');
				});
			}else{
				dom_container.append('<p class="sign-up-error">Please enter a valid email address</p>');
			}
	  });
	});

})(jQuery, this);
