
semantic = {};
semantic.button = {};

// ready event
semantic.button.ready = function() {
    // selector cache
    var $buttons = $(".ui.buttons .button")
    // alias
    handler = {
        activate: function() {
            $button = $(this).find(".button");
            $button = $(this).find(".button");
            $button.addClass("red");
            $button.hasClass("green")
                ? $button.removeClass("green")
                : $button.addClass("green");
        }

    };

    $buttons.on("click", handler.activate);
};

// attach ready event
$(document).ready(semantic.button.ready);
