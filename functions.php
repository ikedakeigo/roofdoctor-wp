<?php


function my_setup(){
  add_theme_support("post-thumbnails");
  add_theme_support("automatic-feed-links");
  add_theme_support("title-tag");
  add_theme_support("html5", array("search-form", "comment-form", "comment-list", "gallery", "caption"));
}

add_action("after_setup_theme", "my_setup");


function my_scripts_init(){
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");

  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/main.css", array(), filemtime(get_theme_file_path('assets/css/main.css')), "all");

  wp_enqueue_style("slick", get_template_directory_uri() . "/slick/slick.css", array(), filemtime(get_theme_file_path('slick/slick.css')), "all");

  wp_enqueue_style("slick-theme", get_template_directory_uri() . "/slick/slick-theme.css", array(), filemtime(get_theme_file_path('slick/slick-theme.css')), "all");

  wp_enqueue_style("taill", get_template_directory_uri() . "/dist/output.css", array(), filemtime(get_theme_file_path('dist/output.css')), "all");

  // wp_enqueue_script("jquery", "//code.jquery.com/jquery-1.11.0.min.js");

  wp_enqueue_script("slick", get_template_directory_uri() . "/slick/slick.min.js", array("jquery"), filemtime(get_theme_file_path('slick/slick.min.js')), true);

  wp_enqueue_script("preline", get_template_directory_uri() . "/node_modules/preline/dist/preline.js", array("jquery"), filemtime(get_theme_file_path('node_modules/preline/dist/preline.js')), true);

  wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/main.js", array("jquery"), filemtime(get_theme_file_path('assets/js/main.js')), true);
}
add_action("wp_enqueue_scripts", "my_scripts_init");


function my_menu_init(){
  register_nav_menus(
    array(
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action("init", "my_menu_init");

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

?>
