<?php 


	class Enigma{





				public static function Encriptar($mensaje,$path){

							$lista=array();							

							$file = fopen($path, "a+");

					for ($i=0; $i < strlen($mensaje) ; $i++) { 
							
    						$caracter_encriptado = ord($mensaje[$i])+200;

							$renglon = $caracter_encriptado."=>";

							fwrite($file, $renglon);	
				

							
							
					}

					

						fclose($file);

						return true;

				}

				public static function Desencriptar($path){

					$file = fopen($path,"r");

					while (!feof($file)) {
						
						$renglon = fgets($file);
						
						$lista = explode("=>", $renglon);



					}

						foreach ($lista as $key) {
							
							$caracter_encriptado = $key;
							$caracter_plano = chr($caracter_encriptado-200);
							echo $caracter_plano;
						}

				}










	}


























?>