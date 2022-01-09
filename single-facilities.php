<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>


<section class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?php echo esc_url(site_url('/'))?>" class="goHome"> <i class="fas fa-home"></i> Home <i class="fas fa-angle-right"> </i></a> </li>
            <li><a href="<?php echo esc_url(site_url('/facilities'))?>" > Facilities <i class="fas fa-angle-right"></i></a> </li>
            <li></i> <?php echo get_the_title(); ?></li> 
        </ul>
        </ul>
    </div>
</section>

<section class="templatebase">
    <div class="container">
        <div class="templatebase__wrapper d--grid" >
            <div class="templatebase__img">
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('base-single');
                }?>
            </div>

            <div class="templatebase__content">
                <article>
                    <header class="templatebase__header d--flex">
                     
                            
                            <h2><span>Facilities</span><?php the_title();?></h2>
                    

                        <ul class="d--flex">
                            <li><a href="#"><i class="fas fa-phone"></i></a></li>
                            <li><a href="#" id="singleModalBtn"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </header>

                    <div class="templatebase__body">
                       <?php the_content() ?>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php  require_once( get_template_directory() . '/template/template-modal.php');  ?>


<?php get_footer() ?>