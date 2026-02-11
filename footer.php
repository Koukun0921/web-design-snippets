<?php get_template_part('parts/p-top-sns'); ?>

<footer id="footer" class="p-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__logo">
      <a href="<?php page_path(); ?>">WEB DESIGN<br>SNIPPETS</a>
    </div>
    <div class="p-footer__contents">
      <nav class="p-footer__nav" aria-label="フッターナビゲーション">
        <ul class="p-footer__nav-list">
          <li class="p-footer__nav-item"><a href="<?php page_path(); ?>">お問い合わせ</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path('term'); ?>">利用規約</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path('privacy'); ?>">プライバシーポリシー</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path('law'); ?>">特定商取引法に基づく表記</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path('#faq'); ?>">無料会員について（FAQページor注意事項）</a></li>
        </ul>
      </nav>
      <!-- <ul class="p-footer__icons">
        <li class="p-footer__icon-item">
          <a href="/" target="_blank" rel="noopener noreferrer" aria-label="Figma">
            <img src="<?php img_path(); ?>/common/footer-icon-01.webp" alt="" width="24" height="24" loading="lazy" decoding="async">
          </a>
        </li>
        <li class="p-footer__icon-item">
          <a href="/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <img src="<?php img_path(); ?>/common/footer-icon-02.webp" alt="" width="24" height="24" loading="lazy" decoding="async">
          </a>
        </li>
        <li class="p-footer__icon-item">
          <a href="/" target="_blank" rel="noopener noreferrer" aria-label="X">
            <img src="<?php img_path(); ?>/common/footer-icon-03.webp" alt="" width="24" height="24" loading="lazy" decoding="async">
          </a>
        </li>
      </ul> -->
    </div>
  </div>
  <div class="p-footer__copyright">
    <small>© <?php echo esc_html(date('Y')); ?> Web Design Snippets. All Rights Reserved.</small>
  </div>
</footer>

<?php wp_footer(); ?>
</div>

</body>

</html>