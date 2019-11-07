function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }

}
$(document).ready(() => {
    $('.menu-has-children').click(function() {
        if($(this).attr('hide') == 1) {
            $(this).children('a').css({'display': 'none'});
            $(this).attr('hide', 0);
        } else {
            $(this).children('a').css({'display': 'block'});
            $(this).attr('hide', 1)
        }
    })
    $('a.icon').click(function() {
        if($(this).attr('hide') == 1) {
            $('.topnav div').not(':first').not(':last').css({'display': 'none'});
            $('.topnav a').not(':first').not(':last').css({'display': 'none'});
            $(this).attr('hide', 0);
        } else {
            $('.topnav div').not(':first').css({'display': 'block'});
            $('.topnav a').not(':first').css({'display': 'block'});
            $(this).attr('hide', 1);
        }
    })
})