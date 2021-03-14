<?php
    ob_start();
    // Include header.php file
    include ('header.php');
?>

<?php

    /* Include banner area */

    include ('Template/_banner-area.php');

    /* --x-- Include banner area --x-- */

    /* Include top sale section */

    include ('Template/_top-sale.php');

    /* --x-- Include top sale section --x-- */

    /* Include special price */

    include ('Template/_special-price.php');

    /* --x-- special price --x-- */

    /* Include banner ads */

    include ('Template/_banner-ads.php');

    /* --x-- banner ads --x-- */

    /* Include new phones section */

    include ('Template/_new-phones.php');

    /* --x-- new phones section --x-- */

    /* Include blog area */

    include ('Template/_blogs.php');

    /* --x-- blog area --x-- */

?>

<?php
// Include footer.php file
include ('footer.php');
?>