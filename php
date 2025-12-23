<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Account Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="nav-container">
            <div class="logo">GAME<span>STORE</span></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="deposit.php">Deposit</a></li>
                <li><a href="history.php">History</a></li>
            </ul>
            <div class="box-money">
                Balance: <strong>$0.00</strong>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="search-section">
            <form action="" method="GET">
                <select name="category" class="search-input">
                    <option value="">All Categories</option>
                    <option value="pubg">PUBG Mobile</option>
                    <option value="mlbb">Mobile Legends</option>
                    <option value="freefire">Free Fire</option>
                </select>
                <button type="submit" class="btn-search">Search</button>
            </form>
        </div>

        <h2 class="section-title">Available Accounts</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="cat-tag">PUBG</div>
                <h3>Level 75 Global Acc</h3>
                <p>M416 Glacier Max + 50 Sets</p>
                <div class="price">$55.00</div>
                <button class="btn-buy">Buy Now</button>
            </div>

            <div class="product-card">
                <div class="cat-tag">MLBB</div>
                <h3>Mythical Glory Acc</h3>
                <p>250 Skins + All Heroes</p>
                <div class="price">$30.00</div>
                <button class="btn-buy">Buy Now</button>
            </div>
        </div>
    </div>

</body>
</html>
