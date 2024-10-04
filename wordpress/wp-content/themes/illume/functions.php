<?php



function illume_theme_custom_script()
{

    // Menu for mobile
    wp_enqueue_script(
        'menu-mobile-js',
        get_template_directory_uri() . '/assets/js/menu-mobile.js',
        array(),
        wp_get_theme()->get('Version'),
        true // load on footer
    );
}
add_action('wp_enqueue_scripts', 'illume_theme_custom_script');


//Add css styles
function illume_theme_enqueue_styles()
{
    wp_enqueue_style(
        'illume_theme-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

add_action('wp_enqueue_scripts', 'illume_theme_enqueue_styles');


//Register Patterns
require get_stylesheet_directory() . '/inc/block-patterns.php';


// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell in the customizer
if (class_exists('WP_Customize_Section')) {
    class Illume_Upsell_Section extends WP_Customize_Section
    {
        public $type = 'illume-upsell';
        public $button_text = '';
        public $url = '';
        public $background = '';
        public $text_color = '';
        protected function render()
        {
            $background = ! empty($this->background) ? esc_attr($this->background) : 'linear-gradient(90deg,rgb(0,0,0) 0%,rgb(0,0,0) 35%,rgb(0,0,0) 70%,rgb(0,0,0) 100%)
            ';
            $text_color       = ! empty($this->text_color) ? esc_attr($this->text_color) : '#fff';
?>
            <li id="accordion-section-<?php echo esc_attr($this->id); ?>" class="illume_upsell_section accordion-section control-section control-section-<?php echo esc_attr($this->id); ?> cannot-expand">
                <h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr($background); ?>;">
                    <?php echo esc_html($this->title); ?>
                    <a href="<?php echo esc_url($this->url); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html($this->button_text); ?></a>
                </h3>
            </li>
        <?php
        }
    }
}




// Add Get Started PAge
require get_template_directory() . '/inc/get-started/get-started.php';

//Add notice icons
function illume_notice()
{
    $user_id = get_current_user_id();
    if (!get_user_meta($user_id, 'illume_notice_dismissed')) {

        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex-inline;padding: 10px;">
            <h2 style="color: #FFC300"><?php echo esc_html('☆☆☆☆☆', 'illume'); ?><br></h2>
            <p><?php echo esc_html('This is just a sample of what the Illume Template can do, the Premium Version is waiting for you!', 'illume'); ?></p>
            <a style="margin-top: 18px;" class="button button-primary" target="_blank"
                href="<?php echo esc_url('https://realtimethemes.com/theme-illume'); ?>"><?php esc_html_e('See Premium Version', 'illume') ?></a>
            <a href="?illume-dismissed" style="margin-top: 18px;" class="button button-secondary"><?php echo esc_html('Dismiss', 'illume'); ?></a>
        </div>
<?php
    }
}
add_action('admin_notices', 'illume_notice');

function illume_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['illume-dismissed'] ) ) 
        add_user_meta( $user_id, 'illume_notice_dismissed', 'true', true );
}
add_action( 'admin_init', 'illume_notice_dismissed' );

// Nav Menu 
function illume_theme_setup()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'illume'),
        'footer_menu'  => __('Footer Menu', 'illume')
    ));
}
add_action('after_setup_theme', 'illume_theme_setup');


/* Theme credit link */
define('illume_BUY_NOW', __('https://realtimethemes.com/theme-illume', 'illume'));
define('illume_PRO_DEMO', __('https://preview.realtimethemes.com/illume/', 'illume'));
define('illume_REVIEW', __('https://realtimethemes.com/theme-illume', 'illume'));
define('illume_SUPPORT', __('https://realtimethemes.com/', 'illume'));
