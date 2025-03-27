<?php

$title = "Sitemap | ";
$desc = "Aiko's personal website, mostly consisting of interests in fandom and media consumption.";
include 'partials/header.php';

?>

<body class="default">

    <?php include 'partials/menu.php'; ?>

    <main class="box2">

        <h2 class="first">Sitemap</h2>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <ul>
                <li><a href="listfauxgraphy/index.php">Listfauxgraphy</a></li>
            </ul>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="/microblog/">Microblog</a></li>
            <li>Exhibition</li>
            <ul>
                <li><a href="favorites.php">Faves</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="meta.php">Meta</a></li>
                <li><a href="gallery/index.php">Gallery</a></li>
                <ul>
                    <li><a href="gallery/art.php">Illustrations & Comic Strips</a></li>
                    <li><a href="gallery/infinity-nikki.php">Infinity Nikki</a></li>
                </ul>
                <li><a href="#">Library</a></li>
            </ul>
            <li><a href="links.php">Links</a></li>
            <li><a href="disclaimer.php">Disclaimer</a></li>
            <li><a href="changelog.php">Changelog</a></li>
            <li><a href="guestbook/index.php">Guestbook</a></li>
        </ul>

    </main>

    <?php include 'partials/footer.php'; ?>

</body>