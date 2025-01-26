<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection - Sports Merchandise Store</title>
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
        <h1>Women's Collection</h1>
        <div class="grid">
            <div class="item">
                <img src="wt-shirt.jpeg" alt="Women's T-shirt"width="300" height="500">
                <div class="tag">T-Shirts</div>
            </div>
            <div class="item">
                <img src="wshoe.jpg" alt="Women's Shoes"width="300" height="500">
                <div class="tag">Shoes</div>
            </div>
            <div class="item">
                <img src="liggings.jpg" alt="Women's Leggings"width="300" height="500">
                <div class="tag">Leggings</div>
            </div>
            <div class="item">
                <img src="wjacket.jpeg" alt="Women's Jacket"width="300" height="500">
                <div class="tag">Jackets</div>
            </div>
            <div class="item">
                <img src="whoodie.jpeg" alt="Women's Hoodie"width="300" height="500">
                <div class="tag">Hoodies</div>
            </div>
            <div class="item">
                <img src="wcap.jpeg" alt="Women's Cap"width="300" height="500">
                <div class="tag">Caps</div>
            </div>
        </div>
    </main>
</body>
</html>
