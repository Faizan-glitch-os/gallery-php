<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>
<div class="gallery">
    <?php foreach($imageTitles AS $key => $value): ?>
        <a href="image.php?img=<?php echo $key ?>&title=<?php echo $value ?>">
            <article>
                <h2><?php echo $value ?></h2>
                <img src="./images/<?php echo $key ?>" alt="<?php echo $key ?>">
            </article>
        </a>
    <?php endforeach; ?>
    </div>

<?php include './views/footer.php'; ?>
