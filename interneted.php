<form id="interneted" name="interneted" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Editar Documento de Internet</h1></div>
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
Titulo del documento: <input name="tituloarticulo" type="text" id="tituloarticulo" value="<?php echo $row_global['tituloarticulo'];?>"/><br />
Fecha de consulta: <br />
Año: <input name="yyyy" type="text" id="yyyy" size="4" maxlength="4" value="<?php echo $row_global['yyyy'];?>"/><br />
Mes: <input name="mm" type="text" id="mm" size="4" maxlength="4" value="<?php echo $row_global['mm'];?>"/><br />
Día: <input name="dd" type="text" id="dd" size="4" maxlength="4" value="<?php echo $row_global['dd'];?>"/><br />
Dirección de consulta:<br />
http://<input name="url" type="text" id="url" value="<?php echo $row_global['url'];?>"/><br />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $row_global['tipofuente'];?>" />
<input name="id" type="hidden" id="id" value="<?php echo $row_global['id'];?>" />
<hr />
<div align="center">
<input name="Editar Documento de Internet" type="submit" id="Editar Documento de internet" value="Editar Documento de Internet" />
</div></div>
<input type="hidden" name="MM_update" value="interneted">
</form>