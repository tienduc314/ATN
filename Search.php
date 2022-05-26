<div class="container"></div>
<div class="container">
<?php
	include_once("Connection.php");
    if (isset($_POST["txtSearch"])) {
      $data = $_POST['txtSearch'];
      if($data=="")
      {
        echo "<script>alert('Please Enter Data!')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
      }
      else 
      {
		  	$result = pg_query($conn, "SELECT * FROM product where product_id like '%".$data."%' or product_name like '%".$data."%'");
    		if(pg_num_rows($result)==0)
        {
          echo  "<script>alert('No find data. Please Enter Again!')</script>";
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        }
        else {
          if (!$result) { //add this check.
            die('Invalid query: ' . pg_error($conn));
          }
          else {
			                   
  while($row = pg_fetch_assoc($result)){
?>
	<div class="col-4">
    <div class="card">
      <img src="./product-imgs/<?php echo $row ['pro_image'] ?>" class="card-img-top" alt="..." width="350" height="350" >
      <div class="card-body">
        <h5 class="card-title">Name: <?php echo  $row['product_name']?></h5>
        <p class="card-text">Price:$ <?php echo  $row['price']?></p>
        <p class="card-text">Description: <?php echo  $row['smalldesc']?></p>
        <a href="index.php" class="btn btn-primary">Add to cart</a>
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
