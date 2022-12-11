<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="src/css/styles.css?=<?= time() ?>" />
  <link rel="stylesheet" href="src/css/mobile.css?=<?= time() ?>" />
  <script defer src="./src/js/script.js?=<?= time() ?>"></script>
  <title>Weather PHP</title>
</head>

<body>

  <?php include "src/includes/message.php" ?>

  <?php include "src/includes/search.php" ?>

  <input class="filter" type="text" placeholder="filtrar cidades">

  <main class="container">
    <?php include "./src/actions/read.php" ?>
  </main>

  <?php include "./src/includes/modal.php" ?>
</body>

</html>