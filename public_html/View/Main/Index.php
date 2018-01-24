<?php

include "../../../Core/Requirement/Autoloader.php";

$Object = new Core\Security\Check();
$products =new Model\Repository\MainFunction\EIDU();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</head>
<body>
 <div>
     <?php while ($product = $products->Custom()): ?>
         <div>
             <div>
                 <img src="assets/<?php echo $product['product_Image'] ?>" alt="">
                 <h6><?php echo $product['product_Name'] ?></h6>
                 <span class="product_Price"><?php  echo number_format($product['product_Price']); ?></span>
                 <a href="?add_to_basket?id=<?php echo $product['product_Id']; ?>" class="btn btn-success btn-block">Add to basket</a>
             </div>
         </div>
     <?php endwhile; ?>
 </div>
</body>
</html>