<?php 
    require('./src/app.php');

    if(!isset($nameData)){
        $nameData = null;
    }

    if($nameData == null){
        $exchange->requestName();
        $nameData = $exchange->getResult();
    } 

?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/81964b813e.js" crossorigin="anonymous"></script>
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary">
        <a href="index.php" class="navbar-brand font-weight-bolder"><i class="fas fa-euro-sign"></i> Exchange.<span class=" font-weight-lighter">io</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <nav class="collapse navbar-collapse navbar-dark" id="sidebar">
            <ul class="navbar-nav d-md-none">
                <li class="nav-item">
                    <a href="?page=dashboard" class="nav-link text-white"> <i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="?page=latest" class="nav-link text-white"> <i class="fas fa-coins"></i> Latest Data</a>
                </li>
                <li class="nav-item">
                    <a href="?page=converter" class="nav-link text-white"> <i class="fas fa-exchange-alt"></i> Currency Converter</a>
                </li>
                <li class="nav-item">
                    <a href="?page=historical_data" class="nav-link text-white"> <i class="fas fa-search-dollar"></i> Historical Data</a>
                </li>
                <li class="nav-item">
                    <a href="?page=time_series" class="nav-link text-white"> <i class="fas fa-calendar-week"></i> Time Series</a>
                </li>
                <li class="nav-item">
                    <a href="?page=about" class="nav-link text-white"> <i class="fas fa-info-circle"></i> About Us</a>
                </li>


            </ul>
        </nav>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-3 col-sm-3 h-100 p-0 position-fixed d-none d-md-block">
            <div class="card card-light mt-3 ml-1 shadow rounded">
                <div class="card-body">
                    <div class="card-title"><h4>Features</h4></div>
                <ul class="list-group shadow-sm border border-0">
                        <li class="list-group-item bg-light">
                            <a href="?page=dashboard" class="btn btn-block btn-light rounded"> <i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="list-group-item bg-light">
                            <a href="?page=latest" class="btn btn-block btn-light rounded"> <i class="fas fa-coins"></i> Latest Data</a>
                        </li>
                        <li class="list-group-item bg-light">
                            <a href="?page=converter" class="btn btn-block btn-light rounded"> <i class="fas fa-exchange-alt"></i> Currency Converter</a>
                        </li>
                        <li class="list-group-item bg-light">
                            <a href="?page=historical_data" class="btn btn-block btn-light rounded"> <i class="fas fa-search-dollar"></i> Historical Data</a>
                        </li>
                        <li class="list-group-item bg-light">
                            <a href="?page=time_series" class="btn btn-block btn-light rounded"> <i class="fas fa-calendar-week"></i> Time Series</a>
                        </li>
                        <li class="list-group-item bg-light">
                            <a href="?page=about" class="btn btn-block btn-light rounded"> <i class="fas fa-info-circle"></i> About Us</a>
                        </li>
                    </ul>
                    
                </div> 
            </nav>

            <div class="col col-sm offset-md-3 mb-3">
                <section>
                    <?php include('content.php') ?>
                </section>
            </div>
        </div>
    </div>

    <footer class="bg-primary fixed-bottom">
        <p class="m-2 text-center text-white">
            AltF4m8 <> 2020
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
