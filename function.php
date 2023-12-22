<?php

add_theme_support('title-tag'); 
add_theme_support('post-thumbnails'); 

register_nav_menu('header', 
'En tête du menu');


function wpbootstrap_styles_scripts(){
  wp_enqueue_style(
    'style', 
    get_stylesheet_uri()
  );
    wp_enqueue_style(
      'bootstrap', '
      	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    
        wp_enqueue_script
        ('bootstrap-bundle', 
        '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', 
        false, 
        1, 
        true
      );

    
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts'); 

function ajouter_styles_personnalises() {
  wp_enqueue_style(
    'style-personnalise', 
    get_template_directory_uri() . '/assets/css/app.css');
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');


function mon_footer_personnalise() {
  wp_enqueue_style(
    'style-personnalise',
    get_template_directory_uri() . '/assets/css/app.css');

  
}


add_action('wp_footer', 'mon_footer_personnalise');



function enqueue_quiz_script() {
  wp_enqueue_style(

      'style-personnalise', 
      get_template_directory_uri() . 
      
      '/assets/css/app.css'
  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_quiz_script' );

function enqueue_custom_script() {
  if (is_page(array('page.php' , 'page-quizz2.php', 'page-quizz3.php', 'page-information.php', 'page-faq.php'))) {
      wp_enqueue_script(
          'custom-script',
          get_template_directory_uri() . '/assets/js/custom.js',
          array('jquery'),
          '',
          true
      );
  }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_script');


function enqueue_style_personnalise_for_information_page() {
  if (is_page_template('page-information.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_page_information');


function enqueue_style_personnalise_for_condition_generales_page() {
  if (is_page_template('page-condition-generales.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_page_condition_generales');

function enqueue_style_personnalise_for_mentions_legales_page() {
  if (is_page_template('page-mentions-legales.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_mentions_legales_page');



function enqueue_style_personnalise_for_regimes_page() {
  if (is_page_template('page-regimes.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_page_regimes');



add_shortcode('faq', 'custom_faq_shortcode');


function create_custom_table() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'custom_faq_table';

  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      question text NOT NULL,
      answer text NOT NULL,
      PRIMARY KEY  (id)
  ) $charset_collate;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_custom_table');


function add_question_answer($question, $answer) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'custom_faq_table';

  $wpdb->insert(
      $table_name,
      array(
          'question' => $question,
          'answer' => $answer
      )
  );
}


function display_custom_faq() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'custom_faq_table';

  $questions_answers = $wpdb->get_results("SELECT * FROM $table_name", ARRAY_A);

 
  foreach ($questions_answers as $qa) {
      echo '<div class="question">';
      echo '<h3 class="question-title">' . esc_html($qa['question']) . '</h3>';
      echo '<p class="answer">' . esc_html($qa['answer']) . '</p>';
      echo '</div>';
  }
}

function custom_login() {
  if (isset($_POST['custom_login_nonce_field']) && wp_verify_nonce($_POST['custom_login_nonce_field'], 'custom_login_nonce')) {
      $user_email = sanitize_email($_POST['user_email']);
      $user_password = $_POST['user_password'];

      $user = wp_authenticate($user_email, $user_password);

      if (!is_wp_error($user)) {

          wp_set_auth_cookie($user->ID, true);

      } else {

      }
  }
}
add_action('admin_post_nopriv_custom_login', 'custom_login');
add_action('admin_post_custom_login', 'custom_login');


function enqueue_style_personnalise_for_plat_vegan_page() {
  if (is_page_template('page-plat-vegan.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_page_plat_vegan');

function ajouter_scripts_quiz() {
  if (is_page_template('quizz1.php') || 
  is_page_template('quizz2.php') || 
  is_page_template('quizz3.php')) {
     
    wp_enqueue_script('custom-quiz-script', get_template_directory_uri() . '/assets/js//custom.js', 
    array('jquery'), 
    '1.0', 
    true);
      
  }
}
add_action('wp_enqueue_scripts', 'ajouter_scripts_quiz');

function enqueue_style_personnalise_for_404_2_page() {
  if (is_page_template('page-404-2.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_page_404_2');




function enqueue_style_personnalise_for_profil_page() {
  if (is_page_template('page-profil.php')) {
      wp_enqueue_style(
          'style-personnalise',
          get_template_directory_uri() . '/assets/css/app.css'
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_style_personnalise_for_profil_page');


// Rediriger l'utilisateur vers sa page de profil après la connexion
function redirect_to_profile() {
  if (is_user_logged_in()) {
      $user_id = get_current_user_id();
      $profile_page_slug = 'page-profil'; // Remplacez ceci par le slug de votre page profil
      $profile_url = get_permalink(get_page_by_path($profile_page_slug));
      wp_redirect($profile_url);
      exit;
  }
}
add_action('wp_login', 'redirect_to_profile', 10, 2);





















