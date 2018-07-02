<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row center top">
		<div class="col md-12 between">
			<strong><label for="aciklama">Yapılmak istenen eylemi seçiniz: </label> </strong>
		</div>

		<div class="col-md-12 between">
			<form class="form-horizontal" action="form.php">
				<div class="form-group">


					<button type="submit" class="btn btn-default">Dosya Yüklemek için.. </button>

				</div>
			</form>
		</div>

		<div class="col-md-12"> 	
			<form class="form-horizontal" action="liste.php">
				<div class="form-group">


					<button type="submit" class="btn btn-default">Yüklenen Dosyaları Görmek için.. </button>

				</div>
			</form>
		</div>
	</div>
</body>
</html>