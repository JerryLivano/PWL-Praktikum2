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

<main>
    <div class="title"><h1>Isi dari Table Buku</h1></div>
    <div class="container-fluid mt-2">
    <table class="table">
    <thead class="table-dark">
        <td>#</td>
        <td>ISBN</td>
        <td>Title</td>
        <td>Author</td>
        <td>Publisher</td>
        <td>Publish Year</td>
        <td>Short Description</td>
        <td>Cover</td>
        <td>Name</td>
    </thead>
    <tbody>
    <?php
        $number = 1;
        foreach ($results as $genre) {
            echo '<tr>';
            echo '<td>'.  $number .'</td>';
            echo '<td>' . $genre['isbn'] . '</td>';
            echo '<td>' . $genre['title'] . '</td>';
            echo '<td>' . $genre['author'] . '</td>';
            echo '<td>' . $genre['publisher'] . '</td>';
            echo '<td>' . $genre['publish_year'] . '</td>';
            echo '<td>' . $genre['short_description'] . '</td>';
            echo '<td>' . $genre['cover'] . '</td>';
            echo '<td>' . $genre['name'] . '</td>';
            echo '</tr>';
            $number = $number + 1;
            }
        ?>
    </tbody>
    </table>
    </div>
    <hr style="border:3px solid black">
    <div class="row" style="text-align:center;">
        <table class="table-book">
            <tr class="table-book">
                <td class="table-book"><img src="book.png" class="buku1" alt="" width="200px"></td>
                <td class="table-book"><img src="book.png" class="buku2" alt="" width="200px"></td>
                <td class="table-book"><img src="book.png" class="buku3" alt="" width="200px"></td>
            </tr>
            <tr class="table-book">
                <td class="table-book"><h4>Cara Bermain Basket</h4></td>
                <td class="table-book"><h4>Femiemon</h4></td>
                <td class="table-book"><h4>Naruto Friscilla</h4></td>
            </tr>
        </table>
    </div>
</main>

<?php
    $shortdesc = array();
    foreach ($results as $genre) {
        $shortdesc[] = $genre['short_description'];
    }
?>

<script>
$(".buku1").click(function(e) {
    e.preventDefault();
    <?php
        echo 'alert("'.$shortdesc[3].'")';
    ?> 
})

$(".buku2").click(function(e) {
    e.preventDefault();
    <?php
        echo 'alert("'.$shortdesc[2].'")';
    ?> 
})

$(".buku3").click(function(e) {
    e.preventDefault();
    <?php
        echo 'alert("'.$shortdesc[4].'")';
    ?> 
})
</script>
