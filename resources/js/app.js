(function ($) {

	'use strict';

	var srcArray = [];
	var srcObject = {};

	var terracotta = {

		initalize: function(){
			this.bindEvents();

			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-155144334-1');
		},

		bindEvents: function() {
			$(document)
				.on('click', '.navigationLinks a, a.newsletter', this.toggleAboutSections)
				.on('click', '.close, .closeNewsletter', this.closeAboutSections)
				.on('click', '#toggle', this.toggleDarkMode)
				.on('submit', '#registerEmail', this.submitNewsletter)
				.ready(this.toggleThemeIcon);
		},

		submitNewsletter: function(e) {

			e.preventDefault();

			var data = {};
			data.email = $('#emailAddress').val();

			$.ajax({
				method: "POST",
				url: "/joinEmailNewsletter",
				type: "JSON",
				data: data
			}).done(function( msg ) {
				console.log( "Data Saved: " + msg );
			});

		},

		toggleThemeIcon: function() {

			var preferesDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");

			if(preferesDarkTheme.matches && $("#toggle").prop('checked') == false && !$('html').hasClass('light-theme')){
				$("#toggle").prop('checked', true);
			}


		},

		toggleDarkMode: function() {


			var preferesDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");
			var theme;
			if(preferesDarkTheme.matches){
				$('html').toggleClass('light-theme');
				theme = $('html').hasClass('light-theme') ? "light-theme" : "dark-theme";

			} else {
				$('html').toggleClass('dark-theme');
				theme = $('html').hasClass('light-theme') ? "light-theme" : "dark-theme";
			}

			document.cookie = "theme=" + theme;

		},


		toggleAboutSections: function(e) {
			if(!$(this).hasClass('artistBio')){
				e.preventDefault();

				var $aboutSection = $(this).attr('class').split(' ')[0];

				if($aboutSection === 'newsletter' && $('a.newsletter').hasClass('active')){
					$('a.newsletter').removeClass('active');
					terracotta.closeAboutSections(e);
					return;

				} else if($(this).hasClass('active') && ($aboutSection !== 'newsletter')){
					terracotta.closeAboutSections(e);
					return;
				}


				$('.aboutPopup .showing').removeClass('showing');
				$('.navigationLinks .active').removeClass('active');



				$(this).addClass('active');

				console.log($aboutSection);
				$('.aboutPopup .' + $aboutSection).addClass('showing');



				if($aboutSection === 'newsletter'){
					$('.newsletterBlock input').focus();
				} else {
					$('.aboutPopup .close').addClass('showing');
				}
			}



		},

		closeAboutSections: function(e){
			e.preventDefault();

			$('.aboutPopup .showing').removeClass('showing');
			$('.navigationLinks .active').removeClass('active');
			$('a.newsletter').removeClass('active');
		},

		nextImage: function(e){
			e.preventDefault();


			if($('.photos img[data-index="' + newIndex + '"]').length !== 0){

				newSrc = $('.photos img[data-index="' + newIndex + '"]').attr('src');
			} else {

				newSrc = $('.photos img[data-index="' + 0 + '"]').attr('src');
				newIndex = 0;

			}


		},

		prevImage: function(e){
			e.preventDefault();

			var index = $('.modal img').attr("data-index");
			var newIndex = parseInt(index) - 1;
			var newSrc = "";

			if($('.photos img[data-index="' + newIndex + '"]').length !== 0){
				newSrc = $('.photos img[data-index="' + newIndex + '"]').attr('src');
			} else {

				var last = $('.photos img').last().attr('data-index');

				newSrc = $('.photos img[data-index="' + last + '"]').attr('src');
				newIndex = last;

			}

			$('.modal img').attr("src", newSrc).attr("data-index", newIndex);
		}

};

window.terracotta = terracotta;

}(window.jQuery));
