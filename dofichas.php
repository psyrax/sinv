 <div class="box">
  <table width="600" border="0">
    <thead><tr><td><div class="tema">
          Tema: <?php echo $row_ver['tema']; ?><br />
    Ficha <?php echo $row_ver['tipoficha']; ?></div></td></tr></thead>
    <tbody><tr>
        <td> 
			<?php if ($row_ver['tipofuente']=="libro"){ //?>
        	Libro
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="librocapt"){ //?>
            Capitulo de Libro
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="revista"){ //?>
            Revista
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="periodico"){ //?>
            Periodico
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="internet"){ //?>
            Internet
            <?php }// ?>
			</td><td><div class="datos">
            <?php if ($row_ver['tipofuente']=="libro"){ //?>
            <?php include('libro.php'); ?>
            <?php }// ?>
            <?php if ($row_ver['tipofuente']=="librocapt"){ //?>
            <?php include('librocapt.php'); ?>
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="revista"){ //?>
            <?php include('revista.php'); ?>
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="periodico"){ //?>
            <?php include('periodico.php'); ?>
            <?php }// ?>
			<?php if ($row_ver['tipofuente']=="internet"){ //?>
            <?php include('internet.php'); ?>
            <?php }// ?>
			</div></td>
    </tr></tbody>
      </table>
  <hr />
  <?php include('contenidos.php'); ?>
  <hr />
      <div align="right">
  <a href="fichain.php?editar=<?php echo $row_ver['id']; ?>">Editar</a></div>
  <div align="left"><a href="borrar.php?borrar=<?php echo $row_ver['id']; ?>">Borrar</a></div>
  </div><br />