<?php
require __DIR__.'/Connect.php';
require __DIR__.'/../SessionHandler.php';
if(isset($_GET['client_id'])){
	$sql = mysqli_query($connect,"SELECT * FROM `hosting_clients` WHERE `hosting_client_key`='".mysqli_real_escape_string($connect, $_GET['client_id'])."'");
	if(mysqli_num_rows($sql)>0){
		$Data = mysqli_fetch_assoc($sql);
		setcookie('LEFSESS',base64_encode($Data['hosting_client_key']),time()+86400,'/');
			$_SESSION['message'] = '<div class="alert alert-success" role="alert">
									  <button class="close" data-dismiss="alert" type="button" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									  Logged in <b>successfully!</b>
									</div>';
			header('location: ../index.php');
		}
	}
else{
	header('location: ../login.php');
}
?>