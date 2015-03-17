<?php 
$curl = curl_init();
curl_setopt_array($curl, array(
	//I want to get this one to work:
	CURLOPT_URL => "https://gate.d5.mpi-inf.mpg.de/aida/service/disambiguate",

	//This one actually works:
//	CURLOPT_URL => "http://www.htmlcodetutorial.com/cgi-bin/mycgi.pl",
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_POST => 1, 
	CURLOPT_POSTFIELDS =>
		"text=Dylan was born in Duluth"
	)
);

$a = curl_exec($curl);
echo $a;
curl_close($curl);
?>
