<?php
	function getGalleryList($from, $to, $folder, $gallery = 'default')
	{
		$list = '';
		for ($i=$from; $i<=$to; $i++)
		{
			$file = str_pad($i, 3, '0', STR_PAD_LEFT).'.jpg';
			$list .= '<li style="background-image:url('.$folder.'/'.$file.');"><a href="'.$folder.'/'.$file.'" target="_blank" data-gallery="'.$gallery.'"></a></li>';
		}
		
		return $list;
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Suxess Clothing</title>
        <meta name="description" content="Suxess Clothing">
        <meta name="viewport" content="width=device-width">

		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
    	<section id="home">
    		<table class="wrapper">
      			<tr>
         			<td><img src="images/home-header.png" class="img-responsive"></td>
      			</tr>
   			</table>    		
    	</section>
    	<section id="about">
    		<div class="contentMiddle">    		
	    		<h2>ABOUT</h2>
	    		<p>Suxess is a brand that focuses on promoting personal success,<p>
	    		<p>doing what you like, how you want to, as long as you work for it.</p>
	    		<p>It can be skating, surfing, making music, fashion, anything that you want.</p>
	    		<p>Our mantra to spread this movement is “Stay Suxessful” and “Think+”</p>
	    		<img src="images/about-footer.png" class="img-responsive">
    		</div>
    	</section>
    	<section id="shop">
    		<div class="contentMiddle">
    			<a href="http://suxessclothing.com/shop/" target="_blank">
    				<img src="images/shopButton.png" alt="Shop" class="shopButton img-responsive" />
    			</a>
    		</div>
    	</section>
    	<section id="gallery">
    		<div class="contentMiddle">    		
	    		<h2>GALLERY</h2>
	    		<div class="categories">
		    		<ul class="clearfix">
		    			<li><a href="#" data-images-tab="#fivepanels">FIVEPANELS</a></li>
		    			<li><a href="#" data-images-tab="#snapbacks">SNAPBACKS</a></li>
		    			<li><a href="#" data-images-tab="#sx-lifestyle">SX LIFESTYLE</a></li>
		    		</ul>
		    	</div>
	    		<div class="images">
	    			<ul id="fivepanels" class="clearfix">
	    				<?php echo getGalleryList(1, 11, 'images/gallery/fivepanel', '#blueimp-gallery-fivepanels')?>
	    			</ul>
	    			<ul id="snapbacks" class="clearfix" style="display:none;">
	    				<?php echo getGalleryList(1, 5, 'images/gallery/snapback', '#blueimp-gallery-snapbacks')?>
	    			</ul>
	    			<ul id="sx-lifestyle" class="clearfix" style="display:none;">
	    				<?php echo getGalleryList(1, 23, 'images/gallery/sx_lifestyle', '#blueimp-gallery-sx-lifestyle')?>
	    			</ul>
	    		</div>
    		</div>
    	</section>
    	<section id="lifestyle">
    	</section>
    	<section id="contact">
    		<div class="contentMiddle">  
	    		<h2>CONTACT</h2>
	    		<p class="introText">If you have any questions regarding about the brand, how to shop, cost, or any other stuff, feel free to communicate with us trough here. We will try to reach you as soon as possible. For business inquiry you can call 787-245-6664 or email us at <a href="mailto:sales@suxessclothing.com">sales@suxessclothing.com</a>.</p>
	    		<form action="#" method="post" class="container">
	    			<fieldset class="clarfix">
		    			<div class="pull-left">
		    				<input type="text" name="contact[name]" id="contact_name" placeholder="Name" 
		    					data-rule-required="true"
		    					data-msg-required="Please enter your name" 
		    				/>
		    				<input type="text" name="contact[phone]" id="contact_phone" placeholder="Phone" 
		    					data-rule-required="true"
		    					data-msg-required="Please enter your phone"
		    				/>
		    				<input type="text" name="contact[email]" id="contact_email" placeholder="Email"
		    					data-rule-required="true" 
		    					data-rule-email="true" 
		    					data-msg-required="Please enter your email address" 
		    					data-msg-email="Please enter a valid email address"
		    				/>
		    			</div>
		    			<div class="pull-right">
		    				<textarea name="contact[message]" id="contact_message" placeholder="Message"
		    					data-rule-required="true"
		    					data-msg-required="Please enter your message"
		    				></textarea>
		    			</div>
	    			</fieldset>
	    			<div class="actions clearfix">
	    				<button type="submit">Send</button>
	    				<button type="reset">Clear Form</button>
	    				<p class="success">Thank you to contact us.</p>
	    				<p class="error">Please fill all fields correctly.</p>
	    			</div>
	    		</form>
	    	</div>
    	</section>
    	
    	<div id="menuBar">
	    	<ul class="menu">
	    		<li><a href="#" data-section="#about">about</a></li>
	    		<li><a href="#" data-section="#shop">shop</a></li>
	    		<li><a href="#" data-section="#gallery">gallery</a></li>
	    		<li><a href="#" data-section="#contact">contact</a></li>
	    		<li><a href="#" data-section="#lifestyle">The suxess lifestyle (channel)</a></li>
	    	</ul>
	    	<ul class="sharingMenu">
	    		<li><a href="http://www.facebook.com/suxessclothing" target="_blank"><img src="images/fb-icon.png" /></a></li>
	    		<li><a href="http://instagram.com/suxessclothing" target="_blank"><img src="images/ig-icon.png" /></a></li>
	    		<li><a href="https://twitter.com/suxessclothing" target="_blank"><img src="images/tw-icon.png" /></a></li>
	    	</ul>
    	</div>
    	
    	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
		    <!-- The container for the modal slides -->
		    <div class="slides"></div>
		    <!-- Controls for the borderless lightbox -->
		    <h3 class="title"></h3>
		    <a class="prev">‹</a>
		    <a class="next">›</a>
		    <a class="close">×</a>
		    <a class="play-pause"></a>
		    <ol class="indicator"></ol>
		    <!-- The modal dialog, which will be used to wrap the lightbox content -->
		    <div class="modal fade">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" aria-hidden="true">&times;</button>
		                    <h4 class="modal-title"></h4>
		                </div>
		                <div class="modal-body next"></div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default pull-left prev">
		                        <i class="glyphicon glyphicon-chevron-left"></i>
		                        Previous
		                    </button>
		                    <button type="button" class="btn btn-primary next">
		                        Next
		                        <i class="glyphicon glyphicon-chevron-right"></i>
		                    </button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/vendor/bootstrap-image-gallery.min.js"></script>
        <script src="js/vendor/jquery.scrollTo.min.js"></script>
        <script src="js/vendor/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
