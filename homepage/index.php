<?php
require_once 'controllers/MainController.php';

$controller = new MainController();
$quickLinks = $controller->getQuickLinks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEPO - Home</title>
</head>
<body>
    <header>
        <h1>JIS Logo</h1>
        <nav>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#partnerships">Global Partnerships</a></li>
                <li><a href="#programs">Programs & Initiatives</a></li>
                <li><a href="#resources">Resources & Support</a></li>
                <li><a href="#news">News & Events</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <section id="hero">
        <h2>Your Gateway to Global Collaboration and International Opportunities</h2>
        <button onclick="location.href='partner.php'">Partner with Us</button>
        <button onclick="location.href='programs.php'">Join a Program</button>
        <button onclick="location.href='contact.php'">Contact Us</button>
    </section>
    <section id="quick-links">
        <h3>Quick Links</h3>
        <ul>
            <?php foreach ($quickLinks as $link): ?>
                <li><a href="<?= $link['link'] ?>"><?= $link['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>
