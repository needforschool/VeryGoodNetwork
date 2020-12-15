        <!--MODAL LOGIN-->

        <div class="modal micromodal-slide" id="modal-login" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-custom-close="modal-login">
                <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-login-title">
                    <header class="modal__header">
                        <h2 class="modal__title" id="modal-login-title">
                            Se connecter
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-login"></button>
                    </header>
                    <form id="formLogin" action="ajax/ajax-login.php" method="post" novalidate>
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
                        </footer>
                    </form>
                </div>
            </div>
        </div>


        <!--MODAL INSCRIPTION-->

        <div class="modal micromodal-slide" id="modal-signin" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-custom-close="modal-signin">
                <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-signin-title">
                    <header class="modal__header">
                        <h2 class="modal__title" id="modal-signin-title">
                            S'inscrire
                            <i class="fas fa-sign-in-alt"></i>
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-signin"></button>
                    </header>
                    <form id="formSignin" action="ajax/ajax-signin.php" method="post" novalidate>
                        <div class="modal__content" id="modal-signin-content">

                            <div class="input-area">
                                <label for="nom-signin">Votre nom</label>
                                <input type="text" id="nom-signin" name="nom-signin">
                                <span class="error-nom-signin"></span>
                            </div>

                            <div class="input-area">
                                <label for="prenom-signin">Votre prenom</label>
                                <input type="text" id="prenom-signin" name="prenom-signin">
                                <span class="error-prenom-signin"></span>
                            </div>

                            <div class="input-area">
                                <label for="email-signin">Votre email</label>
                                <input type="email" id="email-signin" name="email-signin">
                                <span class="error-email-signin"></span>
                            </div>

                            <div class="input-area">
                                <label for="password-signin">Votre mot de passe</label>
                                <input type="password" id="password-signin" name="password-signin">
                                <span class="error-password-signin"></span>
                            </div>
                        </div>

                        <footer class="modal__footer">
                            <input type="submit" name="submitted" class="modal__btn modal__btn-primary" value="S'inscrire">
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