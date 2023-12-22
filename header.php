<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <?php wp_head(); ?>


</head>


  <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logowellness.png"
          alt="BrandLogo - <?php bloginfo('LogoWellness');?>" width="100px">
    </div>

    <div class="text-center">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/wellness-wordpress/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/wellness-wordpress/FAQ/">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/wellness-wordpress/regimes/">Diets</a>
        </li>
      </ul>
    </div>

    <div>
      <ul class="navbar-nav">
        <li class="nav-item1">
          <a class="nav-link active" aria-current="page" href="http://localhost:8888/wellness-wordpress/inscription/#">Log in</a>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" aria-current="page" href="http://localhost:8888/wellness-wordpress/formulaire-inscription/">Sign up</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fr</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">En</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


