<?php if ( get_theme_mod('realestate_agent_blog_box_enable',false) ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('realestate_agent_blog_slide_category'),
  'posts_per_page' => get_theme_mod('realestate_agent_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('realestate_agent_slide_title_enable_disable', true) == true ) : ?>
              <h3 class="my-3"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('realestate_agent_slide_text_enable_disable', true) == true ) : ?>
              <p><?php echo wp_trim_words( get_the_content(), get_theme_mod('realestate_agent_excerpt_number',20) ); ?></p>
            <?php endif; ?>
            <?php if ( get_theme_mod('realestate_agent_slide_button_enable_disable', true) == true ) : ?>
            <p class="slider-button mt-4">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Get Started','realestate-agent'); ?></a>
            </p>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>

<section id="property-search">
  <?php if ( get_theme_mod('realestate_agent_slide_title_enable_disablejkl', true) == true ) : ?>
    <?php get_search_form(); ?>
  <?php endif; ?>
</section>