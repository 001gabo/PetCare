<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'principal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//Modulo Principal
$route['inicio']="principal/index";
$route['acerca']="principal/acerca";
$route['servicios']="principal/servicios";
$route['precios']="principal/precios";
$route['contactenos']="principal/contactenos";

//Modulo Auth
$route['login']='auth/index';
$route['signin']='auth/signin';
$route['register']='auth/register';
$route['registro']='auth/login';
$route['logout']='auth/logout';


//Modulo Home:  Root, Empleado, Cliente
$route['admin']="root/index";
$route['empleado']="empleado/index";
$route['cliente']="cliente/index";


//Modulo Citas
$route['cita_clientes']="citas/cita_clientes";
$route['cita_empleados']="citas/cita_empleados";
$route['cita_root']="citas/cita_root";
$route['ModCitas']="citas/ver_modificar";
$route['DelCitas']="citas/ver_eliminar";

//Modulo Cuenta
$route['cuenta']='cuenta/index';

//Modulo Mantenimiento
$route['usuarios']='mantenimiento/usuario';
$route['agregar_usuario']='mantenimiento/usuario_crea';
$route['editar_usuario']='mantenimiento/usuario_edita';



//Modulo de productos (controlador/funcion)
$route['productos']="productos/index";
$route['AddProductos']="productos/ver_agregar";
$route['ModProductos']="productos/ver_modificar";
$route['DelProductos']="productos/ver_eliminar";


//modulo mascota
$route['mis_mascotas']="mascota/mis_mascotas";
$route['nueva_mascotas']="mascota/nueva_mascota";
$route['perfil_mascota']="mascota/perfil";
$route['eliminar_mascota']="mascota/eliminar_mascota";

