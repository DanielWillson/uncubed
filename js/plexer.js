$(function() {
    'use strict';
    var plexer = {};

    plexer.activate = function(data_content_name) {
        $('.plexer #switchboard li').removeClass('active');
        $('.plexer #content div').removeClass('active');
        $('li[data-content-name="' + data_content_name + '"]').addClass('active');
        $('div[data-name="' + data_content_name + '"]').addClass('active');
    };

    plexer.new = function() {
        $('.plexer #switchboard li').each(function(i) {
            $(this).click(function(e) {
                e.preventDefault();
                plexer.activate($(this).attr('data-content-name'));
                return false;
            });
        });
        plexer.activate($('.plexer #switchboard li:first-child').attr('data-content-name'));
    };

    plexer.new();
});