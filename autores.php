<?php require_once('Connections/sinv.php'); ?>
<?php
$colname_testing = "-1";
if (isset($_GET['id'])) {
  $colname_testing = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
}
mysql_select_db($database_sinv, $sinv);
$query_testing = sprintf("SELECT * FROM fichero WHERE id = %s", $colname_testing);
$testing = mysql_query($query_testing, $sinv) or die(mysql_error());
$row_testing = mysql_fetch_assoc($testing);
$totalRows_testing = mysql_num_rows($testing);
?>

<input name="maker" type="hidden" id="maker" value="<?php echo $row_userid['id']; ?>" />
<br />
<?php if ($fuente!=""){ // ?>
Autores (Apellido, N.)<br />
Autor 1: <input name="autor1" type="text" id="autor1"><br />
Autor 2: <input name="autor2" type="text" id="autor2"><br />
Autor 3: <input name="autor3" type="text" id="autor3"><br />
Autor 4: <input name="autor4" type="text" id="autor4"><br />
Autor 5: <input name="autor5" type="text" id="autor5"><br />
Autor 6: <input name="autor6" type="text" id="autor6"><br />
et al<input <?php if (!(strcmp($row_globales['etal'],"et al"))) {echo "checked=\"checked\"";} ?> name="etal" type="checkbox" id="etal" value="et al">
<br />
Organización Autora: <input name="orgautor" type="text" id="orgautor"><br />
<?php } //?>
<?php if ($editar!=""){ // ?>
Autores (Apellido, N.)<br />
Autor 1: <input name="autor1" type="text" id="autor1" value="<?php echo $row_global['autor1'];?>"><br />
Autor 2: <input name="autor2" type="text" id="autor2" value="<?php echo $row_global['autor2'];?>"><br />
Autor 3: <input name="autor3" type="text" id="autor3" value="<?php echo $row_global['autor3'];?>"><br />
Autor 4: <input name="autor4" type="text" id="autor4" value="<?php echo $row_global['autor4'];?>"><br />
Autor 5: <input name="autor5" type="text" id="autor5" value="<?php echo $row_global['autor5'];?>"><br />
Autor 6: <input name="autor6" type="text" id="autor6" value="<?php echo $row_global['autor6'];?>"><br />
et al<input <?php if (!(strcmp($row_global['etal'],"et al"))) {echo "checked=\"checked\"";} ?> name="etal" type="checkbox" id="etal" value="et al"><br />
Organización Autora: 
<input name="orgautor" type="text" id="orgautor" value="<?php echo $row_global['orgautor'];?>"><br />
<?php } //
mysql_free_result($testing); ?>