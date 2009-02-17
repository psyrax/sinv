<form id="internet" name="internet" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Documento de Internet</h1></div>
<div class="box">
<table width="400" border="0">
  
    <thead><tr><td><div class="tema">
Tema: 
  <input name="tema" type="text" id="tema" /><br />
 Tipo de ficha: 
<select name="tipoficha" id="tipoficha">
  <option value="textual">textual</option>
  <option value="resumen">resumen</option>
  <option value="sintesis">sintesis</option>
</select>
  </div></td></tr></thead>
  <tbody><tr>
    <td>&nbsp;</td><td><div class="datosin">
<?php include('autores.php'); ?>
Titulo del documento:<br /><input name="tituloarticulo" type="text" id="tituloarticulo" /><br />
Fecha de consulta: <br />
Año:<br /><input name="yyyy" type="text" id="yyyy" size="4" maxlength="4" /><br />
Mes:<br /><input name="mm" type="text" id="mm" size="4" maxlength="4" /><br />
Día:<br /><input name="dd" type="text" id="dd" size="4" maxlength="4" /><br />
Dirección de la consulta:<br />http://<input name="url" type="text" id="url" /><br />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $fuente;?>" />
<hr />
<div align="center">
<input name="Registrar Documento de Internet" type="submit" id="Registrar Documento de Internet" value="Registrar Documento de Internet" />
</div></div>
<input type="hidden" name="MM_insert" value="internet">
</form>