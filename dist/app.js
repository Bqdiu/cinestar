/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var laravel_echo__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! laravel-echo */ "./node_modules/laravel-echo/dist/echo.js");
/* harmony import */ var larasocket_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! larasocket-js */ "./node_modules/larasocket-js/dist/index.js");
/* module decorator */ module = __webpack_require__.hmd(module);
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
/*!
 * Bootstrap v5.0.2 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
(function (global, factory) {
  (typeof exports === "undefined" ? "undefined" : _typeof(exports)) === "object" && "object" !== "undefined" ? module.exports = factory(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@popperjs/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()))) : typeof define === "function" && __webpack_require__.amdO ? define(["@popperjs/core"], factory) : (global = typeof globalThis !== "undefined" ? globalThis : global || self, global.bootstrap = factory(global.Popper));
})(undefined, function (Popper) {
  "use strict";

  function _interopNamespace(e) {
    if (e && e.__esModule) return e;
    var n = Object.create(null);
    if (e) {
      Object.keys(e).forEach(function (k) {
        if (k !== "default") {
          var d = Object.getOwnPropertyDescriptor(e, k);
          Object.defineProperty(n, k, d.get ? d : {
            enumerable: true,
            get: function get() {
              return e[k];
            }
          });
        }
      });
    }
    n["default"] = e;
    return Object.freeze(n);
  }
  var Popper__namespace = /*#__PURE__*/_interopNamespace(Popper);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): dom/selector-engine.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */
  var NODE_TEXT = 3;
  var SelectorEngine = {
    find: function find(selector) {
      var _ref;
      var element = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : document.documentElement;
      return (_ref = []).concat.apply(_ref, _toConsumableArray(Element.prototype.querySelectorAll.call(element, selector)));
    },
    findOne: function findOne(selector) {
      var element = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : document.documentElement;
      return Element.prototype.querySelector.call(element, selector);
    },
    children: function children(element, selector) {
      var _ref2;
      return (_ref2 = []).concat.apply(_ref2, _toConsumableArray(element.children)).filter(function (child) {
        return child.matches(selector);
      });
    },
    parents: function parents(element, selector) {
      var parents = [];
      var ancestor = element.parentNode;
      while (ancestor && ancestor.nodeType === Node.ELEMENT_NODE && ancestor.nodeType !== NODE_TEXT) {
        if (ancestor.matches(selector)) {
          parents.push(ancestor);
        }
        ancestor = ancestor.parentNode;
      }
      return parents;
    },
    prev: function prev(element, selector) {
      var previous = element.previousElementSibling;
      while (previous) {
        if (previous.matches(selector)) {
          return [previous];
        }
        previous = previous.previousElementSibling;
      }
      return [];
    },
    next: function next(element, selector) {
      var next = element.nextElementSibling;
      while (next) {
        if (next.matches(selector)) {
          return [next];
        }
        next = next.nextElementSibling;
      }
      return [];
    }
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): util/index.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */

  var MAX_UID = 1000000;
  var MILLISECONDS_MULTIPLIER = 1000;
  var TRANSITION_END = "transitionend"; // Shoutout AngusCroll (https://goo.gl/pxwQGp)

  var toType = function toType(obj) {
    if (obj === null || obj === undefined) {
      return "".concat(obj);
    }
    return {}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase();
  };
  /**
   * --------------------------------------------------------------------------
   * Public Util Api
   * --------------------------------------------------------------------------
   */

  var getUID = function getUID(prefix) {
    do {
      prefix += Math.floor(Math.random() * MAX_UID);
    } while (document.getElementById(prefix));
    return prefix;
  };
  var getSelector = function getSelector(element) {
    var selector = element.getAttribute("data-bs-target");
    if (!selector || selector === "#") {
      var hrefAttr = element.getAttribute("href"); // The only valid content that could double as a selector are IDs or classes,
      // so everything starting with `#` or `.`. If a "real" URL is used as the selector,
      // `document.querySelector` will rightfully complain it is invalid.
      // See https://github.com/twbs/bootstrap/issues/32273

      if (!hrefAttr || !hrefAttr.includes("#") && !hrefAttr.startsWith(".")) {
        return null;
      } // Just in case some CMS puts out a full URL with the anchor appended

      if (hrefAttr.includes("#") && !hrefAttr.startsWith("#")) {
        hrefAttr = "#".concat(hrefAttr.split("#")[1]);
      }
      selector = hrefAttr && hrefAttr !== "#" ? hrefAttr.trim() : null;
    }
    return selector;
  };
  var getSelectorFromElement = function getSelectorFromElement(element) {
    var selector = getSelector(element);
    if (selector) {
      return document.querySelector(selector) ? selector : null;
    }
    return null;
  };
  var getElementFromSelector = function getElementFromSelector(element) {
    var selector = getSelector(element);
    return selector ? document.querySelector(selector) : null;
  };
  var getTransitionDurationFromElement = function getTransitionDurationFromElement(element) {
    if (!element) {
      return 0;
    } // Get transition-duration of the element

    var _window$getComputedSt = window.getComputedStyle(element),
      transitionDuration = _window$getComputedSt.transitionDuration,
      transitionDelay = _window$getComputedSt.transitionDelay;
    var floatTransitionDuration = Number.parseFloat(transitionDuration);
    var floatTransitionDelay = Number.parseFloat(transitionDelay); // Return 0 if element or transition duration is not found

    if (!floatTransitionDuration && !floatTransitionDelay) {
      return 0;
    } // If multiple durations are defined, take the first

    transitionDuration = transitionDuration.split(",")[0];
    transitionDelay = transitionDelay.split(",")[0];
    return (Number.parseFloat(transitionDuration) + Number.parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER;
  };
  var triggerTransitionEnd = function triggerTransitionEnd(element) {
    element.dispatchEvent(new Event(TRANSITION_END));
  };
  var isElement = function isElement(obj) {
    if (!obj || _typeof(obj) !== "object") {
      return false;
    }
    if (typeof obj.jquery !== "undefined") {
      obj = obj[0];
    }
    return typeof obj.nodeType !== "undefined";
  };
  var getElement = function getElement(obj) {
    if (isElement(obj)) {
      // it's a jQuery object or a node element
      return obj.jquery ? obj[0] : obj;
    }
    if (typeof obj === "string" && obj.length > 0) {
      return SelectorEngine.findOne(obj);
    }
    return null;
  };
  var typeCheckConfig = function typeCheckConfig(componentName, config, configTypes) {
    Object.keys(configTypes).forEach(function (property) {
      var expectedTypes = configTypes[property];
      var value = config[property];
      var valueType = value && isElement(value) ? "element" : toType(value);
      if (!new RegExp(expectedTypes).test(valueType)) {
        throw new TypeError("".concat(componentName.toUpperCase(), ": Option \"").concat(property, "\" provided type \"").concat(valueType, "\" but expected type \"").concat(expectedTypes, "\"."));
      }
    });
  };
  var isVisible = function isVisible(element) {
    if (!isElement(element) || element.getClientRects().length === 0) {
      return false;
    }
    return getComputedStyle(element).getPropertyValue("visibility") === "visible";
  };
  var isDisabled = function isDisabled(element) {
    if (!element || element.nodeType !== Node.ELEMENT_NODE) {
      return true;
    }
    if (element.classList.contains("disabled")) {
      return true;
    }
    if (typeof element.disabled !== "undefined") {
      return element.disabled;
    }
    return element.hasAttribute("disabled") && element.getAttribute("disabled") !== "false";
  };
  var findShadowRoot = function findShadowRoot(element) {
    if (!document.documentElement.attachShadow) {
      return null;
    } // Can find the shadow root otherwise it'll return the document

    if (typeof element.getRootNode === "function") {
      var root = element.getRootNode();
      return root instanceof ShadowRoot ? root : null;
    }
    if (element instanceof ShadowRoot) {
      return element;
    } // when we don't find a shadow root

    if (!element.parentNode) {
      return null;
    }
    return findShadowRoot(element.parentNode);
  };
  var noop = function noop() {};
  var reflow = function reflow(element) {
    return element.offsetHeight;
  };
  var getjQuery = function getjQuery() {
    var _window = window,
      jQuery = _window.jQuery;
    if (jQuery && !document.body.hasAttribute("data-bs-no-jquery")) {
      return jQuery;
    }
    return null;
  };
  var DOMContentLoadedCallbacks = [];
  var onDOMContentLoaded = function onDOMContentLoaded(callback) {
    if (document.readyState === "loading") {
      // add listener on the first call when the document is in loading state
      if (!DOMContentLoadedCallbacks.length) {
        document.addEventListener("DOMContentLoaded", function () {
          DOMContentLoadedCallbacks.forEach(function (callback) {
            return callback();
          });
        });
      }
      DOMContentLoadedCallbacks.push(callback);
    } else {
      callback();
    }
  };
  var isRTL = function isRTL() {
    return document.documentElement.dir === "rtl";
  };
  var defineJQueryPlugin = function defineJQueryPlugin(plugin) {
    onDOMContentLoaded(function () {
      var $ = getjQuery();
      /* istanbul ignore if */

      if ($) {
        var name = plugin.NAME;
        var JQUERY_NO_CONFLICT = $.fn[name];
        $.fn[name] = plugin.jQueryInterface;
        $.fn[name].Constructor = plugin;
        $.fn[name].noConflict = function () {
          $.fn[name] = JQUERY_NO_CONFLICT;
          return plugin.jQueryInterface;
        };
      }
    });
  };
  var execute = function execute(callback) {
    if (typeof callback === "function") {
      callback();
    }
  };
  var executeAfterTransition = function executeAfterTransition(callback, transitionElement) {
    var waitForTransition = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
    if (!waitForTransition) {
      execute(callback);
      return;
    }
    var durationPadding = 5;
    var emulatedDuration = getTransitionDurationFromElement(transitionElement) + durationPadding;
    var called = false;
    var handler = function handler(_ref3) {
      var target = _ref3.target;
      if (target !== transitionElement) {
        return;
      }
      called = true;
      transitionElement.removeEventListener(TRANSITION_END, handler);
      execute(callback);
    };
    transitionElement.addEventListener(TRANSITION_END, handler);
    setTimeout(function () {
      if (!called) {
        triggerTransitionEnd(transitionElement);
      }
    }, emulatedDuration);
  };
  /**
   * Return the previous/next element of a list.
   *
   * @param {array} list    The list of elements
   * @param activeElement   The active element
   * @param shouldGetNext   Choose to get next or previous element
   * @param isCycleAllowed
   * @return {Element|elem} The proper element
   */

  var getNextActiveElement = function getNextActiveElement(list, activeElement, shouldGetNext, isCycleAllowed) {
    var index = list.indexOf(activeElement); // if the element does not exist in the list return an element depending on the direction and if cycle is allowed

    if (index === -1) {
      return list[!shouldGetNext && isCycleAllowed ? list.length - 1 : 0];
    }
    var listLength = list.length;
    index += shouldGetNext ? 1 : -1;
    if (isCycleAllowed) {
      index = (index + listLength) % listLength;
    }
    return list[Math.max(0, Math.min(index, listLength - 1))];
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): dom/event-handler.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var namespaceRegex = /[^.]*(?=\..*)\.|.*/;
  var stripNameRegex = /\..*/;
  var stripUidRegex = /::\d+$/;
  var eventRegistry = {}; // Events storage

  var uidEvent = 1;
  var customEvents = {
    mouseenter: "mouseover",
    mouseleave: "mouseout"
  };
  var customEventsRegex = /^(mouseenter|mouseleave)/i;
  var nativeEvents = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);
  /**
   * ------------------------------------------------------------------------
   * Private methods
   * ------------------------------------------------------------------------
   */

  function getUidEvent(element, uid) {
    return uid && "".concat(uid, "::").concat(uidEvent++) || element.uidEvent || uidEvent++;
  }
  function getEvent(element) {
    var uid = getUidEvent(element);
    element.uidEvent = uid;
    eventRegistry[uid] = eventRegistry[uid] || {};
    return eventRegistry[uid];
  }
  function bootstrapHandler(element, fn) {
    return function handler(event) {
      event.delegateTarget = element;
      if (handler.oneOff) {
        EventHandler.off(element, event.type, fn);
      }
      return fn.apply(element, [event]);
    };
  }
  function bootstrapDelegationHandler(element, selector, fn) {
    return function handler(event) {
      var domElements = element.querySelectorAll(selector);
      for (var target = event.target; target && target !== this; target = target.parentNode) {
        for (var i = domElements.length; i--;) {
          if (domElements[i] === target) {
            event.delegateTarget = target;
            if (handler.oneOff) {
              // eslint-disable-next-line unicorn/consistent-destructuring
              EventHandler.off(element, event.type, selector, fn);
            }
            return fn.apply(target, [event]);
          }
        }
      } // To please ESLint

      return null;
    };
  }
  function findHandler(events, handler) {
    var delegationSelector = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
    var uidEventList = Object.keys(events);
    for (var i = 0, len = uidEventList.length; i < len; i++) {
      var event = events[uidEventList[i]];
      if (event.originalHandler === handler && event.delegationSelector === delegationSelector) {
        return event;
      }
    }
    return null;
  }
  function normalizeParams(originalTypeEvent, handler, delegationFn) {
    var delegation = typeof handler === "string";
    var originalHandler = delegation ? delegationFn : handler;
    var typeEvent = getTypeEvent(originalTypeEvent);
    var isNative = nativeEvents.has(typeEvent);
    if (!isNative) {
      typeEvent = originalTypeEvent;
    }
    return [delegation, originalHandler, typeEvent];
  }
  function addHandler(element, originalTypeEvent, handler, delegationFn, oneOff) {
    if (typeof originalTypeEvent !== "string" || !element) {
      return;
    }
    if (!handler) {
      handler = delegationFn;
      delegationFn = null;
    } // in case of mouseenter or mouseleave wrap the handler within a function that checks for its DOM position
    // this prevents the handler from being dispatched the same way as mouseover or mouseout does

    if (customEventsRegex.test(originalTypeEvent)) {
      var wrapFn = function wrapFn(fn) {
        return function (event) {
          if (!event.relatedTarget || event.relatedTarget !== event.delegateTarget && !event.delegateTarget.contains(event.relatedTarget)) {
            return fn.call(this, event);
          }
        };
      };
      if (delegationFn) {
        delegationFn = wrapFn(delegationFn);
      } else {
        handler = wrapFn(handler);
      }
    }
    var _normalizeParams = normalizeParams(originalTypeEvent, handler, delegationFn),
      _normalizeParams2 = _slicedToArray(_normalizeParams, 3),
      delegation = _normalizeParams2[0],
      originalHandler = _normalizeParams2[1],
      typeEvent = _normalizeParams2[2];
    var events = getEvent(element);
    var handlers = events[typeEvent] || (events[typeEvent] = {});
    var previousFn = findHandler(handlers, originalHandler, delegation ? handler : null);
    if (previousFn) {
      previousFn.oneOff = previousFn.oneOff && oneOff;
      return;
    }
    var uid = getUidEvent(originalHandler, originalTypeEvent.replace(namespaceRegex, ""));
    var fn = delegation ? bootstrapDelegationHandler(element, handler, delegationFn) : bootstrapHandler(element, handler);
    fn.delegationSelector = delegation ? handler : null;
    fn.originalHandler = originalHandler;
    fn.oneOff = oneOff;
    fn.uidEvent = uid;
    handlers[uid] = fn;
    element.addEventListener(typeEvent, fn, delegation);
  }
  function removeHandler(element, events, typeEvent, handler, delegationSelector) {
    var fn = findHandler(events[typeEvent], handler, delegationSelector);
    if (!fn) {
      return;
    }
    element.removeEventListener(typeEvent, fn, Boolean(delegationSelector));
    delete events[typeEvent][fn.uidEvent];
  }
  function removeNamespacedHandlers(element, events, typeEvent, namespace) {
    var storeElementEvent = events[typeEvent] || {};
    Object.keys(storeElementEvent).forEach(function (handlerKey) {
      if (handlerKey.includes(namespace)) {
        var event = storeElementEvent[handlerKey];
        removeHandler(element, events, typeEvent, event.originalHandler, event.delegationSelector);
      }
    });
  }
  function getTypeEvent(event) {
    // allow to get the native events from namespaced events ('click.bs.button' --> 'click')
    event = event.replace(stripNameRegex, "");
    return customEvents[event] || event;
  }
  var EventHandler = {
    on: function on(element, event, handler, delegationFn) {
      addHandler(element, event, handler, delegationFn, false);
    },
    one: function one(element, event, handler, delegationFn) {
      addHandler(element, event, handler, delegationFn, true);
    },
    off: function off(element, originalTypeEvent, handler, delegationFn) {
      if (typeof originalTypeEvent !== "string" || !element) {
        return;
      }
      var _normalizeParams3 = normalizeParams(originalTypeEvent, handler, delegationFn),
        _normalizeParams4 = _slicedToArray(_normalizeParams3, 3),
        delegation = _normalizeParams4[0],
        originalHandler = _normalizeParams4[1],
        typeEvent = _normalizeParams4[2];
      var inNamespace = typeEvent !== originalTypeEvent;
      var events = getEvent(element);
      var isNamespace = originalTypeEvent.startsWith(".");
      if (typeof originalHandler !== "undefined") {
        // Simplest case: handler is passed, remove that listener ONLY.
        if (!events || !events[typeEvent]) {
          return;
        }
        removeHandler(element, events, typeEvent, originalHandler, delegation ? handler : null);
        return;
      }
      if (isNamespace) {
        Object.keys(events).forEach(function (elementEvent) {
          removeNamespacedHandlers(element, events, elementEvent, originalTypeEvent.slice(1));
        });
      }
      var storeElementEvent = events[typeEvent] || {};
      Object.keys(storeElementEvent).forEach(function (keyHandlers) {
        var handlerKey = keyHandlers.replace(stripUidRegex, "");
        if (!inNamespace || originalTypeEvent.includes(handlerKey)) {
          var event = storeElementEvent[keyHandlers];
          removeHandler(element, events, typeEvent, event.originalHandler, event.delegationSelector);
        }
      });
    },
    trigger: function trigger(element, event, args) {
      if (typeof event !== "string" || !element) {
        return null;
      }
      var $ = getjQuery();
      var typeEvent = getTypeEvent(event);
      var inNamespace = event !== typeEvent;
      var isNative = nativeEvents.has(typeEvent);
      var jQueryEvent;
      var bubbles = true;
      var nativeDispatch = true;
      var defaultPrevented = false;
      var evt = null;
      if (inNamespace && $) {
        jQueryEvent = $.Event(event, args);
        $(element).trigger(jQueryEvent);
        bubbles = !jQueryEvent.isPropagationStopped();
        nativeDispatch = !jQueryEvent.isImmediatePropagationStopped();
        defaultPrevented = jQueryEvent.isDefaultPrevented();
      }
      if (isNative) {
        evt = document.createEvent("HTMLEvents");
        evt.initEvent(typeEvent, bubbles, true);
      } else {
        evt = new CustomEvent(event, {
          bubbles: bubbles,
          cancelable: true
        });
      } // merge custom information in our event

      if (typeof args !== "undefined") {
        Object.keys(args).forEach(function (key) {
          Object.defineProperty(evt, key, {
            get: function get() {
              return args[key];
            }
          });
        });
      }
      if (defaultPrevented) {
        evt.preventDefault();
      }
      if (nativeDispatch) {
        element.dispatchEvent(evt);
      }
      if (evt.defaultPrevented && typeof jQueryEvent !== "undefined") {
        jQueryEvent.preventDefault();
      }
      return evt;
    }
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): dom/data.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */
  var elementMap = new Map();
  var Data = {
    set: function set(element, key, instance) {
      if (!elementMap.has(element)) {
        elementMap.set(element, new Map());
      }
      var instanceMap = elementMap.get(element); // make it clear we only want one instance per element
      // can be removed later when multiple key/instances are fine to be used

      if (!instanceMap.has(key) && instanceMap.size !== 0) {
        // eslint-disable-next-line no-console
        console.error("Bootstrap doesn't allow more than one instance per element. Bound instance: ".concat(Array.from(instanceMap.keys())[0], "."));
        return;
      }
      instanceMap.set(key, instance);
    },
    get: function get(element, key) {
      if (elementMap.has(element)) {
        return elementMap.get(element).get(key) || null;
      }
      return null;
    },
    remove: function remove(element, key) {
      if (!elementMap.has(element)) {
        return;
      }
      var instanceMap = elementMap.get(element);
      instanceMap["delete"](key); // free up element references if there are no instances left for an element

      if (instanceMap.size === 0) {
        elementMap["delete"](element);
      }
    }
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): base-component.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var VERSION = "5.0.2";
  var BaseComponent = /*#__PURE__*/function () {
    function BaseComponent(element) {
      _classCallCheck(this, BaseComponent);
      element = getElement(element);
      if (!element) {
        return;
      }
      this._element = element;
      Data.set(this._element, this.constructor.DATA_KEY, this);
    }
    return _createClass(BaseComponent, [{
      key: "dispose",
      value: function dispose() {
        var _this = this;
        Data.remove(this._element, this.constructor.DATA_KEY);
        EventHandler.off(this._element, this.constructor.EVENT_KEY);
        Object.getOwnPropertyNames(this).forEach(function (propertyName) {
          _this[propertyName] = null;
        });
      }
    }, {
      key: "_queueCallback",
      value: function _queueCallback(callback, element) {
        var isAnimated = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        executeAfterTransition(callback, element, isAnimated);
      }
      /** Static */
    }], [{
      key: "getInstance",
      value: function getInstance(element) {
        return Data.get(element, this.DATA_KEY);
      }
    }, {
      key: "getOrCreateInstance",
      value: function getOrCreateInstance(element) {
        var config = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
        return this.getInstance(element) || new this(element, _typeof(config) === "object" ? config : null);
      }
    }, {
      key: "VERSION",
      get: function get() {
        return VERSION;
      }
    }, {
      key: "NAME",
      get: function get() {
        throw new Error('You have to implement the static method "NAME", for each component!');
      }
    }, {
      key: "DATA_KEY",
      get: function get() {
        return "bs.".concat(this.NAME);
      }
    }, {
      key: "EVENT_KEY",
      get: function get() {
        return ".".concat(this.DATA_KEY);
      }
    }]);
  }();
  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): alert.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */
  var NAME$c = "alert";
  var DATA_KEY$b = "bs.alert";
  var EVENT_KEY$b = ".".concat(DATA_KEY$b);
  var DATA_API_KEY$8 = ".data-api";
  var SELECTOR_DISMISS = '[data-bs-dismiss="alert"]';
  var EVENT_CLOSE = "close".concat(EVENT_KEY$b);
  var EVENT_CLOSED = "closed".concat(EVENT_KEY$b);
  var EVENT_CLICK_DATA_API$7 = "click".concat(EVENT_KEY$b).concat(DATA_API_KEY$8);
  var CLASS_NAME_ALERT = "alert";
  var CLASS_NAME_FADE$6 = "fade";
  var CLASS_NAME_SHOW$9 = "show";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Alert = /*#__PURE__*/function (_BaseComponent) {
    function Alert() {
      _classCallCheck(this, Alert);
      return _callSuper(this, Alert, arguments);
    }
    _inherits(Alert, _BaseComponent);
    return _createClass(Alert, [{
      key: "close",
      value:
      // Public

      function close(element) {
        var rootElement = element ? this._getRootElement(element) : this._element;
        var customEvent = this._triggerCloseEvent(rootElement);
        if (customEvent === null || customEvent.defaultPrevented) {
          return;
        }
        this._removeElement(rootElement);
      } // Private
    }, {
      key: "_getRootElement",
      value: function _getRootElement(element) {
        return getElementFromSelector(element) || element.closest(".".concat(CLASS_NAME_ALERT));
      }
    }, {
      key: "_triggerCloseEvent",
      value: function _triggerCloseEvent(element) {
        return EventHandler.trigger(element, EVENT_CLOSE);
      }
    }, {
      key: "_removeElement",
      value: function _removeElement(element) {
        var _this2 = this;
        element.classList.remove(CLASS_NAME_SHOW$9);
        var isAnimated = element.classList.contains(CLASS_NAME_FADE$6);
        this._queueCallback(function () {
          return _this2._destroyElement(element);
        }, element, isAnimated);
      }
    }, {
      key: "_destroyElement",
      value: function _destroyElement(element) {
        element.remove();
        EventHandler.trigger(element, EVENT_CLOSED);
      } // Static
    }], [{
      key: "NAME",
      get:
      // Getters
      function get() {
        return NAME$c;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Alert.getOrCreateInstance(this);
          if (config === "close") {
            data[config](this);
          }
        });
      }
    }, {
      key: "handleDismiss",
      value: function handleDismiss(alertInstance) {
        return function (event) {
          if (event) {
            event.preventDefault();
          }
          alertInstance.close(this);
        };
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$7, SELECTOR_DISMISS, Alert.handleDismiss(new Alert()));
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Alert to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Alert);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): button.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$b = "button";
  var DATA_KEY$a = "bs.button";
  var EVENT_KEY$a = ".".concat(DATA_KEY$a);
  var DATA_API_KEY$7 = ".data-api";
  var CLASS_NAME_ACTIVE$3 = "active";
  var SELECTOR_DATA_TOGGLE$5 = '[data-bs-toggle="button"]';
  var EVENT_CLICK_DATA_API$6 = "click".concat(EVENT_KEY$a).concat(DATA_API_KEY$7);
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Button = /*#__PURE__*/function (_BaseComponent2) {
    function Button() {
      _classCallCheck(this, Button);
      return _callSuper(this, Button, arguments);
    }
    _inherits(Button, _BaseComponent2);
    return _createClass(Button, [{
      key: "toggle",
      value:
      // Public

      function toggle() {
        // Toggle class and sync the `aria-pressed` attribute with the return value of the `.toggle()` method
        this._element.setAttribute("aria-pressed", this._element.classList.toggle(CLASS_NAME_ACTIVE$3));
      } // Static
    }], [{
      key: "NAME",
      get:
      // Getters
      function get() {
        return NAME$b;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Button.getOrCreateInstance(this);
          if (config === "toggle") {
            data[config]();
          }
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$6, SELECTOR_DATA_TOGGLE$5, function (event) {
    event.preventDefault();
    var button = event.target.closest(SELECTOR_DATA_TOGGLE$5);
    var data = Button.getOrCreateInstance(button);
    data.toggle();
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Button to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Button);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): dom/manipulator.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  function normalizeData(val) {
    if (val === "true") {
      return true;
    }
    if (val === "false") {
      return false;
    }
    if (val === Number(val).toString()) {
      return Number(val);
    }
    if (val === "" || val === "null") {
      return null;
    }
    return val;
  }
  function normalizeDataKey(key) {
    return key.replace(/[A-Z]/g, function (chr) {
      return "-".concat(chr.toLowerCase());
    });
  }
  var Manipulator = {
    setDataAttribute: function setDataAttribute(element, key, value) {
      element.setAttribute("data-bs-".concat(normalizeDataKey(key)), value);
    },
    removeDataAttribute: function removeDataAttribute(element, key) {
      element.removeAttribute("data-bs-".concat(normalizeDataKey(key)));
    },
    getDataAttributes: function getDataAttributes(element) {
      if (!element) {
        return {};
      }
      var attributes = {};
      Object.keys(element.dataset).filter(function (key) {
        return key.startsWith("bs");
      }).forEach(function (key) {
        var pureKey = key.replace(/^bs/, "");
        pureKey = pureKey.charAt(0).toLowerCase() + pureKey.slice(1, pureKey.length);
        attributes[pureKey] = normalizeData(element.dataset[key]);
      });
      return attributes;
    },
    getDataAttribute: function getDataAttribute(element, key) {
      return normalizeData(element.getAttribute("data-bs-".concat(normalizeDataKey(key))));
    },
    offset: function offset(element) {
      var rect = element.getBoundingClientRect();
      return {
        top: rect.top + document.body.scrollTop,
        left: rect.left + document.body.scrollLeft
      };
    },
    position: function position(element) {
      return {
        top: element.offsetTop,
        left: element.offsetLeft
      };
    }
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): carousel.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$a = "carousel";
  var DATA_KEY$9 = "bs.carousel";
  var EVENT_KEY$9 = ".".concat(DATA_KEY$9);
  var DATA_API_KEY$6 = ".data-api";
  var ARROW_LEFT_KEY = "ArrowLeft";
  var ARROW_RIGHT_KEY = "ArrowRight";
  var TOUCHEVENT_COMPAT_WAIT = 500; // Time for mouse compat events to fire after touch

  var SWIPE_THRESHOLD = 40;
  var Default$9 = {
    interval: 5000,
    keyboard: true,
    slide: false,
    pause: "hover",
    wrap: true,
    touch: true
  };
  var DefaultType$9 = {
    interval: "(number|boolean)",
    keyboard: "boolean",
    slide: "(boolean|string)",
    pause: "(string|boolean)",
    wrap: "boolean",
    touch: "boolean"
  };
  var ORDER_NEXT = "next";
  var ORDER_PREV = "prev";
  var DIRECTION_LEFT = "left";
  var DIRECTION_RIGHT = "right";
  var KEY_TO_DIRECTION = _defineProperty(_defineProperty({}, ARROW_LEFT_KEY, DIRECTION_RIGHT), ARROW_RIGHT_KEY, DIRECTION_LEFT);
  var EVENT_SLIDE = "slide".concat(EVENT_KEY$9);
  var EVENT_SLID = "slid".concat(EVENT_KEY$9);
  var EVENT_KEYDOWN = "keydown".concat(EVENT_KEY$9);
  var EVENT_MOUSEENTER = "mouseenter".concat(EVENT_KEY$9);
  var EVENT_MOUSELEAVE = "mouseleave".concat(EVENT_KEY$9);
  var EVENT_TOUCHSTART = "touchstart".concat(EVENT_KEY$9);
  var EVENT_TOUCHMOVE = "touchmove".concat(EVENT_KEY$9);
  var EVENT_TOUCHEND = "touchend".concat(EVENT_KEY$9);
  var EVENT_POINTERDOWN = "pointerdown".concat(EVENT_KEY$9);
  var EVENT_POINTERUP = "pointerup".concat(EVENT_KEY$9);
  var EVENT_DRAG_START = "dragstart".concat(EVENT_KEY$9);
  var EVENT_LOAD_DATA_API$2 = "load".concat(EVENT_KEY$9).concat(DATA_API_KEY$6);
  var EVENT_CLICK_DATA_API$5 = "click".concat(EVENT_KEY$9).concat(DATA_API_KEY$6);
  var CLASS_NAME_CAROUSEL = "carousel";
  var CLASS_NAME_ACTIVE$2 = "active";
  var CLASS_NAME_SLIDE = "slide";
  var CLASS_NAME_END = "carousel-item-end";
  var CLASS_NAME_START = "carousel-item-start";
  var CLASS_NAME_NEXT = "carousel-item-next";
  var CLASS_NAME_PREV = "carousel-item-prev";
  var CLASS_NAME_POINTER_EVENT = "pointer-event";
  var SELECTOR_ACTIVE$1 = ".active";
  var SELECTOR_ACTIVE_ITEM = ".active.carousel-item";
  var SELECTOR_ITEM = ".carousel-item";
  var SELECTOR_ITEM_IMG = ".carousel-item img";
  var SELECTOR_NEXT_PREV = ".carousel-item-next, .carousel-item-prev";
  var SELECTOR_INDICATORS = ".carousel-indicators";
  var SELECTOR_INDICATOR = "[data-bs-target]";
  var SELECTOR_DATA_SLIDE = "[data-bs-slide], [data-bs-slide-to]";
  var SELECTOR_DATA_RIDE = '[data-bs-ride="carousel"]';
  var POINTER_TYPE_TOUCH = "touch";
  var POINTER_TYPE_PEN = "pen";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Carousel = /*#__PURE__*/function (_BaseComponent3) {
    function Carousel(element, config) {
      var _this3;
      _classCallCheck(this, Carousel);
      _this3 = _callSuper(this, Carousel, [element]);
      _this3._items = null;
      _this3._interval = null;
      _this3._activeElement = null;
      _this3._isPaused = false;
      _this3._isSliding = false;
      _this3.touchTimeout = null;
      _this3.touchStartX = 0;
      _this3.touchDeltaX = 0;
      _this3._config = _this3._getConfig(config);
      _this3._indicatorsElement = SelectorEngine.findOne(SELECTOR_INDICATORS, _this3._element);
      _this3._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0;
      _this3._pointerEvent = Boolean(window.PointerEvent);
      _this3._addEventListeners();
      return _this3;
    } // Getters
    _inherits(Carousel, _BaseComponent3);
    return _createClass(Carousel, [{
      key: "next",
      value:
      // Public

      function next() {
        this._slide(ORDER_NEXT);
      }
    }, {
      key: "nextWhenVisible",
      value: function nextWhenVisible() {
        // Don't call next when the page isn't visible
        // or the carousel or its parent isn't visible
        if (!document.hidden && isVisible(this._element)) {
          this.next();
        }
      }
    }, {
      key: "prev",
      value: function prev() {
        this._slide(ORDER_PREV);
      }
    }, {
      key: "pause",
      value: function pause(event) {
        if (!event) {
          this._isPaused = true;
        }
        if (SelectorEngine.findOne(SELECTOR_NEXT_PREV, this._element)) {
          triggerTransitionEnd(this._element);
          this.cycle(true);
        }
        clearInterval(this._interval);
        this._interval = null;
      }
    }, {
      key: "cycle",
      value: function cycle(event) {
        if (!event) {
          this._isPaused = false;
        }
        if (this._interval) {
          clearInterval(this._interval);
          this._interval = null;
        }
        if (this._config && this._config.interval && !this._isPaused) {
          this._updateInterval();
          this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval);
        }
      }
    }, {
      key: "to",
      value: function to(index) {
        var _this4 = this;
        this._activeElement = SelectorEngine.findOne(SELECTOR_ACTIVE_ITEM, this._element);
        var activeIndex = this._getItemIndex(this._activeElement);
        if (index > this._items.length - 1 || index < 0) {
          return;
        }
        if (this._isSliding) {
          EventHandler.one(this._element, EVENT_SLID, function () {
            return _this4.to(index);
          });
          return;
        }
        if (activeIndex === index) {
          this.pause();
          this.cycle();
          return;
        }
        var order = index > activeIndex ? ORDER_NEXT : ORDER_PREV;
        this._slide(order, this._items[index]);
      } // Private
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, Default$9), Manipulator.getDataAttributes(this._element)), _typeof(config) === "object" ? config : {});
        typeCheckConfig(NAME$a, config, DefaultType$9);
        return config;
      }
    }, {
      key: "_handleSwipe",
      value: function _handleSwipe() {
        var absDeltax = Math.abs(this.touchDeltaX);
        if (absDeltax <= SWIPE_THRESHOLD) {
          return;
        }
        var direction = absDeltax / this.touchDeltaX;
        this.touchDeltaX = 0;
        if (!direction) {
          return;
        }
        this._slide(direction > 0 ? DIRECTION_RIGHT : DIRECTION_LEFT);
      }
    }, {
      key: "_addEventListeners",
      value: function _addEventListeners() {
        var _this5 = this;
        if (this._config.keyboard) {
          EventHandler.on(this._element, EVENT_KEYDOWN, function (event) {
            return _this5._keydown(event);
          });
        }
        if (this._config.pause === "hover") {
          EventHandler.on(this._element, EVENT_MOUSEENTER, function (event) {
            return _this5.pause(event);
          });
          EventHandler.on(this._element, EVENT_MOUSELEAVE, function (event) {
            return _this5.cycle(event);
          });
        }
        if (this._config.touch && this._touchSupported) {
          this._addTouchEventListeners();
        }
      }
    }, {
      key: "_addTouchEventListeners",
      value: function _addTouchEventListeners() {
        var _this6 = this;
        var start = function start(event) {
          if (_this6._pointerEvent && (event.pointerType === POINTER_TYPE_PEN || event.pointerType === POINTER_TYPE_TOUCH)) {
            _this6.touchStartX = event.clientX;
          } else if (!_this6._pointerEvent) {
            _this6.touchStartX = event.touches[0].clientX;
          }
        };
        var move = function move(event) {
          // ensure swiping with one touch and not pinching
          _this6.touchDeltaX = event.touches && event.touches.length > 1 ? 0 : event.touches[0].clientX - _this6.touchStartX;
        };
        var end = function end(event) {
          if (_this6._pointerEvent && (event.pointerType === POINTER_TYPE_PEN || event.pointerType === POINTER_TYPE_TOUCH)) {
            _this6.touchDeltaX = event.clientX - _this6.touchStartX;
          }
          _this6._handleSwipe();
          if (_this6._config.pause === "hover") {
            // If it's a touch-enabled device, mouseenter/leave are fired as
            // part of the mouse compatibility events on first tap - the carousel
            // would stop cycling until user tapped out of it;
            // here, we listen for touchend, explicitly pause the carousel
            // (as if it's the second time we tap on it, mouseenter compat event
            // is NOT fired) and after a timeout (to allow for mouse compatibility
            // events to fire) we explicitly restart cycling
            _this6.pause();
            if (_this6.touchTimeout) {
              clearTimeout(_this6.touchTimeout);
            }
            _this6.touchTimeout = setTimeout(function (event) {
              return _this6.cycle(event);
            }, TOUCHEVENT_COMPAT_WAIT + _this6._config.interval);
          }
        };
        SelectorEngine.find(SELECTOR_ITEM_IMG, this._element).forEach(function (itemImg) {
          EventHandler.on(itemImg, EVENT_DRAG_START, function (e) {
            return e.preventDefault();
          });
        });
        if (this._pointerEvent) {
          EventHandler.on(this._element, EVENT_POINTERDOWN, function (event) {
            return start(event);
          });
          EventHandler.on(this._element, EVENT_POINTERUP, function (event) {
            return end(event);
          });
          this._element.classList.add(CLASS_NAME_POINTER_EVENT);
        } else {
          EventHandler.on(this._element, EVENT_TOUCHSTART, function (event) {
            return start(event);
          });
          EventHandler.on(this._element, EVENT_TOUCHMOVE, function (event) {
            return move(event);
          });
          EventHandler.on(this._element, EVENT_TOUCHEND, function (event) {
            return end(event);
          });
        }
      }
    }, {
      key: "_keydown",
      value: function _keydown(event) {
        if (/input|textarea/i.test(event.target.tagName)) {
          return;
        }
        var direction = KEY_TO_DIRECTION[event.key];
        if (direction) {
          event.preventDefault();
          this._slide(direction);
        }
      }
    }, {
      key: "_getItemIndex",
      value: function _getItemIndex(element) {
        this._items = element && element.parentNode ? SelectorEngine.find(SELECTOR_ITEM, element.parentNode) : [];
        return this._items.indexOf(element);
      }
    }, {
      key: "_getItemByOrder",
      value: function _getItemByOrder(order, activeElement) {
        var isNext = order === ORDER_NEXT;
        return getNextActiveElement(this._items, activeElement, isNext, this._config.wrap);
      }
    }, {
      key: "_triggerSlideEvent",
      value: function _triggerSlideEvent(relatedTarget, eventDirectionName) {
        var targetIndex = this._getItemIndex(relatedTarget);
        var fromIndex = this._getItemIndex(SelectorEngine.findOne(SELECTOR_ACTIVE_ITEM, this._element));
        return EventHandler.trigger(this._element, EVENT_SLIDE, {
          relatedTarget: relatedTarget,
          direction: eventDirectionName,
          from: fromIndex,
          to: targetIndex
        });
      }
    }, {
      key: "_setActiveIndicatorElement",
      value: function _setActiveIndicatorElement(element) {
        if (this._indicatorsElement) {
          var activeIndicator = SelectorEngine.findOne(SELECTOR_ACTIVE$1, this._indicatorsElement);
          activeIndicator.classList.remove(CLASS_NAME_ACTIVE$2);
          activeIndicator.removeAttribute("aria-current");
          var indicators = SelectorEngine.find(SELECTOR_INDICATOR, this._indicatorsElement);
          for (var i = 0; i < indicators.length; i++) {
            if (Number.parseInt(indicators[i].getAttribute("data-bs-slide-to"), 10) === this._getItemIndex(element)) {
              indicators[i].classList.add(CLASS_NAME_ACTIVE$2);
              indicators[i].setAttribute("aria-current", "true");
              break;
            }
          }
        }
      }
    }, {
      key: "_updateInterval",
      value: function _updateInterval() {
        var element = this._activeElement || SelectorEngine.findOne(SELECTOR_ACTIVE_ITEM, this._element);
        if (!element) {
          return;
        }
        var elementInterval = Number.parseInt(element.getAttribute("data-bs-interval"), 10);
        if (elementInterval) {
          this._config.defaultInterval = this._config.defaultInterval || this._config.interval;
          this._config.interval = elementInterval;
        } else {
          this._config.interval = this._config.defaultInterval || this._config.interval;
        }
      }
    }, {
      key: "_slide",
      value: function _slide(directionOrOrder, element) {
        var _this7 = this;
        var order = this._directionToOrder(directionOrOrder);
        var activeElement = SelectorEngine.findOne(SELECTOR_ACTIVE_ITEM, this._element);
        var activeElementIndex = this._getItemIndex(activeElement);
        var nextElement = element || this._getItemByOrder(order, activeElement);
        var nextElementIndex = this._getItemIndex(nextElement);
        var isCycling = Boolean(this._interval);
        var isNext = order === ORDER_NEXT;
        var directionalClassName = isNext ? CLASS_NAME_START : CLASS_NAME_END;
        var orderClassName = isNext ? CLASS_NAME_NEXT : CLASS_NAME_PREV;
        var eventDirectionName = this._orderToDirection(order);
        if (nextElement && nextElement.classList.contains(CLASS_NAME_ACTIVE$2)) {
          this._isSliding = false;
          return;
        }
        if (this._isSliding) {
          return;
        }
        var slideEvent = this._triggerSlideEvent(nextElement, eventDirectionName);
        if (slideEvent.defaultPrevented) {
          return;
        }
        if (!activeElement || !nextElement) {
          // Some weirdness is happening, so we bail
          return;
        }
        this._isSliding = true;
        if (isCycling) {
          this.pause();
        }
        this._setActiveIndicatorElement(nextElement);
        this._activeElement = nextElement;
        var triggerSlidEvent = function triggerSlidEvent() {
          EventHandler.trigger(_this7._element, EVENT_SLID, {
            relatedTarget: nextElement,
            direction: eventDirectionName,
            from: activeElementIndex,
            to: nextElementIndex
          });
        };
        if (this._element.classList.contains(CLASS_NAME_SLIDE)) {
          nextElement.classList.add(orderClassName);
          reflow(nextElement);
          activeElement.classList.add(directionalClassName);
          nextElement.classList.add(directionalClassName);
          var completeCallBack = function completeCallBack() {
            nextElement.classList.remove(directionalClassName, orderClassName);
            nextElement.classList.add(CLASS_NAME_ACTIVE$2);
            activeElement.classList.remove(CLASS_NAME_ACTIVE$2, orderClassName, directionalClassName);
            _this7._isSliding = false;
            setTimeout(triggerSlidEvent, 0);
          };
          this._queueCallback(completeCallBack, activeElement, true);
        } else {
          activeElement.classList.remove(CLASS_NAME_ACTIVE$2);
          nextElement.classList.add(CLASS_NAME_ACTIVE$2);
          this._isSliding = false;
          triggerSlidEvent();
        }
        if (isCycling) {
          this.cycle();
        }
      }
    }, {
      key: "_directionToOrder",
      value: function _directionToOrder(direction) {
        if (![DIRECTION_RIGHT, DIRECTION_LEFT].includes(direction)) {
          return direction;
        }
        if (isRTL()) {
          return direction === DIRECTION_LEFT ? ORDER_PREV : ORDER_NEXT;
        }
        return direction === DIRECTION_LEFT ? ORDER_NEXT : ORDER_PREV;
      }
    }, {
      key: "_orderToDirection",
      value: function _orderToDirection(order) {
        if (![ORDER_NEXT, ORDER_PREV].includes(order)) {
          return order;
        }
        if (isRTL()) {
          return order === ORDER_PREV ? DIRECTION_LEFT : DIRECTION_RIGHT;
        }
        return order === ORDER_PREV ? DIRECTION_RIGHT : DIRECTION_LEFT;
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$9;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$a;
      }
    }, {
      key: "carouselInterface",
      value: function carouselInterface(element, config) {
        var data = Carousel.getOrCreateInstance(element, config);
        var _config = data._config;
        if (_typeof(config) === "object") {
          _config = _objectSpread(_objectSpread({}, _config), config);
        }
        var action = typeof config === "string" ? config : _config.slide;
        if (typeof config === "number") {
          data.to(config);
        } else if (typeof action === "string") {
          if (typeof data[action] === "undefined") {
            throw new TypeError("No method named \"".concat(action, "\""));
          }
          data[action]();
        } else if (_config.interval && _config.ride) {
          data.pause();
          data.cycle();
        }
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          Carousel.carouselInterface(this, config);
        });
      }
    }, {
      key: "dataApiClickHandler",
      value: function dataApiClickHandler(event) {
        var target = getElementFromSelector(this);
        if (!target || !target.classList.contains(CLASS_NAME_CAROUSEL)) {
          return;
        }
        var config = _objectSpread(_objectSpread({}, Manipulator.getDataAttributes(target)), Manipulator.getDataAttributes(this));
        var slideIndex = this.getAttribute("data-bs-slide-to");
        if (slideIndex) {
          config.interval = false;
        }
        Carousel.carouselInterface(target, config);
        if (slideIndex) {
          Carousel.getInstance(target).to(slideIndex);
        }
        event.preventDefault();
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$5, SELECTOR_DATA_SLIDE, Carousel.dataApiClickHandler);
  EventHandler.on(window, EVENT_LOAD_DATA_API$2, function () {
    var carousels = SelectorEngine.find(SELECTOR_DATA_RIDE);
    for (var i = 0, len = carousels.length; i < len; i++) {
      Carousel.carouselInterface(carousels[i], Carousel.getInstance(carousels[i]));
    }
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Carousel to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Carousel);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): collapse.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$9 = "collapse";
  var DATA_KEY$8 = "bs.collapse";
  var EVENT_KEY$8 = ".".concat(DATA_KEY$8);
  var DATA_API_KEY$5 = ".data-api";
  var Default$8 = {
    toggle: true,
    parent: ""
  };
  var DefaultType$8 = {
    toggle: "boolean",
    parent: "(string|element)"
  };
  var EVENT_SHOW$5 = "show".concat(EVENT_KEY$8);
  var EVENT_SHOWN$5 = "shown".concat(EVENT_KEY$8);
  var EVENT_HIDE$5 = "hide".concat(EVENT_KEY$8);
  var EVENT_HIDDEN$5 = "hidden".concat(EVENT_KEY$8);
  var EVENT_CLICK_DATA_API$4 = "click".concat(EVENT_KEY$8).concat(DATA_API_KEY$5);
  var CLASS_NAME_SHOW$8 = "show";
  var CLASS_NAME_COLLAPSE = "collapse";
  var CLASS_NAME_COLLAPSING = "collapsing";
  var CLASS_NAME_COLLAPSED = "collapsed";
  var WIDTH = "width";
  var HEIGHT = "height";
  var SELECTOR_ACTIVES = ".show, .collapsing";
  var SELECTOR_DATA_TOGGLE$4 = '[data-bs-toggle="collapse"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Collapse = /*#__PURE__*/function (_BaseComponent4) {
    function Collapse(element, config) {
      var _this8;
      _classCallCheck(this, Collapse);
      _this8 = _callSuper(this, Collapse, [element]);
      _this8._isTransitioning = false;
      _this8._config = _this8._getConfig(config);
      _this8._triggerArray = SelectorEngine.find("".concat(SELECTOR_DATA_TOGGLE$4, "[href=\"#").concat(_this8._element.id, "\"],") + "".concat(SELECTOR_DATA_TOGGLE$4, "[data-bs-target=\"#").concat(_this8._element.id, "\"]"));
      var toggleList = SelectorEngine.find(SELECTOR_DATA_TOGGLE$4);
      for (var i = 0, len = toggleList.length; i < len; i++) {
        var elem = toggleList[i];
        var selector = getSelectorFromElement(elem);
        var filterElement = SelectorEngine.find(selector).filter(function (foundElem) {
          return foundElem === _this8._element;
        });
        if (selector !== null && filterElement.length) {
          _this8._selector = selector;
          _this8._triggerArray.push(elem);
        }
      }
      _this8._parent = _this8._config.parent ? _this8._getParent() : null;
      if (!_this8._config.parent) {
        _this8._addAriaAndCollapsedClass(_this8._element, _this8._triggerArray);
      }
      if (_this8._config.toggle) {
        _this8.toggle();
      }
      return _this8;
    } // Getters
    _inherits(Collapse, _BaseComponent4);
    return _createClass(Collapse, [{
      key: "toggle",
      value:
      // Public

      function toggle() {
        if (this._element.classList.contains(CLASS_NAME_SHOW$8)) {
          this.hide();
        } else {
          this.show();
        }
      }
    }, {
      key: "show",
      value: function show() {
        var _this9 = this;
        if (this._isTransitioning || this._element.classList.contains(CLASS_NAME_SHOW$8)) {
          return;
        }
        var actives;
        var activesData;
        if (this._parent) {
          actives = SelectorEngine.find(SELECTOR_ACTIVES, this._parent).filter(function (elem) {
            if (typeof _this9._config.parent === "string") {
              return elem.getAttribute("data-bs-parent") === _this9._config.parent;
            }
            return elem.classList.contains(CLASS_NAME_COLLAPSE);
          });
          if (actives.length === 0) {
            actives = null;
          }
        }
        var container = SelectorEngine.findOne(this._selector);
        if (actives) {
          var tempActiveData = actives.find(function (elem) {
            return container !== elem;
          });
          activesData = tempActiveData ? Collapse.getInstance(tempActiveData) : null;
          if (activesData && activesData._isTransitioning) {
            return;
          }
        }
        var startEvent = EventHandler.trigger(this._element, EVENT_SHOW$5);
        if (startEvent.defaultPrevented) {
          return;
        }
        if (actives) {
          actives.forEach(function (elemActive) {
            if (container !== elemActive) {
              Collapse.collapseInterface(elemActive, "hide");
            }
            if (!activesData) {
              Data.set(elemActive, DATA_KEY$8, null);
            }
          });
        }
        var dimension = this._getDimension();
        this._element.classList.remove(CLASS_NAME_COLLAPSE);
        this._element.classList.add(CLASS_NAME_COLLAPSING);
        this._element.style[dimension] = 0;
        if (this._triggerArray.length) {
          this._triggerArray.forEach(function (element) {
            element.classList.remove(CLASS_NAME_COLLAPSED);
            element.setAttribute("aria-expanded", true);
          });
        }
        this.setTransitioning(true);
        var complete = function complete() {
          _this9._element.classList.remove(CLASS_NAME_COLLAPSING);
          _this9._element.classList.add(CLASS_NAME_COLLAPSE, CLASS_NAME_SHOW$8);
          _this9._element.style[dimension] = "";
          _this9.setTransitioning(false);
          EventHandler.trigger(_this9._element, EVENT_SHOWN$5);
        };
        var capitalizedDimension = dimension[0].toUpperCase() + dimension.slice(1);
        var scrollSize = "scroll".concat(capitalizedDimension);
        this._queueCallback(complete, this._element, true);
        this._element.style[dimension] = "".concat(this._element[scrollSize], "px");
      }
    }, {
      key: "hide",
      value: function hide() {
        var _this10 = this;
        if (this._isTransitioning || !this._element.classList.contains(CLASS_NAME_SHOW$8)) {
          return;
        }
        var startEvent = EventHandler.trigger(this._element, EVENT_HIDE$5);
        if (startEvent.defaultPrevented) {
          return;
        }
        var dimension = this._getDimension();
        this._element.style[dimension] = "".concat(this._element.getBoundingClientRect()[dimension], "px");
        reflow(this._element);
        this._element.classList.add(CLASS_NAME_COLLAPSING);
        this._element.classList.remove(CLASS_NAME_COLLAPSE, CLASS_NAME_SHOW$8);
        var triggerArrayLength = this._triggerArray.length;
        if (triggerArrayLength > 0) {
          for (var i = 0; i < triggerArrayLength; i++) {
            var trigger = this._triggerArray[i];
            var elem = getElementFromSelector(trigger);
            if (elem && !elem.classList.contains(CLASS_NAME_SHOW$8)) {
              trigger.classList.add(CLASS_NAME_COLLAPSED);
              trigger.setAttribute("aria-expanded", false);
            }
          }
        }
        this.setTransitioning(true);
        var complete = function complete() {
          _this10.setTransitioning(false);
          _this10._element.classList.remove(CLASS_NAME_COLLAPSING);
          _this10._element.classList.add(CLASS_NAME_COLLAPSE);
          EventHandler.trigger(_this10._element, EVENT_HIDDEN$5);
        };
        this._element.style[dimension] = "";
        this._queueCallback(complete, this._element, true);
      }
    }, {
      key: "setTransitioning",
      value: function setTransitioning(isTransitioning) {
        this._isTransitioning = isTransitioning;
      } // Private
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread({}, Default$8), config);
        config.toggle = Boolean(config.toggle); // Coerce string values

        typeCheckConfig(NAME$9, config, DefaultType$8);
        return config;
      }
    }, {
      key: "_getDimension",
      value: function _getDimension() {
        return this._element.classList.contains(WIDTH) ? WIDTH : HEIGHT;
      }
    }, {
      key: "_getParent",
      value: function _getParent() {
        var _this11 = this;
        var parent = this._config.parent;
        parent = getElement(parent);
        var selector = "".concat(SELECTOR_DATA_TOGGLE$4, "[data-bs-parent=\"").concat(parent, "\"]");
        SelectorEngine.find(selector, parent).forEach(function (element) {
          var selected = getElementFromSelector(element);
          _this11._addAriaAndCollapsedClass(selected, [element]);
        });
        return parent;
      }
    }, {
      key: "_addAriaAndCollapsedClass",
      value: function _addAriaAndCollapsedClass(element, triggerArray) {
        if (!element || !triggerArray.length) {
          return;
        }
        var isOpen = element.classList.contains(CLASS_NAME_SHOW$8);
        triggerArray.forEach(function (elem) {
          if (isOpen) {
            elem.classList.remove(CLASS_NAME_COLLAPSED);
          } else {
            elem.classList.add(CLASS_NAME_COLLAPSED);
          }
          elem.setAttribute("aria-expanded", isOpen);
        });
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$8;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$9;
      }
    }, {
      key: "collapseInterface",
      value: function collapseInterface(element, config) {
        var data = Collapse.getInstance(element);
        var _config = _objectSpread(_objectSpread(_objectSpread({}, Default$8), Manipulator.getDataAttributes(element)), _typeof(config) === "object" && config ? config : {});
        if (!data && _config.toggle && typeof config === "string" && /show|hide/.test(config)) {
          _config.toggle = false;
        }
        if (!data) {
          data = new Collapse(element, _config);
        }
        if (typeof config === "string") {
          if (typeof data[config] === "undefined") {
            throw new TypeError("No method named \"".concat(config, "\""));
          }
          data[config]();
        }
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          Collapse.collapseInterface(this, config);
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$4, SELECTOR_DATA_TOGGLE$4, function (event) {
    // preventDefault only for <a> elements (which change the URL) not inside the collapsible element
    if (event.target.tagName === "A" || event.delegateTarget && event.delegateTarget.tagName === "A") {
      event.preventDefault();
    }
    var triggerData = Manipulator.getDataAttributes(this);
    var selector = getSelectorFromElement(this);
    var selectorElements = SelectorEngine.find(selector);
    selectorElements.forEach(function (element) {
      var data = Collapse.getInstance(element);
      var config;
      if (data) {
        // update parent attribute
        if (data._parent === null && typeof triggerData.parent === "string") {
          data._config.parent = triggerData.parent;
          data._parent = data._getParent();
        }
        config = "toggle";
      } else {
        config = triggerData;
      }
      Collapse.collapseInterface(element, config);
    });
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Collapse to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Collapse);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): dropdown.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$8 = "dropdown";
  var DATA_KEY$7 = "bs.dropdown";
  var EVENT_KEY$7 = ".".concat(DATA_KEY$7);
  var DATA_API_KEY$4 = ".data-api";
  var ESCAPE_KEY$2 = "Escape";
  var SPACE_KEY = "Space";
  var TAB_KEY = "Tab";
  var ARROW_UP_KEY = "ArrowUp";
  var ARROW_DOWN_KEY = "ArrowDown";
  var RIGHT_MOUSE_BUTTON = 2; // MouseEvent.button value for the secondary button, usually the right button

  var REGEXP_KEYDOWN = new RegExp("".concat(ARROW_UP_KEY, "|").concat(ARROW_DOWN_KEY, "|").concat(ESCAPE_KEY$2));
  var EVENT_HIDE$4 = "hide".concat(EVENT_KEY$7);
  var EVENT_HIDDEN$4 = "hidden".concat(EVENT_KEY$7);
  var EVENT_SHOW$4 = "show".concat(EVENT_KEY$7);
  var EVENT_SHOWN$4 = "shown".concat(EVENT_KEY$7);
  var EVENT_CLICK = "click".concat(EVENT_KEY$7);
  var EVENT_CLICK_DATA_API$3 = "click".concat(EVENT_KEY$7).concat(DATA_API_KEY$4);
  var EVENT_KEYDOWN_DATA_API = "keydown".concat(EVENT_KEY$7).concat(DATA_API_KEY$4);
  var EVENT_KEYUP_DATA_API = "keyup".concat(EVENT_KEY$7).concat(DATA_API_KEY$4);
  var CLASS_NAME_SHOW$7 = "show";
  var CLASS_NAME_DROPUP = "dropup";
  var CLASS_NAME_DROPEND = "dropend";
  var CLASS_NAME_DROPSTART = "dropstart";
  var CLASS_NAME_NAVBAR = "navbar";
  var SELECTOR_DATA_TOGGLE$3 = '[data-bs-toggle="dropdown"]';
  var SELECTOR_MENU = ".dropdown-menu";
  var SELECTOR_NAVBAR_NAV = ".navbar-nav";
  var SELECTOR_VISIBLE_ITEMS = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)";
  var PLACEMENT_TOP = isRTL() ? "top-end" : "top-start";
  var PLACEMENT_TOPEND = isRTL() ? "top-start" : "top-end";
  var PLACEMENT_BOTTOM = isRTL() ? "bottom-end" : "bottom-start";
  var PLACEMENT_BOTTOMEND = isRTL() ? "bottom-start" : "bottom-end";
  var PLACEMENT_RIGHT = isRTL() ? "left-start" : "right-start";
  var PLACEMENT_LEFT = isRTL() ? "right-start" : "left-start";
  var Default$7 = {
    offset: [0, 2],
    boundary: "clippingParents",
    reference: "toggle",
    display: "dynamic",
    popperConfig: null,
    autoClose: true
  };
  var DefaultType$7 = {
    offset: "(array|string|function)",
    boundary: "(string|element)",
    reference: "(string|element|object)",
    display: "string",
    popperConfig: "(null|object|function)",
    autoClose: "(boolean|string)"
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Dropdown = /*#__PURE__*/function (_BaseComponent5) {
    function Dropdown(element, config) {
      var _this12;
      _classCallCheck(this, Dropdown);
      _this12 = _callSuper(this, Dropdown, [element]);
      _this12._popper = null;
      _this12._config = _this12._getConfig(config);
      _this12._menu = _this12._getMenuElement();
      _this12._inNavbar = _this12._detectNavbar();
      _this12._addEventListeners();
      return _this12;
    } // Getters
    _inherits(Dropdown, _BaseComponent5);
    return _createClass(Dropdown, [{
      key: "toggle",
      value:
      // Public

      function toggle() {
        if (isDisabled(this._element)) {
          return;
        }
        var isActive = this._element.classList.contains(CLASS_NAME_SHOW$7);
        if (isActive) {
          this.hide();
          return;
        }
        this.show();
      }
    }, {
      key: "show",
      value: function show() {
        if (isDisabled(this._element) || this._menu.classList.contains(CLASS_NAME_SHOW$7)) {
          return;
        }
        var parent = Dropdown.getParentFromElement(this._element);
        var relatedTarget = {
          relatedTarget: this._element
        };
        var showEvent = EventHandler.trigger(this._element, EVENT_SHOW$4, relatedTarget);
        if (showEvent.defaultPrevented) {
          return;
        } // Totally disable Popper for Dropdowns in Navbar

        if (this._inNavbar) {
          Manipulator.setDataAttribute(this._menu, "popper", "none");
        } else {
          if (typeof Popper__namespace === "undefined") {
            throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
          }
          var referenceElement = this._element;
          if (this._config.reference === "parent") {
            referenceElement = parent;
          } else if (isElement(this._config.reference)) {
            referenceElement = getElement(this._config.reference);
          } else if (_typeof(this._config.reference) === "object") {
            referenceElement = this._config.reference;
          }
          var popperConfig = this._getPopperConfig();
          var isDisplayStatic = popperConfig.modifiers.find(function (modifier) {
            return modifier.name === "applyStyles" && modifier.enabled === false;
          });
          this._popper = Popper__namespace.createPopper(referenceElement, this._menu, popperConfig);
          if (isDisplayStatic) {
            Manipulator.setDataAttribute(this._menu, "popper", "static");
          }
        } // If this is a touch-enabled device we add extra
        // empty mouseover listeners to the body's immediate children;
        // only needed because of broken event delegation on iOS
        // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html

        if ("ontouchstart" in document.documentElement && !parent.closest(SELECTOR_NAVBAR_NAV)) {
          var _ref4;
          (_ref4 = []).concat.apply(_ref4, _toConsumableArray(document.body.children)).forEach(function (elem) {
            return EventHandler.on(elem, "mouseover", noop);
          });
        }
        this._element.focus();
        this._element.setAttribute("aria-expanded", true);
        this._menu.classList.toggle(CLASS_NAME_SHOW$7);
        this._element.classList.toggle(CLASS_NAME_SHOW$7);
        EventHandler.trigger(this._element, EVENT_SHOWN$4, relatedTarget);
      }
    }, {
      key: "hide",
      value: function hide() {
        if (isDisabled(this._element) || !this._menu.classList.contains(CLASS_NAME_SHOW$7)) {
          return;
        }
        var relatedTarget = {
          relatedTarget: this._element
        };
        this._completeHide(relatedTarget);
      }
    }, {
      key: "dispose",
      value: function dispose() {
        if (this._popper) {
          this._popper.destroy();
        }
        _get(_getPrototypeOf(Dropdown.prototype), "dispose", this).call(this);
      }
    }, {
      key: "update",
      value: function update() {
        this._inNavbar = this._detectNavbar();
        if (this._popper) {
          this._popper.update();
        }
      } // Private
    }, {
      key: "_addEventListeners",
      value: function _addEventListeners() {
        var _this13 = this;
        EventHandler.on(this._element, EVENT_CLICK, function (event) {
          event.preventDefault();
          _this13.toggle();
        });
      }
    }, {
      key: "_completeHide",
      value: function _completeHide(relatedTarget) {
        var hideEvent = EventHandler.trigger(this._element, EVENT_HIDE$4, relatedTarget);
        if (hideEvent.defaultPrevented) {
          return;
        } // If this is a touch-enabled device we remove the extra
        // empty mouseover listeners we added for iOS support

        if ("ontouchstart" in document.documentElement) {
          var _ref5;
          (_ref5 = []).concat.apply(_ref5, _toConsumableArray(document.body.children)).forEach(function (elem) {
            return EventHandler.off(elem, "mouseover", noop);
          });
        }
        if (this._popper) {
          this._popper.destroy();
        }
        this._menu.classList.remove(CLASS_NAME_SHOW$7);
        this._element.classList.remove(CLASS_NAME_SHOW$7);
        this._element.setAttribute("aria-expanded", "false");
        Manipulator.removeDataAttribute(this._menu, "popper");
        EventHandler.trigger(this._element, EVENT_HIDDEN$4, relatedTarget);
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, this.constructor.Default), Manipulator.getDataAttributes(this._element)), config);
        typeCheckConfig(NAME$8, config, this.constructor.DefaultType);
        if (_typeof(config.reference) === "object" && !isElement(config.reference) && typeof config.reference.getBoundingClientRect !== "function") {
          // Popper virtual elements require a getBoundingClientRect method
          throw new TypeError("".concat(NAME$8.toUpperCase(), ": Option \"reference\" provided type \"object\" without a required \"getBoundingClientRect\" method."));
        }
        return config;
      }
    }, {
      key: "_getMenuElement",
      value: function _getMenuElement() {
        return SelectorEngine.next(this._element, SELECTOR_MENU)[0];
      }
    }, {
      key: "_getPlacement",
      value: function _getPlacement() {
        var parentDropdown = this._element.parentNode;
        if (parentDropdown.classList.contains(CLASS_NAME_DROPEND)) {
          return PLACEMENT_RIGHT;
        }
        if (parentDropdown.classList.contains(CLASS_NAME_DROPSTART)) {
          return PLACEMENT_LEFT;
        } // We need to trim the value because custom properties can also include spaces

        var isEnd = getComputedStyle(this._menu).getPropertyValue("--bs-position").trim() === "end";
        if (parentDropdown.classList.contains(CLASS_NAME_DROPUP)) {
          return isEnd ? PLACEMENT_TOPEND : PLACEMENT_TOP;
        }
        return isEnd ? PLACEMENT_BOTTOMEND : PLACEMENT_BOTTOM;
      }
    }, {
      key: "_detectNavbar",
      value: function _detectNavbar() {
        return this._element.closest(".".concat(CLASS_NAME_NAVBAR)) !== null;
      }
    }, {
      key: "_getOffset",
      value: function _getOffset() {
        var _this14 = this;
        var offset = this._config.offset;
        if (typeof offset === "string") {
          return offset.split(",").map(function (val) {
            return Number.parseInt(val, 10);
          });
        }
        if (typeof offset === "function") {
          return function (popperData) {
            return offset(popperData, _this14._element);
          };
        }
        return offset;
      }
    }, {
      key: "_getPopperConfig",
      value: function _getPopperConfig() {
        var defaultBsPopperConfig = {
          placement: this._getPlacement(),
          modifiers: [{
            name: "preventOverflow",
            options: {
              boundary: this._config.boundary
            }
          }, {
            name: "offset",
            options: {
              offset: this._getOffset()
            }
          }]
        }; // Disable Popper if we have a static display

        if (this._config.display === "static") {
          defaultBsPopperConfig.modifiers = [{
            name: "applyStyles",
            enabled: false
          }];
        }
        return _objectSpread(_objectSpread({}, defaultBsPopperConfig), typeof this._config.popperConfig === "function" ? this._config.popperConfig(defaultBsPopperConfig) : this._config.popperConfig);
      }
    }, {
      key: "_selectMenuItem",
      value: function _selectMenuItem(_ref6) {
        var key = _ref6.key,
          target = _ref6.target;
        var items = SelectorEngine.find(SELECTOR_VISIBLE_ITEMS, this._menu).filter(isVisible);
        if (!items.length) {
          return;
        } // if target isn't included in items (e.g. when expanding the dropdown)
        // allow cycling to get the last item in case key equals ARROW_UP_KEY

        getNextActiveElement(items, target, key === ARROW_DOWN_KEY, !items.includes(target)).focus();
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$7;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$7;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$8;
      }
    }, {
      key: "dropdownInterface",
      value: function dropdownInterface(element, config) {
        var data = Dropdown.getOrCreateInstance(element, config);
        if (typeof config === "string") {
          if (typeof data[config] === "undefined") {
            throw new TypeError("No method named \"".concat(config, "\""));
          }
          data[config]();
        }
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          Dropdown.dropdownInterface(this, config);
        });
      }
    }, {
      key: "clearMenus",
      value: function clearMenus(event) {
        if (event && (event.button === RIGHT_MOUSE_BUTTON || event.type === "keyup" && event.key !== TAB_KEY)) {
          return;
        }
        var toggles = SelectorEngine.find(SELECTOR_DATA_TOGGLE$3);
        for (var i = 0, len = toggles.length; i < len; i++) {
          var context = Dropdown.getInstance(toggles[i]);
          if (!context || context._config.autoClose === false) {
            continue;
          }
          if (!context._element.classList.contains(CLASS_NAME_SHOW$7)) {
            continue;
          }
          var relatedTarget = {
            relatedTarget: context._element
          };
          if (event) {
            var composedPath = event.composedPath();
            var isMenuTarget = composedPath.includes(context._menu);
            if (composedPath.includes(context._element) || context._config.autoClose === "inside" && !isMenuTarget || context._config.autoClose === "outside" && isMenuTarget) {
              continue;
            } // Tab navigation through the dropdown menu or events from contained inputs shouldn't close the menu

            if (context._menu.contains(event.target) && (event.type === "keyup" && event.key === TAB_KEY || /input|select|option|textarea|form/i.test(event.target.tagName))) {
              continue;
            }
            if (event.type === "click") {
              relatedTarget.clickEvent = event;
            }
          }
          context._completeHide(relatedTarget);
        }
      }
    }, {
      key: "getParentFromElement",
      value: function getParentFromElement(element) {
        return getElementFromSelector(element) || element.parentNode;
      }
    }, {
      key: "dataApiKeydownHandler",
      value: function dataApiKeydownHandler(event) {
        var _this15 = this;
        // If not input/textarea:
        //  - And not a key in REGEXP_KEYDOWN => not a dropdown command
        // If input/textarea:
        //  - If space key => not a dropdown command
        //  - If key is other than escape
        //    - If key is not up or down => not a dropdown command
        //    - If trigger inside the menu => not a dropdown command
        if (/input|textarea/i.test(event.target.tagName) ? event.key === SPACE_KEY || event.key !== ESCAPE_KEY$2 && (event.key !== ARROW_DOWN_KEY && event.key !== ARROW_UP_KEY || event.target.closest(SELECTOR_MENU)) : !REGEXP_KEYDOWN.test(event.key)) {
          return;
        }
        var isActive = this.classList.contains(CLASS_NAME_SHOW$7);
        if (!isActive && event.key === ESCAPE_KEY$2) {
          return;
        }
        event.preventDefault();
        event.stopPropagation();
        if (isDisabled(this)) {
          return;
        }
        var getToggleButton = function getToggleButton() {
          return _this15.matches(SELECTOR_DATA_TOGGLE$3) ? _this15 : SelectorEngine.prev(_this15, SELECTOR_DATA_TOGGLE$3)[0];
        };
        if (event.key === ESCAPE_KEY$2) {
          getToggleButton().focus();
          Dropdown.clearMenus();
          return;
        }
        if (event.key === ARROW_UP_KEY || event.key === ARROW_DOWN_KEY) {
          if (!isActive) {
            getToggleButton().click();
          }
          Dropdown.getInstance(getToggleButton())._selectMenuItem(event);
          return;
        }
        if (!isActive || event.key === SPACE_KEY) {
          Dropdown.clearMenus();
        }
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_KEYDOWN_DATA_API, SELECTOR_DATA_TOGGLE$3, Dropdown.dataApiKeydownHandler);
  EventHandler.on(document, EVENT_KEYDOWN_DATA_API, SELECTOR_MENU, Dropdown.dataApiKeydownHandler);
  EventHandler.on(document, EVENT_CLICK_DATA_API$3, Dropdown.clearMenus);
  EventHandler.on(document, EVENT_KEYUP_DATA_API, Dropdown.clearMenus);
  EventHandler.on(document, EVENT_CLICK_DATA_API$3, SELECTOR_DATA_TOGGLE$3, function (event) {
    event.preventDefault();
    Dropdown.dropdownInterface(this);
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Dropdown to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Dropdown);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): util/scrollBar.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  var SELECTOR_FIXED_CONTENT = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top";
  var SELECTOR_STICKY_CONTENT = ".sticky-top";
  var ScrollBarHelper = /*#__PURE__*/function () {
    function ScrollBarHelper() {
      _classCallCheck(this, ScrollBarHelper);
      this._element = document.body;
    }
    return _createClass(ScrollBarHelper, [{
      key: "getWidth",
      value: function getWidth() {
        // https://developer.mozilla.org/en-US/docs/Web/API/Window/innerWidth#usage_notes
        var documentWidth = document.documentElement.clientWidth;
        return Math.abs(window.innerWidth - documentWidth);
      }
    }, {
      key: "hide",
      value: function hide() {
        var width = this.getWidth();
        this._disableOverFlow(); // give padding to element to balance the hidden scrollbar width

        this._setElementAttributes(this._element, "paddingRight", function (calculatedValue) {
          return calculatedValue + width;
        }); // trick: We adjust positive paddingRight and negative marginRight to sticky-top elements to keep showing fullwidth

        this._setElementAttributes(SELECTOR_FIXED_CONTENT, "paddingRight", function (calculatedValue) {
          return calculatedValue + width;
        });
        this._setElementAttributes(SELECTOR_STICKY_CONTENT, "marginRight", function (calculatedValue) {
          return calculatedValue - width;
        });
      }
    }, {
      key: "_disableOverFlow",
      value: function _disableOverFlow() {
        this._saveInitialAttribute(this._element, "overflow");
        this._element.style.overflow = "hidden";
      }
    }, {
      key: "_setElementAttributes",
      value: function _setElementAttributes(selector, styleProp, callback) {
        var _this16 = this;
        var scrollbarWidth = this.getWidth();
        var manipulationCallBack = function manipulationCallBack(element) {
          if (element !== _this16._element && window.innerWidth > element.clientWidth + scrollbarWidth) {
            return;
          }
          _this16._saveInitialAttribute(element, styleProp);
          var calculatedValue = window.getComputedStyle(element)[styleProp];
          element.style[styleProp] = "".concat(callback(Number.parseFloat(calculatedValue)), "px");
        };
        this._applyManipulationCallback(selector, manipulationCallBack);
      }
    }, {
      key: "reset",
      value: function reset() {
        this._resetElementAttributes(this._element, "overflow");
        this._resetElementAttributes(this._element, "paddingRight");
        this._resetElementAttributes(SELECTOR_FIXED_CONTENT, "paddingRight");
        this._resetElementAttributes(SELECTOR_STICKY_CONTENT, "marginRight");
      }
    }, {
      key: "_saveInitialAttribute",
      value: function _saveInitialAttribute(element, styleProp) {
        var actualValue = element.style[styleProp];
        if (actualValue) {
          Manipulator.setDataAttribute(element, styleProp, actualValue);
        }
      }
    }, {
      key: "_resetElementAttributes",
      value: function _resetElementAttributes(selector, styleProp) {
        var manipulationCallBack = function manipulationCallBack(element) {
          var value = Manipulator.getDataAttribute(element, styleProp);
          if (typeof value === "undefined") {
            element.style.removeProperty(styleProp);
          } else {
            Manipulator.removeDataAttribute(element, styleProp);
            element.style[styleProp] = value;
          }
        };
        this._applyManipulationCallback(selector, manipulationCallBack);
      }
    }, {
      key: "_applyManipulationCallback",
      value: function _applyManipulationCallback(selector, callBack) {
        if (isElement(selector)) {
          callBack(selector);
        } else {
          SelectorEngine.find(selector, this._element).forEach(callBack);
        }
      }
    }, {
      key: "isOverflowing",
      value: function isOverflowing() {
        return this.getWidth() > 0;
      }
    }]);
  }();
  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): util/backdrop.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */
  var Default$6 = {
    isVisible: true,
    // if false, we use the backdrop helper without adding any element to the dom
    isAnimated: false,
    rootElement: "body",
    // give the choice to place backdrop under different elements
    clickCallback: null
  };
  var DefaultType$6 = {
    isVisible: "boolean",
    isAnimated: "boolean",
    rootElement: "(element|string)",
    clickCallback: "(function|null)"
  };
  var NAME$7 = "backdrop";
  var CLASS_NAME_BACKDROP = "modal-backdrop";
  var CLASS_NAME_FADE$5 = "fade";
  var CLASS_NAME_SHOW$6 = "show";
  var EVENT_MOUSEDOWN = "mousedown.bs.".concat(NAME$7);
  var Backdrop = /*#__PURE__*/function () {
    function Backdrop(config) {
      _classCallCheck(this, Backdrop);
      this._config = this._getConfig(config);
      this._isAppended = false;
      this._element = null;
    }
    return _createClass(Backdrop, [{
      key: "show",
      value: function show(callback) {
        if (!this._config.isVisible) {
          execute(callback);
          return;
        }
        this._append();
        if (this._config.isAnimated) {
          reflow(this._getElement());
        }
        this._getElement().classList.add(CLASS_NAME_SHOW$6);
        this._emulateAnimation(function () {
          execute(callback);
        });
      }
    }, {
      key: "hide",
      value: function hide(callback) {
        var _this17 = this;
        if (!this._config.isVisible) {
          execute(callback);
          return;
        }
        this._getElement().classList.remove(CLASS_NAME_SHOW$6);
        this._emulateAnimation(function () {
          _this17.dispose();
          execute(callback);
        });
      } // Private
    }, {
      key: "_getElement",
      value: function _getElement() {
        if (!this._element) {
          var backdrop = document.createElement("div");
          backdrop.className = CLASS_NAME_BACKDROP;
          if (this._config.isAnimated) {
            backdrop.classList.add(CLASS_NAME_FADE$5);
          }
          this._element = backdrop;
        }
        return this._element;
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread({}, Default$6), _typeof(config) === "object" ? config : {}); // use getElement() with the default "body" to get a fresh Element on each instantiation

        config.rootElement = getElement(config.rootElement);
        typeCheckConfig(NAME$7, config, DefaultType$6);
        return config;
      }
    }, {
      key: "_append",
      value: function _append() {
        var _this18 = this;
        if (this._isAppended) {
          return;
        }
        this._config.rootElement.appendChild(this._getElement());
        EventHandler.on(this._getElement(), EVENT_MOUSEDOWN, function () {
          execute(_this18._config.clickCallback);
        });
        this._isAppended = true;
      }
    }, {
      key: "dispose",
      value: function dispose() {
        if (!this._isAppended) {
          return;
        }
        EventHandler.off(this._element, EVENT_MOUSEDOWN);
        this._element.remove();
        this._isAppended = false;
      }
    }, {
      key: "_emulateAnimation",
      value: function _emulateAnimation(callback) {
        executeAfterTransition(callback, this._getElement(), this._config.isAnimated);
      }
    }]);
  }();
  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): modal.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */
  var NAME$6 = "modal";
  var DATA_KEY$6 = "bs.modal";
  var EVENT_KEY$6 = ".".concat(DATA_KEY$6);
  var DATA_API_KEY$3 = ".data-api";
  var ESCAPE_KEY$1 = "Escape";
  var Default$5 = {
    backdrop: true,
    keyboard: true,
    focus: true
  };
  var DefaultType$5 = {
    backdrop: "(boolean|string)",
    keyboard: "boolean",
    focus: "boolean"
  };
  var EVENT_HIDE$3 = "hide".concat(EVENT_KEY$6);
  var EVENT_HIDE_PREVENTED = "hidePrevented".concat(EVENT_KEY$6);
  var EVENT_HIDDEN$3 = "hidden".concat(EVENT_KEY$6);
  var EVENT_SHOW$3 = "show".concat(EVENT_KEY$6);
  var EVENT_SHOWN$3 = "shown".concat(EVENT_KEY$6);
  var EVENT_FOCUSIN$2 = "focusin".concat(EVENT_KEY$6);
  var EVENT_RESIZE = "resize".concat(EVENT_KEY$6);
  var EVENT_CLICK_DISMISS$2 = "click.dismiss".concat(EVENT_KEY$6);
  var EVENT_KEYDOWN_DISMISS$1 = "keydown.dismiss".concat(EVENT_KEY$6);
  var EVENT_MOUSEUP_DISMISS = "mouseup.dismiss".concat(EVENT_KEY$6);
  var EVENT_MOUSEDOWN_DISMISS = "mousedown.dismiss".concat(EVENT_KEY$6);
  var EVENT_CLICK_DATA_API$2 = "click".concat(EVENT_KEY$6).concat(DATA_API_KEY$3);
  var CLASS_NAME_OPEN = "modal-open";
  var CLASS_NAME_FADE$4 = "fade";
  var CLASS_NAME_SHOW$5 = "show";
  var CLASS_NAME_STATIC = "modal-static";
  var SELECTOR_DIALOG = ".modal-dialog";
  var SELECTOR_MODAL_BODY = ".modal-body";
  var SELECTOR_DATA_TOGGLE$2 = '[data-bs-toggle="modal"]';
  var SELECTOR_DATA_DISMISS$2 = '[data-bs-dismiss="modal"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Modal = /*#__PURE__*/function (_BaseComponent6) {
    function Modal(element, config) {
      var _this19;
      _classCallCheck(this, Modal);
      _this19 = _callSuper(this, Modal, [element]);
      _this19._config = _this19._getConfig(config);
      _this19._dialog = SelectorEngine.findOne(SELECTOR_DIALOG, _this19._element);
      _this19._backdrop = _this19._initializeBackDrop();
      _this19._isShown = false;
      _this19._ignoreBackdropClick = false;
      _this19._isTransitioning = false;
      _this19._scrollBar = new ScrollBarHelper();
      return _this19;
    } // Getters
    _inherits(Modal, _BaseComponent6);
    return _createClass(Modal, [{
      key: "toggle",
      value:
      // Public

      function toggle(relatedTarget) {
        return this._isShown ? this.hide() : this.show(relatedTarget);
      }
    }, {
      key: "show",
      value: function show(relatedTarget) {
        var _this20 = this;
        if (this._isShown || this._isTransitioning) {
          return;
        }
        var showEvent = EventHandler.trigger(this._element, EVENT_SHOW$3, {
          relatedTarget: relatedTarget
        });
        if (showEvent.defaultPrevented) {
          return;
        }
        this._isShown = true;
        if (this._isAnimated()) {
          this._isTransitioning = true;
        }
        this._scrollBar.hide();
        document.body.classList.add(CLASS_NAME_OPEN);
        this._adjustDialog();
        this._setEscapeEvent();
        this._setResizeEvent();
        EventHandler.on(this._element, EVENT_CLICK_DISMISS$2, SELECTOR_DATA_DISMISS$2, function (event) {
          return _this20.hide(event);
        });
        EventHandler.on(this._dialog, EVENT_MOUSEDOWN_DISMISS, function () {
          EventHandler.one(_this20._element, EVENT_MOUSEUP_DISMISS, function (event) {
            if (event.target === _this20._element) {
              _this20._ignoreBackdropClick = true;
            }
          });
        });
        this._showBackdrop(function () {
          return _this20._showElement(relatedTarget);
        });
      }
    }, {
      key: "hide",
      value: function hide(event) {
        var _this21 = this;
        if (event && ["A", "AREA"].includes(event.target.tagName)) {
          event.preventDefault();
        }
        if (!this._isShown || this._isTransitioning) {
          return;
        }
        var hideEvent = EventHandler.trigger(this._element, EVENT_HIDE$3);
        if (hideEvent.defaultPrevented) {
          return;
        }
        this._isShown = false;
        var isAnimated = this._isAnimated();
        if (isAnimated) {
          this._isTransitioning = true;
        }
        this._setEscapeEvent();
        this._setResizeEvent();
        EventHandler.off(document, EVENT_FOCUSIN$2);
        this._element.classList.remove(CLASS_NAME_SHOW$5);
        EventHandler.off(this._element, EVENT_CLICK_DISMISS$2);
        EventHandler.off(this._dialog, EVENT_MOUSEDOWN_DISMISS);
        this._queueCallback(function () {
          return _this21._hideModal();
        }, this._element, isAnimated);
      }
    }, {
      key: "dispose",
      value: function dispose() {
        [window, this._dialog].forEach(function (htmlElement) {
          return EventHandler.off(htmlElement, EVENT_KEY$6);
        });
        this._backdrop.dispose();
        _get(_getPrototypeOf(Modal.prototype), "dispose", this).call(this);
        /**
         * `document` has 2 events `EVENT_FOCUSIN` and `EVENT_CLICK_DATA_API`
         * Do not move `document` in `htmlElements` array
         * It will remove `EVENT_CLICK_DATA_API` event that should remain
         */

        EventHandler.off(document, EVENT_FOCUSIN$2);
      }
    }, {
      key: "handleUpdate",
      value: function handleUpdate() {
        this._adjustDialog();
      } // Private
    }, {
      key: "_initializeBackDrop",
      value: function _initializeBackDrop() {
        return new Backdrop({
          isVisible: Boolean(this._config.backdrop),
          // 'static' option will be translated to true, and booleans will keep their value
          isAnimated: this._isAnimated()
        });
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, Default$5), Manipulator.getDataAttributes(this._element)), _typeof(config) === "object" ? config : {});
        typeCheckConfig(NAME$6, config, DefaultType$5);
        return config;
      }
    }, {
      key: "_showElement",
      value: function _showElement(relatedTarget) {
        var _this22 = this;
        var isAnimated = this._isAnimated();
        var modalBody = SelectorEngine.findOne(SELECTOR_MODAL_BODY, this._dialog);
        if (!this._element.parentNode || this._element.parentNode.nodeType !== Node.ELEMENT_NODE) {
          // Don't move modal's DOM position
          document.body.appendChild(this._element);
        }
        this._element.style.display = "block";
        this._element.removeAttribute("aria-hidden");
        this._element.setAttribute("aria-modal", true);
        this._element.setAttribute("role", "dialog");
        this._element.scrollTop = 0;
        if (modalBody) {
          modalBody.scrollTop = 0;
        }
        if (isAnimated) {
          reflow(this._element);
        }
        this._element.classList.add(CLASS_NAME_SHOW$5);
        if (this._config.focus) {
          this._enforceFocus();
        }
        var transitionComplete = function transitionComplete() {
          if (_this22._config.focus) {
            _this22._element.focus();
          }
          _this22._isTransitioning = false;
          EventHandler.trigger(_this22._element, EVENT_SHOWN$3, {
            relatedTarget: relatedTarget
          });
        };
        this._queueCallback(transitionComplete, this._dialog, isAnimated);
      }
    }, {
      key: "_enforceFocus",
      value: function _enforceFocus() {
        var _this23 = this;
        EventHandler.off(document, EVENT_FOCUSIN$2); // guard against infinite focus loop

        EventHandler.on(document, EVENT_FOCUSIN$2, function (event) {
          if (document !== event.target && _this23._element !== event.target && !_this23._element.contains(event.target)) {
            _this23._element.focus();
          }
        });
      }
    }, {
      key: "_setEscapeEvent",
      value: function _setEscapeEvent() {
        var _this24 = this;
        if (this._isShown) {
          EventHandler.on(this._element, EVENT_KEYDOWN_DISMISS$1, function (event) {
            if (_this24._config.keyboard && event.key === ESCAPE_KEY$1) {
              event.preventDefault();
              _this24.hide();
            } else if (!_this24._config.keyboard && event.key === ESCAPE_KEY$1) {
              _this24._triggerBackdropTransition();
            }
          });
        } else {
          EventHandler.off(this._element, EVENT_KEYDOWN_DISMISS$1);
        }
      }
    }, {
      key: "_setResizeEvent",
      value: function _setResizeEvent() {
        var _this25 = this;
        if (this._isShown) {
          EventHandler.on(window, EVENT_RESIZE, function () {
            return _this25._adjustDialog();
          });
        } else {
          EventHandler.off(window, EVENT_RESIZE);
        }
      }
    }, {
      key: "_hideModal",
      value: function _hideModal() {
        var _this26 = this;
        this._element.style.display = "none";
        this._element.setAttribute("aria-hidden", true);
        this._element.removeAttribute("aria-modal");
        this._element.removeAttribute("role");
        this._isTransitioning = false;
        this._backdrop.hide(function () {
          document.body.classList.remove(CLASS_NAME_OPEN);
          _this26._resetAdjustments();
          _this26._scrollBar.reset();
          EventHandler.trigger(_this26._element, EVENT_HIDDEN$3);
        });
      }
    }, {
      key: "_showBackdrop",
      value: function _showBackdrop(callback) {
        var _this27 = this;
        EventHandler.on(this._element, EVENT_CLICK_DISMISS$2, function (event) {
          if (_this27._ignoreBackdropClick) {
            _this27._ignoreBackdropClick = false;
            return;
          }
          if (event.target !== event.currentTarget) {
            return;
          }
          if (_this27._config.backdrop === true) {
            _this27.hide();
          } else if (_this27._config.backdrop === "static") {
            _this27._triggerBackdropTransition();
          }
        });
        this._backdrop.show(callback);
      }
    }, {
      key: "_isAnimated",
      value: function _isAnimated() {
        return this._element.classList.contains(CLASS_NAME_FADE$4);
      }
    }, {
      key: "_triggerBackdropTransition",
      value: function _triggerBackdropTransition() {
        var _this28 = this;
        var hideEvent = EventHandler.trigger(this._element, EVENT_HIDE_PREVENTED);
        if (hideEvent.defaultPrevented) {
          return;
        }
        var _this$_element = this._element,
          classList = _this$_element.classList,
          scrollHeight = _this$_element.scrollHeight,
          style = _this$_element.style;
        var isModalOverflowing = scrollHeight > document.documentElement.clientHeight; // return if the following background transition hasn't yet completed

        if (!isModalOverflowing && style.overflowY === "hidden" || classList.contains(CLASS_NAME_STATIC)) {
          return;
        }
        if (!isModalOverflowing) {
          style.overflowY = "hidden";
        }
        classList.add(CLASS_NAME_STATIC);
        this._queueCallback(function () {
          classList.remove(CLASS_NAME_STATIC);
          if (!isModalOverflowing) {
            _this28._queueCallback(function () {
              style.overflowY = "";
            }, _this28._dialog);
          }
        }, this._dialog);
        this._element.focus();
      } // ----------------------------------------------------------------------
      // the following methods are used to handle overflowing modals
      // ----------------------------------------------------------------------
    }, {
      key: "_adjustDialog",
      value: function _adjustDialog() {
        var isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight;
        var scrollbarWidth = this._scrollBar.getWidth();
        var isBodyOverflowing = scrollbarWidth > 0;
        if (!isBodyOverflowing && isModalOverflowing && !isRTL() || isBodyOverflowing && !isModalOverflowing && isRTL()) {
          this._element.style.paddingLeft = "".concat(scrollbarWidth, "px");
        }
        if (isBodyOverflowing && !isModalOverflowing && !isRTL() || !isBodyOverflowing && isModalOverflowing && isRTL()) {
          this._element.style.paddingRight = "".concat(scrollbarWidth, "px");
        }
      }
    }, {
      key: "_resetAdjustments",
      value: function _resetAdjustments() {
        this._element.style.paddingLeft = "";
        this._element.style.paddingRight = "";
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$5;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$6;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config, relatedTarget) {
        return this.each(function () {
          var data = Modal.getOrCreateInstance(this, config);
          if (typeof config !== "string") {
            return;
          }
          if (typeof data[config] === "undefined") {
            throw new TypeError("No method named \"".concat(config, "\""));
          }
          data[config](relatedTarget);
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$2, SELECTOR_DATA_TOGGLE$2, function (event) {
    var _this29 = this;
    var target = getElementFromSelector(this);
    if (["A", "AREA"].includes(this.tagName)) {
      event.preventDefault();
    }
    EventHandler.one(target, EVENT_SHOW$3, function (showEvent) {
      if (showEvent.defaultPrevented) {
        // only register focus restorer if modal will actually get shown
        return;
      }
      EventHandler.one(target, EVENT_HIDDEN$3, function () {
        if (isVisible(_this29)) {
          _this29.focus();
        }
      });
    });
    var data = Modal.getOrCreateInstance(target);
    data.toggle(this);
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Modal to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Modal);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): offcanvas.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$5 = "offcanvas";
  var DATA_KEY$5 = "bs.offcanvas";
  var EVENT_KEY$5 = ".".concat(DATA_KEY$5);
  var DATA_API_KEY$2 = ".data-api";
  var EVENT_LOAD_DATA_API$1 = "load".concat(EVENT_KEY$5).concat(DATA_API_KEY$2);
  var ESCAPE_KEY = "Escape";
  var Default$4 = {
    backdrop: true,
    keyboard: true,
    scroll: false
  };
  var DefaultType$4 = {
    backdrop: "boolean",
    keyboard: "boolean",
    scroll: "boolean"
  };
  var CLASS_NAME_SHOW$4 = "show";
  var OPEN_SELECTOR = ".offcanvas.show";
  var EVENT_SHOW$2 = "show".concat(EVENT_KEY$5);
  var EVENT_SHOWN$2 = "shown".concat(EVENT_KEY$5);
  var EVENT_HIDE$2 = "hide".concat(EVENT_KEY$5);
  var EVENT_HIDDEN$2 = "hidden".concat(EVENT_KEY$5);
  var EVENT_FOCUSIN$1 = "focusin".concat(EVENT_KEY$5);
  var EVENT_CLICK_DATA_API$1 = "click".concat(EVENT_KEY$5).concat(DATA_API_KEY$2);
  var EVENT_CLICK_DISMISS$1 = "click.dismiss".concat(EVENT_KEY$5);
  var EVENT_KEYDOWN_DISMISS = "keydown.dismiss".concat(EVENT_KEY$5);
  var SELECTOR_DATA_DISMISS$1 = '[data-bs-dismiss="offcanvas"]';
  var SELECTOR_DATA_TOGGLE$1 = '[data-bs-toggle="offcanvas"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Offcanvas = /*#__PURE__*/function (_BaseComponent7) {
    function Offcanvas(element, config) {
      var _this30;
      _classCallCheck(this, Offcanvas);
      _this30 = _callSuper(this, Offcanvas, [element]);
      _this30._config = _this30._getConfig(config);
      _this30._isShown = false;
      _this30._backdrop = _this30._initializeBackDrop();
      _this30._addEventListeners();
      return _this30;
    } // Getters
    _inherits(Offcanvas, _BaseComponent7);
    return _createClass(Offcanvas, [{
      key: "toggle",
      value:
      // Public

      function toggle(relatedTarget) {
        return this._isShown ? this.hide() : this.show(relatedTarget);
      }
    }, {
      key: "show",
      value: function show(relatedTarget) {
        var _this31 = this;
        if (this._isShown) {
          return;
        }
        var showEvent = EventHandler.trigger(this._element, EVENT_SHOW$2, {
          relatedTarget: relatedTarget
        });
        if (showEvent.defaultPrevented) {
          return;
        }
        this._isShown = true;
        this._element.style.visibility = "visible";
        this._backdrop.show();
        if (!this._config.scroll) {
          new ScrollBarHelper().hide();
          this._enforceFocusOnElement(this._element);
        }
        this._element.removeAttribute("aria-hidden");
        this._element.setAttribute("aria-modal", true);
        this._element.setAttribute("role", "dialog");
        this._element.classList.add(CLASS_NAME_SHOW$4);
        var completeCallBack = function completeCallBack() {
          EventHandler.trigger(_this31._element, EVENT_SHOWN$2, {
            relatedTarget: relatedTarget
          });
        };
        this._queueCallback(completeCallBack, this._element, true);
      }
    }, {
      key: "hide",
      value: function hide() {
        var _this32 = this;
        if (!this._isShown) {
          return;
        }
        var hideEvent = EventHandler.trigger(this._element, EVENT_HIDE$2);
        if (hideEvent.defaultPrevented) {
          return;
        }
        EventHandler.off(document, EVENT_FOCUSIN$1);
        this._element.blur();
        this._isShown = false;
        this._element.classList.remove(CLASS_NAME_SHOW$4);
        this._backdrop.hide();
        var completeCallback = function completeCallback() {
          _this32._element.setAttribute("aria-hidden", true);
          _this32._element.removeAttribute("aria-modal");
          _this32._element.removeAttribute("role");
          _this32._element.style.visibility = "hidden";
          if (!_this32._config.scroll) {
            new ScrollBarHelper().reset();
          }
          EventHandler.trigger(_this32._element, EVENT_HIDDEN$2);
        };
        this._queueCallback(completeCallback, this._element, true);
      }
    }, {
      key: "dispose",
      value: function dispose() {
        this._backdrop.dispose();
        _get(_getPrototypeOf(Offcanvas.prototype), "dispose", this).call(this);
        EventHandler.off(document, EVENT_FOCUSIN$1);
      } // Private
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, Default$4), Manipulator.getDataAttributes(this._element)), _typeof(config) === "object" ? config : {});
        typeCheckConfig(NAME$5, config, DefaultType$4);
        return config;
      }
    }, {
      key: "_initializeBackDrop",
      value: function _initializeBackDrop() {
        var _this33 = this;
        return new Backdrop({
          isVisible: this._config.backdrop,
          isAnimated: true,
          rootElement: this._element.parentNode,
          clickCallback: function clickCallback() {
            return _this33.hide();
          }
        });
      }
    }, {
      key: "_enforceFocusOnElement",
      value: function _enforceFocusOnElement(element) {
        EventHandler.off(document, EVENT_FOCUSIN$1); // guard against infinite focus loop

        EventHandler.on(document, EVENT_FOCUSIN$1, function (event) {
          if (document !== event.target && element !== event.target && !element.contains(event.target)) {
            element.focus();
          }
        });
        element.focus();
      }
    }, {
      key: "_addEventListeners",
      value: function _addEventListeners() {
        var _this34 = this;
        EventHandler.on(this._element, EVENT_CLICK_DISMISS$1, SELECTOR_DATA_DISMISS$1, function () {
          return _this34.hide();
        });
        EventHandler.on(this._element, EVENT_KEYDOWN_DISMISS, function (event) {
          if (_this34._config.keyboard && event.key === ESCAPE_KEY) {
            _this34.hide();
          }
        });
      } // Static
    }], [{
      key: "NAME",
      get: function get() {
        return NAME$5;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$4;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Offcanvas.getOrCreateInstance(this, config);
          if (typeof config !== "string") {
            return;
          }
          if (data[config] === undefined || config.startsWith("_") || config === "constructor") {
            throw new TypeError("No method named \"".concat(config, "\""));
          }
          data[config](this);
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API$1, SELECTOR_DATA_TOGGLE$1, function (event) {
    var _this35 = this;
    var target = getElementFromSelector(this);
    if (["A", "AREA"].includes(this.tagName)) {
      event.preventDefault();
    }
    if (isDisabled(this)) {
      return;
    }
    EventHandler.one(target, EVENT_HIDDEN$2, function () {
      // focus on trigger when it is closed
      if (isVisible(_this35)) {
        _this35.focus();
      }
    }); // avoid conflict when clicking a toggler of an offcanvas, while another is open

    var allReadyOpen = SelectorEngine.findOne(OPEN_SELECTOR);
    if (allReadyOpen && allReadyOpen !== target) {
      Offcanvas.getInstance(allReadyOpen).hide();
    }
    var data = Offcanvas.getOrCreateInstance(target);
    data.toggle(this);
  });
  EventHandler.on(window, EVENT_LOAD_DATA_API$1, function () {
    return SelectorEngine.find(OPEN_SELECTOR).forEach(function (el) {
      return Offcanvas.getOrCreateInstance(el).show();
    });
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  defineJQueryPlugin(Offcanvas);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): util/sanitizer.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  var uriAttrs = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"]);
  var ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i;
  /**
   * A pattern that recognizes a commonly useful subset of URLs that are safe.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */

  var SAFE_URL_PATTERN = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/i;
  /**
   * A pattern that matches safe data URLs. Only matches image, video and audio types.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */

  var DATA_URL_PATTERN = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;
  var allowedAttribute = function allowedAttribute(attr, allowedAttributeList) {
    var attrName = attr.nodeName.toLowerCase();
    if (allowedAttributeList.includes(attrName)) {
      if (uriAttrs.has(attrName)) {
        return Boolean(SAFE_URL_PATTERN.test(attr.nodeValue) || DATA_URL_PATTERN.test(attr.nodeValue));
      }
      return true;
    }
    var regExp = allowedAttributeList.filter(function (attrRegex) {
      return attrRegex instanceof RegExp;
    }); // Check if a regular expression validates the attribute.

    for (var i = 0, len = regExp.length; i < len; i++) {
      if (regExp[i].test(attrName)) {
        return true;
      }
    }
    return false;
  };
  var DefaultAllowlist = {
    // Global attributes allowed on any supplied element below.
    "*": ["class", "dir", "id", "lang", "role", ARIA_ATTRIBUTE_PATTERN],
    a: ["target", "href", "title", "rel"],
    area: [],
    b: [],
    br: [],
    col: [],
    code: [],
    div: [],
    em: [],
    hr: [],
    h1: [],
    h2: [],
    h3: [],
    h4: [],
    h5: [],
    h6: [],
    i: [],
    img: ["src", "srcset", "alt", "title", "width", "height"],
    li: [],
    ol: [],
    p: [],
    pre: [],
    s: [],
    small: [],
    span: [],
    sub: [],
    sup: [],
    strong: [],
    u: [],
    ul: []
  };
  function sanitizeHtml(unsafeHtml, allowList, sanitizeFn) {
    var _ref7;
    if (!unsafeHtml.length) {
      return unsafeHtml;
    }
    if (sanitizeFn && typeof sanitizeFn === "function") {
      return sanitizeFn(unsafeHtml);
    }
    var domParser = new window.DOMParser();
    var createdDocument = domParser.parseFromString(unsafeHtml, "text/html");
    var allowlistKeys = Object.keys(allowList);
    var elements = (_ref7 = []).concat.apply(_ref7, _toConsumableArray(createdDocument.body.querySelectorAll("*")));
    var _loop = function _loop() {
      var _ref8;
      var el = elements[i];
      var elName = el.nodeName.toLowerCase();
      if (!allowlistKeys.includes(elName)) {
        el.remove();
        return 1; // continue
      }
      var attributeList = (_ref8 = []).concat.apply(_ref8, _toConsumableArray(el.attributes));
      var allowedAttributes = [].concat(allowList["*"] || [], allowList[elName] || []);
      attributeList.forEach(function (attr) {
        if (!allowedAttribute(attr, allowedAttributes)) {
          el.removeAttribute(attr.nodeName);
        }
      });
    };
    for (var i = 0, len = elements.length; i < len; i++) {
      if (_loop()) continue;
    }
    return createdDocument.body.innerHTML;
  }

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): tooltip.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$4 = "tooltip";
  var DATA_KEY$4 = "bs.tooltip";
  var EVENT_KEY$4 = ".".concat(DATA_KEY$4);
  var CLASS_PREFIX$1 = "bs-tooltip";
  var BSCLS_PREFIX_REGEX$1 = new RegExp("(^|\\s)".concat(CLASS_PREFIX$1, "\\S+"), "g");
  var DISALLOWED_ATTRIBUTES = new Set(["sanitize", "allowList", "sanitizeFn"]);
  var DefaultType$3 = {
    animation: "boolean",
    template: "string",
    title: "(string|element|function)",
    trigger: "string",
    delay: "(number|object)",
    html: "boolean",
    selector: "(string|boolean)",
    placement: "(string|function)",
    offset: "(array|string|function)",
    container: "(string|element|boolean)",
    fallbackPlacements: "array",
    boundary: "(string|element)",
    customClass: "(string|function)",
    sanitize: "boolean",
    sanitizeFn: "(null|function)",
    allowList: "object",
    popperConfig: "(null|object|function)"
  };
  var AttachmentMap = {
    AUTO: "auto",
    TOP: "top",
    RIGHT: isRTL() ? "left" : "right",
    BOTTOM: "bottom",
    LEFT: isRTL() ? "right" : "left"
  };
  var Default$3 = {
    animation: true,
    template: '<div class="tooltip" role="tooltip">' + '<div class="tooltip-arrow"></div>' + '<div class="tooltip-inner"></div>' + "</div>",
    trigger: "hover focus",
    title: "",
    delay: 0,
    html: false,
    selector: false,
    placement: "top",
    offset: [0, 0],
    container: false,
    fallbackPlacements: ["top", "right", "bottom", "left"],
    boundary: "clippingParents",
    customClass: "",
    sanitize: true,
    sanitizeFn: null,
    allowList: DefaultAllowlist,
    popperConfig: null
  };
  var Event$2 = {
    HIDE: "hide".concat(EVENT_KEY$4),
    HIDDEN: "hidden".concat(EVENT_KEY$4),
    SHOW: "show".concat(EVENT_KEY$4),
    SHOWN: "shown".concat(EVENT_KEY$4),
    INSERTED: "inserted".concat(EVENT_KEY$4),
    CLICK: "click".concat(EVENT_KEY$4),
    FOCUSIN: "focusin".concat(EVENT_KEY$4),
    FOCUSOUT: "focusout".concat(EVENT_KEY$4),
    MOUSEENTER: "mouseenter".concat(EVENT_KEY$4),
    MOUSELEAVE: "mouseleave".concat(EVENT_KEY$4)
  };
  var CLASS_NAME_FADE$3 = "fade";
  var CLASS_NAME_MODAL = "modal";
  var CLASS_NAME_SHOW$3 = "show";
  var HOVER_STATE_SHOW = "show";
  var HOVER_STATE_OUT = "out";
  var SELECTOR_TOOLTIP_INNER = ".tooltip-inner";
  var TRIGGER_HOVER = "hover";
  var TRIGGER_FOCUS = "focus";
  var TRIGGER_CLICK = "click";
  var TRIGGER_MANUAL = "manual";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Tooltip = /*#__PURE__*/function (_BaseComponent8) {
    function Tooltip(element, config) {
      var _this36;
      _classCallCheck(this, Tooltip);
      if (typeof Popper__namespace === "undefined") {
        throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
      }
      _this36 = _callSuper(this, Tooltip, [element]); // private

      _this36._isEnabled = true;
      _this36._timeout = 0;
      _this36._hoverState = "";
      _this36._activeTrigger = {};
      _this36._popper = null; // Protected

      _this36._config = _this36._getConfig(config);
      _this36.tip = null;
      _this36._setListeners();
      return _this36;
    } // Getters
    _inherits(Tooltip, _BaseComponent8);
    return _createClass(Tooltip, [{
      key: "enable",
      value:
      // Public

      function enable() {
        this._isEnabled = true;
      }
    }, {
      key: "disable",
      value: function disable() {
        this._isEnabled = false;
      }
    }, {
      key: "toggleEnabled",
      value: function toggleEnabled() {
        this._isEnabled = !this._isEnabled;
      }
    }, {
      key: "toggle",
      value: function toggle(event) {
        if (!this._isEnabled) {
          return;
        }
        if (event) {
          var context = this._initializeOnDelegatedTarget(event);
          context._activeTrigger.click = !context._activeTrigger.click;
          if (context._isWithActiveTrigger()) {
            context._enter(null, context);
          } else {
            context._leave(null, context);
          }
        } else {
          if (this.getTipElement().classList.contains(CLASS_NAME_SHOW$3)) {
            this._leave(null, this);
            return;
          }
          this._enter(null, this);
        }
      }
    }, {
      key: "dispose",
      value: function dispose() {
        clearTimeout(this._timeout);
        EventHandler.off(this._element.closest(".".concat(CLASS_NAME_MODAL)), "hide.bs.modal", this._hideModalHandler);
        if (this.tip) {
          this.tip.remove();
        }
        if (this._popper) {
          this._popper.destroy();
        }
        _get(_getPrototypeOf(Tooltip.prototype), "dispose", this).call(this);
      }
    }, {
      key: "show",
      value: function show() {
        var _this37 = this;
        if (this._element.style.display === "none") {
          throw new Error("Please use show on visible elements");
        }
        if (!(this.isWithContent() && this._isEnabled)) {
          return;
        }
        var showEvent = EventHandler.trigger(this._element, this.constructor.Event.SHOW);
        var shadowRoot = findShadowRoot(this._element);
        var isInTheDom = shadowRoot === null ? this._element.ownerDocument.documentElement.contains(this._element) : shadowRoot.contains(this._element);
        if (showEvent.defaultPrevented || !isInTheDom) {
          return;
        }
        var tip = this.getTipElement();
        var tipId = getUID(this.constructor.NAME);
        tip.setAttribute("id", tipId);
        this._element.setAttribute("aria-describedby", tipId);
        this.setContent();
        if (this._config.animation) {
          tip.classList.add(CLASS_NAME_FADE$3);
        }
        var placement = typeof this._config.placement === "function" ? this._config.placement.call(this, tip, this._element) : this._config.placement;
        var attachment = this._getAttachment(placement);
        this._addAttachmentClass(attachment);
        var container = this._config.container;
        Data.set(tip, this.constructor.DATA_KEY, this);
        if (!this._element.ownerDocument.documentElement.contains(this.tip)) {
          container.appendChild(tip);
          EventHandler.trigger(this._element, this.constructor.Event.INSERTED);
        }
        if (this._popper) {
          this._popper.update();
        } else {
          this._popper = Popper__namespace.createPopper(this._element, tip, this._getPopperConfig(attachment));
        }
        tip.classList.add(CLASS_NAME_SHOW$3);
        var customClass = typeof this._config.customClass === "function" ? this._config.customClass() : this._config.customClass;
        if (customClass) {
          var _tip$classList;
          (_tip$classList = tip.classList).add.apply(_tip$classList, _toConsumableArray(customClass.split(" ")));
        } // If this is a touch-enabled device we add extra
        // empty mouseover listeners to the body's immediate children;
        // only needed because of broken event delegation on iOS
        // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html

        if ("ontouchstart" in document.documentElement) {
          var _ref9;
          (_ref9 = []).concat.apply(_ref9, _toConsumableArray(document.body.children)).forEach(function (element) {
            EventHandler.on(element, "mouseover", noop);
          });
        }
        var complete = function complete() {
          var prevHoverState = _this37._hoverState;
          _this37._hoverState = null;
          EventHandler.trigger(_this37._element, _this37.constructor.Event.SHOWN);
          if (prevHoverState === HOVER_STATE_OUT) {
            _this37._leave(null, _this37);
          }
        };
        var isAnimated = this.tip.classList.contains(CLASS_NAME_FADE$3);
        this._queueCallback(complete, this.tip, isAnimated);
      }
    }, {
      key: "hide",
      value: function hide() {
        var _this38 = this;
        if (!this._popper) {
          return;
        }
        var tip = this.getTipElement();
        var complete = function complete() {
          if (_this38._isWithActiveTrigger()) {
            return;
          }
          if (_this38._hoverState !== HOVER_STATE_SHOW) {
            tip.remove();
          }
          _this38._cleanTipClass();
          _this38._element.removeAttribute("aria-describedby");
          EventHandler.trigger(_this38._element, _this38.constructor.Event.HIDDEN);
          if (_this38._popper) {
            _this38._popper.destroy();
            _this38._popper = null;
          }
        };
        var hideEvent = EventHandler.trigger(this._element, this.constructor.Event.HIDE);
        if (hideEvent.defaultPrevented) {
          return;
        }
        tip.classList.remove(CLASS_NAME_SHOW$3); // If this is a touch-enabled device we remove the extra
        // empty mouseover listeners we added for iOS support

        if ("ontouchstart" in document.documentElement) {
          var _ref10;
          (_ref10 = []).concat.apply(_ref10, _toConsumableArray(document.body.children)).forEach(function (element) {
            return EventHandler.off(element, "mouseover", noop);
          });
        }
        this._activeTrigger[TRIGGER_CLICK] = false;
        this._activeTrigger[TRIGGER_FOCUS] = false;
        this._activeTrigger[TRIGGER_HOVER] = false;
        var isAnimated = this.tip.classList.contains(CLASS_NAME_FADE$3);
        this._queueCallback(complete, this.tip, isAnimated);
        this._hoverState = "";
      }
    }, {
      key: "update",
      value: function update() {
        if (this._popper !== null) {
          this._popper.update();
        }
      } // Protected
    }, {
      key: "isWithContent",
      value: function isWithContent() {
        return Boolean(this.getTitle());
      }
    }, {
      key: "getTipElement",
      value: function getTipElement() {
        if (this.tip) {
          return this.tip;
        }
        var element = document.createElement("div");
        element.innerHTML = this._config.template;
        this.tip = element.children[0];
        return this.tip;
      }
    }, {
      key: "setContent",
      value: function setContent() {
        var tip = this.getTipElement();
        this.setElementContent(SelectorEngine.findOne(SELECTOR_TOOLTIP_INNER, tip), this.getTitle());
        tip.classList.remove(CLASS_NAME_FADE$3, CLASS_NAME_SHOW$3);
      }
    }, {
      key: "setElementContent",
      value: function setElementContent(element, content) {
        if (element === null) {
          return;
        }
        if (isElement(content)) {
          content = getElement(content); // content is a DOM node or a jQuery

          if (this._config.html) {
            if (content.parentNode !== element) {
              element.innerHTML = "";
              element.appendChild(content);
            }
          } else {
            element.textContent = content.textContent;
          }
          return;
        }
        if (this._config.html) {
          if (this._config.sanitize) {
            content = sanitizeHtml(content, this._config.allowList, this._config.sanitizeFn);
          }
          element.innerHTML = content;
        } else {
          element.textContent = content;
        }
      }
    }, {
      key: "getTitle",
      value: function getTitle() {
        var title = this._element.getAttribute("data-bs-original-title");
        if (!title) {
          title = typeof this._config.title === "function" ? this._config.title.call(this._element) : this._config.title;
        }
        return title;
      }
    }, {
      key: "updateAttachment",
      value: function updateAttachment(attachment) {
        if (attachment === "right") {
          return "end";
        }
        if (attachment === "left") {
          return "start";
        }
        return attachment;
      } // Private
    }, {
      key: "_initializeOnDelegatedTarget",
      value: function _initializeOnDelegatedTarget(event, context) {
        var dataKey = this.constructor.DATA_KEY;
        context = context || Data.get(event.delegateTarget, dataKey);
        if (!context) {
          context = new this.constructor(event.delegateTarget, this._getDelegateConfig());
          Data.set(event.delegateTarget, dataKey, context);
        }
        return context;
      }
    }, {
      key: "_getOffset",
      value: function _getOffset() {
        var _this39 = this;
        var offset = this._config.offset;
        if (typeof offset === "string") {
          return offset.split(",").map(function (val) {
            return Number.parseInt(val, 10);
          });
        }
        if (typeof offset === "function") {
          return function (popperData) {
            return offset(popperData, _this39._element);
          };
        }
        return offset;
      }
    }, {
      key: "_getPopperConfig",
      value: function _getPopperConfig(attachment) {
        var _this40 = this;
        var defaultBsPopperConfig = {
          placement: attachment,
          modifiers: [{
            name: "flip",
            options: {
              fallbackPlacements: this._config.fallbackPlacements
            }
          }, {
            name: "offset",
            options: {
              offset: this._getOffset()
            }
          }, {
            name: "preventOverflow",
            options: {
              boundary: this._config.boundary
            }
          }, {
            name: "arrow",
            options: {
              element: ".".concat(this.constructor.NAME, "-arrow")
            }
          }, {
            name: "onChange",
            enabled: true,
            phase: "afterWrite",
            fn: function fn(data) {
              return _this40._handlePopperPlacementChange(data);
            }
          }],
          onFirstUpdate: function onFirstUpdate(data) {
            if (data.options.placement !== data.placement) {
              _this40._handlePopperPlacementChange(data);
            }
          }
        };
        return _objectSpread(_objectSpread({}, defaultBsPopperConfig), typeof this._config.popperConfig === "function" ? this._config.popperConfig(defaultBsPopperConfig) : this._config.popperConfig);
      }
    }, {
      key: "_addAttachmentClass",
      value: function _addAttachmentClass(attachment) {
        this.getTipElement().classList.add("".concat(CLASS_PREFIX$1, "-").concat(this.updateAttachment(attachment)));
      }
    }, {
      key: "_getAttachment",
      value: function _getAttachment(placement) {
        return AttachmentMap[placement.toUpperCase()];
      }
    }, {
      key: "_setListeners",
      value: function _setListeners() {
        var _this41 = this;
        var triggers = this._config.trigger.split(" ");
        triggers.forEach(function (trigger) {
          if (trigger === "click") {
            EventHandler.on(_this41._element, _this41.constructor.Event.CLICK, _this41._config.selector, function (event) {
              return _this41.toggle(event);
            });
          } else if (trigger !== TRIGGER_MANUAL) {
            var eventIn = trigger === TRIGGER_HOVER ? _this41.constructor.Event.MOUSEENTER : _this41.constructor.Event.FOCUSIN;
            var eventOut = trigger === TRIGGER_HOVER ? _this41.constructor.Event.MOUSELEAVE : _this41.constructor.Event.FOCUSOUT;
            EventHandler.on(_this41._element, eventIn, _this41._config.selector, function (event) {
              return _this41._enter(event);
            });
            EventHandler.on(_this41._element, eventOut, _this41._config.selector, function (event) {
              return _this41._leave(event);
            });
          }
        });
        this._hideModalHandler = function () {
          if (_this41._element) {
            _this41.hide();
          }
        };
        EventHandler.on(this._element.closest(".".concat(CLASS_NAME_MODAL)), "hide.bs.modal", this._hideModalHandler);
        if (this._config.selector) {
          this._config = _objectSpread(_objectSpread({}, this._config), {}, {
            trigger: "manual",
            selector: ""
          });
        } else {
          this._fixTitle();
        }
      }
    }, {
      key: "_fixTitle",
      value: function _fixTitle() {
        var title = this._element.getAttribute("title");
        var originalTitleType = _typeof(this._element.getAttribute("data-bs-original-title"));
        if (title || originalTitleType !== "string") {
          this._element.setAttribute("data-bs-original-title", title || "");
          if (title && !this._element.getAttribute("aria-label") && !this._element.textContent) {
            this._element.setAttribute("aria-label", title);
          }
          this._element.setAttribute("title", "");
        }
      }
    }, {
      key: "_enter",
      value: function _enter(event, context) {
        context = this._initializeOnDelegatedTarget(event, context);
        if (event) {
          context._activeTrigger[event.type === "focusin" ? TRIGGER_FOCUS : TRIGGER_HOVER] = true;
        }
        if (context.getTipElement().classList.contains(CLASS_NAME_SHOW$3) || context._hoverState === HOVER_STATE_SHOW) {
          context._hoverState = HOVER_STATE_SHOW;
          return;
        }
        clearTimeout(context._timeout);
        context._hoverState = HOVER_STATE_SHOW;
        if (!context._config.delay || !context._config.delay.show) {
          context.show();
          return;
        }
        context._timeout = setTimeout(function () {
          if (context._hoverState === HOVER_STATE_SHOW) {
            context.show();
          }
        }, context._config.delay.show);
      }
    }, {
      key: "_leave",
      value: function _leave(event, context) {
        context = this._initializeOnDelegatedTarget(event, context);
        if (event) {
          context._activeTrigger[event.type === "focusout" ? TRIGGER_FOCUS : TRIGGER_HOVER] = context._element.contains(event.relatedTarget);
        }
        if (context._isWithActiveTrigger()) {
          return;
        }
        clearTimeout(context._timeout);
        context._hoverState = HOVER_STATE_OUT;
        if (!context._config.delay || !context._config.delay.hide) {
          context.hide();
          return;
        }
        context._timeout = setTimeout(function () {
          if (context._hoverState === HOVER_STATE_OUT) {
            context.hide();
          }
        }, context._config.delay.hide);
      }
    }, {
      key: "_isWithActiveTrigger",
      value: function _isWithActiveTrigger() {
        for (var trigger in this._activeTrigger) {
          if (this._activeTrigger[trigger]) {
            return true;
          }
        }
        return false;
      }
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        var dataAttributes = Manipulator.getDataAttributes(this._element);
        Object.keys(dataAttributes).forEach(function (dataAttr) {
          if (DISALLOWED_ATTRIBUTES.has(dataAttr)) {
            delete dataAttributes[dataAttr];
          }
        });
        config = _objectSpread(_objectSpread(_objectSpread({}, this.constructor.Default), dataAttributes), _typeof(config) === "object" && config ? config : {});
        config.container = config.container === false ? document.body : getElement(config.container);
        if (typeof config.delay === "number") {
          config.delay = {
            show: config.delay,
            hide: config.delay
          };
        }
        if (typeof config.title === "number") {
          config.title = config.title.toString();
        }
        if (typeof config.content === "number") {
          config.content = config.content.toString();
        }
        typeCheckConfig(NAME$4, config, this.constructor.DefaultType);
        if (config.sanitize) {
          config.template = sanitizeHtml(config.template, config.allowList, config.sanitizeFn);
        }
        return config;
      }
    }, {
      key: "_getDelegateConfig",
      value: function _getDelegateConfig() {
        var config = {};
        if (this._config) {
          for (var key in this._config) {
            if (this.constructor.Default[key] !== this._config[key]) {
              config[key] = this._config[key];
            }
          }
        }
        return config;
      }
    }, {
      key: "_cleanTipClass",
      value: function _cleanTipClass() {
        var tip = this.getTipElement();
        var tabClass = tip.getAttribute("class").match(BSCLS_PREFIX_REGEX$1);
        if (tabClass !== null && tabClass.length > 0) {
          tabClass.map(function (token) {
            return token.trim();
          }).forEach(function (tClass) {
            return tip.classList.remove(tClass);
          });
        }
      }
    }, {
      key: "_handlePopperPlacementChange",
      value: function _handlePopperPlacementChange(popperData) {
        var state = popperData.state;
        if (!state) {
          return;
        }
        this.tip = state.elements.popper;
        this._cleanTipClass();
        this._addAttachmentClass(this._getAttachment(state.placement));
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$3;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$4;
      }
    }, {
      key: "Event",
      get: function get() {
        return Event$2;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$3;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Tooltip.getOrCreateInstance(this, config);
          if (typeof config === "string") {
            if (typeof data[config] === "undefined") {
              throw new TypeError("No method named \"".concat(config, "\""));
            }
            data[config]();
          }
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Tooltip to jQuery only if jQuery is present
   */
  defineJQueryPlugin(Tooltip);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): popover.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$3 = "popover";
  var DATA_KEY$3 = "bs.popover";
  var EVENT_KEY$3 = ".".concat(DATA_KEY$3);
  var CLASS_PREFIX = "bs-popover";
  var BSCLS_PREFIX_REGEX = new RegExp("(^|\\s)".concat(CLASS_PREFIX, "\\S+"), "g");
  var Default$2 = _objectSpread(_objectSpread({}, Tooltip.Default), {}, {
    placement: "right",
    offset: [0, 8],
    trigger: "click",
    content: "",
    template: '<div class="popover" role="tooltip">' + '<div class="popover-arrow"></div>' + '<h3 class="popover-header"></h3>' + '<div class="popover-body"></div>' + "</div>"
  });
  var DefaultType$2 = _objectSpread(_objectSpread({}, Tooltip.DefaultType), {}, {
    content: "(string|element|function)"
  });
  var Event$1 = {
    HIDE: "hide".concat(EVENT_KEY$3),
    HIDDEN: "hidden".concat(EVENT_KEY$3),
    SHOW: "show".concat(EVENT_KEY$3),
    SHOWN: "shown".concat(EVENT_KEY$3),
    INSERTED: "inserted".concat(EVENT_KEY$3),
    CLICK: "click".concat(EVENT_KEY$3),
    FOCUSIN: "focusin".concat(EVENT_KEY$3),
    FOCUSOUT: "focusout".concat(EVENT_KEY$3),
    MOUSEENTER: "mouseenter".concat(EVENT_KEY$3),
    MOUSELEAVE: "mouseleave".concat(EVENT_KEY$3)
  };
  var CLASS_NAME_FADE$2 = "fade";
  var CLASS_NAME_SHOW$2 = "show";
  var SELECTOR_TITLE = ".popover-header";
  var SELECTOR_CONTENT = ".popover-body";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Popover = /*#__PURE__*/function (_Tooltip) {
    function Popover() {
      _classCallCheck(this, Popover);
      return _callSuper(this, Popover, arguments);
    }
    _inherits(Popover, _Tooltip);
    return _createClass(Popover, [{
      key: "isWithContent",
      value:
      // Overrides

      function isWithContent() {
        return this.getTitle() || this._getContent();
      }
    }, {
      key: "getTipElement",
      value: function getTipElement() {
        if (this.tip) {
          return this.tip;
        }
        this.tip = _get(_getPrototypeOf(Popover.prototype), "getTipElement", this).call(this);
        if (!this.getTitle()) {
          SelectorEngine.findOne(SELECTOR_TITLE, this.tip).remove();
        }
        if (!this._getContent()) {
          SelectorEngine.findOne(SELECTOR_CONTENT, this.tip).remove();
        }
        return this.tip;
      }
    }, {
      key: "setContent",
      value: function setContent() {
        var tip = this.getTipElement(); // we use append for html objects to maintain js events

        this.setElementContent(SelectorEngine.findOne(SELECTOR_TITLE, tip), this.getTitle());
        var content = this._getContent();
        if (typeof content === "function") {
          content = content.call(this._element);
        }
        this.setElementContent(SelectorEngine.findOne(SELECTOR_CONTENT, tip), content);
        tip.classList.remove(CLASS_NAME_FADE$2, CLASS_NAME_SHOW$2);
      } // Private
    }, {
      key: "_addAttachmentClass",
      value: function _addAttachmentClass(attachment) {
        this.getTipElement().classList.add("".concat(CLASS_PREFIX, "-").concat(this.updateAttachment(attachment)));
      }
    }, {
      key: "_getContent",
      value: function _getContent() {
        return this._element.getAttribute("data-bs-content") || this._config.content;
      }
    }, {
      key: "_cleanTipClass",
      value: function _cleanTipClass() {
        var tip = this.getTipElement();
        var tabClass = tip.getAttribute("class").match(BSCLS_PREFIX_REGEX);
        if (tabClass !== null && tabClass.length > 0) {
          tabClass.map(function (token) {
            return token.trim();
          }).forEach(function (tClass) {
            return tip.classList.remove(tClass);
          });
        }
      } // Static
    }], [{
      key: "Default",
      get:
      // Getters
      function get() {
        return Default$2;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$3;
      }
    }, {
      key: "Event",
      get: function get() {
        return Event$1;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$2;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Popover.getOrCreateInstance(this, config);
          if (typeof config === "string") {
            if (typeof data[config] === "undefined") {
              throw new TypeError("No method named \"".concat(config, "\""));
            }
            data[config]();
          }
        });
      }
    }]);
  }(Tooltip);
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Popover to jQuery only if jQuery is present
   */
  defineJQueryPlugin(Popover);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): scrollspy.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$2 = "scrollspy";
  var DATA_KEY$2 = "bs.scrollspy";
  var EVENT_KEY$2 = ".".concat(DATA_KEY$2);
  var DATA_API_KEY$1 = ".data-api";
  var Default$1 = {
    offset: 10,
    method: "auto",
    target: ""
  };
  var DefaultType$1 = {
    offset: "number",
    method: "string",
    target: "(string|element)"
  };
  var EVENT_ACTIVATE = "activate".concat(EVENT_KEY$2);
  var EVENT_SCROLL = "scroll".concat(EVENT_KEY$2);
  var EVENT_LOAD_DATA_API = "load".concat(EVENT_KEY$2).concat(DATA_API_KEY$1);
  var CLASS_NAME_DROPDOWN_ITEM = "dropdown-item";
  var CLASS_NAME_ACTIVE$1 = "active";
  var SELECTOR_DATA_SPY = '[data-bs-spy="scroll"]';
  var SELECTOR_NAV_LIST_GROUP$1 = ".nav, .list-group";
  var SELECTOR_NAV_LINKS = ".nav-link";
  var SELECTOR_NAV_ITEMS = ".nav-item";
  var SELECTOR_LIST_ITEMS = ".list-group-item";
  var SELECTOR_DROPDOWN$1 = ".dropdown";
  var SELECTOR_DROPDOWN_TOGGLE$1 = ".dropdown-toggle";
  var METHOD_OFFSET = "offset";
  var METHOD_POSITION = "position";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var ScrollSpy = /*#__PURE__*/function (_BaseComponent9) {
    function ScrollSpy(element, config) {
      var _this42;
      _classCallCheck(this, ScrollSpy);
      _this42 = _callSuper(this, ScrollSpy, [element]);
      _this42._scrollElement = _this42._element.tagName === "BODY" ? window : _this42._element;
      _this42._config = _this42._getConfig(config);
      _this42._selector = "".concat(_this42._config.target, " ").concat(SELECTOR_NAV_LINKS, ", ").concat(_this42._config.target, " ").concat(SELECTOR_LIST_ITEMS, ", ").concat(_this42._config.target, " .").concat(CLASS_NAME_DROPDOWN_ITEM);
      _this42._offsets = [];
      _this42._targets = [];
      _this42._activeTarget = null;
      _this42._scrollHeight = 0;
      EventHandler.on(_this42._scrollElement, EVENT_SCROLL, function () {
        return _this42._process();
      });
      _this42.refresh();
      _this42._process();
      return _this42;
    } // Getters
    _inherits(ScrollSpy, _BaseComponent9);
    return _createClass(ScrollSpy, [{
      key: "refresh",
      value:
      // Public

      function refresh() {
        var _this43 = this;
        var autoMethod = this._scrollElement === this._scrollElement.window ? METHOD_OFFSET : METHOD_POSITION;
        var offsetMethod = this._config.method === "auto" ? autoMethod : this._config.method;
        var offsetBase = offsetMethod === METHOD_POSITION ? this._getScrollTop() : 0;
        this._offsets = [];
        this._targets = [];
        this._scrollHeight = this._getScrollHeight();
        var targets = SelectorEngine.find(this._selector);
        targets.map(function (element) {
          var targetSelector = getSelectorFromElement(element);
          var target = targetSelector ? SelectorEngine.findOne(targetSelector) : null;
          if (target) {
            var targetBCR = target.getBoundingClientRect();
            if (targetBCR.width || targetBCR.height) {
              return [Manipulator[offsetMethod](target).top + offsetBase, targetSelector];
            }
          }
          return null;
        }).filter(function (item) {
          return item;
        }).sort(function (a, b) {
          return a[0] - b[0];
        }).forEach(function (item) {
          _this43._offsets.push(item[0]);
          _this43._targets.push(item[1]);
        });
      }
    }, {
      key: "dispose",
      value: function dispose() {
        EventHandler.off(this._scrollElement, EVENT_KEY$2);
        _get(_getPrototypeOf(ScrollSpy.prototype), "dispose", this).call(this);
      } // Private
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, Default$1), Manipulator.getDataAttributes(this._element)), _typeof(config) === "object" && config ? config : {});
        if (typeof config.target !== "string" && isElement(config.target)) {
          var id = config.target.id;
          if (!id) {
            id = getUID(NAME$2);
            config.target.id = id;
          }
          config.target = "#".concat(id);
        }
        typeCheckConfig(NAME$2, config, DefaultType$1);
        return config;
      }
    }, {
      key: "_getScrollTop",
      value: function _getScrollTop() {
        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop;
      }
    }, {
      key: "_getScrollHeight",
      value: function _getScrollHeight() {
        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
      }
    }, {
      key: "_getOffsetHeight",
      value: function _getOffsetHeight() {
        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height;
      }
    }, {
      key: "_process",
      value: function _process() {
        var scrollTop = this._getScrollTop() + this._config.offset;
        var scrollHeight = this._getScrollHeight();
        var maxScroll = this._config.offset + scrollHeight - this._getOffsetHeight();
        if (this._scrollHeight !== scrollHeight) {
          this.refresh();
        }
        if (scrollTop >= maxScroll) {
          var target = this._targets[this._targets.length - 1];
          if (this._activeTarget !== target) {
            this._activate(target);
          }
          return;
        }
        if (this._activeTarget && scrollTop < this._offsets[0] && this._offsets[0] > 0) {
          this._activeTarget = null;
          this._clear();
          return;
        }
        for (var i = this._offsets.length; i--;) {
          var isActiveTarget = this._activeTarget !== this._targets[i] && scrollTop >= this._offsets[i] && (typeof this._offsets[i + 1] === "undefined" || scrollTop < this._offsets[i + 1]);
          if (isActiveTarget) {
            this._activate(this._targets[i]);
          }
        }
      }
    }, {
      key: "_activate",
      value: function _activate(target) {
        this._activeTarget = target;
        this._clear();
        var queries = this._selector.split(",").map(function (selector) {
          return "".concat(selector, "[data-bs-target=\"").concat(target, "\"],").concat(selector, "[href=\"").concat(target, "\"]");
        });
        var link = SelectorEngine.findOne(queries.join(","));
        if (link.classList.contains(CLASS_NAME_DROPDOWN_ITEM)) {
          SelectorEngine.findOne(SELECTOR_DROPDOWN_TOGGLE$1, link.closest(SELECTOR_DROPDOWN$1)).classList.add(CLASS_NAME_ACTIVE$1);
          link.classList.add(CLASS_NAME_ACTIVE$1);
        } else {
          // Set triggered link as active
          link.classList.add(CLASS_NAME_ACTIVE$1);
          SelectorEngine.parents(link, SELECTOR_NAV_LIST_GROUP$1).forEach(function (listGroup) {
            // Set triggered links parents as active
            // With both <ul> and <nav> markup a parent is the previous sibling of any nav ancestor
            SelectorEngine.prev(listGroup, "".concat(SELECTOR_NAV_LINKS, ", ").concat(SELECTOR_LIST_ITEMS)).forEach(function (item) {
              return item.classList.add(CLASS_NAME_ACTIVE$1);
            }); // Handle special case when .nav-link is inside .nav-item

            SelectorEngine.prev(listGroup, SELECTOR_NAV_ITEMS).forEach(function (navItem) {
              SelectorEngine.children(navItem, SELECTOR_NAV_LINKS).forEach(function (item) {
                return item.classList.add(CLASS_NAME_ACTIVE$1);
              });
            });
          });
        }
        EventHandler.trigger(this._scrollElement, EVENT_ACTIVATE, {
          relatedTarget: target
        });
      }
    }, {
      key: "_clear",
      value: function _clear() {
        SelectorEngine.find(this._selector).filter(function (node) {
          return node.classList.contains(CLASS_NAME_ACTIVE$1);
        }).forEach(function (node) {
          return node.classList.remove(CLASS_NAME_ACTIVE$1);
        });
      } // Static
    }], [{
      key: "Default",
      get: function get() {
        return Default$1;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$2;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = ScrollSpy.getOrCreateInstance(this, config);
          if (typeof config !== "string") {
            return;
          }
          if (typeof data[config] === "undefined") {
            throw new TypeError("No method named \"".concat(config, "\""));
          }
          data[config]();
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(window, EVENT_LOAD_DATA_API, function () {
    SelectorEngine.find(SELECTOR_DATA_SPY).forEach(function (spy) {
      return new ScrollSpy(spy);
    });
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .ScrollSpy to jQuery only if jQuery is present
   */

  defineJQueryPlugin(ScrollSpy);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): tab.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$1 = "tab";
  var DATA_KEY$1 = "bs.tab";
  var EVENT_KEY$1 = ".".concat(DATA_KEY$1);
  var DATA_API_KEY = ".data-api";
  var EVENT_HIDE$1 = "hide".concat(EVENT_KEY$1);
  var EVENT_HIDDEN$1 = "hidden".concat(EVENT_KEY$1);
  var EVENT_SHOW$1 = "show".concat(EVENT_KEY$1);
  var EVENT_SHOWN$1 = "shown".concat(EVENT_KEY$1);
  var EVENT_CLICK_DATA_API = "click".concat(EVENT_KEY$1).concat(DATA_API_KEY);
  var CLASS_NAME_DROPDOWN_MENU = "dropdown-menu";
  var CLASS_NAME_ACTIVE = "active";
  var CLASS_NAME_FADE$1 = "fade";
  var CLASS_NAME_SHOW$1 = "show";
  var SELECTOR_DROPDOWN = ".dropdown";
  var SELECTOR_NAV_LIST_GROUP = ".nav, .list-group";
  var SELECTOR_ACTIVE = ".active";
  var SELECTOR_ACTIVE_UL = ":scope > li > .active";
  var SELECTOR_DATA_TOGGLE = '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]';
  var SELECTOR_DROPDOWN_TOGGLE = ".dropdown-toggle";
  var SELECTOR_DROPDOWN_ACTIVE_CHILD = ":scope > .dropdown-menu .active";
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Tab = /*#__PURE__*/function (_BaseComponent10) {
    function Tab() {
      _classCallCheck(this, Tab);
      return _callSuper(this, Tab, arguments);
    }
    _inherits(Tab, _BaseComponent10);
    return _createClass(Tab, [{
      key: "show",
      value:
      // Public

      function show() {
        var _this44 = this;
        if (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && this._element.classList.contains(CLASS_NAME_ACTIVE)) {
          return;
        }
        var previous;
        var target = getElementFromSelector(this._element);
        var listElement = this._element.closest(SELECTOR_NAV_LIST_GROUP);
        if (listElement) {
          var itemSelector = listElement.nodeName === "UL" || listElement.nodeName === "OL" ? SELECTOR_ACTIVE_UL : SELECTOR_ACTIVE;
          previous = SelectorEngine.find(itemSelector, listElement);
          previous = previous[previous.length - 1];
        }
        var hideEvent = previous ? EventHandler.trigger(previous, EVENT_HIDE$1, {
          relatedTarget: this._element
        }) : null;
        var showEvent = EventHandler.trigger(this._element, EVENT_SHOW$1, {
          relatedTarget: previous
        });
        if (showEvent.defaultPrevented || hideEvent !== null && hideEvent.defaultPrevented) {
          return;
        }
        this._activate(this._element, listElement);
        var complete = function complete() {
          EventHandler.trigger(previous, EVENT_HIDDEN$1, {
            relatedTarget: _this44._element
          });
          EventHandler.trigger(_this44._element, EVENT_SHOWN$1, {
            relatedTarget: previous
          });
        };
        if (target) {
          this._activate(target, target.parentNode, complete);
        } else {
          complete();
        }
      } // Private
    }, {
      key: "_activate",
      value: function _activate(element, container, callback) {
        var _this45 = this;
        var activeElements = container && (container.nodeName === "UL" || container.nodeName === "OL") ? SelectorEngine.find(SELECTOR_ACTIVE_UL, container) : SelectorEngine.children(container, SELECTOR_ACTIVE);
        var active = activeElements[0];
        var isTransitioning = callback && active && active.classList.contains(CLASS_NAME_FADE$1);
        var complete = function complete() {
          return _this45._transitionComplete(element, active, callback);
        };
        if (active && isTransitioning) {
          active.classList.remove(CLASS_NAME_SHOW$1);
          this._queueCallback(complete, element, true);
        } else {
          complete();
        }
      }
    }, {
      key: "_transitionComplete",
      value: function _transitionComplete(element, active, callback) {
        if (active) {
          active.classList.remove(CLASS_NAME_ACTIVE);
          var dropdownChild = SelectorEngine.findOne(SELECTOR_DROPDOWN_ACTIVE_CHILD, active.parentNode);
          if (dropdownChild) {
            dropdownChild.classList.remove(CLASS_NAME_ACTIVE);
          }
          if (active.getAttribute("role") === "tab") {
            active.setAttribute("aria-selected", false);
          }
        }
        element.classList.add(CLASS_NAME_ACTIVE);
        if (element.getAttribute("role") === "tab") {
          element.setAttribute("aria-selected", true);
        }
        reflow(element);
        if (element.classList.contains(CLASS_NAME_FADE$1)) {
          element.classList.add(CLASS_NAME_SHOW$1);
        }
        var parent = element.parentNode;
        if (parent && parent.nodeName === "LI") {
          parent = parent.parentNode;
        }
        if (parent && parent.classList.contains(CLASS_NAME_DROPDOWN_MENU)) {
          var dropdownElement = element.closest(SELECTOR_DROPDOWN);
          if (dropdownElement) {
            SelectorEngine.find(SELECTOR_DROPDOWN_TOGGLE, dropdownElement).forEach(function (dropdown) {
              return dropdown.classList.add(CLASS_NAME_ACTIVE);
            });
          }
          element.setAttribute("aria-expanded", true);
        }
        if (callback) {
          callback();
        }
      } // Static
    }], [{
      key: "NAME",
      get:
      // Getters
      function get() {
        return NAME$1;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Tab.getOrCreateInstance(this);
          if (typeof config === "string") {
            if (typeof data[config] === "undefined") {
              throw new TypeError("No method named \"".concat(config, "\""));
            }
            data[config]();
          }
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */
  EventHandler.on(document, EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE, function (event) {
    if (["A", "AREA"].includes(this.tagName)) {
      event.preventDefault();
    }
    if (isDisabled(this)) {
      return;
    }
    var data = Tab.getOrCreateInstance(this);
    data.show();
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Tab to jQuery only if jQuery is present
   */

  defineJQueryPlugin(Tab);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): toast.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME = "toast";
  var DATA_KEY = "bs.toast";
  var EVENT_KEY = ".".concat(DATA_KEY);
  var EVENT_CLICK_DISMISS = "click.dismiss".concat(EVENT_KEY);
  var EVENT_MOUSEOVER = "mouseover".concat(EVENT_KEY);
  var EVENT_MOUSEOUT = "mouseout".concat(EVENT_KEY);
  var EVENT_FOCUSIN = "focusin".concat(EVENT_KEY);
  var EVENT_FOCUSOUT = "focusout".concat(EVENT_KEY);
  var EVENT_HIDE = "hide".concat(EVENT_KEY);
  var EVENT_HIDDEN = "hidden".concat(EVENT_KEY);
  var EVENT_SHOW = "show".concat(EVENT_KEY);
  var EVENT_SHOWN = "shown".concat(EVENT_KEY);
  var CLASS_NAME_FADE = "fade";
  var CLASS_NAME_HIDE = "hide";
  var CLASS_NAME_SHOW = "show";
  var CLASS_NAME_SHOWING = "showing";
  var DefaultType = {
    animation: "boolean",
    autohide: "boolean",
    delay: "number"
  };
  var Default = {
    animation: true,
    autohide: true,
    delay: 5000
  };
  var SELECTOR_DATA_DISMISS = '[data-bs-dismiss="toast"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */
  var Toast = /*#__PURE__*/function (_BaseComponent11) {
    function Toast(element, config) {
      var _this46;
      _classCallCheck(this, Toast);
      _this46 = _callSuper(this, Toast, [element]);
      _this46._config = _this46._getConfig(config);
      _this46._timeout = null;
      _this46._hasMouseInteraction = false;
      _this46._hasKeyboardInteraction = false;
      _this46._setListeners();
      return _this46;
    } // Getters
    _inherits(Toast, _BaseComponent11);
    return _createClass(Toast, [{
      key: "show",
      value:
      // Public

      function show() {
        var _this47 = this;
        var showEvent = EventHandler.trigger(this._element, EVENT_SHOW);
        if (showEvent.defaultPrevented) {
          return;
        }
        this._clearTimeout();
        if (this._config.animation) {
          this._element.classList.add(CLASS_NAME_FADE);
        }
        var complete = function complete() {
          _this47._element.classList.remove(CLASS_NAME_SHOWING);
          _this47._element.classList.add(CLASS_NAME_SHOW);
          EventHandler.trigger(_this47._element, EVENT_SHOWN);
          _this47._maybeScheduleHide();
        };
        this._element.classList.remove(CLASS_NAME_HIDE);
        reflow(this._element);
        this._element.classList.add(CLASS_NAME_SHOWING);
        this._queueCallback(complete, this._element, this._config.animation);
      }
    }, {
      key: "hide",
      value: function hide() {
        var _this48 = this;
        if (!this._element.classList.contains(CLASS_NAME_SHOW)) {
          return;
        }
        var hideEvent = EventHandler.trigger(this._element, EVENT_HIDE);
        if (hideEvent.defaultPrevented) {
          return;
        }
        var complete = function complete() {
          _this48._element.classList.add(CLASS_NAME_HIDE);
          EventHandler.trigger(_this48._element, EVENT_HIDDEN);
        };
        this._element.classList.remove(CLASS_NAME_SHOW);
        this._queueCallback(complete, this._element, this._config.animation);
      }
    }, {
      key: "dispose",
      value: function dispose() {
        this._clearTimeout();
        if (this._element.classList.contains(CLASS_NAME_SHOW)) {
          this._element.classList.remove(CLASS_NAME_SHOW);
        }
        _get(_getPrototypeOf(Toast.prototype), "dispose", this).call(this);
      } // Private
    }, {
      key: "_getConfig",
      value: function _getConfig(config) {
        config = _objectSpread(_objectSpread(_objectSpread({}, Default), Manipulator.getDataAttributes(this._element)), _typeof(config) === "object" && config ? config : {});
        typeCheckConfig(NAME, config, this.constructor.DefaultType);
        return config;
      }
    }, {
      key: "_maybeScheduleHide",
      value: function _maybeScheduleHide() {
        var _this49 = this;
        if (!this._config.autohide) {
          return;
        }
        if (this._hasMouseInteraction || this._hasKeyboardInteraction) {
          return;
        }
        this._timeout = setTimeout(function () {
          _this49.hide();
        }, this._config.delay);
      }
    }, {
      key: "_onInteraction",
      value: function _onInteraction(event, isInteracting) {
        switch (event.type) {
          case "mouseover":
          case "mouseout":
            this._hasMouseInteraction = isInteracting;
            break;
          case "focusin":
          case "focusout":
            this._hasKeyboardInteraction = isInteracting;
            break;
        }
        if (isInteracting) {
          this._clearTimeout();
          return;
        }
        var nextElement = event.relatedTarget;
        if (this._element === nextElement || this._element.contains(nextElement)) {
          return;
        }
        this._maybeScheduleHide();
      }
    }, {
      key: "_setListeners",
      value: function _setListeners() {
        var _this50 = this;
        EventHandler.on(this._element, EVENT_CLICK_DISMISS, SELECTOR_DATA_DISMISS, function () {
          return _this50.hide();
        });
        EventHandler.on(this._element, EVENT_MOUSEOVER, function (event) {
          return _this50._onInteraction(event, true);
        });
        EventHandler.on(this._element, EVENT_MOUSEOUT, function (event) {
          return _this50._onInteraction(event, false);
        });
        EventHandler.on(this._element, EVENT_FOCUSIN, function (event) {
          return _this50._onInteraction(event, true);
        });
        EventHandler.on(this._element, EVENT_FOCUSOUT, function (event) {
          return _this50._onInteraction(event, false);
        });
      }
    }, {
      key: "_clearTimeout",
      value: function _clearTimeout() {
        clearTimeout(this._timeout);
        this._timeout = null;
      } // Static
    }], [{
      key: "DefaultType",
      get: function get() {
        return DefaultType;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME;
      }
    }, {
      key: "jQueryInterface",
      value: function jQueryInterface(config) {
        return this.each(function () {
          var data = Toast.getOrCreateInstance(this, config);
          if (typeof config === "string") {
            if (typeof data[config] === "undefined") {
              throw new TypeError("No method named \"".concat(config, "\""));
            }
            data[config](this);
          }
        });
      }
    }]);
  }(BaseComponent);
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   * add .Toast to jQuery only if jQuery is present
   */
  defineJQueryPlugin(Toast);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.0.2): index.umd.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  var index_umd = {
    Alert: Alert,
    Button: Button,
    Carousel: Carousel,
    Collapse: Collapse,
    Dropdown: Dropdown,
    Modal: Modal,
    Offcanvas: Offcanvas,
    Popover: Popover,
    ScrollSpy: ScrollSpy,
    Tab: Tab,
    Toast: Toast,
    Tooltip: Tooltip
  };
  return index_umd;
});


window.Echo = new laravel_echo__WEBPACK_IMPORTED_MODULE_0__["default"]({
  broadcaster: larasocket_js__WEBPACK_IMPORTED_MODULE_1__["default"],
  token: "3649|7J3bEUpmBt6FP8zLzXHEMwnOkqQ176UX6nir1CQa"
});

/***/ }),

/***/ "./node_modules/larasocket-js/dist/channel/channel.js":
/*!************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/channel/channel.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.Channel = void 0;
/**
 * This class represents a basic channel.
 */
var Channel = /** @class */ (function () {
    function Channel() {
    }
    /**
     * Listen for a whisper event on the channel instance.
     */
    Channel.prototype.listenForWhisper = function (event, callback) {
        return this.listen('.client-' + event, callback);
    };
    /**
     * Listen for an event on the channel instance.
     */
    Channel.prototype.notification = function (callback) {
        return this.listen('.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', callback);
    };
    /**
     * Stop listening for a whispser event on the channel instance.
     */
    Channel.prototype.stopListeningForWhisper = function (event) {
        return this.stopListening('.client-' + event);
    };
    return Channel;
}());
exports.Channel = Channel;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/channel/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/larasocket-js/dist/channel/index.js ***!
  \**********************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    Object.defineProperty(o, k2, { enumerable: true, get: function() { return m[k]; } });
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !exports.hasOwnProperty(p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", ({ value: true }));
__exportStar(__webpack_require__(/*! ./channel */ "./node_modules/larasocket-js/dist/channel/channel.js"), exports);
__exportStar(__webpack_require__(/*! ./larasocket-channel */ "./node_modules/larasocket-js/dist/channel/larasocket-channel.js"), exports);
__exportStar(__webpack_require__(/*! ./larasocket-private-channel */ "./node_modules/larasocket-js/dist/channel/larasocket-private-channel.js"), exports);
__exportStar(__webpack_require__(/*! ./larasocket-presence-channel */ "./node_modules/larasocket-js/dist/channel/larasocket-presence-channel.js"), exports);


/***/ }),

/***/ "./node_modules/larasocket-js/dist/channel/larasocket-channel.js":
/*!***********************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/channel/larasocket-channel.js ***!
  \***********************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketChannel = void 0;
/**
 * This class represents a Socket.io channel.
 */
var channel_1 = __webpack_require__(/*! ./channel */ "./node_modules/larasocket-js/dist/channel/channel.js");
var util_1 = __webpack_require__(/*! ../util */ "./node_modules/larasocket-js/dist/util/index.js");
var LarasocketChannel = /** @class */ (function (_super) {
    __extends(LarasocketChannel, _super);
    /**
     * Create a new class instance.
     */
    function LarasocketChannel(socket, name, options) {
        var _this = _super.call(this) || this;
        /**
         * The event callbacks applied to the channel.
         */
        _this.events = {};
        _this.eventFormatter = new util_1.EventFormatter(options.namespace);
        _this.name = name;
        _this.socket = socket;
        _this.options = options;
        _this.subscribe();
        return _this;
    }
    /**
     * Subscribe to a Socket.io channel.
     */
    LarasocketChannel.prototype.subscribe = function () {
        this.socket.subscribe(this);
    };
    /**
     * Unsubscribe from channel and ubind event callbacks.
     */
    LarasocketChannel.prototype.unsubscribe = function () {
        this.unbind();
        this.socket.unsubscribe(this);
    };
    /**
     * Listen for an event on the channel instance.
     */
    LarasocketChannel.prototype.listen = function (event, callback) {
        this.on(event, callback);
        return this;
    };
    /**
     * Stop listening for an event on the channel instance.
     */
    LarasocketChannel.prototype.stopListening = function (event) {
        var name = this.eventFormatter.format(event);
        this.socket.removeListener(name);
        delete this.events[name];
        return this;
    };
    /**
     * Bind the channel's socket to an event and store the callback.
     */
    LarasocketChannel.prototype.on = function (event, callback) {
        this.socket.on(event, callback);
        this.bind(event, callback);
    };
    /**
     * Bind the channel's socket to an event and store the callback.
     */
    LarasocketChannel.prototype.bind = function (event, callback) {
        this.events[event] = this.events[event] || [];
        this.events[event].push(callback);
    };
    /**
     * Unbind the channel's socket from all stored event callbacks.
     */
    LarasocketChannel.prototype.unbind = function () {
        var _this = this;
        Object.keys(this.events).forEach(function (event) {
            _this.socket.removeListener(event);
            delete _this.events[event];
        });
    };
    return LarasocketChannel;
}(channel_1.Channel));
exports.LarasocketChannel = LarasocketChannel;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/channel/larasocket-presence-channel.js":
/*!********************************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/channel/larasocket-presence-channel.js ***!
  \********************************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketPresenceChannel = void 0;
var larasocket_private_channel_1 = __webpack_require__(/*! ./larasocket-private-channel */ "./node_modules/larasocket-js/dist/channel/larasocket-private-channel.js");
/**
 * This class represents a Socket.io presence channel.
 */
var LarasocketPresenceChannel = /** @class */ (function (_super) {
    __extends(LarasocketPresenceChannel, _super);
    function LarasocketPresenceChannel() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    /**
     * Register a callback to be called anytime the member list changes.
     */
    LarasocketPresenceChannel.prototype.here = function (callback) {
        this.on('.presence:subscribed', callback);
        return this;
    };
    /**
     * Listen for someone joining the channel.
     */
    LarasocketPresenceChannel.prototype.joining = function (callback) {
        this.on('.presence:joining', callback);
        return this;
    };
    /**
     * Listen for someone leaving the channel.
     */
    LarasocketPresenceChannel.prototype.leaving = function (callback) {
        this.on('.presence:leaving', callback);
        return this;
    };
    return LarasocketPresenceChannel;
}(larasocket_private_channel_1.LarasocketPrivateChannel));
exports.LarasocketPresenceChannel = LarasocketPresenceChannel;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/channel/larasocket-private-channel.js":
/*!*******************************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/channel/larasocket-private-channel.js ***!
  \*******************************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketPrivateChannel = void 0;
var larasocket_channel_1 = __webpack_require__(/*! ./larasocket-channel */ "./node_modules/larasocket-js/dist/channel/larasocket-channel.js");
var outgoing_message_1 = __webpack_require__(/*! ../util/outgoing-message */ "./node_modules/larasocket-js/dist/util/outgoing-message.js");
/**
 * This class represents a Socket.io presence channel.
 */
var LarasocketPrivateChannel = /** @class */ (function (_super) {
    __extends(LarasocketPrivateChannel, _super);
    function LarasocketPrivateChannel() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    /**
     * Trigger client event on the channel.
     */
    LarasocketPrivateChannel.prototype.whisper = function (eventName, data) {
        var message = this.socket.getSocketMessage(outgoing_message_1.OutgoingMessageType.WHISPER);
        message.channel = this;
        message.event = "client-" + eventName;
        message.payload = data;
        this.socket.send(message);
        return this;
    };
    return LarasocketPrivateChannel;
}(larasocket_channel_1.LarasocketChannel));
exports.LarasocketPrivateChannel = LarasocketPrivateChannel;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/connector/connector.js":
/*!****************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/connector/connector.js ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.Connector = void 0;
var Connector = /** @class */ (function () {
    /**
     * Create a new class instance.
     */
    function Connector(options) {
        /**
         * Default connector options.
         */
        this._defaultOptions = {
            auth: {
                headers: {},
            },
            authEndpoint: '/broadcasting/auth',
            broadcaster: 'pusher',
            csrfToken: null,
            host: null,
            key: null,
            namespace: 'App.Events',
        };
        this.setOptions(options);
        this.connect();
    }
    /**
     * Merge the custom options with the defaults.
     */
    Connector.prototype.setOptions = function (options) {
        this.options = Object.assign(this._defaultOptions, options);
        if (this.csrfToken()) {
            this.options.auth.headers['X-CSRF-TOKEN'] = this.csrfToken();
        }
        return options;
    };
    /**
     * Extract the CSRF token from the page.
     */
    Connector.prototype.csrfToken = function () {
        var selector;
        // @ts-ignore
        if (typeof window !== 'undefined' && window.Laravel && window.Laravel.csrfToken) {
            // @ts-ignore
            return window.Laravel.csrfToken;
        }
        else if (this.options.csrfToken) {
            return this.options.csrfToken;
        }
        else if (typeof document !== 'undefined' && typeof document.querySelector === 'function') {
            selector = document.querySelector('meta[name="csrf-token"]');
            if (selector) {
                return selector.getAttribute('content');
            }
        }
        return null;
    };
    return Connector;
}());
exports.Connector = Connector;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/connector/index.js":
/*!************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/connector/index.js ***!
  \************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    Object.defineProperty(o, k2, { enumerable: true, get: function() { return m[k]; } });
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !exports.hasOwnProperty(p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", ({ value: true }));
__exportStar(__webpack_require__(/*! ./connector */ "./node_modules/larasocket-js/dist/connector/connector.js"), exports);
__exportStar(__webpack_require__(/*! ./larasocket-connector */ "./node_modules/larasocket-js/dist/connector/larasocket-connector.js"), exports);


/***/ }),

/***/ "./node_modules/larasocket-js/dist/connector/larasocket-connector.js":
/*!***************************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/connector/larasocket-connector.js ***!
  \***************************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketConnector = void 0;
var channel_1 = __webpack_require__(/*! ../channel */ "./node_modules/larasocket-js/dist/channel/index.js");
var connector_1 = __webpack_require__(/*! ./connector */ "./node_modules/larasocket-js/dist/connector/connector.js");
var util_1 = __webpack_require__(/*! ../util */ "./node_modules/larasocket-js/dist/util/index.js");
/**
 * This class creates a connector to a Socket.io server.
 */
var LarasocketConnector = /** @class */ (function (_super) {
    __extends(LarasocketConnector, _super);
    function LarasocketConnector() {
        var _this = _super !== null && _super.apply(this, arguments) || this;
        /**
         * All of the subscribed channel names.
         */
        _this.channels = {};
        return _this;
    }
    /**
     * Create a fresh Socket.io connection.
     */
    LarasocketConnector.prototype.connect = function () {
        this.websocket = new util_1.LarasocketManager(this.options);
    };
    /**
     * Listen for an event on a channel instance.
     */
    LarasocketConnector.prototype.listen = function (name, event, callback) {
        return this.channel(name).listen(event, callback);
    };
    /**
     * Get a channel instance by name.
     */
    LarasocketConnector.prototype.channel = function (name) {
        if (!this.channels[name]) {
            this.channels[name] = new channel_1.LarasocketChannel(this.websocket, name, this.options);
        }
        return this.channels[name];
    };
    /**
     * Get a private channel instance by name.
     */
    LarasocketConnector.prototype.privateChannel = function (name) {
        if (!this.channels['private-' + name]) {
            this.channels['private-' + name] = new channel_1.LarasocketPrivateChannel(this.websocket, 'private-' + name, this.options);
        }
        return this.channels['private-' + name];
    };
    /**
     * Get a presence channel instance by name.
     */
    LarasocketConnector.prototype.presenceChannel = function (name) {
        if (!this.channels['presence-' + name]) {
            this.channels['presence-' + name] = new channel_1.LarasocketPresenceChannel(this.websocket, 'presence-' + name, this.options);
        }
        return this.channels['presence-' + name];
    };
    /**
     * Leave the given channel, as well as its private and presence variants.
     */
    LarasocketConnector.prototype.leave = function (name) {
        var _this = this;
        var channels = [name, 'private-' + name, 'presence-' + name];
        channels.forEach(function (_name) {
            _this.leaveChannel(_name);
        });
    };
    /**
     * Leave the given channel.
     */
    LarasocketConnector.prototype.leaveChannel = function (name) {
        if (this.channels[name]) {
            this.channels[name].unsubscribe();
            delete this.channels[name];
        }
    };
    /**
     * Get the socket ID for the connection.
     */
    LarasocketConnector.prototype.socketId = function () {
        return this.websocket.socketId();
    };
    /**
     * Disconnect Socketio connection.
     */
    LarasocketConnector.prototype.disconnect = function () {
        this.websocket.disconnect();
    };
    return LarasocketConnector;
}(connector_1.Connector));
exports.LarasocketConnector = LarasocketConnector;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/index.js":
/*!**************************************************!*\
  !*** ./node_modules/larasocket-js/dist/index.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
var connector_1 = __webpack_require__(/*! ./connector */ "./node_modules/larasocket-js/dist/connector/index.js");
exports["default"] = connector_1.LarasocketConnector;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/event-formatter.js":
/*!*****************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/event-formatter.js ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.EventFormatter = void 0;
/**
 * Event name formatter
 */
var EventFormatter = /** @class */ (function () {
    /**
     * Create a new class instance.
     */
    function EventFormatter(namespace) {
        this.namespace = namespace;
    }
    /**
     * Format the given event name.
     */
    EventFormatter.prototype.format = function (event) {
        if (event.charAt(0) === '.' || event.charAt(0) === '\\') {
            return event.substr(1);
        }
        else if (this.namespace) {
            event = this.namespace + '.' + event;
        }
        return event.replace(/\./g, '\\');
    };
    /**
     * Set the event namespace.
     */
    EventFormatter.prototype.setNamespace = function (value) {
        this.namespace = value;
    };
    return EventFormatter;
}());
exports.EventFormatter = EventFormatter;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/incoming-message.js":
/*!******************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/incoming-message.js ***!
  \******************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.IncomingMessage = exports.IncomingMessageType = void 0;
var message_1 = __webpack_require__(/*! ./message */ "./node_modules/larasocket-js/dist/util/message.js");
var IncomingMessageType;
(function (IncomingMessageType) {
    IncomingMessageType["LINKED"] = "linked";
})(IncomingMessageType = exports.IncomingMessageType || (exports.IncomingMessageType = {}));
/**
 * SocketMessage
 */
var IncomingMessage = /** @class */ (function (_super) {
    __extends(IncomingMessage, _super);
    /**
     * Create a new class instance.
     */
    function IncomingMessage(rawJson) {
        var _this = _super.call(this) || this;
        _this.action = rawJson.action;
        _this.event = rawJson.event;
        _this.payload = rawJson.payload;
        _this.connectionId = rawJson.connection_id;
        return _this;
    }
    return IncomingMessage;
}(message_1.Message));
exports.IncomingMessage = IncomingMessage;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/index.js":
/*!*******************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/index.js ***!
  \*******************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    Object.defineProperty(o, k2, { enumerable: true, get: function() { return m[k]; } });
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !exports.hasOwnProperty(p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", ({ value: true }));
__exportStar(__webpack_require__(/*! ./event-formatter */ "./node_modules/larasocket-js/dist/util/event-formatter.js"), exports);
__exportStar(__webpack_require__(/*! ./larasocket-manager */ "./node_modules/larasocket-js/dist/util/larasocket-manager.js"), exports);


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/larasocket-manager.js":
/*!********************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/larasocket-manager.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketManager = void 0;
var channel_1 = __webpack_require__(/*! ../channel */ "./node_modules/larasocket-js/dist/channel/index.js");
var event_formatter_1 = __webpack_require__(/*! ./event-formatter */ "./node_modules/larasocket-js/dist/util/event-formatter.js");
var outgoing_message_1 = __webpack_require__(/*! ./outgoing-message */ "./node_modules/larasocket-js/dist/util/outgoing-message.js");
var larasocket_websocket_1 = __webpack_require__(/*! ./larasocket-websocket */ "./node_modules/larasocket-js/dist/util/larasocket-websocket.js");
/**
 * Event name formatter
 */
var LarasocketManager = /** @class */ (function () {
    /**
     * Create a new class instance.
     */
    function LarasocketManager(options) {
        var _this = this;
        /**
         *
         */
        this.subscribedChannels = {};
        this.options = options;
        this.listeners = {};
        this.eventFormatter = new event_formatter_1.EventFormatter(options.namespace);
        this.websocketInstance = new larasocket_websocket_1.LarasocketWebsocket(options, function (d) { return _this.route(d); }, function () { return _this.reconnect(); });
    }
    /**
     *
     */
    LarasocketManager.prototype.disconnect = function () {
        this.websocketInstance.close();
    };
    /**
     * Triggers subscription to each previously subscribed channel.
     */
    LarasocketManager.prototype.reconnect = function () {
        for (var _i = 0, _a = Object.values(this.subscribedChannels); _i < _a.length; _i++) {
            var channel = _a[_i];
            this.subscribe(channel);
        }
    };
    /**
     * Subscribe to a given channel.
     *
     * @param channel
     */
    LarasocketManager.prototype.subscribe = function (channel) {
        var _this = this;
        this.authenticate(channel).then(function (response) {
            _this.subscribedChannels[channel.name] = channel; // track so we can reconnect if needed.
            var subscribeMessage = _this.getSocketMessage(outgoing_message_1.OutgoingMessageType.SUBSCRIBE);
            subscribeMessage.payload = response;
            subscribeMessage.channel = channel;
            _this.send(subscribeMessage);
        });
    };
    /**
     * Unsubscribe to a given channel.
     *
     * @param channel
     */
    LarasocketManager.prototype.unsubscribe = function (channel) {
        delete this.subscribedChannels[channel.name]; // track so we can reconnect if needed.
        var unsubscribeMessage = this.getSocketMessage(outgoing_message_1.OutgoingMessageType.UNSUBSCRIBE);
        unsubscribeMessage.channel = channel;
        this.send(unsubscribeMessage);
    };
    /**
     * Tie an event listener to an action.
     *
     * @param name
     * @param listener
     */
    LarasocketManager.prototype.on = function (name, listener) {
        var formattedEventName = this.eventFormatter.format(name);
        this.listeners[formattedEventName] = listener;
    };
    /**
     * Tie an event listener to an action.
     *
     * @param name
     */
    LarasocketManager.prototype.removeListener = function (name) {
        var formattedEventName = this.eventFormatter.format(name);
        delete this.listeners[formattedEventName];
    };
    /**
     *
     * @param type
     */
    LarasocketManager.prototype.getSocketMessage = function (type) {
        return new outgoing_message_1.OutgoingMessage(this.options.token, type);
    };
    /**
     *
     * @param message
     */
    LarasocketManager.prototype.send = function (message) {
        this.websocketInstance.send(message);
    };
    /**
     *
     */
    LarasocketManager.prototype.socketId = function () {
        return this.websocketInstance.connectionId;
    };
    /**
     * Routes an incoming massage for processing.
     *
     * @param message
     */
    LarasocketManager.prototype.route = function (message) {
        if (message.event) {
            var formattedEventName = this.eventFormatter.format(message.event);
            if (this.listeners[formattedEventName]) {
                try {
                    var payloadForListeners = message.payload;
                    if (typeof payloadForListeners === 'string') {
                        payloadForListeners = JSON.parse(payloadForListeners);
                    }
                    // convert payload into an object
                    this.listeners[formattedEventName](payloadForListeners);
                }
                catch (e) {
                    throw new Error('Failed to parse incoming message');
                }
            }
        }
    };
    /**
     * Authenticate a channel subscription.
     *
     * @param channel
     */
    LarasocketManager.prototype.authenticate = function (channel) {
        if (channel instanceof channel_1.LarasocketPresenceChannel || channel instanceof channel_1.LarasocketPrivateChannel) {
            return this.websocketInstance.getAuthNetworkPromise(channel);
        }
        return Promise.resolve(); // dummy Promise. No auth for public channels.
    };
    return LarasocketManager;
}());
exports.LarasocketManager = LarasocketManager;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/larasocket-websocket.js":
/*!**********************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/larasocket-websocket.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LarasocketWebsocket = void 0;
var incoming_message_1 = __webpack_require__(/*! ./incoming-message */ "./node_modules/larasocket-js/dist/util/incoming-message.js");
var link_message_1 = __webpack_require__(/*! ./link-message */ "./node_modules/larasocket-js/dist/util/link-message.js");
/**
 * Event name formatter
 */
var LarasocketWebsocket = /** @class */ (function () {
    /**
     * Create a new class instance.
     */
    function LarasocketWebsocket(options, onMessageListener, onReconnectListener) {
        /**
         *
         */
        this.timeout = 500;
        this.options = options;
        this.csrf = options.auth.headers['X-CSRF-TOKEN'];
        this.uuid = this.uuidv4();
        this.onMessageListener = onMessageListener;
        this.reconnectListener = onReconnectListener;
        this.websocketUrl = options.wsHost || 'ws.larasocket.com';
        this.token = encodeURIComponent(this.options.token);
    }
    /**
     *
     */
    LarasocketWebsocket.prototype.close = function () {
        if (this.websocketInstance) {
            this.websocketInstance.close();
        }
    };
    /**
     * Send string data over the websocket connection.
     *
     * @param message
     */
    LarasocketWebsocket.prototype.send = function (message) {
        var _this = this;
        this.getWebsocketInstance().then(function (socket) {
            message.connectionId = _this.connectionId; // sometimes, we dont have connectionId information until this callback.
            socket.send(JSON.stringify(message.toNetworkJson()));
        });
    };
    /**
     *
     * @param channel
     */
    LarasocketWebsocket.prototype.getAuthNetworkPromise = function (channel) {
        var _this = this;
        return this.getWebsocketInstance().then(function (socket) {
            if (_this.options.authorizer) {
                var authorizer_1 = _this.options.authorizer(channel, _this.options);
                return new Promise(function (resolve, reject) {
                    authorizer_1.authorize(_this.connectionId, function (error, data) {
                        if (error) {
                            return reject(data);
                        }
                        return resolve(data);
                    });
                });
            }
            var networkAgent;
            if (typeof Vue === 'function' && Vue.http) {
                networkAgent = Vue.http;
            }
            if (typeof axios === 'function') {
                networkAgent = axios;
            }
            if (typeof jQuery === 'function') {
                networkAgent = jQuery;
            }
            if (networkAgent) {
                return networkAgent
                    .post(_this.options.authEndpoint, {
                    socket_id: _this.connectionId,
                    channel_name: channel.name,
                    _token: _this.csrf,
                })
                    .then(function (response) {
                    return response.data;
                });
            }
            else {
                return fetch(_this.options.authEndpoint, {
                    method: 'POST',
                    headers: {
                        Accept: 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        socket_id: _this.connectionId,
                        channel_name: channel.name,
                        _token: _this.csrf,
                    }),
                }).then(function (response) {
                    return response.json();
                });
            }
            throw new Error('Need either Vue.http, axios, jQuery, or fetch.');
        });
    };
    /**
     * Return a promise that will resolve the websocket instance.
     */
    LarasocketWebsocket.prototype.getWebsocketInstance = function () {
        if (this.websocketInstance) {
            return Promise.resolve(this.websocketInstance);
        }
        return this.connect();
    };
    /**
     * The connection is ready.
     */
    LarasocketWebsocket.prototype.websocketInstanceReady = function (socket) {
        this.websocketInstance = socket;
        this.websocketInitializationPromise = undefined;
    };
    /**
     * Reset and connect to the websocket.
     */
    LarasocketWebsocket.prototype.reconnect = function () {
        var _this = this;
        this.websocketInitializationPromise = undefined;
        this.websocketInstance = undefined;
        return this.connect().then(function (websocket) {
            _this.reconnectListener(_this);
            return websocket;
        });
    };
    /**
     * Initialize an websocket connection.
     */
    LarasocketWebsocket.prototype.connect = function () {
        var _this = this;
        if (this.websocketInitializationPromise) {
            return this.websocketInitializationPromise;
        }
        this.websocketInitializationPromise = new Promise(function (resolve, reject) {
            var socket = new WebSocket("wss://" + _this.websocketUrl + "?token=" + _this.token + "&uuid=" + _this.uuid);
            // Connection opened
            socket.onopen = function (e) { return _this.onOpen(socket, e); };
            socket.onclose = function (e) { return _this.onClose(e); };
            socket.onerror = function (e) { return _this.onError(e); };
            // Listen for messages
            socket.onmessage = function (event) {
                _this.onMessage(socket, resolve, reject, event);
            };
        });
        return this.websocketInitializationPromise;
    };
    /**
     * Websocket on open event.
     *
     * @param socket
     * @param event
     */
    LarasocketWebsocket.prototype.onOpen = function (socket, event) {
        if (this.options.debug) {
            // tslint:disable-next-line
            console.log("[LARASOCKET DEBUG]: onopen -> ", event);
        }
        // Warning: can't use this.send. we are still in the initialization process.
        socket.send(JSON.stringify(new link_message_1.LinkMessage(this.token, this.uuid).toNetworkJson()));
    };
    /**
     * Websocket on close event. Larasocket will attempt to reconnect.
     *
     * @param event
     */
    LarasocketWebsocket.prototype.onClose = function (event) {
        var _this = this;
        var timeout = this.getTimeout();
        if (this.options.debug) {
            // tslint:disable-next-line
            console.log("[LARASOCKET DEBUG]: onclose -> ", event);
            // tslint:disable-next-line
            console.log("Reconnecting in " + timeout / 1000 + "s");
        }
        if (this.currentTimeout) {
            clearTimeout(this.currentTimeout);
        }
        this.currentTimeout = setTimeout(function () { return _this.reconnect(); }, timeout);
    };
    /**
     * Websocket on error event. Larasocket will close the connection and reconnect.
     *
     * @param event
     */
    LarasocketWebsocket.prototype.onError = function (event) {
        if (this.options.debug) {
            // tslint:disable-next-line
            console.log("[LARASOCKET DEBUG]: onerror -> ", event);
            // tslint:disable-next-line
            console.log("Error encountered. Closing socket.");
        }
        this.close();
    };
    /**
     * Websocket on message event. Routed to the listener after the websocket connection can be linked to Larasocket backend.
     *
     * @param socket
     * @param resolve
     * @param reject
     * @param event
     */
    LarasocketWebsocket.prototype.onMessage = function (socket, resolve, reject, event) {
        if (this.options.debug) {
            // tslint:disable-next-line
            console.log("[LARASOCKET DEBUG]: onmessage -> ", event);
        }
        var rawMessage = event.data;
        try {
            var rawJson = JSON.parse(rawMessage);
            var message = new incoming_message_1.IncomingMessage(rawJson);
            if (message.action === incoming_message_1.IncomingMessageType.LINKED) {
                this.connectionId = message.connectionId;
                this.websocketInstanceReady(socket);
                resolve(socket);
            }
            else {
                this.onMessageListener(message);
            }
        }
        catch (e) {
            reject(e);
        }
    };
    /**
     * Gets the next timeout in milliseconds before the websocket connection should reconnect.
     */
    LarasocketWebsocket.prototype.getTimeout = function () {
        var nextTimeout = Math.min(this.timeout, 10000); // max 10s timeout.
        this.timeout *= 2; // timeout doubles each time.
        return nextTimeout;
    };
    /**
     * Used to link a socket connection to a db connection.
     */
    LarasocketWebsocket.prototype.uuidv4 = function () {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            // tslint:disable-next-line
            var r = (Math.random() * 16) | 0;
            // tslint:disable-next-line
            var v = c === 'x' ? r : (r & 0x3) | 0x8;
            return v.toString(16);
        });
    };
    return LarasocketWebsocket;
}());
exports.LarasocketWebsocket = LarasocketWebsocket;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/link-message.js":
/*!**************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/link-message.js ***!
  \**************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.LinkMessage = void 0;
var message_1 = __webpack_require__(/*! ./message */ "./node_modules/larasocket-js/dist/util/message.js");
/**
 * LinkMessage
 */
var LinkMessage = /** @class */ (function (_super) {
    __extends(LinkMessage, _super);
    /**
     * Create a new class instance.
     */
    function LinkMessage(token, uuid) {
        var _this = _super.call(this) || this;
        _this.token = token;
        _this.uuid = uuid;
        return _this;
    }
    /**
     *
     */
    LinkMessage.prototype.toNetworkJson = function () {
        return {
            action: 'link',
            token: this.token,
            uuid: this.uuid,
        };
    };
    return LinkMessage;
}(message_1.Message));
exports.LinkMessage = LinkMessage;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/message.js":
/*!*********************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/message.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.Message = void 0;
/**
 * SocketMessage
 */
var Message = /** @class */ (function () {
    function Message() {
    }
    return Message;
}());
exports.Message = Message;


/***/ }),

/***/ "./node_modules/larasocket-js/dist/util/outgoing-message.js":
/*!******************************************************************!*\
  !*** ./node_modules/larasocket-js/dist/util/outgoing-message.js ***!
  \******************************************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.OutgoingMessage = exports.OutgoingMessageType = void 0;
var message_1 = __webpack_require__(/*! ./message */ "./node_modules/larasocket-js/dist/util/message.js");
var OutgoingMessageType;
(function (OutgoingMessageType) {
    OutgoingMessageType["LINK_CONNECTION"] = "link";
    OutgoingMessageType["SUBSCRIBE"] = "subscribe";
    OutgoingMessageType["UNSUBSCRIBE"] = "unsubscribe";
    OutgoingMessageType["WHISPER"] = "whisper";
    OutgoingMessageType["BROADCAST"] = "broadcast";
})(OutgoingMessageType = exports.OutgoingMessageType || (exports.OutgoingMessageType = {}));
/**
 * OutgoingMessage
 */
var OutgoingMessage = /** @class */ (function (_super) {
    __extends(OutgoingMessage, _super);
    /**
     * Create a new class instance.
     */
    function OutgoingMessage(token, action) {
        var _this = _super.call(this) || this;
        _this.token = token;
        _this.action = action;
        return _this;
        // this.connectionId = connectionId;
    }
    /**
     *
     */
    OutgoingMessage.prototype.toNetworkJson = function () {
        var _a;
        return {
            event: this.event,
            token: this.token,
            connection_id: this.connectionId,
            action: this.action,
            payload: this.payload,
            channel: (_a = this.channel) === null || _a === void 0 ? void 0 : _a.name,
        };
    };
    return OutgoingMessage;
}(message_1.Message));
exports.OutgoingMessage = OutgoingMessage;


/***/ }),

/***/ "./node_modules/laravel-echo/dist/echo.js":
/*!************************************************!*\
  !*** ./node_modules/laravel-echo/dist/echo.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Channel: () => (/* binding */ Channel),
/* harmony export */   Connector: () => (/* binding */ Connector),
/* harmony export */   EventFormatter: () => (/* binding */ EventFormatter),
/* harmony export */   "default": () => (/* binding */ Echo)
/* harmony export */ });
function _typeof(obj) {
  "@babel/helpers - typeof";

  return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) {
    return typeof obj;
  } : function (obj) {
    return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
  }, _typeof(obj);
}

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  Object.defineProperty(Constructor, "prototype", {
    writable: false
  });
  return Constructor;
}

function _extends() {
  _extends = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];

      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }

    return target;
  };

  return _extends.apply(this, arguments);
}

function _inherits(subClass, superClass) {
  if (typeof superClass !== "function" && superClass !== null) {
    throw new TypeError("Super expression must either be null or a function");
  }

  subClass.prototype = Object.create(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      writable: true,
      configurable: true
    }
  });
  Object.defineProperty(subClass, "prototype", {
    writable: false
  });
  if (superClass) _setPrototypeOf(subClass, superClass);
}

function _getPrototypeOf(o) {
  _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) {
    return o.__proto__ || Object.getPrototypeOf(o);
  };
  return _getPrototypeOf(o);
}

function _setPrototypeOf(o, p) {
  _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) {
    o.__proto__ = p;
    return o;
  };

  return _setPrototypeOf(o, p);
}

function _isNativeReflectConstruct() {
  if (typeof Reflect === "undefined" || !Reflect.construct) return false;
  if (Reflect.construct.sham) return false;
  if (typeof Proxy === "function") return true;

  try {
    Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {}));
    return true;
  } catch (e) {
    return false;
  }
}

function _assertThisInitialized(self) {
  if (self === void 0) {
    throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
  }

  return self;
}

function _possibleConstructorReturn(self, call) {
  if (call && (typeof call === "object" || typeof call === "function")) {
    return call;
  } else if (call !== void 0) {
    throw new TypeError("Derived constructors may only return object or undefined");
  }

  return _assertThisInitialized(self);
}

function _createSuper(Derived) {
  var hasNativeReflectConstruct = _isNativeReflectConstruct();

  return function _createSuperInternal() {
    var Super = _getPrototypeOf(Derived),
        result;

    if (hasNativeReflectConstruct) {
      var NewTarget = _getPrototypeOf(this).constructor;

      result = Reflect.construct(Super, arguments, NewTarget);
    } else {
      result = Super.apply(this, arguments);
    }

    return _possibleConstructorReturn(this, result);
  };
}

/**
 * This class represents a basic channel.
 */
var Channel = /*#__PURE__*/function () {
  function Channel() {
    _classCallCheck(this, Channel);
  }

  _createClass(Channel, [{
    key: "listenForWhisper",
    value:
    /**
     * Listen for a whisper event on the channel instance.
     */
    function listenForWhisper(event, callback) {
      return this.listen('.client-' + event, callback);
    }
    /**
     * Listen for an event on the channel instance.
     */

  }, {
    key: "notification",
    value: function notification(callback) {
      return this.listen('.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', callback);
    }
    /**
     * Stop listening for a whisper event on the channel instance.
     */

  }, {
    key: "stopListeningForWhisper",
    value: function stopListeningForWhisper(event, callback) {
      return this.stopListening('.client-' + event, callback);
    }
  }]);

  return Channel;
}();

/**
 * Event name formatter
 */
var EventFormatter = /*#__PURE__*/function () {
  /**
   * Create a new class instance.
   */
  function EventFormatter(namespace) {
    _classCallCheck(this, EventFormatter);

    this.namespace = namespace; //
  }
  /**
   * Format the given event name.
   */


  _createClass(EventFormatter, [{
    key: "format",
    value: function format(event) {
      if (['.', '\\'].includes(event.charAt(0))) {
        return event.substring(1);
      } else if (this.namespace) {
        event = this.namespace + '.' + event;
      }

      return event.replace(/\./g, '\\');
    }
    /**
     * Set the event namespace.
     */

  }, {
    key: "setNamespace",
    value: function setNamespace(value) {
      this.namespace = value;
    }
  }]);

  return EventFormatter;
}();

/**
 * This class represents a Pusher channel.
 */

var PusherChannel = /*#__PURE__*/function (_Channel) {
  _inherits(PusherChannel, _Channel);

  var _super = _createSuper(PusherChannel);

  /**
   * Create a new class instance.
   */
  function PusherChannel(pusher, name, options) {
    var _this;

    _classCallCheck(this, PusherChannel);

    _this = _super.call(this);
    _this.name = name;
    _this.pusher = pusher;
    _this.options = options;
    _this.eventFormatter = new EventFormatter(_this.options.namespace);

    _this.subscribe();

    return _this;
  }
  /**
   * Subscribe to a Pusher channel.
   */


  _createClass(PusherChannel, [{
    key: "subscribe",
    value: function subscribe() {
      this.subscription = this.pusher.subscribe(this.name);
    }
    /**
     * Unsubscribe from a Pusher channel.
     */

  }, {
    key: "unsubscribe",
    value: function unsubscribe() {
      this.pusher.unsubscribe(this.name);
    }
    /**
     * Listen for an event on the channel instance.
     */

  }, {
    key: "listen",
    value: function listen(event, callback) {
      this.on(this.eventFormatter.format(event), callback);
      return this;
    }
    /**
     * Listen for all events on the channel instance.
     */

  }, {
    key: "listenToAll",
    value: function listenToAll(callback) {
      var _this2 = this;

      this.subscription.bind_global(function (event, data) {
        if (event.startsWith('pusher:')) {
          return;
        }

        var namespace = _this2.options.namespace.replace(/\./g, '\\');

        var formattedEvent = event.startsWith(namespace) ? event.substring(namespace.length + 1) : '.' + event;
        callback(formattedEvent, data);
      });
      return this;
    }
    /**
     * Stop listening for an event on the channel instance.
     */

  }, {
    key: "stopListening",
    value: function stopListening(event, callback) {
      if (callback) {
        this.subscription.unbind(this.eventFormatter.format(event), callback);
      } else {
        this.subscription.unbind(this.eventFormatter.format(event));
      }

      return this;
    }
    /**
     * Stop listening for all events on the channel instance.
     */

  }, {
    key: "stopListeningToAll",
    value: function stopListeningToAll(callback) {
      if (callback) {
        this.subscription.unbind_global(callback);
      } else {
        this.subscription.unbind_global();
      }

      return this;
    }
    /**
     * Register a callback to be called anytime a subscription succeeds.
     */

  }, {
    key: "subscribed",
    value: function subscribed(callback) {
      this.on('pusher:subscription_succeeded', function () {
        callback();
      });
      return this;
    }
    /**
     * Register a callback to be called anytime a subscription error occurs.
     */

  }, {
    key: "error",
    value: function error(callback) {
      this.on('pusher:subscription_error', function (status) {
        callback(status);
      });
      return this;
    }
    /**
     * Bind a channel to an event.
     */

  }, {
    key: "on",
    value: function on(event, callback) {
      this.subscription.bind(event, callback);
      return this;
    }
  }]);

  return PusherChannel;
}(Channel);

/**
 * This class represents a Pusher private channel.
 */

var PusherPrivateChannel = /*#__PURE__*/function (_PusherChannel) {
  _inherits(PusherPrivateChannel, _PusherChannel);

  var _super = _createSuper(PusherPrivateChannel);

  function PusherPrivateChannel() {
    _classCallCheck(this, PusherPrivateChannel);

    return _super.apply(this, arguments);
  }

  _createClass(PusherPrivateChannel, [{
    key: "whisper",
    value:
    /**
     * Send a whisper event to other clients in the channel.
     */
    function whisper(eventName, data) {
      this.pusher.channels.channels[this.name].trigger("client-".concat(eventName), data);
      return this;
    }
  }]);

  return PusherPrivateChannel;
}(PusherChannel);

/**
 * This class represents a Pusher private channel.
 */

var PusherEncryptedPrivateChannel = /*#__PURE__*/function (_PusherChannel) {
  _inherits(PusherEncryptedPrivateChannel, _PusherChannel);

  var _super = _createSuper(PusherEncryptedPrivateChannel);

  function PusherEncryptedPrivateChannel() {
    _classCallCheck(this, PusherEncryptedPrivateChannel);

    return _super.apply(this, arguments);
  }

  _createClass(PusherEncryptedPrivateChannel, [{
    key: "whisper",
    value:
    /**
     * Send a whisper event to other clients in the channel.
     */
    function whisper(eventName, data) {
      this.pusher.channels.channels[this.name].trigger("client-".concat(eventName), data);
      return this;
    }
  }]);

  return PusherEncryptedPrivateChannel;
}(PusherChannel);

/**
 * This class represents a Pusher presence channel.
 */

var PusherPresenceChannel = /*#__PURE__*/function (_PusherChannel) {
  _inherits(PusherPresenceChannel, _PusherChannel);

  var _super = _createSuper(PusherPresenceChannel);

  function PusherPresenceChannel() {
    _classCallCheck(this, PusherPresenceChannel);

    return _super.apply(this, arguments);
  }

  _createClass(PusherPresenceChannel, [{
    key: "here",
    value:
    /**
     * Register a callback to be called anytime the member list changes.
     */
    function here(callback) {
      this.on('pusher:subscription_succeeded', function (data) {
        callback(Object.keys(data.members).map(function (k) {
          return data.members[k];
        }));
      });
      return this;
    }
    /**
     * Listen for someone joining the channel.
     */

  }, {
    key: "joining",
    value: function joining(callback) {
      this.on('pusher:member_added', function (member) {
        callback(member.info);
      });
      return this;
    }
    /**
     * Send a whisper event to other clients in the channel.
     */

  }, {
    key: "whisper",
    value: function whisper(eventName, data) {
      this.pusher.channels.channels[this.name].trigger("client-".concat(eventName), data);
      return this;
    }
    /**
     * Listen for someone leaving the channel.
     */

  }, {
    key: "leaving",
    value: function leaving(callback) {
      this.on('pusher:member_removed', function (member) {
        callback(member.info);
      });
      return this;
    }
  }]);

  return PusherPresenceChannel;
}(PusherChannel);

/**
 * This class represents a Socket.io channel.
 */

var SocketIoChannel = /*#__PURE__*/function (_Channel) {
  _inherits(SocketIoChannel, _Channel);

  var _super = _createSuper(SocketIoChannel);

  /**
   * Create a new class instance.
   */
  function SocketIoChannel(socket, name, options) {
    var _this;

    _classCallCheck(this, SocketIoChannel);

    _this = _super.call(this);
    /**
     * The event callbacks applied to the socket.
     */

    _this.events = {};
    /**
     * User supplied callbacks for events on this channel.
     */

    _this.listeners = {};
    _this.name = name;
    _this.socket = socket;
    _this.options = options;
    _this.eventFormatter = new EventFormatter(_this.options.namespace);

    _this.subscribe();

    return _this;
  }
  /**
   * Subscribe to a Socket.io channel.
   */


  _createClass(SocketIoChannel, [{
    key: "subscribe",
    value: function subscribe() {
      this.socket.emit('subscribe', {
        channel: this.name,
        auth: this.options.auth || {}
      });
    }
    /**
     * Unsubscribe from channel and ubind event callbacks.
     */

  }, {
    key: "unsubscribe",
    value: function unsubscribe() {
      this.unbind();
      this.socket.emit('unsubscribe', {
        channel: this.name,
        auth: this.options.auth || {}
      });
    }
    /**
     * Listen for an event on the channel instance.
     */

  }, {
    key: "listen",
    value: function listen(event, callback) {
      this.on(this.eventFormatter.format(event), callback);
      return this;
    }
    /**
     * Stop listening for an event on the channel instance.
     */

  }, {
    key: "stopListening",
    value: function stopListening(event, callback) {
      this.unbindEvent(this.eventFormatter.format(event), callback);
      return this;
    }
    /**
     * Register a callback to be called anytime a subscription succeeds.
     */

  }, {
    key: "subscribed",
    value: function subscribed(callback) {
      this.on('connect', function (socket) {
        callback(socket);
      });
      return this;
    }
    /**
     * Register a callback to be called anytime an error occurs.
     */

  }, {
    key: "error",
    value: function error(callback) {
      return this;
    }
    /**
     * Bind the channel's socket to an event and store the callback.
     */

  }, {
    key: "on",
    value: function on(event, callback) {
      var _this2 = this;

      this.listeners[event] = this.listeners[event] || [];

      if (!this.events[event]) {
        this.events[event] = function (channel, data) {
          if (_this2.name === channel && _this2.listeners[event]) {
            _this2.listeners[event].forEach(function (cb) {
              return cb(data);
            });
          }
        };

        this.socket.on(event, this.events[event]);
      }

      this.listeners[event].push(callback);
      return this;
    }
    /**
     * Unbind the channel's socket from all stored event callbacks.
     */

  }, {
    key: "unbind",
    value: function unbind() {
      var _this3 = this;

      Object.keys(this.events).forEach(function (event) {
        _this3.unbindEvent(event);
      });
    }
    /**
     * Unbind the listeners for the given event.
     */

  }, {
    key: "unbindEvent",
    value: function unbindEvent(event, callback) {
      this.listeners[event] = this.listeners[event] || [];

      if (callback) {
        this.listeners[event] = this.listeners[event].filter(function (cb) {
          return cb !== callback;
        });
      }

      if (!callback || this.listeners[event].length === 0) {
        if (this.events[event]) {
          this.socket.removeListener(event, this.events[event]);
          delete this.events[event];
        }

        delete this.listeners[event];
      }
    }
  }]);

  return SocketIoChannel;
}(Channel);

/**
 * This class represents a Socket.io private channel.
 */

var SocketIoPrivateChannel = /*#__PURE__*/function (_SocketIoChannel) {
  _inherits(SocketIoPrivateChannel, _SocketIoChannel);

  var _super = _createSuper(SocketIoPrivateChannel);

  function SocketIoPrivateChannel() {
    _classCallCheck(this, SocketIoPrivateChannel);

    return _super.apply(this, arguments);
  }

  _createClass(SocketIoPrivateChannel, [{
    key: "whisper",
    value:
    /**
     * Send a whisper event to other clients in the channel.
     */
    function whisper(eventName, data) {
      this.socket.emit('client event', {
        channel: this.name,
        event: "client-".concat(eventName),
        data: data
      });
      return this;
    }
  }]);

  return SocketIoPrivateChannel;
}(SocketIoChannel);

/**
 * This class represents a Socket.io presence channel.
 */

var SocketIoPresenceChannel = /*#__PURE__*/function (_SocketIoPrivateChann) {
  _inherits(SocketIoPresenceChannel, _SocketIoPrivateChann);

  var _super = _createSuper(SocketIoPresenceChannel);

  function SocketIoPresenceChannel() {
    _classCallCheck(this, SocketIoPresenceChannel);

    return _super.apply(this, arguments);
  }

  _createClass(SocketIoPresenceChannel, [{
    key: "here",
    value:
    /**
     * Register a callback to be called anytime the member list changes.
     */
    function here(callback) {
      this.on('presence:subscribed', function (members) {
        callback(members.map(function (m) {
          return m.user_info;
        }));
      });
      return this;
    }
    /**
     * Listen for someone joining the channel.
     */

  }, {
    key: "joining",
    value: function joining(callback) {
      this.on('presence:joining', function (member) {
        return callback(member.user_info);
      });
      return this;
    }
    /**
     * Send a whisper event to other clients in the channel.
     */

  }, {
    key: "whisper",
    value: function whisper(eventName, data) {
      this.socket.emit('client event', {
        channel: this.name,
        event: "client-".concat(eventName),
        data: data
      });
      return this;
    }
    /**
     * Listen for someone leaving the channel.
     */

  }, {
    key: "leaving",
    value: function leaving(callback) {
      this.on('presence:leaving', function (member) {
        return callback(member.user_info);
      });
      return this;
    }
  }]);

  return SocketIoPresenceChannel;
}(SocketIoPrivateChannel);

/**
 * This class represents a null channel.
 */

var NullChannel = /*#__PURE__*/function (_Channel) {
  _inherits(NullChannel, _Channel);

  var _super = _createSuper(NullChannel);

  function NullChannel() {
    _classCallCheck(this, NullChannel);

    return _super.apply(this, arguments);
  }

  _createClass(NullChannel, [{
    key: "subscribe",
    value:
    /**
     * Subscribe to a channel.
     */
    function subscribe() {//
    }
    /**
     * Unsubscribe from a channel.
     */

  }, {
    key: "unsubscribe",
    value: function unsubscribe() {//
    }
    /**
     * Listen for an event on the channel instance.
     */

  }, {
    key: "listen",
    value: function listen(event, callback) {
      return this;
    }
    /**
     * Listen for all events on the channel instance.
     */

  }, {
    key: "listenToAll",
    value: function listenToAll(callback) {
      return this;
    }
    /**
     * Stop listening for an event on the channel instance.
     */

  }, {
    key: "stopListening",
    value: function stopListening(event, callback) {
      return this;
    }
    /**
     * Register a callback to be called anytime a subscription succeeds.
     */

  }, {
    key: "subscribed",
    value: function subscribed(callback) {
      return this;
    }
    /**
     * Register a callback to be called anytime an error occurs.
     */

  }, {
    key: "error",
    value: function error(callback) {
      return this;
    }
    /**
     * Bind a channel to an event.
     */

  }, {
    key: "on",
    value: function on(event, callback) {
      return this;
    }
  }]);

  return NullChannel;
}(Channel);

/**
 * This class represents a null private channel.
 */

var NullPrivateChannel = /*#__PURE__*/function (_NullChannel) {
  _inherits(NullPrivateChannel, _NullChannel);

  var _super = _createSuper(NullPrivateChannel);

  function NullPrivateChannel() {
    _classCallCheck(this, NullPrivateChannel);

    return _super.apply(this, arguments);
  }

  _createClass(NullPrivateChannel, [{
    key: "whisper",
    value:
    /**
     * Send a whisper event to other clients in the channel.
     */
    function whisper(eventName, data) {
      return this;
    }
  }]);

  return NullPrivateChannel;
}(NullChannel);

/**
 * This class represents a null presence channel.
 */

var NullPresenceChannel = /*#__PURE__*/function (_NullChannel) {
  _inherits(NullPresenceChannel, _NullChannel);

  var _super = _createSuper(NullPresenceChannel);

  function NullPresenceChannel() {
    _classCallCheck(this, NullPresenceChannel);

    return _super.apply(this, arguments);
  }

  _createClass(NullPresenceChannel, [{
    key: "here",
    value:
    /**
     * Register a callback to be called anytime the member list changes.
     */
    function here(callback) {
      return this;
    }
    /**
     * Listen for someone joining the channel.
     */

  }, {
    key: "joining",
    value: function joining(callback) {
      return this;
    }
    /**
     * Send a whisper event to other clients in the channel.
     */

  }, {
    key: "whisper",
    value: function whisper(eventName, data) {
      return this;
    }
    /**
     * Listen for someone leaving the channel.
     */

  }, {
    key: "leaving",
    value: function leaving(callback) {
      return this;
    }
  }]);

  return NullPresenceChannel;
}(NullChannel);

var Connector = /*#__PURE__*/function () {
  /**
   * Create a new class instance.
   */
  function Connector(options) {
    _classCallCheck(this, Connector);

    /**
     * Default connector options.
     */
    this._defaultOptions = {
      auth: {
        headers: {}
      },
      authEndpoint: '/broadcasting/auth',
      userAuthentication: {
        endpoint: '/broadcasting/user-auth',
        headers: {}
      },
      broadcaster: 'pusher',
      csrfToken: null,
      bearerToken: null,
      host: null,
      key: null,
      namespace: 'App.Events'
    };
    this.setOptions(options);
    this.connect();
  }
  /**
   * Merge the custom options with the defaults.
   */


  _createClass(Connector, [{
    key: "setOptions",
    value: function setOptions(options) {
      this.options = _extends(this._defaultOptions, options);
      var token = this.csrfToken();

      if (token) {
        this.options.auth.headers['X-CSRF-TOKEN'] = token;
        this.options.userAuthentication.headers['X-CSRF-TOKEN'] = token;
      }

      token = this.options.bearerToken;

      if (token) {
        this.options.auth.headers['Authorization'] = 'Bearer ' + token;
        this.options.userAuthentication.headers['Authorization'] = 'Bearer ' + token;
      }

      return options;
    }
    /**
     * Extract the CSRF token from the page.
     */

  }, {
    key: "csrfToken",
    value: function csrfToken() {
      var selector;

      if (typeof window !== 'undefined' && window['Laravel'] && window['Laravel'].csrfToken) {
        return window['Laravel'].csrfToken;
      } else if (this.options.csrfToken) {
        return this.options.csrfToken;
      } else if (typeof document !== 'undefined' && typeof document.querySelector === 'function' && (selector = document.querySelector('meta[name="csrf-token"]'))) {
        return selector.getAttribute('content');
      }

      return null;
    }
  }]);

  return Connector;
}();

/**
 * This class creates a connector to Pusher.
 */

var PusherConnector = /*#__PURE__*/function (_Connector) {
  _inherits(PusherConnector, _Connector);

  var _super = _createSuper(PusherConnector);

  function PusherConnector() {
    var _this;

    _classCallCheck(this, PusherConnector);

    _this = _super.apply(this, arguments);
    /**
     * All of the subscribed channel names.
     */

    _this.channels = {};
    return _this;
  }
  /**
   * Create a fresh Pusher connection.
   */


  _createClass(PusherConnector, [{
    key: "connect",
    value: function connect() {
      if (typeof this.options.client !== 'undefined') {
        this.pusher = this.options.client;
      } else if (this.options.Pusher) {
        this.pusher = new this.options.Pusher(this.options.key, this.options);
      } else {
        this.pusher = new Pusher(this.options.key, this.options);
      }
    }
    /**
     * Sign in the user via Pusher user authentication (https://pusher.com/docs/channels/using_channels/user-authentication/).
     */

  }, {
    key: "signin",
    value: function signin() {
      this.pusher.signin();
    }
    /**
     * Listen for an event on a channel instance.
     */

  }, {
    key: "listen",
    value: function listen(name, event, callback) {
      return this.channel(name).listen(event, callback);
    }
    /**
     * Get a channel instance by name.
     */

  }, {
    key: "channel",
    value: function channel(name) {
      if (!this.channels[name]) {
        this.channels[name] = new PusherChannel(this.pusher, name, this.options);
      }

      return this.channels[name];
    }
    /**
     * Get a private channel instance by name.
     */

  }, {
    key: "privateChannel",
    value: function privateChannel(name) {
      if (!this.channels['private-' + name]) {
        this.channels['private-' + name] = new PusherPrivateChannel(this.pusher, 'private-' + name, this.options);
      }

      return this.channels['private-' + name];
    }
    /**
     * Get a private encrypted channel instance by name.
     */

  }, {
    key: "encryptedPrivateChannel",
    value: function encryptedPrivateChannel(name) {
      if (!this.channels['private-encrypted-' + name]) {
        this.channels['private-encrypted-' + name] = new PusherEncryptedPrivateChannel(this.pusher, 'private-encrypted-' + name, this.options);
      }

      return this.channels['private-encrypted-' + name];
    }
    /**
     * Get a presence channel instance by name.
     */

  }, {
    key: "presenceChannel",
    value: function presenceChannel(name) {
      if (!this.channels['presence-' + name]) {
        this.channels['presence-' + name] = new PusherPresenceChannel(this.pusher, 'presence-' + name, this.options);
      }

      return this.channels['presence-' + name];
    }
    /**
     * Leave the given channel, as well as its private and presence variants.
     */

  }, {
    key: "leave",
    value: function leave(name) {
      var _this2 = this;

      var channels = [name, 'private-' + name, 'private-encrypted-' + name, 'presence-' + name];
      channels.forEach(function (name, index) {
        _this2.leaveChannel(name);
      });
    }
    /**
     * Leave the given channel.
     */

  }, {
    key: "leaveChannel",
    value: function leaveChannel(name) {
      if (this.channels[name]) {
        this.channels[name].unsubscribe();
        delete this.channels[name];
      }
    }
    /**
     * Get the socket ID for the connection.
     */

  }, {
    key: "socketId",
    value: function socketId() {
      return this.pusher.connection.socket_id;
    }
    /**
     * Disconnect Pusher connection.
     */

  }, {
    key: "disconnect",
    value: function disconnect() {
      this.pusher.disconnect();
    }
  }]);

  return PusherConnector;
}(Connector);

/**
 * This class creates a connnector to a Socket.io server.
 */

var SocketIoConnector = /*#__PURE__*/function (_Connector) {
  _inherits(SocketIoConnector, _Connector);

  var _super = _createSuper(SocketIoConnector);

  function SocketIoConnector() {
    var _this;

    _classCallCheck(this, SocketIoConnector);

    _this = _super.apply(this, arguments);
    /**
     * All of the subscribed channel names.
     */

    _this.channels = {};
    return _this;
  }
  /**
   * Create a fresh Socket.io connection.
   */


  _createClass(SocketIoConnector, [{
    key: "connect",
    value: function connect() {
      var _this2 = this;

      var io = this.getSocketIO();
      this.socket = io(this.options.host, this.options);
      this.socket.on('reconnect', function () {
        Object.values(_this2.channels).forEach(function (channel) {
          channel.subscribe();
        });
      });
      return this.socket;
    }
    /**
     * Get socket.io module from global scope or options.
     */

  }, {
    key: "getSocketIO",
    value: function getSocketIO() {
      if (typeof this.options.client !== 'undefined') {
        return this.options.client;
      }

      if (typeof io !== 'undefined') {
        return io;
      }

      throw new Error('Socket.io client not found. Should be globally available or passed via options.client');
    }
    /**
     * Listen for an event on a channel instance.
     */

  }, {
    key: "listen",
    value: function listen(name, event, callback) {
      return this.channel(name).listen(event, callback);
    }
    /**
     * Get a channel instance by name.
     */

  }, {
    key: "channel",
    value: function channel(name) {
      if (!this.channels[name]) {
        this.channels[name] = new SocketIoChannel(this.socket, name, this.options);
      }

      return this.channels[name];
    }
    /**
     * Get a private channel instance by name.
     */

  }, {
    key: "privateChannel",
    value: function privateChannel(name) {
      if (!this.channels['private-' + name]) {
        this.channels['private-' + name] = new SocketIoPrivateChannel(this.socket, 'private-' + name, this.options);
      }

      return this.channels['private-' + name];
    }
    /**
     * Get a presence channel instance by name.
     */

  }, {
    key: "presenceChannel",
    value: function presenceChannel(name) {
      if (!this.channels['presence-' + name]) {
        this.channels['presence-' + name] = new SocketIoPresenceChannel(this.socket, 'presence-' + name, this.options);
      }

      return this.channels['presence-' + name];
    }
    /**
     * Leave the given channel, as well as its private and presence variants.
     */

  }, {
    key: "leave",
    value: function leave(name) {
      var _this3 = this;

      var channels = [name, 'private-' + name, 'presence-' + name];
      channels.forEach(function (name) {
        _this3.leaveChannel(name);
      });
    }
    /**
     * Leave the given channel.
     */

  }, {
    key: "leaveChannel",
    value: function leaveChannel(name) {
      if (this.channels[name]) {
        this.channels[name].unsubscribe();
        delete this.channels[name];
      }
    }
    /**
     * Get the socket ID for the connection.
     */

  }, {
    key: "socketId",
    value: function socketId() {
      return this.socket.id;
    }
    /**
     * Disconnect Socketio connection.
     */

  }, {
    key: "disconnect",
    value: function disconnect() {
      this.socket.disconnect();
    }
  }]);

  return SocketIoConnector;
}(Connector);

/**
 * This class creates a null connector.
 */

var NullConnector = /*#__PURE__*/function (_Connector) {
  _inherits(NullConnector, _Connector);

  var _super = _createSuper(NullConnector);

  function NullConnector() {
    var _this;

    _classCallCheck(this, NullConnector);

    _this = _super.apply(this, arguments);
    /**
     * All of the subscribed channel names.
     */

    _this.channels = {};
    return _this;
  }
  /**
   * Create a fresh connection.
   */


  _createClass(NullConnector, [{
    key: "connect",
    value: function connect() {//
    }
    /**
     * Listen for an event on a channel instance.
     */

  }, {
    key: "listen",
    value: function listen(name, event, callback) {
      return new NullChannel();
    }
    /**
     * Get a channel instance by name.
     */

  }, {
    key: "channel",
    value: function channel(name) {
      return new NullChannel();
    }
    /**
     * Get a private channel instance by name.
     */

  }, {
    key: "privateChannel",
    value: function privateChannel(name) {
      return new NullPrivateChannel();
    }
    /**
     * Get a private encrypted channel instance by name.
     */

  }, {
    key: "encryptedPrivateChannel",
    value: function encryptedPrivateChannel(name) {
      return new NullPrivateChannel();
    }
    /**
     * Get a presence channel instance by name.
     */

  }, {
    key: "presenceChannel",
    value: function presenceChannel(name) {
      return new NullPresenceChannel();
    }
    /**
     * Leave the given channel, as well as its private and presence variants.
     */

  }, {
    key: "leave",
    value: function leave(name) {//
    }
    /**
     * Leave the given channel.
     */

  }, {
    key: "leaveChannel",
    value: function leaveChannel(name) {//
    }
    /**
     * Get the socket ID for the connection.
     */

  }, {
    key: "socketId",
    value: function socketId() {
      return 'fake-socket-id';
    }
    /**
     * Disconnect the connection.
     */

  }, {
    key: "disconnect",
    value: function disconnect() {//
    }
  }]);

  return NullConnector;
}(Connector);

/**
 * This class is the primary API for interacting with broadcasting.
 */

var Echo = /*#__PURE__*/function () {
  /**
   * Create a new class instance.
   */
  function Echo(options) {
    _classCallCheck(this, Echo);

    this.options = options;
    this.connect();

    if (!this.options.withoutInterceptors) {
      this.registerInterceptors();
    }
  }
  /**
   * Get a channel instance by name.
   */


  _createClass(Echo, [{
    key: "channel",
    value: function channel(_channel) {
      return this.connector.channel(_channel);
    }
    /**
     * Create a new connection.
     */

  }, {
    key: "connect",
    value: function connect() {
      if (this.options.broadcaster == 'reverb') {
        this.connector = new PusherConnector(_extends(_extends({}, this.options), {
          cluster: ''
        }));
      } else if (this.options.broadcaster == 'pusher') {
        this.connector = new PusherConnector(this.options);
      } else if (this.options.broadcaster == 'socket.io') {
        this.connector = new SocketIoConnector(this.options);
      } else if (this.options.broadcaster == 'null') {
        this.connector = new NullConnector(this.options);
      } else if (typeof this.options.broadcaster == 'function') {
        this.connector = new this.options.broadcaster(this.options);
      } else {
        throw new Error("Broadcaster ".concat(_typeof(this.options.broadcaster), " ").concat(this.options.broadcaster, " is not supported."));
      }
    }
    /**
     * Disconnect from the Echo server.
     */

  }, {
    key: "disconnect",
    value: function disconnect() {
      this.connector.disconnect();
    }
    /**
     * Get a presence channel instance by name.
     */

  }, {
    key: "join",
    value: function join(channel) {
      return this.connector.presenceChannel(channel);
    }
    /**
     * Leave the given channel, as well as its private and presence variants.
     */

  }, {
    key: "leave",
    value: function leave(channel) {
      this.connector.leave(channel);
    }
    /**
     * Leave the given channel.
     */

  }, {
    key: "leaveChannel",
    value: function leaveChannel(channel) {
      this.connector.leaveChannel(channel);
    }
    /**
     * Leave all channels.
     */

  }, {
    key: "leaveAllChannels",
    value: function leaveAllChannels() {
      for (var channel in this.connector.channels) {
        this.leaveChannel(channel);
      }
    }
    /**
     * Listen for an event on a channel instance.
     */

  }, {
    key: "listen",
    value: function listen(channel, event, callback) {
      return this.connector.listen(channel, event, callback);
    }
    /**
     * Get a private channel instance by name.
     */

  }, {
    key: "private",
    value: function _private(channel) {
      return this.connector.privateChannel(channel);
    }
    /**
     * Get a private encrypted channel instance by name.
     */

  }, {
    key: "encryptedPrivate",
    value: function encryptedPrivate(channel) {
      return this.connector.encryptedPrivateChannel(channel);
    }
    /**
     * Get the Socket ID for the connection.
     */

  }, {
    key: "socketId",
    value: function socketId() {
      return this.connector.socketId();
    }
    /**
     * Register 3rd party request interceptiors. These are used to automatically
     * send a connections socket id to a Laravel app with a X-Socket-Id header.
     */

  }, {
    key: "registerInterceptors",
    value: function registerInterceptors() {
      if (typeof Vue === 'function' && Vue.http) {
        this.registerVueRequestInterceptor();
      }

      if (typeof axios === 'function') {
        this.registerAxiosRequestInterceptor();
      }

      if (typeof jQuery === 'function') {
        this.registerjQueryAjaxSetup();
      }

      if ((typeof Turbo === "undefined" ? "undefined" : _typeof(Turbo)) === 'object') {
        this.registerTurboRequestInterceptor();
      }
    }
    /**
     * Register a Vue HTTP interceptor to add the X-Socket-ID header.
     */

  }, {
    key: "registerVueRequestInterceptor",
    value: function registerVueRequestInterceptor() {
      var _this = this;

      Vue.http.interceptors.push(function (request, next) {
        if (_this.socketId()) {
          request.headers.set('X-Socket-ID', _this.socketId());
        }

        next();
      });
    }
    /**
     * Register an Axios HTTP interceptor to add the X-Socket-ID header.
     */

  }, {
    key: "registerAxiosRequestInterceptor",
    value: function registerAxiosRequestInterceptor() {
      var _this2 = this;

      axios.interceptors.request.use(function (config) {
        if (_this2.socketId()) {
          config.headers['X-Socket-Id'] = _this2.socketId();
        }

        return config;
      });
    }
    /**
     * Register jQuery AjaxPrefilter to add the X-Socket-ID header.
     */

  }, {
    key: "registerjQueryAjaxSetup",
    value: function registerjQueryAjaxSetup() {
      var _this3 = this;

      if (typeof jQuery.ajax != 'undefined') {
        jQuery.ajaxPrefilter(function (options, originalOptions, xhr) {
          if (_this3.socketId()) {
            xhr.setRequestHeader('X-Socket-Id', _this3.socketId());
          }
        });
      }
    }
    /**
     * Register the Turbo Request interceptor to add the X-Socket-ID header.
     */

  }, {
    key: "registerTurboRequestInterceptor",
    value: function registerTurboRequestInterceptor() {
      var _this4 = this;

      document.addEventListener('turbo:before-fetch-request', function (event) {
        event.detail.fetchOptions.headers['X-Socket-Id'] = _this4.socketId();
      });
    }
  }]);

  return Echo;
}();




/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/amd options */
/******/ 	(() => {
/******/ 		__webpack_require__.amdO = {};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/harmony module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.hmd = (module) => {
/******/ 			module = Object.create(module);
/******/ 			if (!module.children) module.children = [];
/******/ 			Object.defineProperty(module, 'exports', {
/******/ 				enumerable: true,
/******/ 				set: () => {
/******/ 					throw new Error('ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: ' + module.id);
/******/ 				}
/******/ 			});
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

})();

/******/ })()
;