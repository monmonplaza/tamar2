<?php get_header() ?>


<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>


<section class="breadcrumb">
    <div class="container">
        <ul>
      
            <li><a href="<?php echo esc_url(site_url('/'))?>" class="goHome"> <i class="fas fa-home"></i> Home <i class="fas fa-angle-right"> </i></a> </li>
            <li><a href="<?php echo esc_url(site_url('/accommodations'))?>" > Accommodation <i class="fas fa-angle-right"></i></a> </li>
            <li></i> <?php echo get_the_title(); ?></li> 
        </ul>
        </ul>
    </div>
</section>



<?php

global $post;

if($post->ID == 78) {
    $type = 'hotel';  
    $tag = "Hotel and Suites";
} elseif ($post->ID ==77 ) {
    $type = 'chalets'; 
    $tag = "Chalets and Family";
} elseif ($post->ID == 76 ) {
    $type = 'villas'; 
    $tag = "Villas and Cabin";
  
}


    $room = new WP_Query(array(
        'post_type' => 'room',
        'tax_query' => array(
            array(
                'taxonomy' => 'accommodation-type',
                'field'    => 'slug',
                'terms'    =>  $type,
                ),
            ),
     
    ));

?>

<?php if($room->have_posts()) : while($room->have_posts()) : $room->the_post(); ?>

<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span><?php echo $tag ?></span>
                      <?php the_title(); ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo get_the_content(); ?></p> 

                    </div>
                </article>

            </div>
            <div class="twocol__img">
                <div class="img__wrapper">
                   
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail('post-list-img', [ 'class' => 'feat__image']);
                        }
                        ?>
                       
                </div>
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


<?php get_footer() ?>