<!doctype html>
<html>

<!--- Head template --->
<?php include "template/head.php"; ?>

  <body>

		<!--- Header template --->
    <?php include "template/header.php"; ?>

		<!--- Main --->
      <main>
				
				<!--- Banner --->
				<section class="banner" style="background-image: url('img/photo/doel/doel20.jpg');">
					<h1>Doel</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="photo.php">Photography</a> > <a href="photo-doel.php">Doel</a></span>
				</section>
				
				<!--- Articles --->
        <section class="cf">
          <?php 
          	include "content/photo-doel.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>