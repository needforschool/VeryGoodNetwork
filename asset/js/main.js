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


    //Requete AJAX
    $('#formSignin').on('submit', function(e){
        e.preventDefault();
        let form = $('#formSignin');
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',

            beforeSend: function() {
                $('#btn-submit-signin').css('display', 'none');
            },

            success: function(response) {
                $('#btn-submit-signin').fadeIn(200);
                console.log(response)
            }
        })
    })
//----------------------
//Scroll reveal About us
//----------------------

    const sr = ScrollReveal();

    sr.reveal('#about-picture1', {
        origin: 'left',
        distance: '200px',
        duration: 800,
    });

    sr.reveal('#about-picture2', {
        origin: 'bottom',
        distance: '100px',
        duration: 500,
        delay: 600,
    });

    sr.reveal('#about-picture3', {
        origin: 'right',
        distance: '100px',
        duration: 500,
        delay: 1000,
    });

    sr.reveal('#about-picture4', {
        origin: 'left',
        distance: '100px',
        duration: 500,
        delay: 1200,
    });

    sr.reveal('#about-section0 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('#about-section1 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('#about-section1 p', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 800,
    });

    sr.reveal('#about-section2 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('.single-profil1', {
        origin: 'bottom',
        distance: '100px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.single-profil2', {
        origin: 'bottom',
        distance: '100px',
        duration: 500,
        delay: 800,
    });

    sr.reveal('.single-profil3', {
        origin: 'bottom',
        distance: '100px',
        duration: 500,
        delay: 1200,
    });

    sr.reveal('.single-profil4', {
        origin: 'bottom',
        distance: '100px',
        duration: 500,
        delay: 1600,
    });

    sr.reveal('#about-section3 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('.about-section3number1', {
        origin: 'left',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('.about-section3number2', {
        origin: 'left',
        distance: '500px',
        duration: 600,
        delay: 600,
    });

    sr.reveal('.about-section3number3', {
        origin: 'left',
        distance: '800px',
        duration: 700,
        delay: 1000,
    });

    sr.reveal('.about-section3number4', {
        origin: 'left',
        distance: '1000px',
        duration: 800,
        delay: 1400,
    });

    sr.reveal('#about-section4 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('#about-section4 .picture', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });


    sr.reveal('#about-section4 .Stick', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 600,
    });


    sr.reveal('#about-section4 .textarg', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 800,
    });

    sr.reveal('#about-section5 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('#imagepubliciteaboutsection1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('#imagepubliciteaboutsection2', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 600,
    });

    sr.reveal('#imagepubliciteaboutsection3', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 800,
    });

    sr.reveal('#about-section6 h1', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 200,
    });

    sr.reveal('#about-section6 #aboutusbutton', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    const parallax = document.querySelector('#about-picture2');

    window.addEventListener('scroll', () =>{
        parallax.style.backgroundPositionY = window.scrollY / 4 + "px";
    });



//----------------------
//FERMETURE JQUERY
//----------------------
})


//----------------------
//FONCTIONS JS
//----------------------

//fonction pour verifier la longueur du texte
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

//Fonction pour verifier qu'un email est valide
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

//fonction pour verifier la longueur du mot de passe
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