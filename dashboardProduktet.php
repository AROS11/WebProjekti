<?php include 'components/header.php';
include_once 'logic/ProductMapper.php';
 
$mapper = new ProductMapper();
$products = $mapper->getAllProducts();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) {
?> 
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
