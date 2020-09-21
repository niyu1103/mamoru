<?php get_header(); ?>
  <main>
    <section>
      <div class="page_news">
        <div class="container">
          <div class="news_block_wrap">
            <div class="breadcrumb">
              <a href="<?php echo home_url(); ?>">ホーム</a>
              <span class="breadcrumb_last"><a href="<?php echo home_url(); ?>/news">ニュース</a></span>
              <span class="archive_title"><?php echo get_the_archive_title(); ?></span>
            </div>
            <div class="page_news_block">
              <div class="news_page_list_wrap">
                <h2 class="page_news_archive_title">ニュース</h2>
                <div class="page_news_list_box">
                  <ul>
                    <?php
                    if (have_posts()):
                      while ( have_posts() ): the_post();
                      ?>
                    <li class="page_news_list">
                      <a href="<?php the_permalink(); ?>">
                        <div class="news_list_text_box">
                          <div class="news_list_date"><?php the_time('Y年n月j日'); ?> </div>
                          <h3 class="news_list_title"><?php the_title(); ?></h3>
                          <div class="news_list_text"><?php the_excerpt(); ?></div>
                          <?php
                            $cat = get_the_category();
                            $cat_name = $cat[0] -> cat_name;
                            $cat_slug = $cat[0] -> category_nicename;
                           ?>
                          <span class="news_list_cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
                        </div>
                      </a>
                    </li>
                    <?php
                      endwhile;
                    endif;
                     ?>
                  </ul>
                </div>
                <div class="wp-pagenavi">
                  <?php
                    the_posts_pagination( array(
                      'mid_size' => 1,
                      'prev_text' => '前へ',
                     'next_text' => '次へ',
                    ) );
                  ?>
                </div>
              </div>
                <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
