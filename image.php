<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php
    if (!empty($_GET['img']) && !empty($imageTitles[$_GET['img']])): ?>
       <?php $img = e($_GET['img']); ?>
       <h1><?php echo $imageTitles[$img] ?></h1>
       <img src="./images/<?php echo $img ?>" alt="<?php echo $imageTitles[$img] ?>">
       <p><?php echo $imageDescriptions[$img]; ?></p>
<?php else: ?>
    <p>Page not found</p>
<?php endif; ?>

<a href="<?php echo rawurlencode("gallery.php") ?>">Back to Gallery</a>
<?php include './views/footer.php'; ?>
