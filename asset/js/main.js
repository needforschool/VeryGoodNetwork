<<<<<<< HEAD
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

var buttonLogin = $('#openModalLogin');
buttonLogin.on('click', function(){
});

var buttonSignin = $('#openModalSignin');
buttonSignin.on('click', function(){
});

//----------------------
//PLUGIN MENU NAVIGATION
//----------------------

(function() {
    
    $.fatNav();
    
}());

=======
>>>>>>> bf17e4c5f531c0414f900d45607e1d152efddfc2
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


//----------------------
//FERMETURE JQUERY
//----------------------
})