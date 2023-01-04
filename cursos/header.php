<html lang="en">
  <head>
    <meta charset="UTF-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="document"
      content="cursos, formacion, aprender, online, academia, descargar"
    />
    <?php wp_head()?>  
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/assets/css/styles.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/assets/css/colors.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/assets/css/learnpress.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&display=swap" rel="stylesheet">
   
    <title>ContinuaFormandote</title>
  </head>
  <body>
    <div id="root">
      <header class="header">
        <div class="header_container ">
          <div
            class="navigation d-flex align-items-center justify-content-between">
            <div class="logo">
              <img src="<?php echo get_bloginfo('template_url')?>/assets/images/logo3.png" />
            </div>
            <div class="icono-menu">
              <span><i class="fa-solid fa-bars" id="icono-menu"></i></span>
            </div>

            <div class="nav d-flex align-items-center">
                <ul class="nav__list">
                  <li class="nav__item"><a href="#">Inicio</a></li>
                  <li class="nav__item">
                    <a href="#formacion">La formacion</a>
                  </li>
                  <li class="nav__item"><a href="#cursos">Cursos</a></li>
                  <li class="nav__item"><a href="#">FAQ</a></li>
                </ul> 
                        
                <div class="nav__right">                  
                  <a class="register__btn" href="<?php echo $array["link"]?>">Registrate</a>
                  <a class="session__btn" href="<?php echo $array["link"]?>">Iniciar sesion</a>
                </div>
            </div>                    
          </div>
        </div>
        
        <script src="<?php echo get_bloginfo('template_url')?>/assets/js/app.js"></script>
        <script
      src="https://kit.fontawesome.com/4fbf4a6bad.js"
      crossorigin="anonymous"
    ></script>
      </header>