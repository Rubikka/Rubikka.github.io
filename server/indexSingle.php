<?php include_once("header_admin.php"); ?>

    <main>
        <?php include_once("header_admin.php");?>
  <?php require_once("connect.php");?>
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
          <img src="<?= $product['product_image']?>" width="300px" height="auto">
        </div>
        <div>
          <h3><?= $product['product_name']?></h3>
          <h3><?= $product['product_price']?></h3>
          <p><?= $product['product_description']?></p>
        </div>
      </div>
      <?php endforeach;?>
    </main>
  <?php else: ?>
    <h1>Something Went Wrong</h1>
  <?php endif; ?>
  <?php include_once("footer_admin.php");?>
      <div class="verev">
        <img src="img/spitak.jpg" />
      </div>
      <div class="container1">
        <div class="nkar">
          <img src="https://www.aravot.am/wp-content/uploads/2019/11/tuf-580x380.jpeg" />
        </div>
        <div class="table">
          <table>
            <tr class="tr">
              <td>Քար</td>
              <td>Տեսակ</td>
              <td>ԳԻՆ</td>
            </tr>
            <tr>
              <td>Տուֆ</td>
              <td>Վարդագույն</td>
              <td>100$</td>
            </tr>
            <tr>
              <td>ՏՈՒՖ</td>
              <td>Սպիտակ</td>
              <td>60$</td>
            </tr>
            <tr>
              <td>Տուֆ</td>
              <td>Հարթ Վարդագույն</td>
              <td>150$</td>
            </tr>
            <tr>
              <td>ՏՈՒՖ</td>
              <td>Հարթ Սպիտակ</td>
              <td>120$</td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <?php include_once("footer_admin.php"); ?>
   
