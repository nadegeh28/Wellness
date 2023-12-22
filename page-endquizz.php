
<?php get_header(); ?>
<title>End Quizz</title>
<br><br><br><br><br>





    <form id="personalityQuiz" action="http://localhost:8888/wellness-wordpress/endquizz/" method="post">
      <h3 id="endquizz">Nous avons élaboré un régime idéal <br>pour vous ! </h3>
     
      
      <input type="hidden" id="selectedOption" name="q1" value="">
      
      <br>
      <input type="submit" value="Profil" class="bouton-profil"> 

      <br>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/processus3.png"
  alt="Processus - <?php bloginfo('name');?>" class="processus">
    </form>

    
   








<?php get_footer(); ?>