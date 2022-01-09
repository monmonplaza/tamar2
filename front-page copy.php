<?php get_header() ?>

<section class="hero">
    <div class="hero__content">
        <h1 class="mb--4">Discover Our World</h1>
        <ul class="d--flex">
            <li><a href="#" class="btn btn--secondary">Book Now</a></li>
            <li><a href="#" class="btn btn--outline">See Deals</a></li>
        </ul>
    </div>

    <div class="hero__overlay"></div>

    <div class="hero__video">
        <iframe src="https://www.youtube.com/embed/TzpiiCNyiGU?loop=1&autoplay=1&mute=1&controls=0&playlist=TzpiiCNyiGUxxx" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
        </iframe>
    </div>
</section>


<?php
    $services = new WP_Query(array(
        'post_type' => 'offering',
        'orderby' =>'menu_order',
        'tax_query' => array(
            array(
                'taxonomy' => 'offering-type',
                'field'    => 'slug',
                'terms'    => 'primary',
                ),
            ),
    ));

?>


<?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post(); ?>
<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>Our</span>
                        <?php the_title() ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php the_content() ?></p>
                        <ul class="offerlist">
                        <?php 
                        $lists = get_field('list_and_slider'); 
                        if ( $lists) {
                                foreach($lists as $list) : ?>
                            <li><a href="<?php echo get_the_permalink($list) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($list) ?></a>  </li>
                            <?php endforeach;
                            }?>
                        </ul>

                        <?php 
                            if ($post->ID=="9") {
                                $slug="accommodations";
                            } elseif ($post->ID=="10") {
                                $slug="swiss-village";
                            } elseif ($post->ID=="11") {
                                $slug="facilities";
                            }
                        ?>

                        <a href="<?php echo esc_url(site_url($slug) ) ?>" class="btn btn--secondary"> Learn More</a>
                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="slider landing__sliders ">
                <?php
                $lists = get_field('list_and_slider');  
                if ( $lists) {
                    foreach($lists as $list) :
                    $slideImg = get_field( 'slider_image', $list->ID );
                    
                    ?>
                        <div class="slider__card ">
                            <img src="<?php echo $slideImg['url']; ?>" alt="">
                            <article class="slider__body">
                                <h3 class="text--secondary"><?php echo get_the_title($list) ?></h3>
                            </article>
                        </div>
                    <?php endforeach; 
                }
                ?>
                   
            </div>
        </div>
    </div>
</section>

<?php
        endwhile;
        else: echo esc_html('No more services to load');
    endif;

    wp_reset_postdata();
?>


<section class="hservices">
    <div class="hservices__wrapper d--grid">

        <?php 
            $offering_sub = new WP_Query(array(
                'post_type' => 'offering',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'offering-type',
                        'field'    => 'slug',
                        'terms'    => 'secondary',
                        ),
                    ),
                ))
        ?>


<?php if($offering_sub ->have_posts()) : while($offering_sub ->have_posts()) :$offering_sub ->the_post();?>
    <div class="hservices__item" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo get_field('background_image')['url']?>);">
        <article class="hservices__content">
            
            <h3><?php echo get_the_title(); ?></h3>
            <div class="text__block">
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn--outline">Learn More </a>
            </div>
        </article>
    </div>

    <?php
        endwhile;
        else: echo esc_html('No more offering to load');
    endif;

    wp_reset_postdata();
?>


        
    </div>
</section>



<section class="testimonial">
    
    <div class="container">
        <h2>Testimonial</h2>
        <div class="testimonial__wrapper">
            <div class="testimonial__slider">

            <?php 
                 $testimonial = new WP_Query(array('post_type' => 'testimonials',  ))      
            ?>


<?php if($testimonial ->have_posts()) : while($testimonial ->have_posts()) :$testimonial ->the_post();?> 
 

                <div class="testimonial__item">
                    <div class="testimonial__wrap d--grid">
                    
                        <h3><?php echo get_field('highlight_text')?></h3>
                        <p><?php echo get_field('comments')?></p>
                        <ul>
                        <?php 
                        $rating = get_field('rating') ;
                            for($i = 1; $i <= $rating; $i++) {
                                echo('<li><i class="fas fa-star"></i></li>');
                            }
                        ?>
                        </ul>
                        <img src="<?php echo get_field('image')['url']?>" alt="">
                        <p><?php echo get_the_title()?></p>
                    </div>
                </div>
        <?php
            endwhile;
            else: echo esc_html('No more testimonial to load');
            endif;

            wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</section>



<section class="hdeal">
    <div class="container">
        <div class="hdeal__wrapper d--grid" >

            <?php 
               $deal = new WP_Query(array('post_type' => 'page', 'pagename'=> 'deal'))      
            ?>


<?php if($deal ->have_posts()) : while($deal ->have_posts()) :$deal ->the_post();?> 
 

            <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
            }?>

            <article class="hdeal__content">
                <div class="hdeal__content__wrap">
              
                <?php the_content();?>
                
                </div>
            </article>

            <?php
                endwhile;
                else: echo esc_html('No more deal to load');
                endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>






<?php get_footer() ?>