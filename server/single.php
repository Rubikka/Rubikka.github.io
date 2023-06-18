	<?php include_once("header_admin.php");?>
	<?php require_once("connect.php"); ?>
	<?php if(isset($_GET['id'])): ?>
		<?php 
			$query = "SELECT * FROM `tesak` WHERE `id` = {$_GET['id']} " ;
			$queryRun = mysqli_query($connection, $query);
			$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
		?>
		<main>
			<?php foreach($productsArray as $product): ?>
			<div>
				<div>
					<img src="<?= $product['Image']?>" width="300px" height="auto" />
				</div>
				<div>
					<h3><?= $product['Name']?></h3>
					<h3><?= $product['Size']?></h3>
					<p><?= $product['Value']?></p>
					<p class="phone">Հեռախոսահամար 098107032</p>
				</div>
			</div>
			<?php endforeach;?>
			<style>
				.phone{
					
				}
			</style>
		</main>
	<?php else: ?>
		<h1>Something Went Wrong</h1>
	<?php endif; ?>
	<?php include_once("footer_admin.php");?>