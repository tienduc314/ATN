<div class="container"></div>
<div class="container">
    <?php
		include_once("connection.php");
        if (isset($_POST["txtSearch"])) {
            $data = $_POST['txtSearch'];
            if($data==""){
                echo "<script>alert('Please Enter Value!')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
            }
            else {
	  			$result = mysqli_query($conn, "SELECT * FROM product where Product_ID like '%".$data."%' or Product_Name like '%".$data."%'");
    		    if(mysqli_num_rows($result)==0) {
                    echo  "<script>alert('No find Value. Please Enter Again!')</script>";
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                }
                else {
                    if (!$result) { //add this check.
                        die('Invalid query: ' . mysqli_error($conn));
                    }
                    else {			                   
                    //<!--Display product-->
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-4">
                                <div class="card">
                                <img src="./product-imgs/<?php echo $row ['Pro_image'] ?>" class="card-img-top" alt="..." width="200" height="200" >
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo  $row['Product_Name']?></h5>
                                        <p class="card-text">Price: $<?php echo  $row['Price']?></p>
                                        <p class="card-text"><?php echo  $row['DetailDesc']?></p>
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
