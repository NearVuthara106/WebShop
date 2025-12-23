<?php 
// Mock data for products
$products = [
    ['id' => 1, 'name' => 'PUBG Level 80', 'price' => 15.00, 'cat' => 'Mobile'],
    ['id' => 2, 'name' => 'MLBB Mythic Account', 'price' => 10.00, 'cat' => 'Mobile'],
    ['id' => 3, 'name' => 'Steam Account CS2', 'price' => 25.00, 'cat' => 'PC'],
];

$balance = 50.00; // This would normally come from your Database
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Game Shop</title>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="deposit.php">Deposit</a>
    <a href="history.php">History</a>
    <span style="color: #4ecca3;">Balance: $<?php echo $balance; ?></span>
</nav>

<div class="container">
    <h2>Available Accounts</h2>
    
    <form style="margin-bottom: 20px;">
        <select name="category">
            <option value="all">All Categories</option>
            <option value="mobile">Mobile Games</option>
            <option value="pc">PC Games</option>
        </select>
        <button type="submit">Search</button>
    </form>

    <div class="card-grid">
        <?php foreach($products as $item): ?>
        <div class="product-card">
            <h3><?php echo $item['name']; ?></h3>
            <p>Category: <?php echo $item['cat']; ?></p>
            <p style="font-size: 1.2rem; font-weight: bold;">$<?php echo $item['price']; ?></p>
            <button class="btn-buy">Buy Now</button>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
