/**
 * @file
 * Provides Intense loader.
 *
 * Intense video full screen requires Blazy 2.x.
 */

(function ($, Drupal, _doc) {

  'use strict';

  var _id = 'intense';
  var _idOnce = _id;
  var _intensed = 'intensed';
  var _gallery = _id + '-gallery';
  var _mounted = _gallery + '--on';
  var _elBase = '.' + _gallery;
  var _element = _elBase + ':not(.' + _mounted + ')';
  var _isIntensed = 'is-' + _intensed;
  var _elDefault = '[data-' + _gallery + ']';
  var _dataTrigger = '[data-' + _id + '-trigger]';
  var _elTrigger = _dataTrigger + ', .' + _id;
  var _elArrow = '.' + _intensed + '__arrow';
  var _elPrev = '.' + _intensed + '__prev';
  var _elNext = '.' + _intensed + '__next';
  var _visualyHidden = 'visually-hidden';
  var _isHidden = 'is-hidden';
  var _intenseTimer = 0;
  var _add = 'add';
  var _remove = 'remove';
  var _loading = _id + '--loading';
  var _idClose = _id + '-close';
  var _btnClose = '.blazybox__close';
  var _blazyBox = Drupal.blazyBox || {};

  /**
   * Intense utility functions.
   */
  Drupal.intense = {
    btnClose: null,
    $box: null,
    $blazyBox: null,
    $gallery: null,
    $prev: null,
    $next: null,
    $triggers: [],
    index: 0,
    count: 0,

    prepare: function () {
      var me = this;
      var body = _doc.body;
      var arrow = $.find(body, _elArrow);

      if (me.count > 1 && !$.isElm(arrow)) {
        $.append(body, Drupal.theme(_id));
      }

      me.$prev = me.$prev || $.find(body, _elPrev);
      me.$next = me.$next || $.find(body, _elNext);

      if ($.isElm(me.$prev)) {
        $.on(body, 'click.' + _id + 'Prev', _elPrev, function (e) {
          me.navigate(e, -1);
        }, false);
      }
      if ($.isElm(me.$next)) {
        $.on(body, 'click.' + _id + 'Next', _elNext, function (e) {
          me.navigate(e, 1);
        }, false);
      }
    },

    build: function (active, idx) {
      var me = this;
      var box;

      idx = idx || 0;

      if ($.isElm(me.$prev)) {
        me.$prev.classList[idx === 0 || !active ? _add : _remove](_isHidden);
      }

      if ($.isElm(me.$next)) {
        me.$next.classList[idx === me.count - 1 || !active ? _add : _remove](_isHidden);
      }

      setTimeout(function () {
        me.check();
        box = me.$box;

        if ($.isElm(box)) {
          $.addClass(box, _intensed);
          $.on(box, 'click', me.closeOut.bind(me));
        }
      }, 101);
    },

    check: function () {
      var me = this;
      me.$box = $.find(_doc.body, '> figure');
    },

    toggle: function (visible, idx) {
      var me = this;

      _doc.body.classList[visible ? _add : _remove](_isIntensed);

      // We have no events from the library, so have to use a delay.
      setTimeout(function () {
        me.build(visible, idx);
      }, 101);
    },

    navigate: function (e, delta) {
      e.preventDefault();
      e.stopPropagation();

      var me = this;
      var blazyBox = me.$blazyBox;
      var i = me.index + delta;
      var i2 = (i > me.count) ? me.count : i;
      i = (i < 0) ? 0 : i2;

      var launch = function () {
        // First close video, if any.
        if ($.isElm(blazyBox) && !$.hasClass(blazyBox, _visualyHidden)) {
          var close = me.btnClose;
          if ($.isElm(close)) {
            close.click();
          }
        }

        // Then close the existing zoomed image.
        me.closeZoom();

        // Finally always trigger a new one, if any.
        var trigger = me.$triggers[i];
        if ($.isElm(trigger)) {
          me.index = i;
          trigger.click();
          me.toggle(true, i);
        }
      };

      if (!e.detail || e.detail === 1) {
        launch();
      }
    },

    closeOut: function () {
      var me = this;
      me.toggle(false);
      me.$box = null;
      me.index = 0;
    },

    closeZoom: function () {
      var me = this;

      me.check();
      var box = me.$box;

      if ($.isElm(box)) {
        // Then close the existing zoomed image.
        var img = $.find(box, 'img');
        if ($.isElm(img)) {
          img.click();
        }
      }
    },

    /**
     * Gets the current clicked item index.
     *
     * @param {HTMLElement} item
     *   The link item HTML element.
     *
     * @return {Int}
     *   The current clicked item index.
     */
    getIndex: function (item) {
      var me = this;
      var i = 0;
      $.each(me.$triggers, function (elm, idx) {
        if (elm === item) {
          i = idx;
          return false;
        }
      });
      return i;
    }
  };

  /**
   * Intense utility functions.
   *
   * @param {HTMLElement} elm
   *   The Intense gallery HTML element.
   */
  function process(elm) {
    var me = Drupal.intense;
    var video = $.find(elm, '.media--video');
    var multimedia = $.find(elm, '.litebox--multimedia');
    var hasMedia = $.isElm(multimedia) || $.isElm(video);
    var bbox;

    me.$gallery = elm;
    me.$triggers = $.findAll(elm, _elTrigger);
    me.count = me.$triggers.length;

    // Attaches Blazy video full screen.
    if (hasMedia && _blazyBox) {
      _blazyBox.attach();

      bbox = me.$blazyBox = _blazyBox.el;
      me.btnClose = $.find(bbox, _btnClose);
      $.on(bbox, 'click.' + _idClose, _btnClose, me.closeOut.bind(me), false);
    }

    // Intensify images.
    new Intense(me.$triggers);

    /**
     * Intense utility functions.
     *
     * @param {Event} e
     *   The event triggering the Intense.
     *
     * @return {bool}
     *   Returns a bailout if a dblclick detected, else passes through.
     */
    function triggerIntense(e) {
      e.preventDefault();

      var target = e.target;
      var link = $.attr(target, 'href') ? target : $.closest(target, _elTrigger);
      var media = $.parse(link.dataset.media);
      var multimedia = media && (media.boxType !== 'image');
      var delta = me.getIndex(link);

      if (e.type === 'dblclick') {
        return false;
      }

      // We have no events from the library, so have to use a delay.
      clearTimeout(_intenseTimer);
      _intenseTimer = setTimeout(function () {

        // Build own video fullscreen as Intense is not for video.
        if (multimedia && _blazyBox) {
          _blazyBox.open(link);

          // Then close the existing zoomed image.
          setTimeout(function () {
            me.closeZoom();
          }, 100);
        }

        me.index = delta;
        me.toggle(true, delta);
      });
      return true;
    }

    var clickCallback = function (e) {
      if (!e.detail || e.detail === 1) {
        var elems = $.findAll(elm, '.' + _loading);
        $.each(elems, function (el) {
          $.removeClass(el, _loading);
        });

        // @todo fixme, for some reasons, viewers were not cleanly removed.
        me.check();
        if ($.isElm(me.$box)) {
          $.remove(me.$box);
          me.$box = null;
        }
        triggerIntense(e);
      }
    };

    me.prepare();

    $.on(elm, 'click.' + _id, _elTrigger, clickCallback, false);
    $.addClass(elm, _mounted);
  }

  /**
   * Theme function for intense arrows.
   *
   * @return {HTMLElement}
   *   Returns a HTMLElement object.
   *
   * @todo rename classes at 3.x due to placement change at 2.4. Previously
   * Inside figure, now direct child of the body. Until the WIP is finalized.
   */
  Drupal.theme.intense = function () {
    var html;

    html = '<div class="intensed__arrow">';
    html += '<button class="intensed__prev" data-role="none">' + Drupal.t('Previous') + '</button>';
    html += '<button class="intensed__next" data-role="none">' + Drupal.t('Next') + '</button>';
    html += '</div>';

    return html;
  };

  /**
   * Attaches Intense behavior to HTML element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.intense = {
    attach: function (context) {

      // Supports module or custom gallery with a CSS class.
      var sels = _elDefault + ',' + _elBase;
      var elms = $.findAll(context, sels);

      if (elms.length) {
        // Simplify and unify selectors for easy once.
        $.each(elms, function (el) {
          if (!$.hasClass(el, _gallery)) {
            $.addClass(el, _gallery);
          }
        });
        $.once(process, _idOnce, _element, context);
      }
    },
    detach: function (context, settings, trigger) {
      if (trigger === 'unload') {
        $.once.removeSafely(_idOnce, _element, context);
      }
    }

  };

})(dBlazy, Drupal, this.document);
