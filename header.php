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
            <!--Bouton mode nuit-->
            <div class="darkmode_box">
                <input type="checkbox" id="Dark-mode">
                <label for="Dark-mode">
                  <i class="fas fa-moon"></i>
                  <i class="fas fa-sun"></i>
                  <div class="ball"></div>
                </label>
            </div>
              <a class="login-link" href="">Mes déclarations</a>
                <modal-app>
                  <div class="app-box">
                    <span class="app">
                        <a href="http://172.16.1.149/" target="_blank">
                          <img src="<?php echo get_template_directory_uri();?>/assets/app/ciril.svg" alt="CIRIL APP"/>
                          <p class="app-title">CIRIL</p>
                        </a>
                    </span>
                    <span class="app">
                      <a href="https://lapossession.exodata.fr/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/app/mail.svg" alt="ZIMBRA APP"/>  
                        <p class="app-title">ZIMBRA</p>
                      </a>
                    </span>
                    <span class="app">
                    <a href="http://courrier/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/app/cindoc.svg" alt="CINDOC APP"/>  
                        <p class="app-title">CINDOC</p>
                    </a>
                    </span>
                    <span class="app">
                      <a href="https://trello.com/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/app/trello.svg" alt="CINDOC APP"/>  
                        <p class="app-title">TRELLO</p>
                      </a>
                    </span>
                  </div>
                </modal-app>
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
