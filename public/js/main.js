$(document).ready(function () {
    $('.open-btn').click(function () {
        $('.sidebar').css("display", "block");
    });

    $('.close-btn').click(function () {
        $('.sidebar').css("display", "none");
        $('.sidebar').addClass('animated', slideOutRight);

    });
});
