<?php wp_footer(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">


<footer>
    <div class="container">
        <div class="row mx-0">
            <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logowellness.png" class="imground" alt="BrandLogo - <?php bloginfo('LogoWellness');?>" width="150px" margin-top="70px" margin-bottom="100px">
            </div>

            <div class="col-md-3">
                <div class="footer-content">
                    <div class="footer-column">
                        <h6>Help</h6>
                        <a  href="http://localhost:8888/wellness-wordpress/condition-generales/" class="p3 lien-cache">Conditions générales</a>
                        <a  href="http://localhost:8888/wellness-wordpress/mentions-legales/" class="p3 lien-cache">Mentions légales</a>
                        <br>
                        <a  href="http://localhost:8888/wellness-wordpress/faq/" class="p3 lien-cache">FAQ</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-content">
                    <div class="footer-column">
                        <h6>Contact</h6>
                        <p class="p1">E-mail: contact@wellness.com</p>
                        <p class="p1">Téléphone: +32 2 312 54 76</p>
                        <p class="p1">Adresse: 111 Rue de la Poste 1030 Bruxelles Belgique</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/appstore1.png" alt="Appstore - <?php bloginfo('Appstore');?>" width="200px">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gooogleplay1.png" alt="GooglePlay - <?php bloginfo('Googleplay');?>" width="200px">
            </div>
        </div>
    </div>
</footer>
