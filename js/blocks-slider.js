console.log("loaded slider");
var left, right;
// on doc.ready,
$(function() {
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
                    $(elt).addClass('hidden');
                };
            });
        }
        // assign data-slider-number for access by index later
        elt.attr('data-slider-number', i);
        // add buttons
        if (elt.attr('data-slider-arrow-style') === "vert") {
            elt.prepend('<a class="slider-button top" href="javascript:right(' + i + ');"><div class="vert-slider"><h4>&wedge;</h4></div></a>');
            elt.append('<a class="slider-button bottom" href="javascript:left(' + i + ');"><div class="vert-slider"><h4>&vee;</h4></div></a>')
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
        $(ul.children('li.hidden')[0]).removeClass('hidden');
        ul.append($(ul.children('li')[0]).addClass('hidden').remove());
    };
    // slide right
    /****
     - take the last child, prepend it to the ul, and show it
     - hide the last visible child
     ****/
    right = function(index) {
        var ul = $('.to-be-slid[data-slider-number="' + index + '"]').children('ul');
        ul.prepend(ul.children('li.hidden').last().remove().removeClass('hidden'));
        ul.children('li:visible').last().addClass('hidden');
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