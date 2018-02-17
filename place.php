<?php
$pageTitle=' تفاصيل المكان';
$page='place';
include 'inc/header.php';
    
 include 'inc/slideshow.php';
?>


<?php
//$place_id=$_GET['id'];
//$place=$places[$place_id];

if(isset($_GET['id'])){
    $place_id=$_GET['id'];
    if(isset($places[$place_id])){
			$place = $places[$place_id];		
		}//item in places

}// get

if(!isset($place)){
    header('location:places.php');
    exit();
}
?>



    <article class="place">
       <img src="<?= $place['img'] ?>" alt="<?= $place['title']; ?>">
       <div>
           <h2><a href="places.php">
           <?=$place['title'];?> &larr; الاماكن </a></h2>
           <p>
               <?=$place['desc'];?>
           </p>
       </div>
       
    </article>
   

<?php include 'inc/footer.php' ?>