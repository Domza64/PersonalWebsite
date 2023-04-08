<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/utils/normalize.css">
    <link rel="stylesheet" href="../assets/css/utils/fonts.css">
    <link rel="stylesheet" href="../assets/css/photography/style.css">
    <link rel="stylesheet" href="../assets/css/photography/style-responsive.css">
    <!-- TITLE -->
    <title>Photography | Domza64</title>
</head>
<body>
    <header class="--center-content">
        <nav class="__navbar">
            <a href="photography"><span>Domza Photo</span></a>
            <ul class="__destkop_nav">
            <li><a href="/">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#tags">Tags</a></li>
            </ul>
            <div class="__hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        <nav class="__mobile_nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#tags">Tags</a></li>
            </ul>
        </nav>
    </header>
    <script src="../assets/js/hamburger.js"></script>
    <main>
        <section class="__hero" id="hero">
            <div class="__hero_image_container"></div>
        </section>
        <section class="__gallery --center-content" id="gallery">
            <h2>Gallery</h2>
            <div class="__gallery_container">
                <?php 
                    include(dirname(__DIR__) . "/assets/php/database.php");
                ?>
                <?php
                    $sql = "SELECT * FROM main_gallery";
                    $result = mysqli_query($connPhoto, $sql);
                    $photos = mysqli_fetch_all($result, MYSQLI_ASSOC);
                ?>
                <?php foreach($photos as $photo): ?>
                <div class="__gallery_image">
                    <img src="../assets/media/images/photo/<?php echo $photo['photo']; ?>" alt="One of my photographs">
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="__tags --center-content" id="tags">
            <h2>Tags</h2>
            <ul>
                <li>Cars</li>
                <li>Animals</li>
                <li>Nature</li>
                <li>Portraits</li>
            </ul>
        </section>
        <section class="__collections --center-content" id="collections">
            <h2>Collections</h2>
            <span>Like photo galeries, more photos from a single event</span>
            <ul>
                <li>Event 1</li>
                <li>Event 2</li>
                <li>Event 3</li>
            </ul>
        </section>
    </main>
    <footer class="--center-content">
        <span>
            This is footer and it is here justc to make 
            this page look more professional...
        </span>
    </footer>
</body>
</html>