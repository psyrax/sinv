<form id="libroeditar" name="libroeditar" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Libro</h1></div>
<div class="box">
<table width="400" border="0">
  
    <thead><tr><td><div class="tema">
Tema: 
  <input name="tema" type="text" id="tema" value="<?php echo $row_global['tema'];?>" /><br />
  Tipo de ficha: 
<select name="tipoficha" id="tipoficha">
  <option value="textual" <?php if (!(strcmp("textual", $row_testing['tipoficha']))) {echo "selected=\"selected\"";} ?>>textual</option>
  <option value="resumen" <?php if (!(strcmp("resumen", $row_testing['tipoficha']))) {echo "selected=\"selected\"";} ?>>resumen</option>
  <option value="sintesis" <?php if (!(strcmp("sintesis", $row_testing['tipoficha']))) {echo "selected=\"selected\"";} ?>>sintesis</option>
</select>
  </div></td></tr></thead>
  <tbody><tr>
    <td>&nbsp;</td><td><div class="datosin">
<?php include('autores.php'); ?>
Año: <input name="yyyy" type="text" id="yyyy" size="4" maxlength="4" value="<?php echo $row_global['yyyy'];?>"/><br />
Titulo del libro: <input name="titulolibro" type="text" id="titulolibro" value="<?php echo $row_global['titulolibro'];?>"/><br />
Ciudad de publicaci&oacute;n: <input name="ciudad" type="text" id="ciudad" value="<?php echo $row_global['ciudad'];?>" /><br />
Editorial: <input name="editorial" type="text" id="editorial" value="<?php echo $row_global['editorial'];?>"/>
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $row_global['tipofuente'];?>" />
<input name="id" type="hidden" id="id" value="<?php echo $row_global['id'];?>" />
<hr />
<div align="center">
<input name="Editar Libro" type="submit" id="Editar Libro" value="Editar Libro" />
</div></div>
<input type="hidden" name="MM_update" value="libroeditar">
</form>