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
				<section class="banner" style="background-image: url('img/photo/normandy/amiens1.jpg');">
					<h1>Normandy</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="photo.php">Photography</a> > <a href="photo-normandy.php">Normandy</a></span>
				</section>
				
				<!--- Articles --->
        <section>
          <?php 
          	include "content/photo-normandy.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>