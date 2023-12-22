<?php get_header(); ?>
<title>Quizz 1</title>
<br><br><br><br><br>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<form id="personalityQuiz" action="http://localhost:8888/wellness-wordpress/quizz2/" method="post">
    <h3>Que désirez-vous ?</h3>
    <input type="hidden" name="action" value="handle_personality_quiz">
    <div class="option-1" data-value="bonne-hygiène1">Perdre du poids</div>
    <div class="option-2" data-value="perdre-du-poids1">Trouver un régime</div>
    <div class="option-3" data-value="trouver-un-régime1">Avoir une bonne hygiène de vie</div>
    <div class="resultat-1"></div>
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



