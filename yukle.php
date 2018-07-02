<?php

	session_start();

	function hataMesaji($message, $target)
	{
		$_SESSION['mesaj'] = $message;
		header("Location: $target");
		die();
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Onay Sayfası</title>
</head>
<body>

	

	<?php


	if(isset($_FILES['dosya']))
	{
		$hata = $_FILES['dosya']['error'];
		if($hata != 0)
		{
			hataMesaji("Dosya yüklemede bir hata gerçekleşti", "form.php");
			//Dosya yüklemede bir hata gerçekleştiğinde.
			

		}
		else
		{
			
			
			$tmpYolu = $_FILES['dosya']['tmp_name'];
			$hedefYolu=__DIR__.'/yuklenenler/'.$_FILES['dosya']['name'];
			$uzanti= strtolower(substr($_FILES['dosya']['name'], -4))==".csv";
			
			if(uzanti)
			{

				move_uploaded_file($tmpYolu, $hedefYolu);
				hataMesaji("Dosya başarılı bir şekilde yüklenmiştir.", "tablo.php?dosya=".$_FILES['dosya']['name']);

			} 
			else
			{

				hataMesaji("Yalnızca csv türünde dosya yüklenebilir.", "form.php");
                //Csv dosyası haricinde bir dosya yüklendiğinde.
			}
			
		}
		
	}


/*$dosyaMevcutMu= array_key_exists('dosya', $_FILES);

	if (!$dosyaMevcutMu) {
		hataMesaji("Dosya bulunamadı hatası","form.php");   // dosya bulunamadı hata mesajı ve yönlendirme yapıldı. 
	}

	$dosyaYuklemeHatasiVarMi= ($_FILES['dosya']['error']!=0);

	if (!$dosyaYuklemeHatasiVarMi) {
		hataMesaji("Dosya yüklemedehatası", "form.php");
	}

	$uzantisiCsvMi= strtolower(substr($_FILES['dosya']['name']),-4)==".csv";
	if (!$uzantisiCsvMi) {
		hataMesaji("Yalnızca csv uzantılı dosyalar yüklenebilir.", "form.php");
	}

	$tempYolu=$_FILES['dosya']['tmp_name'];
	$hedefYolu= __DIR__.'/yuklenenler/'.$_FILES['dosya']['name'];

	if (move_uploaded_file($tempYolu, $hedefYolu)) {
		hataMesaji("Dosya başarılı bir şekilde yüklenmiştir.", "tablo.php?dosya=".$_FILES['dosya']['name']);
	}
	else{

		hataMesaji("Dosya yüklenemedi", "form.php");
	}


*/
	?>



</body>
</html>