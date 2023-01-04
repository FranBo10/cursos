<?php
/**
* Template Name: Home
*
* @package WordPress
*/
get_header();
?>
        <section class="section-1 BoxOne">
          <div class="title__content">
            <div class="title__container">              
                  <h2>Continua formandote en la carrera de la vida</h2>
                  <p>
                    Con nuestros cursos online te ayudamos a mejorar tus aptitudes para cumplir las metas que te propongas.
                  </p> 
            </div>
          </div>
        </section>     
        
        <section>
          <div class="redes__container">
                <h3 class="d-flex align-items-center text-2 gap-1">
                  <i class="fa-brands fa-vimeo"></i> Vimeo
                </h3>              
                <h3 class="d-flex align-items-center gap-1">
                  <i class="fa-brands fa-pinterest"></i> Pinterest
                </h3>
                <h3 class="d-flex align-items-center gap-1">
                  <i class="fa-brands fa-apple"></i> Apple
                </h3>
                <h3 class="d-flex align-items-center gap-1">
                  <i class="fa-brands fa-facebook"></i> Facebook
                </h3>
          </div>
        </section>
        <section class="section__cursos">
            <div id= "cursos" class="container">
              <div class="popular__container">
                <div class="popular__content">   
                  <div class="title__cursos">             
                    <h2>Nuestra oferta formativa</h2>
                  </div>
                </div>
              </div>
            </div>     
            <?php
              $eventos = PostTypeSection('lp_course');
              if (!empty($eventos)) {
                  ?>
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <?php
                      foreach ($eventos as $evt => $array) {
                        ?>     
                        <div class="fichas__cursos swiper-slide">
                          <img src="<?php echo $array["urlImg"]?>"alt="imagen"/>
                          <div class="course__container">
                              <div  class="course__title">
                                <h2>
                                  <?php
                                  echo $array["name"];
                                  ?>
                                </h2>
                              </div>
                              <div class="course__content">
                                <div class="content-1">
                                  <div class="lecciones__curso"><i class="fa-solid fa-bookmark"></i>
                                  <?php echo $array       ['_lp_info_extra_fast_query'] -> total_items -> lp_lesson ?> lecciones
                                  </div>
                                  <div class="precio__curso">
                                      <h2>
                                      <?php
                                      echo ($array["_lp_price"] == 0) ? "Gratis" : $array["_lp_price"]."€";
                                      ?>
                                      </h2>
                                  </div>
                                </div>
                                <div class="content-2">
                                    <a class="buy__button" tabindex="0" role="button" aria-disabled="false" href="<?php echo $array["link"]?>">Mas informacion</a>
                                </div>  
                              </div>
                          </div> 
                        </div>
                        <?php                  
                      } 
                      ?>
                      
                    </div> 
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-button-next swiper-navBtn"></div>  
                  </div> 
                  <?php
                  
               
              } else {
                 ?>
                  <h4> NO HAY CURSOS DISPONIBLES !! </h4>
                            
                <?php

              }
            ?>      
        </section>
        <section class="BoxTwo">
            <div  id="formacion" class="choose__container">
                <div class="choose__content">
                  <h2>Why Choose Us</h2>
                  <h5>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Incidunt mollitia nostrum harum eos praesentium odit a sed
                    quod aut fugit. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Reprehenderit omnis, culpa eligendi
                    inventore perspiciatis minus. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Dolores cupiditate facilis
                    provident quidem accusamus impedit tenetur laboriosam
                    debitis nisi eius!
                  </h5>
                </div>
                <div class="choose__img">
                  <img
                  src="<?php echo get_bloginfo('template_url')?>\assets\images\why-choose-us.png"
                    alt=""
                    class="w-100"
                  /><span class="play__icon"
                    ><i class="fa-solid fa-play"></i></i
                  ></span>
                </div>              
            </div>          
        </section>
        <section>
          <div class="certification__container">
            <div class="certification__content">
                <div class="single__feature text-center px-4">
                  <h2 class="mb-3"><i class="fa-solid fa-brain"></i></h2>
                  <h6>Quick Learning</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nostrum molestias, aperiam doloribus aut sapiente
                    praesentium eos iste dicta amet itaque!
                  </p>
                </div>
                <div class="single__feature text-center px-4">
                  <h2 class="mb-3"><i class="fa-solid fa-comments"></i></h2>
                  <h6>All Time Support</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nostrum molestias, aperiam doloribus aut sapiente
                    praesentium eos iste dicta amet itaque!
                  </p>
                </div>
                <div class="single__feature text-center px-4">
                  <h2 class="mb-3"><i class="fa-solid fa-graduation-cap"></i></h2>
                  <h6>Certification</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nostrum molestias, aperiam doloribus aut sapiente
                    praesentium eos iste dicta amet itaque!
                  </p>
                </div>
            </div>
          </div>
        </section>
        
        
        <section>
          <div class="newsletter container">
                <div class="newsletter__content">
                  <h2 class="mb-4">Suscribete a nuestro Newsletter</h2>
                  <div class="subscribe">
                    <input type="text" placeholder="Email" />
                    <button>
                      Subscribe
                    </button>
                  </div>
                </div>
              </div>
          </div>
        </section>

  <?php get_footer()?>
 