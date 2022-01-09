<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>

<div class="breadcrumb">
        <?php 
            global $post;
             $getPostName = $post->post_name . "/";
             $getPermalink = get_the_permalink();
             $parentPermalink =  str_replace($getPostName, "",  $getPermalink)
        ?>
            <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(site_url('/'))?>"><i class="fas fa-home"></i> Home <i class="fas fa-angle-right"></i> </a></li>
                <li><a href="<?php echo esc_url($parentPermalink)?>"> Events <i class="fas fa-angle-right"></i> </a></li>
                <li><?php echo get_the_title() ?></li>
            </ul>
        </div>
</div>

<div class="templateevent">
    <div class="container">
        <div class="templateevent__wrapper d--grid">
            <div class="templateevent__body">
                <article>
                    <header class="templateevent__header block--header">
                        <span>About</span>
                        <h2><?php the_title()?></h2>
                    </header>

                    <div class="templateevent__body">
                       <?php the_content();?>
                    </div>
                </article>
            </div>

            <aside class="templateevent__info">
                <h2>Appointment and Enquiries</h2>
                <ul>
                    <li><a href="tel:6330 0494"><i class="fas fa-phone"></i> 6330 0494</a></li>
                    <li><a href="mailto:sarah@tamarvalleyresort.com.au"><i class="fas fa-envelope"></i> sarah@tamarvalleyresort.com.au</a></li>
                </ul>

                <a href="#" class="btn btn--primary">Contact an Event Planner</a>
                
                <?php if(!is_page('wedding')) { ?>
                    <a href="#" class="btn btn--secondary">Download Brochure</a>
                <?php }?>

            </aside>
        </div>
    </div>
</div>

<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>We Offer</span>
                      <?php echo get_field('title_conference_a') ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo get_field('body_conference_a') ?></p> 

                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="img__wrapper">
                   
                        <img src="<?php echo get_field('image_conference_a')['url'] ?>" alt="">
                       
                </div>
            </div>
        </div>
    </div>
</section>

<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>We Offer</span>
                      <?php echo get_field('title_conference_b') ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo get_field('body_conference_b') ?></p> 
                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="img__wrapper">
                    <img src="<?php echo get_field('image_conference_b')['url'] ?>" alt="">   
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer() ?>