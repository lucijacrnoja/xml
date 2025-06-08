<?php
$xml = simplexml_load_file("kukuruzi.xml");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vrste Kukuruza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="img/logo.jpg" alt="Logo">
        <h1>Vrste Kukuruza</h1>
        <nav>
            <a href="index.php">Početna</a>
            <a href="kukuruzi.php">Kukuruzi</a>
            <a href="uzgajivaci.php">Uzgajivači</a>
        </nav>
    </header>

    <main>
        <?php foreach ($xml->kukuruz as $k): ?>
            <div class="kukuruz">
                <h2><?php echo $k->naziv; ?></h2>
                <img src="img/<?php echo $k->slika; ?>" alt="<?php echo $k->naziv; ?>">
                <p><strong>Podrijetlo:</strong> <?php echo $k->podrijetlo; ?></p>
                <p><?php echo $k->opis; ?></p>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; 2025 Kukuruzi by Lucija Crnoja</p>
    </footer>
</body>
</html>
