<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['newQuestion']) && isset($_POST['newAnswer'])) {
        $question = $_POST['newQuestion'];
        $answer = $_POST['newAnswer'];

     
        $servername = "localhost";
        $username = "votre_nom_utilisateur";
        $password = "votre_mot_de_passe";
        $dbname = "nom_de_votre_base_de_donnees";

        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }


        $sql = "INSERT INTO nom_de_votre_table (question, answer) VALUES ('$question', '$answer')";

        if ($conn->query($sql) === TRUE) {
            echo "Nouvelle question et réponse ajoutées avec succès.";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>





<?php get_header(); ?>
<title>FAQ</title>
<br><br><br><br><br>

<h2 class="vertcl">N'hésitez pas à poser vos questions</h2>
<h2 class="vertf">ou à laisser des commentaires bienveillants.</h2>
<br>

<div class="faq">
    <div class="faq-content">
        <?php
      $questions_answers = array(
        array(
            'question' => 'Est-il possible d’adapter les recettes vegan à tout type de régime ?',
            'answer' => 'Oui, bien sûr, vous pouvez rajouter la viande de votre choix dans la recette en plus des légumes proposés.'
        ),

    
             
             array(
                 'question' => 'Je laisse un petit message d’encouragement pour tout ceux qui ont 
                 besoin d’un peu d’encouragement, vous êtes tous courageux. 
                 Bonne chance et faites confiance à Wellness. ',
                 'answer' => 'Réponse à la question 2.'
             ),
 
             array(
                 'question' => 'J’aimerais goûter une recette d’un régime simple mais je suis vegan ',
                 'answer' => 'Vous pouvez bien évidement adapter, votre recette, retirez la viande et y mettre des légumes.'
             ),
             array(
                 'question' => 'Les amis, Wellness est vraiment géniales, je me sens si bien dans ma 
                 peau ',
                 'answer' => 'Nous sommes là pour ça :).'
             ),
             array(
                 'question' => 'Wellness is super cool!!!! ',
                 'answer' => 'Thanks to you!!!'
             ),
             array(
                 'question' => 'J’aimerais essayer mais je ne sais pas par où commencer. ',
                 'answer' => 'Nous pensons à tout et à tous.'
             ),
             array(
                 'question' => 'Est-ce que quelqu’un peut me dire si ça en vaut la peine ?   ',
                 'answer' => 'Personnellement j’utilise Wellness depuis des mois et je vois le changement physique et mentale, 
                 c’est cool d’avoir des idées de recettes qui sont variés basés sur le régime qui nous va le mieux mais 
                 aussi avoir la possibilités de pouvoir visualiser notre consommation en glucide, lipide et protéine grâce 
                 à notre graphique personnalisé.'
             )

             );


        foreach ($questions_answers as $index => $qa) {
        ?>
            <div class="question">
                <h3 class="question-title" onclick="toggleAnswer(<?php echo $index; ?>)"><?php echo $qa['question']; ?></h3>
                <p class="answer" onclick="editAnswer(this)" id="answer_<?php echo $index; ?>"><?php echo $qa['answer']; ?></p>
                <div class="add-answer">
                    <label for="newAnswer_<?php echo $index; ?>"></label>
                    <input type="text" id="newAnswer_<?php echo $index; ?>" name="newAnswer" required>
                    <input type="button" value="Répondre" onclick="addNewAnswer(<?php echo $index; ?>)" class="submit-btn2">
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="add-question">
        <p class="poser">Vous n'avez pas trouvé votre question ?</p>
        <div class="ask">
            <label for="newQuestion"></label>
            <input type="text" id="newQuestion" name="newQuestion" required>
            <input type="button" value="Posez-là" onclick="askQuestion()" class="submit-btn">
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<?php get_footer(); ?>









