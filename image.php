<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<h1><?php echo $imageTitles[$_GET['img']] ?></h1>
<img src="./images/<?php echo $_GET['img'] ?>" alt="<?php echo $imageTitles[$_GET['img']] ?>">
<p>
    <?php
        echo $imageDescriptions[$_GET['img']]; 
    ?>         
</p>
<a href="<?php echo rawurlencode("gallery.php") ?>">Back to Gallery</a>
<?php include './views/footer.php'; ?>
