/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */

/*=========================

========    JIMMY   =======

==========================*/
//jQuery.fn.onPositionChanged = function (trigger, millis) {
//    if (millis == null) millis = 100;
//    var o = $(this[0]); // our jquery object
//    if (o.length < 1) return o;
//
//    var lastPos = null;
//    var lastOff = null;
//    setInterval(function () {
//        if (o == null || o.length < 1) return o; // abort if element is non existend eny more
//        if (lastPos == null) lastPos = o.position();
//        if (lastOff == null) lastOff = o.offset();
//        var newPos = o.position();
//        var newOff = o.offset();
//        if (lastPos.top != newPos.top || lastPos.left != newPos.left) {
//            $(this).trigger('onPositionChanged', { lastPos: lastPos, newPos: newPos });
//            if (typeof (trigger) == "function") trigger(lastPos, newPos);
//            lastPos = o.position();
//        }
//        if (lastOff.top != newOff.top || lastOff.left != newOff.left) {
//            $(this).trigger('onOffsetChanged', { lastOff: lastOff, newOff: newOff});
//            if (typeof (trigger) == "function") trigger(lastOff, newOff);
//            lastOff= o.offset();
//        }
//    }, millis);
//
//    return o;
//};

/*============== END OF JIMMY ================*/

;(function($) {

  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);
      
    unveil();

    return this;

  };

})(window.jQuery || window.Zepto);
