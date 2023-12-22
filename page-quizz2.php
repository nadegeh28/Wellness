<?php get_header(); ?>
<title>Quizz 2</title>
<br><br><br><br><br>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>



    <form id="personalityQuiz" action="http://localhost:8888/wellness-wordpress/quizz3/" method="post">
      <h3>Que souhaitez-vous priviliégier dans votre régime ?</h3>
      <input type="hidden" name="action" value="handle_personality_quiz">
      
      <div class="option-1" data-value="alimentation">Alimentation de qualité</div>
      <div class="option-2" data-value="conscience">Conscience alimentaire</div>
      <div class="option-3" data-value="faible-sucre">Faible en sucre</div>
      <div class="resultat-2"></div>
      <input type="hidden" id="selectedOption" name="q1" value="">
      
      <br>
     
      <input type="submit" value="Suivant" id="boutonSuivant">

      <br>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/processus2.png"
  alt="Processus - <?php bloginfo('name');?>" class="processus">
    </form>

    <script>
    const options = document.querySelectorAll('#personalityQuiz .option');
    const selectedValues = [];

    options.forEach(option => {
        option.addEventListener('click', () => {
            const value = option.getAttribute('data-value');
            selectedValues.push(value);
            displayResult();
        });
    });

    function displayResult() {

    }
</script>

    
   








<?php get_footer(); ?>