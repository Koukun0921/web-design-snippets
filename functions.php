<?php

function my_script_init()
{
  // WordPressデフォルトのjQueryを削除
  wp_deregister_script('jquery');

  // 新たにjQueryを登録（jQuery CDN）
  wp_register_script(
    'jquery',
    'https://code.jquery.com/jquery-3.7.1.min.js',
    array(),
    '3.7.1',
    true
  );

  // CSS読み込み
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')),  'all');

  // JavaScript読み込み（jQueryに依存）
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_theme_file_path('assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * Google Fontsの読み込み
 */
function add_google_fonts_links()
{
?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<?php
}
add_action('wp_head', 'add_google_fonts_links');
/**
 * セキュリティー対策
 */

remove_action('wp_head', 'wp_generator');

add_filter('author_rewrite_rules', '__return_empty_array');
function disable_author_archive()
{
  if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(esc_url(home_url('/404.php')));
    exit;
  }
}
add_action('init', 'disable_author_archive');

if (!is_admin()) {
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
  add_filter('redirect_canonical', 'my_shapespace_check_enum', 10, 2);
}
function my_shapespace_check_enum($redirect, $request)
{
  if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
  else return $redirect;
}

/**
 * pタグとbrタグの自動挿入を解除
 */
add_action('init', 'disable_output');

function disable_output()
{
  remove_filter('the_content', 'wpautop');  // 本文欄
  // remove_filter('the_title', 'wpautop');  // タイトル蘭
  // remove_filter('comment_text', 'wpautop');  // コメント欄
  // remove_filter('the_excerpt', 'wpautop');  // 抜粋欄
}

/*
 * テンプレートパスを返す
 */
function temp_path()
{
  echo esc_url(get_template_directory_uri());
}
/* assetsパスを返す */
function assets_path()
{
  echo esc_url(get_template_directory_uri() . '/assets');
}
/* 画像パスを返す */
function img_path()
{
  echo esc_url(get_template_directory_uri() . '/assets/images');
}
/* mediaフォルダへのURL */
function uploads_path()
{
  echo esc_url(wp_upload_dir()['baseurl']);
}

function page_path($page = "")
{
  $page = $page . '/';
  echo esc_url(home_url($page));
}

// All-in-One WP Migration でエクスポート対象からビルド・開発用ファイルを除外
add_filter('ai1wm_exclude_content_from_export', function ($exclude) {
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/node_modules';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/src';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/coding-md';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/gulpfile.js';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/gulpfile.mjs';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/package.json';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/package-lock.json';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/yarn.lock';
  $exclude[] = 'themes/WEB DESIGN SNIPPETS/pnpm-lock.yaml';

  return $exclude;
});
