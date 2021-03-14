<?php
ob_start();
// Include header.php file
include ('header.php');
?>

<?php

/* Include cart items if it is not empty */

count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');

/* --x-- Include cart items if it is not empty --x-- */

/* Include wishlist items if it is not empty */

count($product->getData('wishlist')) ? include ('Template/_wishlist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');

/* --x-- Include wishlist items if it is not empty --x-- */

/* Include new phones section */

include ('Template/_new-phones.php');

/* --x-- new phones section --x-- */

?>

<?php
// Include footer.php file
include ('footer.php');
?>