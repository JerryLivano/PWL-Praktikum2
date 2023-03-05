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
<div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
</div>
