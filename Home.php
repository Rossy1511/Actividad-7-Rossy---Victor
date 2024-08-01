<?php
/*ROSSY ANGIE VELEZ PAREDES UTM
*/
namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function getClientes()
    {
        $query = $this->db->query('SELECT * FROM cliente LIMIT 20');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getcliente($id)
    {
        $query = $this->db->query('SELECT * FROM cliente WHERE id_cliente = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'cliente no encontrada']);
    }
    // Agregar un Cliente
    public function addCliente($id_cliente, $nombre, $apellido, $email, $cedula, $telefono)
    {
        $data = [
            'id_cliente' => $id_cliente,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'cedula' => $cedula,
            'telefono' => $telefono
        ];

        $this->db->table('cliente')->insert($data);
        return $this->response->setJSON(['message' => 'Cliente agregado con éxito']);
    }
    // Actualizar un Cliente

    public function updateCliente($id_cliente, $nombre, $apellido, $email, $cedula, $telefono)
    {
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'cedula' => $cedula,
            'telefono' => $telefono
        ];

        $this->db->table('cliente')->update($data, ['id_cliente' => $id_cliente]);
        return $this->response->setJSON(['message' => 'Cliente actualizado con éxito']);
    }
      // Elinimar un Cliente
    public function deleteCliente($id_cliente)
    {
        $this->db->table('cliente')->delete(['id_cliente' => $id_cliente]);
        return $this->response->setJSON(['message' => 'Cliente eliminado con éxito']);
    }


    // Métodos para empleados
    public function getEmpleados()
    {
        $query = $this->db->query('SELECT * FROM empleado LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getEmpleado($id)
    {
        $query = $this->db->query('SELECT * FROM empleado WHERE id_empleado = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Empleado no encontrado']);
    }
    // Agregar  empleado
    public function addEmpleado($id_empleado, $nombre, $apellido, $cargo, $salario, $fecha_contrato, $categoria_id)
    {
        $data = [
            'id_empleado' => $id_empleado,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cargo' => $cargo,
            'salario' => $salario,
            'fecha_contrato' => $fecha_contrato,
            'categoria_id' => $categoria_id
        ];
        $this->db->table('empleado')->insert($data);
        return $this->response->setJSON(['message' => 'Empleado agregado con éxito']);
    }

    ///actualizar empleado
    public function updateEmpleado($id_empleado, $nombre, $apellido, $cargo, $salario, $fecha_contrato, $categoria_id)
    {
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cargo' => $cargo,
            'salario' => $salario,
            'fecha_contrato' => $fecha_contrato,
            'categoria_id' => $categoria_id
        ];

        $this->db->table('empleado')->update($data, ['id_empleado' => $id_empleado]);
        return $this->response->setJSON(['message' => 'Empleado actualizado con éxito']);
    }
    //eliminar empleado
    public function deleteEmpleado($id_empleado)
    {
        $this->db->table('empleado')->delete(['id_empleado' => $id_empleado]);
        return $this->response->setJSON(['message' => 'Empleado eliminado con éxito']);
    }
    
    // Métodos para proveedores
    public function getProveedores()
    {
        $query = $this->db->query('SELECT * FROM proveedor LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getProveedor($id)
    {
        $query = $this->db->query('SELECT * FROM proveedor WHERE id_proveedor = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Proveedor no encontrado']);
    }

    // Agregar proveedor
    public function addProveedor($id_proveedor, $nombre, $contacto, $telefono, $email)
    {
        $data = [
            'id_proveedor' => $id_proveedor,
            'nombre' => $nombre,
            'contacto' => $contacto,
            'telefono' => $telefono,
            'email' => $email
        ];

        $this->db->table('proveedor')->insert($data);
        return $this->response->setJSON(['message' => 'Proveedor agregado con éxito']);}
    
    //Actualizar proveedor
    public function updateProveedor($id_proveedor, $nombre, $contacto, $telefono, $email)
    {
        $data = [
            'nombre' => $nombre,
            'contacto' => $contacto,
            'telefono' => $telefono,
            'email' => $email
        ];
        $this->db->table('proveedor')->update($data, ['id_proveedor' => $id_proveedor]);
        return $this->response->setJSON(['message' => 'Proveedor actualizado con éxito']);
    }
    
    //eliminar proveedor
    public function deleteProveedor($id_proveedor)
    {
        $this->db->table('proveedor')->delete(['id_proveedor' => $id_proveedor]);
        return $this->response->setJSON(['message' => 'Proveedor eliminado con éxito']);
    }
    // Métodos para productos
    public function getProductos()
    {
        $query = $this->db->query('SELECT * FROM producto LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getProducto($id)
    {
        $query = $this->db->query('SELECT * FROM producto WHERE id_producto = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Producto no encontrado']);
    }
    // Agregar producto
    public function addProducto($id_producto, $proveedor_id, $nombre, $descripcion, $precio, $categoria_id)
    {
        $data = [
            'id_producto' => $id_producto,
            'proveedor_id' => $proveedor_id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'categoria_id' => $categoria_id
        ];

        $this->db->table('producto')->insert($data);
        return $this->response->setJSON(['message' => 'Producto agregado con éxito']);
    }
    // Actualizar producto 
    public function updateProducto($id_producto, $proveedor_id, $nombre, $descripcion, $precio, $categoria_id)
    {
        $data = [
            'proveedor_id' => $proveedor_id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'categoria_id' => $categoria_id
        ];

        $this->db->table('producto')->update($data, ['id_producto' => $id_producto]);
        return $this->response->setJSON(['message' => 'Producto actualizado con éxito']);
    }
    //eliminar producto
    public function deleteProducto($id_producto)
    {
        $this->db->table('producto')->delete(['id_producto' => $id_producto]);
        return $this->response->setJSON(['message' => 'Producto eliminado con éxito']);

    }



   




    
}
