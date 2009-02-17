<form id="revista" name="revista" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Articulo de revista</h1></div>
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
Año:<br /><input name="yyyy" type="text" id="yyyy" size="4" maxlength="4" /><br />
Titulo de la articulo:<br /><input name="tituloarticulo" type="text" id="tituloarticulo" /><br />
Titulo de la publicación:<br /><input name="titulopublicacion" type="text" id="titulopublicacion" /><br />
Volumen:<br /><input name="volumen" type="text" id="volumen" /><br />
Tomo:<br /><input name="tomo" type="text" id="tomo" /><br />
Paginas:<br /><input name="paginas" type="text" id="paginas" />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $fuente;?>" />
<hr />
<div align="center">
<input name="Registrar Articulo de Revista" type="submit" id="Registrar Articulo de Revista" value="Registrar Articulo de Revista" />
</div></div>
<input type="hidden" name="MM_insert" value="revista">
</form>