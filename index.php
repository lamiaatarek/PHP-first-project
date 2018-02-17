<?php
$pageTitle='الصفحة الرئيسية';
$page='home';
include 'inc/header.php';

include 'inc/slideshow.php';


?>



<div id="slideshow">
   
   <ul class="demo">
    
<?php foreach($slides as $slide): ?>
   <li class="group">
   <img src="<?=$slide;?>" alt="" />
    </li> 
<?php endforeach; ?>
    </ul>
 </div><!-- slideshow -->


<div class="content">
    
    <?php foreach( array_slice($places,0,4,true) as $place_id => $place){?>
    <article>
        <h2><?=$place['title'];?></h2>
        <img src="<?=$place['img'];?>">
        <a href="place.php?id=<?=$place_id;?>">للمزيد ... </a>
    </article>
    <?php } ?>
</div>



<div class="bottom">
    	<h1>قرية النورس السياحية </h1>
		<p>يوفر الفندق حمام سباحة في الهواء الطلق وشاطئ خاص، ويقع في بورسعيد. كما تتوفر خدمة الواي فاي المجانية في جميع أنحاء مكان الإقامة.
تحتوي أماكن الإقامة المكيفة على جهاز تلفزيون ذي شاشة مسطحة ونظام تكييف، تتوفرأيضا غلاية كهربائية. ويضم الحمام الخاص دش.
وتشمل المرافق الأخرى المتوفرة في مكان الإقامة صالة مشتركة وملعبًا للأطفال ومتجر في الموقع ومركز للياقة البدنية. تتوفر الأنشطة مثل الاسكواش والبولينج عند الطلب.
نحن نتكلم لغتك!   </p>
     </div> <!-- bottom-->

<?php include 'inc/footer.php' ?>