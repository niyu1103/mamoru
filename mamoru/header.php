<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>株式会社マモル | いじめやハラスメントで悩む人が少なくなる社会の実現を目指して</title>
  <meta name="description" content="株式会社マモルは、テクノロジーを使っていじめの発見から対策までをワンストップでサポートします。" />
  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@mamoru_yuko" />
  <meta property="og:site_name" content="株式会社マモル | いじめやハラスメントで悩む人が少なくなる社会の実現を目指して" />
  <meta property="og:url" content="<?php echo home_url(); ?>">
  <meta property="og:title" content="株式会社マモル | いじめやハラスメントで悩む人が少なくなる社会の実現を目指して" />
  <meta property="og:description" content="株式会社マモルは、テクノロジーを使っていじめの発見から対策までをワンストップでサポートします。" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo home_url(); ?>/wp-content/uploads/2019/09/ogp.jpg">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

  <!-- スマホ用アイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-chrome-192x192.png" sizes="192x192">

  <!-- Windows用アイコン -->
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-150x150.png"/>
  <meta name="msapplication-TileColor" content="#18184f"/>
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130883605-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-130883605-1');
</script>
</head>

<body id="page_top" <?php body_class(); ?>>
  <header>
    <div class="nav_wrap">
      <div class="container">
        <div class="nav_block">
          <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="株式会社マモル～いじめの小さなサインを見逃さない～"></a></h1>
          <div class="hm">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="nav_box">
            <nav>
              <ul>
                <?php if (is_front_page()): ?>
                  <li class="nav_hover"><a href="#id_news">ニュース</a></li>
                  <li class="nav_hover"><a href="#id_cv">理念</a></li>
                  <li class="nav_hover"><a href="#id_services">事業内容</a></li>
                  <li class="nav_hover"><a href="#id_company">会社概要</a></li>
                  <li class="contact_btn contact_link"><a href="#id_contact">お問い合わせ</a></li>
                <?php else: ?>
                  <li class="nav_hover"><a href="<?php echo home_url(); ?>/#id_news">ニュース</a></li>
                  <li class="nav_hover"><a href="<?php echo home_url(); ?>/#id_cv">理念</a></li>
                  <li class="nav_hover"><a href="<?php echo home_url(); ?>/#id_services">事業内容</a></li>
                  <li class="nav_hover"><a href="<?php echo home_url(); ?>/#id_company">会社概要</a></li>
                  <li class="contact_btn contact_link"><a href="<?php echo home_url(); ?>/#id_contact">お問い合わせ</a></li>
              <?php endif; ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
