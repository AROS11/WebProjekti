<?php include 'components/header.php';
include_once 'logic/ProductMapper.php';

$mapper = new ProductMapper();
$products = $mapper->getAllProducts();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) {
?> 

<style>
.produktet{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 550px;
}
.tablla{
  width: 50%;
  border:1px rgba(128, 128, 128, 0.5) solid;
  background-color: rgba(128, 128, 128, 0.3);
}
.tablla th {
  text-align: center;
  height: 30px;
  width: 20%;
  border: 2px rgba(128, 128, 128, 0.5) solid;
}
.tablla td {
  text-align: center;
  height: 30px;
  width: 20%;
  border: 2px rgba(128, 128, 128, 0.5) solid;
 text-decoration: none;
}
.tablla td a{
 text-decoration: none;
 font-family: Arial, Helvetica, sans-serif;
 color: red;
 font-weight:bold;
}

</style>
    <div class="produktet">
            <h3>Produktet tona</h3>
            <table class="tablla">
                <tr>
                    <th>ID</th>
                    <th>Emri i Produktit</th>
                    <th>Qmimi Produktit</th>
                    <th>Modifiko</th>
                </tr>
                <?php foreach($products as $produktet){ ?>
                <tr>
                    <td><?php echo $produktet['product_id']?></td>
                    <td><?php echo $produktet['emriprod']?></td>
                    <td><?php echo $produktet['cmimiprod']?></td>
                   
                    <td><a href="<?php echo "logic/deleteProduct.php?action=delete-product&product-id=" . $produktet['product_id'];?>">Delete</a></td>
                    
                </tr>
                <?php } ?>
            </table>
    </div>
                
 <?php } else { 
     header("Location: home.php");
 }
 
 include 'components/footer.php' ?>   