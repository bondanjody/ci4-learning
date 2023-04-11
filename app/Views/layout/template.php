<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
  </head>
  <body>
    <div style="background-color: tomato; text-align:center; ">
        <h1>Bondan Web</h1>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
    </div>

    <?= $this->renderSection('content') ?>

    <p style="text-align:center; background-color: gray;">Copyright 2023 Bondan Jody</p>
    </body>
</html>
