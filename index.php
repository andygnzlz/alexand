<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" media="screen" charset="utf-8">
  </head>
  <body>
    <?php
      require('model/db.php');

      $connection = New dataBase();
      $connection->open_connection();
    ?>

  </body>
  </html>
