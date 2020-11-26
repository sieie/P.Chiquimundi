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
    <title>Chiquimundi | Cambio de contraseña</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
	<div class="container">
		<div align="center"><a href="index.html"><img src="../img/chiquimundi.png" width="150"></a></div>
			<h2>Cambia la Contraseña de tu Cuenta</h2>
			<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
			<div class="regisFrm">
				<form action="userAccount.php" method="post">
					<input type="password" name="password" placeholder="Contraseña" required="">
					<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
					<div class="send-button">
						<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
						<input type="submit" name="resetSubmit" value="Resetea Contraseña">
					</div>
				</form>
			</div>
	</div>
</body>
</html>