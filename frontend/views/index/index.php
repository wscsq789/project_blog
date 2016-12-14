<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $title;
//$this->soc_icons = $soc_icons;
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- start header -->
<div class="header">
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
			<img src="<?php echo($imgUrl);?>img/images/pic.png" />
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
	<div class="content"><!-- start content -->
		<h5>our gallery</h5>
			<h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,galley of type and scrambled it to make a type specimen book.</h6>
			<ul class="hover_pack right">
				<li>
					<a href="details.html" class="b_btn"><span > <h4>creative</h4><p>Lorem Ipsumly</p></span> </a>
				</li>				 
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
				   		<img data-echo="<?php echo($imgUrl);?>img/images/h_pic1.jpg" src="<?php echo($imgUrl);?>img/images/loading.gif"  />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
						  	<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>		
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
				    	<img data-echo="<?php echo($imgUrl);?>img/images/h_pic2.jpg" src="<?php echo($imgUrl);?>img/images/loading.gif" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>	
				<div class="clear"></div>	
			</ul>
			<ul class="hover_pack left">
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
					    <img data-echo="<?php echo($imgUrl);?>img/images/h_pic3.jpg" src="<?php echo($imgUrl);?>img/images/loading.gif" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>				
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
						<img src="<?php echo($imgUrl);?>img/images/loading.gif" data-echo="<?php echo($imgUrl);?>img/images/h_pic4.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>	
				<li>
					<a href="details.html" class="b_btn">
						<span > <h4>photo's</h4><p>Lorem Ipsumly</p></span> 
					</a>
				</li>	
				<div class="clear"></div>																																</ul>
			 <ul class="hover_pack left right">
				<li>
					<a href="details.html" class="b_btn">
						<span > <h4>photo's</h4><p>Lorem Ipsumly</p></span> 
					</a>
				</li>		
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
						<img src="<?php echo($imgUrl);?>img/images/loading.gif" data-echo="<?php echo($imgUrl);?>img/images/h_pic5.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>				
				<li>
					<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
						<img src="<?php echo($imgUrl);?>img/images/loading.gif" data-echo="<?php echo($imgUrl);?>img/images/h_pic6.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "></h2>
							<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
						</div>
					</a>
				</li>
				
				<div class="clear"></div>
			</ul>
			
			<div class="copyrights">Collect from <a href="http://www.777moban.com/"  title="网站模板">网站模板</a></div>
				<ul class="hover_pack left">
					<li>
						<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo($imgUrl);?>img/images/loading.gif" data-echo="<?php echo($imgUrl);?>img/images/h_pic2.jpg" />
							<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 "></h2>
								
								<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
							</div>
						</a>
					<li>	
					<li>
						<a href="details.html" class="b_btn"><span > <h4>creative</h4><p>Lorem Ipsumly</p></span> </a>
					</li>	
					<li>
						<a href="details.html" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo($imgUrl);?>img/images/loading.gif" data-echo="<?php echo($imgUrl);?>img/images/h_pic3.jpg" />
							<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 "></h2>
								<p class="b-animate b-from-right    b-delay03 ">Lorem ipsum dolor sit amet<br><span class="m_4">Photography</span></p>
							</div>
						</a>
					</li>	
					<div class="clear"></div>
				</ul>
				<div class="clear"></div>	
			</div>
			<!-- end content -->
		</div>
	</div>
	
<?php echo $this->render('/layouts/footer', ['imgUrl' => $imgUrl]);?>	
