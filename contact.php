<?php 
/**
 * Template Name: Contact
 * 
 */
get_header();
?>
<!-- PAGE MAIN -->
<div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
    <main class="page-wrapper__content">
        <section class="section section-masthead pt-large pb-medium contact-wrapper">
            <div class="container-fluid">
            <div class="map-container">
                <div id="map">
                    <img src="<?= get_template_directory_uri();?>/img/map_image.jpg" alt="img/map_image.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="c_title">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="contact-info">
                        <div class="write_us">
                            <h2>Write to us</h2>
                            <p><a href="mailto:info@conceptionsindia.com">info@conceptionsindia.com</a></p>
                        </div>
                        <div class="call_us mt-4">
                            <h2>Call Us</h2>
                            <a href="tell:+917829467676">+91 7829467676</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 justify-content-end d-flex align-middle">
                    <div class="wroking_hours">
                        <h2>Working Hours</h2>
                        <p>MON-FRI</p>
                        <span>9:00 to 19:00</span>
                    </div>
                    <div class="social_networks">
                        
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
<?php 
get_footer();
?>