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
					<h1>No matter what you do, your job is to tell your story.</h1>
				</section>
				
				<!--- Breadcrumbs --->
				<section class="breadcrumbs">
					<span><a href="index.php">Home</a> > <a href="video.php">Video</a></span>
				</section>
				
				<!--- Articles --->
        <section class="content cf">
          <?php 
          	include "content/video-wcdbloody.php";
          	include "content/video-wcdkompass.php";
          	include "content/video-wcdcrevette.php";
          	include "content/video-skating.php";
          	include "content/video-newyork.php"; 
          	include "content/video-myimmortal.php"; 
          	include "content/video-blue2.php"; 
          	include "content/video-blue1.php"; 
          	include "content/video-maybe.php"; 
					?>
        </section>
				
      </main>
      
		<!--- Footer template --->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>