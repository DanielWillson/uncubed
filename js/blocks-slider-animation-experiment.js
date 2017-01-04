console.log("loaded slider");
var left, right;
// on doc.ready,
$(function() {
    // jq fns for animation
    $.fn.extend({
        slideRightShow: function() {
            return this.each(function() {
                $(this).show('slide', {
                    direction: 'right'
                }, 1000);
            });
        },
        slideLeftHide: function() {
            return this.each(function() {
                $(this).hide('slide', {
                    direction: 'left'
                }, 1000);
            });
        },
        slideRightHide: function() {
            return this.each(function() {
                $(this).hide('slide', {
                    direction: 'right'
                }, 1000);
            });
        },
        slideLeftShow: function() {
            return this.each(function() {
                $(this).show('slide', {
                    direction: 'left'
                }, 1000);
            });
        }
    });
    // Make a slider from a blocks-container slider div, containing the usual unordered list structure
    // @param i the jQ index in .each(), unused
    // @param elt a jQuery Element, specifically the blocks-container div
    // @ensure that the thing becomes a slider if it has more than 3 elements
    // 		- hide excess children
    //		- assign a data-slider-number attribute to elt so that it can be referenced by it's left/right buttons
    // 		- add left/right buttons
    function slider(i, elt) {
        console.log("new slider");
        elt = $(elt);
        var ul = elt.children();
        var n = elt.attr('data-slider-num-blocks') || 3;
        console.log(n);
        if (ul.children('li').length > n) {
            // hide all of the kids after the nth
            ul.children('li').each(function(i, elt) {
                if (i > n - 1) {
                    $(elt).hide();
                };
            });
        }
        // assign data-slider-number for access by index later
        elt.attr('data-slider-number', i);
        // add buttons
        if (elt.attr('data-slider-arrow-style') === "vert") {
            elt.prepend('<a class="slider-button top" href="javascript:right(' + i + ');"><h3>&wedge;</h3></a>');
            elt.append('<a class="slider-button bottom" href="javascript:left(' + i + ');"><h3>&vee;</h3></a>')
        } else {
            elt.prepend('<a class="slider-button left" href="javascript:right(' + i + ');"><h3><</h3></a>');
            elt.append('<a class="slider-button right" href="javascript:left(' + i + ');"><h3>></h3></a>')
        }
    };
    // slide left
    /****
     - show the first hidden child of the ul
     - hide the first child of the ul
     - take the first child, just hidden, remove it and append it to the ul
     ****/
    left = function(index) {
        var ul = $('.to-be-slid[data-slider-number="' + index + '"]').children('ul');
        ul.append($(ul.children('li')[0]).animate(1000, {
            width: "0%"
        }).hide().remove());
        $(ul.children('li.hidden')[0]).css("width", "0%").show().animate(1000, {
            width: "29%"
        });
    };
    // slide right
    /****
     - take the last child, prepend it to the ul, and show it
     - hide the last visible child
     ****/
    right = function(index) {
        var ul = $('.to-be-slid[data-slider-number="' + index + '"]').children('ul');
        ul.prepend(ul.children('li.hidden').last().remove().show());
        ul.children('li:visible').last().hide();
    };
    // create the sliders
    $('.to-be-slid').each(slider);
});
// test it
function test() {
    var i;
    for (i = 0; i < 10000; i++) {
        if (Math.random() < .5) {
            setTimeout(function() {
                left(0);
            }, 10);
        } else {
            setTimeout(function() {
                right(0);
            }, 10);
        };
    }
};