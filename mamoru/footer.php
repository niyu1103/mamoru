  <footer>
    <div id='footer' class="footer_block">
      <div id="totop"><a href="#page_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/totop.png" alt=""></a></div>
      <h3 class="fotter_name"><a href="<?php echo home_url(); ?>">Mamoru Inc.　 株式会社マモル</a></h3>
      <div class="footer_nav">
        <ul>
          <li><a href="<?php echo home_url(); ?>/#id_news">ニュース</a></li>
          <li><a href="<?php echo home_url(); ?>/#id_cv">理念</a></li>
          <li><a href="<?php echo home_url(); ?>/#id_services">事業内容</a></li>
          <li><a href="<?php echo home_url(); ?>/#id_company">会社概要</a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfJPl8odystbTBXHNp6nNimGaMXnU9WSqI5THjIe9q1hukxkA/viewform?c=0&w=1" target="_blank">お問い合わせ</a></li>
        </ul>
      </div>
      <p class="copyright"><small>Copyright © 2018-<?php echo date("Y"); ?> inc. All Rights Reserved.</small></p>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php  echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
</body>

</html>
