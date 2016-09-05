<?php
/*
 * WordPress Ninja by A Q Khan ( aqkhan@iintellect.co.uk )
 * Contains most of basic WP functions and some high level custom code shit.
 * Version 0.1
 * Last Updated: March 26, 2016
 */

//== BASIC LEVEL SHIT ==//

//-- Uncomment the code below to change URL of the website --//
/*if(get_option('siteurl') != 'http://localhost/target_url') {
    update_option('siteurl','http://localhost/target_url');
    wp_die("siteurl URL Changed!", "siteurl Updated");
}
if(get_option('home') != 'http://localhost/target_url') {
    //echo "<h1>Home URL: {get_option('home')}</h1>";
    update_option('home','http://localhost/target_url');
    die("home URL Changed!", "home Updated");
}*/
session_start();
$_SESSION['parent']=$term_id;

error_reporting(E_ALL);

//-- Load Custom CSS --//
function load_scripts() {
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_scripts', 12);

//-- Load Custom JS --//
//-- Load jQuery the proper way --//
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 10);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.2.min.js', false, null);
    wp_enqueue_script('jquery');
    //-- Load Bootstrap (version 3.1.1 minified)--//
}

//-- Load Bootstrap (version 3.1.1 minified)--//
function load_bootstrap() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awsome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style('code-css', get_template_directory_uri() . '/css/code.css');
    wp_enqueue_style('range', get_template_directory_uri() . '/css/range.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', false, null);
    wp_enqueue_script('code-ui', get_template_directory_uri() . '/js/code-ui.js', false, null);
    wp_enqueue_script('range-js', get_template_directory_uri() . '/js/range.js', false, null);

}
add_action('wp_enqueue_scripts', 'load_bootstrap', 11);

//-- Print Conditional Scripts (Bootstrap or Browser Compatibility scripts) --//
function conditional_scripts() {
    echo '
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    ';
}
add_action( 'wp_print_styles', 'conditional_scripts', 13 );


//-- Include Admin Panel or custom include files to your theme --//
//include_once(dirname(__FILE__) . '/includes/admin.php');

//-- Disabling Admin Bar --//
add_filter('show_admin_bar', '__return_false');

//-- Add feature image to posts --//
add_theme_support( 'post-thumbnails' );

//-- Register theme menus --//
function register_my_menus() {
    register_nav_menus(
        array( 'primary-menu' => __( 'Public Menu' ),'footer-menu' => __( 'Footer Menu' ) )
    );
}
add_action( 'init', 'register_my_menus' );

//-- Registering Sidebar --//
register_sidebar(array(
    'name' => __( 'Sidebar Name' ),
    'id' => 'sidebar-id',
    'description' => __( 'Sidebar Description' ),
    'before_title' => '<h1>',
    'after_title' => '</h1>'
));

//-- Custom Excerpt --//
function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(' ',$excerpt).' ...';
    echo $excerpt;
}

//-- AJAX Sample function and hook below --//
function name_of_function() {
    //-- Do something here
}
//add_action('wp_ajax_name_of_function', 'name_of_function');
//add_action('wp_ajax_nopriv_name_of_function', 'name_of_function');

// \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\ // \\

//== ADVANCE LEVEL SHIT ==//

//-- Custom Role --//
/*
function my_custom_role() {
    add_role(
        'role_id',
        __( 'Role Name' ),
        array(
            'read'         => true,  // true allows this capability
            'edit_posts'   => false,
            'delete_posts' => false, // Use false to explicitly deny
        ));
}
add_action( 'init', 'my_custom_role' );
*/

//-- WordPress Session --//
/*
function register_session(){
    if( !session_id() )
        session_start();
}
add_action('init','register_session');
*/

//-- Password protect website --//
/*
function website_down() {
    if(!empty($_REQUEST['aqk_unlock'])) {
        $pass = $_REQUEST['aqk_unlock'];
        if($pass === 'password') {
            $_SESSION['unlock_aqk'] = 'true';
        }
    }
    if(!isset($_SESSION['unlock_aqk']) && empty($_SESSION['unlock_aqk'])) {
        wp_die('Good Sir, You just broke the internet', 'You are not suppose to be here');
    }
}
add_action('wp_head', 'website_down');
*/

//-- Resize and PRINT images (Needs a page to print image on ) --//
/*
function aqk_resize_image($absolute_path, $width, $height) {
    $resized = wp_get_image_editor( $absolute_path );
    if (! is_wp_error($resized)) {
        $resized->resize($width, $height, true);
        // Prionts Image
        $resized->stream($mime_type = 'image/png');
    }
}
function aqk_print_image($absolute_path, $width, $height) {
    echo '<img src="http://your-address.com/page-name-where-above-function-is-used/?resize_me=' . $absolute_path . '&resize_me_w=' . $width . '&resize_me_h=' . $height . '" alt="Resized by A Q Khan">';
}
*/

//-- Pagination --//
/*
function con_pagination($pages = '', $range = 2){
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1; }
    }
    if(1 != $pages){
        echo "<div class='pagination'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
        if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
        echo "</div>\n";
    }
}
*/

// main category function
     function parent_category(){
         //$id = $_REQUEST['id'];
         $main = get_terms(
             array(
                 'taxonomy'=> 'categories',
                 'parent' => 0,
                 'hide_empty'=> false,
                // 'parent' => $id
             )
         );
         $cat_str = [];
         foreach($main as $cat) {
             array_push($cat_str, $cat->name);
         }
         return $cat_str;
     }
      add_action( 'wp_ajax_parent_category', 'parent_category' );
      add_action( 'wp_ajax_nopriv_parent_category', 'parent_category' );


// sub-category function
   function child_category(){
       if(!empty($_SESSION['parent'])) {
           $parent_id = $_SESSION['parent'];
       } else {
           $parent_id = '';
       }
       $catogries= get_terms(
         array(
          'taxonomy'=> 'categories',
          'hide_empty'=> false,
          'childless' => true,
          'parent' => $parent_id
   )
       );
       $sub_str = [];
       foreach ($catogries as $city){
           array_push($sub_str, $city->name);
       }
       return $sub_str;
   }
   add_action( 'wp_ajax_child_category', 'child_category' );
   add_action( 'wp_ajax_nopriv_child_category', 'child_category' );

     //get house posts function
    function house_posts(){
        $sub_id = $_REQUEST['cat_id'];
        $args = array(
            'post_type' => 'house',
            'tax_query' => array(
                array(
                    'taxonomy' => 'categories',
                    'field'    => 'name',
                    'terms'    => $sub_id
                ),
            ),
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ):
            while( $query->have_posts() ): $query->the_post();

                echo '<div class="col-sm-4">
                        <div class="sngl-house">
                           <h2> '.get_the_title().' </h2>
                            <a href="'. get_permalink() . '">Read more <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
                        </div>
                       </div>';

            endwhile;
        endif;
        wp_reset_postdata();
        wp_die();
    }
    add_action( 'wp_ajax_house_posts', 'house_posts' );
    add_action( 'wp_ajax_nopriv_house_posts', 'house_posts' );


// get_child function
function get_child_parent(){
    $parent_name = $_REQUEST['parent_name'];
    $parent_term = get_term_by('name', $parent_name, 'categories');
    $term_id = $parent_term->term_id;
    $_SESSION['parent'] = $term_id;
    echo $_SESSION['parent'];
    wp_die();
}
add_action( 'wp_ajax_get_child_parent', 'get_child_parent' );
add_action( 'wp_ajax_nopriv_get_child_parent', 'get_child_parent' );

// Acf values
function post_submit() {
        $my_post = array(
            'post_type' => 'house',
            'post_status' => 'publish'
        );
        $post_living = $_REQUEST['living'];
        $post_kitchen = $_REQUEST['kitchen'];
        $post_wash = $_REQUEST['wash'];
        $post_hall = $_REQUEST['hall'];
        $post_dinning = $_REQUEST['dinning'];
        $post_guest = $_REQUEST['guest'];
        $post_store = $_REQUEST['store'];
        $post_laundry = $_REQUEST['laundry'];
        $houses_price = $_REQUEST['houses_price'];
        $post_servant = $_REQUEST['servant'];
        $post_gallery = $_REQUEST['gallery'];
        $post_basement = $_REQUEST['basement'];
        $post_study = $_REQUEST['study'];
        $post_work = $_REQUEST['work'];
        $post_swimming = $_REQUEST['swimming'];
        $post_sun = $_REQUEST['sun'];
        $post_library = $_REQUEST['library'];
        $post_garden = $_REQUEST['garden'];
        $post_garage = $_REQUEST['garage'];
        $post_furnished = $_REQUEST['furnished'];
        $post_rent = $_REQUEST['rent'];
        $id = $_REQUEST['id'];

        $the_post_id = $id;

        update_post_meta($the_post_id,'roms-detail', $post_living);
        update_post_meta($the_post_id,'kitchen',$post_kitchen );
        update_post_meta($the_post_id,'wash_room',$post_wash );
        update_post_meta($the_post_id,'hall',$post_hall );
        update_post_meta($the_post_id,'dining_room',$post_dinning );
        update_post_meta($the_post_id,'guest_room',$post_guest );
        update_post_meta($the_post_id,'store',$post_store );
        update_post_meta($the_post_id,'laundry_room',$post_laundry );
        update_post_meta($the_post_id,'house_price',$houses_price );
        update_post_meta($the_post_id,'servants_room',$post_servant );
        update_post_meta($the_post_id,'gallery',$post_gallery );
        update_post_meta($the_post_id,'basement',$post_basement );
        update_post_meta($the_post_id,'study_room',$post_study );
        update_post_meta($the_post_id,'workshop',$post_work);
        update_post_meta($the_post_id,'swimming_pool',$post_swimming );
        update_post_meta($the_post_id,'sunroom',$post_sun );
        update_post_meta($the_post_id,'library',$post_library );
        update_post_meta($the_post_id,'garden',$post_garden );
        update_post_meta($the_post_id,'garage',$post_garage );
        update_post_meta($the_post_id,'furnished',$post_furnished );
        update_post_meta($the_post_id,'rent',$post_rent );
    wp_die();
}
add_action( 'wp_ajax_post_submit', 'post_submit' );
add_action( 'wp_ajax_nopriv_post_submit', 'post_submit' );

//search posts function
function search_posts(){
    $rom_check = $_REQUEST['rom_check'];
    $search_id = $_REQUEST['search_id'];
    $house_check = $_REQUEST['house_check'];
    $price_detail = $_REQUEST['price_detail'];
    //$slider_range = $_REQUEST['slider_range'];

    $meta_q = array(
        'relation' => 'AND'
    );
    if(!empty($_REQUEST['rom_check'])){
        $meta_q[] = array(
            'key'     => 'roms-detail',
            'value'   => $rom_check,
            'compare' => '='
        );
    }
    if(!empty($_REQUEST['house_check'])){
        $meta_q[] = array(
            'key'     => 'house_category',
            'value'   => $house_check,
            'compare' => '='
        );
    }
    if(!empty($_REQUEST['price_detail'])){
        $meta_q[] = array(
            'key'     => 'house_price',
            'value' => $price_detail,
            'compare' => '='
        );
    }
//    if(isset($_REQUEST["slider_range"])&& $_REQUEST["slider_range"]!='') {
//        $selectedPrice=$_REQUEST["slider_range"];
//        $parts = explode("-",$selectedPrice);
//        $min = $parts[0];
//        $max = $parts[1];
//
//        mam_custom_field_range('slider_range',$min,$max);
//    }
        $args = array(
            'post_type' => 'house',
            's' => $search_id,
            'meta_query' => $meta_q
        );

        $meta_query =  new WP_Query( $args );
        if( $meta_query->have_posts() ):
            while( $meta_query->have_posts() ): $meta_query->the_post();

                echo '<div class="col-sm-4">
                        <div class="sngl-house">
                           <h2> '.get_the_title().' </h2>
                            <a href="'. get_permalink() . '">Read more <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
                        </div>
                       </div>';

            endwhile;
        else:{
            echo '<h1>No Record Found</h1>';
        }
        endif;
        wp_reset_postdata();
    wp_die();
}
add_action( 'wp_ajax_search_posts', 'search_posts' );
add_action( 'wp_ajax_nopriv_search_posts', 'search_posts' );