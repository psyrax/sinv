<?php if ($fuente!=""){ // ?>
<div class="contenido">
Contenido:<br />
<textarea name="contenido" cols="45" rows="5" id="contenido"></textarea><br />
Comentario:<br />
<textarea name="comentario" cols="45" rows="5" id="comentario"></textarea><br />
<table width="400" border="0">
  <tr>
    <td>Anotaciones:<br />
<textarea name="anotaciones" cols="20" rows="5" id="anotaciones"></textarea></td>
    <td>Extra:<br />
<textarea name="extra" cols="20" rows="5" id="extra"></textarea></td>
</tr>
</table>
</div>
<?php } //?>
<?php if ($editar!=""){ // ?>
<div class="contenido">
Contenido:<br />
<textarea name="contenido" cols="45" rows="5" id="contenido" > <?php echo $row_global['contenido'];?> </textarea><br />
Comentario:<br />
<textarea name="comentario" cols="45" rows="5" id="comentario"><?php echo $row_global['comentario'];?></textarea><br />
<table width="400" border="0">
  <tr>
    <td>Anotaciones:<br />
<textarea name="anotaciones" cols="20" rows="5" id="anotaciones"><?php echo $row_global['anotaciones'];?></textarea></td>
    <td>Extra:<br />
<textarea name="extra" cols="20" rows="5" id="extra"><?php echo $row_global['extra'];?></textarea></td>
</tr>
</table>
</div>
<?php } //?>
<?php if ($vista=="fichas"){ // ?>
<div class="contenido">
Contenido:<br />
<?php echo nl2br ($row_ver['contenido']);?><hr />
<?php if ($row_ver['comentario']!=""){ // ?>
Comentario:<br />
<?php echo nl2br ($row_ver['comentario']);?><hr />
<?php } // ?>
<table width="400" border="0">
  <tr>
    <td><?php if ($row_ver['anotaciones']!=""){ // ?>Anotaciones:<br />
<?php echo $row_ver['anotaciones'];?><?php } // ?></td>
    <td><?php if ($row_ver['extra']!=""){ // ?>Extra:<br />
<?php echo $row_ver['extra'];?><?php } // ?></td>
</tr>
</table>
</div>
<?php } //?>