

<form id="form1" name="form1" method="post" action="../Controlador/validarEditarMedico.php">
     


	 <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">ACTUALIZAR MEDICO</td>
        </tr>
		
		 <tr>
		 
		 <td width="28%" align="right" bgcolor="#fbec88">Codigo</td>
          <td width="72%"><label for="codigo"></label>
          <input name="codigo" type="text" id="codigo" size="40"  required /></td>

        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="text" id="identificacion" size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Especialidad</td>
          <td><input name="especialidad" type="text" id="especialidad" style="width:270px" required/></td>
        </tr>
        <tr>
		<td align="right" bgcolor="#fbec88">Telefono</td>
          <td><input name="telefono" type="tel" id="telefono" style="width:270px" required/></td>
        </tr>
        <tr>
		<td align="right" bgcolor="#fbec88">Correo</td>
          <td><input name="correo" type="email" id="correo" style="width:270px" required/></td>
        </tr>
        
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Actualizar" /></td>
        </tr>
      </table>
    </form>
    
	<?php
	require "../Modelo/conexionBasesDatos.php";
	
	$objConexion=Conectarse();
		
	
		$codigo=$_POST['Codigo'];
		$identificacion=$_POST['Identificacion'];
		$nombres=$_POST['Nombres'];
		$apellidos=$_POST['Apellidos'];
		$especialidad=$_POST['Especialidad'];
		$telefono=$_POST['Telefono'];
		$correo=$_POST['Correo'];
		
	
if ($msj==1)
	echo '<p align="center" >Actualizacion Exitosa!!';
if ($msj==2)
	echo '<p align="center"> El MEDICO no se encuentra registrado en el Sistema, favor Revisar ID(CODIGO)';


?>
	
	
	
	
