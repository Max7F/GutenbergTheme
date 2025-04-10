<?php 

if(function_exists('acf_register_block_types')){
    add_action('acf/init', 'acf_register_block_types');
}

function acf_register_block_types(){
    acf_register_block_type(array(
        'name' => 'block-7fridays',
        'title' => __('Block 7Fridays'),
        'render_template' => '/template-parts/blocks/block-7fridays/block-7fridays.php',
        'enqueue_style'   => get_stylesheet_directory_uri().'/template-parts/blocks/block-7fridays/block-7fridays.css',
        'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/block-7fridays/block-7fridays.js',
        'icon' => 'editor-paste-text'
    )); 

}