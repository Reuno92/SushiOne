<?php
require_once '../vendor/autoload.php';
$formConnexion = new \Sushione\Form\Log_Admin();

include('asset/includes/doctype_admin.php');
?>
    <main class="login-admin">
        <section class="container">
            <div class="row">
                <article class="wrap-admin col-xs-12 col-sm-6 col-sm-offset-3">
                    <header class="login-head">
                        <img src="../images/logo_final.png" alt="logo sushione"/>
                        <p>Back-Office</p>
                    </header>

                    <form class="login-form" method="post" action="home.php">

                        <div class="login-wrap-form-label">
                            <label class="login-form-label" for="log">Identifiant:</label>
                            <input type="text" id="log" name="log"/>
                        </div> <!-- login-wrap-form-label -->

                        <div class="login-wrap-form-label">
                            <label class="login-form-label" for="mdp">Mot de passe:</label>
                            <input type="password" id="mdp" name="mdp" />
                        </div> <!-- login-wrap-form-label -->

                        <input class="btn-submit" type="submit" id="connexadmin" name="connexadmin" value="Connexion"/>
                    </form>
                </article>
            </div>
        </section>
    </main>
<?php include('asset/includes/footer_admin.php');