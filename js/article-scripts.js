$(function() {
    // jq extension to see if a selector returns a real page object
    $.fn.exists = function() {
        return this.length !== 0;
    }
    // if we're on the article page, move the article subheading (assuming that it's article h2) from inside the article tag to the article-heading div
    if ($('article h2').exists() && $('article h2').length < 2) {
        $('#article-heading').append($('article h2:first-child').remove().addClass('movedHeader'));
    } else if ($('article h2').exists()) {
        $('article h2:first-child').remove();
    }

    // also move the nitty gritty if it's inside the article tags
    if ($('article p:contains("Nitty Gritty")').exists()) {
        if (($('article .nittygritty').exists())) {
            $('article p:contains("Nitty Gritty")').prev().nextAll('p').remove();
        } else {
            if ($('article .subscribe').exists()) {
                $('<div class="nittygritty"></div>').insertBefore($('article .subscribe')[0]);
            } else {
                $('article').append('<div class="nittygritty"></div>');
            }
            $('article .nittygritty').append($('article p:contains("Nitty Gritty")').prev().nextAll('p'));
        }
    }

    // word count script to give reading time
//     var seconds = Math.floor($('#content').text().split(' ').length / 3);
//     var message = "";
//     switch (true) {
//         case (seconds < 0):
//             message = "This must be some zombie article.";
//             break;
//         case (seconds < 30.1):
//             message = "Pretty much a tweet.";
//             break;
//         case (seconds < 60.1):
//             message = "Light read.";
//             break;
//         case (seconds < 90.1):
//             message = "Just about right.";
//             break;
//         case (seconds < 120.1):
//             message = "Probably could have cut a sentence or two.";
//             break;
//         case (seconds < 150.1):
//             message = "Get comfortable.";
//             break;
//         case (seconds > 150.1):
//             message = "We're aspiring novelists.";
//             break;
//         default:
//             message = "What happened here?";
//             break;
//     }
//     $('#share-this-page').append("<ul class='sharethis'><p> &nbsp;" + seconds + " second read. " + message + "</p></ul>");
});