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

/***/ "./node_modules/@yaireo/tagify/dist/tagify.min.js":
/*!********************************************************!*\
  !*** ./node_modules/@yaireo/tagify/dist/tagify.min.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
 * Tagify (v 2.15.1)- tags input component
 * By Yair Even-Or (2016)
 * Don't sell this code. (c)
 * https://github.com/yairEO/tagify
 */
!function(t,e){ true?!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (e),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):undefined}(this,function(){"use strict";function t(t,e){if(!t)return console.warn("Tagify: ","invalid input element ",t),this;this.applySettings(t,e),this.state={},this.value=[],this.listeners={},this.DOM={},this.extend(this,new this.EventDispatcher(this)),this.build(t),this.loadOriginalValues(),this.events.customBinding.call(this),this.events.binding.call(this),t.autofocus&&this.DOM.input.focus()}return t.prototype={isIE:window.document.documentMode,TEXTS:{empty:"empty",exceed:"number of tags exceeded",pattern:"pattern mismatch",duplicate:"already exists",notAllowed:"not allowed"},DEFAULTS:{delimiters:",",pattern:null,maxTags:1/0,callbacks:{},addTagOnBlur:!0,duplicates:!1,whitelist:[],blacklist:[],enforceWhitelist:!1,keepInvalidTags:!1,autoComplete:!0,mixTagsAllowedAfter:/,|\.|\:|\s/,backspace:!0,dropdown:{classname:"",enabled:2,maxItems:10,itemTemplate:"",fuzzySearch:!0}},customEventsList:["click","add","remove","invalid","input","edit"],applySettings:function(t,e){var i=t.getAttribute("data-whitelist"),s=t.getAttribute("data-blacklist");if(this.settings=this.extend({},this.DEFAULTS,e),this.settings.readonly=t.hasAttribute("readonly"),this.isIE&&(this.settings.autoComplete=!1),s&&(s=s.split(this.settings.delimiters))instanceof Array&&(this.settings.blacklist=s),i&&(i=i.split(this.settings.delimiters))instanceof Array&&(this.settings.whitelist=i),t.pattern)try{this.settings.pattern=new RegExp(t.pattern)}catch(t){}if(this.settings&&this.settings.delimiters)try{this.settings.delimiters=new RegExp("["+this.settings.delimiters+"]","g")}catch(t){}},parseHTML:function(t){return(new DOMParser).parseFromString(t.trim(),"text/html").body.firstElementChild},escapeHtml:function(t){var e=document.createTextNode(t),i=document.createElement("p");return i.appendChild(e),i.innerHTML},build:function(t){var e=this.DOM,i='<tags class="tagify '+(this.settings.mode?"tagify--mix":"")+" "+t.className+'" '+(this.settings.readonly?"readonly":"")+'>\n                            <span contenteditable data-placeholder="'+(t.placeholder||"&#8203;")+'" class="tagify__input"></span>\n                        </tags>';e.originalInput=t,e.scope=this.parseHTML(i),e.input=e.scope.querySelector("[contenteditable]"),t.parentNode.insertBefore(e.scope,t),0<=this.settings.dropdown.enabled&&this.dropdown.init.call(this)},destroy:function(){this.DOM.scope.parentNode.removeChild(this.DOM.scope)},loadOriginalValues:function(){var t=this.DOM.originalInput.value;if(t){try{t=JSON.parse(t)}catch(t){}"mix"==this.settings.mode?this.parseMixTags(t):this.addTags(t).forEach(function(t){t&&t.classList.add("tagify--noAnim")})}},extend:function(t,e,i){function s(t){var e=Object.prototype.toString.call(t).split(" ")[1].slice(0,-1);return t===Object(t)&&"Array"!=e&&"Function"!=e&&"RegExp"!=e&&"HTMLUnknownElement"!=e}function n(t,e){for(var i in e)e.hasOwnProperty(i)&&(s(e[i])?s(t[i])?n(t[i],e[i]):t[i]=Object.assign({},e[i]):t[i]=e[i])}return t instanceof Object||(t={}),n(t,e),i&&n(t,i),t},EventDispatcher:function(s){var n=document.createTextNode("");this.off=function(t,e){return e&&n.removeEventListener.call(n,t,e),this},this.on=function(t,e){return e&&n.addEventListener.call(n,t,e),this},this.trigger=function(t,e){var i;if(t)if(s.settings.isJQueryPlugin)$(s.DOM.originalInput).triggerHandler(t,[e]);else{try{i=new CustomEvent(t,{detail:e})}catch(t){console.warn(t)}n.dispatchEvent(i)}}},events:{customBinding:function(){var e=this;this.customEventsList.forEach(function(t){e.on(t,e.settings.callbacks[t])})},binding:function(){var t,e=!(0<arguments.length&&void 0!==arguments[0])||arguments[0],i=this.events.callbacks,s=e?"addEventListener":"removeEventListener";for(var n in e&&!this.listeners.main&&(this.DOM.input.addEventListener(this.isIE?"keydown":"input",i[this.isIE?"onInputIE":"onInput"].bind(this)),this.settings.isJQueryPlugin&&$(this.DOM.originalInput).on("tagify.removeAllTags",this.removeAllTags.bind(this))),t=this.listeners.main=this.listeners.main||{paste:["input",i.onPaste.bind(this)],focus:["input",i.onFocusBlur.bind(this)],blur:["input",i.onFocusBlur.bind(this)],keydown:["input",i.onKeydown.bind(this)],click:["scope",i.onClickScope.bind(this)],dblclick:["scope",i.onDoubleClickScope.bind(this)]})this.DOM[t[n][0]][s](n,t[n][1])},callbacks:{onFocusBlur:function(t){var e=t.target.textContent.trim();"mix"!=this.settings.mode&&("focus"==t.type?(this.DOM.scope.classList.add("tagify--focus"),0===this.settings.dropdown.enabled&&this.dropdown.show.call(this)):"blur"==t.type?(this.DOM.scope.classList.remove("tagify--focus"),e&&this.settings.addTagOnBlur&&this.addTags(e,!0).length):(this.DOM.input.removeAttribute("style"),this.dropdown.hide.call(this)))},onKeydown:function(t){var e,i,s=this,n=t.target.textContent;if("mix"==this.settings.mode){switch(t.key){case"Backspace":var a=[];i=this.DOM.input.children,setTimeout(function(){[].forEach.call(i,function(t){return a.push(t.getAttribute("value"))}),s.value=s.value.filter(function(t){return-1!=a.indexOf(t.value)})},20);break;case"Enter":t.preventDefault()}return!0}switch(t.key){case"Backspace":""!=n&&8203!=n.charCodeAt(0)||(e=(e=this.DOM.scope.querySelectorAll("tag:not(.tagify--hide):not([readonly])"))[e.length-1],!0===this.settings.backspace?this.removeTag(e):"edit"==this.settings.backspace&&this.editTag(e));break;case"Esc":case"Escape":this.input.set.call(this),t.target.blur();break;case"ArrowRight":case"Tab":if(!n)return!0;case"Enter":t.preventDefault(),this.addTags(this.input.value,!0)}},onInput:function(t){var e=this.input.normalize.call(this),i=e.length>=this.settings.dropdown.enabled;if("mix"==this.settings.mode)return this.events.callbacks.onMixTagsInput.call(this,t);e?this.input.value!=e&&(this.input.set.call(this,e,!1),this.trigger("input",e),-1!=e.search(this.settings.delimiters)?this.addTags(e).length&&this.input.set.call(this):0<=this.settings.dropdown.enabled&&this.dropdown[i?"show":"hide"].call(this,e)):this.input.set.call(this,"")},onMixTagsInput:function(t){var e,i,s,n,a;if(this.maxTagsReached())return!0;window.getSelection&&0<(e=window.getSelection()).rangeCount&&((i=e.getRangeAt(0).cloneRange()).collapse(!0),i.setStart(window.getSelection().focusNode,0),(n=(s=i.toString().split(this.settings.mixTagsAllowedAfter))[s.length-1].match(this.settings.pattern))&&(this.state.tag={prefix:n[0],value:n.input.split(n[0])[1]},n=this.state.tag,a=this.state.tag.value.length>=this.settings.dropdown.enabled)),this.update(),this.trigger("input",this.extend({},this.state.tag,{textContent:this.DOM.input.textContent})),this.state.tag&&this.dropdown[a?"show":"hide"].call(this,this.state.tag.value)},onInputIE:function(t){var e=this;setTimeout(function(){e.events.callbacks.onInput.call(e,t)})},onPaste:function(t){},onClickScope:function(t){var e,i=t.target.closest("tag");"TAGS"==t.target.tagName?this.DOM.input.focus():"X"==t.target.tagName?this.removeTag(t.target.parentNode):i&&(e=this.getNodeIndex(i),this.trigger("click",{tag:i,index:e,data:this.value[e]}))},onEditTagInput:function(t){var e=t.closest("tag"),i=this.getNodeIndex(e),s=this.input.normalize(t),n=s==t.originalValue||this.validateTag(s);e.classList.toggle("tagify--invalid",!0!==n),e.isValid=n,this.trigger("input",{tag:e,index:i,data:this.extend({},this.value[i],{newValue:s})})},onEditTagBlur:function(t){var e,i=t.closest("tag"),s=this.getNodeIndex(i),n=this.input.normalize(t)||t.originalValue,a=i.isValid;void 0!==a&&!0!==a||(t.textContent=n,this.value[s].value=n,this.update(),(e=t.cloneNode(!0)).removeAttribute("contenteditable"),i.title=n,i.classList.remove("tagify--editable"),t.parentNode.replaceChild(e,t),this.trigger("edit",{tag:i,index:s,data:this.value[s]}))},onEditTagkeydown:function(t){switch(t.key){case"Esc":case"Escape":t.target.textContent=t.target.originalValue;case"Enter":case"Tab":t.preventDefault(),t.target.blur()}},onDoubleClickScope:function(t){var e=t.target.closest("tag"),i=this.settings;"mix"==i.mode||i.readonly||i.enforceWhitelist||!e||e.classList.contains("tagify--editable")||e.hasAttribute("readonly")||this.editTag(e)}}},editTag:function(t){var e=this,i=t.querySelector(".tagify__tag-text"),s=this.events.callbacks;i?(t.classList.add("tagify--editable"),i.originalValue=i.textContent,i.setAttribute("contenteditable",!0),i.addEventListener("blur",s.onEditTagBlur.bind(this,i)),i.addEventListener("input",s.onEditTagInput.bind(this,i)),i.addEventListener("keydown",function(t){return s.onEditTagkeydown.call(e,t)}),i.focus()):console.warn("Cannot find element in Tag template: ",".tagify__tag-text")},input:{value:"",set:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:"",e=!(1<arguments.length&&void 0!==arguments[1])||arguments[1];this.input.value=t,e&&(this.DOM.input.innerHTML=t),t||this.dropdown.hide.call(this),t.length<2&&this.input.autocomplete.suggest.call(this,""),this.input.validate.call(this)},setRangeAtStartEnd:function(){var t,e,i=0<arguments.length&&void 0!==arguments[0]&&arguments[0],s=arguments[1];document.createRange&&((t=document.createRange()).selectNodeContents(s||this.DOM.input),t.collapse(i),(e=window.getSelection()).removeAllRanges(),e.addRange(t))},validate:function(){var t=!this.input.value||this.validateTag.call(this,this.input.value);this.DOM.input.classList.toggle("tagify__input--invalid",!0!==t)},normalize:function(){var t=(0<arguments.length&&void 0!==arguments[0]?arguments[0]:this.DOM.input).innerText;return"settings"in this&&this.settings.delimiters&&(t=t.replace(/(?:\r\n|\r|\n)/g,this.settings.delimiters.source.charAt(1))),t=t.replace(/\s/g," ").replace(/^\s+/,"")},autocomplete:{suggest:function(t){t&&this.input.value?this.DOM.input.setAttribute("data-suggest",t.substring(this.input.value.length)):this.DOM.input.removeAttribute("data-suggest")},set:function(t){var e=this.DOM.input.getAttribute("data-suggest"),i=t||(e?this.input.value+e:null);return!!i&&(this.input.set.call(this,i),this.input.autocomplete.suggest.call(this,""),this.dropdown.hide.call(this),this.input.setRangeAtStartEnd.call(this),!0)}}},getNodeIndex:function(t){var e=0;if(t)for(;t=t.previousElementSibling;)e++;return e},isTagDuplicate:function(e){return this.value.findIndex(function(t){return e.trim().toLowerCase()===t.value.toLowerCase()})},getTagIndexByValue:function(i){var s=[];return this.DOM.scope.querySelectorAll("tag").forEach(function(t,e){t.textContent.trim().toLowerCase()==i.toLowerCase()&&s.push(e)}),s},getTagElmByValue:function(t){var e=this.getTagIndexByValue(t)[0];return this.DOM.scope.querySelectorAll("tag")[e]},markTagByValue:function(t,e){return!!(e=e||this.getTagElmByValue(t))&&(e.classList.add("tagify--mark"),e)},isTagBlacklisted:function(e){return e=e.toLowerCase().trim(),this.settings.blacklist.filter(function(t){return e==t.toLowerCase()}).length},isTagWhitelisted:function(e){return this.settings.whitelist.some(function(t){if((t.value||t).toLowerCase()===e.toLowerCase())return!0})},validateTag:function(t){var e=t.trim(),i=!0;return e?this.settings.pattern&&!this.settings.pattern.test(e)?i=this.TEXTS.pattern:this.settings.duplicates||-1===this.isTagDuplicate(e)?(this.isTagBlacklisted(e)||this.settings.enforceWhitelist&&!this.isTagWhitelisted(e))&&(i=this.TEXTS.notAllowed):i=this.TEXTS.duplicate:i=this.TEXTS.empty,i},maxTagsReached:function(){return this.value.length>=this.settings.maxTags&&this.TEXTS.exceed},normalizeTags:function(t){var e=this.settings,i=e.whitelist,s=e.delimiters,n=e.mode,a=!!i&&i[0]instanceof Object,o=t instanceof Array&&t[0]instanceof Object&&"value"in t[0],r=[];if(o)return t;if("number"==typeof t&&(t=t.toString()),"string"==typeof t){if(!t.trim())return[];t=t.split(s).filter(function(t){return t}).map(function(t){return{value:t.trim()}})}else t instanceof Array&&(t=t.map(function(t){return{value:t.trim()}}));return a?(t.forEach(function(e){var t=i.filter(function(t){return t.value.toLowerCase()==e.value.toLowerCase()});t[0]?r.push(t[0]):"mix"!=n&&r.push(e)}),r):t},parseMixTags:function(s){var n=this;return s.split(this.settings.mixTagsAllowedAfter).filter(function(t){return t.match(n.settings.pattern)}).forEach(function(t){var e,i=t.replace(n.settings.pattern,"");n.isTagWhitelisted(i)&&!n.settings.duplicates&&-1==n.isTagDuplicate(i)&&(e=n.normalizeTags.call(n,i)[0],s=n.replaceMixStringWithTag(s,t,e).s)}),this.DOM.input.innerHTML=s,this.update(),s},replaceMixStringWithTag:function(t,e,i,s){return i&&t&&-1!=t.indexOf(e)&&(s=this.createTagElem(i),this.value.push(i),t=t.replace(e,s.outerHTML+"&#8288;")),{s:t,tagElm:s}},addMixTag:function(t){if(t&&this.state.tag){for(var e,i,s,n,a=this.state.tag.prefix+this.state.tag.value,o=document.createNodeIterator(this.DOM.input,NodeFilter.SHOW_TEXT),r=100;(e=o.nextNode())&&r--;)if(e.nodeType===Node.TEXT_NODE){if(-1==(s=e.nodeValue.indexOf(a)))continue;n=e.splitText(s),i=this.createTagElem(t),n.nodeValue=n.nodeValue.replace(a,""),e.parentNode.insertBefore(i,n),i.insertAdjacentHTML("afterend","&#8288;")}i&&(this.value.push(t),this.update(),this.trigger("add",this.extend({},{index:this.value.length,tag:i},t))),this.state.tag=null}},addTags:function(t,e,s){var n=this,a=[];if(t&&t.length)return t=this.normalizeTags.call(this,t),"mix"==this.settings.mode?this.addMixTag(t[0]):(this.DOM.input.removeAttribute("style"),t.forEach(function(t){var e,i;if(t=Object.assign({},t),"function"==typeof n.settings.transformTag&&(t.value=n.settings.transformTag.call(n,t.value)||t.value),!0!==(e=n.maxTagsReached()||n.validateTag.call(n,t.value))){if(s)return;t.class=(t.class||"")+" tagify--notAllowed",t.title=e,n.markTagByValue(t.value),n.trigger("invalid",{data:t,index:n.value.length,message:e})}i=n.createTagElem(t),a.push(i),function(t){var e=this.DOM.scope.lastElementChild;e===this.DOM.input?this.DOM.scope.insertBefore(t,e):this.DOM.scope.appendChild(t)}.call(n,i),!0===e?(n.value.push(t),n.update(),n.DOM.scope.classList.toggle("hasMaxTags",n.value.length>=n.settings.maxTags),n.trigger("add",{tag:i,index:n.value.length-1,data:t})):n.settings.keepInvalidTags||setTimeout(function(){n.removeTag(i,!0)},1e3)}),t.length&&e&&this.input.set.call(this),a);console.warn("[addTags]","no tags to add:",t)},minify:function(t){return t.replace(new RegExp(">[\r\n ]+<","g"),"><")},createTagElem:function(t){var e,i=this.escapeHtml(t.value),s="<tag title='"+i+"' contenteditable='false' spellcheck=\"false\">\n                            <x title=''></x><div><span class='tagify__tag-text'>"+i+"</span></div>\n                        </tag>";if("function"==typeof this.settings.tagTemplate)try{s=this.settings.tagTemplate(i,t)}catch(t){}return this.settings.readonly&&(t.readonly=!0),s=this.minify(s),function(t,e){var i,s=Object.keys(e);for(i=s.length;i--;){var n=s[i];if(!e.hasOwnProperty(n))return;t.setAttribute(n,e[n])}}(e=this.parseHTML(s),t),e},removeTag:function(t,e){var i=2<arguments.length&&void 0!==arguments[2]?arguments[2]:250;if(t&&("string"==typeof t&&(t=this.getTagElmByValue(t)),t instanceof HTMLElement)){var s,n=this.getNodeIndex(t);i&&10<i?(t.style.width=parseFloat(window.getComputedStyle(t).width)+"px",document.body.clientTop,t.classList.add("tagify--hide"),setTimeout(a,400)):a(),e||(s=this.value.splice(n,1)[0],this.update(),this.trigger("remove",{tag:t,index:n,data:s}))}function a(){t.parentNode&&t.parentNode.removeChild(t)}},removeAllTags:function(){this.value=[],this.update(),Array.prototype.slice.call(this.DOM.scope.querySelectorAll("tag")).forEach(function(t){return t.parentNode.removeChild(t)})},update:function(){this.DOM.originalInput.value="mix"==this.settings.mode?this.DOM.input.textContent:JSON.stringify(this.value)},dropdown:{init:function(){this.DOM.dropdown=this.dropdown.build.call(this)},build:function(){var t='<div class="'+("tagify__dropdown "+this.settings.dropdown.classname).trim()+'"></div>';return this.parseHTML(t)},show:function(t){var e,i=this;if(this.settings.whitelist.length){if(this.suggestedListItems=t?this.dropdown.filterListItems.call(this,t):this.settings.whitelist.filter(function(t){return-1==i.isTagDuplicate(t.value||t)}),!this.suggestedListItems.length)return this.input.autocomplete.suggest.call(this),void this.dropdown.hide.call(this);e=this.dropdown.createListHTML.call(this,this.suggestedListItems),this.DOM.dropdown.innerHTML=e,this.dropdown.highlightOption.call(this,this.DOM.dropdown.querySelector(".tagify__dropdown__item")),this.dropdown.position.call(this),!this.DOM.dropdown.parentNode!=document.body&&(document.body.appendChild(this.DOM.dropdown),this.events.binding.call(this,!1),this.dropdown.events.binding.call(this))}},hide:function(){this.DOM.dropdown&&this.DOM.dropdown.parentNode==document.body&&(document.body.removeChild(this.DOM.dropdown),window.removeEventListener("resize",this.dropdown.position),this.dropdown.events.binding.call(this,!1),this.events.binding.call(this))},position:function(){var t=this.DOM.scope.getBoundingClientRect();this.DOM.dropdown.style.cssText="left: "+(t.left+window.pageXOffset)+"px;                                                top: "+(t.top+t.height-1+window.pageYOffset)+"px;                                                width: "+t.width+"px"},events:{binding:function(){var t=!(0<arguments.length&&void 0!==arguments[0])||arguments[0],e=this.listeners.dropdown=this.listeners.dropdown||{position:this.dropdown.position.bind(this),onKeyDown:this.dropdown.events.callbacks.onKeyDown.bind(this),onMouseOver:this.dropdown.events.callbacks.onMouseOver.bind(this),onClick:this.dropdown.events.callbacks.onClick.bind(this)},i=t?"addEventListener":"removeEventListener";window[i]("resize",e.position),window[i]("keydown",e.onKeyDown),window[i]("mousedown",e.onClick),this.DOM.dropdown[i]("mouseover",e.onMouseOver)},callbacks:{onKeyDown:function(t){var e=this.DOM.dropdown.querySelector("[class$='--active']")||this.DOM.dropdown.children[0],i="";switch(t.key){case"ArrowDown":case"ArrowUp":case"Down":case"Up":t.preventDefault(),e&&(e=e[("ArrowUp"==t.key||"Up"==t.key?"previous":"next")+"ElementSibling"]),e||(e=this.DOM.dropdown.children["ArrowUp"==t.key||"Up"==t.key?this.DOM.dropdown.children.length-1:0]),this.dropdown.highlightOption.call(this,e,!0);break;case"Escape":case"Esc":this.dropdown.hide.call(this);break;case"ArrowRight":case"Tab":if(t.preventDefault(),!this.input.autocomplete.set.call(this,e?e.textContent:null))return!1;case"Enter":return t.preventDefault(),i=this.suggestedListItems[this.getNodeIndex(e)]||this.input.value,this.addTags([i],!0),this.dropdown.hide.call(this),!1}},onMouseOver:function(t){t.target.className.includes("__item")&&this.dropdown.highlightOption.call(this,t.target)},onClick:function(t){var e,i,s=this,n=function(){return s.dropdown.hide.call(s)};if(0==t.button&&t.target!=this.DOM.dropdown){if(t.target==document.documentElement)return n();(i=[t.target,t.target.parentNode].filter(function(t){return t.className.includes("tagify__dropdown__item")})[0])?(e=this.suggestedListItems[this.getNodeIndex(i)]||this.input.value,this.addTags([e],!0),this.dropdown.hide.call(this),setTimeout(function(){return s.DOM.input.focus()},100)):n()}}}},highlightOption:function(t,e){if(t){var i,s="tagify__dropdown__item--active";[].forEach.call(this.DOM.dropdown.querySelectorAll("[class$='--active']"),function(t){return t.classList.remove(s)}),t.classList.add(s),e&&(t.parentNode.scrollTop=t.clientHeight+t.offsetTop-t.parentNode.clientHeight),this.settings.autoComplete&&!this.settings.dropdown.fuzzySearch&&(i=this.suggestedListItems[this.getNodeIndex(t)].value||this.input.value,this.input.autocomplete.suggest.call(this,i))}},filterListItems:function(t){if(!t)return"";for(var e,i,s,n,a=[],o=this.settings.whitelist,r=this.settings.dropdown.maxItems||1/0,l=0;l<o.length&&(s=(((e=o[l]instanceof Object?o[l]:{value:o[l]}).searchBy||"")+" "+e.value).toLowerCase().indexOf(t.toLowerCase()),i=this.settings.dropdown.fuzzySearch?0<=s:0==s,n=!this.settings.duplicates&&-1<this.isTagDuplicate(e.value),i&&!n&&r--&&a.push(e),0!=r);l++);return a},createListHTML:function(t){var e=this.settings.dropdown.itemTemplate||function(t){var e=(t.value||t).replace(/`|'/g,"&#39;");return"<div class='tagify__dropdown__item "+(t.class?t.class:"")+"' "+function(t){if("[object object]"!=Object.prototype.toString.call(t))return;var e,i=Object.keys(t),s="";for(e=i.length;e--;){var n=i[e];if("class"!=n&&!t.hasOwnProperty(n))return;s+=" "+n+(t[n]?"="+t[n]:"")}return s}(t)+">"+e+"</div>"};return t.map(e).join("")}}},t});

/***/ }),

/***/ "./seobox/admin/src/css/seobox-admin.scss":
/*!************************************************!*\
  !*** ./seobox/admin/src/css/seobox-admin.scss ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./seobox/admin/src/js/modules/media-upload.js":
/*!*****************************************************!*\
  !*** ./seobox/admin/src/js/modules/media-upload.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var Utils = __webpack_require__(/*! ./utils.js */ "./seobox/admin/src/js/modules/utils.js");

var mediaUpload = {
  init: function init() {
    var uploadButtons = Utils.findAll('.image-upload-button');
    Utils.loop(uploadButtons, function (uploadButton) {
      Utils.addEvent(uploadButton, 'click', function (e) {
        e.preventDefault();
        custom_uploader = wp.media({
          title: 'Insert image',
          library: {
            type: 'image'
          },
          button: {
            text: 'Use this image'
          },
          multiple: false
        }).on('select', function () {
          // Get attachment data
          var attachment = custom_uploader.state().get('selection').first().toJSON(); // Add image id to hidden field

          var targetField = Utils.find('#' + uploadButton.dataset.field);
          targetField.setAttribute('value', attachment.id); // Add image url to prieview source

          var previewTarget = Utils.find('.' + uploadButton.dataset.preview + ' img');
          previewTarget.setAttribute('src', attachment.sizes.thumbnail.url);
        }).open();
      });
    });
  }
};
module.exports = mediaUpload;

/***/ }),

/***/ "./seobox/admin/src/js/modules/tabs.js":
/*!*********************************************!*\
  !*** ./seobox/admin/src/js/modules/tabs.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var Utils = __webpack_require__(/*! ./utils.js */ "./seobox/admin/src/js/modules/utils.js");

var tabs = {
  init: function init() {
    var tabs = Utils.findAll('.seobox-admin-tabs li');
    Utils.loop(tabs, function (tab) {
      Utils.addEvent(tab, 'click', function (e) {
        var currentTab = Utils.find('.seobox-admin-tabs li.active');
        currentTab.classList.remove('active');
        e.target.classList.add('active');
        var currentPanel = Utils.find('.sb-admin-tabs-container .tab.active');
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

/***/ "./seobox/admin/src/js/modules/tags.js":
/*!*********************************************!*\
  !*** ./seobox/admin/src/js/modules/tags.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _yaireo_tagify__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @yaireo/tagify */ "./node_modules/@yaireo/tagify/dist/tagify.min.js");
/* harmony import */ var _yaireo_tagify__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_yaireo_tagify__WEBPACK_IMPORTED_MODULE_0__);

var Tags = {
  init: function init() {
    var input = document.querySelector('#tags'),
        tagify = new _yaireo_tagify__WEBPACK_IMPORTED_MODULE_0___default.a(input, {
      mode: 'mix',
      pattern: /#/,
      // enforceWhitelist: true,
      whitelist: ['title', 'sitename'],
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 10
      }
    });
    tagify.on('input', function (e) {});
    tagify.on('add', function (e) {}); // var input = document.querySelector('#tags');
    // var tagify = new Tagify(input, {
    //     mode             : 'mix',  // <--  Enable mixed-content
    //     pattern          : /@|#/,  // <--  Tag words which start with @ or # (can be a String instead of Regex)
    //     enforceWhitelist : true,
    //     whitelist        : [       // <--  Set the initial whitelist, which will dynamically change as you type (see "input" event below)
    //         {
    //             value : 'cartman',
    //             title : 'Eric Cartman',
    //             class : 'borderd-blue'  // <-- Add any attribute you wish, per-tag
    //         },
    //         {
    //             value : 'kyle',
    //             title : 'Kyle Broflovski'
    //         },
    //         {
    //             value: 'Homer'
    //         }
    //     ],
    //     dropdown   : {
    //         enabled : 1
    //     }
    // })
    // var whitelist_1 = [
    //     {
    //         value : 'kenny',
    //         title : 'Kenny McCormick'
    //     },
    //     {
    //         value : 'cartman',
    //         title : 'Eric Cartman'
    //     },
    //     {
    //         value : 'kyle',
    //         title : 'Kyle Broflovski'
    //     },
    //     {
    //         value : 'token',
    //         title : 'Token Black'
    //     },
    //     {
    //         value : 'jimmy',
    //         title : 'Jimmy Valmer'
    //     },
    //     {
    //         value : 'butters',
    //         title : 'Butters Stotch'
    //     },
    //     {
    //         value : 'stan',
    //         title : 'Stan Marsh'
    //     },
    //     {
    //         value : 'randy',
    //         title : 'Randy Marsh'
    //     },
    //     {
    //         value : 'Mr. Garrison',
    //         title : 'POTUS'
    //     },
    //     {
    //         value : 'Mr. Mackey',
    //         title : "M'Kay"
    //     }
    // ]
    // var whitelist_2 = ['Homer', 'Marge', 'Bart', 'Lisa', 'Maggie', 'Mr. Burns', 'Ned', 'Milhouse', 'Moe'];
    // // A good place to pull server suggestion list accoring to the prefix/value
    // tagify.on('input', function(e){
    //     var prefix = e.detail.prefix;
    //     if( prefix ){
    //         if( prefix == '@' )
    //             tagify.settings.whitelist = whitelist_1;
    //         if( prefix == '#' )
    //             tagify.settings.whitelist = whitelist_2;
    //         if( e.detail.value.length > 1 )
    //             tagify.dropdown.show.call(tagify, e.detail.value);
    //     }
    //     console.log('mix-mode "input" event value: ', e.detail)
    // })
    // tagify.on('add', function(e){
    //     console.log(e)
    // })
  }
};
/* harmony default export */ __webpack_exports__["default"] = (Tags);

/***/ }),

/***/ "./seobox/admin/src/js/modules/utils.js":
/*!**********************************************!*\
  !*** ./seobox/admin/src/js/modules/utils.js ***!
  \**********************************************/
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

/***/ "./seobox/admin/src/js/seobox-admin.js":
/*!*********************************************!*\
  !*** ./seobox/admin/src/js/seobox-admin.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_tags_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/tags.js */ "./seobox/admin/src/js/modules/tags.js");
/* Import utilities. */
var utils = __webpack_require__(/*! ./modules/utils.js */ "./seobox/admin/src/js/modules/utils.js");

var tabs = __webpack_require__(/*! ./modules/tabs.js */ "./seobox/admin/src/js/modules/tabs.js");

var mediaUpload = __webpack_require__(/*! ./modules/media-upload.js */ "./seobox/admin/src/js/modules/media-upload.js");


/* Initialize components. */

utils.domready(function () {
  tabs.init();
  mediaUpload.init();
  _modules_tags_js__WEBPACK_IMPORTED_MODULE_0__["default"].init();
});

/***/ }),

/***/ "./seobox/settings/src/css/seobox-settings.scss":
/*!******************************************************!*\
  !*** ./seobox/settings/src/css/seobox-settings.scss ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************************************************************************************************!*\
  !*** multi ./seobox/admin/src/js/seobox-admin.js ./seobox/admin/src/css/seobox-admin.scss ./seobox/settings/src/css/seobox-settings.scss ***!
  \*******************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/saskia/Documents/repos/websites/wptest/wp-content/plugins/seobox/seobox/admin/src/js/seobox-admin.js */"./seobox/admin/src/js/seobox-admin.js");
__webpack_require__(/*! /Users/saskia/Documents/repos/websites/wptest/wp-content/plugins/seobox/seobox/admin/src/css/seobox-admin.scss */"./seobox/admin/src/css/seobox-admin.scss");
module.exports = __webpack_require__(/*! /Users/saskia/Documents/repos/websites/wptest/wp-content/plugins/seobox/seobox/settings/src/css/seobox-settings.scss */"./seobox/settings/src/css/seobox-settings.scss");


/***/ })

/******/ });