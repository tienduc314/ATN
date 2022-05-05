<?php
    if(!isset($_SESSION['admin']) OR $_SESSION['admin']==0)
    {
        echo '<script> alert("You are not administrator");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
    }
    else
    {
?>
<script language="javascript">
    function deleteConfirm(){
        if(confirm("Are you sure to delete?")){
            return true;
        }
        else{
            return false;
        }
    }
</script>    
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

        <form name="frm" method="post" action="">
        <h1>Shop Management</h1>
        <p>
        	<img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" /><a href="?page=add_shop"> Add new</a>
        </p>
        <table id="tableshop" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Shop ID</strong></th>
                    <th><strong>Shop Name</strong></th>
                    <th><strong>Address</strong></th>
                    <th><strong>Phone</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
				include_once("Connection.php");

                if (isset($_GET["function"]) == "del") {
                    if (isset($_GET["id"])) {
                      $id = $_GET["id"];
                      pg_query($conn, "DELETE FROM shop WHERE shop_id='$id'");
                    }
                }

                $No=1;
                $result = pg_query($conn, "SELECT shop_id, shop_name, address, phone, email FROM shop");
                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
            ?>       			
                    <tr>
                    <td><?php echo $No; ?></td>
                    <td><?php echo $row["shop_id"]; ?></td>
                    <td><?php echo $row["shop_name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td align='center' class='cotNutChucNang'><a href="?page=update_shop&&function=del&&id=<?php echo $row["shop_id"];?>"><img src='images/edit.png' border='0' width="20" height="20"/></a></td>
                    <td align='center' class='cotNutChucNang'><a href="?page=shop_management&&function=del&&id=<?php echo $row["shop_id"];?>" onclick="return deleteConfirm()"><img src='images/delete.png' border='0' width="20" height="20"/></a></td>
                    </tr>
                <?php
                    $No++;
                    }
                ?>
			</tbody>
        
        </table>  

 </form>
<?php
    }
?>