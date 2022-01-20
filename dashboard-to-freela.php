<?php
/**
 * Plugin Name: Dashboard Freela
 * Plugin URI: https://github.com/thomascharbit/smdfw
 * Description: Personaliza o dashboar do wordpress no tema da Agência Freela
 * Author: Gabriel Lapa
 * Author URI: https://mktprime.com/
 * Version: 1.0
 * Requires at least: 4.4
 * Tested up to: 5.8
 * WC requires at least: 2.6
 * WC tested up to: 5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'SMDFW_DIR', plugin_dir_path( __FILE__ ) );

add_action('admin_head', 'custom_changes_css');

function custom_changes_css() {
  echo '<style>
  
   #wpadminbar {

color: #000000 !important;
background: #f1ca4e;
}

.update-message.notice.inline.notice-warning.notice-alt {
display: none !important;
}

.wp-core-ui .button-primary {

color: #fff !important;

}


div#flatsome-notice {
display: none !important;
}

.components-button.is-primary {

background: #f1ca4e !important;

}

li#wp-admin-bar-wp-logo {
display: none;
}


#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {

background: #ffffff;

}

#menu-management .menu-edit, #menu-settings-column .accordion-container, .comment-ays, .feature-filter, .imgedit-group, .manage-menus, .menu-item-handle, .popular-tags, .stuffbox, .widget-inside, .widget-top, .widgets-holder-wrap, .wp-editor-container, p.popular-tags, table.widefat {
border: 1px solid #00000000;
box-shadow: 6px 5px 1px rgb(0 0 0 / 22%);
border-radius: 10px;
}





#adminmenu .awaiting-mod, #adminmenu .update-plugins {

background-color: #ffffff;
color: #000;

box-shadow: 3px 2px 0px #8a55c5;
}


.wp-core-ui .button, .wp-core-ui .button-secondary {
color: #2271b1;
border-color: #000000;
background: #ffffff;

}

a:active, a:hover {
color: #f1ca4e;
}

a {
color: #000000 !important;

}


.wp-menu-name:hover {
background-color: #8a55c5;
color: white !important;
}


#wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before {
color: rgb(0 0 0) !important;
}

#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {

background-color: #f1ca4e;

}

#wpadminbar .ab-empty-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon {
color: #000000;
}

#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
background: #8a55c5;

}

#adminmenu a {

color: #000000;
}


div#setting-error-tgmpa {
display: none !important;
}


.updated.success.fs-notice.fs-has-title.fs-slug-wpcf7-redirect.fs-type-plugin {
display: none !important;
}


#adminmenu .wp-submenu a {

color: rgb(0 0 0) !important;

}

#adminmenu div.wp-menu-image:before {

color: rgb(0 0 0);
}

#collapse-button {

color: #000000 !important;

}

.wp-core-ui .button-primary {
background: #000000;
border-color: #000000;
color: #fff;
text-decoration: none;
text-shadow: none;
}

.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
background: #f1ca4e;
border-color: #f1ca4e !important;
color: #ffffff;
transition: 0.5s;
}


  </style>';
}