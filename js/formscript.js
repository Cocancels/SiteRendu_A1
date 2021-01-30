$('#envoyer').click(function () {
    var msg = document.getElementById("msg").value;
    
    if (msg != '') {
        alert("Le message a bien été envoyé !")
    }
    else{
        alert("Vous n'avez rien écrit, le message n'a pas été envoyé")
    }

});