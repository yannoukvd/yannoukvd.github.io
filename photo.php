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
				<section class="banner">
					<h1>A picture is worth a thousand words.</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="photo.php">Photography</a></span>
				</section>
				
				<!--- Articles --->
        <section class="content cf">
            <?php
               include "content/photo-doel.php";
               include "content/photo-newyork.php";
               include "content/photo-instagram.php";
               include "content/photo-nature.php";
            ?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>