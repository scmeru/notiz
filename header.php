<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notiz Hut</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="icons8.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgba(255, 251, 233, 0);">

    <!-- Background Image -->
    <div class="navbar-container"></div>

    <!-- Navbar -->
    <?php 
    session_start();
    $isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-book-reader"></i> Notiz Hut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php#about">Contact</a>
                    </li>
                    
                    <?php if($isLoggedIn): ?>
                    <!-- Admin Menu (Only shows when logged in) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-cog me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?menu=3#manage_food">
                                <i class="fas fa-utensils me-2"></i> Manage Food
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                
                <?php if(!$isLoggedIn): ?>
                <!-- Login Button (Only shows when NOT logged in) -->
                <div class="d-flex">
                    <a href="login.php" class="btn btn-outline-light me-2">
                        <i class="fas fa-sign-in-alt me-1"></i>
                    </a>
                </div>
                <?php endif; ?>
                
                <!-- Search Form -->
                <form class="d-flex" id="searchForm" action="cari.php#carifood" method="get">
                    <input class="form-control me-2" type="search" id="searchInput" name="judul" placeholder="Cari Makanan">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <!-- Your content goes here -->
        </div>
    </div>
