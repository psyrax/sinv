<form id="periodico" name="periodico" method="POST" action="<?php echo $editFormAction; ?>">
<div class="navi"><h1>Articulo de periodico</h1></div>
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
Mes:<br /><input name="mm" type="text" id="mm" size="4" maxlength="4" /><br />
Día:<br /><input name="dd" type="text" id="dd" size="4" maxlength="4" /><br />
Titulo del articulo:<br /><input name="tituloarticulo" type="text" id="tituloarticulo" /><br />
Titulo del periodico:<br /><input name="tituloperiodico" type="text" id="tituloperiodico" /><br />
Paginas:<br /><input name="paginas" type="text" id="paginas" />
</div></td>
  </tr></tbody>
</table>
<hr />
<?php include('contenidos.php'); ?>
<input name="tipofuente" type="hidden" id="tipofuente" value="<?php echo $fuente;?>" />
<hr />
<div align="center">
<input name="Registrar Articulo de Periodico" type="submit" id="Registrar Articulo de Periodico" value="Registrar Articulo de Periodico" />
</div></div>
<input type="hidden" name="MM_insert" value="periodico">
</form>