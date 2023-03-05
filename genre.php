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
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($results as $genre) {
        echo '<tr>';
        echo '<th scope = "row">' . $genre['id'] . '</th>';
        echo '<td>' . $genre['name'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
