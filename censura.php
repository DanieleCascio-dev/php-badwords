<?php

$paragraph = $_GET['paragraph'];
$paragraph_lenght = strlen($paragraph);
// echo $paragraph;
$censored = $_GET['censored'];
$censored_paragraph = str_replace($censored,'***',$paragraph);
$censored_paragraph_lenght = strlen($censored_paragraph);
// echo $censored;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La tua censura (bello il 2023)</title>
</head>
<body>
  <h2>Ecco il tuo risultato:</h2>
  <p>Questo è il paragrafo che hai deciso di censurare: <?php echo $paragraph; ?>. <br>
    Continene <?php echo $paragraph_lenght; ?> caratteri.</p>
    <p>Questo è il paragrafo con la censura sulla parola <?php echo $censored; ?>: <?php echo $censored_paragraph; ?>. <br>
      Continene <?php echo $censored_paragraph_lenght ?> caratteri</p>
</body>
</html>