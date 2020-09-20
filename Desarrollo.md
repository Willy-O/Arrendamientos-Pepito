# Arrendamientos Pepito Ltda

La empresa “Arrendamientos Pepito Ltda” necesita una solución a través de la cual pueda dar a
conocer los inmuebles alrededor del mundo que pueden estar disponibles en un momento
determinado para ser arrendados en su página web

## Objetive

* Make a design with Figma
* Make a buildings CRUD with laravel
* Use React for views
* Call some api public to fetch data about: countries, states, cities and zipcodes (api rest = https://restcountries.eu/rest/v2/all)
* Make a login logic to have two diferents users
* Make a option to multi-languages
* Make Unit testing
* User Acceptance Tests
* Notifications by e-mail
* Use docker or kubernets

## Diseño de aplicación

Aplicación empleada: Figma

Formato modelado: XGA (Resolucion = 1024×768, escala =	4:3)

## Aquitectura cliente servidor

* Laravel: del lado del servidor para manejar las peticiones http
* React: del lado del cliente para manejar las vistas de forma reactiva 

## Pasos realizados (F = fail, S= success)

* Crear UI con figma (F.1)
* Crear proyecto en laravel con homestead (F.2)
* Crear proyecto en laravel con composer (S)
* Configurar archiv .env para la intengración con la base de datos postgresql (S)
* Crear Modelos (S)
* Implementar la autenticación por defecto de laravel "php artisan ui React --auth" (S)
* Integrar "Ant Desing" para usar un framework diferente a bootstrap, y a su vez aprovechar las ventajas de componentes que esta ofrece (F.3)
* Crear migrations usando la tercera forma normal (S)
* Crear los controladores (S)
* Implementar React.js para la interfaz de usuario con (F.4)
* Crear formulario de inmueble con blade.php (S)
* Crear Requests para la validación del formulario en la parte del Backend (F.5)
* Hacer push del repositrio hasta este punto (S)
* Crear la vista detallada de un inmueble (F.6) - (S)
* Modificar menú para colocar opciones "Registrar inmueble" y "Inmueble" (S)
* Crear la vista global de los inmuebles
* Crear y correr los seeders para prueba de la vista global de los inmuebles (F.7)
* Crear datos de prueba de forma manual (S)

## Problemas obtenidos

* El desarrollo de una UI con figma no se realizo en su totalidad ya que no conseguí una paleta de colores agradable, decidí trabaja con los elementos y colores que proporciona bootstrap, ya que no es un proyecto grande y para no perder más tiempo. (F.1)
* Cree la aplicacion con homestead, pero al ser manejada con una maquina virtual, cada cambio realizado al servidor había que reiniciarla, además a la hora de iniciar el servidor arrojaba errores constantemente (F.2)
* Instalé "Ant Design", por nmp no se pudo, así que use yarn. No termino utilizandola porque no estoy usando react, ver F.4. (F.3)
* Intenté  usar React.js para la interfaz de usuario, pero mi falta de conocimiento para su entegración con laravel me hizo desistir de esta idea ya que la forma conseguida me hacía tener que ejecutar un comando por consola cada vez que se hiciera un ajuste en un componente, haciendo lento y tedioso el desarrollo. (F.4)
* Cree un StoreRequest para validar el formulario de inmueble.create en la parte del backend, Arrojaba error "No found App\Request\StoreBuilding". Revice minusiosamente las llamadas a este y no conseguí ningun error, continue el desarrollo sin esta caracteristica. (F.5)
* Intenté hacer push de los avances del proyecto, pero como ya había creado este archivo en el repositorio remote obtengo conflicto y no se puedo hacer push. (F.6)
* Cree y corri los seeders de manera "exitosa", la consola dice que se corrio exitosamente, pero no me muestra los datos en la base de datos (F.7)

## Problemas solucionados

* F.6: Sobre escribi los datos que se encontraban en el repositorio remoto con "git push -f origin master"


