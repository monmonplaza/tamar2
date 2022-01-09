<?php get_header();?>

<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>

<div class="page default__page">
    <div class="container">
        <div class="page__wrapper">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php  require_once( get_template_directory() . '/template/template-cta-swiss.php');  ?>

<?php get_footer();?>