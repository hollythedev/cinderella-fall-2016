(function($) {


    //counter for pre-defined donation packages

    $('.target_pos').click(function() {
        $('.output').html(function(i, val) { return val * 1 + 1 });
    });

    $('.target_neg').click(function() {
        $('.output').html(function(i, val) { return val * 1 - 1 });
    });

})(jQuery);