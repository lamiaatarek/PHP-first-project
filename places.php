<?php
$pageTitle='الاماكن السياحية';
$page='places';
include 'inc/header.php';

include 'inc/slideshow.php';
?>


<div class="content">
    
    <?php foreach( $places as $place_id => $place){?>
    <article>
        <h2><?=$place['title'];?></h2>
        <img src="<?=$place['img'];?>">
        <a href="place.php?id=<?=$place_id;?>">للمزيد ... </a>
    </article>
    <?php } ?>
</div>

<?php include 'inc/footer.php' ?>