<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">


                              <li><a href="index.php">
							  <img src="assets/images/logo-footer.png" alt="Mewtech Solutions Pvt Ltd. - Logo" style="
    max-width: 100%;
    height: 42.56px;
    border: none;
    vertical-align: middle;
	width: 180.3px;"> 
	  				</a></li>



<li>

<div class="search-area">
    <form name="search" method="post" action="search-result.php">
        <div class="control-group">

		
           

            <input class="search-field" placeholder="Search here..." name="product" required="required" style="font-size: 14px" /><button class="search-button" type="submit" name="search"><i class="fa fa-search"></i></button>  

        </div>
    </form>
	</div>

<!-- /.search-area --></li>
                

			<?php if(strlen($_SESSION['login']))
    		{?>
				<div class="dropdown">
				
				<button class="dropbtn"><a href="my-account.php"></button><i class="icon fa fa-user"></i> <?php echo htmlentities($_SESSION['username']);?></a>
				<div class="dropdown-content">
				<a href="my-account.php"> <i class="icon fa fa-user"></i> My profile</a>
				<a href="my-wishlist.php"><i class="icon fa fa-heart"></i> Wishlist</a>
				<a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i> My Cart</a>
				<a href="logout.php"><i class="icon fa fa-sign-out"></i> Logout</a>
			</div>
			</div>
			<?php	} ?>
			<?php if(strlen($_SESSION['login'])==0)
            {   ?>
            <li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login/Signup</a></li>
			
		<?php	}?>					




		

			

			   
				   <!-- ============================================================= LOGO ============================================================= -->
<!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

			   <div class="animate-dropdown top-cart-row">
				   <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
<?php
if(!empty($_SESSION['cart'])){
   ?>
   <div class="dropdown dropdown-cart">
	   <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
		   <div class="items-cart-inner">
			 
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

	   ?>
	   
	   
		   <li>
			   <div class="cart-item product-summary">
				   <div class="row">
					   <div class="col-xs-4">
						   <div class="image">
						   <img src="admin/productimages/2/apple-iphone-6-1.jpeg" width="35" height="50" alt="" <style="" style="
    height: 100%;
"></a>
						   </div>
					   </div>
					   <div class="col-xs-7">
						   
						   <h3 class="name"><a href="product-details.php?pid=<?php echo $row['id'];?>"><?php echo $row['productName']; ?></a></h3>
						   <div class="price">Rs.<?php echo ($row['productPrice']+$row['shippingCharge']); ?>*<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></div>
					   </div>
					   
				   </div>
			   </div><!-- /.cart-item -->
		   
			   <?php }
			}?>
			   <div class="clearfix"></div>
		   <hr>
	   
		   <div class="clearfix cart-total">
			   <div class="pull-right">
				   
					   <span class="text">Total :</span><span class='price'>Rs.<?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span>
					   
			   </div>
		   
			   <div class="clearfix"></div>
			   <a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>				   
		   </div><!-- /.cart-total-->
				   
			   
	   </li>
	   </ul><!-- /.dropdown-menu-->
   </div><!-- /.dropdown-cart -->
<?php } else { ?>
<div class="dropdown dropdown-cart">
	   <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
		   <div class="items-cart-inner">
			   <div class="basket">
				   <i class="glyphicon glyphicon-shopping-cart"></i>
			   </div>
			   <div class="basket-item-count" style="padding: 0px 0px 0px 0px"><span class="count">0</span></div>
		   
		   </div>
	   </a>
	   <ul class="dropdown-menu">
	   
   
	   
	   
		   <li>
			   <div class="cart-item product-summary">
				   <div class="row">
					   <div class="col-xs-12">
						   Your Shopping Cart is Empty.
					   </div>
					   
					   
				   </div>
			   </div><!-- /.cart-item -->
		   
			   
		   <hr>
	   
		   <div class="clearfix cart-total">
			   
			   <div class="clearfix"></div>
				   
			   <a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shooping</a>	
		   </div><!-- /.cart-total-->
				   
			   
	   </li>
	   </ul><!-- /.dropdown-menu-->
   </div>
   <?php }?>






<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
	










		
			 	
				</ul>
			</div><!-- /.cnt-account -->

            
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->

