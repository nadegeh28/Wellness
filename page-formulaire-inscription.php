
<?php get_header(); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] === 'inscription_form') {
    $nom = sanitize_text_field($_POST['nom']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    $motdepasse = $_POST['motdepasse'];
    $motdepasse_confirm = $_POST['motdepasse-confirm'];

    if ($motdepasse !== $motdepasse_confirm) {
        echo '<div class="mdp">Les mots de passe ne correspondent pas.</div>';
    } else {
        $user_data = array(
            'user_login' => $nom,
            'user_email' => $email,
            'user_pass'  => $motdepasse,
            'first_name' => $prenom
        );

        $user_id = wp_insert_user($user_data);

        if (!is_wp_error($user_id)) {
            $confirmation_message = "Inscription réussie ! Vous pouvez maintenant accéder au quizz.";
            echo '<div class="inscription-success-message">' . esc_html($confirmation_message) . '</div>';
            echo '<a href="http://localhost:8888/wellness-wordpress/quizz1/" class="accederquizz">Accéder au quizz</a>';
        } else {
            echo "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
            echo '<div class="erreur"></div>';
        }
    }
}
?>


<title>Formulaire</title>
<br><br><br><br><br>

<form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div>
        <label for="email">Adresse Email :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
    </div>
    <div>
        <label for="motdepasse-confirm">Confirmer le mot de passe :</label>
        <input type="password" id="motdepasse-confirm" name="motdepasse-confirm" required>
    </div>
    <button type="submit" class="inscription" name="submit" value="inscription_form">S'inscrire</button>
</form>



<img src="<?php echo get_template_directory_uri(); ?>/assets/img/processus2.png"
        alt="Processus - <?php bloginfo('name');?>" class="processus1">

<?php get_footer(); ?>











