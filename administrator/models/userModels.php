<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class UserModel 
{
  private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
  private $clave;
  private $tipoUser;
 

  #region Set y Get
  public function getIdUser(){
    return $this->idUser; 
  }
 
  public function setNombres($nombres){
    $this->nombres = $nombres;
  }
  public function setApellidos($apellidos){
    $this->apellidos = $apellidos;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }
  public function setClave($clave){
    $this->clave = $clave;
  }
  public function settipoUser($tipoUser){
    $this->tipoUser = $tipoUser;
  }


  public function ListUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id, nombres, apellidos, correo from usuarios");
    $resSQL=$miconexion->verconsultacrud();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ListaUser($idUser) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from usuarios where id = $idUser");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function CreateUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into usuarios values('','$this->nombres','$this->apellidos','$this->correo','$this->clave','$this->tipoUser')");

    //$this->Disconnect();
    return $resSQL;
  }

  public function UpdateUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
		$id = $_GET['idUser'];
    $resSQL=$miconexion->consulta("update usuarios set nombres = '$this->nombres', apellidos = '$this->apellidos', correo ='$this->correo', clave ='$this->clave', tipoUser ='$this->tipoUser' where id = '$this->idUser'");

    //$this->Disconnect();
    return $resSQL;
  }

  public function DeleteUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from usuarios where id='$idUser'");

    //$this->Disconnect();
    return $resSQL;
  }

}
