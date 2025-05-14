<?php
// Registrar estilos y scripts
function sistema_de_secretaria_de_extension_cargar_estilos()
{
    wp_register_style(
        'sistema_de_secretaria_de_extension-css',
        plugins_url('public/css/general.css', __FILE__),
        array(),
        '1.0'
    );
    wp_enqueue_style('sistema_de_secretaria_de_extension-css');
}

function sistema_de_secretaria_de_extension_cargar_scripts()
{
    wp_register_script(
        'sistema_de_secretaria_de_extension-js',
        plugins_url('public/js/general.js', __FILE__),
        array('jquery'),
        '1.0',
        true // Cargar en footer
    );
    wp_enqueue_script('sistema_de_secretaria_de_extension-js');
}