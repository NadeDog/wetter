<?php
	#allen Krams reinladen
	$apidata = file_get_contents("https://www.metaweather.com/api/location/638242/");
	
	#Umformung in php-array	
	$apidata = json_decode($apidata, true);
	
	#Ort
	$location = $apidata["title"];
	
	#nur das Wochenwetter	
	$wetterdaten = $apidata['consolidated_weather'];
	
	/*#Counter für die Wochentage einführen?
	for ($d=0; $d<=5; $d++){
		var_dump ($wetterdaten[$d]);	#die arrays je Tag
	}
	*/
	
	#Wetter von heute	
	$wetter_0 = $wetterdaten[0];
	#einzelne Werte
	$min_temp_0 = round($wetter_0["min_temp"]); #auf ganze Zahlen runden
	$max_temp_0 = round($wetter_0["max_temp"]);
	$date_0 = $wetter_0["applicable_date"];
	$state_0 = $wetter_0["weather_state_abbr"];
	
	#Wetter von morgen
	$wetter_1 = $wetterdaten[1];
	$state_1 = $wetter_1["weather_state_abbr"];
	
	#Wetter von übermorgen
	$wetter_2 = $wetterdaten[2];
	$state_2 = $wetter_2["weather_state_abbr"];
	
	function tagline($state){
		if ($state == "s" or $state == "lr"){
			echo"Heute den Schirm einpacken!";
			}	
		else if ($state == "c"){
			echo"Sonnenbrille auf und ab geht's!";
			}
		else if ($state == "hr"){
			echo"Hoffentlich hast Du schon das Seepferdchen...";
			}
		else if ($state == "t"){
			echo"In Deckung!";
			}
		else {
			echo"Lass Dich überraschen!";
			}
	}
	
	#var_dump($weather);
	#var_dump($apidata);
	#geht natürlich alles auch geschachtelt - ist aber nicht so hübsch