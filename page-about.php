<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>



<section class="about">
    <div class="container">
        <div class="about__wrapper d--grid">
            <article class="about__content">
                <?php the_content()?>
            </article>

            <figure class="about__img">
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('about-img');
                }?>
            </figure>
        </div>
    </div>
</section>


<section class="aboutlinks">
    <div class="container"> 
        <div class="aboutlist__wrapper d--grid">
            <div class="linkbox link--main">
                <h2>All About Tamar Valley Resort</h2>
            </div>


            <?php 

                $header =  get_field('header');
                $body = get_field('body');
                $linktext = get_field('link_text');
                $slug = get_field('slug');


                $headerArr = explode(',', $header );
                $bodyArr = explode(',', $body );
                $linktext = explode(',', $linktext );
                $slug = explode(',', $slug );

               

                foreach($headerArr as $index => $value) {
                    echo
                     '<div class="linkbox">
                            <div>
                                <h3>' . $headerArr[$index] .'</h3>
                                <p>'. $bodyArr[$index] .'</p>
                            </div>
                            <a href='. site_url($slug[$index]) .'>'. $linktext[$index]. '</a>
                        </div>';
                
                }
            ?>
             


          
        </div>
    </div>
</section>






<?php get_footer() ?>