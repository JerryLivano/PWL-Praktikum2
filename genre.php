<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root');
$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$link -> setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$query = 'SELECT id, name FROM genre';
$stmt = $link->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll();
$link = null;
?>
<h1>tes</h1>
<table style="border: solid 1px black;">
    <thread>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thread>
    <tbody>
    <?php
    foreach ($results as $genre) {
        echo '<tr>';
        echo '<td>' . $genre['id'] . '</td>';
        echo '<td>' . $genre['name'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
