<form id="form1" name="form1" method="post" action="../Controlador/validarEditarPaciente.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">ACTUALIZAR PACIENTE</td>
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
          <td align="right" bgcolor="#fbec88">FechaNacimiento</td>
          <td><input name="fechaNacimiento" type="date" id="fechaNacimiento" style="width:270px" required/></td>
        </tr>
        
		
		<tr>
          <td align="right" bgcolor="#fbec88">Sexo</td>
          <td><label for="sexo"></label>
            <select name="sexo" id="sexo" style="width:270px">
               <option value="No">Seleccione</option>	
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
          </select></td>
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
		$fechaNacimiento=$_POST['FechaNacimiento'];
		$sexo=$_POST['Sexo'];
		
   
if ($msj==1)
	echo '<p align="center" >Se ha Actualizado el Paciente Correctamente';
if ($msj==2)
	echo '<p align="center"> El PACIENTE no se encuentra registrado en el Sistema, favor Revisar ID(CODIGO)';

?>