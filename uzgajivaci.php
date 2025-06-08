<?php
$xml = simplexml_load_file("uzgajivaci.xml");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Uzgajivači Kukuruza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="img/logo.jpg" alt="Logo">
        <h1>Uzgajivači Kukuruza</h1>
        <nav>
            <a href="index.php">Početna</a>
            <a href="kukuruzi.php">Kukuruzi</a>
            <a href="uzgajivaci.php">Uzgajivači</a>
        </nav>
    </header>

    <main>
        <?php foreach ($xml->osoba as $o): ?>
            <div class="kukuruz">
                <h2><?php echo $o->ime . ' ' . $o->prezime; ?></h2>
                <img src="img/<?php echo strtolower($o->ime); ?>.jpg" alt="<?php echo $o->ime; ?>">
                <p><strong>Lokacija:</strong> <?php echo $o->lokacija; ?></p>
                <p><strong>Sorta:</strong> <?php echo $o->sorta; ?></p>
                <p><?php echo $o->ime; ?> se bavi uzgojem sorte kukuruza <strong><?php echo $o->sorta; ?></strong> u regiji <?php echo $o->lokacija; ?>. <?php echo $o->opis; ?></p>
            </div>
        <?php endforeach; ?>
        <br>
    </main>

    <footer>
        <p>&copy; 2025 Kukuruzi by Lucija Crnoja</p>
    </footer>
</body>
</html>
