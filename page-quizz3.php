<?php get_header(); ?>
<title>Quizz 3</title>
<br><br><br><br><br>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>


<form id="personalityQuiz" action="http://localhost:8888/wellness-wordpress/endquizz/" method="post">
    <h3>Avez-vous des restrictions alimentaires ?</h3>
    <input type="hidden" name="action" value="handle_personality_quiz">
      
    <div class="option-1" data-value="vegan">Pas de viande</div>
    <div class="option-2" data-value="contrainte">Contrainte médicale</div>
    <div class="option-3" data-value="pas-restriction">Pas de restrictions</div>
    <div class="resultat-3"></div>
    <input type="hidden" id="selectedOption" name="q1" value="">
      
    <br>
    <input type="submit" value="Suivant" id="boutonSuivant">

    <br>

    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/processus2.png" alt="Processus - <?php bloginfo('name');?>" class="processus">
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