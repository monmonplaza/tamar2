<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>


<section class="templatebase">
    <div class="container">
        <div class="templatebase__wrapper d--grid" >
            <div class="templatebase__img">
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('history-img');
                }?>
            </div>

            <div class="templatebase__content">
                <article>
                    <header class="templatebase__header d--flex">
                        <h2><span>About Us</span><?php the_title();?></h2>
                    </header>

                    <div class="templatebase__body">
                       <?php the_content() ?>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php get_footer() ?>