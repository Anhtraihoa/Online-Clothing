<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../function/function.php"); ?>
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/loged_nav.php"); ?>

<?php 

    if(empty($_SESSION['LoginSession'])){
        header("location:../views/logout.php");
    }
    admin_access();

?>

<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<?php profile_img();?>
			<p class="profile-name"><?php user_id_loged();?></p>
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="members.php" class="menu-item"><i class="fas fa-user-alt"></i>Members 
			<a href="admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin   
			<a href="products.php" class="menu-item"><i class="fas fa-gifts"></i>Prodcuts  
			<a href="my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">
		<h1>Update Email, <?php ?> </h1>
		<hr>

		<?php 
			if(isset($_POST['update_email'])){
				$result = update_email_data($_POST['new_email'], $_POST['new_cemail']);
				echo $result;
			}		
		?>


		<?php update_email(); ?>
	</main>
</div>

<script src="../../js/script.js"></script>
