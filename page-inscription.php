<?php get_header(); ?>
<title>Connexion</title>
<br>

<script src="https://apis.google.com/js/platform.js" async defer></script>



    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logowellness.png" alt="BrandLogo - <?php bloginfo('LogoWellness');?>" width="150px" style="display: block; margin: 0 auto;">


<a href="#" onclick="loginWithFacebook();" class="custom-button-fcbk">Sign up with Facebook</a>
<br>
<a href="#" onclick="loginWithApple();" class="custom-button-apple">Sign up with Apple</a>
<br>
<a href="#" onclick="loginWithGoogle();" class="custom-button-ggle">Sign up with Google</a>

<br>
<p class="ou">ou connectez vous avec:</p>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action" value="custom_login">
    <input type="email" name="user_email" id="email" placeholder="votre adresse e-mail" required class="email">
    <input type="password" name="user_password" id="password" placeholder="votre mot de passe" required class="password">
    
    <?php wp_nonce_field( 'custom_login_nonce', 'custom_login_nonce_field' ); ?>
    <input type="submit" value="Se connecter" class="login">
</form>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/processus2.png"
        alt="Processus - <?php bloginfo('name');?>" class="processus1">
<script>
  function loginWithFacebook() {
    FB.login(function(response) {
      if (response.authResponse) {
        console.log('Connexion Facebook réussie !');

      } else {
        console.log('Connexion Facebook annulée ou échouée.');
      }
    }, { scope: 'email' });
  }

  function loginWithGoogle() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signIn().then(function(googleUser) {
      console.log('Connexion Google réussie !');
      // Code pour gérer la connexion réussie
    }, function(error) {
      console.log('Connexion Google échouée.');
      // Code pour gérer l'échec de la connexion
    });
  }

  function loginWithApple() {
    // Votre code d'authentification Apple ici  
  }
</script>



<apple-signin
  auth-options="{
    'clientId': 'VOTRE_ID_CLIENT', 
    'scope': 'email', 
    'redirectURI': 'https://votre-site.com/redirect'
  }"
  redirect-uri="https://votre-site.com/redirect"
  onsuccess="appleSignInSuccess"
  oncancel="appleSignInCancel"
></apple-signin>



<?php get_footer(); ?>