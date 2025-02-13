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
            'year' => '2021',
            'contact' => '021393213213'
          ],
          [
            'name' => 'LOL',
            'author' => 'Cyka',
            'year' => '2021',
            'contact' => '021393213213'
          ],
          [
            'name' => 'What!!',
            'author' => 'Snowy',
            'year' => '2002',
            'contact' => '021393213213'
          ],
        ];

        //filterAuthor();
        function filterAuthor($books) {
          $filteredBooks = [];

          foreach ($books as $book) {
            if ($book['author'] == 'Snowy') {
              $filteredBooks[] = $book;
            }
          }

          return $filteredBooks;
        }
      ?>
    <h1>
      <?php foreach (filterAuthor($books) as $book) : ?>
        <li>
            Title: <?= ($book['name']) ?> <br>
            Author: <?= ($book['author']) ?> <br>
            Year: <?= ($book['year']) ?>
        </li>
    <?php endforeach; ?>
    </h1>

  </body>
</html>
