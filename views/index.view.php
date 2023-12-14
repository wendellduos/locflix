<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Locflix</title>
  <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
  <header>
    <img src="./assets/img/logo-transparent.svg" alt="Imagem da logo">
  </header>
  <ul class="content-row">
    <?php return_show_list($shows) ?>
  </ul>
</body>
</html>