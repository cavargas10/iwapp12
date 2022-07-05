<?php
require_once "../models/userModels.php";

class user_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function user_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreateUser()
    {
        $user = new UserModel();

		if (isset($_POST['nombres'])&&isset($_POST['apellidos'])){
			$user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
			$user->setClave(md5($_POST['clave']));
			$user->settipoUser($_POST['tipoUser']);
        	$userResponse = $user->CreateUser();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        }
		}
        
    }

    public function ListUser()
    {
        $user = new UserModel();
        $userResponse = $user->ListUser();
        
    }

	public function UpdateUser($idUser)
    {
        $user = new UserModel();
		
		if (isset($_POST['nombres'])&&isset($_POST['apellidos'])){
			$user->setIdUser($idUser);
			$user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
			$user->setClave(md5($_POST['clave']));
        	$userResponse = $user->UpdateUser();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        }
		}
    }

	public function DeleteUser($idUser)
    {
        $user = new UserModel();
		$user->setIdUser($idUser);
		$userResponse = $user->DeleteUser();
		if ($userResponse == 1) // exitoso
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../views/user.php'</script>";
	        }
    }
}
?>