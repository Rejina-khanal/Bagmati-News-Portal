
jQuery(function () {
    jQuery('#showall').ready(function () {
        jQuery('.target').hide();
        jQuery('#div1').show();
    });

    jQuery('.Single').click(function () {
        jQuery('.target').hide();
        jQuery('#div' + $(this).attr('target')).show();
    });
});

$('.menu-tigger').on('click', function () {
    $(this).toggleClass('button-tigger');
    $('nav').toggleClass('res-menu');
});