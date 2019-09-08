if(isset($_POST['sub']))
	{
		$id = $_GET['id'];
		$Name  = $_POST['Name'];
		$Email = $_POST['Email'];
		$Phone = $_POST['Phone'];
		$stmt  = "UPDATE `update` SET `Name`='$Name',`Email`='$Email',`Phone`='$Phone' WHERE id='$id'";
		$fire  = mysqli_query($conn,$stmt);
		if($fire){
			session_start();
			$_SESSION['update'] = true;
			header("Location: ../index.php");
		}
	}
