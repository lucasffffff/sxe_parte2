# sxe_parte2

# Mi Plugin para WordPress

Mi Plugin es un plugin de WordPress que extiende la funcionalidad estándar de WordPress. Añade "33" al final de cada título de publicación y crea una tabla personalizada en la base de datos para realizar operaciones básicas de inserción y selección de datos.

## Características

- **Modificación de Títulos**: Añade automáticamente "33" al final de cada título de publicación en el sitio.
- **Interacción con la Base de Datos**: Crea una tabla personalizada `mi_tabla_personalizada` en la base de datos de WordPress y realiza operaciones básicas de inserción y selección.

## Pruebas
- Plugin no activado:
  
![Screenshot_20231214_111610](https://github.com/lucasffffff/sxe_parte2/assets/114582569/e2087ef6-a6b8-417f-ae70-550676b0a659)


- Plugin activado:
  
  ![Screenshot_20231214_111840](https://github.com/lucasffffff/sxe_parte2/assets/114582569/d0b12992-c853-47c5-936d-81120b9ec04b)


## Requisitos

- WordPress 5.0 o superior.
- PHP 7.2 o superior.

## Instalación

1. Descarga el plugin desde GitHub y descomprime el archivo.
2. Sube la carpeta del plugin a tu directorio de WordPress en `wp-content/plugins/`.
3. Activa el plugin a través del menú 'Plugins' en WordPress.

## Uso

Una vez activado, el plugin funcionará automáticamente. No hay configuraciones adicionales necesarias para las funcionalidades básicas. 

- Los títulos de las publicaciones mostrarán un "33" al final.
- La tabla `mi_tabla_personalizada` se creará automáticamente en la base de datos de WordPress.
