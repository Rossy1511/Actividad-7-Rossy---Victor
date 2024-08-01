<?php
/*ROSSY ANGIE VELEZ PAREDES UTM
*/
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/clientes', 'Home::getClientes');
$routes->get('/cliente/(:num)', 'Home::getcliente/$1');

// Nueva ruta para crear un cliente
$routes->get('/add-cliente/(:num)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Home::addCliente/$1/$2/$3/$4/$5/$6');
$routes->get('/update-cliente/(:num)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Home::updateCliente/$1/$2/$3/$4/$5/$6');
$routes->get('/delete-cliente/(:num)', 'Home::deleteCliente/$1');

// Rutas para pedidos
$routes->get('/pedidos', 'Home::getPedidos');
$routes->get('/pedido/(:num)', 'Home::getPedido/$1');


// Rutas para empleados
$routes->get('/empleados', 'Home::getEmpleados');
$routes->get('/empleado/(:num)', 'Home::getEmpleado/$1');
$routes->get('/add-empleado/(:num)/(:any)/(:any)/(:any)/(:any)/(:any)/(:num)', 'Home::addEmpleado/$1/$2/$3/$4/$5/$6/$7');
$routes->get('/update-empleado/(:num)/(:any)/(:any)/(:any)/(:any)/(:any)/(:num)', 'Home::updateEmpleado/$1/$2/$3/$4/$5/$6/$7');
$routes->get('/delete-empleado/(:num)', 'Home::deleteEmpleado/$1');


// Rutas para proveedores
$routes->get('/proveedores', 'Home::getProveedores');
$routes->get('/proveedor/(:num)', 'Home::getProveedor/$1');
$routes->get('/add-proveedor/(:num)/(:any)/(:any)/(:any)', 'Home::addProveedor/$1/$2/$3/$4');
$routes->get('/update-proveedor/(:num)/(:any)/(:any)/(:any)/(:any)', 'Home::updateProveedor/$1/$2/$3/$4/$5');
$routes->get('/delete-proveedor/(:num)', 'Home::deleteProveedor/$1');


// Rutas para productos
$routes->get('/productos', 'Home::getProductos');
$routes->get('/producto/(:num)', 'Home::getProducto/$1');
$routes->get('/add-producto/(:num)/(:num)/(:any)/(:any)/(:any)', 'Home::addProducto/$1/$2/$3/$4/$5');
$routes->get('/update-producto/(:num)/(:num)/(:any)/(:any)/(:any)', 'Home::updateProducto/$1/$2/$3/$4/$5');
$routes->get('/delete-producto/(:num)', 'Home::deleteProducto/$1');








;
