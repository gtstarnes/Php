<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Recommended Books</h1>

    <?php 
        $books = [
            [
                'name' => 'dcsdcdscdscadcdcdscdscdc',
                'author' => "sdcscdadd",
                'website' => 'http://example.com',
                'year' =>  '1920'

            ],
            [
                'name' => 'dcsdcdscdscdc',
                'author' => "sdcsdd",
                'website' => 'http://example.com',
                'year' =>   '2004'

            ],
        ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];
            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>
    <ul>
        <?php foreach (filterByAuthor($books, 'sdcsdd') as $book) : ?>
            <li>
                <a href="<?= $book['website']?>"><?= $book['name']?></a> (<?=$book['year']?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>