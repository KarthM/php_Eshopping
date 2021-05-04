<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

    /*  include cart items if it is not empty */
        count($product->getData('cart')) ? include ('carttemplate.php') :  include ('cartnotfound.php');
    /*  include cart items if it is not empty */

        /*  include top sale section */
     //   count($product->getData('wishlist')) ? include ('wishilisttemplate.php') :  include ('wishlistnotfound.php');
        /*  include top sale section */


    /*  include top sale section */
        include ('_newphone.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>