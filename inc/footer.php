</div><!-- container -->

<footer>
    <?=$title ?> Copyright &copy; <?=date('Y');?>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.refineslide.min.js"></script>

<script>
$(function () {
$('.demo').refineSlide({
maxWidth: 1000 ,autoPlay: true , transition: 'random'
});
});
</script>

</body>
</html>