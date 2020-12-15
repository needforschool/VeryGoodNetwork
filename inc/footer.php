        <!--MODAL LOGIN-->

        <div class="modal micromodal-slide" id="modal-login" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-login-title">
                    <header class="modal__header">
                        <h2 class="modal__title" id="modal-login-title">
                            Login
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <form>
                        <div class="modal__content" id="modal-login-content">

                            <div class="input-area">
                                <label for="email-login">Votre email</label>
                                <input type="email" id="email-login" name="email-login">
                                <span class="error-email-login"></span>
                            </div>

                            <div class="input-area">
                                <label for="password-login">Votre mot de passe</label>
                                <input type="password" id="password-login" name="password-login">
                                <span class="error-password-login"></span>
                            </div>
                        </div>

                        <footer class="modal__footer">
                            <input type="submit" name="submitted" class="modal__btn modal__btn-primary" value="Se Connecter">
                            <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
        
        
        
        
        
        <footer>
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!-- fatNav -->
        <script type="text/javascript" src="asset/js/jquery.fatNav.min.js"></script>

        <!--Chart.js-->
        <!--MicroModal-->
        <script src="asset/js/micromodal.min.js"></script>
        <!--JS Perso-->
        <script src="asset/js/main.js" type="text/javascript"></script>
        </footer>
    </body>
</html>