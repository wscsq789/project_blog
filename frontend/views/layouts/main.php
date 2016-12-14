<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
	<meta http-equiv="Content-Type" content="text/html;<?= Yii::$app->charset ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>-->
	<!--<link href='http://fonts.useso.com/css?family=Rosario:400,700' rel='stylesheet' type='text/css'>-->
	<?php $this->head() ?>
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->

	<!-- <script src="js/jquery.min.js"></script> -->
	<!-- <script src="js/hover_pack.min.js"></script> -->
</head>
<body>


<?php $this->beginBody() ?>

<!-- start main -->
	<?= $content ?> 
<!-- end main -->

<script src="http://www.yii.com/img/js/echo.min.js"></script>
<script>
    (function(){
        Echo.init({
            offset: 500,
            throttle: 0
	    });
    })();
</script>

<div class="footer_top">
	<div class="copy">
		<p class="link"><span>© All rights reserved</p>
	</div>
	<div class="clear"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
