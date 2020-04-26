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
					<h1>The best way to predict the future, is to create it.</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="tech.php">Tech</a></span>
				</section>
				
				<!--- Articles --->
        <section class="content">
          <?php 
          	include "content/tech-ios10guide.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>