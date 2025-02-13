<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Demo</title>
    <style>
      body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
  <?php 
        $books = [
          [
            'name' => 'Cy',
            'author' => 'Snowy',
            'contact' => '021393213213'
          ],
          [
            'name' => 'Cy',
            'author' => 'Snowy',
            'contact' => '021393213213'
          ],
        ];
      ?>
    <h1>
      <?php foreach ($books as $book) : ?>
        <li><?= $book['name'] ?></li>
      <?php endforeach ?>
    </h1>
  </body>
</html>
