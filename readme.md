## Plugin trex 

### Organizacion
* trexjc
	* trexjc.php	<-- Archivo principal del plugin
* inc/  <-- Archivos de funcionalidad del plugin
	* enqueue-scripts.php  <-- Carga los archivos CSS y JS
	* admin-overlay.php  <-- Llama a la vista del overlay
	* step1-execution.php  <-- Lógica para ejecutar el Paso 1
	* step2-execution.php  <-- Lógica para ejecutar el Paso 2 (Pendiente)
	* step3-execution.php  <-- Lógica para ejecutar el Paso 3 (Pendiente)
* templates/  <-- Archivos de vistas (HTML separado)
	* admin-overlay-view.php  <-- Estructura del overlay
* assets/  <-- Archivos estáticos (CSS y JS)
	* style.css  <-- Estilos del plugin
	* script.js  <-- Funcionalidad JS del plugin









	
### Descripción paso 1
La funcionalidad de este plugin es que al activarlo realice una serie de tareas por "pasos" (estas tareas las debo realizar cada vez que hago un nuevo sitio web para mis clientes y la idea es automatizar este proceso.).

el paso 1 solo debe ejecutarse una vez activado el plugin.

Al concluir el paso 1 debe mostrar un mensaje indicando que esta listo y que debe "desloggearse".

### Lista de "tareas" Paso 1 (usuario admin)
* Cambiar Nombre de rol de Usuario "administrator" por "trex"
* Crear rol con nombre "administrador" (los privilegios los decidiremos despues)
* Crear Usuario: admGod contraseña: xc21bn65A-!JC email: rexdigitalcl@gmail.com (con el rol de "trex")
*  Crear Usuario: admBoss contraseña: xc21bn65A-!JC email: ecommercepyme@gmail.com (con el rol de "trex")


### Descripción paso 2
El paso 2 solo puede ejecutarse si el paso 1 ya fue ejecutado y debe estar loggeado con el usuario admGod. 

Al concluir el paso 2 debe mostrar un mensaje indicando que esta listo y que debe "desloggearse".


### Paso 2 (usuario admGod)
* Borrar usuario admin
* Vaciar las papeleras
* deshabilita la opcion en ajustes generales de cambiar la direccion de wordpress y direccion del sitio
* Configurar zona horaria a "santiago"
* Idioma Español
* Ajustes de medios todos en 0 y NO ordenar por carpetas
* Permalink postname








### Paso 3
* Instalar Hello Theme
* Instalar Hello Child (Desde URL privada)
* Activar Hello Child
* Instalar Elementor
* Instalar pro element (desde URL privada)
* JSON de estilos globales
* Importar Template de "en Construcción"
* Crear Pàgina "en Construcción"
* Cargar Template de "enConstrucción" en Pàgina "en Construccion"
* Cambiar ajustes de lectura "Pàgina estatica y escoger "en Construcción"
