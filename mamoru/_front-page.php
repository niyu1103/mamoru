<?php get_header(); ?>
  <main>
    <section>
      <div class="mv_block">
        <h2 class="page_h2title">いじめの小さな<br class="sp_only">サインを見逃さない</h2>
      </div>
    </section>
    <section id="id_news">
      <div class="news_block">
        <div class="container">
          <div class="news_block_wrap">
            <h2 class="page_h2title">ニュース</h2>
            <div class="news_cat nav_hover">
              <ul>
                <li class="cat_nav_list"><a href="javascript:void(0)" class="all is-active">すべて</a></li>
                <li class="cat_nav_list"><a href="javascript:void(0)" class="media">メディア掲載</a></li>
                <li class="cat_nav_list"><a href="javascript:void(0)" class="blog">寄稿</a></li>
                <li class="cat_nav_list"><a href="javascript:void(0)" class="event">イベント登壇</a></li>
                <li class="cat_nav_list"><a href="javascript:void(0)" class="history">活動履歴</a></li>
              </ul>
            </div>
          <div class="news_list_box">
              <!-- 新着記事一覧　すべて -->
            <div class="change_cat all is-active">
              <ul class="slide">
                <?php
                $args = array(
                  'posts_per_page' => 6
                );
                $posts =get_posts($args);
              if (!empty($posts)):
                foreach ($posts as $post):
                setup_postdata($post);
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
              <?php
             endforeach;
              wp_reset_postdata();
            endif;
              ?>
              </ul>
            </div>
                <!-- /新着記事一覧　すべて -->

                <!-- 新着記事一覧　メディア -->
            <div class="change_cat media">
              <ul class="slide">
                <?php
                $args = array(
                  'posts_per_page' => 6,
                  'category_name' => 'cat_media'
                );
                $posts =get_posts($args);
              if (!empty($posts)):
                foreach ($posts as $post):
                setup_postdata($post);
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
              <?php
             endforeach;
              wp_reset_postdata();
            endif;
              ?>
              </ul>
            </div>
                <!-- /新着記事一覧　メディア -->

                <!-- 新着記事一覧　寄稿 -->
            <div class="change_cat blog">
              <ul class="slide">
                <?php
                $args = array(
                  'posts_per_page' => 6,
                  'category_name' => 'cat_blog'
                );
                $posts =get_posts($args);
              if (!empty($posts)):
                foreach ($posts as $post):
                setup_postdata($post);
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
              <?php
             endforeach;
              wp_reset_postdata();
            endif;
              ?>
              </ul>
          </div>
                <!-- /新着記事一覧　寄稿 -->

                <!-- 新着記事一覧　イベント -->
            <div class="change_cat event">
              <ul class="slide">
                <?php
                $args = array(
                  'posts_per_page' => 6,
                  'category_name' => 'cat_event'
                );
                $posts =get_posts($args);
              if (!empty($posts)):
                foreach ($posts as $post):
                setup_postdata($post);
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
              <?php
             endforeach;
              wp_reset_postdata();
            endif;
              ?>
              </ul>
          </div>
                <!-- /新着記事一覧　イベント -->

                <!-- 新着記事一覧　活動履歴 -->
          <div class="change_cat history">
              <ul class="slide">
                <?php
                $args = array(
                  'posts_per_page' => 6,
                  'category_name' => 'cat_history'
                );
                $posts =get_posts($args);
              if (!empty($posts)):
                foreach ($posts as $post):
                setup_postdata($post);
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
              <?php
             endforeach;
              wp_reset_postdata();
            endif;
              ?>
              </ul>
            </div>
                <!-- /新着記事一覧　活動履歴 -->
          </div>
            <div class="to_news_btn">
              <a href="/news">一覧を見る</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="id_cv">
      <div class="container">
        <div class="cv_block">
          <h2 class="page_h2title">テクノロジーで<br>言えなかった&nbsp;知らなかったから<br>みんなを守る</h2>
          <div class="cv_box">
            <div class="cv_text">
              <h3>代表メッセージ</h3>
              <p class="cv_text_margin">痛ましい事件にもつながっている、学校でのいじめ。いじめをなくすために様々な対策がとられていますが状況はよくなりません。</p>
              <p class="cv_text_margin">いじめ対応において最も重要なのは，小さなサインを見逃ず、適切な対応をすること。これらを満たすものはないだろうかと、マモルは始まりました。</p>
              <p class="cv_text_margin">いじめの発見から対策までをワンストップでサポート。
              私達は、学校へ<br class="pc_only">最善の対応方法を提供し、知識の共有を通じて、
              教育機関に再現性のある<br class="pc_only">組織体制を作ります。
              マモルが目指すのは、いじめを解決するだけでなく、いじめの予兆を検知し
              未然に防ぎ、いじめで悩む子がいなくなる社会です。</p>
              <p class="cv_text_margin">代表取締役 CEO　隈　有子</p>
            </div>
            <div>
              <img class="cv_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.jpg" alt="もっと身近に安全にいじめが起きていることを知らせる手段を">
              <p class="cv_img_text">特許出願中　2015-257090</p>
            </div>
          </div>
          <div class="cv_point">
            <ul>
              <li class="cv_point_list">
                <h3 class="cv_point_list_title">価値<span class="cv_point_list_title_en">VALUE</span></h3>
                <div class="cv_point_list_sub_title font_min">社会に提供する価値</div>
                <p class="cv_point_list_text font_min">弁護士等の外部専門家による知見に裏付けられた解決策を提供<br>再現性のある仕組みを構築し、いじめの発見から対策までをワンストップでサポート</p>
              </li>
              <li class="cv_point_list">
                <h3 class="cv_point_list_title">使命<span class="cv_point_list_title_en">MISSION</span></h3>
                <div class="cv_point_list_sub_title font_min">存在意義・使命</div>
                <p class="cv_point_list_text font_min">小さないじめのサインに気がつくことができるようにいじめを受けている人だけでなく、支援者である学校、教員に寄り添うサービスを提供</p>
              </li>
              <li class="cv_point_list">
                <h3 class="cv_point_list_title">挑戦<span class="cv_point_list_title_en">CHALLENGE</span></h3>
                <div class="cv_point_list_sub_title font_min">実現したい未来</div>
                <p class="cv_point_list_text font_min">アンケートでは表面化しづらい心理状態の可視化声なき声を救うアウトリーチへ<br>いじめの事後対応だけでなく、<br>いじめの検知へ</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="id_services">
      <div class="services_block">
        <h2 class="page_h2title">事業内容</h2>
        <div class="container">
          <div class="services_box">
            <ul>
              <li class="services_list">
                <span class="services_list_no">01</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents01.png" alt="">
                <h3 class="services_list_title">いじめを未然に防ぐ<br>学校向けシステムの開発、運用</h3>
                <p class="services_text">マモルは完全匿名のサービスです。<br>アクセス行動履歴から児童や生徒の心の動きを予測し、いじめを未然に防ぎます。<br>アンケートでは表面化しづらい、いじめの事実をいち早く把握することができます。</p>
                <div class="to_system_btn">
                  <a href="/system">いじめを未然に防ぐ<span class="font_size_18">マモル&nbsp;とは</span></a>
                </div>
              </li>
              <li class="services_list">
                <span class="services_list_no">02</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents02.png" alt="">
                <h3 class="services_list_title">ハラスメントを未然に防ぐ<br>法人向けシステムの開発、運用</h3>
                <p class="services_text">Coming Soon</p>
              </li>
              <li class="services_list">
                <span class="services_list_no">03</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents03.png" alt="">
                <h3 class="services_list_title">講演・セミナー</h3>
                <p class="services_text">いじめ問題、発達障害、不登校、スマホの使い方等保護者の方が気になる事を、メディア媒体協力の元発信しています。 メディアでの発信は、沢山の方々に問題提起ができる有効な手段と考えています。</p>
                <p class="services_text_sub">また近年はいじめがSNSで起こりやすいという事から、SNS講演・セミナーを通して、一緒に考え課題の改善に取り組んでいます。</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="id_company">
      <div class="company_block">
        <div class="container">
          <h2 class="page_h2title company_title">会社概要</h2>
          <div class="company_info_box">
            <div class="company_info">
              <h3 class="company_info_title">Mamoru Inc.　 株式会社マモル</h3>
              <dl>
                <dt>住所</dt>
                <dd>160-0023　東京都新宿区西新宿1-1-6&nbsp;<br class="sp_only">12SHINJUKU 1103</dd>
              </dl>
              <dl>
                <dt>代表</dt>
                <dd>隈有子（くまゆうこ）</dd>
              </dl>
              <dl>
                <dt>設立</dt>
                <dd>2018年7月30日<span class="company_info_link"><a href="https://www.good-net.jp/" target=”_blank”>安心ネットづくり促進協議会</a>賛助会員</span>
                </dd>
              </dl>
            </div>
            <div class="g-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.530261448537!2d139.69748665135353!3d35.68856673213058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dc083cbec4b%3A0xc1b67ee134c6e2b8!2s12%20SHINJUKU!5e0!3m2!1sja!2sjp!4v1567594058453!5m2!1sja!2sjp" width="640" height="240" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="company_info_president_box">
          <div class="container">
            <div class="company_info_president_wrap">
              <div class="company_info_president">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="代表取締役社長 齋藤有子">
                <p class="company_info_president_name_wrap">代表取締役社長<span class="company_info_president_name">隈有子</span></p>
                <ul class="company_info_president_sns">
                  <li><a href="https://twitter.com/mamoru_yuko" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="twitter"></a></li>
                  <li><a href="https://note.mu/mamoru310" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/assets/img/note.png" alt="note"></a></li>
                </ul>
              </div>
              <div class="company_info_president_text">
                <p>大学を卒業後、大手音響機器メーカーにてクラリオン株式会社にてコンテンツ企画、マーケティングを行う。<br>
                  2007年勤務の傍ら、東京大学大学院情報学環コンテンツ創造科学産学連携教育プログラム4期生に所属。<br>
                  その後、株式会社ディー・エヌ・エーにてモバイルコンテンツ企画、プロモーションなどに従事。<br>
                  ITベンチャー企業執行役員を経て、<br>
                  2013年事業開発ディレクターとして独立。<br>
                  ワーキングマザー向けメディア立ち上げ等に関わりながら、多くの保護者と接点を持つ中で、以前から問題意識のあった<br>
                  「いじめ」を少しでもなくしたいという思いから2018年株式会社マモルを設立。<br>
                  自身の強みであるWebマーケティングのノウハウを活かし、<br>
                  いじめを未然に防ぐシステム「マモル」を開発する傍ら、いじめ関連のセミナーの登壇、執筆等を行う。
                  <span class="company_info_president_text_sub">ソーシャルワークと子どもの権利条約勉強会　<br class="sp_only">運営委員</span></p>
              </div>
            </div>
            <div class="company_info_team_wrap">
              <div class="company_info_team_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stuff.jpg" alt="">
              </div>
              <div class="company_info_team_list_box">
                <p class="company_info_team_list_title">メンバー</p>
                <div class="company_info_team_list">
                  <ul>
                    <li>MURAKAMI RIKOU</li>
                    <li>YAMADA SHUHEI</li>
                    <li>YOSHIDA AYAKO</li>
                    <li>KOUYAMA NOZOMI</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="id_contact">
      <div class="contact_block">
        <div class="container">
          <div class="contact_btn contact_link">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJPl8odystbTBXHNp6nNimGaMXnU9WSqI5THjIe9q1hukxkA/viewform?c=0&w=1" target="_blank">お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
