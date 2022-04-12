<div class="container"></div>
<div class="container">
    <?php
		include_once("Connection.php");
        if (isset($_POST["txtSearch"])) {
            $data = $_POST['txtSearch'];
            if($data==""){
                echo "<script>alert('Please Enter Value!')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
            }
            else {
	  			$result = pg_query($conn, "SELECT * FROM public.product where product_id like '%".$data."%' or product_name like '%".$data."%'");
    		    if(pg_num_rows($result)==0) {
                    echo "<script>alert('No find Value. Please Enter Again!')</script>";
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                }
                else {
                    if (!$result) { //add this check.
                        die('Invalid query: ' . pg_error($conn));
                    }
                    else {			                   
                    //Display product
                        while($row = pg_fetch_assoc($result NULL, PGSQL_ASSOC)){
                            ?>
                            <div class="col-4">
                                <div class="card">
                                <img src="./product-imgs/<?php echo $row ['pro_image'] ?>" class="card-img-top" alt="..." width="200" height="200" >
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo  $row['product_name']?></h5>
                                        <p class="card-text">Price: $<?php echo  $row['price']?></p>
                                        <p class="card-text"><?php echo  $row['smalldesc']?></p>
                                        <a href="?page=index" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                    }
                }
            }
        }
    ?>
</div>
