<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chiquimundi | Registro</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
	<div class="container">
		<div align="center"><a href="index.php"><img src="../img/chiquimundi.png" width="150"></a></div>
			<h2>Crear una Nueva Cuenta</h2>
			<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
			<div class="regisFrm">
				<form action="userAccount.php" method="post">
					<input type="text" name="first_name" placeholder="Nombre" required="">
					<input type="text" name="last_name" placeholder="Apellido" required="">
					<input type="email" name="email" placeholder="Correo Electrónico" required="">
					<input type="text" name="phone" placeholder="Número Telefónico" required="">
					<input type="password" name="password" placeholder="Contraseña" required="">
					<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
					<div class="send-button">
						<input type="submit" name="signupSubmit" value="Crear Cuenta">
					</div>
				</form>
			</div>
				<p>¿Ya tienes cuenta? <a href="index.php">Ingresa aquí</a></p>
	</div>
</body>
</html>