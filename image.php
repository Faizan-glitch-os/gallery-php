<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<h1><?php echo $_GET['title'] ?></h1>
<img src="./images/<?php echo $_GET['img'] ?>" alt="<?php echo $_GET['title'] ?>">
<?php
    foreach($imageDescriptions AS $key => $value){
        if($_GET['img'] === $key){
          echo "<p>$value</p>";
        }
    }
?>
<a href="gallery.php">Back to Gallery</a>
<?php include './views/footer.php'; ?>
