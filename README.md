# DAFO

## Instrucciones para instalación y configuración de la aplicación para desarrollo:
1. Instalar dependencias de php con el comando`composer install`
2. Copiar o renombrar el fichero 'config.ini.sample'  a 'config.ini' 
(`cp config.ini.sampl config.ini`) y rellenar los parámetros 
3. Ejecutar el servidor integrado de php `php -S 127.0.0.1:8000`
4. Acceder al frontend de la aplicación desde el navegador `http://localhost:8000`
5. Acceder al servidor de la aplicación desde el navegador (`http://localhost:8000/server.php`) . También se puede desde la consola mediante curl, o desde postman, o cualquier otro cliente HTTP.

Si todo ha ido correctamente, en la pestaña del navegador en la que hemos abierto el frontend, debería aparecer una alerta con el mensaje "Hello World!"