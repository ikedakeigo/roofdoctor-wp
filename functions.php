<?php
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
?>
