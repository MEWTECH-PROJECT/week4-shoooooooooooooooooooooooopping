


<!--		<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<-- ============================================================= SHOPPING CART DROPDOWN ============================================================= 
<?php
if(!empty($_SESSION['cart'])){
	?>
	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">Rs.</span>
						<span class="value"><?php echo $_SESSION['tp']; ?></span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count"><?php echo $_SESSION['qnty'];?></span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
		
		 <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>--!>--!>


   
<!-///////////////////...................REMOVED TOP FOOTER.................//////////////////////////////////////!>

    	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title>Mewtech Solutions Pvt Ltd. :: Home</title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<meta name="msapplication-TileColor" content="#232323">
	<meta name="theme-color" content="#232323">
	
	
	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <!-- /// FontAwesome Icons 4.3.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="assets/vendors/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">
	
	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/elements.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/components.css">
	<link rel="stylesheet" href="assets/css/wordpress.css">
    
	<!-- /// Boxed layout ////////  -->
	<!-- <link rel="stylesheet" href="assets/css/boxed.css"> -->
 
 	<!-- /// Style Switcher CSS ////////  -->
 	<link rel="stylesheet" href="assets/css/wide.css" id="quantum-layout">
	<link rel="stylesheet" href="assets/vendors/switcher/switcher.css">
    <script type="text/javascript" src="assets/js/jssor.js"></script>
    <script type="text/javascript" src="assets/js/jssor.slider.js"></script>
    
		
		<div id="footer-top">
            
		<!-- /// FOOTER-TOP     ///////////////////////////////////////////////////////////////////////////////////////////////// -->	
		
			<div class="container" style="color:#FFFFFF;">
                <div class="row">
                    <div class="span4" id="footer-top-widget-area-1">
                    	
                        <div class="widget widget_text">
                            
                            <h4 class="widget-title white">Products</h4>
                        
                            <div class="textwidget">
                                
                                <p class="white">
                                <a href="aidc.php">AIDC</a><br>
								<a href="#">RFID</a><br>
								<a href="access.php">Access Control & Time-Attendance Device</a><br>
								<a href="currency.php">Currency Counter & Fake Note Detector</a><br>
								<a href="barcode.php">Barcode Printers</a><br>
								<a href="barcode.php">Barcode Scanners</a><br>
								<a href="barcode.php">Barcode Labels</a><br>
								<a href="eas.php">Electronic Article Surveillance (EAS)</a><br>
								<a href="security.php">SECURITY DISPLAY Anti-theft Device</a><br>
                                <a href="pos-system.php">Portable POS Printer</a><br>
								<a href="pos-system.php">POS Terminal</a><br>
								<a href="#">Smart cards, Proximity cards & ID card Printer</a>

                                
                            </div><!-- end .textwidget -->
                            
                        </div><!-- end .widget_text -->
                        
                    </div><!-- end .span4 -->
                    <div class="span4" id="footer-top-widget-area-2">
                        
                        <div class="widget ewf_widget_contact_info">
                    
                            <h4 class="widget-title white">Our Office</h4>
                          
                           <h5 class="white">Mewtech Solutions Pvt Ltd</h5>
                          
                                <p class="white">
                                	
                                        28/347A, Sastha Nagar,<br> Behind Relief Medicals<br>
                                        Opp. Bismi Hypermart,<br> Patturaikkal, Thrissur-22<br>
								
                                    0487 2977000, 8943377000,<br>
                                    8943337000, 8943333000,<br>
                                    8943355000<br>
                                
                                    <a href="mailto:#">info@mewtechs.com</a>
                               <br>
                                    <a href="www.mewtechs.com">www.mewtechs.com</a>
                                </p>
                         
                         
                        </div><!-- end .ewf_widget_contact_info -->
                        
                    </div><!-- end .span4 -->
                    <div class="span4" id="footer-top-widget-area-3">
                     <h4 class="widget-title white">Follow us on facebook</h4>
                     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/pages/Mewtech-Solutions-Pvt-Ltd/736390689759516" data-width="auto" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"></div></div>                  	
<!--<div class="fb-page" data-href="https://www.facebook.com/pages/Mewtech-Solutions-Pvt-Ltd/736390689759516" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div> -->
                        
                    </div><!-- end .span4 -->
                </div><!-- end .row -->
           </div><!-- end .container -->
		
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
		
		</div><!-- end #footer-top -->
		
		
		<div id="footer">-->