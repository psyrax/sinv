<form id="libro" name="libro" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Libro</h1></div>
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
Año: <input name="yyyy" type="text" id="yyyy" size="4" maxlength="4" /><br />
Titulo del libro: <input name="titulolibro" type="text" id="titulolibro" /><br />
Ciudad de publicaci&oacute;n: <input name="ciudad" type="text" id="ciudad" /><br />
Editorial: <input name="editorial" type="text" id="editorial" />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $fuente;?>" />
<hr />
<div align="center">
<input name="Registrar Libro" type="submit" id="Registrar Libro" value="Registrar Libro" />
</div></div>
<input type="hidden" name="MM_insert" value="libro">
</form>