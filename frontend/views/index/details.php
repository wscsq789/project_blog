<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $relax['title'] . ' || ' .$title;
//$this->soc_icons = $soc_icons;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
#downloadAd2{display:none;}
</style>
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

<!-- start main -->
<div class="main">
	<div class="wrap">
		<div class="details"><!-- start details -->
			<h2><?php echo($relax['title']);?></h2>
						<div class="blog_list">
					   		<ul>
								<li><i class="date"> </i> <span><?php echo($relax['origpubtime']);?></span></li>
								<li><i class="comment"> </i><a href="#"> <span>Comments</span></a></li>
								<li><i class="news"></i><span>Public, News</span></li>
								<li><i class="views"></i><a href="#"> <span>124 views</span></a></li>
							</ul>
							<div class="clear"></div>
						</div>
			<div class="det_pic">
				<?php 
				if(empty($relax['content']))
				{
				?>
			  	<img src="<?php echo($imgUrl);?>/img/images/det_pic.jpg" alt="" />
				<p>"你要查看的信息不存在呀！！"</p>
				<?php
				}
				else
				{
				   echo("<br/>");
				}
				?>
	  		</div>
			<div class="det_text">
				<div class="clear"></div>
				<?php
					echo($relax['content']);
				?>
			</div>
			<div class="clear"></div>
		</div><!-- end details -->
	</div>
</div>
<!-- enendd main -->
	
<?php echo $this->render('/layouts/footer', ['imgUrl' => $imgUrl]);?>	
