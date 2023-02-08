/******************************************************* *
 **
 ** Function to load SVG safely using AJAX,
 ** including fallback to png files when
 ** SVG is not supported
 **
 ** Pass the selector and the URL of the files
 ** without its extenstion as the function
 ** will take care of it.
 **
 ** Based on http://css-tricks.com/ajaxing-svg-sprite/
 **
 * *******************************************************/
var hostname = window.location.hostname;
var pathway = window.location.pathname;
var scripts = document.getElementsByTagName("script"),
    MySrc = scripts[scripts.length - 1].src.split("/"),
    absPath = MySrc.slice(0, MySrc.length - 2).join("/"),
    successMessagePage = pathway.includes("endFormMessage"),
    successMessage = document.getElementsByClassName("sentMailSuc");
$(window).load(function () {
    if (successMessage.length) {
        $('html, body').stop().animate({
                'scrollTop': $("#request-form").offset().top
            }, 600, 'swing'
            //        , function () {
            //    window.location.hash = target;
            //}
        );
        console.log("this is successMessagePage");
    } else {
        console.log("nope, no successMessagePage");
    }
});
//************  form relative input select  **************//

//var $select = $('.form-group').has("select");
//$select.each(function () {
//    var self = $(this);
//    var initClass = $(this).attr("class");
//    var $selectTag = $(this).children("select");
//    $(this).addClass($selectTag.children(':selected').val());
//    $selectTag.on('change', function (ev) {
//        self.attr('class', initClass).addClass($selectTag.children(':selected').val());
//    });
//});
var $select = $("select");
$select.each(function () {
    var self = $(this);
    var initClass = $(this).attr("class");
//    var $selectTag = $(this).children("select");
    $(this).addClass(self.children(':selected').val());
    self.on('change', function (ev) {
        self.attr('class', initClass).addClass(self.children(':selected').val());
    });
});

//console.log(hostname, absPath);

function loadSvg(selector, url) {
    var target = document.querySelector(selector);

    // If SVG is supported
    if (typeof SVGRect != "undefined") {
        // Request the SVG file
        var ajax = new XMLHttpRequest();
        ajax.open("GET", url + ".svg", true);
        ajax.send();

        // Append the SVG to the target
        ajax.onload = function (e) {
            target.innerHTML = ajax.responseText;
        }
    } else {
        // Fallback to png
        target.innerHTML = "<img src='" + url + ".png' />";
    }
}
//************  randomize function  **************//

(function ($) {

    $.fn.shuffle = function () {

        var allElems = this.get(),
            getRandom = function (max) {
                return Math.floor(Math.random() * max);
            },
            shuffled = $.map(allElems, function () {
                var random = getRandom(allElems.length),
                    randEl = $(allElems[random]).clone(true)[0];
                allElems.splice(random, 1);
                return randEl;
            });

        this.each(function (i) {
            $(this).replaceWith($(shuffled[i]));
        });

        return $(shuffled);

    };

})(jQuery);

$('.filtered').not(".video-filter-cont").each(function () {
    var items = $(this).find('.filter-item');
    items.shuffle();
});
//************  sorting function  **************//
function sortUsingNestedText(parent, childSelector, keySelector) {
    var items = parent.children(childSelector).sort(function (a, b) {
        var vA = $(keySelector, a).text();
        var vB = $(keySelector, b).text();
        return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
    });
    parent.append(items);

    //    console.log(items);
}






//********************************************************
//************    Home Banner SVG arrow    ***************
//********************************************************

function drawMe(elm, TOut) {
    var paths = document.querySelectorAll('' + elm + ' path'),
        lengths = [];
    for (var i = 0; i < paths.length; i++) {
        var x = paths[i].getTotalLength();
        lengths.push(x);
        paths[i].setAttribute("style", "stroke-dasharray: " + x + "; stroke-dashoffset: " + x + ";");
    }
    var length = Math.max.apply(null, lengths);
    setTimeout(function () {
        TweenMax.staggerFromTo(paths, 1, {
            strokeDasharray: length,
            strokeDashoffset: length
        }, {
            strokeDashoffset: 0
        }, 1);
    }, TOut);


}


//*********    Bootstrap Carousel   ************//
$(function () {
    var myCarousel = $("#fb-preview-slider");
    myCarousel.prepend("<ol class='carousel-indicators'></ol>");
    var indicators = $(".carousel-indicators");
    myCarousel.find(".carousel-inner").children(".item").each(function (index) {
        (index === 0) ?
        indicators.append("<li data-target='#fb-preview-slider' data-slide-to='" + index + "' class='active'></li>"):
            indicators.append("<li data-target='#fb-preview-slider' data-slide-to='" + index + "'></li>");
    });
    $('#fb-preview').carousel({
        interval: 15000
    });
    $('.carousel:not(#fb-preview)').each(function (index) {
        $(this).carousel({
            interval: 7500 + index * 150
            //7500, 7850, 7300
        });
    });
});

//*********    Bootstrap Gallery Lightbox   ************//
function gallerize(elm) {
    $(document).delegate(elm, 'click', function (event) {
        event.preventDefault();

        $(this).ekkoLightbox({
            onShown: function () {
                var index = this.gallery_index;
                var items = this.gallery_items;
                var Length = this.gallery_items.length;

                if (index == 0) {
                    $('.ekko-lightbox-nav-overlay .glyphicon-chevron-left').addClass('hide');
                } else if (index == Length - 1) {
                    $('.ekko-lightbox-nav-overlay .glyphicon-chevron-right').addClass('hide');
                } else {
                    $('.ekko-lightbox-nav-overlay .glyphicon').each(function () {
                        $(this).removeClass('hide');
                    });
                }
                //                console.log(this, index, Length, items.length);
            },
            onNavigate: function (direction, itemIndex, itemLength) {
                //                console.log('Navigating ' + direction + '. Current item: ' + itemIndex + '. out of:' + itemLength);
                if (itemIndex == itemLength - 1) {
                    $('.ekko-lightbox-nav-overlay .glyphicon-chevron-right').addClass('hide');
                } else if (itemIndex == 0) {
                    $('.ekko-lightbox-nav-overlay .glyphicon-chevron-left').addClass('hide');
                } else {
                    $('.ekko-lightbox-nav-overlay .glyphicon').each(function () {
                        $(this).removeClass('hide');
                    });
                }
            }
        });
    });
}

function unveilCust(veiled) {
    //setTimeout(function(){
    //load image
    var $img = veiled.find('img');
    var src = $img.attr('data-src');
    if (src) {
        $img.attr('src', src).load(function () {
            objectFitCallback();
            $(this).addClass("loaded");
        });
        $img.removeAttr('data-src');
        console.log("more loaded " + src);
    }
    //}, 400);
}
//*********    Load More Button Function   ************//
function LoadMore(cont, elm) {
    var $container = $(cont);
    var count = 0;
    $container.each(function () {
        var container = $(this),
            $target = container.find("" + elm + ""),
            targetLength = $target.length,
            colPerRow = 4, //grid columns
            rowsPerClick = 3, //rows to show each click
            colPerClick = rowsPerClick * colPerRow, //columns to show each click
            firstShow = 3, //rows shown by default
            clicksCount = Math.ceil((targetLength - (firstShow * colPerRow)) / colPerClick), //number of clicks to show all
            $clicker = container.find(".btn-more"),
            countShowSpan = $clicker.find('#countShow');
        $target.each(function (index) {
            $(this).hide();
            if (index < colPerRow * firstShow) {
                $(this).show();
            }
        })
        countShowSpan.text(clicksCount);
        $clicker.show();
        $clicker.unbind("click");
        if (clicksCount > 0) {
            $clicker.bind('click', function () {
                var i = firstShow * colPerRow;

                clicksCount--;
                countShowSpan.text(clicksCount);

                function loadedveiled() {
                    $target.eq(i).fadeIn({
                        duration: 50,
                        done: function () {
                            unveilCust($(this));
                        },
                    });

                }



                if (clicksCount <= 0) {
                    for (i; i < targetLength; i++) {
                        loadedveiled();
                    }
                    $clicker.hide();
                } else {
                    for (i; i < (firstShow + count - 1) * colPerClick; i++) {
                        loadedveiled()
                    }
                }
                //                console.log(clicksCount, "click limit = " + (firstShow + count ) * colPerClick, "count = " + count, "target-length = " + targetLength);
                count++;

            });
        } else {
            $clicker.hide();
        }
        //        console.log(count, $target, clicksCount, $clicker);
    });

};


//********************************************************
//*************    Gallery With Filter    ****************
//********************************************************
function filterAction(button, $grid, filterFns, filterValue) {

    console.log("filtering happened" + filterValue);
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
        filter: filterValue
    });
    //reset gallery
    $(document).undelegate('*[data-toggle="lightbox"]', 'click');

    if (filterValue != '*') {

        sortUsingNestedText($('.filtered:not(.video-filter-cont) .row'), '' + filterValue + '', "h3");

        $('' + filterValue + ' a').each(function (index) {
            if ($(this).has('[data-gallery]')) {
                $(this).attr('data-gallery', '' + filterValue.replace(/\./g, "") + '');
            }
            console.log(index + 1);

            var galleryName = $(this).attr('data-gallery');

            unveilCust($(this));

            //                console.log('hello', galleryName, src);
        });
        //            $('.filtered').not(".video-filter-cont").each(function () {
        //                var items = $(this).find('.filter-item');
        //                items.shuffle();
        //            }); 
        gallerize('*[data-toggle="lightbox"]');
        LoadMore('.gallery-load', '' + filterValue + ':not(.exclude)');
        $('' + filterValue + '.exclude').show();
    } else {

        $('.filter-item a[data-toggle="lightbox"]').each(function () {
            $(this).attr('data-gallery', 'fb-gallery');
        });
        //               $('.filter-item').shuffle();    

        $('.filter-item').each(function (index) {
            var father = $(this);
            if (index <= 12) {
                unveilCust($(this));
            }
        });

        gallerize('*[data-toggle="lightbox"]');
        LoadMore(".gallery-load", ".gallery-thumb:not(.exclude)");
    }
}

function filter() {
    // external js: isotope.pkgd.js
    // init Isotope
    var $grid = $('.filtered').isotope({
        itemSelector: '.filter-item',
        layoutMode: 'fitRows',
        transitionDuration: 0,
        //        percentPosition: true,
        hiddenStyle: {
            opacity: 0,
        },
        visibleStyle: {
            opacity: 1,
        }
    });
    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
    // bind filter button click
    $('.filter-btn-group').on('click', 'button', function () {
        var button = $(this);
        var filterValue = button.attr('data-filter');
        filterAction(button, $grid, filterFns, filterValue);


    });
    // change is-checked class on buttons
    $('.btn-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

}
//************   End of Gallery Filter   **************//

//unique array function
function unique(arr, pushedEl) {
    if ($.inArray(pushedEl, arr) === -1) arr.push(pushedEl);
}


/*********************************************************
 ***********  GALLERY LINKS AUTOMATION  *******************
 **********************************************************/

$(function () {
    var $filterGroup = $('#filtered-gallery').find('.filter-btn-group').eq(0);
    var categoryArray = [];
    var categoryNameArray = [];
    $('#filtered-gallery').find(".gallery-thumb").each(function (index) {
        var $anchor = $(this).find('> a');
        var $image = $anchor.find("> img");
        var title = $anchor.find("h3");
        var imgHref = $image.attr("src").split("/");
        var siteCode = imgHref.pop().split(".")[0];
        if ($(this).hasClass("filter-item")) {
            var cat = $(this).attr('data-cat') || imgHref.pop();
            var category = cat.replace(/[^A-Z0-9]+/ig, "-").toLowerCase();

            //            if($.inArray(category, categoryArray) === -1) categoryArray.push(category);
            unique(categoryArray, category);

            var categoryName = cat.replace(/-/g, ' ');
            //            if($.inArray(categoryName, categoryNameArray) === -1) categoryNameArray.push(categoryName);
            unique(categoryNameArray, categoryName);

            $(this).addClass(category);
            //            siteCode = "FB_" + siteCode.substring(0,3) + siteCode.replace('_thumb', '').substr(-4);
        }
        if ($anchor.attr("data-toggle")) {
            if ($anchor.attr('data-yt-thumb')) {
                siteCode = $anchor.attr('data-code');
                var vidId = $anchor.prop('href').match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/),
                    vidThumb = $anchor.attr("data-yt-thumb");
                $image.attr("src", "https://img.youtube.com/vi/" + vidId[1] + "/" + vidThumb + ".jpg")
            } else if ($anchor.attr('data-gallery') == "photo-gallery") {
                siteCode = $anchor.attr('data-code');
                $anchor.attr({
                    'href': $image.attr("src").replace('_thumb', '')
                });
            } else {

                siteCode = "FB_" + siteCode.substring(0, 3) + siteCode.replace('_thumb', '').substr(-4);
                $anchor.attr({
                    'href': $image.attr("src").replace('_thumb', '')
                });
            }

        } else {
            //            siteCode = siteCode.substring(0,3) + siteCode.replace('_thumb', '').substr(-4);
            $anchor.attr({
                'href': "http://ypeg.editor.multiscreensite.com/preview/" + siteCode + ""
            });
        }

        title.text(siteCode.toUpperCase());

    });
    if ($filterGroup) {
        categoryArray.sort();
        categoryNameArray.sort();
        var root = $filterGroup.attr('data-root');

        $.each(categoryArray, function (i, el) {
            var directory = absPath + "/img/" + root + "/_categoriez/" + categoryArray[i] + "";
            var buttonTag = '<button class="btn" data-filter=".' + el + '" data-trans=".' + el + '"> <span class="icon" id="svg-load-' + i + '"></span> <h3 class="text-center"> ' + categoryNameArray[i] + '</h3> </button>';
            $filterGroup.append(buttonTag);
            var buttonSelector = '#svg-load-' + i + '';

            $.ajax({
                url: directory + ".svg",
                type: 'HEAD',
                error: function () {
                    //do something depressing
                },
                success: function () {
                    loadSvg(buttonSelector, directory);
                }
            });



        });

    }


});

function SelectText(element) {

    var doc = element,
        text = doc.getElementsByTagName('h3')[0],
        range, selection;
    if (document.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}
if ($('.caption')) {
    console.log("page contains gallery caption");
    var success = "<div id='copy-alert' data-trans='Product code successfully copied !' class='alert alert-success'>Product code successfully copied !</div>";
    $("body").append(success);
    $("#copy-alert").css({
        position: "fixed",
        bottom: "20px",
        left: "50%",


    });
    $('.gallery:not(.fb-gallery) .caption').click(function (e) {
        e.preventDefault();
        //    console.log(this);
        SelectText(this);
        document.execCommand('copy');
        $("#copy-alert").addClass("active");
        setTimeout(function () {
            $("#copy-alert").removeClass("active");
        }, 2000);
    });
}


//$(".caption").click(function(e){
//    var head = $(this).find('h3');
//        e.preventDefault();
//        head.select();
//        document.execCommand('copy');    
//});
//************   End of GALLERY LINKS AUTOMATION   **************//

//************   phone anchor detect touchscreen   **************//

$('a[href^="tel"]').on('click', function (e) {
    if ($("html").hasClass("no-touchevents")) {
        e.preventDefault();
    }
});


//********************************************************
//*************      FIXED HEADER         ****************
//********************************************************
var $fixedHeader = $('header').has('nav[class*="navbar-fixed"]');

function fixedHeight() {
    var height1 = $("#top-header").outerHeight(),
        height2 = $("#main-navbar-container").outerHeight();
    $fixedHeader.css({
        minHeight: height1 + height2 - 1,
        maxHeight: height1 + height2 - 1
    });

}

function fixedToggle() {
    var winWidth = $(window).width();
    var $fixedNav = $("#main-navbar-container");
    var navTop = $("#top-header").outerHeight();
    var bodyTop = navTop + $("#main-navbar-container").outerHeight();
    $('header').css({
        minHeight: bodyTop - 2
    });
    $fixedNav.affix({
        offset: {
            top: navTop
        }
    });


}
jQuery.fn.onPositionChanged = function (trigger, millis) {
    if (millis == null) millis = 100;
    var o = $(this[0]); // our jquery object
    if (o.length < 1) return o;

    var lastPos = null;
    var lastOff = null;
    setInterval(function () {
        if (o == null || o.length < 1) return o; // abort if element is non existend eny more
        if (lastPos == null) lastPos = o.position();
        if (lastOff == null) lastOff = o.offset();
        var newPos = o.position();
        var newOff = o.offset();
        if (lastPos.top != newPos.top || lastPos.left != newPos.left) {
            $(this).trigger('onPositionChanged', {
                lastPos: lastPos,
                newPos: newPos
            });
            if (typeof (trigger) == "function") trigger(lastPos, newPos);
            lastPos = o.position();
        }
        if (lastOff.top != newOff.top || lastOff.left != newOff.left) {
            $(this).trigger('onOffsetChanged', {
                lastOff: lastOff,
                newOff: newOff
            });
            if (typeof (trigger) == "function") trigger(lastOff, newOff);
            lastOff = o.offset();
        }
    }, millis);

    return o;
};


// object-fit fallback
function objectFitCallback() {
    if (!Modernizr.objectfit) {
        $('.navbar-brand, .thumbnail, .gallery-thumb a').each(function () {
            var $container = $(this),
                imgUrl = $container.children('img').prop('src');

            if (imgUrl) {
                $container
                    .css('backgroundImage', 'url(' + imgUrl + ')')
                    .addClass('compat-object-fit has-bg');
            }
        });
    }
}


$(function () {
    $('.gallery-thumb').each(function (index) {
        var $imageTag = $(this).find('img');
        if (index > 12) {

            var url = $imageTag.attr('src');
            $imageTag.attr({
                src: absPath + '/img/yellow-logo-icon.png',
                'data-src': url
            }).addClass('unveil');
        } else {
            $imageTag.addClass('loaded');
        }
    });
});
$(document).ready(function () {
    var selectOther = $('#formRequesterTitle');
    var otherInput = selectOther.nextAll('input');
    var otherInputSaved = otherInput.clone();
    otherInput.remove();
    selectOther.on('change', function(){
        var optionSelected = $(this).find("option:selected");
     var valueSelected  = optionSelected.val();
        if(valueSelected == "Other" ){
            selectOther.parent().append(otherInputSaved);
        }else{
            var otherInput = selectOther.nextAll('input');
            otherInput.remove();
        }
    });
    console.log(otherInput, otherInputSaved);
    $('a[href^="#"]:not(.carousel-control)').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 600, 'swing'
            //        , function () {
            //    window.location.hash = target;
            //}
        );
    });


    objectFitCallback()

    $('.unveil').unveil(50, function () {
        $(this).load(function () {
            objectFitCallback();
            $(this).addClass("loaded");
        });
    });
    /*======================================
    ======          PRELOADER         =====
    ======================================*/
    var imgs = [],
        imgsDone = 0,
        imgsPercentage = 0,
        incr = 0;
    $(".has-bg").each(function () {

        var element = $(this);
        $.each($(this).css('background-image').split(', '), function (i, v) {
            if ('none' != v) {
                var regExUrl = /url\(|\)$/ig;
                var bgProp = v.replace(/"/g, '');
                if (regExUrl.test(bgProp)) {
                    var preSrc = bgProp.replace(regExUrl, '');
                    unique(imgs, preSrc);
                    //                    console.log(element, bgProp);
                } else {

                }
                //                imgs.push(v.replace(/"/g, '').replace(/url\(|\)$/ig, ''));
            }
        });

    });
    $("img").each(function () {
        $.each($(this).attr('src').split(', '), function (i, v) {
            if ('none' != v) {
                var preSrc = v.replace(/"/g, '').replace(/url\(|\)$/ig, '');
                //                if($.inArray(preSrc, imgs) === -1) imgs.push(preSrc);
                unique(imgs, preSrc);
            }
        });
    });
    console.log(imgs);

    function changeProgress(perc) {
        setTimeout(function () {
            $("#progress-bar").attr("aria-valuenow", perc).css("width", perc + "%").find("span.text").eq(0).text(perc + "%").css("transform", "translateX(" + (100 - perc) + "%)");
            //            console.log($("#progress-bar span.text").text());
        }, 500);
    }
    $.imgpreload(imgs, {
        each: function () {
            if ($(this).data('loaded')) {
                imgsDone++;
                loadedPercent = Math.ceil(imgsDone / imgs.length * 100);
                //                $(".progress").animate({
                //                    width: "" + loadedPercent + "%"
                //                }, "fast");
                //                var u = parseInt(document.getElementById("progress").offsetWidth);

                for (incr; incr < loadedPercent; incr++) {
                    //                    incr = incr + 1;
                    changeProgress(incr);
                    //                    changeProgress(incr);

                    //                    return false;
                }
                //                console.log(loadedPercent, $(this).prop("src"));
                //                changeProgress(loadedPercent);
            }
        },
        all: function () {
            //            $(".progress").animate({
            //                width: "100%"
            //            }, 500, function() {
            //                intro();
            //            });
            // setTimeout(intro, 2000);
            //            console.log("image preloading finished");
            changeProgress(100);
            setTimeout(function () {
                $("#preloader").css("opacity", 0).hide();
            }, 2000);

        }
    });


    /*============= End Of Preloader ===============*/
    gallerize('*[data-toggle="lightbox"]');

    /*======================================
    ======.active and submenu functions=====
    ======================================*/

    $(function () {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, ''));
        $('#main-navbar li.menu-item').each(function () {
            var xxx = $(this).children("a").prop('href');
            var xx = $(this).children("a").attr("href");
            if (urlRegExp.test(xxx) && xx != "#") {
                $(this).addClass('active');
                if ($(this).hasClass('sub-item')) {
                    $(this).parents("li").addClass("active");
                }
            }
        });
        var $active = $('#main-navbar li.active:has(>a:not([href="#"]))');
        //        console.log($active);
        if ($active.length > 1) {
            $('#main-navbar li.active:has(>a[href="#"])').removeClass('active');
            $active.each(function (index) {
                if (index > 0) {
                    $(this).removeClass('active');
                }
            });
        }
    });
    /*=====.active and submenu functions end ======*/
});
filter();
document.addEventListener("DOMContentLoaded", function (event) {

    /*======================================
    ======   filter buttons slider     =====
    ======================================*/
    function clickSlider() {
        $(".filterCont").each(function () {
            var $filterWrapper = $(this).find(".filterWrapper");
            var $filterScreen = $(this).find(".filterScreen");
            var $filterBtn = $filterWrapper.find("button");
            var total = 0;
            if ($filterWrapper.outerWidth() < $filterScreen.outerWidth()) {
                $filterWrapper.addClass("centeralized");
            } else {
                $filterWrapper.removeClass("centeralized");
            }

            $(window).resize(function () {
                if ($filterWrapper.outerWidth() < $filterScreen.outerWidth()) {
                    $filterWrapper.addClass("centeralized");
                } else {
                    $filterWrapper.removeClass("centeralized");
                }
            });

            $filterBtn.each(function (index, element) {
                total = total + parseFloat($(element).outerWidth());
            });
            $filterWrapper.css('min-width', '' + total + 'px');

            //
            //DRY IT OUT LATER
            //
            //

            $filterWrapper.right = $filterWrapper.css("right").replace("px", "");
            $filterWrapper.width = $filterWrapper.outerWidth();
            $filterScreen.width = $filterScreen.outerWidth();
            $filterBtn.width = $filterBtn.map(function () {
                return $(this).outerWidth();
            });
            $filterBtn.width.max = Math.max.apply(Math, $filterBtn.width);

            var perc = $filterBtn.length;
            var btnCount = Math.floor($filterScreen.width / $filterBtn.width.max);
            var myIncreasingNumber = $filterWrapper.width / perc * btnCount;
            var slidesCount = Math.floor($filterWrapper.width / $filterScreen.width);
            if ($filterWrapper.hasClass("onStart")) {
                $filterWrapper.css({
                    right: 0
                });
            } else if ($filterWrapper.hasClass("atEnd")) {
                $filterWrapper.css({
                    right: $filterWrapper.width - $filterScreen.width
                });
            }


            $(this).find(".filter-nav").bind('mousedown touchstart touchend', function (event) {
                event.preventDefault ? event.preventDefault() : event.returnValue = false;

                $filterWrapper.right = $filterWrapper.css("right").replace("px", "");
                $filterWrapper.width = $filterWrapper.outerWidth();
                $filterScreen.width = $filterScreen.outerWidth();
                $filterBtn.width = $filterBtn.map(function () {
                    return $(this).outerWidth();
                });
                $filterBtn.width.max = Math.max.apply(Math, $filterBtn.width);

                var perc = $filterBtn.length;
                var btnCount = Math.floor($filterScreen.width / $filterBtn.width.max);
                var myIncreasingNumber = $filterWrapper.width / perc * btnCount;
                var slidesCount = Math.floor($filterWrapper.width / $filterScreen.width);


                if ($(this).hasClass("next")) {
                    $filterWrapper.removeClass("onStart");
                    if ($filterWrapper.right < $filterWrapper.width - $filterScreen.width - myIncreasingNumber && slidesCount > 1) {
                        $filterWrapper.css({
                            right: '+=' + myIncreasingNumber
                        });
                    } else {
                        $filterWrapper.addClass("atEnd").css({
                            right: $filterWrapper.width - $filterScreen.width
                        });
                    }
                } else
                if ($(this).hasClass("prev")) {
                    $filterWrapper.removeClass("atEnd");
                    if ($filterWrapper.right > myIncreasingNumber) {
                        $filterWrapper.css({
                            right: '-=' + myIncreasingNumber
                        });

                    } else {
                        $filterWrapper.addClass("onStart").css({
                            right: 0
                        });
                    }
                }
                //            console.log("filter list width: " + $filterWrapper.width + ", filter list position: " + $filterWrapper.right + ', min-width should be: ' + total);
            });
        });
    }
    clickSlider();
    //swipe function

    //window.addEventListener('load', function(){
    var screen = document.getElementById("filterScreen");
    if (screen) {
        var Wrapper = screen.getElementsByClassName("filterWrapper")[0],
            buttons = Wrapper.getElementsByTagName("button"),
            buttonsl = buttons.length,
            curindex = 0,
            WrapperPos = parseInt(Wrapper.style.right);

        var targetButton;
        ontouch(screen, function (evt, dir, phase, swipetype, distance) {
            // evt: contains original Event object
            // dir: contains "none", "left", "right", "top", or "down"
            // phase: contains "start", "move", or "end"
            // swipetype: contains "none", "left", "right", "top", or "down"
            // distance: distance traveled either horizontally or vertically, depending on dir value
            var Wrapperwidth = Wrapper.offsetWidth,
                screenWidth = screen.clientWidth,
                liscount = Math.ceil(Wrapperwidth / screenWidth);
            if (phase == 'start') { // on touchstart
                WrapperPos = parseInt(Wrapper.style.right) || 0; // initialize ulLeft var with left position of UL
                targetButton = evt.path.find(function findCherries(tt) {
                    return tt.classList.contains('btn'); // === 'btn';
                });


            } else if (phase == 'move' && (dir == 'left' || dir == 'right')) {
                if (WrapperPos >= 0) {
                    var totaldist = (-1 * distance) + WrapperPos;
                    Wrapper.style.right = Math.min(totaldist, Wrapperwidth - screenWidth) + 'px';
                    console.log('You are moving the finger horizontally by ' + distance, WrapperPos, Wrapperwidth);
                }

            } else if (phase == 'end') { // on touchend

                if (swipetype == 'left' || swipetype == 'right') { // if a successful left or right swipe is made
                    curindex = (swipetype == 'left') ? Math.min(curindex + 1, liscount - 1) : Math.max(curindex - 1, 0) // get new index of image to show

                } else if (swipetype == 'none') {
                    //                Wrapper.removeEventListener('touchend',
                    //                function (e) {
                    //                    e.preventDefault()
                    //                }, false);

                    var $grid = $('.filtered').isotope({
                        itemSelector: '.filter-item',
                        layoutMode: 'fitRows',
                        transitionDuration: 0,
                        //        percentPosition: true,
                        hiddenStyle: {
                            opacity: 0,
                        },
                        visibleStyle: {
                            opacity: 1,
                        }
                    });
                    // filter functions
                    var filterFns = {
                        // show if number is greater than 50
                        numberGreaterThan50: function () {
                            var number = $(this).find('.number').text();
                            return parseInt(number, 10) > 50;
                        },
                        // show if name ends with -ium
                        ium: function () {
                            var name = $(this).find('.name').text();
                            return name.match(/ium$/);
                        }
                    };
                    // bind filter button click
                    //                $('.filter-btn-group').on('click', 'button', function () {
                    var button = targetButton;
                    console.log(evt);
                    if (button.getElementsByClassName("icon").length) {
                        var filterValue = button.getAttribute('data-filter');
                        filterAction(button, $grid, filterFns, filterValue);




                        //                });
                        // change is-checked class on buttons
                        for (j = 0; j < buttonsl; j++) {
                            buttons[j].classList.remove("is-checked");
                        }

                        button.classList.add("is-checked");
                        return false;
                    } else {
                        console.log("clicking");
                        return false;
                        //console.log("clicking");
                    }
                    //                gallerize();


                    //                            filter();
                    //                targetButton.addEventListener("click", function () {
                    //                    console.log("I'm clicked");
                    //                });
                }
                Wrapper.style.right = Math.min(curindex * screenWidth, Wrapperwidth - screenWidth) + 'px' // move UL to show the new image
                console.log(targetButton, phase, swipetype, WrapperPos);
                WrapperPos = parseInt(Wrapper.style.right);
                Wrapper.classList.remove("onStart", "atEnd");
                if (WrapperPos == 0) {
                    Wrapper.classList.add("onStart");
                } else if (WrapperPos >= (Wrapperwidth - screenWidth)) {
                    Wrapper.classList.add("atEnd");
                } else {
                    Wrapper.classList.remove("onStart", "atEnd");
                }
            }

        });
    } else {
        //        console.log("no gallery here");
    }

    //    console.log(Wrapper);
    //}, false)   


    /*===== end of filter buttons slider ======*/

    LoadMore(".gallery-load", ".gallery-thumb");
});
$(window).load(function () {

    fixedToggle();
    TweenMax.from($('.yellow-overlay').eq(0), .8, {
        x: '100%',
        autoAlpha: 0
    });

    drawMe("#arrow-img", 1400);

    fixedHeight();

});
$(window).resize(function () {
    fixedToggle();
    fixedHeight();
});
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    //    console.log(document.documentElement.scrollTop, document.body.scrollTop );
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        document.getElementById("up-button").style.opacity = "1";
    } else {
        document.getElementById("up-button").style.opacity = "0";
    }
}