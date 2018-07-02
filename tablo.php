<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tablo Sayfası</title>
</head>
<body>
	<?php 

	$dosya = $_GET["dosya"];


	$dosyaYolu = __DIR__.'/yuklenenler/'.$dosya;

	$dosyaMevcutMu=file_exists($dosyaYolu);

	if (!$dosyaMevcutMu) 

	{

		$_SESSION['mesaj']= "Dosya mevcut değil"; 
		header("Location:liste.php");
		die();
	}

	$icerik=file_get_contents($dosyaYolu);
	$satirlar=explode("\n", $icerik);

	if (array_key_exists("mesaj", $_SESSION))
	{
		echo '<p>' . $_SESSION['mesaj'] . '</p>';

		unset($_SESSION['mesaj']);
	}


	echo '<table>';
	foreach ($satirlar as $key => $satir) {
		echo '<tr>';
		$degerler = explode(",", $satir);
		foreach ($degerler as $deger) {
			if ($key)
				echo '<td>' . $deger . '</td>';
			else
				echo '<th>' . $deger . '</th>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>
	</body>
	</html>