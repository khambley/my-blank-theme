function enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
function enqueue_my_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

    // this will add the stylesheet from it's default theme location if your theme doesn't already
    //wp_enqueue_style( 'my-style', get_template_directory_uri() . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');