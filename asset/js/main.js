//PLUGIN MICROMODAL

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

var buttonLogin = document.getElementById('openModalLogin');
buttonLogin.addEventListener('click', function(){
  MicroModal.show('modal-login');
});

var buttonSignin = document.getElementById('openModalSignin');
buttonLogin.addEventListener('click', function(){
  MicroModal.show('modal-signin');
});

//MENU NAVIGATION

(function() {
    
    $.fatNav();
    
}());