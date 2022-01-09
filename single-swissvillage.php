<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>


<section class="breadcrumb">
    <div class="container">
        <ul>
      
            <li><a href="<?php echo esc_url(site_url('/'))?>" class="goHome"> <i class="fas fa-home"></i> Home <i class="fas fa-angle-right"> </i></a> </li>
            <li><a href="<?php echo esc_url(site_url('/swiss-village'))?>" > Swiss Village <i class="fas fa-angle-right"></i></a> </li>
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
                     
                            
                            <h2><span>Swiss Village</span><?php the_title();?></h2>
                    

                        <ul class="d--flex">
                            <li><a href="#"><i class="fas fa-phone"></i></a></li>
                            <li><a href="#" id="singleModalBtn"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </header>

                    <div class="templatebase__body">
                        <h3><?php echo get_field('office_hours')?></h3>
                       <?php the_content() ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php if(is_single('grindelwald-activity-centre')) { ?>
<section class="activity">
    <div class="container">
        <header class="block--header">
            <span>Experience</span>
            <h2>Tamar Activities</h2>
        </header>
        <div class="activity__list">
            <aside class="activity__nav">
                <ul id="activityBtn">

                   <?php 
                    $activity = new WP_Query(['post_type' => 'activity']);
                   while($activity->have_posts()) : $activity->the_post();?>
                    <li><?php the_title()?></li>
                   <?php endwhile;
                    wp_reset_postdata();
                   ?> 

                </ul>
            </aside>
            <div class="activity__content">
                <?php  while($activity->have_posts()) : $activity->the_post();?>
                <div class="info__wrapper">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail( 'activity-img' );
                    }?>
                    <div class="activity__description">
                        <h2><?php the_title() ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile;
                    wp_reset_postdata();
                   ?> 

            </div>
        </div>


    </div>
</section>
<?php }?>
<?php  require_once( get_template_directory() . '/template/template-modal.php');  ?>


<?php get_footer() ?>