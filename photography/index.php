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
                <li><a href="/photography/index.php?tag=cars">Cars</a></li>
                <li><a href="/photography/index.php?tag=animals">Animals</a></li>
                <li>Nature</li>
                <li>Portraits</li>
            </ul>
            <div>
                <?php require_once 'tags.php'; ?>
            </div>
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