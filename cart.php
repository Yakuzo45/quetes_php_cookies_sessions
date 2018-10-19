<?php require 'inc/head.php'; ?>


<?php
session_start();
?>
<section class="cookies container-fluid">

        <?php if (empty($_SESSION['panier'])) {
            echo '<h1>Vous n\'avez rien dans le panier</h1>';
        } ?>
        <?php
        foreach ($_SESSION['panier'] as $key=>$value) {?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <img src="assets/img/product-<?php echo $key ?>.jpg" alt="cookies choclate chips" class="img-responsive">
                <figure class="thumbnail text-center">
                    <figcaption class="caption">
                        <h3><?php echo $key ?></h3>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
</section>
<?php require 'inc/foot.php'; ?>
