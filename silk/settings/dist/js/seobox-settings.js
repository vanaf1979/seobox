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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./seobox/settings/src/js/modules/seoboximages.js":
/*!********************************************************!*\
  !*** ./seobox/settings/src/js/modules/seoboximages.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var seoboximages = {
  init: function init() {
    this.start(); // this.editImage();
  },
  start: function start() {
    $('.seobox-image-upload-select').click(function (e) {
      e.preventDefault();
      var btEll = e.target;
      var frame = wp.media({
        title: 'Select or Upload an image',
        button: {
          text: 'Use this image'
        },
        multiple: false
      });
      frame.open();
      frame.on('select', function () {
        var attachment = frame.state().get('selection').first().toJSON(); // Set preview img url

        var imgEll = $(btEll).parent().find('.seobox-image-upload-src');
        imgEll.attr('src', attachment.sizes.thumbnail.url); // Set form hidden field value 

        var imgEll = $(btEll).parent().find('.seobox-image-upload-field');
        imgEll.attr('value', attachment.id);
      });
    });
  },
  editImage: function editImage() {
    $('.seobox-image-upload-edit').click(function (e) {
      e.preventDefault();

      if (frame) {
        console.log('here');
        console.log(frame);
      }

      var attachmentId = $(e.target).closest(".seobox-image-upload-container").find('.seobox-image-upload-field').attr('value');
      var frame = wp.media({
        title: 'Edit image',
        mode: 'edit',
        attachment: parseInt(attachmentId),
        button: {
          text: 'Use changes'
        },
        multiple: false,
        uploader: false
      });
      frame.open();
    }); // var frame = acf.newMediaPopup({
    //     mode:		'edit',
    //     title:		acf.__('Edit File'),
    //     button:		acf.__('Update File'),
    //     attachment:	val,
    //     field:		this.get('key'),
    //     select:		$.proxy(function( attachment, i ) {
    //         this.render( attachment );
    //     }, this)
    // });
  }
};
module.exports = seoboximages;

/***/ }),

/***/ "./seobox/settings/src/js/modules/utils.js":
/*!*************************************************!*\
  !*** ./seobox/settings/src/js/modules/utils.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var utils = {
  /*
  --  ### MISC
  */

  /*
  --  Find a DOM ellement.
  */
  find: function find(selector, context) {
    return (context || document).querySelector(selector);
  },

  /*
  --  Find multiple DOM ellement.
  */
  findAll: function findAll(selector, context) {
    return (context || document).querySelectorAll(selector);
  },

  /*
  --  Convert a value to a bool.
  */
  parseBool: function parseBool(value) {
    return value == "true" || value == true || value == 1 ? true : false;
  },

  /*
  --  ### ARRAYS
  */

  /*
  --  Is a value in an array?
  */
  inArray: function inArray(needle, haystack) {
    for (var i = 0; i < haystack.length; i++) {
      if (haystack[i] == needle) return i;
    }

    return -1;
  },

  /*
  --  Loop throu an array/;ist
  */
  loop: function loop(list, callback) {
    for (var i = 0; i < list.length; i++) {
      callback(list[i]);
    }
  },

  /*
  --  ### COOKIES
  */

  /*
  --  Set cookie value.
  */
  getCookie: function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
  },

  /*
  --  Get cookie value.
  */
  setCookie: function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
  },

  /*
  --  Delete cookie value.
  */
  deleteCookie: function deleteCookie(name) {
    setCookie(name, '', -1);
  },

  /*
  --  ### EVENTS
  */

  /*
  --  Add event listner.
  */
  addEvent: function addEvent(ellement, type, callback) {
    if (ellement.attachEvent) {
      ellement.attachEvent('on' + type, callback);
    } else {
      ellement.addEventListener(type, callback);
    }
  },

  /*
  --  Remove event listner.
  */
  removeEvent: function removeEvent(ellement, type, callback) {
    if (ellement.detachEvent) {
      ellement.detachEvent('on' + type, callback);
    } else {
      ellement.removeEventListener(type, callback);
    }
  },

  /*
  --  Trigger events.
  */
  triggerEvent: function triggerEvent(el, type) {
    if ('createEvent' in document) {
      // modern browsers, IE9+
      var e = document.createEvent('HTMLEvents');
      e.initEvent(type, false, true);
      el.dispatchEvent(e);
    } else {
      // IE 8
      var e = document.createEventObject();
      e.eventType = type;
      el.fireEvent('on' + e.eventType, e);
    }
  },

  /*
  --  Fire on document ready.
  */
  domready: function domready(fn) {
    if (document.readyState != 'loading') {
      fn();
    } else if (document.addEventListener) {
      this.addEvent(document, 'DOMContentLoaded', fn);
    } else {
      this.addEvent(document, 'onreadystatechange', function () {
        if (document.readyState != 'loading') {
          fn();
        }
      });
    }
  },

  /*
  --  trim leading and trailing whitespace
  */
  trim: function trim(string) {
    if (typeof string === "string") {
      return string.replace(/^\s+|\s+$/g, '');
    } else {
      return string;
    }
  },

  /*
  --  ### Ajax
  */

  /*
  --  Add a stylesheet to the dom.
  */
  addStyle: function addStyle() {
    var style = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
    var parent = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
    var callback = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
    var element = document.createElement('link');
    element.type = 'text/css';
    element.rel = 'stylesheet';
    element.href = style;

    if (!parent) {
      parent = 'head';
    }

    if (callback != null && typeof callback === "function") {
      element.onload = function () {
        callback();
      };
    }

    document[parent].appendChild(element);
  },

  /*
  --  Add a script file to the dom.
  */
  addScript: function addScript() {
    var script = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
    var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
    var element = document.createElement('script');
    element.type = 'text/javascript';
    element.async = true;
    element.src = script;
    parent = 'body';

    if (callback != null && typeof callback === "function") {
      element.onload = function () {
        callback();
      };
    }

    document[parent].appendChild(element);
  }
};
module.exports = utils;

/***/ }),

/***/ "./seobox/settings/src/js/seobox-settings.js":
/*!***************************************************!*\
  !*** ./seobox/settings/src/js/seobox-settings.js ***!
  \***************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/utils.js */ "./seobox/settings/src/js/modules/utils.js");
/* harmony import */ var _modules_utils_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_utils_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _modules_seoboximages_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/seoboximages.js */ "./seobox/settings/src/js/modules/seoboximages.js");
/* harmony import */ var _modules_seoboximages_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_seoboximages_js__WEBPACK_IMPORTED_MODULE_1__);
/* Import utilities. */


/* Initialize components. */

_modules_utils_js__WEBPACK_IMPORTED_MODULE_0___default.a.domready(function () {
  _modules_seoboximages_js__WEBPACK_IMPORTED_MODULE_1___default.a.init();
});

/***/ }),

/***/ 1:
/*!*********************************************************!*\
  !*** multi ./seobox/settings/src/js/seobox-settings.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/saskia/Documents/repos/websites/wptest/wp-content/plugins/seobox/seobox/settings/src/js/seobox-settings.js */"./seobox/settings/src/js/seobox-settings.js");


/***/ })

/******/ });