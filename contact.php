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
					<h1>The key to success, is hard work.</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="photo.php">Contact</a></span>
				</section>
				
				<!--- Articles --->
        <section class="content footer cf">
          <?php 
          	include "content/contact.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>