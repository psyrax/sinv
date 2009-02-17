<?php if ($row_ver['autor1']!=""){ //?>
<?php echo $row_ver['autor1']; ?>
<?php }// ?>
<?php if ($row_ver['autor2']!=""){ //?>
, <?php echo $row_ver['autor2']; ?>,
<?php }// ?>
<?php if ($row_ver['autor3']!=""){ //?>
<?php echo $row_ver['autor3']; ?>,
<?php }// ?>
<?php if ($row_ver['autor4']!=""){ //?>
<?php echo $row_ver['autor4']; ?>,
<?php }// ?>
<?php if ($row_ver['autor5']!=""){ //?>
<?php echo $row_ver['autor5']; ?>,
<?php }// ?>
<?php if ($row_ver['autor6']!=""){ //?>
<?php echo $row_ver['autor6']; ?>,
<?php }// ?>
<?php if ($row_ver['etal']!=""){ //?>
<?php echo $row_ver['etal']; ?>
<?php }// ?>
. <i><?php if ($row_ver['tituloarticulo']!=""){ //?>
<?php echo $row_ver['tituloarticulo']; ?>
<?php }// ?></i>.
Consultado en: <?php if ($row_ver['yyyy']!=""){ //?>
<?php echo $row_ver['yyyy']; ?>
<?php }// ?>
<?php if ($row_ver['mm']!=""){ //?>, <?php echo $row_ver['mm']; ?>
<?php }// ?>
<?php if ($row_ver['dd']!=""){ //?>, <?php echo $row_ver['dd']; ?>
<?php }// ?>.
<?php if ($row_ver['url']!=""){ //?>
En la dirección:<a href="http://<?php echo $row_ver['url']; ?>">URL</a>
<?php }// ?>