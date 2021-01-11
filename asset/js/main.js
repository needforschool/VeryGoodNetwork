//----------------------
//OUVERTURE JQUERY
//----------------------

$(document).ready(function () {



    //---------------------------------
    //BOUTON UPDATE DONNEE DES TRAMES
    //---------------------------------



    $.ajax({
        type: 'post',
        url: 'ajax/ajax-getDataTrame.php',
        //data: ,
        dataType: 'json',

        success: function (trames) {
            console.log(trames)
            getLog(trames);
        },
    })



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

    (function () {

        $.fatNav();

    }());


    //-------------------------
    //FORMULAIRE D'INSCRIPTION
    //-------------------------

    //Verification formulaire en JS (Pas sécurisé)
    $('#nom-signin').on('keyup', function () {
        verifText('nom-signin', 2, 50);
    })

    $('#prenom-signin').on('keyup', function () {
        verifText('prenom-signin', 2, 50);
    })

    $('#email-signin').on('keyup', function () {
        verifEmail('email-signin');
    })

    $('#password-signin').on('keyup', function () {
        checkLengthPassword('password-signin');
    })

    $('#confirm-password-signin').on('keyup', function () {
        checkConfirmPassword('confirm-password-signin', 'password-signin');
    })


    //Requete AJAX
    $('#formSignin').on('submit', function (e) {
        e.preventDefault();
        let form = $('#formSignin');
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',

            beforeSend: function () {
                $('#btn-submit-signin').css('display', 'none');
                //console.log(form);
            },

            success: function (response) {
                $('#btn-submit-signin').fadeIn('200');
                //console.log(response)
                //console.log(response.errors)
                if (response.success) {
                    connexionSuccess();
                } else if (!response.success) {
                    $.each(response.errors, function (index, value) {
                        $('span.error-' + index + '-signin').css('color', '#ff6b6b')
                        $('span.error-' + index + '-signin').html(value)
                    })

                }
            }
        })
    })



    //-------------------------
    //FORMULAIRE DE CONNEXION
    //-------------------------

    $('#formLogin').on('submit', function (e) {
        e.preventDefault();
        let formLogin = $('#formLogin');
        $.ajax({
            type: 'POST',
            url: formLogin.attr('action'),
            data: formLogin.serialize(),
            dataType: 'json',

            beforeSend: function () {
                $('#btn-submit-login').css('display', 'none');
            },

            success: function (response) {
                $('#btn-submit-login').fadeIn('200');
                //console.log(response)
                if (response.success) {
                    connexionSuccess();
                } else if (!response.success) {
                    $('span.error-password-login').html('Email ou mot de passe incorrect');
                }
            },
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
    // SCROLL REVEAL HOME PAGE

    sr.reveal('.wrap-banner', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });


    sr.reveal('.banner-btn', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.content', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });


    sr.reveal('.text', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.text2', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.text3', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.text4', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('.boximg4', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });

    sr.reveal('#imgmiddle4', {
        origin: 'bottom',
        distance: '200px',
        duration: 500,
        delay: 400,
    });


    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5
        });
    });

    //const parallax = document.querySelector('#about-picture2');


    //window.addEventListener('scroll', () =>{
    //    parallax.style.backgroundPositionY = window.scrollY / 4 + "px";
    //});

    //Client area

    $("#btn-ca-main").on("click", function () {
        $('#client-area-main').show();
        $('#client-area-graph').hide();
        $('#client-area-logs').hide();
        console.log("main");
    });

    $("#btn-ca-graph").on("click", function () {
        $('#client-area-main').hide();
        $('#client-area-graph').show();
        $('#client-area-logs').hide();
    });

    $("#btn-ca-logs").on("click", function () {
        $('#client-area-main').hide();
        $('#client-area-graph').hide();
        $('#client-area-logs').show();
        // getLog(trames);
    });

    //----------------------
    //FERMETURE JQUERY
    //----------------------
})


//----------------------
//FONCTIONS JS
//----------------------

//fonction pour verifier la longueur du texte
function verifText(id, min, max) {
    var error = $('span.error-' + id);
    var champ = $('input#' + id);
    var isGood = champ.val().length;

    if (isGood == 0) {
        error.html('Veuillez remplir le champ');
    } else if (isGood < min) {
        error.html('Veuillez utiliser au minimum ' + min + ' caractères');
    } else if (isGood > max) {
        error.html('Veuillez utiliser au maximum ' + max + ' caractères');
    } else {
        error.html('<i class="fas fa-check" style="color: #51cf66;"></i>');
    }
}

//Fonction pour verifier qu'un email est valide
function verifEmail(id) {
    var error = $('span.error-' + id);
    var champ = $('input#' + id);
    var checkEmail = champ.val()

    var testEmail = /.+@.+\..+/;

    if (champ.val().length == 0) {
        error.html('Veuillez remplir le champ');
    } else if (!testEmail.test(checkEmail)) {
        error.html('Email non valide');
    } else {
        error.html('<i class="fas fa-check" style="color: #51cf66;"></i>');
    }
}

//fonction pour verifier la longueur du mot de passe
function checkLengthPassword(id) {
    var error = $('span.error-' + id);
    var champ = $('input#' + id);
    var checkPassword = champ.val();

    if (checkPassword.length == 0) {
        error.css('color', '#e74c3c');
        error.html('Veuillez remplir le champ');
    } else if (checkPassword.length >= 50) {
        error.css('color', '#e74c3c');
        error.html('Maximum 50 caractères');
    } else if (checkPassword.length >= 1 && checkPassword.length <= 4) {
        error.css('color', '#e74c3c');
        error.html('Mot de passe faible');
    } else if (checkPassword.length >= 5 && checkPassword.length <= 8) {
        error.css('color', '#f39c12');
        error.html('Mot de passe moyen');
    } else if (checkPassword.length >= 9 && checkPassword.length <= 49) {
        error.css('color', '#27ae60');
        error.html('Mot de passe fort');
    }
}

//Fonction check mdp

function checkConfirmPassword(idBis, id) {
    var error = $('span.error-' + idBis);
    var champ1 = $('input#' + idBis);
    var champ2 = $('input#' + id);
    var checkPassword = champ2.val();
    var password = champ1.val();

    if (checkPassword != password) {
        error.html('<i class="fas fa-times" style="color: #ff6b6b;"></i>')
    } else if (checkPassword === password) {
        error.html('<i class="fas fa-check" style="color: #51cf66;"></i>');
    }
}


//Fonction pur mettre ajours la base de donnée des trames
function connexionSuccess() {
    $.ajax({
        type: 'POST',
        url: 'https://floriandoyen.fr/resources/frames.php',
        data: '',
        dataType: 'json',

        beforeSend: function () {
        },

        success: function (response) {
            //console.log(response)
            $.ajax({
                type: 'POST',
                url: 'ajax/ajax-updateTrame.php',
                data: { trames: response },
                //dataType: 'json',

                success: function (response2) {
                    //console.log(response2)
                }
            })
        },
    })
    MicroModal.close('modal-login');
    window.location.replace("client-area.php");
}


function getLog(trames) {
    var html = '<div class="logTrame">'
    $.each(trames, function (i) {
        html += '<p>' + trames[i].log + '</p>'
    })
    html += '</div>';
    console.log(html)
    $('.box-log').append(html)
}
