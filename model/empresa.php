<?php
#importar db.php
require_once('db.php');

$servername = "localhost";
$database = "alexand";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

//class Empresa extends DataBase {
#se reciben los datos del formulario
if (isset($_POST["company"], $_POST["product"], $_POST["quantity"], $_POST["number"], $_POST["reference"])){

  $nombre_empresa = $_POST["company"];
  $nombre_producto = $_POST["product"];
  $cantidad = $_POST["quantity"];
  $numero_paquete = $_POST["number"];
  $numero_envio = $_POST["reference"];
  $fecha = date ("Y/n/j");


  //$sql = "INSERT INTO empresas ( nombre_empresa) VALUES ('$nombre_empresa')";
  $sql_paquete = "INSERT INTO paquetes ( numero_paquete, fecha, numero_envio) VALUES ('$numero_paquete', '$fecha','$numero_envio')";
  $sql_productos = "INSERT INTO productos ( nombre_producto, cantidad) VALUES ('$nombre_producto', '$cantidad')";
/*
  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
*/
  if (mysqli_query($conn, $sql_paquete)) {
        echo "New record in packages created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  if (mysqli_query($conn, $sql_productos)) {
        echo "New record in product created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);


}




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
//}
?>
