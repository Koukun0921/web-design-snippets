<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="l-site">
    <header class="p-header l-header">
      <div class="p-header__inner">
        <?php $logo_tag = is_front_page() ? 'h1' : 'div'; ?>
        <<?php echo $logo_tag; ?> class="p-header__logo"><a href="<?php page_path(); ?>">WEB DESIGN SNIPPETS</a></<?php echo $logo_tag; ?>>
        <nav class="p-header__nav" aria-label="メインナビゲーション">
          <ul class="p-header__nav-list">
            <li class="p-header__nav-item">
              <a href="<?php page_path(); ?>">ホーム</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php page_path(); ?>#price">料金</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php page_path(); ?>#faq">faq</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php page_path(); ?>#company">会社概要</a>
            </li>
            <li class="p-header__nav-item p-header__nav-item--login">
              <a href="<?php page_path('login'); ?>">ログイン</a>
            </li>
            <li class="p-header__nav-item p-header__nav-item--mypage">
              <a href="<?php page_path('mypage'); ?>">マイページ</a>
            </li>
          </ul>
        </nav>
        <button type="button" class="p-header__hamburger js-hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="p-header-drawer">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div id="p-header-drawer" class="p-header__drawer js-drawer" aria-hidden="true">
          <nav class="p-header__drawer-nav" aria-label="ドロワーメニュー">
            <ul class="p-header__drawer-list">
              <li class="p-header__drawer-item">
                <a href="<?php page_path(); ?>">ホーム</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php page_path(); ?>#price">料金</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php page_path(); ?>#faq">faq</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php page_path(); ?>#company">会社概要</a>
              </li>
              <li class="p-header__drawer-item p-header__drawer-item--login">
                <a href="<?php page_path('login'); ?>">ログイン</a>
              </li>
              <li class="p-header__drawer-item p-header__drawer-item--mypage">
                <a href="<?php page_path('mypage'); ?>">マイページ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>