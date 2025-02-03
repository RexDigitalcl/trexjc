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









# pluginStep
> El objetivo de este plugin es realizar las configuración básicas y reiteras en cada proyecto

### Al activar
> Una vez instalado wordpress, el primer plugin que se instala es este, al activarse genera un welcome dashboard fullscreen, dando la bienvenida al usuario admin y tiene un link para iniciar el paso uno. (el paso uno solo puede activarlo el usuario con nombre de usuario "admin")

### Paso 1
Una vez que el usuario admin pulsa en el link empieza la ejecución de las siguientes tareas.

+ Muestra un mensaje indicando que empezo el proceso
+ crea 2 usuarios nuevos con el rol "administrator":
  + usuario: "admGod", contraseña: "xc21bn65A-!JC" , email: "admgod@ecommercepyme.com"
  + usuario: "admBoss", contraseña: "xc21bn65A-!JC" , email: "wp@ecommercepyme.com"
+ cambia el nombre del rol "administrator" por "epjc"
+ crea unnuevo rol de con el nombre "admin"
+ Muestra un mensaje indicando que termino el paso uno y que debe cerrar sesion y logearse con el usuario admGod
+ en el dashboard esta un link para cerrar sesion. 

### Paso 2
Una vez que ingresa con el nombre de usuario admGod en el dashboard aparece un mensaje que el paso uno fue exitoso y aparece un link para iniciar este segundo paso. al clickear el link empieza a ejecutar las siguientes tareas.

+ Muestra un mensaje indicando que emmpezo el paso 2
+ borra al usuario con nombre de usuario "admin" y todo su contenido
+ vacia la papelera
+ deshabilita la opcion en ajustes generales de cambiar la direccion de wordpress y direccion del sitio
+ configura la zona horaria
+ no permite crear comentarios
+ configura los medios
+ configura los permalink 
+ Muestra mensaje indicando que terminó el paso 2 y lo invita a pulsar un siguiente link que es para activar estos plugins y themes (los plugins y themes fueron subidos anteriormente directo a hosting por ftp):
  + Plugins
    + Elementor
    + Pro-Elements
  + Themes
    + Hello
    + HelloChild
+ Una vez activo los temas y plugins muestra un mensaje indicando que la tarea esta completa,que debe deslogearse y logearse con el usuario admBoss 


### Paso 3
Una vez que ingresa con el nombre de usuario admBoss en el dashboard aparece un mensaje que el paso uno y dos fueron exitosos y aparece un link para iniciar este tercer paso. al clickear el link empieza a ejecutar las siguientes tareas.

+ Muestra un mensaje indicando que emmpezo el paso 3
+ abre dentro de un iframe la siguiente url (es el espacio de "importar" que se encuentra dentro de "herramientas" del plugin elementor): **/wp-admin/admin.php?page=elementor-app&amp;ver=3.23.3#/import**
  + se publica el archivo .zip
  + una vez terminads el upload aparece un mensaje de exito
+ configura en lecutra una pagina especifica llamada pronto
+ mensaje que termino la configuracion 