<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>



<?php
    $employ = new WP_Query(array(
        'post_type' => 'employments',
    ));

?>


<?php if($employ->have_posts()) : while($employ->have_posts()) : $employ->the_post(); ?>

<section class="career">
    <div class="container">
        <div class="career__item">
            <div class="career__item__wrapper d--grid">
                <aside class="career__info">
                    <div class="career__info__block">
                        <span>Position</span>
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <div class="career__info__block">
                        <span>Status</span>
                        <h3><?php echo get_field('status'); ?></h3>
                    </div>
                </aside>

                <main class="career__info__body">
                    <header class="d--flex">
                        <h3>Job Description</h3>
                        <a href="#" class="btn btn--primary openEmpModalBtn" data-emp="<?php the_title(); ?>"> Apply Now</a>
                    </header>
                    <article class="career__details">
                       <?php the_content();?>
                    </article>
                </main>
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


<?php  require_once( get_template_directory() . '/template/template-modal-employment.php');  ?>


<?php get_footer() ?>