<?php get_header(); ?>
<main>
  <section>
    <div class="page_news">
      <div class="container">
        <div class="news_block_wrap">
          <?php
            if (have_posts()):
              while ( have_posts()): the_post();
           ?>
          <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            <span><a href="<?php echo home_url(); ?>/news">ニュース</a></span>
            <span class="breadcrumb_last"><?php the_title(); ?></span>
          </div>
          <div class="page_news_block">
            <div class="news_page_list_wrap">
              <div class="page_news_detail">
                <div class="news_list_text_box">
                  <div class="news_list_date"><?php the_time('Y年n月j日'); ?></div>
                  <h3 class="news_detail_title font_min"><?php the_title(); ?></h3>
                  <div class="blog_eye_catch">
                    <?php
                    if (has_post_thumbnail()):
                       the_post_thumbnail();
                     endif;
                   ?>
                  </div>
                  <div class="news_detail_text"><?php the_content(); ?></div>
                  <?php
                    $cat = get_the_category();
                    $cat_name = $cat[0] -> cat_name;
                    $cat_slug = $cat[0] -> category_nicename;
                   ?>
                  <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
                </div>
              </div>
              <div class="single_pagenavi">
                <ul>
                  <?php previous_post_link('<li>%link</li>'); ?>
                  <?php next_post_link('<li>%link</li>'); ?>
                </ul>
              </div>
            </div>
            <?php get_sidebar(); ?>
          </div>
          <?php
              endwhile;
            endif;
            ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
