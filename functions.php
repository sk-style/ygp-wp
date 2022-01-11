<?php
/* セットアップ
------------------------------------------------- */
function my_setup() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action( 'after_setup_theme', 'my_setup' );

/* css・jsの読み込み
------------------------------------------------- */
function my_script_init() {
  // css

  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'my', get_template_directory_uri() . '/css/style.css', array(), '0.0.0', 'all' );
  // js
  if( is_home() || is_front_page() ) {
    wp_enqueue_script('home-js', get_template_directory_uri() . '/js/script_home.js', array( 'jquery' ), '1.0.0', true );
    
  } else {
    wp_enqueue_script('my-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
  }
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

/* 子ページを取得
------------------------------------------------- */
function get_child_pages( $number = -1, $specified_id = null ) {
  if ( isset( $specified_id ) ):
      $parent_id = $specified_id;
  else:
    $parent_id = get_the_ID();
  endif;
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new WP_Query( $args );
  return $child_pages;
}

/* 投稿アーカイブページ[info]作成
------------------------------------------------- */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'info';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* お問い合わせ完了画面のページ遷移
------------------------------------------------- */
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://yg-planning.co.jp/un-test/thanks/';
}, false );
</script>
EOD;
}


?>