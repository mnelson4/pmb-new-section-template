<?php
/*
Plugin Name: Print My Blog - New Section Template
Plugin URI: https://github.com/mnelson4/pmb-sample-default-template-override
Description: https://github.com/mnelson4/pmb-new-section-template
Author: Mike Nelson
Version: 1.0.0
Author URI: https://printmy.blog
*/

define('PMBNST_MAIN_FILE', __FILE__);
define('PMBNST_MAIN_DIR', __DIR__);
add_action( 'pmb_register_designs', 'pmbnst_register_section_template', 1 );

function pmbnst_register_section_template(){
    pmb_register_section_template(
        'sideways',
        [
            'classic_print',
            'classic_digital'
        ],
        function(){
            return [
                'title' => __('Sideways Title', 'print-my-blog'),
                'fallback' => '',
                'filepath' => PMBNST_MAIN_DIR . '/sideways.php'
            ];
        }
    );
}
