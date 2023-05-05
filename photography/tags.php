<section class="__gallery --center-content" id="gallery">
    <div class="__gallery_container">
        <?php
            if (!empty($_GET)) { // Should check if contains 'tag'
                $selectedTag = $_GET['tag'];

                $sql = "SELECT * FROM main_gallery WHERE tag = '$selectedTag'";
                $result = mysqli_query($connPhoto, $sql);
                $photos = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach($photos as $photo) {
                    echo (
                        '<div class="__gallery_image">' .
                        '<img src="../assets/media/images/photo/' . $photo['photo'] . '" alt="One of my photographs">' .
                        '</div>'
                    );
                }
            }
            else {
                echo ('Epic Fail!');
            }
        ?>
    </div>
</section>
