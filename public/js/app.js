/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  'use strict';

  var srcArray = [];
  var srcObject = {};
  var terracotta = {
    initalize: function initalize() {
      this.bindEvents();
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());
      gtag('config', 'UA-155144334-1');
    },
    bindEvents: function bindEvents() {
      $(document).on('click', '.navigationLinks a', this.toggleAboutSections).on('click', '.close', this.closeAboutSections).on('click', '#toggle', this.toggleDarkMode).ready(this.toggleThemeIcon);
    },
    toggleThemeIcon: function toggleThemeIcon() {
      var preferesDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");

      if (preferesDarkTheme.matches && $("#toggle").prop('checked') == false && !$('html').hasClass('light-theme')) {
        $("#toggle").prop('checked', true);
      }
    },
    toggleDarkMode: function toggleDarkMode() {
      var preferesDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");
      var theme;

      if (preferesDarkTheme.matches) {
        $('html').toggleClass('light-theme');
        theme = $('html').hasClass('light-theme') ? "light-theme" : "dark-theme";
      } else {
        $('html').toggleClass('dark-theme');
        theme = $('html').hasClass('light-theme') ? "light-theme" : "dark-theme";
      }

      document.cookie = "theme=" + theme;
    },
    toggleAboutSections: function toggleAboutSections(e) {
      if (!$(this).hasClass('artistBio')) {
        e.preventDefault();
      }

      if ($(this).hasClass('active')) {
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
    closeAboutSections: function closeAboutSections(e) {
      e.preventDefault();
      $('.aboutPopup .showing').removeClass('showing');
      $('.navigationLinks .active').removeClass('active');
    },
    nextImage: function nextImage(e) {
      e.preventDefault();

      if ($('.photos img[data-index="' + newIndex + '"]').length !== 0) {
        newSrc = $('.photos img[data-index="' + newIndex + '"]').attr('src');
      } else {
        newSrc = $('.photos img[data-index="' + 0 + '"]').attr('src');
        newIndex = 0;
      }
    },
    prevImage: function prevImage(e) {
      e.preventDefault();
      var index = $('.modal img').attr("data-index");
      var newIndex = parseInt(index) - 1;
      var newSrc = "";

      if ($('.photos img[data-index="' + newIndex + '"]').length !== 0) {
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
})(window.jQuery);

/***/ }),

/***/ "./resources/sass/styles.sass":
/*!************************************!*\
  !*** ./resources/sass/styles.sass ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/styles.sass ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/kevinkulla/Sites/kevinkulla/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/kevinkulla/Sites/kevinkulla/resources/sass/styles.sass */"./resources/sass/styles.sass");


/***/ })

/******/ });