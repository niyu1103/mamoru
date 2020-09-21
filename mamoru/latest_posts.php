<!-- 新着記事一覧　すべて -->
<div class="change_cat all is-active">
<ul class="slide">
  <?php
  $args = array(
   'posts_per_page' => 6,
   'offset' => 0,
   'orderby' => 'post_date',
   'order' => 'DESC',
   'post_type' => 'post',
   'post_status' => 'publish',
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
  $the_query->the_post();
  ?>
  <li class="news_list">
  <a href="<?php the_permalink(); ?>">
    <div class="news_list_img">
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.jpg" alt="">
      <?php endif; ?>
    </div>
    <div class="news_list_text_box">
      <h3 class="news_list_title"><?php the_title(); ?></h3>
      <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
      <?php
      $cat =get_the_category();
      $cat_name = $cat[0] -> cat_name;
      $cat_slug = $cat[0] -> category_nicename;
      ?>
      <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
    </div>
  </a>
</li>
  <?php } ; ?>
</ul>
</div>
  <?php }
  wp_reset_postdata();
  ?>

  <!-- /新着記事一覧　すべて -->

  <!-- 新着記事一覧　メディア -->
<div class="change_cat media">
  <ul class="slide">
    <?php
    $args = array(
     'posts_per_page' => 6,
     'offset' => 0,
     'orderby' => 'post_date',
     'order' => 'DESC',
     'category_name' => 'cat_media',
     'post_type' => 'post',
     'post_status' => 'publish',
     // 'suppress_filters' => true,
     // 'ignore_sticky_posts' => true,
     // 'no_found_rows' => true
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>
    <li class="news_list">
    <a href="<?php the_permalink(); ?>">
      <div class="news_list_img">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.jpg" alt="">
        <?php endif; ?>
      </div>
      <div class="news_list_text_box">
        <h3 class="news_list_title"><?php the_title(); ?></h3>
        <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
        <?php
        $cat =get_the_category();
        $cat_name = $cat[0] -> cat_name;
        $cat_slug = $cat[0] -> category_nicename;
        ?>
        <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
      </div>
    </a>
  </li>
    <?php } ; ?>
  </ul>
  </div>
    <?php }
    wp_reset_postdata();
    ?>
  <!-- /新着記事一覧　メディア -->

  <!-- 新着記事一覧　寄稿 -->
<div class="change_cat blog">
  <ul class="slide">
    <?php
    $args = array(
     'posts_per_page' => 6,
     'offset' => 0,
     'orderby' => 'post_date',
     'order' => 'DESC',
     'category_name' => 'cat_blog',
     'post_type' => 'post',
     'post_status' => 'publish',
     // 'suppress_filters' => true,
     // 'ignore_sticky_posts' => true,
     // 'no_found_rows' => true
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>
    <li class="news_list">
    <a href="<?php the_permalink(); ?>">
      <div class="news_list_img">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.jpg" alt="">
        <?php endif; ?>
      </div>
      <div class="news_list_text_box">
        <h3 class="news_list_title"><?php the_title(); ?></h3>
        <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
        <?php
        $cat =get_the_category();
        $cat_name = $cat[0] -> cat_name;
        $cat_slug = $cat[0] -> category_nicename;
        ?>
        <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
      </div>
    </a>
  </li>
    <?php } ; ?>
  </ul>
  </div>
    <?php }
    wp_reset_postdata();
    ?>
  <!-- /新着記事一覧　寄稿 -->

  <!-- 新着記事一覧　イベント -->
<div class="change_cat event">
  <ul class="slide">
    <?php
    $args = array(
     'posts_per_page' => 6,
     'offset' => 0,
     'orderby' => 'post_date',
     'order' => 'DESC',
     'category_name' => 'cat_event',
     'post_type' => 'post',
     'post_status' => 'publish',
     // 'suppress_filters' => true,
     // 'ignore_sticky_posts' => true,
     // 'no_found_rows' => true
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>
    <li class="news_list">
    <a href="<?php the_permalink(); ?>">
      <div class="news_list_img">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.jpg" alt="">
        <?php endif; ?>
      </div>
      <div class="news_list_text_box">
        <h3 class="news_list_title"><?php the_title(); ?></h3>
        <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
        <?php
        $cat =get_the_category();
        $cat_name = $cat[0] -> cat_name;
        $cat_slug = $cat[0] -> category_nicename;
        ?>
        <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
      </div>
    </a>
  </li>
    <?php } ; ?>
  </ul>
  </div>
    <?php }
    wp_reset_postdata();
    ?>
  <!-- /新着記事一覧　イベント -->

  <!-- 新着記事一覧　活動履歴 -->
<div class="change_cat history">
  <ul class="slide">
    <?php
    $args = array(
     'posts_per_page' => 6,
     'offset' => 0,
     'orderby' => 'post_date',
     'order' => 'DESC',
     'category_name' => 'cat_history',
     'post_type' => 'post',
     'post_status' => 'publish',
     // 'suppress_filters' => true,
     // 'ignore_sticky_posts' => true,
     // 'no_found_rows' => true
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>
    <li class="news_list">
    <a href="<?php the_permalink(); ?>">
      <div class="news_list_img">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail.jpg" alt="">
        <?php endif; ?>
      </div>
      <div class="news_list_text_box">
        <h3 class="news_list_title"><?php the_title(); ?></h3>
        <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
        <?php
        $cat =get_the_category();
        $cat_name = $cat[0] -> cat_name;
        $cat_slug = $cat[0] -> category_nicename;
        ?>
        <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
      </div>
    </a>
  </li>
    <?php } ; ?>
  </ul>
  </div>
    <?php }
    wp_reset_postdata();
    ?>
<!-- /新着記事一覧　活動履歴 -->
