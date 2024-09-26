<?php 
/**
 * Template Name: Project
 */
get_header()
?>
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-1"  id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
            <div class="our-project-section">
  <h2>OUR PROJECTS</h2>
  <div class="our-project-btn">
    <button class="btn btn-default filter-button" data-filter="all">All</button>
    <button class="btn btn-default filter-button" data-filter="one">Project</button>
    <button class="btn btn-default filter-button" data-filter="two">Project2</button>
    <button class="btn btn-default filter-button" data-filter="three">Project3</button>
  </div>

</div>
<div class="grid-container">
    <div class="grid-item filter one item1">
      <a href="single.html">
          <img src="<?= get_template_directory_uri();?>/assets/image/about-slide1.jpg">
          <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
    </div>
  <div class="grid-item filter one item2">
      <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide2.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>
  <div class="grid-item filter two item3">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide3.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>  
  <div class="grid-item filter two item4">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide4.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>
  <div class="grid-item filter three item5">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide1.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
          </div>
        </a>
  </div>
   <div class="grid-item filter three item6">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide2.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
   </div>
  <div class="grid-item filter one item7">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide3.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>
  <div class="grid-item filter two item8">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide4.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>  
  <div class="grid-item filter three item9">
    <a href="single.html">
         <img src="<?= get_template_directory_uri();?>/assets/image/about-slide1.jpg">
         <div class="project-content">
           <h2>MOD APARTMEN</h2>
         </div>
       </a>
  </div>
</div>
  </main>
  <script>
    var $= jQuery;
    $(document).on('ready', function(){
      $(document).on('click','.filter-button', function(){
         var value = $(this).attr('data-filter');
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }else{
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');   
        }
      });
    });

  </script>
<?php get_footer();?>