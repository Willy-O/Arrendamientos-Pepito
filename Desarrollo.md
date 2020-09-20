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

## Pasos realizados (F = fail, G= good)

* Crear UI con figma (F)
* Crear proyecto en laravel (G)
* Configurar archiv .env para la intengración con la base de datos postgresql (G)
* Crear Modelos (G)
* Implementar la autenticación por defecto de laravel "php artisan ui React --auth" (G)
* Crear migrations (G)
* Implementar React.js para la interfaz de usuario (F)
* Crear formulario de inmueble con blade.php (G)
* Crear Requests para la validación del formulario en la parte del Backend (F)
* 

## Problemas obtenidos

* El desarrollo de una UI con figma no se realizo en su totalidad ya que no conseguí una paleta de colores agradable, decidí trabaja con los elementos y colores que proporciona bootstrap, para no perder más tiempo. (1)
* Se intento usar React.js para la interfaz de usuario, pero mi falta de conocimiento para su entegración con laravel me hizo desistir de esta idea ya que la forma conseguida me hacía tener que ejecutar un comando por consola cada vez que se hiciera un ajuste en un componente, haciendo lento y tedioso el desarrollo. (2)
* Intenté crear un StoreRequest para validar el formulario de inmueble.create en la parte del backend, Arrojaba error "No found App\Request\StoreBuilding". Revice minusiosamente las llamadas a este y no conseguí ningun error, continue el desarrollo sin esta caracteristica. (3)
* Intenté hacer push de los avances del proyecto, pero como ya había creado este archivo en el repositorio remote obtengo conflicto y no puedo hacer push. (4)

##

* 4:


