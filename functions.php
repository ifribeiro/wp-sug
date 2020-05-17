<?php
add_theme_support("post-thumbnails");
/**
 * Sets up theme defaults and registers support for some WordPress features.
 *
 */
function theme_setup()
{

    # add the initializing the types of custom post
    //require_once(dirname(__FILE__).'/inc/custom_post_type.php');

    # ordering the administration menu
    //require_once(dirname(__FILE__).'/inc/menu-order-admin.php');

    # add to theme supporte fot featured image
    add_theme_support("post-thumbnails");
    # custom thumbs
    add_image_size('thumb-blog', 357, 194, true);
    add_image_size('thumb-single', 1120, 480, true);

    # This feature enables Automatic Feed Links for post and comment in the head
    add_theme_support('automatic-feed-links');
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.	 *
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Google analitycs code
    //add_action( 'wp_enqueue_scripts', 'google_analityc_code' );

}

add_action('after_setup_theme', 'theme_setup'); #action
function pxlcore_give_edit_theme_options($caps)
{

    /* check if the user has the edit_pages capability */
    if (!empty($caps['edit_pages'])) {

        /* give the user the edit theme options capability */
        $caps['edit_theme_options'] = true;

    }

    /* return the modified capabilities */
    return $caps;

}

add_filter('user_has_cap', 'pxlcore_give_edit_theme_options');
function get_imagem($opcoes = null, $url = null, $size = 'large')
{
    $opt = "";
    if (!empty($opcoes)) {
        $opt .= isset($opcoes['a']) ? ("&a=" . $opcoes['a']) : "";
        $opt .= isset($opcoes['l']) ? ("&l=" . $opcoes['l']) : "";
    }

    if ($url === null)
        $url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size);
    $url = $url[0];

    $desmonta = explode("/", $url);
    $imagem = $desmonta[sizeof($desmonta) - 3] . "/" . $desmonta[sizeof($desmonta) - 2] . "/" . $desmonta[sizeof($desmonta) - 1];

    $upload_dir = wp_upload_dir();
    $upload_dir = $upload_dir['basedir'];

    $url = $upload_dir . "/" . $imagem;

    $url = get_template_directory_uri() . "/img.php?img=" . urlencode($url) . $opt;
    return $url;
}

function resumo($conteudo, $limit)
{
    $excerpt = explode(' ', $conteudo, $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';

    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    echo $excerpt;
}

function excerpt($limit)
{

    if ($content == null) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);

        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';

        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`\[[^\]] ]`', '', $excerpt);
        echo $excerpt;
    }
}

function personal_excerpt($limit)
{

    $excerpt = explode(' ', $content, $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';

    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]] ]`', '', $excerpt);
    echo $excerpt;
}

if (!function_exists('posted_on')):
    function posted_on()
    {
        echo get_the_time() . " | " . get_the_date("d/m/Y");
    }
endif;

function extended_contact_info($user_contactmethods)
{

    $user_contactmethods = array(
        'facebook' => __('Facebook'),
        'googlemais' => __('Google+'),
        'twitter' => __('Twitter'),
        'endereco' => __('Endereço'),
        'telefone' => __('Telefone')
    );

    return $user_contactmethods;
}

add_filter('user_contactmethods', 'extended_contact_info');
//add_filter('posts_where', 'title_like_posts_where', 10, 2);
function title_like_posts_where($where, &$wp_query)
{
    global $wpdb;
    if ($post_title_like = $wp_query->get('post_title_like')) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'' . esc_sql($wpdb->esc_like($post_title_like)) . '%\'';
    }
    return $where;
}