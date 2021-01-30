

// fonctions TweenMax pour la nav, l'affichage des menus personnages et de la page mentions respectivement. 




var tlmenu2 = new TimelineMax({
    paused: true
});

tlmenu2.to('#divperso', 0.5, {
        autoAlpha: 1
    })
    .staggerFromTo('#divperso', 0.5, {
        display: "none"
    }, {
        display: "block"
    }, 0.1);



var tlmenu3 = new TimelineMax({
    paused: true
});

tlmenu3.to('#mentions', 0.5, {
        autoAlpha: 1
    })
    .staggerFromTo('#mentions', 0.5, {
        display: "none"
    }, {
        display: "block"
    }, 0.1);


//fonctions pour afficher et faire disparaitre la nav lorsque l'on appuie sur le bouton prévu à cet effet (en haut a gauche rouge si on peut fermer la nav et vert si on peut l'ouvrir)



//fonction qui permet d'afficher les mentions légales
$('.texteMentions').click(function () {


    if (document.getElementById('mentions').style.display == "block") {
        tlmenu3.reverse(0.5)
    } else {
        tlmenu3.play(0.5);
    }
})


//fonctions qui permettent de changer la fiche personnage tout en faisant apparaitre et disparaitre la nav

$('.luffy').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Monkey.D.Luffy</p>');
    $('#changeimage').html('<img src="../images/luffygif.gif" alt="#">');
    $('.age').html('<p>Age : 19 ans</p>');
    $('.combat').html('<p>Style de combat : Mains nues</p>');
    $('.fruit').html('<p>Fruit du démon : Fruit du caoutchouc</p>');
    $('.role').html("<p>Capitaine de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#69181f88');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});


$('.zoro').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Roronoa Zoro</p>');
    $('#changeimage').html('<img src="../images/zoro.gif" alt="#">');
    $('.age').html('<p>Age : 21 ans</p>');
    $('.combat').html('<p>Style de combat : Epeiste</p>');
    $('.fruit').html('<p>Fruit du démon : Aucun</p>');
    $('.role').html("<p>Bras droit de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#17573288');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.nami').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Nami</p>');
    $('#changeimage').html('<img src="../images/nami.gif" alt="#">');
    $('.age').html('<p>Age : 20 ans</p>');
    $('.combat').html('<p>Style de combat : Météo</p>');
    $('.fruit').html('<p>Fruit du démon : Aucun</p>');
    $('.role').html("<p>Navigatrice l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#FAA83E90');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.ussop').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Ussop</p>');
    $('#changeimage').html('<img src="../images/ussop.gif" alt="#">');
    $('.age').html('<p>Age : 19 ans</p>');
    $('.combat').html('<p>Style de combat : Distance</p>');
    $('.fruit').html('<p>Fruit du démon : Aucun</p>');
    $('.role').html("<p>Sniper l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#4d040488');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.sanji').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Vinsmoke Sanji</p>');
    $('#changeimage').html('<img src="../images/sanji.gif" alt="#">');
    $('.age').html('<p>Age : 25 ans</p>');
    $('.combat').html('<p>Style de combat : Jambes</p>');
    $('.fruit').html('<p>Fruit du démon : Aucun</p>');
    $('.role').html("<p>Cuisinier de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#d3a21e88');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});


$('.chopper').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Chopper</p>');
    $('#changeimage').html('<img src="../images/chopper.gif" alt="#">');
    $('.age').html('<p>Age : 17 ans</p>');
    $('.combat').html('<p>Style de combat : Rumble Balls</p>');
    $('.fruit').html('<p>Fruit du démon :  Fruit Humain</p>');
    $('.role').html("<p>Médecin de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#411b0d88');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.robin').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Nico Robin</p>');
    $('#changeimage').html('<img src="../images/robin.gif" alt="#">');
    $('.age').html('<p>Age : 27 ans</p>');
    $('.combat').html('<p>Style de combat : Fruit du démon</p>');
    $('.fruit').html('<p>Fruit du démon :  Fruit des fleurs</p>');
    $('.role').html("<p>Archéologue de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#3b1a3b88');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.franky').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Franky</p>');
    $('#changeimage').html('<img src="../images/franky.gif" alt="#">');
    $('.age').html('<p>Age : 30 ans</p>');
    $('.combat').html('<p>Style de combat : Machine et Poings</p>');
    $('.fruit').html('<p>Fruit du démon :  Aucun</p>');
    $('.role').html("<p>Menuisier de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#24517288');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});

$('.brook').click(function () {

    $('.fermer').css('visibility', 'visible');
    $('.nom').html('<p>Brook</p>');
    $('#changeimage').html('<img src="../images/brook.gif" alt="#">');
    $('.age').html('<p>Age : 85 ans</p>');
    $('.combat').html('<p>Style de combat : Epée</p>');
    $('.fruit').html('<p>Fruit du démon :  Fruit de la Résurrection</p>');
    $('.role').html("<p>Musicien de l'équipage du Chapeau de paille</p>");
    $('#divperso').css('background-color', '#22232488');
    $('nav').css('visibility', 'hidden');
    tlmenu2.play(0.5);
    tlmenu.play(0.5);
    $('.boutonFermer').css('visibility', 'hidden');
    $('.boutonOuvrir').css('visibility', 'hidden');
});


$('.fermer').click(function () {
    tlmenu.reverse(0.5);
    tlmenu2.reverse(0.5);
    $('.boutonOuvrir').css('visibility', 'hidden');
    $('.boutonFermer').css('visibility', 'visible');
});



//fonction qui permet d'afficher le texte des parties histoire, univers et auteur lorsque l'on rentre dans leur div respective
$('#histoire').on('mouseenter', histoire);

function histoire() {
    if (document.getElementById('histoire').getElementsByTagName('p')[0].style.opacity == 0) {

        TweenMax.fromTo('#histoire p', 0.6, {
            y: 0,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            delay: 0
        });

        TweenMax.fromTo('.drapeau', 0.6, {
            y: 0,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            delay: 0
        });

        TweenMax.fromTo('.gifluffy', 0.6, {
            y: 0,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            delay: 0
        });
    }
};


$('#univers').on('mouseenter', univers);

function univers() {
    if (document.getElementById('univers').getElementsByTagName('p')[0].style.opacity == 0) {

        TweenMax.fromTo('#univers p', 0.6, {
            y: 0,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            delay: 0
        });
    }
};

$('#auteur').on('mouseenter', auteur);

function auteur() {
    if (document.getElementById('auteur').getElementsByTagName('p')[0].style.opacity == 0) {

        TweenMax.fromTo('#auteur p', 0.6, {
            y: 0,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            delay: 0
        });
    }
};

//fonction pour le slider
window.onload = function () {

    var changerImage = document.getElementById('changerImage');

    var i = 1;

    changerImage.onclick = function () {
        i++;
        document.getElementById('photoOda').src = '../images/' + i + '.jpg';
        if (i == 3) {
            i = 0;
        }

    }
}
