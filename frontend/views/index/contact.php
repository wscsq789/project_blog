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
		<div class="contact"><!-- start contact -->			
			<div class="contact_left">
				<div class="contact_info">
		    	 	<h3>Find Us Here</h3>
		    	 		<div class="map">
				   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed">
							</iframe>
							<br>
							<small>
								<a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a>
							</small>
						</div>
					</div>
					<div class="company_address">
						<h3>Company Information :</h3>
						<p>500 Lorem Ipsum Dolor Sit,</p>
						<p>22-56-2-9 Sit Amet, Lorem,</p>
						<p>USA</p>
						<p>Phone:(00) 222 666 444</p>
						<p>Fax: (000) 000 00 00 0</p>
						<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
						<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
					</div>
				</div>				
				<div class="contact_right">
					<div class="contact-form">
						<h3>Contact Us</h3>
							<form method="post" action="contact-post.html">
								<div>
									<span><label>name</label></span>
									<span><input name="userName" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>e-mail</label></span>
									<span><input name="userEmail" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>mobile</label></span>
									<span><input name="userPhone" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>subject</label></span>
									<span><textarea name="userMsg"> </textarea></span>
								</div>
								<div>
									<span><input type="submit" value="submit us"></span>
								</div>
							</form>
						</div>
					</div>		
					<div class="clear"></div>		
				</div><!-- end contact -->
			</div>
		</div>
<!-- enendd main -->
	
<?php echo $this->render('/layouts/footer', ['imgUrl' => $imgUrl]);?>	
