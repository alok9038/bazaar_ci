<style>
*:focus{
    outline: none !important;
}
</style>
           <div class="container p-0 mt-4 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 bg-white shadow-sm">
                    <li class="breadcrumb-item"><a href="<?= base_url('home/index'); ?>" class="text-dark small">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('home/category/'.$product['0']->category); ?>" class="text-dark small"><?= $product['0']->category; ?></a></li>
                    <li class="breadcrumb-item active text-truncate small" aria-current="page"><?= $product['0']->title; ?></li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/upload/'.$product['0']->image); ?>" class="w-100 img-fluid border border-muted" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="card border-0 ">
                                <div class="card-body">
                                    <h2 class="font-weight-light h3"><?= $product['0']->title; ?></h2>
                                    <div class="">
                                        <span class="badge badge-success">4.1</span>
                                        <span class="ml-5">7,021 Ratings & Reviews </span>
                                    </div>
                                    <p class="small mt-2">furniture</p>
                                    <h2 class="h6 "><del>₹ <?= $product['0']->price; ?></del> </h2>
                                    <p class=" text-success">special price</p>
                                    <h2 class="h2 text-success mt-n3">₹ <?= $product['0']->discount_price; ?></h2>
                                    <div class="delivery col-6 pl-0 mt-4">
                                        <div class="input-group pl-0">
                                            <div class="input-group-prepend pl-0">
                                                <span class="input-group-text pl-0 bg-white border-0 "><i class="fas fa-map-marker-alt mr-2"></i> Delivery</span>
                                            </div>
                                            <input type="text" placeholder=" Enter Delivery Pincode" class="border-left-0 border-top-0 border-right-0 border border-primary pincode-area">
                                            <div class="input-group-append">
                                                <a href="" class="text-primary border-5 border-bottom border-primary">check</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description mt-5">
                                        <h5 class="lead">Description</h5>
                                        <h6 class=" small text-muted"><?= $product['0']->description; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>