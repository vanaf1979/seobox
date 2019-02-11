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

/***/ "./settings/src/js/modules/tabs.js":
/*!*****************************************!*\
  !*** ./settings/src/js/modules/tabs.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var Utils = __webpack_require__(/*! ./utils.js */ "./settings/src/js/modules/utils.js");

var tabs = {
  init: function init() {
    var tabs = Utils.findAll('.seobox-admin-tabs li');
    Utils.loop(tabs, function (tab) {
      Utils.addEvent(tab, 'click', function (e) {
        console.log(e);
        var currentTab = Utils.find('.seobox-admin-tabs li.active');
        currentTab.classList.remove('active');
        e.target.classList.add('active');
        var currentPanel = Utils.find('.sb-settings-tabs-container .tab.active');
        currentPanel.classList.remove('active');
        var nextPanelName = '#' + e.target.dataset.tab;
        var nextPanel = Utils.find(nextPanelName);
        nextPanel.classList.add('active');
      });
    });
  }
};
module.exports = tabs;

/***/ }),

/***/ "./settings/src/js/modules/utils.js":
/*!******************************************!*\
  !*** ./settings/src/js/modules/utils.js ***!
  \******************************************/
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

/***/ "./settings/src/js/seobox-settings.js":
/*!********************************************!*\
  !*** ./settings/src/js/seobox-settings.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* Import utilities. */
var utils = __webpack_require__(/*! ./modules/utils.js */ "./settings/src/js/modules/utils.js");

var tabs = __webpack_require__(/*! ./modules/tabs.js */ "./settings/src/js/modules/tabs.js");
/* Initialize components. */


utils.domready(function () {
  tabs.init();
});

/***/ }),

/***/ 1:
/*!**************************************************!*\
  !*** multi ./settings/src/js/seobox-settings.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/saskia/Documents/repos/websites/va79-website/app/plugins/seobox/settings/src/js/seobox-settings.js */"./settings/src/js/seobox-settings.js");


/***/ })

/******/ });