<?php
function cat_customize_register($wp_customize)
{


    // Footer section
    $wp_customize->add_section("footer", array(
        'title' => __("Footer", 'cat'),
        'priority' => 120
    ));
    //Copyright
    $wp_customize->add_section("copyright", array(
        'title' => __("Copyright", 'cat'),
        'priority' => 110
    ));
    // Footer 1
    $wp_customize->add_setting("footer-left-title-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("footer-left-title-control", array(
        'label' => "Footer One Title",
        'section' => "footer",
        'settings' => "footer-left-title-setting",
        'type' => 'text'
    ));
    // Footer Two
    $wp_customize->add_setting("footer-two-title-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("footer-two-title-control", array(
        'label' => "Footer Two Title",
        'section' => "footer",
        'settings' => "footer-two-title-setting",
        'type' => 'text'
    ));
    // Footer Three
    $wp_customize->add_setting("footer-three-title-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("footer-three-title-control", array(
        'label' => "Footer Three Title",
        'section' => "footer",
        'settings' => "footer-three-title-setting",
        'type' => 'text'
    ));
    // Footer Four
    $wp_customize->add_setting("footer-four-title-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("footer-four-title-control", array(
        'label' => "Footer Three Title",
        'section' => "footer",
        'settings' => "footer-four-title-setting",
        'type' => 'text'
    ));
    // Copyright
    $wp_customize->add_setting("copyright-text-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("copyright-text-ctrl", array(
        'label' => __("Copyright Text", 'cat'),
        'section' => "copyright",
        'settings' => "copyright-text-setting",
        'type' => 'text'
    ));
    $wp_customize->add_setting("copyright-credit-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("copyright-credit-ctrl", array(
        'label' => __("Copyright Credit", 'cat'),
        'section' => "copyright",
        'settings' => "copyright-credit-setting",
        'type' => 'text'
    ));
    $wp_customize->add_setting("copyright-author-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("copyright-author-ctrl", array(
        'label' => __("Copyright Author", 'cat'),
        'section' => "copyright",
        'settings' => "copyright-author-setting",
        'type' => 'text'
    ));
    $wp_customize->add_setting("copyright-author-url-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("copyright-author-url-ctrl", array(
        'label' => __("Author Url", 'cat'),
        'section' => "copyright",
        'settings' => "copyright-author-url-setting",
        'type' => 'text'
    ));


    //Contact Page
    $wp_customize->add_section("contact", array(
        'title' => __("Contact Page", 'cat'),
        'priority' => 100,
        "active_callback" => function () {
            if (is_page_template("contact.php")) {
                return true;
            }
            return false;
        }
    ));
    $wp_customize->add_setting("contact-title-setting", array(
        'transport' => 'refresh'
    ));
    $wp_customize->add_control("copyright-title-ctrl", array(
        'label' => __("Title", 'cat'),
        'section' => "contact",
        'settings' => "contact-title-setting",
        'type' => 'text'
    ));
}
add_action('customize_register', 'cat_customize_register');
