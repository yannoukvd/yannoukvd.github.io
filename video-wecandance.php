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
				<section class="banner" style="background-image: url('https://img.youtube.com/vi/QxE7KXtf34Q/sddefault.jpg');">
					<h1>Wecandance</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="video.php">Video</a> > <a href="photo-wecandance.php">Wecandance</a></span>
				</section>
				
				<!--- Articles --->
        <section>
          <?php 
          	include "content/video-wcdcrevette.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>