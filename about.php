<?php 
/**
 * Template Name: About
 */
get_header();
?>
    <!-- PAGE MAIN -->
    <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
      <main class="page-wrapper__content">
        <section class="container-fluid_paddings">
          <!--about who we are start-->
          <div class="about-content">
            <div class="back-border-circle">
              <div class="back-boder-line">
                <div class="back-boder-centdr-line"></div>
              </div>
            </div>
            <div class="about-contrnts">
              <h2 class="fancy">Who We Are</h2>
              <p>At Conceptions India, our goal is to enhance the way you live by making most out of your space. We are
                artists and designers who are able to take your personality and transform it into well design art. We are
                here
                to create a one-of-a-kind portrait of who you are, how you live and what you love.</p>
              <p>Our team takes pride in creating luxurious and innovative homes that have a very intimate connection to
                our
                clients and their families. We understand each project we begin has specific needs, budgets, and a level
                of
                quality with the work involved. Each home starts with a personalized concept that directly correlates to
                these
                needs of our clients and their individual style.</p>
            </div>
          </div>
          <!--about who we are end-->
        </section>
      

        <!-- section PROJECTS SLIDER FULLSCREEN -->
        <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow"
          data-arts-theme-text="light" data-arts-os-animation>
          <div class="section-fullheight__inner section-fullheight__inner_mobile text-center">
            <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
              <!-- slider CONTENT -->
              <div
                class="slider-fullscreen-projects__content swiper-container pointer-events-none js-slider-fullscreen-projects__content">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="small-caps slider__subheading js-split-text split-text mb-1"
                      data-split-text-type="lines, words, chars" data-split-text-set="chars">Branding</div>
                    <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Nothern Wave
                    </h2>
                  </div>
                  <div class="swiper-slide">
                    <div class="small-caps slider__subheading js-split-text split-text mb-1"
                      data-split-text-type="lines, words, chars" data-split-text-set="chars">Identity</div>
                    <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Paysage
                      Fiction</h2>
                  </div>
                  <div class="swiper-slide">
                    <div class="small-caps slider__subheading js-split-text split-text mb-1"
                      data-split-text-type="lines, words, chars" data-split-text-set="chars">Identity</div>
                    <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Minimalex
                      Cosmetics
                    </h2>
                  </div>
                  <div class="swiper-slide">
                    <div class="small-caps slider__subheading js-split-text split-text mb-1"
                      data-split-text-type="lines, words, chars" data-split-text-set="chars">Photography</div>
                    <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Kinsey
                      Premium
                      Furniture</h2>
                  </div>
                </div>
              </div>
              <!-- - slider CONTENT -->
              <!-- slider IMAGES -->
              <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-direction="horizontal"
                data-transition-effect="enterLeave" data-speed="1200" data-autoplay-enabled="true"
                data-autoplay-delay="2000" data-counter-style="roman" data-touch-ratio="1.5" data-drag-mouse="true"
                data-drag-cursor="true" data-drag-class="slider-fullscreen-projects__images_scale-up">
                <div class="swiper-wrapper">
                  <div class="swiper-slide overflow">
                    <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                      <div class="slider__bg swiper-lazy js-transition-img__transformed-el"
                        data-background="<?= get_template_directory_uri();?>/assets/image/about-slide1.jpg"></div>
                    </div>
                  </div>
                  <div class="swiper-slide overflow">
                    <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                      <div class="slider__bg swiper-lazy js-transition-img__transformed-el"
                        data-background="<?= get_template_directory_uri();?>/assets/image/about-slide2.jpg"></div>
                    </div>
                  </div>
                  <div class="swiper-slide overflow">
                    <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                      <div class="slider__bg swiper-lazy js-transition-img__transformed-el"
                        data-background="<?= get_template_directory_uri();?>/assets/image/about-slide3.jpg"></div>
                    </div>
                  </div>
                  <div class="swiper-slide overflow">
                    <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                      <div class="slider__bg swiper-lazy js-transition-img__transformed-el"
                        data-background="<?= get_template_directory_uri();?>/assets/image/about-slide4.jpg"></div>
                    </div>
                  </div>
                </div>
                <!-- overlay-->
                <div class="slider__overlay overlay overlay_dark"></div>
                <!-- - overlay-->
              </div>
              <!-- - slider IMAGES -->

              <!-- slider COUNTER -->
              <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                <div class="slider__counter slider__counter_current">
                  <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                    <div class="swiper-wrapper"></div>
                  </div>
                </div>
                <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total"></div>
              </div>
              <!-- - slider COUNTER -->
              <!-- slider ARROWS -->
              <div class="slider__arrow slider__arrow_left slider__arrow_absolute js-slider__arrow-prev">
                <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor"
                  data-arts-cursor-hide-native="true" data-arts-cursor-scale="0"
                  data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                  <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                  </svg>
                  <div class="arrow__pointer arrow-left__pointer"></div>
                  <div class="arrow__triangle"></div>
                </div>
              </div>
              <div class="slider__arrow slider__arrow_right slider__arrow_absolute js-slider__arrow-next">
                <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor"
                  data-arts-cursor-hide-native="true" data-arts-cursor-scale="0"
                  data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                  <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                  </svg>
                  <div class="arrow__pointer arrow-right__pointer"></div>
                  <div class="arrow__triangle"></div>
                </div>
              </div>
              <!-- - slider ARROWS -->
            </div>
          </div>
        </section>
        <!-- - section PROJECTS SLIDER FULLSCREEN -->

        <!--about WORK STAGES start-->
        <div class="about-work-stage">
          <h1>WORK STAGES</h1>
          <div class="about-work-stage-content">
            <div class="about-border-circle">
              <div class="cricle-content1">PRESENTATION</div>
              <div class="cricle-content2">DESIGN CONTRACT</div>
              <div class="cricle-content3">SPACE LAYOUT</div>
              <div class="cricle-content4">VIZUALIZATION</div>
              <div class="cricle-content5">DRAWINGS</div>
              <div class="cricle-content6">DESIGN CONCEPT</div>
              <div class="cricle-content7">PROJECT CONTROL</div>
              <div class="cricle-content8">SELECTION OF MATERIALS</div>

              <div class="circle-image-slider circle">
                <div class="circle-slider-image">
                  <img src="<?= get_template_directory_uri();?>/assets/image/circle-slider1.jpg" alt="slider image">
                  <h3>Modular kitchen</h3>
                </div>
                <div class="circle-slider-image">
                  <img src="<?= get_template_directory_uri();?>/assets/image/circle-slider2.jpg" alt="slider image">
                  <h3>Wardrobes</h3>
                </div>
                <div class="circle-slider-image">
                  <img src="<?= get_template_directory_uri();?>/assets/image/circle-slider3.jpg" alt="slider image">
                  <h3>Dressing Units</h3>
                </div>
                <div class="circle-slider-image">
                  <img src="<?= get_template_directory_uri();?>/assets/image/circle-slider4.jpg" alt="slider image">
                  <h3>Entertainment Units</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--about WORK STAGES end-->


            <!--about OUR TEAM start-->
            <div class="about-our-teem">
              <h2>OUR TEAM</h2>
              <div class="our-team-content">
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team1.jpg" alt="team1">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team2.jpg" alt="team2">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team3.jpg" alt="team3">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team8.jpg" alt="team4">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team5.jpg" alt="team5">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team6.jpg" alt="team6">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
            
                <div class="our-team-member">
                  <img src="<?= get_template_directory_uri();?>/assets/image/team7.jpg" alt="team7">
                  <div class="team-member-details">
                    <h3>VICTORIA</h3>
                    <p>Creative director</p>
                  </div>
                </div>
                <div class="our-team-member">
                  <div class="join-the-team">
                    <a href="#">JOIN THE TEAM</a>
                    <svg width="108" class="resiz" preserveAspectRatio="none" height="5" viewBox="0 0 108 5" fill="none"
                      xmlns="http://www.w3.org/2000/svg" style="width: 120px;">
                      <path
                        d="M1 4C4.41984 3.90335 7.57562 3.49649 10.9745 3.23433C24.1989 2.21431 37.9352 1.2828 51.2348 1.10828C69.8009 0.864635 88.4302 1.10831 107 1.10831"
                        stroke="#F34B3A" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <!--about OUR TEAM end-->
      </main>
<?php get_footer();?>

