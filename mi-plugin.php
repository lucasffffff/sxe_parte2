<?php
/*
Plugin Name: Mi Plugin
Description: Un plugin de ejemplo que modifica el título, crea una tabla personalizada y realiza operaciones básicas de base de datos.
Version: 1.0
Author: lucas
*/

// Hook para modificar el título
function mi_plugin_modificar_titulo($title) {
    return $title . " 33";
}
add_filter('the_title', 'mi_plugin_modificar_titulo');

// Función para crear una tabla en la base de datos durante la activación del plugin
function mi_plugin_instalar() {
    global $wpdb;
    $tabla = $wpdb->prefix . 'mi_tabla_personalizada';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        columna1 varchar(255) NOT NULL,
        columna2 varchar(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'mi_plugin_instalar');

// Función para interactuar con la base de datos
function mi_plugin_interactuar_bd() {
    global $wpdb;
    $tabla = $wpdb->prefix . 'mi_tabla_personalizada';

    // Insertar datos
    $data = array('columna1' => 'valor1', 'columna2' => 'valor2');
    $formato = array('%s', '%s');
    $wpdb->insert($tabla, $data, $formato);

    // Seleccionar datos
    $resultados = $wpdb->get_results("SELECT * FROM " . $tabla);
    foreach ($resultados as $fila) {
        // Procesar cada fila
        // Por ejemplo: echo $fila->columna1;
    }
}

// Opcional: Llamar a la función de interacción con la base de datos en algún gancho de WordPress
add_action('init', 'mi_plugin_interactuar_bd');
