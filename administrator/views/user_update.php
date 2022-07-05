<?php 
	require_once "./header.php";
	include_once "../controller/user_controller.php";
	include_once "../models/userModels.php";
	extract($_GET);
	
	$control2= new userModel();
    $lista = $control2->ListaUser($idUser);

	$control= new user_controller();
    $control->UpdateUser($idUser);
?>
<h1>Nuevo Usuarios</h1>
<form method="post" action="">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" value="<?php echo $lista[1]?>" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos"  value="<?php echo $lista[2]?>" placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" value="<?php echo $lista[3]?>" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" value="<?php echo $lista[4]?>" placeholder="Ingrese su clave">
			</div>
			
			<div class="grupoInput">
			 <button type="submit" value="Procesar" class="btn-submit">Procesar</button>
			</div>
		</form>

<?php require_once "./footer.php"; ?>