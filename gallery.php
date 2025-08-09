<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>
<div>
    <?php foreach($imageTitles AS $key => $value): ?>
        <a href="image.php?<?php echo http_build_query(['img' => $key]) ?>">
            <article>
                <h2><?php echo e($value) ?></h2>
                <img src="./images/<?php echo rawurlencode($key) ?>" alt="<?php echo e($key) ?>">
            </article>
        </a>
    <?php endforeach; ?>
    </div>

<?php include './views/footer.php'; ?>
 