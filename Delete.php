
<?php include_once('header.php')?>
<?php include_once('Update/conn.php');?>
	<?php 
		$id = $_GET['id'];
		$sqlDel = "DELETE FROM `update` WHERE id = '$id'";
		$fire   = mysqli_query($conn,$sqlDel);
		if($fire){
			header("Location: index.php");
		}
		else{
			echo "Not connected";
		}
		/*----------------------*/
		
	?>
<?php include_once('footer.php');?>
