<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="test">
        <div id="titre"><span >Contact Us</span></div>
<div>
    <form action="index.php" method="post">
  <div class="input">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" />
  </div>
  <div class="input">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" />
  </div>
  <div class="input">
    <label for="formation">Formation :</label>
    <input type="text" id="formation" name="formation" />
  </div>
  <div class="input">
      <label for="subject">Sujet :</label>
      <input type ="text" id="subject" name="subject" />
  </div>
  <div class="input">
    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="mail" />
  </div>
  <div class="input">
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea>
  </div>
  <div class="coche row">
    <input class="col-lg-1" type="checkbox" name="checkbox" required form="contact"><span class="lcol-lg-11" id="coche">Acceptez-vous la réception de vos données personnelles ?</span>
  </div>
  <div class="button">
        <input type="submit" name="valider" value="envoyer" id="button"/>
  </div>
 </div>
    <?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    if(isset($_POST['valider'])){
            $from = "test@mesozogeek.000webhostapp.com";
            $to = "maurin.margail@ynov.com";
            $mail = $_POST['mail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $formation = $_POST['formation'];
            $headers = "From " . $nom . " " . $prenom . " en " . $formation . "  " . $mail;
            mail($to,$subject,$message, $headers);
            echo "L'email a été envoyé.";
        }
?>
</body>
