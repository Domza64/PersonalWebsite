<!DOCTYPE html>
<html lang="en">
<?php require_once 'header.php'; ?>
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
                <li><a href="/photography/index.php?tag=cars#tags">Cars</a></li>
                <li><a href="/photography/index.php?tag=animals#tags">Animals</a></li>
                <li><a href="/photography/index.php?tag=nature#tags">Nature</a></li>
                <li><a href="/photography/index.php?tag=urban#tags">Urban</a></li>
            </ul>
            <div>
                <?php require_once 'tags.php'; ?>
            </div>
        </section>
        <section class="__collections --center-content" id="collections">
            <h2>Collections</h2>
            <span>Like photo galeries, more photos from a single event</span>
            <ul>
                <li><a href="/photography/index.php?event=nagrada_grada_zadra">Nagrada Grada Zadra</a></li>
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