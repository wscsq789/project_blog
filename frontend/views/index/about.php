<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $title;
//$this->soc_icons = $soc_icons;
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- start header -->
<div class="header1">
	<div class="wrap">
	<?php 
		//顶部图标
		//echo $this->render('../../layouts/socIcons');
		//echo $socIcons; 
		//include(dirname(__FILE__) . '/../layouts/soc_icons.php');
		echo $this->render('/layouts/socIcons');
		
	?>	
	<?php
		//首页需要加载
		if(isset($classHeader) && $classHeader == '')
		{
	?>
	<div class="h_main">
		<div class="h_img">
			<img data-echo="<?php echo($imgUrl);?>img/images/pic.png" src="<?php echo($imgUrl);?>img/images/loading.gif" alt=""/>
		</div>
		<div class="h_text">
			<h2>new collections</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide1"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<span class="hide">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</span></span> </p>
		</div>
		<div class="clear"></div>
	</div>
	<?php 

		}
		//左部导航	 
	 	echo $this->render('/layouts/leftNav', ['classHeader' => $classHeader]);
		//include('./leftNav.php');
	 	//echo($leftNav);
	 ?>
	</div>
</div>
<!-- end header -->


<!-- start main -->
<div class="main">
	<div class="wrap">
		<div class="about"><!-- start about -->
			<div class="cont-grid-img img_style">
		  		<img data-echo="<?php echo($imgUrl);?>/img/images/about_pic.jpg" alt="">
		   	</div>
		    <div class="cont-grid">
		       	<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
		       	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
		       	<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
		   	</div>
		   	<div class="clear"></div>
		  	<div class="about-p">
				<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
				<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit</p>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				<div class="read_more">
					<a class="btn" href="details.html">read more</a>
				</div>
			</div>
		</div><!-- end about -->
	</div>
</div>

<!-- enendd main -->
	
<?php echo $this->render('/layouts/footer', ['imgUrl' => $imgUrl]);?>	
