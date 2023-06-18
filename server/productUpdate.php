	<?php include_once("header_admin.php"); ?>
		<?php require_once("connect.php"); ?>
		<?php if(isset($_GET['id'])): ?>
			<h1>Update Product</h1>
			<div>
				<?php
					$query = "SELECT * FROM `tesak` WHERE `id` = {$_GET['id']}" ;
					$queryRun = mysqli_query($connection, $query);
					$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
				?>
				<?php foreach ($productsArray as $value): ?>

					<div class="new_product_panel">
						<form action="update_product.php" method="post">


							<input type="number" name="ID" value ="<?= $_GET['id'] ?>"  hidden>

							<input type="text" name="Name" placeholder="Name" required value ="<?= $value['Name'] ?> "><br>
							<br>
							<input type="text" name="Size" placeholder="Size" required value ="<?= $value['Size'] ?> "><br><br>

							<input type="text" name="Value" placeholder="Value" required value ="<?= $value['Value'] ?>"><br><br>

							<input type="text" name="Image" placeholder="Product Image" required value="<?= $value['Image'] ?>"><br><br>

							<input type="submit" value="Save">
						</form>
					</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				<div>
					<h1>Something Went Wrong</h1>
				</div>
			<?php endif; ?>
<?php include_once("footer_admin.php"); ?>
