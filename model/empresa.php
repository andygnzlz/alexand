<?php
#importar db.php
require_once('../core/db_abstract_model.php');

class Empresa extends DataBase {

  public $nombre_empresa;
  public $nombre_producto;
  public $cantidad;
  public $numero_paquete;
  public $numero_envio;
  public $fecha;


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

}
