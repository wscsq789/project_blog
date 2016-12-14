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
		echo $this->render('/layouts/socIcons');
		
		//左部导航	 
	 	echo $this->render('/layouts/leftNav', ['classHeader' => $classHeader]);
	 ?>
	</div>
</div>
<!-- end header -->



<!-- start main -->
<div class="main">
	<div class="wrap">
		<div class="blog"><!-- start blog -->
			<div class="blog_left">	<!-- start blog_left -->
				<?php
				 foreach($relax as $val)
				 {
				?>
				<div class="blog_main">	
					<div class="b_right">
						<a href="details.html?ds=<?php echo($val['ds']);?>"><h4><?php echo($val['title']);?></h4></a> 
						<div class="blog_list">
					   		<ul>
								<li><i class="date"> </i> <span><?php echo($val['origpubtime']);?></span></li>
								<li><i class="comment"> </i><a href="#"> <span>Comments</span></a></li>
								<li><i class="news"></i><span>Public, News</span></li>
								<li><i class="views"></i><a href="#"> <span>124 views</span></a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="blog_art">
							<ul>
								<li><a href="#"> <i> </i><span>18</span></a></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
					<p>摘要: <?php echo($val['ps']);?></p>
					<p><?php echo($val['content']);?>...</p>
					<a class="btn" href="details.html?id=<?php echo($val['id']);?>">阅读全文</a>
				</div>
				 <?php
				 }
				 ?>
			
			</div><!-- end blog_left -->
			<div class="blog_sidebar"><!-- start blog_sidebar -->
				<div class="sidebar">
				<!-- start social_network_likes -->
					<div class="social_network_likes">
						<ul>
							<li>
								<a href="#" class="tweets">
									<div class="followers">
										<p><span>2k</span>Followers</p>
									</div>
									<div class="social_network"> <i class="twitter-icon"> </i> </div>
								</a>
							</li>
							<li>
								<a href="#" class="facebook-followers">
									<div class="followers">
										<p><span>5k</span>Followers</p>
									</div>
									<div class="social_network"><i class="facebook-icon"> </i> </div>
								</a>
							</li>
							<li>
								<a href="#" class="email">
									<div class="followers"><p><span>7.5k</span>members</p></div>
									<div class="social_network"><i class="email-icon"> </i></div> </a>
							</li>
							<li>
								<a href="#" class="dribble">
									<div class="followers"><p><span>10k</span>Followers</p></div>
									<div class="social_network"><i class="dribble-icon"> </i></div>
								</a>
							</li>
							<div class="clear"> </div>
						</ul>
					</div>
					<!-- start flicker images -->
					<h4>ads 125x125</h4>
					<ul class="ads_nav">
						<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
						<div class="clear"></div>
					</ul>
					<!-- start flicker images -->
					<h4>flicker images</h4>
					<ul class="flicker_nav">
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic1.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic2.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic3.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic4.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic3.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic4.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic5.jpg" alt=""> </a></li>
						<li><a href="#"><img src="<?php echo($imgUrl);?>/img/images/f_pic6.jpg" alt=""> </a></li>
						<div class="clear"></div>
					</ul>
					<!-- start tag_nav -->
					<h4>tags</h4>
					<ul class="tag_nav">
						<li><a href="#">art</a></li>
						<li><a href="#">awesome</a></li>
						<li><a href="#">classic</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">wordpress</a></li>
						<li><a href="#">videos</a></li>
						<li><a href="#">standard</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">music</a></li>
						<li><a href="#">data</a></li>
						<div class="clear"></div>
					</ul>
					<!-- start news_letter -->
					<h4>newsletter</h4>
					<div class="news_letter">
						<form>
							<input type="text" placeholder="Your email address" />
							<input type="submit" value="subscibe" />
						</form>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div><!-- end blog -->
	</div>
</div>
<!-- end main -->

<?php echo $this->render('/layouts/footer', ['imgUrl' => $imgUrl]);?>	
