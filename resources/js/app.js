(function ($) {

	'use strict';

	var srcArray = [];
	var srcObject = {};

	var terracotta = {

		initalize: function(){
			console.log("initalize");
			this.bindEvents();
		},

		bindEvents: function() {
			$(document)
				.on('click', '.navigationLinks a', this.toggleAboutSections)
				.on('click', '.close', this.closeAboutSections)
				.on('click', '#toggle', this.toggleDarkMode)
				.ready(this.toggleThemeIcon);
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
			}


			if($(this).hasClass('active')){
				terracotta.closeAboutSections(e);
				return;
			}



			var $aboutSection = $(this).attr('class').split(' ')[0];

			$('.aboutPopup .showing').removeClass('showing');
			$('.navigationLinks .active').removeClass('active');

			$(this).addClass('active');

			console.log($aboutSection);
			$('.aboutPopup .' + $aboutSection).addClass('showing');

		},

		closeAboutSections: function(e){
			e.preventDefault();

			$('.aboutPopup .showing').removeClass('showing');
			$('.navigationLinks .active').removeClass('active');
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
