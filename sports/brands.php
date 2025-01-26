<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands - Sports Merchandise Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images (1).png">
</head>
<body>
<header>
        <div class="header-title">Sports Merchandise Store</div>
        <div class="search-bar">
            <input type="text" placeholder="Search brands, kit, etc." />
            <button>🔍</button>
        </div>
        <nav>
            <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="sports.php">Sports</a></li>
            <li><a href="brands.php">Brands</a></li>
            <li><a href="men.php">Men</a></li>
            <li><a href="women.php">Women</a></li>
            <li><a href="kid.php">Kid</a></li>
            </ul>
        </nav>
        <?php if (isset($_SESSION['user'])): ?>
            <div class="user-info">
                 <?php echo htmlspecialchars($_SESSION['user']['username']); ?> |
                <a href="logout.php">Logout</a>
            </div>
        <?php else: ?>
            <a href="login.php" class="auth-button">Login</a>
            <a href="signup.php" class="auth-button">Signup</a>
        <?php endif; ?>
    </header>
    <main>
        <h1>Explore Popular Brands</h1>
        <div class="grid">
            <div class="item">
                <img src="images.png" alt="Adidas" width="300" height="400">
                <div class="tag">Adidas</div>
            </div>
            <div class="item">
                <img src="images2.png" alt="Nike" width="300" height="400">
                <div class="tag">Nike</div>
            </div>
            <div class="item">
                <img src="64dae773aafb206b444669d82b981add.png" alt="Asics" width="300" height="400">
                <div class="tag">Asics</div>
            </div>
            <div class="item">
                <img src="images (1).png" alt="Puma" width="300" height="400">
                <div class="tag">Puma</div>
            </div>
            <div class="item">
                <img src="1682693954-best-sportswear-brands-world-right-now-2-07.jpg" alt="Jordan" width="300" height="400">
                <div class="tag">Jordan</div>
            </div>
            <div class="item">
                <img src="New_Balance_logo.svg.png" alt="New Balance" width="300" height="400">
                <div class="tag">New Balance</div>
            </div>
        </div>
    </main>
</body>
</html>
