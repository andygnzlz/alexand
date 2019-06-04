<?php

abstract class dataBase{

  private static $db_host = 'localhost';
  private static $db_user = 'root';
  private static $db_pass = '';
  protected $db_name = 'alexand';
  protected $query;
  protected $rows = array();
  private $conn;

  #metodos abstractos de clases que MysqlndUhPreparedStatement

  abstract protected function get ();
  abstract protected function set ();
  abstract protected function edit ();
  abstract protected function delete ();

  # Conectar a la base de datos
  public function open_connection() {

    $this->conn = mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);

    if( !$this->conn) {
      echo 'no conecto';
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;

      array_pop($this->rows);
      exit;

    }else {
      echo 'conecto';

      $sql = "SELECT id_empresa , nombre_empresa FROM empresas";
      $result = $this->conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id_empresa"]. " - Name: " . $row["nombre_empresa"]. "<br>";
          }
      }

    }
  }

  #desconectar la base de datos
  private function close_connection(){
    $this->conn->close();
  }

  #ejecutar un query simple del tipo INSERT, DELETE, UPDATE
  protected function execute_single_query() {
    $this->open_connection();
    $this->conn->query($this->query);
    $this->close_connection();
  }

  #traer resultados de una consulta en un array
  protected function get_results_from_query() {
    $this->open_connection();
    $this->conn->query($this->query);
    $this->close_connection();
    array_pop($this->rows);
  }


}

?>
