<form id="librocapteditar" name="librocapteditar" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Editar Capitulo o Articulo de Libro</h1></div>
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
Titulo del capitulo: <input name="titulocapitulo" type="text" id="titulocapitulo" value="<?php echo $row_global['titulocapitulo'];?>"/><br />
Titulo del articulo: <input name="tituloarticulo" type="text" id="tituloarticulo" value="<?php echo $row_global['tituloarticulo'];?>"/><br />
Editor 1: <input name="editor1" type="text" id="editor1" value="<?php echo $row_global['editor1'];?>" /><br />
Editor 2: <input name="editor2" type="text" id="editor2" value="<?php echo $row_global['editor2'];?>" /><br />
Titulo del libro: <input name="titulolibro" type="text" id="titulolibro" value="<?php echo $row_global['titulolibro'];?>"/><br />
Paginas: <input name="paginas" type="text" id="paginas"  value="<?php echo $row_global['paginas'];?>"/><br />
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
<input name="Editar Capitulo o Articulo de Libro" type="submit" id="Editar Capitulo o Articulo de Libro" value="Editar Capitulo o Articulo de Libro" />
</div></div>
<input type="hidden" name="MM_update" value="librocapteditar">
</form>