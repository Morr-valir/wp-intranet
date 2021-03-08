<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="app">
      <!--Haut de page-->
      <header id="header" role="heading">
        <!--Navigation-->
        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
              <a class="navbar-item" href="<?php echo home_url( '/' ); ?>">
                <i class="fas fa-home"></i>
              </a>
            <menu-screen></menu-screen>
          </div>       
          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </div>
            <div class="navbar-end login">
            <div class="darkmode_box">
                <input type="checkbox" id="Dark-mode">
                <label for="Dark-mode">
                  <i class="fas fa-moon"></i>
                  <i class="fas fa-sun"></i>
                  <div class="ball"></div>
                </label>
              </div>
              <a class="login-link" href="/liste-formulaire">Mes déclarations</a>
              <Dropdown>
              <?php
              if ( ! is_user_logged_in() ) { // Display WordPress login form:
                wp_login_form();
              } else { // If logged in:
                  wp_loginout( home_url() ); // Display "Log Out" link.
                  echo " | ";
                  wp_register('', ''); // Display "Site Admin" link.
              }
              ?>
              </Dropdown>
              <a class="login-link alerte" href="">
                  <i class="fas fa-bell" mode="alerte"></i>
              </a>
            </div>
          </div>
        </nav>
      </header>
