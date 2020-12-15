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
    MicroModal.show('#modal-login');
});

var buttonSignin = $('#openModalSignin');
buttonSignin.on('click', function(){
    MicroModal.show('#modal-signin');
});

//----------------------
//PLUGIN MENU NAVIGATION
//----------------------

(function() {
    
    $.fatNav();
    
}());

//----------------------
//OUVERTURE JQUERY
//----------------------

$(document).ready(function(){

})