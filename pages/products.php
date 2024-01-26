<?php 
    require_once __DIR__ ."/../db/productsDB.php";

    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <!-- Boostrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../style/products.css">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand " href="../index.php">Site</a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="products.php">Products</a>
                    </li>
                </ul>
                <?php if(empty($_SESSION["name"])) { ?>
                <a href="login.php" class="ms-auto">
                    <button class="btn btn-success me-2">Login</button>
                </a>
                <a href="register.php">
                    <button class="btn btn-warning">Register</button>
                </a>
                <?php } else { ?>
                    <span class="navbar-text me-3">
                        Welcome
                        <span class="fw-bold"><?php echo $_SESSION["name"]; ?></span>
                    </span>
                    <a href="logout.php">
                    <button class="btn btn-outline-secondary">Log out</button>
                    </a>
                <?php } ?>
            </div>
        </nav>

        <main>
            <div class="container mt-5">
                <div class="row">
                    <?php foreach($products as $product) { ?>
                    <div class="col-4">
                        <div class="card h-100">
                            <img src="<?php echo $product->getImageUrl(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>' image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                                <p class="card-text"><?php echo $product->getDescription(); ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Category:</strong> <?php echo $product->category->getName(); ?></li>
                                <?php if(is_a($product, 'Food')) { ?>

                                <li class="list-group-item"><strong>Calories:</strong> <?php echo $product->getCalories(); ?></li>
                                <li class="list-group-item"><strong>Fats:</strong> <?php echo $product->getFats(); ?></li>

                                <?php } elseif(is_a($product, 'Toy')) { ?>

                                <li class="list-group-item"><strong>Material:</strong> <?php echo $product->getMaterial(); ?></li>

                                <?php } elseif(is_a($product, 'Kennel')) { ?>

                                <li class="list-group-item"><strong>Size:</strong> <?php echo $product->getSize(); ?></li>

                                <?php } ?>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Buy for <strong><?php echo $product->getPrice(isset($_SESSION['id'])); ?>&euro;</strong></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>