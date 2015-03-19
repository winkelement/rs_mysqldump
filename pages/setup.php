<?php

// Do the include and authorization checking ritual -- don't change this section.
include '../../../include/db.php';
include '../../../include/authenticate.php';
if (!checkperm('a')) {
    exit($lang['error-permissiondenied']);
}
include '../../../include/general.php';


// Specify the name of this plugin, the heading to display for the page and the
// optional introductory text. Set $page_intro to "" for no intro text
// Change to match your plugin.
$plugin_name = 'mysqldump';
$page_heading = 'mysqldump heading';
$page_intro = '<p>mysqldump intro</p>';
$page_def = array();



// Build the $page_def array of descriptions of each configuration variable the plugin uses.
// Each element of $page_def describes one configuration variable. Each description is
// created by one of the config_add_xxxx helper functions. See their definitions and
// descriptions in include/plugin_functions for more information.
// Do the page generation ritual -- don't change this section.
$upload_status = config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, $upload_status, $page_heading, $page_intro);
include '../../../include/footer.php';


