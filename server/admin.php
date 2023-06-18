<?php
session_start();
if(isset($_SESSION['id'])&&isset($_SESSION['user_name'])){}
?>
<?php include_once("header_admin.php") ?>
<?php require_once("connect.php"); ?>
	<h1>Admin Panel</h1>
	<section>
		<div class="new_product_panel">
			<form action="add_product.php" method="post">
				<input type="Number" name="ID" placeholder="ID" required><br>
<br>
				<input type="text" name="Name" placeholder="Name" required><br><br>

				<input type="text" name="Size" placeholder="Size" required><br><br>

				<input type="text" name="Value" placeholder="Value" required><br><br>

				<input type="text" name="Image" placeholder="Image" required><br><br>

				<input type="submit" value="Save">
			</form>
		</div>
		<div class="show_exist_products">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Size</th>
						<th>Value</th>
						<th>Image</th>
						<th>Update</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT * FROM `tesak`";
						$queryRun = mysqli_query($connection, $query);
						$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
						foreach ($productsArray as $value) {
							echo "<tr>";
							echo "<td>" . $value['ID'] . "</td><td>" . $value['Name'] . "</td><td>" . $value['Size'] . "</td><td>" . $value['Value'] . "</td><td><img src='" . $value['Image'] . "' width='150px' height='150px' ></td>";
									echo "<td> <a href='productUpdate.php?id=" . $value['ID'] . "' >Update / </a><a href='delete.php?id=". $value['ID'] ."'>Delete</a></td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</section>
<?php include_once("footer_admin.php") ?>

