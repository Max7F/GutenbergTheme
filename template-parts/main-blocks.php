<?php 

if(function_exists('acf_register_block_types')){
    add_action('acf/init', 'acf_register_block_types');
}
//this block 'block-7fridays' is an example. Follow the structure. Can be deleted
function acf_register_block_types(){
    acf_register_block_type(array(
        'name' => 'block-7fridays',
        'title' => __('Block 7Fridays'),
        'render_template' => '/template-parts/blocks/block-7fridays/block-7fridays.php',
        'icon' => 'editor-paste-text'
    )); 

}