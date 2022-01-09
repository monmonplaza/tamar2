
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
                <li><a href="<?php echo esc_url(site_url('/event'))?>"> Events <i class="fas fa-angle-right"></i> </a></li>
                <li><?php echo get_the_title() ?></li>
            </ul>
        </div>
</div>


<?php 
    if(is_single('our-spaces')) {?>
        <section class="ourspaces">
            <div class="container">
                <article class="ourspaces__wrapper">
                   <?php the_content(); ?>
                </article>
            </div>
        </section>
    <?php } else { ?>
 
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

<?php } ?>

<?php if(is_single('meeting')) { ?>
    
<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>We Offer</span>
                      <?php echo get_field('title_meeting_a') ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo get_field('body_meeting_a') ?></p> 

                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="img__wrapper">
                   
                        <img src="<?php echo get_field('image_meeting_a')['url'] ?>" alt="">
                       
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
                      <?php echo get_field('title_meeting_b') ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo get_field('body_meeting_b') ?></p> 
                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="img__wrapper">
                    <img src="<?php echo get_field('image_meeting_b')['url'] ?>" alt="">   
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>



<?php if(is_single('conference')) { ?>
    <section class="twocol">
        <div class="container">
            <div class="twocol__wrapper d--grid">
                <div class="twocol__content">
                    <article>
                        <h2 class="twocol__header">
                            <span>We Offer</span>
                        <?php echo get_field('title_conference') ?>
                        </h2>

                        <div class="twocol__body">
                            <p><?php echo get_field('body_conference') ?></p> 
                        </div>
                    </article>

                </div>
                <div class="twocol__img">
                    <div class="img__wrapper">
                        <img src="<?php echo get_field('image_conference')['url'] ?>" alt="">   
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }?>

<?php 

    if(is_single('our-spaces')) {
        $tag = "Explore";
        $title = 'Our Spaces';
        $ourpage = true;
        $posttype = 'conference';
    } elseif (is_single('wedding')) {   
        $tag = "About";
        $title = 'Ceremony';  
        $wedding = true;
        $posttype = 'ceremony';
    } elseif (is_single('conference')) {   
        $tag = "About";
        $title = 'Conference';  
        $conference = true;
        $posttype = 'conference';
    } 
?>

<?php if( is_single('wedding') || is_single('our-spaces') || is_single('conference')) {?>
<div class="filter">
    <div class="container">
        <div class="filter__wrapper d--flex <?php echo ($wedding) ?  'space--between' :  'flex--end'; ?>">
            <ul class=" <?php echo ($wedding) ?  ' show' :  ''; ?>">
                <li><a href="#" class="wedding__btns active" >Ceremony</a></li>
                <li><a href="#" class="wedding__btns ">Reception</a></li>
            </ul>

            <div class="filter__select">
                <label for="">Filter by Capacity</label>
                <select name="" id="cardFilter">
                    <option value="all">All</option>
                    <option value="10">> 10</option>
                    <option value="30">> 30</option>
                    <option value="40">> 40</option>
                    <option value="70">> 70</option>
                </select>
            </div>
        </div>
    </div>
</div>
<?php }?>



<?php if(is_single('our-spaces') || is_single('wedding') || is_single('conference')) {?>
<div class="cards wedding__card show" id="cardCeremony">
    <div class="container">
        <header class=" block--header">
            <span><?php echo $tag ?></span>
            <h2><?php echo $title ?></h2>
        </header>

        <?php $eventQuery = new WP_Query([
            'post_type' => $posttype
        ])?>

        <div class="cards__list d--grid">
            <?php if($eventQuery->have_posts()) : while($eventQuery->have_posts()): $eventQuery->the_post(); ?>
            <div class="cards__item show" data-capacity="<?php the_field('capacity');?>">
                <div class="cards__img">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('card-img' ) ;  
                    }?>
                </div>
                <article class="cards__body">
                    <h3><?php the_title()?></h3>
                    <ul>
                        <li>Guest Capacity: <span><?php the_field('capacity'); ?></span></li>
                        <li>Floor Area: <span><?php the_field('area')?></span> sqm</li>
                    </ul>
                    <div class="cards_text">
                        <p><?php the_content()?></p>
                    </div>

                </article>
            </div>   
            <?php
                endwhile;
                else: echo esc_html('No more services to load');
            endif;
            wp_reset_postdata();
?>
        </div>
    </div>
</div>

<?php }?>

<?php if(is_single('wedding')) { ?>

<div class="cards wedding__card" id="cardReception">
    <div class="container">
        <header class=" block--header">
            <span> View </span>
            <h2> Reception </h2>
        </header>

        <?php $eventQuery = new WP_Query([
            'post_type' => 'reception'
        ])?>

        <div class="cards__list d--grid">
            <?php if($eventQuery->have_posts()) : while($eventQuery->have_posts()): $eventQuery->the_post(); ?>
            <div class="cards__item show" data-capacity="<?php the_field('capacity')?>">
                <div class="cards__img">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('card-img' ) ;  
                    }?>
                </div>
                <article class="cards__body">
                    <h3><?php the_title()?></h3>
                    <ul>
                        <li>Guest Capacity: <span><?php the_field('capacity'); ?></span></li>
                        <li>Floor Area: <span><?php the_field('area')?></span> sqm</li>
                    </ul>
                    <div class="cards_text">
                        <p><?php the_content()?></p>
                    </div>

                </article>
            </div>   
            <?php
                endwhile;
                else: echo esc_html('No more services to load');
            endif;
            wp_reset_postdata();
?>
        </div>
    </div>
</div>
<?php } ?>

<?php get_footer() ?>