<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports - Sports Merchandise Store</title>
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
        <h1>Explore Popular Sports</h1>
        <div class="grid">
            <div class="item">
                <img src="premier-league-football-1504x846px.webp" alt="Football"width="400" height="400">
                <div class="tag">Football</div>
            </div>
            <div class="item">
                <img src="WNBA_Partnership_Desktop.jpg" alt="Basketball"width="400" height="400">
                <div class="tag">Basketball</div>
            </div>
            <div class="item">
                <img src="istockphoto-177427917-1024x1024.jpg" alt="Cricket"width="400" height="400">
                <div class="tag">Cricket</div>
            </div>
            <div class="item">
                <img src="tennis-1024x683.jpg" alt="Tennis"width="400" height="400">
                <div class="tag">Tennis</div>
            </div>
            <div class="item">
                <img src="running.jpg" alt="Running"width="400" height="400">
                <div class="tag">Running</div>
            </div>
            <div class="item">
                <img src="29Olympics-douglass-pool-vqgl-superJumbo.jpg" alt="Swimming"width="400" height="400">
                <div class="tag">Swimming</div>
            </div>
        </div>
    </main>
</body>
</html>
