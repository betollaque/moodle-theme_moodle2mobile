<?php

/**
 * Settings for the moodle2mobile theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    //  Choice Header bar, pop-overs and general theme style
    $name = 'theme_moodle2mobile/choicestyle';
    $title = get_string('choicestyle','theme_moodle2mobile');
    $description = get_string('choicestyledesc', 'theme_moodle2mobile');
    $default = 'deep-blue';
    $choices = array('deep-blue'=>'Deep blue', 'grey'=>'Grey', 'black'=>'Black');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
	
    // Foot note setting
    $name = 'theme_moodle2mobile/footnote';
    $title = get_string('footnote','theme_moodle2mobile');
    $description = get_string('footnotedesc', 'theme_moodle2mobile');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_moodle2mobile/customcss';
    $title = get_string('customcss','theme_moodle2mobile');
    $description = get_string('customcssdesc', 'theme_moodle2mobile');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);

    
    
    
}