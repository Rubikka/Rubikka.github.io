 
   <?php include_once("header_admin.php") ?>
<?php require_once("connect.php"); ?>
 
      </table>
    </div>
  </section>

      </table>
    </div >
  </section>
  <style type="text/css">


.products_container{
  display:flex;
  flex-wrap: wrap;
}
.tesak{
  box-shadow: 0 0 10px rgba(0,0,0,.13);
  margin: 10px;
  border-radius:10px;
  width: 150px;
}
button{
  background-color:#19DEFF;
  border-radius: 10px;
  border: 2px #1690A7 ;
 margin-left:18px;
 font-weight: bold;
}
img{
  border-radius:10px;

}
</style>
      <?php   
  require_once('connect.php'); 
  $query = "SELECT * FROM `tesak` " ;
  @$queryRun = mysqli_query($connection, $query);
  @$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
?>
<div class="products_container">
  <?php foreach($productsArray as $product): ?>
    <div class="tesak">
      <img src="<?= $product['Image'] ?>" width="150px" height="auto" >
     
      <p><?= $product['Name'] ?></p>
      <p><?= $product['Size'] ?></p>
      <p><?= $product['Value'] ?></p>
      <a href="single.php?id=<?= $product['ID'] ?>">
        <button>Կարդալ ավելին</button>
      </a>
    </div>
  <?php endforeach; ?>
</div>
        
           
    </main>
   <?php include_once("footer_admin.php") ;?>