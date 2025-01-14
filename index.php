<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/site.css">
</head>
<body>
    <div class="main1">
        <section class="container"> 
            <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Store Front</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home
                        <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clothing.html">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">My Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    </ul>
                    <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search for products">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to my Store</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Here you can buy the following products:</p>
                <ul>
                    <li>Home</li>
                    <li>Clothing</li>
                    <li>Hair Products</li>
                    <li>Shoes</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Click <a href="cart.php">here</a> to view your cart</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - All rights reserved</p>
    </footer>

    <?php 
        echo "Hello World!"; 
        echo "Hello creation!";
        echo "Hello World!";
        echo "Hello universe!";
    ?>
</body>
</html>

