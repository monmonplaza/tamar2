<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>




<section class="contact">
    <div class="container">
        <header class=" block--header">
            <span>Message</span>
            <h2>Say Hello</h2>
        </header>
        <div class="contact__wrapper d--grid">
            <div class="contact__info">
             
                <div class="contact__info__wrapper d--flex">
                    <?php the_content(); ?>   
                </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5990.019123621712!2d147.002303!3d-41.352145892518415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7060360cdd517f5b!2sAspect%20Tamar%20Valley%20Resort%2C%20Grindelwald!5e0!3m2!1sen!2sph!4v1640608997595!5m2!1sen!2sph" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              
            </div>  

            <div class="contact__form">
                <form action="">
                    <h2>Message Us</h2>
                     <?php echo do_shortcode( '[contact-form-7 id="107" title="Page Contact"]' )?>
                </form>

               
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>