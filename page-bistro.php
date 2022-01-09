<?php get_header() ?>
<?php  require_once( get_template_directory() . '/template/template-page-banner.php');  ?>
<?php  require_once( get_template_directory() . '/template/template-breadcrumb.php');  ?>


<section class="twocol">
    <div class="container">
        <div class="twocol__wrapper d--grid">
            <div class="twocol__content">
                <article>
                    <h2 class="twocol__header">
                        <span>Welcome</span>
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

<section class="foodMenu">
    <div class="container">
        <header class=" block--header">
            <span> Explore</span>
            <h2>Our Menu </h2>
        </header>

        <div class="foodMenu__grid">
              <figure class="foodMenu__box menu--breakfast">
                  <img src="<?php echo get_field('breakfast')['url']?>" alt="">
                  <figcaption>
                      <div class="foodMenu__content">
                        <h3>Breakfast</h3>
                        <p>Serve 7am - 9am</p>
                      </div>
                      <a href="#" class="openBistroModal" id="special">View Menu</a>
                  </figcaption>
              </figure>  
              
              <figure class="foodMenu__box menu--lunch">
                  <img src="<?php echo get_field('lunch_dinner')['url']?>" alt="">
                  <figcaption>
                      <div class="foodMenu__content">
                        <h3>Lunch / Dinner</h3>
                        <p>Lunch (11am - 2pm) Dinner (6pm - 9pm)</p>
                      </div>
                      <a href="#" class="openBistroModal" id="lunch">View Menu</a>
                  </figcaption>
              </figure>  
              
              <figure class="foodMenu__box menu--special">
                  <img src="<?php echo get_field('special')['url']?>" alt="">
                  <figcaption>
                      <div class="foodMenu__content">
                        <h3>Weeknight Specials</h3>
                        <p>Serve 5:30pm - 8pm</p>
                      </div>
                      <a href="#" class="openBistroModal" id="special">View Menu</a>
                  </figcaption>
              </figure>  

              <figure class="foodMenu__box menu--xmas">
                  <img src="<?php echo get_field('christmas')['url']?>" alt="">
                  <figcaption>
                      <div class="foodMenu__content">
                        <h3>Christmas Day Lunch</h3>
                      </div>
                      <a href="#" class="openBistroModal" id="xmas">View Menu</a>
                  </figcaption>
              </figure>  
        </div>
    </div>
</section>



<div class="modalfood" id="modal--breakfast">
    <div class="modalfood__main">
        <div class="modalfood__header">
            <h2>Breakfast</h2>
            <a href="#" class="download__doc">Download</a>
            <a href="#" class="modalClose"><i class="fas fa-plus"></i></a>
        </div>

        <div class="modalfood__body">
           
                    <?php 
               
                    $bfast = new WP_Query ( array(
                        'post_type' => 'food',
                        'meta_key'  => 'menu_category',
                        'meta_value' => 'Breakfast'
                        )
                    );
            
                    ?>
                <div class="food__cat">
                 <h3>Breakfast</h3>
                 <div class="food__grid">
            <?php if( $bfast->have_posts()) : while( $bfast->have_posts()) : $bfast-> the_post()?>
                <div class="food__item">
                    <div class="food__info">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('description')?></p>
                    </div>
                    <p class="food__price"><?php the_field('price')?></p>
                </div>

                <?php 
                    endwhile;
                    else :
                        echo "No more menu to load";
                    endif;
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modalfood " id="modal--special">
    <div class="modalfood__main">
        <div class="modalfood__header">
            <h2>Special</h2>
            <a href="#" class="download__doc">Download</a>
            <a href="#" class="modalClose"><i class="fas fa-plus"></i></a>
        </div>

        <div class="modalfood__body">
           
                    <?php 
               
                    $special = new WP_Query ( array(
                        'post_type' => 'food',
                        'meta_key'  => 'menu_category',
                        'meta_value' => 'Weekend Special'
                        )
                    );
            
                    ?>
                <div class="food__cat">
                 <h3>Special</h3>
                 <div class="food__grid">
            <?php if( $special->have_posts()) : while( $special->have_posts()) : $special-> the_post()?>
                <div class="food__item">
                    <div class="food__info">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('description')?></p>
                    </div>
                    <p class="food__price"><?php the_field('price')?></p>
                </div>

                <?php 
                    endwhile;
                    else :
                        echo "No more menu to load";
                    endif;
                    wp_reset_postdata();
                ?>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="modalfood " id="modal--xmas">
    <div class="modalfood__main">
        <div class="modalfood__header">
            <h2>Christmas Special</h2>
            <a href="#" class="download__doc">Download</a>
            <a href="#" class="modalClose"><i class="fas fa-plus"></i></a>
        </div>

        <div class="modalfood__body">
           
                    <?php 

                $xmas_menus = ['Entree', 'Buffet', 'Salads', 'Desserts'];
                foreach ($xmas_menus as $xmas_menu) {
                    $xmas = new WP_Query ( array(
                        'post_type' => 'food',
                        'orderby'   => 'menu_order',
                        'meta_query' => array(
                            'relation' => 'AND',
                            array(
                                'key'   => 'menu_category',
                                'value' => 'Christmas Day Lunch',
                            ),
                            array(
                                'key'     => 'menu_subcategory',
                                'value' =>  $xmas_menu 
                            ),
                        )
                        )
                    );
            
                    ?>
                <div class="food__cat">
                 <h3><?php echo $xmas_menu ?></h3>
                 <div class="food__grid">
            <?php if( $xmas->have_posts()) : while( $xmas->have_posts()) : $xmas-> the_post()?>
                <div class="food__item">
                    <div class="food__info">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('description')?></p>
                    </div>
                    <p class="food__price"><?php the_field('price')?></p>
                </div>

                <?php 
                    endwhile;
                    else :
                        echo "No more menu to load";
                    endif;
                    wp_reset_postdata();
                ?>


                </div>
            </div>

            <?php }?>
        </div>
    </div>
</div>

<div class="modalfood " id="modal--lunch">
    <div class="modalfood__main">
        <div class="modalfood__header">
            <h2>Lunch / Dinner</h2>
            <a href="#" class="download__doc">Download</a>
            <a href="#" class="modalClose"><i class="fas fa-plus"></i></a>
        </div>

        <div class="modalfood__body">
           
                    <?php 
                 $taxonomies = get_terms( array(
                    'taxonomy' => 'food-category', 
                    'hide_empty' => false,
                    
                ) );

                $foodCategory = [];    
                if ( !empty($taxonomies) ) :
                    foreach( $taxonomies as $category ) {
                        array_push($foodCategory,$category->name );
                    }
                endif;
                    for($i = 0; $i < count($foodCategory); $i++ ) {
                    $lunch = new WP_Query ( array(
                        'post_type' => 'food',
                        
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'food-category',
                            'terms' => $foodCategory[$i],
                            'field' => 'name'
                                )
                            )
                        )
                    );
            
                    ?>
                <div class="food__cat">
                 <h3><?php echo $foodCategory[$i]?></h3>
                 <div class="food__grid">
            <?php if( $lunch->have_posts()) : while( $lunch->have_posts()) : $lunch-> the_post()?>
                <div class="food__item">
                    <div class="food__info">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('description')?></p>
                    </div>
                    <p class="food__price"><?php the_field('price')?></p>
                </div>

                <?php 
                    endwhile;
                    else :
                        echo "No more menu to load";
                    endif;
                    wp_reset_postdata();
                ?>


                </div>
            </div>

         <?php }?>

        </div>
    </div>
</div>

<?php get_footer() ?>