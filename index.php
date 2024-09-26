<?php get_header();?>
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-dark-1"  id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="#fff"></section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS SLIDER FULLSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile text-center">
              <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- slider CONTENT -->
                <div class="slider-fullscreen-projects__content swiper-container js-slider-fullscreen-projects__content">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img class="center-logo" src="<?= get_template_directory_uri();?>/img/logo.png" width="100" alt="conceptionsindia">
                    </div>
                    <div class="swiper-slide">
                      <img class="center-logo" src="<?= get_template_directory_uri();?>/img/logo.png" width="100" alt="conceptionsindia">
                    </div>
                    <div class="swiper-slide">
                      <img class="center-logo" src="<?= get_template_directory_uri();?>/img/logo.png" width="100" alt="conceptionsindia">
                    </div>
                  </div>
                </div>
                <!-- - slider CONTENT -->
                <!-- slider IMAGES -->
                <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-transition-effect="distortion" data-aspect-ratio="1.5" data-transition-displacement-img="img/general/bg-displacement-7.jpg" data-speed="1200" data-autoplay-enabled="true" data-autoplay-delay="6000" data-counter-style="roman">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                        <div class="slider__bg lazy-bg js-transition-img__transformed-el" data-texture-src="<?= get_template_directory_uri();?>/img/assets/projects/slide_1.jpg"></div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                        <div class="slider__bg lazy-bg js-transition-img__transformed-el" data-texture-src="<?= get_template_directory_uri();?>/img/assets/projects/slide_2.jpg"></div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                        <div class="slider__bg lazy-bg js-transition-img__transformed-el" data-texture-src="<?= get_template_directory_uri();?>/img/assets/projects/slide_3.jpg"></div>
                      </div>
                    </div>
                 
                  </div>
                  <!-- overlay --> 
                  <div class="slider__overlay overlay overlay_circle-darkq" style="background-image: radial-gradient(circle at center, rgba(0, 0, 0, 0) 0%, #00000099 90%, black 100%);
"></div>
                  <!-- <div class="slider__circle"></div> -->
                  <!-- - overlay -->
                </div>
                <!-- - slider IMAGES -->
                <!-- slider FOOTER -->
                <div class="slider-fullscreen-projects__footer swiper-container js-slider-fullscreen-projects__footer">
                    <div class="all_works_explore_container" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <!-- <a class="all_works" href="#">All Projects</a> -->
                      <a href="#" class="all_works">
                    <svg width="104" height="100" viewBox="0 0 104 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M43.2115 44L47.3715 34.9L48.3205 34.9L52.4805 44L51.4665 44L47.6445 35.459L48.0345 35.459L44.2125 44L43.2115 44ZM44.8495 41.569L45.1355 40.789L50.4265 40.789L50.7125 41.569L44.8495 41.569ZM53.9859 44L53.9859 34.9L54.9479 34.9L54.9479 43.168L60.0439 43.168L60.0439 44L53.9859 44ZM61.6412 44L61.6412 34.9L62.6032 34.9L62.6032 43.168L67.6992 43.168L67.6992 44L61.6412 44ZM33.2839 60L30.2159 50.9L31.2039 50.9L34.0769 59.467L33.5829 59.467L36.5469 50.9L37.4309 50.9L40.3559 59.467L39.8879 59.467L42.7869 50.9L43.7099 50.9L40.6419 60L39.6279 60L36.8329 51.875L37.0929 51.875L34.2849 60L33.2839 60ZM49.3755 60.078C48.6909 60.078 48.0539 59.9653 47.4645 59.74C46.8839 59.506 46.3769 59.181 45.9435 58.765C45.5189 58.3403 45.1852 57.8507 44.9425 57.296C44.7085 56.7327 44.5915 56.1173 44.5915 55.45C44.5915 54.7827 44.7085 54.1717 44.9425 53.617C45.1852 53.0537 45.5189 52.564 45.9435 52.148C46.3769 51.7233 46.8839 51.3983 47.4645 51.173C48.0452 50.939 48.6822 50.822 49.3755 50.822C50.0602 50.822 50.6929 50.939 51.2735 51.173C51.8542 51.3983 52.3569 51.719 52.7815 52.135C53.2149 52.551 53.5485 53.0407 53.7825 53.604C54.0252 54.1673 54.1465 54.7827 54.1465 55.45C54.1465 56.1173 54.0252 56.7327 53.7825 57.296C53.5485 57.8593 53.2149 58.349 52.7815 58.765C52.3569 59.181 51.8542 59.506 51.2735 59.74C50.6929 59.9653 50.0602 60.078 49.3755 60.078ZM49.3755 59.22C49.9215 59.22 50.4242 59.129 50.8835 58.947C51.3515 58.7563 51.7545 58.492 52.0925 58.154C52.4392 57.8073 52.7079 57.4087 52.8985 56.958C53.0892 56.4987 53.1845 55.996 53.1845 55.45C53.1845 54.904 53.0892 54.4057 52.8985 53.955C52.7079 53.4957 52.4392 53.097 52.0925 52.759C51.7545 52.4123 51.3515 52.148 50.8835 51.966C50.4242 51.7753 49.9215 51.68 49.3755 51.68C48.8295 51.68 48.3225 51.7753 47.8545 51.966C47.3865 52.148 46.9792 52.4123 46.6325 52.759C46.2945 53.097 46.0259 53.4957 45.8265 53.955C45.6359 54.4057 45.5405 54.904 45.5405 55.45C45.5405 55.9873 45.6359 56.4857 45.8265 56.945C46.0259 57.4043 46.2945 57.8073 46.6325 58.154C46.9792 58.492 47.3865 58.7563 47.8545 58.947C48.3225 59.129 48.8295 59.22 49.3755 59.22ZM56.3028 60L56.3028 50.9L59.7088 50.9C60.4801 50.9 61.1431 51.0257 61.6978 51.277C62.2525 51.5197 62.6771 51.875 62.9718 52.343C63.2751 52.8023 63.4268 53.3613 63.4268 54.02C63.4268 54.6613 63.2751 55.216 62.9718 55.684C62.6771 56.1433 62.2525 56.4987 61.6978 56.75C61.1431 56.9927 60.4801 57.114 59.7088 57.114L56.8358 57.114L57.2648 56.672L57.2648 60L56.3028 60ZM62.5168 60L60.1768 56.698L61.2168 56.698L63.5698 60L62.5168 60ZM57.2648 56.75L56.8358 56.295L59.6828 56.295C60.5928 56.295 61.2818 56.0957 61.7498 55.697C62.2265 55.2983 62.4648 54.7393 62.4648 54.02C62.4648 53.292 62.2265 52.7287 61.7498 52.33C61.2818 51.9313 60.5928 51.732 59.6828 51.732L56.8358 51.732L57.2648 51.277L57.2648 56.75ZM66.5293 57.738L66.4903 56.568L72.0023 50.9L73.1073 50.9L69.0903 55.112L68.5443 55.697L66.5293 57.738ZM65.6973 60L65.6973 50.9L66.6593 50.9L66.6593 60L65.6973 60ZM72.2363 60L68.3103 55.476L68.9603 54.774L73.3803 60L72.2363 60ZM77.2581 60.078C76.5821 60.078 75.9321 59.9697 75.3081 59.753C74.6928 59.5277 74.2161 59.2417 73.8781 58.895L74.2551 58.154C74.5758 58.466 75.0048 58.7303 75.5421 58.947C76.0881 59.155 76.6601 59.259 77.2581 59.259C77.8301 59.259 78.2938 59.1897 78.6491 59.051C79.0131 58.9037 79.2774 58.7087 79.4421 58.466C79.6154 58.2233 79.7021 57.9547 79.7021 57.66C79.7021 57.3047 79.5981 57.0187 79.3901 56.802C79.1908 56.5853 78.9264 56.4163 78.5971 56.295C78.2678 56.165 77.9038 56.0523 77.5051 55.957C77.1064 55.8617 76.7078 55.762 76.3091 55.658C75.9104 55.5453 75.5421 55.398 75.2041 55.216C74.8748 55.034 74.6061 54.7957 74.3981 54.501C74.1988 54.1977 74.0991 53.8033 74.0991 53.318C74.0991 52.8673 74.2161 52.4557 74.4501 52.083C74.6928 51.7017 75.0611 51.3983 75.5551 51.173C76.0491 50.939 76.6818 50.822 77.4531 50.822C77.9644 50.822 78.4714 50.8957 78.9741 51.043C79.4768 51.1817 79.9101 51.3767 80.2741 51.628L79.9491 52.395C79.5591 52.135 79.1431 51.9443 78.7011 51.823C78.2678 51.7017 77.8474 51.641 77.4401 51.641C76.8941 51.641 76.4434 51.7147 76.0881 51.862C75.7328 52.0093 75.4684 52.2087 75.2951 52.46C75.1304 52.7027 75.0481 52.98 75.0481 53.292C75.0481 53.6473 75.1478 53.9333 75.3471 54.15C75.5551 54.3667 75.8238 54.5357 76.1531 54.657C76.4911 54.7783 76.8594 54.8867 77.2581 54.982C77.6568 55.0773 78.0511 55.1813 78.4411 55.294C78.8398 55.4067 79.2038 55.554 79.5331 55.736C79.8711 55.9093 80.1398 56.1433 80.3391 56.438C80.5471 56.7327 80.6511 57.1183 80.6511 57.595C80.6511 58.037 80.5298 58.4487 80.2871 58.83C80.0444 59.2027 79.6718 59.506 79.1691 59.74C78.6751 59.9653 78.0381 60.078 77.2581 60.078Z" fill="white"/>
                       <path id="Vector_2" d="M2 47.9606C2 47.9606 4.88959 4.15976 46.1071 1.18161C78.9502 -1.20091 92.0896 20.3962 97.0183 34.4155C101.38 46.8134 104.858 81.4592 65.5818 94.905C24.8986 108.847 10.1126 72.2049 8.72783 62.1895C7.34301 52.1741 7.34301 25.4039 32.1062 10.083C56.5205 -4.99529 81.0438 3.57516 93.4963 19.7564C102.885 31.9668 111.51 65.653 87.1283 88.3751C65.8108 106.487 31.3429 95.3131 22.009 79.551C15.3575 68.3002 16.2407 54.1044 16.2407 54.1044" stroke="#E96A5B" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                    </svg>



                      </a>
                    </div>
                  <div class="row">
                    <div class="footer_left col-md-6 col-sm-12 d-flex justify-content-start">
                      <?php 
                        $get_phone_number = get_theme_mod('phone_number');
                        if ($get_phone_number !== '') {?>
                          <div class="phone">
                            <p class="footer_left_content" data-arts-cursor-magnetic="data-arts-cursor-magnetic">T: 
                              <a href="tel:<?= $get_phone_number; ?>"><?= $get_phone_number?></a></p>
                          </div><?php  } ?>

                    </div>
                    <div class="footer_right col-md-6 col-sm-12 d-flex justify-content-end">
                      <?php 
                      $get_email = get_theme_mod('home_email');
                      if ($get_email !=='') {?>
                      <div class="email">
                        <p class="footer_right_content" data-arts-cursor-magnetic="data-arts-cursor-magnetic">E: 
                          <a href="mailto:<?= $get_email; ?>"> <?= $get_email;?></a></p>
                      </div>
                      <?php } ?>
                      
                    </div>
                  </div>
                </div>
                <!-- - slider FOOTER -->
                <!-- slider COUNTER -->
                <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                  <div class="slider__counter slider__counter_current">
                    <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                      <div class="swiper-wrapper"></div>
                    </div>
                  </div>
                  <!-- <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                  <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total"></div> -->
                </div>
                <!-- - slider COUNTER -->
                <!-- slider ARROWS -->
                <div class="slider__arrow slider__arrow_left slider__arrow_absolute js-slider__arrow-prev">
                  <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <!--<circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>-->
                    </svg>
                    <div class="arrow__pointer arrow-left__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <div class="slider__arrow slider__arrow_right slider__arrow_absolute js-slider__arrow-next">
                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <!--<circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>-->
                    </svg>
                    <div class="arrow__pointer arrow-right__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <!-- - slider ARROWS -->
                <!-- slider CANVAS -->
                <div class="slider__wrapper-canvas">
                  <div class="slider__wrapper-canvas-inner">
                    <canvas class="slider__canvas"></canvas>
                  </div>
                </div>
                <!-- - slider CANVAS -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER FULLSCREEN -->
        </main>
        <!-- PAGE FOOTER -->
        <!-- - PAGE FOOTER -->
      </div>
      <!-- - PAGE MAIN -->
    </div>
<?php get_footer();?>