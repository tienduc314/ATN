<!-- Bootstrap --> 
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
		include_once("Connection.php");
		if(isset($_GET["id"]))
		{
			$id = $_GET["id"];

            $sqlstring = "SELECT * FROM shop WHERE shop_id='$id'";
            $result = pg_query($conn, $sqlstring);
            $row = pg_fetch_array($result, NULL, PGSQL_ASSOC);

			$id = $row['shop_id'];
			$name = $row['shop_name'];
			$address = $row['address'];
            $phone = $row['phone'];
            $email = $row['email'];
	?>
	
<div class="container">
	<h2>Updating Shop</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Shop ID" readonly value='<?php echo $id; ?>'>
							</div>
					</div>	

				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Shop Name" value='<?php echo $name; ?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtAddress" id="txtAddress" class="form-control" placeholder="Address" value='<?php echo $address; ?>'>
							</div>
					</div>

                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Phone(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtPhone" id="txtPhone" class="form-control" placeholder="Phone" value='<?php echo $phone; ?>'>
							</div>
					</div>

                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Email(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" value='<?php echo $email; ?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=shop_management'" />
                              	
						</div>
					</div>
				</form>
	</div>

	<?php
		}
	else
	{
		echo '<meta http-equiv="Refresh" content="0;URL=Shop_Management.php"/>';
	}
	?>


    <?php
        include_once("Connection.php");
		if(isset($_POST["btnUpdate"]))
		{
			$id = $_POST["txtID"];
            $name = $_POST ["txtName"];
            $address = $_POST ["txtAddress"];
            $phone = $_POST["txtPhone"];
            $email = $_POST ["txtEmail"];
			$err = "";
			if($name=="")
			{
				$err .= "<li>Enter Shop Name, please</li>";
			}
			if($err!="")
			{
				echo "<ul>$err</ul>";
			}
			else
			{
				$sq="SELECT * FROM shop where shop_id != '$id' and shop_name='$name'";
				$result = pg_query($conn, $sq);
				if(pg_num_rows($result)==0)
				{
					pg_query($conn,"UPDATE shop SET shop_name = '$name', address = '$address', phone = '$phone', email = '$email' where shop_id = '$id'");
					echo '<meta http-equiv="Refresh" content="0;URL=?page=shop_management"/>';
				}
				else
				{
					echo "<li>Duplishope shop name</li>";
				}
			}
		}
	?>



	
      