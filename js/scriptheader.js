var tlmenu = new TimelineMax({
    paused: true
});

tlmenu.to('nav', 0.5, {
        autoAlpha: 0
    })
    .staggerFromTo('nav', 0.5, {
        display: "inline-block"
    }, {
        display: "none"
    }, 0.1);


$('.boutonOuvrir').click(function () {
    tlmenu.reverse(0.5);
    $(this).css('visibility', 'hidden');
    $('.boutonFermer').css('visibility', 'visible');
});


$('.boutonFermer').click(function () {
    tlmenu.play(0);
    $(this).css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'visible');
});
