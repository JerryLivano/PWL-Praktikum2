<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root');
$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$link -> setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$query = 'SELECT book.isbn, book.title, book.author, book.publisher, book.publish_year, book.short_description, book.cover, genre.name 
            FROM genre INNER JOIN book ON genre.id = book.genre_id';
$stmt = $link->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll();
$link = null;
?>

<table>
    <thread>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publish Year</th>
            <th>Short Description</th>
            <th>Cover</th>
            <th>Genre</th>
        </tr>
    </thread>
    <tbody>
    <?php
    foreach ($results as $genre) {
        echo '<tr>';
        echo '<td>' . $genre['isbn'] . '</td>';
        echo '<td>' . $genre['title'] . '</td>';
        echo '<td>' . $genre['author'] . '</td>';
        echo '<td>' . $genre['publisher'] . '</td>';
        echo '<td>' . $genre['publish_year'] . '</td>';
        echo '<td>' . $genre['short_description'] . '</td>';
        echo '<td>' . $genre['cover'] . '</td>';
        echo '<td>' . $genre['name'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

