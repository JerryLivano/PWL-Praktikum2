<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
            minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Programming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="margin-left:0;">
                    <li class="sidebar-brand">
                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" ><i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="?menu=home"><i class="fa fa-home" aria-hidden="true"></i><span style="margin-left:10px;">Home</span></a>
                    </li>
                    <li>
                        <a href="?menu=book"><i class="fa fa-book" aria-hidden="true"></i><span style="margin-left:10px;">Book</span></a>
                    </li>
                    <li>
                        <a href="?menu=genre"><i class="fa fa-puzzle-piece" aria-hidden="true"></i><span style="margin-left:10px;">Genre</span></a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <script>
                            $("#menu-toggle").click(function(e) {
                                e.preventDefault();
                                $("#wrapper").toggleClass("toggled");
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <div class="container-content">
    <?php
    $navigation = filter_input(INPUT_GET, 'menu');
    switch ($navigation) {
        case 'home':
            include_once 'home.php';
            break;
        case 'genre':
            include_once 'genre.php';
            break;
        case 'book':
            include_once 'book.php';
            break;
        default:
            include_once 'home.php';
            break;
    }
    ?>
    </div>
</main>
</body>
</html>
