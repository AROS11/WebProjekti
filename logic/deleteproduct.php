<?php 
include "ProductMapper.php";
if (isset($_GET['action']) && $_GET['action']=="delete-product") {
    if(isset($_GET['product-id']) && (is_numeric($_GET['product-id']))){
        $pid = $_GET['product-id'];
        $mapper = new ProductMapper();
        $mapper->deleteProduct($pid);
        header("Location:../dashboardproduct.php");
    }
    
    
}