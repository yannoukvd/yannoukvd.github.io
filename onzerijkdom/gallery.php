<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// $page_title = "Galerij";

// require_once 'src/Facebook/autoload.php';
// $fb = new Facebook\Facebook([
//     'app_id' => '939273919501461',
//     'app_secret' => '2fbc4390e02c439e0bd9888d66340b1e',
//     'default_graph_version' => 'v5.0',
// ]);
// $access_token="EAANWQ8BRlJUBANnZBWdAA4ZBZBnVL8dh8YPAjyXsNlxgT5oO78iIqL8JhJgFVkq1lwNwnvCOiQAw9IxEsENDJjyagfp15VYE3BWMNZBmbd90UIZASI6wbh8kus24DrDFegAC8HpnpeIRLTYp2G8tB9jhgNbF8yAsZD";
?>

<!doctype html>
<html>

<!-- Head -->
<head>

    <!--- Meta Data --->
    <meta charset="utf-8">
    <meta name="description" content="Zingen vanuit de onderstroom">
    <meta name="author" content="Onze Rijkdom">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!--- Favicons --->
    
    
    <!--- Title --->
    <title>Onze Rijkdom | Zingen vanuit de onderstroom</title>
    
    <!--- Stylesheets --->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles_gallery.css">
    <link rel="stylesheet" href="font/font-awesome/css/all.css">
    <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">

    <!--- Scripts --->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/main.js"></script>
    
</head>

  <body>

	<!-- Header -->
    <header class="cf">

    <div class="header-container">

        <div class="logo"><a href="index.php"></a></div>
            <nav>
                <ul>
                    <li><a href="index.php#home">Over ons</a></li>
                    <li><a href="index.php#concerts">Concerten</a></li>
                    <li><a href="index.php#songs">Albums</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li><a href="gallery.php">Galerij</a></li>
                </ul>
            </nav>

            <div class="m-nav-btn m-nav-btn-white">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <nav class="m-nav">
              <ul>
                <li><a href="index.php#home">Over ons</a></li>
                <li><a href="index.php#concerts">Concerten</a></li>
                <li><a href="index.php#songs">Albums</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="gallery.php">Galerij</a></li>
              </ul>
            </nav>

        </div>

        <div class="top"><a href="#home"></a></div>

    </header>

	   <!-- Main --->
      <main>

        <!-- Gallery -->
        <section>
            <div class="work-grid cf">
            <div class="col">
              <img class="work-grid-image" src="img/photo/BART0616.jpg">
              <img class="work-grid-image" src="img/photo/BART0618.jpg">
              <img class="work-grid-image" src="img/photo/BART0679.jpg">
            </div>
            <div class="col">
                <img class="work-grid-image" src="img/photo/BART0678.jpg">
                <img class="work-grid-image" src="img/photo/BART0705.jpg">
                <img class="work-grid-image" src="img/photo/BART1786.jpg">
            </div>
            <div class="col">
                <img class="work-grid-image" src="img/photo/BART0721.jpg">
                <img class="work-grid-image" src="img/photo/BART1706.jpg">
                <img class="work-grid-image" src="img/photo/BART1828.jpg">
            </div>
          </div>

          <div class="fullscreen">
            <div>
              <div>
                <div>
                  <img src='' alt="Brussels">
                </div>
              </div>
            </div>
          </div>
        </section>
        
				
        </main>
      
		<!-- Footer -->
        <footer>
            <div class="monster"></div>
            <span><a href="mediacomm.be">Onze Rijkdom</a> - 2021</span>
        </footer>
      
  </body>

</html>