<?php
include_once("connection.php");
?>
    <!-- Slider -->
    <div class="slider-area">	
		<div class="block-slider block-slider4">
			<ul class="" id="bxslider-home4">
				<li>
					<img src="images/slidetoy.png" alt="Slide">
				</li>
			</ul>
		</div>
    </div>
    <!--Gioi thieu cac chuc nang-->
    
    <!-- <div class="promo-area">
        <div class="zigzag-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <img src="images/blog1.jpg" >
                        <div><a href="index.php"><p>WHY LUCKY LUKE?</p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/blog2.jpg" >
                        <div><a href="index.php"><p> URBAS CORLURAY PACK</p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/blog3.jpg" >
                        <div><a href="index.php"><p> VINTAS SAIGON 1980s</p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/blog4.jpg" >
                        <div><a href="index.php"><p> SNEAKER FEST VIETNAM</p></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Our Product</h2>
                        <div class="product-carousel">
                        
                           <?php
						   	include_once("Connection.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product");
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="index.php" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="index.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <h2><a href="index.php"><?php echo  $row['Product_Name']?></a></h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>               
                <?php
				}
				?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/lego.png" alt="" height="200px" width="200px">
                            <img src="img/babie.png" alt="" height="200px" width="200px">
                            <img src="img/lego.png" alt="" height="200px" width="200px">  
                            <img src="img/babie.png" alt="" height="200px" width="200px">                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    
    
   
  