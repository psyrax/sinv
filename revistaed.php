<form id="revistaed" name="revistaed" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Editar Articulo de Revista</h1></div>
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
Titulo del articulo: <input name="tituloarticulo" type="text" id="tituloarticulo" value="<?php echo $row_global['tituloarticulo'];?>"/><br />
Titulo de la publicación: <input name="titulopublicacion" type="text" id="titulopublicacion" value="<?php echo $row_global['titulopublicacion'];?>"/><br />
Volumen: <input name="volumen" type="text" id="volumen" value="<?php echo $row_global['volumen'];?>"/><br />
Tomo: <input name="tomo" type="text" id="tomo" value="<?php echo $row_global['tomo'];?>"/><br />
Paginas: <input name="paginas" type="text" id="paginas" value="<?php echo $row_global['paginas'];?>"/><br />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $row_global['tipofuente'];?>" />
<input name="id" type="hidden" id="id" value="<?php echo $row_global['id'];?>" />
<hr />
<div align="center">
<input name="Editar Articulo de Revista" type="submit" id="Editar Articulo de Revista" value="Editar Articulo de Revista" />
</div></div>
<input type="hidden" name="MM_update" value="revistaed">
</form>