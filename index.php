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
</head>
<style>
    body {
        overflow-x: hidden;
    }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.6s ease;
        -moz-transition: all 0.6s ease;
        -o-transition: all 0.6s ease;
        transition: all 0.6s ease;
    }
    #wrapper.toggled {
        padding-left: 200px;
    }
    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background-color:#312A25 !Important;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }
    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 10px;
    }
    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-left:-250px;
    }
    .sidebar-nav {
        position: absolute;
        top: 0;
        right:15px;
        width: 200px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }
    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }
    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: #312A25;
    }
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }
    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }
    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }
    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }
    @media(min-width:768px) {
        #wrapper {
            padding-left: 220px;
        }
        #wrapper.toggled {
            padding-left: 0;
        }
        #sidebar-wrapper {
            width: 200px;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 40px;
        }
        #wrapper.toggled span {
            visibility:hidden;
        }
        #wrapper.toggled i {
            float:right;
        }
        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }
        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
    @media(max-width:414px) {
        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right:60px;
        }
        #wrapper.toggled {
            padding-right: 60px;
        }
        #wrapper {
            padding-left: 20px;
        }
        #wrapper.toggled {
            padding-left: 0;
        }
        #sidebar-wrapper {
            width: 50px;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 140px;
        }
        #wrapper.toggled span {
            visibility:visible;
            position:relative;
            left:70px;
            bottom:13px;
        }
        #wrapper span {
            visibility:hidden;
        }
        #wrapper.toggled i {
            float:right;
        }
        #wrapper i {
            float:right;
        }
        #page-content-wrapper {
            padding: 5px;
            position: relative;
        }
        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>
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
</main>
</body>
</html>
