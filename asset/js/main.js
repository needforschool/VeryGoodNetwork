//----------------------
//OUVERTURE JQUERY
//----------------------

$(document).ready(function(){

    //-----------------
    //PLUGIN MICROMODAL
    //-----------------

    MicroModal.init({
        onShow: modal => console.info(`${modal.id} is shown`),
        onClose: modal => console.info(`${modal.id} is hidden`),
        openTrigger: 'data-custom-open', 
        closeTrigger: 'data-custom-close',
        openClass: 'is-open',
        disableScroll: true,
        disableFocus: false, 
        awaitOpenAnimation: false, 
        awaitCloseAnimation: false, 
        debugMode: true
    });

    //----------------------
    //PLUGIN MENU NAVIGATION
    //----------------------

    (function() {
        
        $.fatNav();
        
    }());


    //-------------------------
    //FORMULAIRE D'INSCRIPTION
    //-------------------------

    //Verification formulaire en JS (Pas sécurisé)
    $('#nom-signin').on('keyup', function(){
        verifText('nom-signin', 2, 50);
    })

    $('#prenom-signin').on('keyup', function(){
        verifText('prenom-signin', 2, 50);
    })

    $('#email-signin').on('keyup', function(){
        verifEmail('email-signin');
    })

    $('#password-signin').on('keyup', function(){
        checkLengthPassword('password-signin');
    })



//----------------------
//FERMETURE JQUERY
//----------------------
})


//----------------------
//FONCTIONS JS
//----------------------

function verifText(id, min, max)
{
  var error = $('span.error-' + id);
  var champ = $('input#' + id);
  var isGood = champ.val().length;

  if(isGood == 0){
    error.html('Veuillez remplir le champ');
  }else if (isGood < min){
    error.html('Veuillez utiliser au minimum '+ min +' caractères');
  }else if (isGood > max){
    error.html('Veuillez utiliser au maximum '+ max +' caractères');
  }else {
    error.html('<i class="fas fa-check" style="color: #51cf66;"></i>');
  }
}


function verifEmail(id)
{
    var error = $('span.error-' + id);
    var champ = $('input#' + id);
    var checkEmail = champ.val()

    var testEmail = /.+@.+\..+/;

    if(champ.val().length == 0){
        error.html('Veuillez remplir le champ');
    }else if (!testEmail.test(checkEmail)){
        error.html('Email non valide');
    }else{
        error.html('<i class="fas fa-check" style="color: #51cf66;"></i>');
    }
}

function checkLengthPassword(id)
{
    var error = $('span.error-' + id);
    var champ = $('input#' + id);
    var checkPassword = champ.val();

    if (checkPassword.length == 0) {
        error.css('color', '#e74c3c');
        error.html('Veuillez remplir le champ');
    } else if (checkPassword.length >= 50){
        error.css('color', '#e74c3c');
        error.html('Maximum 50 caractères');
    } else if(checkPassword.length >= 1 && checkPassword.length <= 4){
        error.css('color', '#e74c3c');
        error.html('Mot de passe faible');
    } else if (checkPassword.length >= 5 && checkPassword.length <= 8){
        error.css('color', '#f39c12');
        error.html('Mot de passe moyen');
    } else if (checkPassword.length >= 9 && checkPassword.length <=49){
        error.css('color', '#27ae60');
        error.html('Mot de passe fort');
    }
}