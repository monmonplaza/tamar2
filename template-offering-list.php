<?php 
/*
    Template Name: Offering List
*/
?>

<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>


<section class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?php echo esc_url(site_url('/'))?>" class="goHome"><i class="fas fa-home"></i> Home </a> </li>
            <li > <i class="fas fa-angle-right"> </i> <?php echo get_the_title(); ?></li> 
        </ul>
    </div>
</section>

<?php 
    if(is_page('accommodations')) {
        $post_type = 'accommodations';  
        $page = get_page_by_title( 'Accommodations' );
        $btnTag = "Availble";
    } elseif (is_page('swiss-village')) {
        $post_type = 'swissvillage'; 
        $page = get_page_by_title( 'Swiss Village' );
        $btnTag = "Visit";
    } elseif (is_page('facilities')) {
        $post_type = 'facilities'; 
        $page = get_page_by_title( 'Facilities' );
        $btnTag = "Enjoy";
    } elseif (is_page('event')) {
        $post_type = 'event'; 
        $page = get_page_by_title( 'Event' );
        $btnTag = "Our";
    } elseif (is_page('play')) {
        $post_type = 'play'; 
        $page = get_page_by_title( 'Play' );
        $btnTag = "Enjoy";
    } elseif (is_page('deal')) {
        $post_type = 'deal'; 
        $page = get_page_by_title( 'Deals' );
        $btnTag = "Enjoy";
    }
    

    
    

    $query = new WP_query(array (
        'post_type' => $post_type
    ))
?>


<?php if( $query ->have_posts()) : while( $query -> have_posts()) : $query -> the_post(); ?>

<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>We Offer</span>
                      <?php the_title(); ?>
                    </h2>

                    <div class="twocol__body">
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p> 

                        <a href="<?php the_permalink(); ?>" class="btn btn--secondary"> <?php echo $btnTag; ?> <?php the_title() ?></a>
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
        else: echo esc_html('No more accommodation to load');
    endif;

    wp_reset_postdata();

  
?>

<?php get_footer() ?>