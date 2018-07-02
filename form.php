	<?php 
	session_start();

	if (array_key_exists("mesaj", $_SESSION)) { // session arrayinde mesaj isminde bir value varsa ekrana getir.
		echo '<p>' . $_SESSION['mesaj'] . '</p>';
		unset($_SESSION['mesaj']); // daha sonra bu mesajı bu oturumdan kaldır.
	}



	?>	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Dosya Yükleme Sayfasına Hoşgeldiniz</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>

		<div class="top">
			<form enctype="multipart/form-data" action="yukle.php"  method="POST">

				<table border="0" cellpadding="4" align="center">
					<tr>
						<td>Dosya seçiniz:</td>
						<td><input type="FILE" name="dosya" class="form-control-file"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Yükle"></td>
					</tr>
				</table>
			</form>
		</div>




	</body>
	</html>

