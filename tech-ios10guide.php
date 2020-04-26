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
				<section class="banner" style="background-image: url('img/post/ios10.png');">
					<h1></h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="design.php">Tech</a> > <a href="ios10guide.php">iOS 10 Guide</a></span>
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