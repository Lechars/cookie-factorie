<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                       <?php if (isset($_SESSION['name'])){ ?>
                            <?php echo '<a href="ajout.php?name=' . $cookie['name'] . '" class="btn btn-primary">'; ?>
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                       <?php }else{ ?>
                            <a href="login.php" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                         <?php   } ?>

                    </figcaption>
                </figure>
            </div>
            
        <?php } var_dump($_SESSION);?>
        
       
    </div>
</section>
<?php require 'inc/foot.php'; ?>
