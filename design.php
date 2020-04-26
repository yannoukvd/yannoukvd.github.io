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
					<h1>Design is a journey of discovery.</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="design.php">Design</a></span>
				</section>
				
				<!--- Articles --->
        <section class="content cf">
					<?php 
          	
						include "content/design-poster.php";
          	include "content/design-wittylook.php";
          	include "content/design-barto.php";
          	include "content/design-alleman.php";
          	include "content/design-bolides.php";
          	include "content/design-beloto.php";
			
					?>
				</section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>