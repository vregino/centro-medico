<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql="INSERT INTO medicos (medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo)
values('$_REQUEST[identificacion]','$_REQUEST[nombres]','$_REQUEST[apellidos]',' $_REQUEST[especialidad]','$_REQUEST[telefono]','$_REQUEST[correo]')";


 $resultado=$objConexion->query($sql);
	

if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarMedico&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarMedico&msj=2");

?>
