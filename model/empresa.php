<?php
#importar db.php
require_once('db.php');

class Empresa extends DataBase {
#se reciben los datos del formulario
  public $nombre_empresa = $_POST["company"];
  public $nombre_producto = $_POST[""];
  public $cantidad = $_POST[""];
  public $numero_paquete = $_POST["number"];
  public $numero_envio = $_POST["reference"];
  public $fecha = $_POST[""];



/*
  public function get(){

  }

#crear un nuevo usuario
  public function set($user_data=array()){
    if(array_key_exists('email', $user_data)) {
        $this->get($user_data['email']);
        if($user_data['email'] != $this->email) {
          foreach ($user_data as $campo=>$valor) {
            $campo = $valor;
          }
          $this->query = "";
          $this->execute_single_query();
          $this->mensaje = 'Query exitosa';
        }else{
          $this->mensaje = 'Ya existe';
        }
    }else {
      $this->mensaje = 'No se ha agregado';
    }
  }

#editar
  public function edit($user_data=array()){
    foreach ( $user_data as $campo => $valor) {
      $$campo = $valor;
    }
    $this->query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido' WHERE email='$email'";
    $this->execute_single_query();
    $this->mensaje = 'Usuario modificado';
  }

#eliminar
  public function delete() {
      $this->query = "DELETE FROM usuarios WHERE email = '$user_email'";
      $this->execute_single_query();
      $this->mensaje = 'Usuario eliminado';

  }

  #metodo constructor
  function __construct() {
    $this->db_name = 'book_example';
  }

  #metodo destructor del objeto
  function __destruct () {
    unset($this);
  }
*/
}
