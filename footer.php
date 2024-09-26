<?php 
if (!is_home()) {?>
    <!-- PAGE FOOTER -->
          <!-- PAGE FOOTER -->
          <footer class="footer container-fluid" id="page-footer" data-arts-theme-text="dark" data-arts-footer-logo="primary">
            <!-- widgets bottom area -->
            <div class="footer__area footer__area-border-top pt-sm-3 pb-sm-1 pt-2 pb-0">
              <div class="row align-items-center">
                <!-- widget LOGO -->
                <div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">

                </div>
                <!-- - widget LOGO -->
                <!-- widget SOCIAL -->
                <div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
                    <ul class="social">
                      <li><a href="<?php home_url('/')?>"></a></li>
                    </ul>
                    <!-- content -->
                    <?php 
                      $copyright_Text = get_theme_mod('copyright_text');
                      $facebook_link = get_theme_mod('footer_facebook_link');
                      $twitter_link = get_theme_mod('footer_twitter');
                      $instagram_link = get_theme_mod('footer_instagram');
                      $youtube_link = get_theme_mod('footer_youtube');
                    ?>
                    
                    <ul class="social">
                      <?php   if(!empty($facebook_link)){ ?>
                      <li class="social__item"><a class="fa fa-facebook-f" href="<?= esc_url($facebook_link); ?>"></a></li>
                      <?php } 
                      if(!empty($twitter_link)){
                      ?>
                      <li class="social__item"><a class="fa fa-twitter" href="<?= esc_url($twitter_link);?>"></a></li>
                      <?php }
                        if(!empty($instagram_link)){
                      ?>
                      <li class="social__item"><a class="fa fa-instagram" href="<?= esc_url($instagram_link); ?>"></a>
                      </li>
                      <?php }
                      if(!empty($youtube_link)){
                      ?>
                      <li class="social__item"><a class="fa fa-youtube"
                          href="<?= esc_url($youtube_link); ?>"></a></li>
                        <?php }?>
                    </ul>
                    <!-- - content -->
                  </section>
                </div>
                <!-- - widget SOCIAL -->
                <!-- widget TEXT -->
                <div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
                  <section class="widget widget_text">
                    <!-- content -->
                    <div class="textwidget">
                      <p><small><?= $copyright_Text; ?> <a href="https://conceptionsindia.com/"
                            target="_blank">Conceptionsindia</a></small></p>
                    </div>
                    <!-- - content -->
                  </section>
                </div>
                <!-- - widget TEXT -->
              </div>
            </div>
            <!-- - widgetst bottom area -->
          </footer>
          <!-- - PAGE FOOTER -->
    </div>
    <!-- - PAGE MAIN -->
  </div>
  <!-- Slider Textures Shaders -->
  <script id="slider-textures-vs" type="x-shader/x-vertex">
      varying vec2 vUv;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
    </script>
  <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
        vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
    </script>
<?php }else{
?> <canvas id="js-webgl"></canvas>
    <!-- PhotoSwipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
      <!-- background -->
      <div class="pswp__bg"></div>
      <!-- - background -->
      <!-- slider wrapper -->
      <div class="pswp__scroll-wrap">
        <!-- slides holder (don't modify)-->
        <div class="pswp__container">
          <div class="pswp__item">
            <div class="pswp__img pswp__img--placeholder"></div>
          </div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- - slides holder (don't modify)-->
        <!-- UI -->
        <div class="pswp__ui pswp__ui--hidden">
          <!-- top bar -->
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- - top bar -->
          <!-- left arrow -->
          <div class="pswp__button pswp__button--arrow--left">
            <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-left__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - left arrow -->
          <!-- right arrow -->
          <div class="pswp__button pswp__button--arrow--right">
            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-right__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - right arrow -->
          <!-- slide caption holder (don't modify) -->
          <div class="pswp__caption">
            <div class="pswp__caption__center text-center"></div>
          </div>
          <!-- - slide caption holder (don't modify) -->
        </div>
        <!-- - UI -->
      </div>
      <!-- slider wrapper -->
    </div>
    <!-- - PhotoSwipe -->
    <!-- List Hover Shaders -->
    <script id="list-hover-vs" type="x-shader/x-vertex">
      uniform vec2 uOffset;
      
      varying vec2 vUv;
      
      vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
        float M_PI = 3.1415926535897932384626433832795;
        position.x = position.x + (sin(uv.y * M_PI) * offset.x);
        position.y = position.y + (sin(uv.x * M_PI) * offset.y);
        return position;
      }
      
      void main() {
        vUv =  uv + (uOffset * 2.);
        vec3 newPosition = position;
        newPosition = deformationCurve(position,uv,uOffset);
        gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
      }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
      uniform sampler2D uTexture;
      uniform float uAlpha;
      uniform float uScale;
      
      varying vec2 vUv;
      
      vec2 scaleUV(vec2 uv,float scale) {
        float center = 0.5;
        return ((uv - center) * scale) + center;
      }
      
      void main() {
        vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
        gl_FragColor = vec4(color,uAlpha);
      }
      
    </script>
    <!-- - List Hover Shaders -->
    <!-- Slider Textures Shaders -->
    <script id="slider-textures-vs" type="x-shader/x-vertex">
      varying vec2 vUv;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
        vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
        vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
      
    </script>
	<?php } ?>
	<style>
.header_sticky {
    padding-top: 0px;
    padding-bottom: 0px;}
  .newhead .header__controls{
    display: none;
  }
  .menu_img {
    margin-left: auto;
    text-align: right;
    opacity: 0;
    visibility: hidden;
    transform: translate(0px, -100%);
    transition: 0.1s;
    position: fixed;
    right: 0px;
    top: 144px;
  }
  .opened .menu_img{
      opacity: 1;
      transform: translate(0px, 0%);
      visibility: visible;
      transition: 0.1s;
    }
  .menu_img img {
    width: auto;
    max-height: 230px;
    margin-bottom: 18%;
   
  }
  .header_sticky{
    position: static !important;
  }
  @media (max-width: 991px){
    .menu_img {
      display: none;
    }
  }
</style>
<script>
    var $= jQuery;
  $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('#page-header').addClass('newhead');
    } else {
       $('#page-header').removeClass('newhead');
    }
});
</script>

 <script>
    const fsncyStyle = document.querySelector(".fancy");
  if (fsncyStyle ) {
    const fancyText = fsncyStyle.textContent;
  var mySplitResult = fancyText.split("");
  let text = "";
  for (let i = 0; i < mySplitResult.length; i++) {
    text += "<span>"+ mySplitResult[i] + "</span>";
  }
  fsncyStyle.innerHTML = text;
  let char = 0;
  let timer = setInterval(function ontick(){
    const span = fsncyStyle.querySelectorAll('span')[char];
    span.classList.add('fade');
      char++
      if(char ===  mySplitResult.length){
        complet();
        return;
      }
  },50);
  function complet(){
    clearInterval(timer);
    timer = null;
  }
  }
    if(document.querySelector(".about-border-circle")){
      setInterval(function () {
      let roundStartValue = 0,
        sliderCircle = document.querySelector(".about-border-circle"),
        roundEndValue = 100,
        Htmlspreed = 100;
      setInterval(() => {
        if (roundStartValue == roundEndValue) {
          clearInterval();
        } else {
          roundStartValue++;
          //console.log(roundStartValue);
          if(sliderCircle){
          sliderCircle.style.backgroundImage = "conic-gradient(rgb(255 0 0) " + roundStartValue * 3.6 + "deg, rgb(188 188 188) 0deg)";
          }
        }
      }, Htmlspreed);
    }, 10000)
    }
  </script>
<?php wp_footer();?>
  </body>
</html>