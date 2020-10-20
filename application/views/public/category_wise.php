<div class="container mt-5">
   <div class="col-lg-9">
       <?php foreach($product as $item): ?>
    <div class="row mb-4 shadow-sm">
        <div class="col-lg-4 p-4">
            <img src="<?= base_url('assets/upload/'.$item->image); ?>" class="img-fluid w-75" alt="" style="height:150px;">
        </div>
        <div class="col-lg-8">
            <h4 class="text-truncate"><?= $item->title; ?></h4>
            <small class="text-muted ">by <?= $item->brand; ?></small>
            <h6 class="text-danger mt-2"> <del>Rs. <?= $item->price; ?></del></h6>
            <h4 class="text-success"><?= $item->discount_price;?></h4>
        </div>
    </div>
   
    <?php endforeach; ?>
   </div>
   <div class="col-lg-3"></div>
</div>