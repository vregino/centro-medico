<?php
function Conectarse()
{
	$objConexion = new mysqli("localhost","root","sena","centromedico");
	if ($objConexion->connect_errno)
	{
		echo "Erro de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?>




