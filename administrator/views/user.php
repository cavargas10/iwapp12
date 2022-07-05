<?php
require_once "./header.php";
extract($_GET);

?>
<h1>Gestión de Usuarios</h1>
<div class="menuDashboard"><a href="user_add.php">+ Add User</a></div>
<?php

include("../controller/user_controller.php");
$control = new user_controller();
$control->ListUser();
if (isset($idUser)) {
	$control1 = new user_controller();
	$control1->DeleteUser($idUser);
}

?>

<?php require_once "./footer.php"; ?>