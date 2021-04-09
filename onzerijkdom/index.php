<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$errors = [];
$fields = ['name', 'email', 'subject', 'message'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) || $_POST[$field] == "Kies onderwerp") {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }
    if (empty($errors)) {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        
            //submit form

            $name = $values['name'];
            $email = $values['email'];
            $subject = $values['subject'];
            $message = $values['message'];

            $mailTo = "yannouk@me.com";
            $headers = "From: ".$email;
            $txt = "Nieuw bericht van de Onze Rijkdom website van".$email.".\n\n".$message;

            mail($mailTo, $subject, $txt, $headers);

            header("Location: index.php?mailsend#contact");

        } else {
            $error_email = "Foutje met het email adres.";
        }
    }
}

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

        <!-- Home -->
        <section class="home" id="home">
            <div class="block block-1">
                <div class="text text-1">
                    <h1>
                        Onze
                        <span>Rijkdom</span>
                    </h1>
                    <p>
                        Mensen van diverse afkomst, allemaal met ervaring in armoede, vormen het koor ‘Onze Rijkdom’.<br><br>
                        Ze brengen liedjes met zelfgeschreven teksten geïnspireerd door hun bestaan.<br><br>
                        Eenvoudig, ontroerend, herkenbaar maar ook met een flinke dosis humor.
                    </p>
                    <div class="line line-1"></div>
                </div>
                <div class="photo photo-1"></div>
            </div>
            <div class="block block-2">
                <div class="photo photo-2"></div>
                <div class="text text-2">
                    <p>
                        Er wordt gezongen, gerapt en verteld over eenzaamheid en geluk, vriendschap, afscheid nemen, moeders die topkes van de worsten snijden, over jaren je kinderen of je moeder niet zien, over hoe we allemaal verschillend en toch gelijk zijn…  
                    </p>
                </div>
                <!-- <div class="photo photo-3"></div> -->
                <img class="photo photo-3" src="img/photo/BART0721.jpg" alt="Onze Rijkdom aan het zingen">
                <div class="line line-2"></div>
            </div>
            <div class="block block-3">
                <div class="text text-3">
                    <p>
                        Het gaat over hoe mensen in armoede zijn en in de wereld staan. Wat ze vertellen, raakt diep. 
                    </p>
                </div>
            </div>
            <div class="block block-4">
                <div class="text text-4">
                    <p>
                        Onze Rijkdom trad voor het eerst op in 2011 en toerde van Oostende tot in Amsterdam, in scholen, cultuurcentra, het Vlaams Parlement en zelfs voor Koningin Mathilde.  Het koor blijft een breed publiek ontroeren en verbazen.<br><br>
                        In 2019 werd een tweede CD opgenomen.<br><br>
                        Een band van professionele muzikanten begeleidt het koor. Zanger en acteur Hans Van Cauwenberghe leidt alles in goede banen.  
                    </p>
                </div>
                <div class="photo photo-4"></div>
                <div class="photo photo-5"></div>
                <div class="line line-3"></div>
                <div class="text text-5">
                    <p>
                        Zangers: Hubert Beeckmans, Ingrid Van Aarsen, Konnie Maes, Bernard Tamo, Baudoin Sangwa Mulowe, Julya, Greet Baart, Ligam Mahynthan, Lutgart Simoens, Marleen Obijn, Nadia Magnus, Rosa Van Hove, Chantal Ribbens, Julya Sadikova, Heidi Den Hollander, Natascha Reulens, Ann Van Dyck<br><br>
                        Muzikanten: Hans Van Cauwenberghe (zang en gitaar), David De Smet (zang en piano), Peter Verhaegen (Bas), Jan Moonen (gitaar), Geert Helsen (drums)
                    </p>
                </div>
            </div>
        </section>

        <section class="concerts" id="concerts">
            <h2>Concerten</h2>
            <div class="concerts-container">
                <div>
                    <span class="concerts-date">16 oktober 2021</span>
                    <span class="conerts-location">Bredene</span>
                    <a href="#" class="concerts-action">Meer info</a>
                </div>
                <div>
                    <span class="concerts-date">12 januari 2022</span>
                    <span class="conerts-location">Antwerpen</span>
                    <a href="#" class="concerts-action">Meer info</a>
                </div>
                <div>
                    <span class="concerts-date">12 januari 2022</span>
                    <span class="conerts-location">Antwerpen</span>
                    <a href="#" class="concerts-action">Meer info</a>
                </div>
                <div>
                    <span class="concerts-date">12 januari 2022</span>
                    <span class="conerts-location">Antwerpen</span>
                    <a href="#" class="concerts-action">Meer info</a>
                </div>
                <div>
                    <span class="concerts-date">12 januari 2022</span>
                    <span class="conerts-location">Antwerpen</span>
                    <a href="#" class="concerts-action">Meer info</a>
                </div>
            </div>            
        </section>

        <section class="songs cf" id="songs">
            <h2>Albums</h2>
            <div class="cd1 cf">
                <div>
                    <img src="img/photo/onzerijkdom-cd1.png" alt="Onze Rijkdom CD">
                    <div><a id="bestel-cd1" href="#contact"><i class="fas fa-tag"></i> Bestel CD</a></div>
                </div>
            </div>
            <div class="cd2 cf">
                <div>
                    <img src="img/photo/onzerijkdom-cd2.png" alt="Onze Rijkdom CD">
                    <div><a id="bestel-cd2" href="#contact"><i class="fas fa-tag"></i> Bestel CD</a></div>
                    <div><a href="https://ffm.to/onzerijkdom.owe" target="_blank"><i class="fas fa-play"></i> Beluister Album</a></div>
                </div>
            </div>       
        </section>

        <!-- Contact -->
        <section class="contact cf" id="contact">
            <h2>Contacteer ons</h2>
            <div class="contact-info">
                <span class="contact-name">Onze Rijkdom</span>
                <span class="contact-email">onzerijkdom@gmail.com</span>
                <span class="contact-tel">+32 (0) 2 345 67 89</span>
            </div>
            <?php 
            if(isset($_GET['mailsend'])): ?>
            <p>Bedankt voor je bericht!</p>
            <?php endif; ?>
            <div class="contact-form-container">
                <form class="contact-form" action="<?php echo htmlspecialchars('index.php#contact'); ?>" method="post">
                    <fieldset class="name">
                        <?php if (in_array('name', $errors)): ?>
                        <span class="error">Vul jouw naam in.</span>
                        <?php endif; ?>
                        <label for="name">Naam</label>
                        <input class="<?php if (in_array('name', $errors)): echo 'form-invalid'; endif ?> input" type="text" name="name" id="name" placeholder="Naam" value="<?php echo htmlspecialchars($values['name']);?>">
                    </fieldset>
                    <fieldset class="email">
                        <?php if (in_array('email', $errors)): ?>
                        <span class="error">Vul jouw email in.</span>
                        <?php endif; ?>
                        <?php if (isset($error_email)): ?>
                        <span class="error"><?= $error_email ?></span>
                        <?php endif; ?>
                        <label for="email">Email</label>
                        <input class="<?php if (in_array('email', $errors)): echo 'form-invalid'; endif ?> input" type="email" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($values['email']);?>">
                    </fieldset>
                    <fieldset class="subject">
                        <?php if (in_array('subject', $errors)): ?>
                        <span class="error">Kies een onderwerp.</span>
                        <?php endif; ?>
                        <label for="subject">Onderwerp</label>
                        <select id="subject" name="subject" class="<?php if (in_array('email', $errors)): echo 'form-invalid'; endif ?>">
                        <?php
                        $options = ["Kies onderwerp", "CD bestellen", "Concert boeken", "Andere vraag"];
                        foreach ($options as $option) {
                            printf(
                                '<option value="%s" %s>%s</option>',
                                $option,
                                ($option == $values['subject']) ? "selected" : '', 
                                ucfirst($option)
                            );
                        }
                        ?>
                        </select>
                    </fieldset>
                    <fieldset class="address">
                        <?php if (in_array('address', $errors)): ?>
                        <span class="error">Vul jouw adres in.</span>
                        <?php endif; ?>
                        <label for="name">Adres</label>
                        <input class="<?php if (in_array('address', $errors)): echo 'form-invalid'; endif ?> input" type="text" name="address" id="address" placeholder="Adres" value="<?php echo htmlspecialchars($values['address']);?>">
                    </fieldset>
                    <fieldset class="message">
                        <?php if (in_array('message', $errors)): ?>
                        <span class="error">Vergeet jouw berichtje niet.</span>
                        <?php endif; ?>
                        <label for="message">Bericht</label>
                        <textarea class="<?php if (in_array('message', $errors)): echo 'form-invalid'; endif ?> input textarea" type="text" name="message" id="message" placeholder="Wat is jouw vraag?"><?php echo htmlspecialchars($values['message']);?></textarea>
                    </fieldset>
                    <input class="submit" type="submit" name="submit" value="Verzenden" />
                </form>
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