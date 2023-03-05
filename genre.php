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
<nav style="background-color: #312A25; padding: 20px 0 20px 0;">
    <h1 style="color: white; text-align: center; letter-spacing: 2px;">Tabel Genre</h1>
</nav>
<table class="table table-dark table-striped" style="
      width: 25%;
      position: absolute;
      left: 75%;
      transform:translateX(-50%);
      text-align: center;
      margin-top: 50px;">
<thead>
  <tr style="border-bottom: 1px;">
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
<div id="caraousel" style="margin-top: 50px; width: 50%; margin-left: 5%;">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstorage.googleapis.com%2Fltkcms.appspot.com%2Ffs%2Fyd%2Fimages%2Fcover%2Fbook-genres.base%3Fv%3D1591896477&f=1&nofb=1&ipt=b4907694b303719663dcb86119405607620234f078f07790e5ac9d5f5775e623&ipo=images" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fa5%2Ffe%2F48%2Fa5fe48073191b0988d825492ed85e61b.jpg&f=1&nofb=1&ipt=d9cf8b6a78636c1df7767fb5c27b1d41706c6e93bb742c5e42df59c3d284d537&ipo=images" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F5a%2F1e%2Fb6%2F5a1eb64a22beecec7d931658a4c06b6f.jpg&f=1&nofb=1&ipt=cb81da12a177ca569df1120dd76dce6d8126b6ddef57801326d076e08cc5d766&ipo=images" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
