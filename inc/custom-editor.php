<?php



function goi_custom_editor_setup() {

    add_theme_support( 'editor-styles' );
    add_theme_support( 'dark-editor-style' );

    $googleFont = 'https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700';
    //Enqueuing the editor style
    add_editor_style( ['css/style-editor.css', $googleFont] );
    // google font loaded in frontend
    wp_enqueue_style('style-google-fonts', $googleFont, array(), '1.0.0', false);

    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );


    
    // custom 
    add_theme_support( 
        'editor-font-sizes', array(
            array(
                'name' => __( 'extra large', 'goi'),
                'shortName' => __( 'XL', 'goi' ),
                'size' => 40,
                'slug' => 'xl'
            ),
            array(
                'name' => __( 'large', 'goi'),
                'shortName' => __( 'L', 'goi' ),
                'size' => 30,
                'slug' => 'l'
            ),
            array(
                'name' => __( 'Mediun', 'goi'),
                'shortName' => __( 'm', 'goi' ),
                'size' => 20,
                'slug' => 'm'
            ),
            array(
                'name' => __( 'Normal', 'goi'),
                'shortName' => __( 'normal', 'goi' ),
                'size' => 16,
                'slug' => 'normal'
            ),
            array(
                'name' => __( 'Small', 'goi'),
                'shortName' => __( 'small', 'goi' ),
                'size' => 13,
                'slug' => 'small'
            )
    ));
}

function goi_add_raw_editor_styles() {
    wp_enqueue_style('style-editor-raw', get_template_directory_uri() . '/css/style-editor-raw.css', array(), filemtime(get_template_directory() . '/css/style-editor-raw.css'), false);
}

add_action( 'enqueue_block_assets', 'goi_add_raw_editor_styles' );

add_action( 'after_setup_theme', 'goi_custom_editor_setup' );