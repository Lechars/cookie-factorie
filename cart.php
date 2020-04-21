<?php 
	  require 'inc/head.php';
	  require 'inc/data/products.php';
?>

<section class="cookies container-fluid">
    <div class="row">
        <h3>Il y a dans votre panier:</h3>
        <br>
        <?php

         echo "<h3> " . $_SESSION['Pecan nuts'] . " Pecan nuts cookies! ";

         echo "<h3> " .   $_SESSION['Chocolate chips'] . " Chocolate chips!";

         echo "<h3> " .   $_SESSION['Full chocolate cookie'] . " Full chocolate cookie!";

         echo "<h3> " .   $_SESSION['M&M\'s&copy; cookies'] . " M&M's&copy; cookies!";

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
