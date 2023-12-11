<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php badwords</title>
</head>
<body>

<h2>Censuriamoci</h2>
  <form action="censura.php" method="GET">
    <label for="paragraph">Scrivi un paragrafo</label>
    <input type="text" id="paragraph" name="paragraph">
    <label for="censored">Scrivi la parola da censurare</label>
    <input type="text" id="censored" name="censored">
    <button type="submit">Invia</button>
  </form>
</body>
</html>