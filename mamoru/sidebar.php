
            <div class="news_page_side_block">
              <div class="news_page_side_box">
                <h3 class="news_page_side_title font_min">カテゴリー</h3>
                <div class="news_page_side_list">
                  <?php wp_list_categories('title_li=&depth=1'); ?>
                </div>
              </div>
              <div class="news_page_side_box">
                <h3 class="news_page_side_title font_min">人気の投稿</h3>
                <div class="news_page_side_list">
                  <ul>
                    <?php
                     $wpp = array (
                     'range' => 'monthly',
                     'limit' => 5,
                     'post_type' => 'post',
                     'title_length' => '50',
                     'stats_comments' => '0',
                     'stats_views' => '0',
                     'post_html' => '<li>
                    <a href="{url}">
                    {text_title}
                    </a>
                    </li>',
                    ); ?>
                    <?php wpp_get_mostpopular($wpp); ?>
                  </ul>
                </div>
              </div>
              <div class="news_page_side_box">
                <h3 class="news_page_side_title font_min">アーカイブ</h3>
                <div class="news_page_side_list">
                  <ul>
                  <?php wp_get_archives(); ?>
                  </ul>
                </div>
              </div>
            </div>
