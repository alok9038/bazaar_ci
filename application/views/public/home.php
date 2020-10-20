<div class="container-fluid p-0">
    <img src="<?= base_url('assets/banner.jpg'); ?>" class="w-100 img-fluid" alt="">
    <div class="card-caption container w-75">
        <div class="row">
            <?php foreach($product as $item); ?>
            <div class="col-lg-4 mb-4 w-100">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body">
                        <a href="" class="stretched-link text-info">
                            <h2 class="h5 text-dark">Mobiles and accessories | Up to 40% off</h2>
                        </a>
                    </div>
                    <div class="card-img  post-item px-4 pb-4">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Wireless/Jupiter20/OnePlus/DesktopGateway_CategoryCard_379X304._SY304_CB418738800_.jpg" class=" post-item-image w-100" alt="<?= $item->title; ?>">
                    </div>
                </div>
            </div>
        <div class="col-lg-4 mb-4 w-100">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body">
                        <a href="<?= base_url('home/category/6'); ?>" class="stretched-link text-info">
                            <h2 class="h5 text-dark">Up to 60% off | Electronics & accessories</h2>
                        </a>
                    </div>
                    <div class="card-img  post-item px-4 pb-4">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/CEPC/Jupiter/GW/Phase-1/V245274172_IN_CEPC_Electronics_GW_Graphics_Jupiter20_758X608_dbcc1x._SY304_CB418806080_.jpg" class=" post-item-image w-100" alt="">
                    </div>
                </div>
            </div>
        <div class="col-lg-4 mb-4 w-100">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body">
                        <a href="<?= base_url('home/category/'); ?>" class="stretched-link text-info">
                            <h2 class="h5 text-dark">Clothing & Fashion | up to 80% off</h2>
                        </a>
                    </div>
                    <div class="card-img  post-item px-4 pb-4">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/Launchpad/2019/FA/GW/JupiterPhase1/SL_DC_379X304._SY304_CB418845285_.jpg" class=" post-item-image w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 bg-white rounded-0 p-4 mb-5">
    <?php if(!empty($product)): ?>
    <h4 class="font-weight-light text-muted">Blockbuster Deals <span class="small float-right"><a href="" style="font-size:13px;" class=" text-muted">View all</a></span></h4>
    <div class="row mt-3">
        <?php foreach($product as $item): ?>
        <div class="col-lg-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-img bg-light post-item border-bottom border-muted">
                    <img src="<?= base_url('assets/upload/'.$item->image); ?>" class=" post-item-image w-100" alt="<?= $item->title; ?>">
                </div>
                <div class="card-body">
                    <a href="<?= base_url('home/product/').$item->id; ?>" class="stretched-link text-info">
                        <h2 class="lead text-truncate"><?= $item->title; ?></h2>
                    </a>
                    <p class="small"><?= $item->category; ?> </p>
                    <h2 class="h6 d-flex"><del class="small">₹ <?= $item->price; ?></del> <span class="ml-3 text-success"><h5>₹ <?= $item->discount_price; ?></h5></span></h2>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php  else: ?>

    <div class="row">
        <div class="col-3 mx-auto mt-5 pt-5 text-center">
            <h1>404<i class="fas fa-sad-cry"></i></h1>
            <h5 class="lead text-muted">Products Not Found</h5>
            <p class="small text-muted">Please try with another category or query</p>
        </div>
    </div>

    <?php endif;?>
</div>
