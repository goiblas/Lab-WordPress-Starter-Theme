<?php

add_action( 'enqueue_block_editor_assets',  function() {
    wp_enqueue_style( 'goi_enqueue-block-editor-styles',
    get_theme_file_uri( '/css/enqueue-block-editor-assets.css' ) );
} );
