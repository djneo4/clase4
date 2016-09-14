<?php

	require_once ("destino.php");

		$mensaje = $_POST["mensaje"];

		$path="encriptado.txt";

		if (isset($_POST["Encriptar"])) {
			

			
				Enigma::Encriptar($mensaje,$path);


		}



		if (isset($_POST["Desencriptar"])) {
			

			
				Enigma::Desencriptar($path);


		}


















?>