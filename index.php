<!doctype html>
<html>

<!-- Head template -->
<?php include "template/head.php"; ?>

  <body>

		<!-- Header template -->
    <?php include "template/header.php"; ?>

		<!-- Main --->
      <main>
				
				<!-- Banner -->
				<section class="banner">
					<h1>Hey!</h1>
				</section>
				
				<!-- Articles -->
        <section class="content cf">
        <?php
                include "content/article-welcome.php";
        ?>

				<?php
                include "content/photo-doel.php";
                include "content/photo-newyork.php";
                include "content/photo-instagram.php";
        ?>

				<?php
                include "content/design-poster.php";
                include "content/design-peoplepartners.php";
                include "content/design-barto.php";
        ?>

				<?php
                include "content/video-skating.php";
                include "content/video-newyork.php";
                include "content/video-wcdcrevette.php";
        ?>
        </section>
				
      </main>
      
		<!-- Footer template -->
    <?php include "template/footer.php"; ?>
      
  </body>

</html>