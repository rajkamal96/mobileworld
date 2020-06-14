<?php
    ob_start();
//include header.php file
    include('header.php');
?>
<?php
//include cart items if it is not empty
    count($product->getData('cart')) ? include('Template/_cart-template.php'): include('Template/not found/_cart-not-found.php');
    
?>
<?php
//include wishlist-template.php file
    count($product->getData('wishlist')) ? include('Template/_wishlist-template.php'): include('Template/not found/_wishlist-not-found.php');
?>
<?php
//include new-phones.php file
    include('Template/_new-phones.php');
?>
       
<?php
//include footer.php file
    include('footer.php');
?>
  