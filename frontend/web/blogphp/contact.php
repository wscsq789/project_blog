<?php
 $classHeader = '1';
 

 include('./header.php');
 
?>
<!-- start header -->
<div class="header1">
<div class="wrap">
	<?php include('./soc_icons.php');?>
<!-- start header_left1 -->
	<?php include('./leftNav.php');?>
</div>
</div>
<!-- start main -->
<div class="main">
<div class="wrap">
		<div class="contact"><!-- start contact -->			
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
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
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>about us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .....</p>
				<h5>Address</h5>
				<p class="top">500 Lorem Ipsum Dolor Sit,</p>
				<p>22-56-2-9 Sit Amet,</p>
				<p>USA</p>
				<p>Phone:(00) 222 666 444</p>
				<p>Fax: (000) 000 00 00 0</p>
			</div>
			<div class="span1_of_4">
				<h4>latest posts</h4>
				<a href="#"><span>Fusce scelerisque mastae</span></a>	
				<p>25 april 2013</p>
				<a href="#"><span>Pellentesque bibendum ante</span></a>
				<p>15 march 2013</p>
				<a href="#"><span>Maecenas quis ipsum sed </span></a>
				<p>25 april 2013</p>
			</div>
			<div class="span1_of_4">
				<h4>comments</h4>
				<p class="bg"><a href="#">It is a long established fact that a reader will looking layout.</a></p>
				<p class="bg top"><a href="#">There are many variations of passages of Ipsum words.</a> </p>
				<p class="bg top"><a href="#">It is a long established fact that a reader will looking layout.</a></p>
			</div>
			<div class="span1_of_4">
				<h4>photostream</h4>
				<ul class="f_nav">
					<li><a href="#"><img src="images/f_pic1.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic2.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic3.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic4.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic5.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic6.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic7.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic8.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic9.jpg" alt=""> </a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<?php include('./copyright.php');?>
	</div>
</div>
</div>
<?php include('./footer.php');?>